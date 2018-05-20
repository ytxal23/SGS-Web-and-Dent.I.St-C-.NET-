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
  <title>School Grading System/MAINTENANCE/Subject</title>
  <style>

.editLink,.updateLink,.delLink
{
  text-decoration:underline;
  color:black;
}
.editLink:hover , .updateLink:hover , .delLink:hover
{
  font-color: #000000;
  cursor:pointer;

}


.linkImage
{
  float:left;
}
</style>
  <script type="text/javascript">

function validate(input)
{
      var pattern = /^-?[0-9]+(.[0-9]{1,2})?$/;
            var text = document.getElementById(this).value;
            if (text.match(pattern)==null)
            {
    alert('the format is wrong');
            }
      else
      {
    alert('OK');
      }


}

function loadSubj()
{
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange=function()
  {
    if(this.readyState==4 && this.status==200)
    {
      var subjSel= JSON.parse(this.responseText);
      //alert(subjSel);
      var sub="<option>Please Select Subject</option>";
      for(var i=0; i<subjSel.data.length;i++)
      {
        sub= sub+ "<option value='"+subjSel.data[i].subidx+"'>#"+subjSel.data[i].subidx+" "+subjSel.data[i].subnme+" "+subjSel.data[i].subsch+"</option>"
      }
      sub= sub;
      document.getElementById("subject").innerHTML=sub;
    }
  }
  url='table_gradingsubj_adminajax.php';
  var cat_id=document.myForm.cat_id.value;
  url=url+"?cat_id="+cat_id;
  url=url+"&kid="+Math.random();
  //alert(url);
  xhr.open('GET', url, true);
  xhr.send();
}

function ajaxFunction()
{
  var xhr;
try
  {
  // Firefox, Opera 8.0+, Safari
  xhr=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xhr=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      xhr=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
  xhr.onreadystatechange=function()
  {
    if(this.readyState==4 && this.status==200)
    {
      var myObject = JSON.parse(this.responseText);  // Received the data 
//alert(myObject);
var msg=myObject.value.message;
if(msg.length > 0){document.getElementById("msg").innerHTML=msg;}
else{document.getElementById("msg").style.display='none';}

var str="<table class='table table-striped table-style-two' cellpadding='0' cellspacing='0'><tr><th class='hidden'></th><th class='hidden'>No.</th><th class='hidden-phone'>Student ID</th><th class='hidden-phone'>Student Name</th><th class='hidden-phone'>Midterm Grade</th><th class='hidden-phone'>Final Grade</th><th class='hidden-phone'>FINAL</th><th class='hidden-phone'>REMARKS</th><th class='hidden-phone'>Actions</th></tr>";
//var color="#f1f1f1";
for(i=0;i<myObject.data.length;i++)
{ 
//if((i%2)==0){color="#ffffff";}
//else{color="#f1f1f1";}
str = str + "<tr id='"+ myObject.data[i].tgid +"'><td class='editable hidden' id='tgid'>" + myObject.data[i].tgid + "</td><td class='editable hidden' id='tdetail'>" + myObject.data[i].tdetail + "</td><td class='editable' id='tstudno'>" + myObject.data[i].tstudno + " </td><td class='editable' id='tstudentname'>" + myObject.data[i].tstudentname + "</td><td><input type='number' pattern='/^[0-9]+(\.[0-9]{1,2})?$/' title='Please enter the number equal or lesser than 100. Special Characters except . are not allowed.' min=0 max=100 step='.01' disabled='disabled' class='editable' id='tmidterm' value='" + myObject.data[i].tmidterm + "'/></td><td><input type='number' pattern='/^[0-9]+(\.[0-9]{1,2})?$/' title='Please enter the number equal or lesser than 100. Special Characters except . are not allowed.' min=0 max=100 step=00.01 disabled='disabled' class='editable' id='tfinal' value='" + myObject.data[i].tfinal + "'/></td><td class='editable' id='tfinalgrade'>" + myObject.data[i].tgpa + "</td><td class='editable' id='tremarks'>" + myObject.data[i].tremarks + "</td><td class='link'><a onclick='setEditable(" + myObject.data[i].tgid + ")' class='btn mini blue-stripe editLink' alt='Edit' name='Edit'><img src='img/pencil-edit-black16.png'></a></td></tr>"

  var fac = ""+myObject.data[i].tfaname+""

}
str = str + "</table>" ;
fac = fac;
//sub = sub + "</option>";
document.getElementById("display").innerHTML=str;
//document.getElementById("subject").innerHTML=sub;
document.getElementById("faname").innerHTML=fac;
    }
  }
  url='table_gradingsheet_adminajax.php';
  var cat_id=document.myForm.cat_id.value;
  var subidx=document.myForm.subject.value;
  url=url+"?cat_id="+cat_id+"&subidx="+subidx;
  url=url+"&kid="+Math.random();
  xhr.open('GET', url, true);
  xhr.send();
}

</script>
<script type="text/javascript">
  function setEditable(row_id){
  var tr = document.getElementById(row_id);
  var tr_elements = $("#" + row_id).find(".editable");

  var con = confirm('Row is now editable edit it and click Update to Save');
  if(con == true)
  {
    for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].contentEditable = "true";
    tr_elements[i].style.color="green";
    $("input[type='number']").removeAttr('disabled');
  }
  var updateLinkHTML = "<a onclick='editGradingsheet(" + row_id + ")' class='btn mini blue-stripe updateLink' ><img src='img/iconSave.png'></a>";
        
  $("#" + row_id).find(".editLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
  }
  else
  {
    
  }
}

/*function delRow(row_id){
  var tr = document.getElementById(row_id);
  var tr_elements = $("#" + row_id).find(".editable");
  
  for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].style.color="black";
  } 
  var delLinkHTML = "<a onclick='delGradingsheet(" + row_id + ")' class='btn mini blue-stripe updateLink' >Remove</a>";
        
  $("#" + row_id).find(".delLink").fadeOut('slow' ,function(){$(this).replaceWith(delLinkHTML).fadeIn()});
  alert('Are you sure you want to remove this record?');
}*/


function editGradingsheet(row_id){
  var tgid = $("#" + row_id).find(".editable")[0].textContent;
  var tdetail = $("#" + row_id).find(".editable")[1].textContent;
  var tstudno = $("#" + row_id).find(".editable")[2].textContent;
  var tstudname = $("#" + row_id).find(".editable")[3].textContent;
  var tmidterm = $("#" + row_id).find(".editable")[4].value;
  var tfinal = $("#" + row_id).find(".editable")[5].value;
  var tfinalgrade = GPAcalculate(tmidterm, tfinal);//$("#" + row_id).find(".editable")[6].textContent;  
  var tremarks = sheetRemarks(GPAcalculate(tmidterm,tfinal));

    //alert(tgid+" "+tdetail+" "+tstudno+" "+tmidterm+" "+tfinal+" "+tfinalgrade+" "+tremarks);

  $.post("edit-data_gradingsheet.php" , {tgid:tgid, tdetail:tdetail, tstudno:tstudno, tstudname:tstudname, tmidterm:tmidterm,tfinal:tfinal,tfinalgrade:tfinalgrade, tremarks:tremarks} , function(data){
    $("#result").html(data);
    $("#" + tgid).fadeOut('slow' , function(){$(this).replaceWith(data).fadeIn('slow');});
  }
  );
  alert("Successfully Updated Record");
  // var url="admin_gradingsheet.php";
  // $(location).attr('href',url); 
}

function GPAcalculate(tmidterm, tfinal)
{
 var tsum = parseInt(tmidterm) + parseInt(tfinal);
 var gpa = tsum * 0.50;
 return gpa;
}

function sheetRemarks(tfinalgrade)
{
 if(tfinalgrade > 74)
 {
  var rem = "PASSED";
 }
 else if(tfinalgrade < 74)
 {
  var rem = "FAILED";
 }

 return rem;
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

  <!--<link rel="stylesheet" href="css/bootstrap.min.css" />  
  <script src="js/bootstrap.min.js"></script>  -->
  <script src="js/jquery.min.js"></script>  

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
                  
                        </ul>
                      </div>
                    </div>
                  </div>
          <!--/.navbar-collapse >
        </div-->

        <div class="w3-container">
          <div class="row">
            <div class="panel panel-default">
               
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <label class="panel-title">
                  GRADING SHEET
                </label>
              <form name=myForm method="post" onsubmit="loadSubj(this.form); return false; ajaxFunction(this.form); return false;">
              <label>Class Name:</label>
              <select name="cat_id" id="cat_id" onchange="loadSubj(this.value)" class="form-style-9">
                <option value=0>Please Select</option>
                <?php
                require 'db_con_select.php';
                $query = "SELECT intClass AS 'Code', CONCAT(strClassTrack,' ',strClassName) AS 'Cl' FROM tblClass;";
                 foreach($con->query($query) as $row){
                    
                      echo '<option value = "'.$row['Code'].'">'.$row['Cl'].'</option>';
                    }
                ?>   
              </select>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <label>Subject Name:</label>
              <select name="subject" id="subject" onchange="ajaxFunction(this.value); loadSubj();" class="form-style-9">
              </select>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <label>Faculty: </label>
              <label id="faname" name="faname" style="text-decoration: underline"></label>

            </form>
            </div>
          </div>

          <div class="w3-panel2 w3-blue w3-card-4">

              <div class="hidden" id=msg style="position:absolute;  z-index:1; left: 1100px; top: 0px;" >This is message area</div><!--DON'T REMOVE THESE LINES-->
              <center><div id="display"><b>Records will be displayed here</b></div></center><!--DON'T REMOVE THESE LINES-->
            
                          
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