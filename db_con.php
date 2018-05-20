<?php
if($con = mysqli_connect("127.0.0.1","root","","dbgrades"))
{
}
else{
	die("Could Not Connect bec.".mysqli_error());
}
mysqli_select_db($con, "dbgrades");
?>