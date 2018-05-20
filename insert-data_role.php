<?php

/*
Developer: EFST
*/
include('db_con_select.php');

if (isset($_POST['insert'])){
$rrole=$_POST['rrole'];
$rdesc=$_POST['rdesc'];

$stmt = $con->query("INSERT INTO tbluserrole (`intRole`,`strRoleName`, `strRoleDesc`,`strRoleStat`) VALUES (null, '$rrole','$rdesc', 'Active')");

$stmt->bindparam('$rrole', $rrole);
$stmt->bindparam('$rdesc', $rdesc);

if($stmt)
{
  $res="Data Inserted Successfully:";
  echo "<script> success:function(data) { $('#addstud')[0].reset();  
     $('#openModal').modal('hide');  
     $('#student-grid').html(data);} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:utilities_role.php");
  //include("student-grid-data.php");
}
}
else {
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addstud')[0].reset();  
     $('#openModal').modal('hide');  
     $('#student-grid').html(data);} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:utilities_role.php");
  echo json_encode($error);
}



 ?>
