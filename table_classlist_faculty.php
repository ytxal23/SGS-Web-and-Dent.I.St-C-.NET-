<html>

<head>
<script src="jquery.js"></script>

<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">

  <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
   <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous">
    </script>

<style>

.editLink,.updateLink,.delLink
{
	text-decoration:underline;
	color:black;
}
.editLink:hover , .updateLink:hover , .delLink:hover
{
	text-decoration:none;
	cursor:pointer;
}


.linkImage
{
	float:left;
}
</style>

<script language="javascript">
function setEditable(row_id){
	var tr = document.getElementById(row_id);
	var tr_elements = $("#" + row_id).find(".editable");
	
	for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
		tr_elements[i].contentEditable = "true";
		tr_elements[i].style.color="red";
	}	
	var updateLinkHTML = "<a onclick='editTeacher(" + row_id + ")' class='btn mini blue-stripe updateLink' >Update</a>";
				
	$("#" + row_id).find(".editLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
	alert('Row is now editable edit it and click Update to Save');
}

function delRow(row_id){
	var tr = document.getElementById(row_id);
	var tr_elements = $("#" + row_id).find(".editable");
	
	for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
		tr_elements[i].style.color="red";
	}	
	var delLinkHTML = "<a onclick='delTeacher(" + row_id + ")' class='btn mini blue-stripe updateLink' >Remove</a>";
				
	$("#" + row_id).find(".delLink").fadeOut('slow' ,function(){$(this).replaceWith(delLinkHTML).fadeIn()});
	alert('Are you sure you want to remove this record?');
}

function editGradingsheet(row_id){
	var tstudno = $("#" + row_id).find(".editable")[0].textContent;
	var tstudentname = $("#" + row_id).find(".editable")[1].textContent;
	var tmidterm = $("#" + row_id).find(".editable")[2].textContent;
	var tfinal = $("#" + row_id).find(".editable")[3].textContent;
	var tfinalgrade = $("#" + row_id).find(".editable")[4].textContent;
	var tremarks = $("#" + row_id).find(".editable")[5].textContent;
		
	$.post("edit-data_teach.php" , {tstudno:tstudno,tstudentname:tstudentname, tmidterm:tmidterm,tfinal:tfinal,tfinalgrade:tfinalgrade,tremarks:tremarks} , function(data){
		$("#result").html(data);
		$("#" + tid).fadeOut('slow' , function(){$(this).replaceWith(data).fadeIn('slow');});
	} );
}

function delGradingsheet(row_id){
	var tstudno = $("#" + row_id).find(".editable")[0].textContent;
	var tstudentname = $("#" + row_id).find(".editable")[1].textContent;
	var tmidterm = $("#" + row_id).find(".editable")[2].textContent;
	var tfinal = $("#" + row_id).find(".editable")[3].textContent;
	var tfinalgrade = $("#" + row_id).find(".editable")[4].textContent;
	var tremarks = $("#" + row_id).find(".editable")[5].textContent;
		
	$.post("inastud_teach.php" , {tstudno:tstudno,tstudentname:tstudentname, tmidterm:tmidterm,tfinal:tfinal,tfinalgrade:tfinalgrade,tremarks:tremarks} , function(data){
		$("#result").html(data);
		$("#" + tid).fadeOut('slow');
	} );
}
</script>

</head>
<?php
session_id('mySess');
session_start();
$user=$_SESSION['user'];
	include('db_con_select.php');
	$status = "Active";
	$qry = "SELECT dtl.intfkrecord, CONCAT(stud.strStudFirstName,' ',stud.strStudMidName,' ',stud.strStudLastName) AS 'Students' FROM tbldetailrecord dtl INNER JOIN tblstudent stud ON dtl.strfkStudent=stud.strStudCode AND stud.strStudStat = '".$status."' INNER JOIN tblheaderrecord hdr ON hdr.intHeaderRecordID = dtl.intfkrecord -- AND hdr.strfkTeacher = '"./*$user*/."'";
	$result= $con->query($qry);

	  while($row = $result->fetch())
		echo '<tr id="'. $row['strTeacherID'] .'">' .
			 '<td class="editable" id="tstudno">'. $row['strStudCode'] . '</td>' .
			 '<td class="editable" id="tstudentname">'. $row['strTeacherFirstName'] . '</td>' .
			 '<td class="editable" id="tmidterm">'. $row['strTeacherMidName'] . '</td>' .
			 '<td class="editable" id="tfinal">'. $row['strTeacherLastName'] . '</td>' .
			 '<td class="editable" id="tfinalgrade">'. $row['strTeacherContact'] . '</td>' .
			 '<td class="editable" id="tremarks">'. $row['dtmTeacherBirth'] . '</td>' .
			 '<td class="link"><a onclick="setEditable('. $row['strTeacherID'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit">Edit</a>' . '<a onclick="delRow('. $row['strTeacherID'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
			 '</tr>';
?>