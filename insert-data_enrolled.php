<?php

/*
Developer: EFST
*/
include('db_con_select.php');

if (isset($_POST['insert'])){
$intfkrec = $_POST['intclass'];
$studentc = $_POST['student'];


$stmt = $con->query("INSERT INTO tbldetailrecord (`intdetail`, `intfkRecord`,`strfkStudent`, `intMidterm`, `intFinal`, `decFinalGrade`, `strReqRemarks`)  VALUES (null,'$intfkrec', '$studentc',null,null,null,null);");

$stmt->bindparam('$intfkrec', $intfkrec);
$stmt->bindparam('$studentc', $studentc);

if($stmt)
{
	$strAct ='Enrolled the student '.$studentc.'';
    include ("insert-data_activity.php");
  	activityLog($strAct);
  $res="Data Inserted Successfully:";
  echo "<script> success:function(data) { $('#enrollstud')[0].reset();} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:admin_enrollment.php");
}
else
{
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#enrollstud')[0].reset();} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:admin_enrollment.php");
  echo json_encode($error);
}

}

 ?>
