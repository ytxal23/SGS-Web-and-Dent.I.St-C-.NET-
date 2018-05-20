<?php session_start();
if($_SESSION['user']==null)
{
  header('Location:login.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>School Grading System/MAINTENANCE/Subject</title>
  <script type="text/javascript">

function ajaxFunction()
{

//document.writeln(val)
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }

function stateChanged(){
    if(httpxml.readyState==4){
      if(httpxml.status==200){

var myObject = JSON.parse(httpxml.responseText);
//alert(myObject);  // Received the data 

var sub="<option value=0>Please Select</option>";
for(i=0;i<myObject.data.length;i++)
{ 
  sub = sub + "<option value="+myObject.data[i].tsubc+">"+myObject.data[i].tsubj+""
}
sub = sub + "</option>";
//alert(sub);
document.getElementById("sched").innerHTML=sub;
    }
  }
    }

var url="table_classsched_subsched.php";
var sched=document.myForm.cclass.value;
var fac = document.getElementById('teach').text;
url=url+"?subjindex="+sched+"&teachname="+fac;
url=url+"&kid="+Math.random();
//alert(url);
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
}

function facFunction()
{

//document.writeln(val)
var hxmlreq=new XMLHttpRequest();

function stateChanged(){
    if(hxmlreq.readyState==4){

var myObject = JSON.parse(hxmlreq.responseText);
 // Received the data 
//alert(myObject);
var str="<thead><tr><th class='hidden'>#</th><th class='hidden-phone'>Class</th><th class='hidden-phone'>Subject</th><th class='hidden-phone'>Day</th><th class='hidden-phone'>Time Start</th><th class='hidden-phone'>Time End</th><th class='hidden-phone'><a href='#openModal' style='position:fixed; right:125px;'><img src='img/add.png'></a>&nbsp;</th></tr></thead><tbody>";
for(i=0;i<myObject.data.length;i++)
{ 
  str = str + "<tr id='"+ myObject.data[i].thrid +"'><td class='editable hidden' id='thrid'>" + myObject.data[i].thrid + "</td><td class='editable' id='tclass'>" + myObject.data[i].tclass + "</td><td class='editable' id='tsubj'>" + myObject.data[i].tsubj + " </td><td class='editable' id='tday'>" + myObject.data[i].tday + "</td><td class='editable' id='tfr'>" + myObject.data[i].tfr + "</td><td class='editable' id='tto'>" + myObject.data[i].tto + "</td></tr>"


}
str = str + "</tbody>";
var t = document.myFac.teach;
var fac = t.options[t.selectedIndex].text;
var tfa = t.options[t.selectedIndex].value;
subjectLoad(fac);
document.getElementById("teacher").innerHTML=fac;
document.getElementById("dtea").value=tfa;
document.getElementById("dcontent").innerHTML=str;
  }
    }

var url="table_classfacsched_adminajax.php";
var teach=document.myFac.teach.value;
url=url+"?teach="+teach;
//url=url+"&kid="+Math.random();
//alert(url);
hxmlreq.onreadystatechange=stateChanged;
hxmlreq.open("GET",url,true);
hxmlreq.send();
}

function subjectLoad(tfa)
{
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       var trial = JSON.parse(xhttp.responseText);
       var sel="<option value=0>Please Select</option>";
       for(i=0;i<trial.data.length;i++)
       {
          sel = sel+ "<option value="+trial.data[i].Code+">"+trial.data[i].Subject+"</option>"
       }
       sel = sel;
       //alert(sel);
       document.getElementById("student").innerHTML=sel;
    }
};
var url = "table_facschedsubj_adminajax.php";
url = url + "?cclass=" + tfa;
xhttp.open("GET", url, true);
xhttp.send(null);   
}

</script>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">

</head>
<body class="fullscreen-centered page-login">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="school">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <!--Hidden Header Region-->
      
      <!--Header & navbar-branding region-->
      <div class="header">
        <div class="header-inner container">
          <div class="row">
            <div class="col-md-8">
              <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
              <h1 class="panel-heading" class="hidden">

                <p><img src="img/sgslogo.png" style="float: left" width="75px" height="75px" hspace="10" >
                <h1 text-align="center">School Grading System</h1></p>
               
                <!--h1 class="hidden">
                    <img src="img/sgslogo.png" alt="Flexor Logo">
                    Flexor
                  </h1-->
              
              <!--div class="navbar-slogan">
                
              </div-->
            </h1>
            </div>
            <!--header rightside-->
            <div class="col-md-4">
              <!--user menu-->
              
              <ul class="list-inline user-menu pull-right">
                <li>
                  <label class="text-uppercase">Welcome! <?php $role = $_SESSION['role'];
    $user = $_SESSION['user']; echo $role. " " .$user; ?></label></li>
                <li class="user-register"> <a class="fa fa-user text-primary" href="Profile.php" class="text-uppercase" title="PROFILE"></a></li>
                <li class="user-login"><a class="fa fa-sign-out text-primary" href = "logout.php" title="LOGOUT"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <!--button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          <!--div class="navbar-text social-media social-media-inline pull-right">
            <!--@todo: replace with company social media details>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div-->
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <!--li class="icon-link">
                <a href="index.php"><i class="fa fa-home"></i></a>
              </li-->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maintenance<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                  
                  <li><a href="maintenance_faculty.php" tabindex="-1" class="menu-item">Faculty</a></li>
                  <li><a href="maintenance_stud.php" tabindex="-1" class="menu-item">Students</a></li>
                  <li><a href="maintenance_subj.php" tabindex="-1" class="menu-item">Subject</a></li>
                  <li><a href="maintenance_class.php" tabindex="-1" class="menu-item">Class</a></li>
                  
                </ul>
              </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedules<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                  
                  <li><a href="admin_class.php" tabindex="-1" class="menu-item">Faculty</a></li>
                  <li><a href="admin_subject.php" tabindex="-1" class="menu-item">Subject</a></li>
                                  
                </ul>
              </li>
                <li>
                <a href="admin_enrollment.php">Enrollment</a>
                <!-- Dropdown Menu -->
              </li>
              <li>
                <a href="admin_gradingsheet.php">Grading Sheet</a>
                <!-- Dropdown Menu -->
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                
                  <li><a href="report_card.php" tabindex="-1" class="menu-item">Student Grades</a></li>
                  <li><a href="report_faculty.php" tabindex="-1" class="menu-item">Schedule Report</a></li>
                  <li><a href="report_enrollment.php" tabindex="-1" class="menu-item">Enrollment Report</a></li>
                  
                </ul>
              </li>
              <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilities<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu ">
                      
                      <li><a href="utilities_role.php">User Logs</a></li>
                      <li><a href="utilities_accounts.php">User Accounts</a></li>
                      <li><a href="utilities_history.php">History Activities</a></li>
                    </ul>
                  
                </li>
                  
                        
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.navbar-collapse >
        </div-->

        <div class="w3-container">
          <div class="row">
            <div class="panel panel-default">
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <label class="panel-title">CLASS SCHEDULE</label>
    <form name=myFac method="post" onsubmit="facFunction(this.form); return false">
      &nbsp;&nbsp;<label>Faculty: </label>
                    <select name="teach" id="teach" class="form-style-9" style="color:black" onchange="facFunction(this.value)">
                    <option value=''>Please Select</option>
                    <?php
                      include('db_con_select.php');
                      $get= $con->query("SELECT strTeacherID AS 'Id', CONCAT(strTeacherFirstName, ' ', strTeacherMidName, ' ', strTeacherLastName) AS 'Teacher' FROM tblteacher;");
                      while($row = $get->fetch())
                    
                      echo '<option value = "'.$row['Id'].'">'.$row['Teacher'].'</option>';
                    ?>
                    </select>
                  </form>
</div>
            <div class="col-md-4">
              
          
              <div id="openModal" class="modalDialog">
                <div>
                  <a href="#close" title="Close" class="close">X</a>
                  <h2>Add Faculty Load</h2>

                  <form method="post" name=myForm action="insert-data_classsched.php" onsubmit="insertData(); ajaxFunction(this.form); return false">
                    <label>Faculty:</label><br><label id="teacher" name="teacher"></label><br><br>
                    <input type="hidden" id="dtea" name="dtea">
                    <label>Class:</label><br>
                      <select name="cclass" id="cclass" class="form-style-9">
                        <option value=''>Please Select</option>
                        <?php
                        include('db_con_select.php');
                        $get= $con->query("SELECT intClass AS 'Code', CONCAT(strClassTrack,' ',strClassName) AS 'Class' FROM tblclass;");
                        while($row = $get->fetch())
                    
                        echo '<option name="cclass" id="cclass" value = "'.$row['Code'].'">'.$row['Class'].'</option>';
                        ?>
                      </select><br>
                    <label> Choose Subject:</label><br>
                      <select name="student" id="student" class="form-style-9" onchange="ajaxFunction(this.value)">
                        
                      </select><br>

                    <label> Choose Schedule:</label><br>
                      <select name="sched" id="sched" class="form-style-9">
                      </select>
                      <br><br>
                         <input type="submit" name="insert" id="insert" class="addbutton btn-primary" value="SAVE" onclick = "insertData()">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="w3-panel2 w3-blue w3-card-4">

            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h3 id="myModalLabel">Delete</h3>
              </div>
              
              <div class="modal-body">
                <p></p>
              </div>
              
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button data-dismiss="modal" class="btn red" id="btnYes">Confirm</button>
              </div>
            </div>


             <table id = "dcontent" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">
              
              </table>

              <!--tbody>
            
                <tr>                       
                  <td class="hidden-phone">johnny</td>
                  <td>john</td>
                  <td>doe</td>
                  <td class="hidden-phone">dsd@gmail.com</td>
                  <td class="hidden-phone">active</td>
                  <td class="hidden-phone">10/12/1999</td>
                  <td><span class="label label-warning">Not Active</span></td>
                  <td><a class="btn mini blue-stripe" href="{site_url()}admin/editFront/1">Edit</a></td>
                  <td><a href="#" class="confirm-delete btn mini red-stripe" role="button" data-title="johnny" data-id="1">Delete</a></td>
                </tr>
                
                <tr>    
                  <td class="hidden-phone">kitty</td>
                  <td>jane</td>
                  <td>doe</td>
                  <td class="hidden-phone">dasasasd@gmail.com</td>
                  <td class="hidden-phone">active</td>
                  <td class="hidden-phone">10/1/1999</td>        
                  <td><span class="label label-danger">Activo</span></td>
                  <td><a class="btn mini blue-stripe" href="{site_url()}admin/editFront/2">Edit</a></td>
                  <td><a href="#" class="confirm-delete btn mini red-stripe" role="button" data-title="kitty" data-id="2">Delete</a></td>
                </tr>      
              </tbody-->
          </table>

        </div>
      </div>

      </div>
    </div>
   
            <!--Slideshow content-->
    <!-- Pricing -->

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <!--Custom scripts demo background & colour switcher - OPTIONAL -->
  <script src="js/color-switcher.js"></script>

  <!--Contactform script -->
  <script src="contactform/contactform.js"></script>

</body>

<script type="text/javascript">


    function insertData(){  
           $.ajax({  
                url:"insert-data_classsched.php",  
                method: "POST",  
                 data:{cclass = $('#cclass').text(), teacher = $('#teacher').text(), sched = $('#sched').text()},  
                dataType: "json",
                success: function(data) {
                  alert("ok "+data);
                 $('#message').html(data);
                $('p').addClass("alert alert-success");
                },
                error: function(err) {
                alert(err);
            }
           });  
      } 

      </script>

</html>
