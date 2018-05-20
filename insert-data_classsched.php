<?php

/*
Developer: EFST
*/
include('db_con_select.php');

if (isset($_POST['insert'])){
$cclass=$_POST['cclass'];  
$teacher=$_POST['dtea'];
$sched=$_POST['sched'];

$stmt = $con->query("INSERT INTO tblheaderrecord (`intHeaderRecordID`, `strfkTeacher`, `strfkClass`,`intfkSubschedSubj`,`strSemester`, `strYear`) VALUES (null,'$teacher','$cclass','$sched', null, null)");

$stmt->bindparam('$cclass', $cclass);
$stmt->bindparam('$teacher', $teacher);
$stmt->bindparam('$sched', $sched);
if($stmt)
{
  $res="Data Inserted Successfully:";
  $strAct ='Set the schedule for '.$teacher.' and '.$cclass;
       include ("insert-data_activity.php");
  activityLog($strAct);
  echo "<script> success:function(data) { $('#addclass')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teachent-grid').html(data);} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:admin_class.php");
}
}
else {
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addteach')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teacher-grid').html(data);} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:admin_class.php");
  echo json_encode($error);
}



 ?>