<?php
	include('db_con_select.php');
	$gsheet;
	$stat = "Active";
	$result = $con->query("SELECT * FROM tblstudent WHERE strStudStat = '".$stat."';");
echo "<thead><tr><th class='hidden'></th><th class='hidden-phone'>Student No.</th><th class='hidden-phone'>First</th><th class='hidden-phone'>Middle</th><th class='hidden-phone'>Last</th><th>Contact</th><th>Birthdate</th><th class='hidden-phone'>Gender</th><th class='hidden-phone'>Email</th><th class='hidden-phone'>Date Registered</th><th class='hidden-phone'>Status</th><th class='hidden-phone'><a href='#openModal' style='position:fixed; right:125px;'><img src='img/add.png'></a>Actions</th></tr></thead><tbody>";
	  while($row = $result->fetch())
		echo '<tr id="'. $row['intStudent'] .'">' .
			 '<td class="editable hidden" id="sid">'. $row['intStudent'] . '</td>' .
			 '<td class="editable" id="scode">'. $row['strStudCode'] . '</td>' .
			 '<td class="editable" id="sfname">'. $row['strStudFirstName'] . '</td>' .
			 '<td class="editable" id="smname">'. $row['strStudMidName'] . '</td>' .
			 '<td class="editable" id="slname">'. $row['strStudLastName'] . '</td>' .
			 '<td class="editable" id="scontact">'. $row['strStudContact'] . '</td>' .
			 '<td class="editable" id="sbirth">'. $row['dtmStudBirth'] . '</td>' .
			 '<td class="editable" id="sgender">'. $row['strStudGender'] . '</td>' .
			 '<td class="editable" id="smail">'. $row['strStudMail'] . '</td>' .
			 '<td class="editable" id="sregi">'. $row['dtmStudRegi'] . '</td>' .
			 '<td class="editable" id="sstat">'. $row['strStudStat'] . '</td>' .
			 '<td class="link"><a onclick="setEditable('. $row['intStudent'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . '<a onclick="delRow('. $row['intStudent'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete"><img src="img/disabled.png"></a></td>' .
			 '</tr><tbody>';
	if(isset($_GET['gsheet']))
	{
	$gsheet=$_GET['gsheet'];
	$stat = "Active";
	$sql="SELECT intStudent AS 'sid', strStudCode AS 'scode', strStudFirstName AS 'sfname', strStudMidName AS 'smname', strStudLastName AS 'slname', strStudContact AS 'scontact', dtmStudBirth AS 'sbirth', strStudGender AS 'sgender', strStudMail AS 'smail', dtmStudRegi AS 'sregi', strStudStat AS 'sstat' FROM tblstudent WHERE strStudStat = '".$stat."';";

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
			}
?>