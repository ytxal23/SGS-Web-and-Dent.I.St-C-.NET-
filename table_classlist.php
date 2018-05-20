<?php
session_start();
	include('db_con_select.php');
	$user=$_SESSION['user'];
	$class=$_GET['cclass'];
	$stat = "Active";
	//$result = $con->query("SELECT dtl.intfkrecord, CONCAT(stud.strStudFirstName,' ',stud.strStudMidName,' ',stud.strStudLastName) AS 'Students' FROM tbldetailrecord dtl INNER JOIN tblstudent stud ON dtl.strfkStudent=stud.strStudCode AND dtl.intfkrecord = '2' AND stud.strStudStat = '".$stat."';");
	$sql="SELECT dtl.intdetail AS 'cdtl', stud.strStudCode AS 'cstc', CONCAT(stud.strStudFirstName,' ',stud.strStudMidName,' ',stud.strStudLastName) AS 'csnm', stud.dtmStudBirth AS 'cbdy', stud.strStudContact AS 'ccon', stud.strStudGender AS 'cgen' FROM tbldetailrecord dtl INNER JOIN tblstudent stud ON dtl.strfkStudent=stud.strStudCode AND stud.strStudStat = '".$stat."' INNER JOIN tblheaderrecord hdr ON hdr.intHeaderRecordID = dtl.intfkrecord INNER JOIN tblteacher tchr ON tchr.strTeacherID = hdr.strfkTeacher AND hdr.strfkTeacher=".$user.";";

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