<?php

/*
Developer: EFST
*/
include('db_con_select.php');

include ('incUserID.php');
$ussid = autoincteachuser();
if (isset($_POST['insert'])){

$strteachfirstname=$_POST['strteachfirstname'];
$strteachmidname=$_POST['strteachmidname'];
$strteachlastname=$_POST['strteachlastname'];
//$strteachcontact=$_POST['strteachcontact'];
$strteachmail=$_POST['strteachmail'];
$strteachbday = $_POST['strteachbday'];
$strteachgender = $_POST['strteachgender'];
//$strteachaddress = $_POST['strteachaddress'];

//$stmt = $con->prepare("INSERT INTO tblteacher (`strTeacherID`, `strTeacherFirstName`,`strTeacherMidName`,`strTeacherLastName`,`strTeacherContact`,`strTeacherMail`,`dtmTeacherBirth`,`strTeacherGender`,`strTeacherAddress`, `strTeacherStatus`) VALUES (null,'$strteachfirstname','$strteachmidname','$strteachlastname','$strteachcontact','$strteachmail', '$strteachbday', '$strteachgender', '$strteachaddress', 'Active')");

$stmt = $con->prepare("START TRANSACTION;
  INSERT INTO tbluser (`intUserID`,`strUserName`,`strPassword`,`intfkRole`)  VALUES (null,'$ussid', '123', '2');
  INSERT INTO tblteacher (`intTeacher`,`strTeacherID`, `strTeacherFirstName`,`strTeacherMidName`,`strTeacherLastName`,`strTeacherMail`,`dtmTeacherBirth`,`strTeacherGender`, `strTeacherStatus`) VALUES (null, '$ussid','$strteachfirstname','$strteachmidname','$strteachlastname','$strteachmail', '$strteachbday', '$strteachgender', 'Active');
  COMMIT;");

$stmt->bindparam('$ussid', $ussid);
$stmt->bindparam('$strteachfirstname', $strteachfirstname);
$stmt->bindparam('$strteachmidname', $strteachmidname);
$stmt->bindparam('$strteachlastname', $strteachlastname);
//$stmt->bindparam('$strteachcontact', $strteachcontact);
$stmt->bindparam('$strteachmail', $strteachmail);
$stmt->bindparam('$strteachbday', $strteachbday);
$stmt->bindparam('$strteachgender', $strteachgender);
//$stmt->bindparam('$strteachaddress', $strteachaddress);
if($stmt->execute())
{
  $res="Data Inserted Successfully:";
  $strAct =$strteachfirstname.' '.$strteachmidname.' '.$strteachlastname.' was added to the faculty';
  include ("insert-data_activity.php");
  activityLog($strAct);
  echo "<script> success:function(data) { $('#addteach')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teachent-grid').html(data);} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:maintenance_faculty.php#teacher-grid");
}
}
else {
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addteach')[0].reset();  
     $('#openModal').modal('hide');  
     $('#teacher-grid').html(data);} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:maintenance_faculty.php");
  echo json_encode($error);
}



 ?>
