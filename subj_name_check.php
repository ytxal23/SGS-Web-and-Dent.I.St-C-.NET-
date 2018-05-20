<?php 
  include('db_con_select.php');
  include('incUserID.php');
  $ussid = autoincsubj();
  if (isset($_POST['insert'])) {
$strsubjname=$_POST['strsubjname'];
$strsubjdesc=$_POST['strsubjdesc'];

    $sql_u ="SELECT * FROM tblsubject WHERE strSubjectName ='$strsubjname'";
    $res_u = $con->query($sql_u);
    $n_row = $res_u->rowCount();


    if($n_row > 0)
    {
      $name_error = "Sorry... subject already exists";
      echo "<script> alert('".$name_error."'); window.location='maintenance_subj.php#openModal'; </script>";
    }
    else
    {
      $stmt=$con->prepare("INSERT INTO tblsubject (`intSubject`,`strSubjectCode`, `strSubjectName`,`strSubjectDesc`, `strSubjectStat`) VALUES (null,'$ussid','$strsubjname','$strsubjdesc', 'Active')");

      $stmt->bindparam('$ussid', $ussid);
      $stmt->bindparam('$strsubjname', $strsubjname);
      $stmt->bindparam('$strsubjdesc', $strsubjdesc);

      if ($stmt->execute()) {
    echo "<script> alert('Saved record successfully'); window.location='maintenance_subj.php#subjgrid'; </script>";
      }
      else
      {
         echo "<script> alert('Record not saved. Please Try Again'); window.location='maintenance_subj.php#openModal'; </script>";
      }
    }
    }
?>