<?php

/*
Developer: EFST
*/
include('db_con_select.php');

include ('incUserID.php');
$ussid = autoincsubj();
if (isset($_POST['insert'])){
$strsubjname=$_POST['strsubjname'];
$strsubjdesc=$_POST['strsubjdesc'];

$stmt = $con->query("INSERT INTO tblsubject (`intSubject`,`strSubjectCode`, `strSubjectName`,`strSubjectDesc`, `strSubjectStat`) VALUES (null,'$ussid','$strsubjname','$strsubjdesc', 'Active')");

$stmt->bindparam('$ussid', $ussid);
$stmt->bindparam('$strsubjname', $strsubjname);
$stmt->bindparam('$strsubjdesc', $strsubjdesc);
if($stmt)
{
  $res="Data Inserted Successfully:";
  echo "<script> success:function(data) { $('#addclass')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teachent-grid').html(data);} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:maintenance_subj.php#subjgrid");
}
}
else {
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addteach')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teacher-grid').html(data);} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:maintenance_subj.php");
  echo json_encode($error);
}



 ?>
