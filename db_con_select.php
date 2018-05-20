<?php  
/** 
 * Created by leslie 
 
$con=mysqli_connect("localhost","root","");  
mysqli_select_db($con,"dbgrades");  
*/

//Ellen

$DB_host = "127.0.0.1";
$DB_user = "root";
$DB_pass = "";
$DB_name = "dbgrades";
 
 try
 {
     $con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }
?>  