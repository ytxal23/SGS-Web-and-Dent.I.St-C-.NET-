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

var myObject = JSON.parse(httpxml.responseText);  // Received the data 

/*var sub=""
for()
{

}
document.getElementById("subject").innerHTML=sub;*/
var str = "<thead><tr><th class='hidden-phone'>Student ID</th><th class='hidden-phone'>Student Name<a href='#openModal' style='position:fixed; right:125px;'><img src='img/add.png'></a></th></tr></thead><tbody>";
//var color="#f1f1f1";
for(i=0;i<myObject.data.length;i++)
{ 
//if((i%2)==0){color="#ffffff";}
//else{color="#f1f1f1";}
str = str + "<tr id='"+ myObject.data[i].Code +"'><td class='editable' id='sid'>" + myObject.data[i].Code + "</td><td class='editable' id='sname'>" + myObject.data[i].Student + "</td></tr>"

//var sec = ""+myObject.data[i].Section+""

}
str = str + "</tbody></table>" ;
var e = document.getElementById("cclass");
var lbl = e.options[e.selectedIndex].text;
var cls=document.myForm.cclass.value;
studentLoad(lbl, cls);
var sec = "Class: " + lbl;
//alert(lbl);
document.getElementById("subjgrid").innerHTML=str;
document.getElementById("section").innerHTML=sec;
    }
    }

var url="table_enrollment_adminajax.php";
var cclass=document.myForm.cclass.value;
url=url+"?cclass="+cclass;
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send();
}

function studentLoad(inc, cls)
{
  var ccls = inc;
  hdrLoad(cls);
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       var trial = JSON.parse(xhttp.responseText);
       var sel="<option value=0>Please Select</option>";
       for(i=0;i<trial.data.length;i++)
       {
          sel = sel+ "<option value="+trial.data[i].Code+">"+trial.data[i].Student+"</option>"
       }
       sel = sel;
       //alert(sel);
       document.getElementById("student").innerHTML=sel;
    }
};
var url = "table_enrollmentsubj_adminajax.php";
url = url + "?cclass=" + ccls;
xhttp.open("GET", url, true);
xhttp.send(null);   
}

function hdrLoad(cls)
{
  var ccls = cls;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       var trial = JSON.parse(xhttp.responseText);
       //alert(trial);
       for(i=0;i<trial.data.length;i++)
       {
          var sel= "" +trial.data[i].hdid+""
       }
       sel = sel;
       
       document.getElementById("intclass").value=sel;
    }
};
var url = "table_enrollmenthdr_adminajax.php";
url = url + "?cclass=" + ccls;
xhttp.open("GET", url, true);
xhttp.send(null);   
}

</script>

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
            </ul>                      
          </div>
        </div>    
      </div>
          <!--/.navbar-collapse >
        </div-->

        <div class="w3-container">
          <div class="row">
            <div class="panel panel-default">
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp;<label class="panel-title">CLASS ENROLLMENT
                </label>
               <form name=myForm method="post" onsubmit="ajaxFunction(this.form); return false">
              &nbsp; &nbsp;<label>Class:</label>
                        <select name="cclass" id="cclass" onchange="ajaxFunction(); studentLoad(this.value);" class="form-style-9">
                          <option value=''>Please Select</option>
                <?php
                include('db_con_select.php');
                  $get= $con->query("SELECT strClassCode AS 'Code', CONCAT(strClassTrack, ' ', strClassName) AS 'Name' FROM tblclass;");
                 while($row = $get->fetch())
                    
                      echo '<option value = "'.$row['Code'].'">'.$row['Name'].'</option>';
                ?>
                        </select>
                        <a href="#studModal" class="link">Add Student</a>
                      </form>
                <?php
          function validate(){
            if ( preg_match('/^[0-9]{1,}/', $value ) ) {
   echo "ERROR";
} else {
}
          }
          ?>
              <div id="studModal" class="modalDialog">
                    <div class = "modal-body">
                      <a href="#close" title="Close" class="close">X</a>
                      <h3 class="modal-title">Add Student</h3>
                    <?php
                    include 'incUserID.php';
                    $uid=autoincuser();
                    echo "
                    <form id='addstud' method ='post' action = 'stud_name_check.php'>
                        <input type='text' maxlength='10' onload='autoincuser()' name='strstudcode' id = 'strstudcode' value='". $uid ."' disabled/>
                        <br>
                        <label>Name:</label><br>
                        <input style='text-transform:capitalize;' type='text' class='form-style-9 form-textfield-third align-left' placeholder='First Name' pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' name='strstudfirstname' id='strstudfirstname' required/>
                        <input style='text-transform:capitalize;' type='text' class='form-style-9 form-textfield-third align-center' placeholder='Middle Name' pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' name='strstudmidname' id='strstudmidname' optional/>
                        <input style='text-transform:capitalize;' type='text' class='form-style-9 form-textfield-third align-right' placeholder='Last Name'  pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' name='strstudlastname' id='strstudlastname' required/>
                        <label id = 'lblwarn' class = 'hidden' style = 'color:red; font-size:11pt;'>already exists!</label><br>
                        <label> Birthday:</label><br>
                        <input maxlength='10' type='date' editable='false' min='1990-01-01' max='2001-12-31' title='From 1990-01-01 to 2001-12-31 only' pattern='(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31)){10}
            }
' class='form-style-9 form-textfield' placeholder='Birthday' name='strstudbday' id='strstudbday' required/><br>
                        <label> Email:</label><br>
                        <input type='email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' class='form-style-9 form-textfield' placeholder='Email Address' name='strstudmail' id = 'strstudmail' required/><br>
                        <label> Contact</label><br>
                        <input type='text' pattern='[0-9]{11}' class='form-style-9 form-textfield' placeholder='Contact No' name='strstudcontact' id = 'strstudcontact' maxlength=11 required/><br><br>
                        <label>Gender:  </label>
                        <input type='radio' name='strstudgender' id='strstudgender' value='Female' required/>
                      <label> Female</label>
                        <input type='radio' name='strstudgender' id='strstudgender' value='Male' required/>
                        <label> Male</label><br>
                        <input type='text' class='hidden' name='time' id='time'>";
                        echo "<script>
                                    (function () {
                                          var date = new Date().toISOString().substring(0, 10),
                                              field = document.querySelector('#time');
                                          field.value = date;
                                          console.log(field.value);
                                      
                                      })()
                          </script>";
                         echo ' 
                        </input>
                         <button type="submit" id="insert" class="btn btn-primary btn-block" name= "insert" onclick = "insertData()">Save</button>  
                  </form>'; ?>
                  <p id="message"></p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              
              <div id="openModal" class="modalDialog">
                    <div><form id=enrollstud method="post" action="insert-data_enrolled.php">
                      <a href="#close" title="Close" class="close">X</a>
                      <h2>Register Student</h2>
                      
                      <div class="form-group">
                        <label id="section"></label>
                        <input type="hidden" id="intclass" name="intclass"/>
                      </div>
                      <div class="form-group" id= "usrform">
                        <label> Choose Student:</label><br>
                        <select name="student" id="student" class="form-style-9">
                        </select>
                      </div>
                      <div class="form-group">
                         <input type="submit" name="insert" id="insert" class="addbutton btn-primary" value="SAVE" >
                      </div></form>
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

          <table id = "subjgrid" name="subjgrid" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">         
          </table>

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

</html>
