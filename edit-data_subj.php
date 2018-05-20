<?php

/*
Developer: EFST
*/
//include('db_con.php');

include('db_con.php');

$strteachid=$_POST['tid'];
$strteachcode=$_POST['tcode'];
$strteachfirstname=$_POST['tfname'];
$strteachmidname=$_POST['tmname'];

$stmt = $con->query("UPDATE tblsubject SET strSubjectName = '".$strteachfirstname."', strSubjectDesc ='".$strteachmidname."' WHERE strSubjectCode = '".$strteachcode."' AND intSubject='".$strteachid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtteach')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#teachent-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_teach.php#teachent-grid");
  //include("teachent-grid-data.php");
     $strAct = 'Edited the subject '.$strteachfirstname;
     include ("insert-data_activity.php");
    activityLog($strAct);
     echo '<tr>' .
       '<tr class="editable" id="'. $_POST['tid'] .'">' .
       '<td class="editable hidden" id="tid">'. $_POST['tid'] . '</td>' .
       '<td class="editable" id="tcode">'. $_POST['tcode'] . '</td>' .
       '<td class="editable" id="tfname">'. $_POST['tfname'] . '</td>' .
       '<td class="editable" id="tmname">'. $_POST['tmname'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['tid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . '<a onclick="delRow('. $_POST['tid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete"><img src="img/disabled.png"></a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
