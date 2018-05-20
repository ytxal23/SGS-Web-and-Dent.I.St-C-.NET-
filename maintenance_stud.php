<?php
session_start();

global $usvar;
if($_SESSION['user']==null)
{
  header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>School Grading System/MAINTENANCE/Student</title>
  <style>

.editLink,.updateLink,.delLink,.cancelLink
{
  text-decoration:underline;
  color:black;
}
.editLink:hover , .updateLink:hover , .delLink:hover , .cancelLink
{
  text-decoration:none;
  cursor:pointer;
}


.linkImage
{
  float:left;
}
</style>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

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
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">

  <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
   <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous">
    </script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>
<script src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  $('.search-box input[type="text"]').on("keyup input", function(){
    var value = $(this).val().toLowerCase();
    $("#studentgrid tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    
  // Set search input value on click of result item
});

</script>
<script language="javascript">
function setEditable(row_id){
  var tr = document.getElementById(row_id);
  var tr_elements = $("#" + row_id).find(".editable");
  
  var con = confirm('Row is now editable edit it and click Update to Save');
  if(con == true)
  {
    for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].contentEditable = "true";
    tr_elements[i].style.color="green";
  }
  var updateLinkHTML = "<a onclick='editStudent(" + row_id + ")' class='btn mini blue-stripe updateLink' ><img src='img/iconSave.png'></a>";

  var cancelLinkHTML = "<a title='CANCEL' onclick='notEditable(" + row_id + ")' class='btn mini blue-stripe cancelLink' ><img src='img/iconCancel.png'></a>";
        
  $("#" + row_id).find(".editLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
  $("#" + row_id).find(".delLink").fadeOut('slow' ,function(){$(this).replaceWith(cancelLinkHTML).fadeIn()});
  }
  else
  {
    
  }
}

function notEditable(row_id){
  var tr = document.getElementById(row_id);
  var tr_elements = $("#" + row_id).find(".editable");
  
    for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].contentEditable = "false";
    tr_elements[i].style.color="black";
  }
  var updateLinkHTML = "<a onclick='setEditable(" + row_id + ")' class='btn mini blue-stripe editLink' ><img src='img/pencil-edit-black16.png'></a>";
  var cancelLinkHTML = "<a onclick='delRow(" + row_id + ")' class='btn mini blue-stripe delLink' ><img src='img/disabled.png'></a>";
        
  $("#" + row_id).find(".updateLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
  $("#" + row_id).find(".cancelLink").fadeOut('slow',function(){$(this).replaceWith(cancelLinkHTML).fadeIn()});
}

function cancelRemove(row_id){
  var tr = document.getElementById(row_id);
  var tr_elements = $("#" + row_id).find(".editable");
  
    for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].style.color="black";
  }
  var updateLinkHTML = "<a onclick='setEditable(" + row_id + ")' class='btn mini blue-stripe editLink' ><img src='img/pencil-edit-black16.png'></a>";
  var cancelLinkHTML = "<a onclick='delRow(" + row_id + ")' class='btn mini blue-stripe delLink' ><img src='img/disabled.png'></a>";
        
  $("#" + row_id).find(".updateLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
  $("#" + row_id).find(".cancelLink").fadeOut('slow',function(){$(this).replaceWith(cancelLinkHTML).fadeIn()});
}

function delRow(row_id){
  var tr = document.getElementById(row_id);
  var tr_elements = $("#" + row_id).find(".editable");
  
  var al = confirm('Are you sure you want to remove this record?');
  if(al==true)
  {
    for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].style.color="red";
  } 
  var delLinkHTML = "<a onclick='delStudent(" + row_id + ")' class='btn mini blue-stripe updateLink' ><img src='img/iconRemove.png'></a>";
  var cancelLinkHTML = "<a onclick='cancelRemove(" + row_id + ")' class='btn mini blue-stripe cancelLink' ><img src='img/iconCancel.png'></a>";
        
  $("#" + row_id).find(".delLink").fadeOut('slow' ,function(){$(this).replaceWith(cancelLinkHTML).fadeIn()});
  $("#" + row_id).find(".editLink").fadeOut('slow',function(){$(this).replaceWith(delLinkHTML).fadeIn()});
  }
  else
  {

  }
}

function editStudent(row_id){
  var sid = $("#" + row_id).find(".editable")[0].textContent;
  var scode = $("#" + row_id).find(".editable")[1].textContent;
  var sfname = $("#" + row_id).find(".editable")[2].textContent;
  var smname = $("#" + row_id).find(".editable")[3].textContent;
  var slname = $("#" + row_id).find(".editable")[4].textContent;
  var scontact = $("#" + row_id).find(".editable")[5].textContent;
  var sbirth = $("#" + row_id).find(".editable")[6].textContent;
  var sgender = $("#" + row_id).find(".editable")[7].textContent;
  var smail = $("#" + row_id).find(".editable")[8].textContent;
  var sregi = $("#" + row_id).find(".editable")[9].textContent;
  var sstat = $("#" + row_id).find(".editable")[10].textContent;

  $.post("edit-data.php" , {sid:sid, scode:scode, sfname:sfname, smname:smname,slname:slname,scontact:scontact,sbirth:sbirth,sgender:sgender,smail:smail,sregi:sregi,sstat:sstat} , function(data){
    $("#result").html(data);
    $("#" + sid).fadeOut('slow' , function(){$(this).replaceWith(data).fadeIn('slow');});
  } );
}

function delStudent(row_id){
  var sid = $("#" + row_id).find(".editable")[0].textContent;
  var scode = $("#" + row_id).find(".editable")[1].textContent;
  var sfname = $("#" + row_id).find(".editable")[2].textContent;
  var smname = $("#" + row_id).find(".editable")[3].textContent;
  var slname = $("#" + row_id).find(".editable")[4].textContent;
  var scontact = $("#" + row_id).find(".editable")[5].textContent;
  var sbirth = $("#" + row_id).find(".editable")[6].textContent;
  var sgender = $("#" + row_id).find(".editable")[7].textContent;
  var smail = $("#" + row_id).find(".editable")[8].textContent;
  var sregi = $("#" + row_id).find(".editable")[9].textContent;
  var sstat = $("#" + row_id).find(".editable")[10].textContent;
    
  $.post("inastud.php" , {sid:sid, scode:scode, sfname:sfname, smname:smname,slname:slname,scontact:scontact,sbirth:sbirth,sgender:sgender,smail:smail,sregi:sregi,sstat:sstat} , function(data){
    $("#result").html(data);
    $("#" + sid).fadeOut('slow');
  } );
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
            <div class="col-md-4">
          <?php
          function validate(){
            if ( preg_match('/^[0-9]{1,}/', $value ) ) {
   echo "ERROR";
} else {
}
          }
          ?>
              <div id="openModal" class="modalDialog">
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
          </div>
        </div>

         <div class="search-box right" style="color: black; width: 17.5%">
              <input id='studentsN' type="text" autocomplete="on" placeholder="Search student.." />
              <div class="result"></div>
              <label class = "Info"></label>&nbsp; &nbsp;
              <label id= "labelS"></label>    
            </div>

          <div class="w3-panel2 w3-blue w3-card-4">

            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h3 id="myModalLabel">Delete</h3>
              </div>
              
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button data-dismiss="modal" class="btn red" id="btnYes">Confirm</button>
              </div>
            </div>
            
            <div class="table-responsive">
            <table id = "studentgrid" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">
              <?php include('table.php');?>
              
          </table>
        </div>

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
           //var strstudfirstname = $('#strstudfirstname').val();
           //var strstudmidname = $('#strstudmidname').val();  
           //var strstudlastname = $('#strstudlastname').val();
           //var strstudaddress = $('#strstudaddress').val(); 
           //var strstudbday = $('#strstudbday').val();
           //var strstudmail = $('#strstudmail').val();
           //var strstudcontact = $('#strstudcontact').val();
           //var strstudgender = $('#strstudgender').val(); 

           if(strstudfirstname == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(strstudlastname == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert-data.php",  
                method: "POST",  
                data:{strstudcode = $('#strstudcode').text(), strstudfirstname = $('#strstudfirstname').text(), strstudmidname = $('#strstudmidname').text(), strstudlastname = $('#strstudlastname').text(), strstuddate = $('#strstuddate').text(), strstudbday = $('#strstudbday').text(), strstudmail = $('#strstudmail').text(), strstudcontact = $('#strstudcontact').text(), strstudgender = $('#strstudgender').text()},  
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

function setEditable(row_id){
  var tr = document.getElementById(row_id);
  var tr_elements = $("#student-grid" + row_id).find(".editable");
  
  for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].contentEditable = "true";
    tr_elements[i].style.color="red";
  } 
  var updateLinkHTML = "<a class='btn mini blue-stripe' href='#openModalEdt' name = 'edit' data-id= 'edit-id' onclick='editRow("+ row_id +")'>Update</a>";
        
  $("#student-grid" + row_id).find(".editLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
  alert('Row is now editable edit it and click Update to Save');
}

function editRow(id) {
        /*var sid = $("#student-grid" + row_id).find(".editable")[0].textContent;
        var sfname = $("#student-grid" + row_id).find(".editable")[1].textContent;
        var smname = $("#student-grid" + row_id).find(".editable")[2].textContent;
        var slname = $("#student-grid" + row_id).find(".editable")[3].textContent;
        var scontact = $("#student-grid" + row_id).find(".editable")[4].textContent;
        var sbirth = $("#student-grid" + row_id).find(".editable")[5].textContent;
        var sgender = $("#student-grid" + row_id).find(".editable")[6].textContent;
        var smail = $("#student-grid" + row_id).find(".editable")[7].textContent;
        var saddress = $("#student-grid" + row_id).find(".editable")[8].textContent;*/
        var sstat = $("#" + row_id).find(".editable")[9].textContent;

        $.ajax({  
                url:"edit-data.php",  
                method: "POST",  
                data:{strstudcode = $('#strstudcode').text(), strstudfirstname = $('#strstudfirstname').text(), strstudmidname = $('#strstudmidname').text(), strstudlastname = $('#strstudlastname').text(), strstuddate = $('#time').text(), strstudbday = $('#strstudbday').text(), strstudmail = $('#strstudmail').text(), strstudcontact = $('#strstudcontact').text(), strstudgender = $('#strstudgender').text(), sstat:sstat},  
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

        if ( 'undefined' != typeof id ) {
          $.getJSON('maintenace_stud.php#student-grid=' + id, function(obj) {
            $('#edit-id').val(obj.id);
            $('#studcode').val(obj.studcode);
            $('#firstname').val(obj.strstudfirstname);
            $('#midname').val(obj.strstudmidname);
            $('#lastname').val(obj.strstudlastname);
            $('#date').val(obj.strstuddate);
            $('#contact').val(obj.strstudcontact);
            $('#gender').val(obj.strstudgender);
            $('#mail').val(obj.strstudmail);
            $('#stat').val(obj.strstudstat);
            $('#openModalEdt').modal('show')
          }).fail(function() { alert('Unable to fetch data, please try again later.') });
        } else alert('Unknown row id.');
      }
    
/*$(document).ready(function(){
 $('#addstud').on("submit", function(event){  
  event.preventDefault();   
  if($('#strstudfirstname').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#strstudaddress').val() == '')  
  {  
   alert("Address is required");  
  }  
  else  
  {  
   $.ajax({  
    url:"addstud.php",  
    method:"POST",  
    data:$('#addstud').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");
     //alert("Saved");  
    },  
    success:function(data){  
     $('#addstud')[0].reset();  
     $('#openModal').modal('hide');  
     $('#student-grid').html(data);  
    }  
   });  
  }  
 });*/

/*$(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.insert', function(){  
           var studentid = $(this).attr("id");  
           $.ajax({  
                url:"insert-data.php",  
                method:"POST",  
                data:{studentid:studentid},  
                dataType:"json",  
                success:function(data){  
                     $('#strstudfirstname').val(data.strstudfirstname);  
                     $('#strstudmidname').val(data.strstudmidname);  
                     $('#strstudlastname').val(data.strstudlastname);  
                     $('#strstudaddress').val(data.strstudaddress);  
                     $('#strstudbday').val(data.strstudbday);
                     $('#strstudmail').val(data.strstudmail); 
                     $('#strstudcontact').val(data.strstudcontact); 
                     $('#strstudgender').val(data.strstudgender); 
                     $('#studentid').val(data.student);  
                     $('#insert').val("Insert");  
                     $('#openModal').modal('show');  
                }  
           });  
      });  

  $(document).on('click', '.addbutton', function(){
  //$('#dataModal').modal();
  var student = $(this).attr("strStudCode");
  $.ajax({
   url:"student-grid-data.php",
   method:"POST",
   data:{student:student},
   success:function(data){
    $('#student-grid').html(data);
    $('#openModal').modal('hide');
   }
  });
 });
});  */


</script>

</html>
