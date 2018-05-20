<?php 
  include('db_con_select.php');
  include('incUserID.php');
  $ussid = autoincuser();
  if (isset($_POST['insert'])) {
$strstudfirstname=$_POST['strstudfirstname'];
$strstudmidname=$_POST['strstudmidname'];
$strstudlastname=$_POST['strstudlastname'];
$strstudcontact=$_POST['strstudcontact'];
$strstudmail=$_POST['strstudmail'];
$strstudbday = $_POST['strstudbday'];
$strstudgender = $_POST['strstudgender'];
$strstuddate = $_POST['time'];

$studentname=  $strstudfirstname . ' ' . $strstudmidname . ' ' . $strstudlastname;

    $sql_u ="SELECT * FROM tblstudent WHERE CONCAT(strStudFirstName, ' ', strStudMidName, ' ', strStudLastName) ='$studentname'";
    $res_u = $con->query($sql_u);
    $n_row = $res_u->rowCount();


    if($n_row > 0)
    {
      $name_error = "Sorry... student already exists";
      echo "<script> alert('".$name_error."'); window.location='maintenance_stud.php#openModal'; </script>";
    }
    else
    {
      $stmt=$con->prepare("START TRANSACTION;
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

      if ($stmt->execute()) {
    echo "<script> alert('Saved record successfully'); window.location='maintenance_stud.php#student-grid'; </script>";
      }
      else
      {
         echo "<script> alert('Record not saved. Please Try Again'); window.location='maintenance_stud.php#openModal'; </script>";
      }
    }
    }
?>