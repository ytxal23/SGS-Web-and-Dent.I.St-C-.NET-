<?php

/*
Developer: EFST
*/
include('db_con_select.php');

if (isset($_POST['insert'])){
$strusername=$_POST['username'];
$strpassword=$_POST['password'];

$stmt = $con->query("INSERT INTO tbluser (`intUserID`,`strUserName`, `intfkRole`) VALUES (null, '$username','$password');");

$stmt->bindparam('$strusername', $strusername);
$stmt->bindparam('$strpassword', $strpassword);

if($stmt)
{
  $res="Data Inserted Successfully:";
    header("location:index.php");
  //include("student-grid-data.php");
}
}
else { 

  header("location:register.php");
}



 ?>
