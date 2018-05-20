<?php

/*
Developer: EFST
*/
//include('db_con.php');

$con = new mysqli('localhost' , 'root' , '' , 'dbgrades');

$strteachid=$_POST['tid'];

$strteachstat = $_POST['tstat'];

$stmt = $con->query("UPDATE tblteacher SET strTeacherStatus = 'Inactive' WHERE intTeacher = '".$strteachid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtteach')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#teachent-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_teach.php#teachent-grid");
  //include("teachent-grid-data.php");
     echo '<tr>' .
       '<tr id="'. $_POST['tid'] .'">' .
       '<td id="tid">'. $_POST['tid'] . '</td>' .
       '<td id="tcode">'. $_POST['tcode'] . '</td>' .
       '<td id="tfname">'. $_POST['tfname'] . '</td>' .
       '<td id="tmname">'. $_POST['tmname'] . '</td>' .
       '<td id="tlname">'. $_POST['tlname'] . '</td>' .
       //'<td id="tcontact">'. $_POST['tcontact'] . '</td>' .
       '<td id="tbirth">'. $_POST['tbirth'] . '</td>' .
       '<td id="tgender">'. $_POST['tgender'] . '</td>' .
       '<td id="tmail">'. $_POST['tmail'] . '</td>' .
       //'<td id="taddress">'. $_POST['taddress'] . '</td>' .
       '<td id="tstat">'. $_POST['tstat'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['tid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit">Edit</a>' . '/<a onclick="delRow('. $_POST['tid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
