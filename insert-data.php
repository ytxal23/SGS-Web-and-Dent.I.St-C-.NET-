<?php
include('stud_name_check.php');
/*
Developer: EFST
*/
include('db_con_select.php');
  echo '<script language="javascript"> alert 
</script>';
include ('incUserID.php');
$ussid = autoincuser();
if (isset($_POST['insert'])){

$strstudfirstname=$_POST['strstudfirstname'];
$strstudmidname=$_POST['strstudmidname'];
$strstudlastname=$_POST['strstudlastname'];
$strstudcontact=$_POST['strstudcontact'];
$strstudmail=$_POST['strstudmail'];
$strstudbday = $_POST['strstudbday'];
$strstudgender = $_POST['strstudgender'];
$strstuddate = $_POST['time'];


$stmt = $con->query("START TRANSACTION;
  INSERT INTO tbluser (`intUserID`,`strUserName`,`strPassword`,`intfkRole`)  VALUES (null,'$ussid', '123', '3');
  INSERT INTO tblstudent (`intStudent`,`strStudCode`, `strStudFirstName`,`strStudMidName`,`strStudLastName`,`strStudContact`,`strStudMail`,`dtmStudBirth`,`strStudGender`,`dtmStudRegi`, `strStudStat`) VALUES (null, '$ussid','$strstudfirstname','$strstudmidname','$strstudlastname','$strstudcontact','$strstudmail', '$strstudbday', '$strstudgender', '$strstuddate', 'Active'); COMMIT;");

$stmt->bindparam('$ussid', $ussid);
$stmt->bindparam('$strstudfirstname', $strstudfirstname);
$stmt->bindparam('$strstudmidname', $strstudmidname);
$stmt->bindparam('$strstudlastname', $strstudlastname);
$stmt->bindparam('$strstudcontact', $strstudcontact);
$stmt->bindparam('$strstudmail', $strstudmail);
$stmt->bindparam('$strstudbday', $strstudbday);
$stmt->bindparam('$strstudgender', $strstudgender);
$stmt->bindparam('$strstuddate', $strstuddate);
if($stmt)
{
  $res="Data Inserted Successfully:";
  $res="Data Inserted Successfully:";
  $strAct ='Added the student '.$strstudfirstname.' '.$strstudmidname.' '.$strstudlastname;
       include ("insert-data_activity.php");
  activityLog($strAct);
  echo "<script> success:function(data) { $('#addstud')[0].reset();  
     $('#openModal').modal('hide');  
     $('#student-grid').html(data);} </script>";
  echo "<script> alert(".$res."); </script>";
  header("location:maintenance_stud.php#student-grid");
  //include("student-grid-data.php");
}
}
else {
  $error="Not Inserted, Some Problem occur.";
  echo "<script> success:function(data) { $('#addstud')[0].reset();  
     $('#openModal').modal('hide');  
     $('#student-grid').html(data);} 
     </script> <script> alert('No Data Inserted!'); </script>";

  header("location:maintenance_stud.php");
  echo "<script> alert('".$error."'); </script>";
  //echo json_encode($error);
}



 ?>
