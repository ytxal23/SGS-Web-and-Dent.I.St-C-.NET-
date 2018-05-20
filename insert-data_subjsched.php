<?php

/*
Developer: EFST
*/
//include('db_con_select.php');
$dbc = mysqli_connect('localhost', 'root', '', 'dbgrades') or die('Error connecting to MySQL server');

if (isset($_POST['insert'])){
$strsub=$_POST['subj'];
$strday=$_POST['optionday'];

for($i=0;$i<sizeof($strday);$i++)
{

if($strday[$i]=="Monday")
{
$timefr=$_POST['frmon'];
$timeto=$_POST['tomon'];
$check=mysqli_query($dbc,"SELECT * FROM tblsubsched WHERE intfkSubject='$strsub' AND intfkDay='1' AND dtmTimeFr='$timefr' AND dtmTimeTo='$timeto';");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    $message = 'There is already an existing record!';
    echo "<script> alert('".$message."'); $('#warnMon').removeClass('hidden'); </script>";
mysqli_close();
   } else {
$query = "INSERT IGNORE INTO tblsubsched (`intSchedID`, `intfkSubject`,`intfkDay`, `dtmTimeFr`, `dtmTimeTo`)  VALUES (null,'$strsub', '1','$timefr','$timeto');";
$result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    header('Location:admin_subject.php');
}
elseif($strday[$i]=="Tuesday")
{
$timefr=$_POST['frtue'];
$timeto=$_POST['totue'];
$check=mysqli_query($dbc,"SELECT * FROM tblsubsched WHERE intfkSubject='$strsub' AND intfkDay='2' AND dtmTimeFr='$timefr' AND dtmTimeTo='$timeto';");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      header('Location:admin_subject.php');
      $message = 'There is already an existing record!';
echo "<script> //not showing me this
alert('$message');</script>";
mysqli_close();
   } else {

$query = "INSERT IGNORE INTO tblsubsched (`intSchedID`, `intfkSubject`,`intfkDay`, `dtmTimeFr`, `dtmTimeTo`)  VALUES (null,'$strsub', '2','$timefr','$timeto');";
$result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    header('Location:admin_subject.php');
}
elseif($strday[$i]=="Wednesday")
{
$timefr=$_POST['frwed'];
$timeto=$_POST['towed'];
$check=mysqli_query($dbc,"SELECT * FROM tblsubsched WHERE intfkSubject='$strsub' AND intfkDay='3' AND dtmTimeFr='$timefr' AND dtmTimeTo='$timeto';");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      header('Location:admin_subject.php');
      $message = 'There is already an existing record!';
echo "<script> //not showing me this
alert('$message');</script>";
mysqli_close();
   } else {

$query = "INSERT IGNORE INTO tblsubsched (`intSchedID`, `intfkSubject`,`intfkDay`, `dtmTimeFr`, `dtmTimeTo`)  VALUES (null,'$strsub', '3','$timefr','$timeto');";
$result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    header('Location:admin_subject.php');
}
elseif($strday[$i]=="Thursday")
{
$timefr=$_POST['frthu'];
$timeto=$_POST['tothu'];

$check=mysqli_query($dbc,"SELECT * FROM tblsubsched WHERE intfkSubject='$strsub' AND intfkDay='4' AND dtmTimeFr='$timefr' AND dtmTimeTo='$timeto';");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      header('Location:admin_subject.php');
      $message = 'There is already an existing record!';
echo "<script> //not showing me this
alert('$message');</script>";
mysqli_close();
   } else {

$query = "INSERT IGNORE INTO tblsubsched (`intSchedID`, `intfkSubject`,`intfkDay`, `dtmTimeFr`, `dtmTimeTo`)  VALUES (null,'$strsub', '4','$timefr','$timeto');";
$result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    header('Location:admin_subject.php');
}
elseif($strday[$i]=="Friday")
{
$timefr=$_POST['frfri'];
$timeto=$_POST['tofri'];

$check=mysqli_query($dbc,"SELECT * FROM tblsubsched WHERE intfkSubject='$strsub' AND intfkDay='5' AND dtmTimeFr='$timefr' AND dtmTimeTo='$timeto';");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      header('Location:admin_subject.php');
      $message = 'There is already an existing record!';
echo "<script> //not showing me this
alert('$message');</script>";
mysqli_close();
   } else {

$query = "INSERT IGNORE INTO tblsubsched (`intSchedID`, `intfkSubject`,`intfkDay`, `dtmTimeFr`, `dtmTimeTo`)  VALUES (null,'$strsub', '5','$timefr','$timeto');";
$result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    header('Location:admin_subject.php');
}
elseif($strday[$i]=="Saturday")
{
$timefr=$_POST['frsat'];
$timeto=$_POST['tosat'];

$check=mysqli_query($dbc,"SELECT * FROM tblsubsched WHERE intfkSubject='$strsub' AND intfkDay='6' AND dtmTimeFr='$timefr' AND dtmTimeTo='$timeto';");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      header('Location:admin_subject.php');
      $message = 'There is already an existing record!';
echo "<script> //not showing me this
alert('$message');</script>";
mysqli_close();
   } else {

$query = "INSERT IGNORE INTO tblsubsched (`intSchedID`, `intfkSubject`,`intfkDay`, `dtmTimeFr`, `dtmTimeTo`)  VALUES (null,'$strsub', '6','$timefr','$timeto');";
$result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    header('Location:admin_subject.php');
}

if($stmt->execute())
{
  header("location:admin_subject.php");
}
else
{
  $error="Not Inserted, Some Problem occur.";
  header("location:admin_subject.php");
}
}
}
 ?>
