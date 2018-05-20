<?php

/*
Developer: EFST
*/
include('db_con_select.php');

include ('incUserID.php');
$ussid = autoincclass();
if (isset($_POST['insert'])){

$strclasscode=$_POST['strclasscode'];
$strclassname=$_POST['strclassname'];
$strclasstrac=$_POST['strclasstrac'];
$strclassdesc=$_POST['strclassdesc'];

$stmt = $con->query("INSERT INTO tblclass (`intClass`,`strClassCode`, `strClassName`, `strClassTrack`,`strClassDesc`, `strClassStat`) VALUES (null,'$ussid','$strclassname', '$strclasstrac', '$strclassdesc', 'Active')");

$stmt->bindparam('$ussid', $ussid);
$stmt->bindparam('$strclassname', $strclassname);
$stmt->bindparam('$strclasstrac', $strclasstrac);
$stmt->bindparam('$strclassdesc', $strclassdesc);

$strAct ='Added the class '.$strclasstrac.' '.$strClassName;
       include ("insert-data_activity.php");
  activityLog($strAct);
  
if($stmt)
{
  $res="Data Inserted Successfully:";
  
  echo "<script> success:function(data) { $('#addteach')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teachent-grid').html(data);} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:maintenance_class.php#class-grid");
}
}
else {
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addclass')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teacher-grid').html(data);} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:maintenance_class.php");
  echo json_encode($error);
}



 ?>
