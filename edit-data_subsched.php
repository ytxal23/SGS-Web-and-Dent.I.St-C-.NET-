<?php

/*
Developer: EFST
*/
//include('db_con.php');

include('db_con.php');

$strteachid=$_POST['row_id'];
$strteachcode=$_POST['timefr'];
$strteachfirstname=$_POST['timeto'];

$stmt = $con->query("UPDATE tblsubsched SET dtmTimeFr = '".$strteachcode."', dtmTimeTo ='".$strteachfirstname."' WHERE intSchedID = '".$strteachid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtteach')[0].reset q();  
     $('#openModalEdt').modal('hide');  
     $('#teachent-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_teach.php#teachent-grid");
  //include("teachent-grid-data.php");
     $strAct = 'Edited the schedule of record number '.$strteachid;
     include ("insert-data_activity.php");
    activityLog($strAct);
     echo '<tr>' .
       '<tr class="editable" id="'. $_POST['row_id'] .'">' .
       '<td class="editable" id="tsname">'. $_POST['tsname'] . '</td>' .
       '<td class="editable" id="timefr">'. $_POST['timefr'] . '</td>' .
       '<td class="editable" id="timeto">'. $_POST['timeto'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['row_id'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . '/<a onclick="delRow('. $_POST['row_id'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete"><img src="img/disabled.png"></a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
