<?php 
  include('db_con_select.php');
  include('incUserID.php');
  $ussid = autoincclass();
  if (isset($_POST['insert'])) {
$strclassname=$_POST['strclassname'];
$strclasstrac=$_POST['strclasstrac'];
$strclassdesc=$_POST['strclassdesc'];

$classsect= $strclasstrac . ' ' . $strclassname;

    $sql_u ="SELECT * FROM tblclass WHERE CONCAT(strClassTrack, ' ', strClassName) ='$classsect'";
    $res_u = $con->query($sql_u);
    $n_row = $res_u->rowCount();


    if($n_row > 0)
    {
      $name_error = "Sorry... class already exists";
      echo "<script> alert('".$name_error."'); window.location='maintenance_class.php#openModal'; </script>";
    }
    else
    {
      $stmt=$con->prepare("INSERT INTO tblclass (`intClass`,`strClassCode`, `strClassName`, `strClassTrack`,`strClassDesc`, `strClassStat`) VALUES (null,'$ussid','$strclassname', '$strclasstrac', '$strclassdesc', 'Active')");

      $stmt->bindparam('$ussid', $ussid);
      $stmt->bindparam('$strclassname', $strclassname);
      $stmt->bindparam('$strclasstrac', $strclasstrac);
      $stmt->bindparam('$strclassdesc', $strclassdesc);

      if ($stmt->execute()) {
    echo "<script> alert('Saved record successfully'); window.location='maintenance_class.php#classgrid'; </script>";
      }
      else
      {
         echo "<script> alert('Record not saved. Please Try Again'); window.location='maintenance_class.php#openModal'; </script>";
      }
    }
    }
?>