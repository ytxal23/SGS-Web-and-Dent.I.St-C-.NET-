<?php

/*
Developer: EFST
*/
//include('db_con.php');

$con = new mysqli('localhost' , 'root' , '' , 'dbgrades');

$strteachid=$_POST['tid'];

$strteachstat = $_POST['tmname'];

$stmt = $con->query("UPDATE tblsubject SET strSubjectDesc = 'Unavailable' WHERE intSubject = '".$strteachid."';");

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
       '<td class="link"><a onclick="setEditable('. $_POST['tid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit">Edit</a></td>' .
       '<td class="link"><a onclick="delRow('. $_POST['tid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
