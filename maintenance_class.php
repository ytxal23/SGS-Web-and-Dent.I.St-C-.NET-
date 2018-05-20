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
  <title>School Grading System/MAINTENANCE/Class</title>
  <style>

.editLink,.updateLink,.delLink,.cancelLink
{
  text-decoration:underline;
  color:black;
}
.editLink:hover , .updateLink:hover , .delLink:hover , .cancelLink:hover
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

  <script src="js/jquery-1.12.4.min.js"></script>
  <script language="javascript">
  $(document).ready(function(){
  $('.search-box input[type="text"]').on("keyup input", function(){
    var value = $(this).val().toLowerCase();
    $("#classgrid tr").filter(function() {
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
  var updateLinkHTML = "<a onclick='editClass(" + row_id + ")' class='btn mini blue-stripe updateLink' ><img src='img/iconSave.png'></a>";

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
  var delLinkHTML = "<a onclick='delClass(" + row_id + ")' class='btn mini blue-stripe updateLink' ><img src='img/iconRemove.png'></a>";
  var cancelLinkHTML = "<a onclick='cancelRemove(" + row_id + ")' class='btn mini blue-stripe cancelLink' ><img src='img/iconCancel.png'></a>";
        
  $("#" + row_id).find(".delLink").fadeOut('slow' ,function(){$(this).replaceWith(cancelLinkHTML).fadeIn()});
  $("#" + row_id).find(".editLink").fadeOut('slow',function(){$(this).replaceWith(delLinkHTML).fadeIn()});
  }
  else
  {

  }
}

function editClass(row_id){
  var tid = $("#" + row_id).find(".editable")[0].textContent;
  var tcode = $("#" + row_id).find(".editable")[1].textContent;
  var tfname = $("#" + row_id).find(".editable")[2].textContent;
  var ttrack = $("#" + row_id).find(".editable")[3].textContent;
  var tmname = $("#" + row_id).find(".editable")[4].textContent;
  var tlname = $("#" + row_id).find(".editable")[5].textContent;
    
  $.post("edit-data_class.php" , {tid:tid, tcode:tcode, tfname:tfname, ttrack:ttrack, tmname:tmname, tlname:tlname} , function(data){
    $("#result").html(data);
    $("#" + tid).fadeOut('slow' , function(){$(this).replaceWith(data).fadeIn('slow');});
  } );
}

function delClass(row_id){
  var tid = $("#" + row_id).find(".editable")[0].textContent;
  var tcode = $("#" + row_id).find(".editable")[1].textContent;
  var tfname = $("#" + row_id).find(".editable")[2].textContent;
  var ttrack = $("#" + row_id).find(".editable")[3].textContent;
  var tmname = $("#" + row_id).find(".editable")[4].textContent;
  var tlname = $("#" + row_id).find(".editable")[5].textContent;
    
  $.post("inastud_class.php" , {tid:tid, tcode:tcode, tfname:tfname, ttrack:ttrack, tmname:tmname, tlname:tlname} , function(data){
    $("#result").html(data);
    $("#" + tid).fadeOut('slow');
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
                      <h3 class="modal-title">Add Class</h3>
                      <?php
                      include('incUserID.php');
                      $cid=autoincclass();
                      echo "
                    <form id='addclass' method ='post' action = 'class_name_check.php'>
                          <input maxlength='10' id='strclasscode' onload='autoincclass()' value='".$cid."' disabled/><br><br>
                        <label>Class:</label><br>
                        <input maxlength=45 pattern='[a-zA-Z0-9]{2, 45}' style='text-transform:capitalize;' maxlength=45 type='text' class='form-style-9 form-textfield-third align-left' placeholder='Class' name='strclassname' id='strclassname' maxlength=45 required/><br>
                        <label>Track:</label><br>
                        <select type='select' class='form-style-9 form-textfield-third align-left' placeholder='Class' name='strclasstrac' id='strclasstrac' required>
                            <option name='strclasstrac' id='strclasstrac' value='STEM' required>STEM</option>
                            <option name='strclasstrac' id='strclasstrac' value='ICT' required>ICT</option>
                            <option name='strclasstrac' id='strclasstrac' value='ABM' required>ABM</option>
                            <option name='strclasstrac' id='strclasstrac' value='ARS' required>ARS</option>
                        </select><br>
                        <label>Description:</label><br>";
                        echo'
                        <input style="text-transform:capitalize;" type="text" maxlength=100 pattern="[a-zA-Z -0-9]{10, 100}"" class="form-style-9 form-textfield-third align-center multi-line" placeholder="Description" name="strclassdesc" id="strclassdesc" maxlength=100 required validate/><br><br>
                         <button type="submit" id="insert" class="btn btn-primary btn-block" name= "insert" onclick = "insertData()">Save</button>
                  </form>'; ?>
                  <p id="message"></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="search-box right" style="color: black; width: 17.5%">
            <input type="text" id='classn' autocomplete="off" placeholder="Search class.." />
            <div class="result">
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
            
          <table id = "classgrid" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">
            <?php include('table_class.php'); ?>
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
           if(strsubjname == '')  
           {  
                alert("Enter Subject");  
                return false;  
           }  
           $.ajax({  
                url:"insert-data_class.php",  
                method: "POST",  
                 data:{strclasscode = $('#strclasscode').text(), strclassname = $('#strclassname').text(), strclasstrac = $('#strclasstrac').text(), strclassdesc = $('#strclassdesc').text()},  
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
  var tr_elements = $("#class-grid" + row_id).find(".editable");
  
  for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].contentEditable = "true";
    tr_elements[i].style.color="green";
  } 
  var updateLinkHTML = "<a class='btn mini blue-stripe' href='#openModalEdt' name = 'edit' data-id= 'edit-id' onclick='editRow("+ row_id +")'>Update</a>";
        
  $("#class-grid" + row_id).find(".editLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
}

function editRow(id) {

        var sstat = $("#" + row_id).find(".editable")[9].textContent;

        $.ajax({  
                url:"edit-data_class.php",  
                method: "POST",  
                data:{strclasscode = $('#strclasscode').text(), strclassname = $('#strclassname').text(), strclasstrac = $('#strclasstrac').text(), strclassdesc = $('#strclassdesc').text()},  
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
          $.getJSON('maintenace_subj.php#class-grid=' + id, function(obj) {
            $('#edit-id').val(obj.id);
            $('#classcode').val(obj.strclasscode);
            $('#classname').val(obj.strclassname);
            $('#classtrac').val(obj.strclasstrac);
            $('#classdesc').val(obj.strclassdesc);
            $('#classstat').val(obj.strclassstat);
            $('#openModalEdt').modal('show')
          }).fail(function() { alert('Unable to fetch data, please try again later.') });
        } else alert('Unknown row id.');
      }


</script>

</html>
