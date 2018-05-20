<?php
	include('db_con_select.php');
	$stat = "Active";
	$result = $con->query("SELECT * FROM tblclass WHERE strClassStat = '".$stat."';");
	echo "<thead><tr><th class='hidden'></th><th class='hidden'>Class Code</th><th class='hidden-phone'>Name</th><th class='hidden-phone'>Track</th><th class='hidden-phone'>Description</th><th class='hidden-phone'>Status</th><th class=hidden-phone'><a href='#openModal' style='position:fixed; right:125px;'><img src='img/add.png'></a>Actions</th></tr></thead>";
	  while($row = $result->fetch())
		echo '<tr id="'. $row['intClass'] .'">' .
	         '<td class="editable hidden" id="tid">'. $row['intClass'] . '</td>' .
			 '<td class="editable hidden" id="tcode">'. $row['strClassCode'] . '</td>' .
			 '<td class="editable" id="tfname">'. $row['strClassName'] . '</td>' .
			 '<td class="editable" id="ttrack">'. $row['strClassTrack'] . '</td>' .
			 '<td class="editable" id="tmname">'. $row['strClassDesc'] . '</td>' .
			 '<td class="editable" id="tlname">'. $row['strClassStat'] . '</td>' .
			 '<td class="link"><a onclick="setEditable('. $row['intClass'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . '<a onclick="delRow('. $row['intClass'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete"><img src="img/disabled.png"></a></td>' .
			 '</tr><tbody>';
?>