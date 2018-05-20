<?php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
// 
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
////// Your Database Details here /////////
////////////////////////////
require "db_con_select.php"; // Database Connection 
///////////////////////////
//////////////////////////////// Main Code sarts /////////////////////////////////////////////
@$teacher=$_GET['teach'];
//$cat_id=1;

$sql="SELECT hd.intHeaderRecordID AS 'thrid', CONCAT(cl.strClassTrack,' ', cl.strClassName) AS 'tclass',su.strSubjectName AS 'tsubj',we.strWeekName AS 'tday',ss.dtmTimeFr AS 'tfr',ss.dtmTimeTo AS 'tto', hd.strfkTeacher AS 'tfa', CONCAT(te.strTeacherFirstName, ' ', te.strTeacherMidName, ' ', te.strTeacherLastName) AS 'tna' FROM tblheaderrecord hd INNER JOIN tblclass cl ON cl.strClassCode = hd.strfkClass INNER JOIN tblsubsched ss ON ss.intSchedID = hd.intfkSubschedSubj INNER JOIN tblWeek we ON we.intDay= ss.intfkDay INNER JOIN tblsubject su ON su.intSubject = ss.intfkSubject INNER JOIN tblteacher te ON te.strTeacherID = hd.strfkTeacher AND te.strTeacherID = '".$teacher."';";

$teacher="";
//////// collecting data from table ////////
$row=$con->prepare($sql);
$row->execute();
//$row1=$con->prepare($qry);
//$row1->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
//$res=$row1->fetchAll(PDO::FETCH_ASSOC);

	@$main = array('data'=>$result);
	//@$subj = array('subj'=>$res);
echo json_encode($main);  // Json string returned 
//////////////


?>
 


