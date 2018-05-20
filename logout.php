<?php
session_start();
$log = $_SESSION['logid'];
echo "<script> alert(".$log."); </script>"; 
date_default_timezone_set('Asia/Manila');
$timeout = date("h:i a"); 
include('db_con.php');
$qry=mysqli_query($con, "UPDATE `tbllog` SET `timeLogout`='$timeout' WHERE `intLog`='$log';");

if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>