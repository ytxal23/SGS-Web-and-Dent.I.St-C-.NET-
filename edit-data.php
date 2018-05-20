<?php

/*
Developer: EFST
*/
include('db_con_select.php');

$strstudid=$_POST['sid'];
$strstudcode=$_POST['scode'];
$strstudfirstname=$_POST['sfname'];
$strstudmidname=$_POST['smname'];
$strstudlastname=$_POST['slname'];
$strstudcontact=$_POST['scontact'];
$strstudmail=$_POST['smail'];
$strstudbday = $_POST['sbirth'];
$strstudgender = $_POST['sgender'];
$strstuddate = $_POST['sregi'];
$strstudstat = $_POST['sstat'];

$stmt = $con->query("UPDATE tblstudent SET strStudFirstName = '".$strstudfirstname."', strStudMidName ='".$strstudmidname."', strStudLastName = '".$strstudlastname."', strStudContact = '".$strstudcontact."',strStudMail = '".$strstudmail."', dtmStudBirth = '".$strstudbday."', strStudGender = '".$strstudgender."',dtmStudRegi = '".$strstuddate."', strStudStat = '".$strstudstat."' WHERE strStudCode = '".$strstudcode."' AND intStudent='".$strstudid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtstud')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#student-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_stud.php#student-grid");
  //include("student-grid-data.php");
     echo '<tr>' .
       '<tr class="editable" id="'. $_POST['sid'] .'">' .
       '<td class="editable hidden" id="sid">'. $_POST['sid'] . '</td>' .
       '<td class="editable" id="scode">'. $_POST['scode'] . '</td>' .
       '<td class="editable" id="sfname">'. $_POST['sfname'] . '</td>' .
       '<td class="editable" id="smname">'. $_POST['smname'] . '</td>' .
       '<td class="editable" id="slname">'. $_POST['slname'] . '</td>' .
       '<td class="editable" id="scontact">'. $_POST['scontact'] . '</td>' .
       '<td class="editable" id="sbirth">'. $_POST['sbirth'] . '</td>' .
       '<td class="editable" id="sgender">'. $_POST['sgender'] . '</td>' .
       '<td class="editable" id="smail">'. $_POST['smail'] . '</td>' .
       //'<td class="editable" id="saddress">'. $_POST['saddress'] . '</td>' .
       '<td class="editable" id="sregi">'. $_POST['sregi'] . '</td>' .
       '<td class="editable" id="sstat">'. $_POST['sstat'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['sid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . '<a onclick="delRow('. $_POST['sid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete"><img src="img/disabled.png"></a></td>' .
       '</tr>';

       $strAct ='Edited the student '.$_POST['scode'];
       include ("insert-data_activity.php");
    activityLog($strAct);
}
else
{
	echo 'Nothing found';
}




 ?>
