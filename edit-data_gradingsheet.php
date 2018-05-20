<?php

/*
Developer: EFST
*/
//include('db_con.php');

include('db_con.php');

$tgid=$_POST['tgid'];
$tdetail=$_POST['tdetail'];
$tstudno=$_POST['tstudno'];
$tstudname=$_POST['tstudname'];
$tmidterm=$_POST['tmidterm'];
$tfinal=$_POST['tfinal'];
$tfinalgrade=$_POST['tfinalgrade'];
$tremarks=$_POST['tremarks'];


$stmt = $con->query("UPDATE tbldetailrecord SET strfkStudent = '".$tstudno."', intMidterm ='".$tmidterm."', intFinal = '".$tfinal."',decFinalGrade = '".$tfinalgrade."', strReqRemarks = '".$tremarks."' WHERE strfkStudent = '".$tstudno."';");

if($stmt)
{
     /*include('db_con_select.php');
	     $stat = "Active";
		$result = $con->query("SELECT CONCAT(stud.strStudFirstName,' ',stud.strStudMidName,' ',stud.strStudLastName) AS 'Students' FROM tbldetailrecord dtl INNER JOIN tblstudent stud 	ON dtl.strfkStudent=stud.strStudCode AND dtl.intfkrecord = '".$tgid."' AND stud.strStudStat = '".$stat."';");*/

		  //while($row = $result->fetch())
    $strAct = $tstudname.' was graded';
    include ("insert-data_activity.php");
    activityLog($strAct);

     echo '<tr>' .
       '<tr class="editable" id="'. $_POST['tgid'] .'">' .
       '<td class="editable hidden" id="tgid">'. $_POST['tgid'] . '</td>' .
       '<td class="editable hidden" id="tdetail">'. $_POST['tdetail'] . '</td>' .
       '<td class="editable" id="tstudno">'. $_POST['tstudno'] . '</td>' .
       '<td class="editable" id="tstudname">'. $_POST['tstudname'] . '</td>' .
       '<td><input type="number" id="tmidterm" min=1 max=100 disabled="disabled" value= "'. $_POST['tmidterm'] . '"/></td>' .
       '<td><input type="number" id="tmidterm" min=1 max=100 disabled="disabled" value= "'. $_POST['tfinal'] . '"/></td>' .
       '<td class="editable" id="tfinalgrade">'. $_POST['tfinalgrade'] . '</td>' .
       '<td class="editable" id="tremarks">'. $_POST['tremarks'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['tgid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a></td>' .
       '</tr>';

       
}
else
{
	echo 'Nothing found';
}




 ?>
