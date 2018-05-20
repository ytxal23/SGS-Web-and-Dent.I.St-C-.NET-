<?php
include("db_con.php");
if(isset($_POST['inClass'])) {
$sql = "SELECT dtl.intdetail, dtl.intfkrecord, dtl.strfkStudent, CONCAT(stud.strStudFirstName,' ',stud.strStudMidName,' ',stud.strStudLastName) AS 'Students', dtl.intMidterm, dtl.intFinal, dtl.decFinalGrade, dtl.strReqRemarks FROM tbldetailrecord dtl INNER JOIN tblstudent stud ON dtl.strfkStudent=stud.strStudCode AND stud.strStudStat = '".$stat."' INNER JOIN tblheaderrecord hdr ON dtl.intfkrecord = hdr.intHeaderRecordID AND hdr.strfkClass = '".$_POST['inClass']."';";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$data = $rows;
}
echo json_encode($data);
} else {
echo 0;
}
?>