<?php
session_start();
if($_SESSION['user']==null)
{
  header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>School Grading System/HOME</title>
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

function ajaxFunction()
{
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
var str='<thead><tr><th class="hidden-phone">Student No.</th><th class="hidden-phone">Student Name</th><th class="hidden-phone">Birthday</th><th class="hidden-phone">Contact No.</th><th class="hidden-phone">Gender</th></tr></thead><tbody>';
//var color="#f1f1f1";
for(i=0;i<myObject.data.length;i++)
{ 
str = str + "<tr id='"+ myObject.data[i].cdtl +"'><td class='editable' id='cstc'>" + myObject.data[i].cstc + "</td><td class='editable' id='csnm'>" + myObject.data[i].csnm + "</td><td class='editable' id='cstc'>" + myObject.data[i].cstc + "</td><td class='editable' id='cbdy'>" + myObject.data[i].cbdy + "</td><td class='editable' id='cgen'>" + myObject.data[i].cgen + "</td></tr>"

}
str = str + "</tbody>" ;
document.getElementById("teacher-grid").innerHTML=str;
    }
    }

var url="table_classlist.php";
var cclass=document.myForm.cclass.value;
url=url+"?cclass="+cclass;
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send();
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
            
              <!--user menu-->

              
              <ul class="list-inline user-menu pull-right">
               <!--ul class="nav navbar-top-links navbar-right pull-right"-->
                
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
                <a href="faculty_gradingsheet.php">Grading Sheet</a>
              </li>
                <li class="dropdown">
                <a href="faculty_sched.php">Faculty Schedule</a>
              </li>
              <li class="dropdown">
                <a href="faculty_classlist.php">Class List</a>
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
        <div class="row">
            <div class="panel panel-default">
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp;<label class="panel-title">
                  CLASSLIST
                </label>
               <form name=myForm method="post" onsubmit="ajaxFunction(this.form); return false">
              &nbsp; &nbsp;<label>Class:</label>
                        <select name="cclass" id="cclass" onchange="ajaxFunction(); studentLoad(this.value);" class="form-style-9">
                          <option value=''>Please Select</option>
                <?php
                include('db_con_select.php');
                  $get= $con->query("SELECT cl.strclasscode AS 'Code', concat(cl.strclasstrack, ' ', cl.strclassname) AS 'Name' FROM tblClass cl INNER JOIN tblheaderrecord hd ON cl.strClasscode =hd.strfkClass AND hd.strfkTeacher ='".$user."'");
                 while($row = $get->fetch())
                    
                      echo '<option value = "'.$row['Code'].'">'.$row['Name'].'</option>';
                ?>
                        </select>
                      </form>
            </div>
        <div class="w3-panel w3-blue w3-card-4">

            <table id = "teacher-grid" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">
              
                

              
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
