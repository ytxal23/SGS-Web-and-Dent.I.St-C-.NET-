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
@$cclass=$_GET['cclass'];

//if(!is_numeric($cclass)){
//$message.="Data Error |";
//exit;
//}

$sql="SELECT rc.strfkStudent AS 'Code', CONCAT(st.strStudFirstName,' ',st.strStudMidName,' ', st.strStudLastName) AS 'Student' FROM tblstudent st LEFT JOIN tbldetailrecord rc ON st.strStudCode = rc.strfkStudent INNER JOIN tblheaderrecord hdr ON rc.intfkrecord = hdr.intHeaderRecordID INNER JOIN tblclass cl ON hdr.strfkClass = cl.intClass AND cl.intClass=$cclass";
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
 


