<?php

/*
Developer: EFST
*/
//include('db_con.php');

$con = new mysqli('localhost' , 'root' , '' , 'dbgrades');

$rid=$_POST['rid'];

$rstat = $_POST['rstat'];

$stmt = $con->query("UPDATE tbluserrole SET strRoleStat = 'Inactive' WHERE intRole = '".$rid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtstud')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#student-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_stud.php#student-grid");
  //include("student-grid-data.php");
     echo '<tr id="'. $_POST['rid'] .'">' .
       '<td class="editable" id="rid">'. $_POST['rid'] . '</td>' .
       '<td class="editable" id="rrole">'. $_POST['rrole'] . '</td>' .
       '<td class="editable" id="rdesc">'. $_POST['rdesc'] . '</td>' .
       '<td class="editable" id="rstat">'. $_POST['rstat'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['rid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit">Edit</a>' . '<a onclick="delRow('. $_POST['rid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
