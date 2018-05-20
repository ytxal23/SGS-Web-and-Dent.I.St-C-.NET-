<?php

/*
Developer: EFST
*/
//include('db_con.php');

include('db_con_select.php');

$strclassid=$_POST['tid'];
$strclasscode=$_POST['tcode'];
$strclassname=$_POST['tfname'];
$strclassdesc=$_POST['tmname'];
$strclassstat=$_POST['tlname'];
$strclasstrac=$_POST['ttrack'];

$stmt = $con->query("UPDATE tblclass SET strClassName = '".$strclassname."', strClassTrack = '".$strclasstrac."', strClassDesc ='".$strclassdesc."', strClassStat ='".$strclassstat."' WHERE strClassCode = '".$strclasscode."' AND intClass='".$strclassid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtteach')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#teachent-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_teach.php#teachent-grid");
  //include("teachent-grid-data.php");
     $strAct = 'Edited the class '.$strclasstrac.' '.$strclassname;
    include ("insert-data_activity.php");
    activityLog($strAct);
     echo '<tr>' .
       '<tr class="editable" id="'. $_POST['tid'] .'">' .
       '<td class="editable hidden" id="tid">'. $_POST['tid'] . '</td>' .
       '<td class="editable hidden" id="tcode">'. $_POST['tcode'] . '</td>' .
       '<td class="editable" id="tfname">'. $_POST['tfname'] . '</td>' .
       '<td class="editable" id="ttrack">'. $_POST['ttrack'] . '</td>' .
       '<td class="editable" id="tmname">'. $_POST['tmname'] . '</td>' .
       '<td class="editable" id="tlname">'. $_POST['tlname'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['tid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . '<a onclick="delRow('. $_POST['tid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete"><img src="img/disabled.png"></a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
