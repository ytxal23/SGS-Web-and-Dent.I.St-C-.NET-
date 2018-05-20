<?php
require 'db_con.php';
session_id('mySess');
session_start();

if(isset($_POST['submit'])){
  $user = $_POST['username'];
  $pwd = $_POST['password'];
  //echo $pwd . $user;
  $query = mysqli_query($con, "SELECT * from tblUser WHERE strUserName='$user' AND strPassword='$pwd';");
  $query1 = mysqli_query($con, "SELECT ro.strRoleName FROM tbluserrole ro, tbluser us WHERE us.intfkRole = ro.intRole AND us.strUserName='$user' AND us.strPassword='$pwd';");
  $num = mysqli_num_rows($query);
  $row = mysqli_fetch_array($query);
  $row1 = mysqli_fetch_array($query1);
  $intUserID;
  //echo $num;

  //$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
  
  if($num>0){
    isset($_SESSION['user'])? $_SESSION['user']:"";
    isset($_SESSION['pwd'])? $_SESSION['pwd']:"";
    
    $_SESSION['user'] = $row['strUserName'];
    $_SESSION['pwd'] = $row['strPassword'];
    $intUserID = $row['intUserID'];
    date_default_timezone_set('Asia/Manila');
    $dtmDateLog = date("Y-m-d");
    $timeIn = date("h:i a");
    $qry=mysqli_query($con, "INSERT INTO tbllog (`intLog`, `intfkAccountID`, `dtmDateLog`, `timeLogin`, `timeLogout`) VALUES (null,'$intUserID','$dtmDateLog','$timeIn','present')");
    $queryLog = mysqli_query($con, "SELECT intLog FROM tblLog WHERE intfkAccountID = '$intUserID' AND timeLogin = '$timeIn' LIMIT 1;");
    $rowLog = mysqli_fetch_array($queryLog);
    $_SESSION['logid'] = $rowLog['intLog'];
    
    if($_SESSION['user'] == $row['strUserName'] && $_SESSION['pwd'] == $row['strPassword']){

        $user =  $row['strUserName'];
        $_SESSION['user'] = $user;

        if($row1['strRoleName'] == 'Administrator')
        {
           $role =  $row1['strRoleName'];
        $_SESSION['role'] = $role;
      echo '<script type="text/javascript">
           window.location = "home-Admin.php"
      </script>';
        //header("location:samplehome.php");
      }
      elseif($row1['strRoleName'] == 'Teacher')
      {
        $role =  $row1['strRoleName'];
        $_SESSION['role'] = $role;
        echo '<script type="text/javascript">
           window.location = "home-Faculty.php"
      </script>';
        //header("location:samplehome2.php");
      }  
      elseif($row1['strRoleName'] == 'Student')
      {
        $role =  $row1['strRoleName'];
        $_SESSION['role'] = $role;
        echo '<script type="text/javascript">
           window.location = "home-Student.php"
      </script>';
        //header("location:layout.php");
      }
    }
     else
    {
      header("location:login.php");
    }
}
}
  //session_destroy();
?>