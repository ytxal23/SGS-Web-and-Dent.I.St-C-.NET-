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
@$subjindex=$_GET['subjindex'];
@$teachname=$_GET['teachname'];
//$cat_id=1;

if(!is_numeric($subjindex)){
$message.="Data Error |";
exit;
}

if($subjindex>0){
$sql="SELECT sc.intSchedID AS 'tsubc',
CONCAT('#', sc.intSchedID,' ', su.strSubjectName,'[',we.strWeekName,'(',sc.dtmTimeFr,'-',sc.dtmTimeTo, ')]') AS 'tsubj' 
FROM tblsubsched sc,tblweek we ,tblsubject su WHERE sc.intfkSubject = su.intSubject AND sc.intfkDay = we.intDay AND su.strSubjectStat ='Active'
AND sc.intSchedID NOT IN (SELECT intfkSubschedSubj FROM tblheaderrecord hd INNER JOIN tblteacher te ON hd.strfkTeacher = te.strTeacherID
AND CONCAT(te.strTeacherFirstName,' ', te.strTeacherMidName,' ',te.strTeacherLastName) = '$teachname' INNER JOIN tblclass cl ON
hd.strfkClass = cl.strClassCode AND cl.intClass = '$subjindex');";
}
else{
$subjindex=0;
}
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
 


