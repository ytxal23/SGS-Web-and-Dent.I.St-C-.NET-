<?php

/*
Developer: EFST
*/
//include('db_con.php');

$con = new mysqli('localhost' , 'root' , '' , 'dbgrades');

$strstudid=$_POST['sid'];

$strstudstat = $_POST['sstat'];

$stmt = $con->query("UPDATE tblstudent SET strStudStat = 'Inactive' WHERE intStudent = '".$strstudid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtstud')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#student-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_stud.php#student-grid");
  //include("student-grid-data.php");
     echo '<tr>' .
       '<tr id="'. $_POST['sid'] .'">' .
       '<td id="sid">'. $_POST['sid'] . '</td>' .
       '<td id="scode">'. $_POST['scode'] . '</td>' .
       '<td id="sfname">'. $_POST['sfname'] . '</td>' .
       '<td id="smname">'. $_POST['smname'] . '</td>' .
       '<td id="slname">'. $_POST['slname'] . '</td>' .
       '<td id="scontact">'. $_POST['scontact'] . '</td>' .
       '<td id="sbirth">'. $_POST['sbirth'] . '</td>' .
       '<td id="sgender">'. $_POST['sgender'] . '</td>' .
       '<td id="smail">'. $_POST['smail'] . '</td>' .
       '<td id="sregi">'. $_POST['sregi'] . '</td>' .
       '<td id="sstat">'. $_POST['sstat'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['sid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img class="linkImage" src="edit.png" / >Edit</a></td>' .
       '<td class="link"><a onclick="delRow('. $_POST['sid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
