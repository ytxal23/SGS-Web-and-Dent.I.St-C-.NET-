<?php

/*
Developer: EFST
*/
//include('db_con.php');

include('db_con_select.php');

$uid=$_POST['uid'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$urole=$_POST['urole'];

if($urole="Teacher")
{
$stmt = $con->query("START TRANSACTION; UPDATE tbluser SET strUserName = '".$uname."', strPassword = '".$upass."' WHERE intUserID = '".$uid."'; UPDATE tblstudent SET strTeacherID='".$uname."' WHERE strTeacherID='".$uname."'; COMMIT;");

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
           '<td class="editable hidden" id="uid">'. $_POST['uid'] . '</td>' .
       '<td class="editable" id="uname">'. $_POST['uname'] . '</td>' .
       '<td class="editable" id="upass">'. $_POST['upass'] . '</td>' .
       '<td class="editable" id="urole">'. $_POST['urole'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['uid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . 
       //'/<a onclick="delRow('. $_POST['uid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
  echo 'Nothing found';
}

}
elseif($urole="Student")
{
$stmt = $con->query("START TRANSACTION; UPDATE tbluser SET strUserName = '".$uname."', strPassword = '".$upass."' WHERE intUserID = '".$uid."'; UPDATE tblstudent SET strStudCode='".$uname."' WHERE strStudCode='".$uname."'; COMMIT;");

if($stmt)
{
  //$res="Data Updated Successfully:";
  /*echo "<script> success:function(data) { $('#edtteach')[0].reset();  
     $('#openModalEdt').modal('hide');  
     $('#teachent-grid').html(data);} </script>";*/
  //echo "<script> alert(".$res."); </script>";
  //header("location:maintenance_teach.php#teachent-grid");
  //include("teachent-grid-data.php");
     $strAct = 'Edited the user '.$uname;
     include ("insert-data_activity.php");
    activityLog($strAct);
    echo '<tr id="'. $_POST['uid'] .'">' .
           '<td class="editable hidden" id="uid">'. $_POST['uid'] . '</td>' .
       '<td class="editable" id="uname">'. $_POST['uname'] . '</td>' .
       '<td class="editable" id="upass">'. $_POST['upass'] . '</td>' .
       '<td class="editable" id="urole">'. $_POST['urole'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['uid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . 
       //'/<a onclick="delRow('. $_POST['uid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
  echo 'Nothing found';
}

}
else
{
$stmt = $con->query("UPDATE tbluser SET strUserName = '".$uname."', strPassword = '".$upass."' WHERE intUserID = '".$uid."';");

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
           '<td class="editable hidden" id="uid">'. $_POST['uid'] . '</td>' .
       '<td class="editable" id="uname">'. $_POST['uname'] . '</td>' .
       '<td class="editable" id="upass">'. $_POST['upass'] . '</td>' .
       '<td class="editable" id="urole">'. $_POST['urole'] . '</td>' .
       '<td class="link"><a onclick="setEditable('. $_POST['uid'] .')" class="btn mini blue-stripe editLink" alt="Edit" name="Edit"><img src="img/pencil-edit-black16.png"></a>' . 
       //'/<a onclick="delRow('. $_POST['uid'] .')" class="btn mini blue-stripe delLink" alt="Delete" name="Delete">Delete</a></td>' .
       '</tr>';
}
else
{
  echo 'Nothing found';
}

}




 ?>
