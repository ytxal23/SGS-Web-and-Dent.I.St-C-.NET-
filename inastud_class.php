<?php

/*
Developer: EFST
*/
//include('db_con.php');

$con = new mysqli('localhost' , 'root' , '' , 'dbgrades');

$strclassid=$_POST['uid'];

$strclassstat = $_POST['tlname'];

$stmt = $con->query("UPDATE tblclass SET strClassStat = 'Inactive' WHERE intClass = '".$strclassid."';");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtteach')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#teachent-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_teach.php#teachent-grid");
  //include("teachent-grid-data.php");
    echo '<tr id="'. $_POST['uid'] .'">' .
           '<td class="editable" id="uid">'. $_POST['uid'] . '</td>' .
       '<td class="editable" id="uname">'. $_POST['uname'] . '</td>' .
       '<td class="editable" id="upass">'. $_POST['upass'] . '</td>' .
       '<td class="editable" id="urole">'. $_POST['urole'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['uid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit">Edit</a>' . 
       //'/<a onclick="delRow('. $_POST['uid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
