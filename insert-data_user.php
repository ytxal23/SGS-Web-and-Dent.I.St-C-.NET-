<?php

/*
Developer: EFST
*/
include('db_con_select.php');

if (isset($_POST['insert'])){
$username = $_POST['username'];
$userrole = $_POST['userrole'];
$firstname = $_POST['firstname'];
$midname = $_POST['midname'];
$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];
$gender = $_POST['gender'];

if($userrole == '2')
{
$stmt = $con->prepare("
START TRANSACTION;
  INSERT INTO tbluser (`intUserID`,`strUserName`,`strPassword`,`intfkRole`)  VALUES (null,'$username', '$password', '$userrole');
  INSERT INTO tblteacher (`intTeacher`,`strTeacherCode`, `strTeacherFirstName`,`strTeacherMidName`,`strTeacherLastName`,`dtmTeacherBirth`,`strTeacherGender`) VALUES (null, '$username','$firstname','$midname','$lastname','$birthday', '$gender');
  COMMIT;
  ");

$stmt->bindparam('$username', $username);
$stmt->bindparam('$password', $password);
$stmt->bindparam('$userrole', $userrole);
$stmt->bindparam('$firstname', $firstname);
$stmt->bindparam('$midname', $midname);
$stmt->bindparam('$lastname', $lastname);
$stmt->bindparam('$birthday', $birthday);
$stmt->bindparam('$gender', $gender);

if($stmt->execute())
{
  $res="Data Inserted Successfully:";
  echo "<script> success:function(data) { $('#addteach')[0].reset();} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:login.php");
}
else
{
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addteach')[0].reset();} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:registration.php");
  echo json_encode($error);
}

}
elseif($userrole == '3')
{
$stmt = $con->prepare("
START TRANSACTION;
  INSERT INTO tbluser (`intUserID`,`strUserName`,`strPassword`,`intfkRole`)  VALUES (null,'$username', '$password', '$userrole');
  INSERT INTO tblstudent (`intStudent`,`strStudCode`, `strStudFirstName`,`strStudMidName`,`strStudLastName`,`dtmStudBirth`,`strStudGender`, `strStudStat`) VALUES (null, '$username','$firstname','$midname','$lastname','$birthday', '$gender', 'Active');
  COMMIT;
  ");

$stmt->bindparam('$username', $username);
$stmt->bindparam('$password', $password);
$stmt->bindparam('$userrole', $userrole);
$stmt->bindparam('$username', $username);
$stmt->bindparam('$firstname', $firstname);
$stmt->bindparam('$midname', $midname);
$stmt->bindparam('$lastname', $lastname);
$stmt->bindparam('$birthday', $birthday);
$stmt->bindparam('$gender', $gender);

if($stmt->execute())
{
  $res="Data Inserted Successfully:";
  echo "<script> success:function(data) { $('#addteach')[0].reset();} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:login.php");
}
else
{
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addteach')[0].reset();} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:registration.php");
  echo json_encode($error);
}

}


}
 ?>
