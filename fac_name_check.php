<?php 
  include('db_con_select.php');
  include('incUserID.php');
  $ussid = autoincteachuser();
  if (isset($_POST['insert'])) {
$strteachfirstname=$_POST['strteachfirstname'];
$strteachmidname=$_POST['strteachmidname'];
$strteachlastname=$_POST['strteachlastname'];
$strteachmail=$_POST['strteachmail'];
$strteachbday = $_POST['strteachbday'];
$strteachgender = $_POST['strteachgender'];

$teachname=  $strteachfirstname . ' ' . $strteachmidname . ' ' . $strteachlastname;

    $sql_u ="SELECT * FROM tblteacher WHERE CONCAT(strTeacherFirstName, ' ', strTeacherMidName, ' ', strTeacherLastName) ='$teachname'";
    $res_u = $con->query($sql_u);
    $n_row = $res_u->rowCount();


    if($n_row > 0)
    {
      $name_error = "Sorry... teacher already exists";
      echo "<script> alert('".$name_error."'); window.location='maintenance_faculty.php#openModal'; </script>";
    }
    else
    {
      $stmt=$con->prepare("START TRANSACTION;
  INSERT INTO tbluser (`intUserID`,`strUserName`,`strPassword`,`intfkRole`)  VALUES (null,'$ussid', '123', '2');
  INSERT INTO tblteacher (`intTeacher`,`strTeacherID`, `strTeacherFirstName`,`strTeacherMidName`,`strTeacherLastName`,`strTeacherMail`,`dtmTeacherBirth`,`strTeacherGender`, `strTeacherStatus`) VALUES (null, '$ussid','$strteachfirstname','$strteachmidname','$strteachlastname','$strteachmail', '$strteachbday', '$strteachgender', 'Active');
  COMMIT;");

      $stmt->bindparam('$ussid', $ussid);
      $stmt->bindparam('$strteachfirstname', $strteachfirstname);
      $stmt->bindparam('$strteachmidname', $strteachmidname);
      $stmt->bindparam('$strteachlastname', $strteachlastname);
      $stmt->bindparam('$strteachmail', $strteachmail);
      $stmt->bindparam('$strteachbday', $strteachbday);
      $stmt->bindparam('$strteachgender', $strteachgender);
      if ($stmt->execute()) {
    echo "<script> alert('Saved record successfully'); window.location='maintenance_faculty.php#teacher-grid'; </script>";
      }
      else
      {
         echo "<script> alert('Record not saved. Please Try Again'); window.location='maintenance_faculty.php#openModal'; </script>";
      }
    }
  }
?>