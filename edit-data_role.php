<?php

/*
Developer: EFST
*/
include('db_con_select.php');

$rid=$_POST['rid'];
$rrole=$_POST['rrole'];
$rdesc=$_POST['rdesc'];
$rstat=$_POST['rstat'];

$stmt = $con->query("UPDATE tbluserrole SET strRoleName = '".$rrole."', strRoleDesc ='".$rdesc."', strRoleStat = '".$rstat."' WHERE intRole = '".$rid."';");

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
       '<td class="link"><a onclick="setEditable('. $_POST['rid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . '<a onclick="delRow('. $_POST['rid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete"><img src="img/disabled.png"></a></td>' .
       '</tr>';
}
else
{
	echo 'Nothing found';
}




 ?>
