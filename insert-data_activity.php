<?php

/*
Developer: EFST
*/

function activityLog($strActivity){
  session_start();
  include('db_con_select.php');
  date_default_timezone_set('Asia/Manila');
  $strlogcode=$_SESSION['logid'];
  $timeAct = date("H:i a");

  $stmt = $con->query("INSERT INTO tblactivity (`intfkLog`,`strActivity`, `timeHappen`) VALUES ('$strlogcode','$strActivity', '$timeAct')");

  $stmt->bindparam('$strlogcode', $strlogcode);
  $stmt->bindparam('$strActivity', $strActivity);
  $stmt->bindparam('$timeAct', $timeAct);

    if($stmt)
      {
    $res="Data Inserted Successfully:";
    }else{
      echo("Not Successful!");
    }
  }
 ?>
