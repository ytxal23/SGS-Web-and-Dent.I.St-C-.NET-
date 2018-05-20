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
  <title>School Grading System/MAINTENANCE/Faculty</title>
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
  <script type="text/javascript">
  $(document).ready(function(){
  $('.search-box input[type="text"]').on("keyup input", function(){
    var value = $(this).val().toLowerCase();
    $("#teachergrid tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    
  // Set search input value on click of result item
});

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
                      <h3 class="modal-title">Add Teacher</h3>
                    <?php
                    include 'incUserID.php';
                    $uid=autoincteachuser();
                    echo "
                    <form id='addteach' method ='post' action = 'fac_name_check.php'>
                        <input pattern='[0-9]{10}' id='strteachcode' name='strteachcode' onload='autoincteachuser()' value='".$uid."' disabled/><br>
                        <label>Name:</label><br>
                        <input style='text-transform:capitalize;' type='text' class='form-style-9 form-textfield-third align-left' placeholder='First Name' pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' name='strteachfirstname' id='strteachfirstname' required/>
                        <input style='text-transform:capitalize;' type='text' class='form-style-9 form-textfield-third align-center' placeholder='Middle Name' pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' name='strteachmidname' id='strteachmidname' optional/>
                        <input style='text-transform:capitalize;' type='text' class='form-style-9 form-textfield-third align-right' placeholder='Last Name'  pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' name='strteachlastname' id='strteachlastname' required/>
                        <label id = 'lblwarn' class = 'hidden' style = 'color:red; font-size:11pt;'>already exists!</label><br>
                        <!--<label>Address:</label><br>
                        <input type='text' class='form-style-9 form-textfield' placeholder='Address' name='strteachaddress' id='strteachaddress' required/><br>-->
                        <label> Birthday:</label><br>
                        <input type='date' min='1950-01-01' max='1997-12-31' title='From 1990-01-01 to 2001-12-31 only' pattern='(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31)){10}
            }
' class='form-style-9 form-textfield' placeholder='Birthday' name='strteachbday' id='strteachbday' required maxlength='10' /><br>
                        <label> Email:</label><br>
                        <input type='email' pattern='[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' class='form-style-9 form-textfield' placeholder='Email Address' name='strteachmail' id = 'strteachmail' required/><br><br>
                        <label>Gender:  </label>
                        <input type='radio' name='strteachgender' id='strteachgender' value='Female' required/>
                      <label> Female</label>
                        <input type='radio' name='strteachgender' id='strteachgender' value='Male' required/>
                        <label> Male</label><br><br>
                        <!--<input type='hidden' name='teachentid' id='teachentid' />  -->
                         <button type='submit' id='insert' class='btn btn-primary btn-block' name= 'insert' onclick = 'insertData()'>Save</button>
  
                  </form>";
                  ?>
                  <p id="message"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
           
           <div class="search-box right" style="color: black; width: 17.5%">
            <input type="text" id='teacher' autocomplete="off" placeholder="Search faculty.." />
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
            <table id = "teachergrid" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">
              <thead>
                <tr>
                  <th class="hidden"></th>
                  <th class="hidden-phone">Teacher ID</th>
                  <th class="hidden-phone">First Name</th>
                  <th class="hidden-phone">Middle Name</th>
                  <th class="hidden-phone">Last Name</th>
                  <!--<th>Contact</th>--> 
                  <th>Birthdate</th>
                  <th class="hidden-phone">Gender</th>
                  <th class="hidden-phone">Email</th>
                  <!--<th class="hidden-phone">Address</th>-->
                  <th class="hidden-phone">Status</th>
                  <th class="hidden-phone"><a href="#openModal" onclick="autoincuser()" style="position:fixed; right:125px;"><img src="img/add.png"></a>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require 'table_teach.php';
                ?>
              </tbody>
              
              
              <!--tbody>
            
                <tr>                       
                  <td class="hidden-phone">johnny</td>
                  <td>john</td>
                  <td>doe</td>
                  <td class="hidden-phone">dsd@gmail.com</td>
                  <td class="hidden-phone">active</td>
                  <td class="hidden-phone">10/12/1999</td>
                  <td><span class="label label-warning">Not Active</span></td>
                  <td><a class="btn mini blue-stripe" href="#openModal">Edit</a></td>
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
                  <td><a class="btn mini blue-stripe" href="#openModal">Edit</a></td>
                  <td><a href="#" class="confirm-delete btn mini red-stripe" role="button" data-title="kitty" data-id="2">Delete</a></td>
                </tr>      
              </tbody-->
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

           if(strteachfirstname == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(strteachlastname == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert-data_teach.php",  
                method: "POST",  
                data:{strteachcode = $('#strteachcode').text(), strteachfirstname = $('#strteachfirstname').text(), strteachmidname = $('#strteachmidname').text(), strteachlastname = $('#strteachlastname').text(), /*strteachaddress = $('#strteachaddress').text(),*/ strteachbday = $('#strteachbday').text(), strteachmail = $('#strteachmail').text(), /*strteachcontact = $('#strteachcontact').text(),*/ strteachgender = $('#strteachgender').text()},  
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
  var tr_elements = $("#teacher-grid" + row_id).find(".editable");
  
  for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].contentEditable = "true";
    tr_elements[i].style.color="green";
  } 
  var updateLinkHTML = "<a class='btn mini blue-stripe' href='#openModalEdt' name = 'edit' data-id= 'edit-id' onclick='editRow("+ row_id +")'><img src='img/iconSave.png'></a>/<a title='CANCEL' onclick='editRow(" + row_id + ")' class='btn mini blue-stripe cancelLink' ><img src='img/iconCancel.png'></a>";
        
  $("#teacher-grid" + row_id).find(".editLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
  alert('Row is now editable edit it and click Update to Save');
}

function editRow(id) {

        /*var sid = $("#teacher-grid" + row_id).find(".editable")[0].textContent;
        var sfname = $("#teacher-grid" + row_id).find(".editable")[1].textContent;
        var smname = $("#teacher-grid" + row_id).find(".editable")[2].textContent;
        var slname = $("#teacher-grid" + row_id).find(".editable")[3].textContent;
        var scontact = $("#teacher-grid" + row_id).find(".editable")[4].textContent;
        var sbirth = $("#teacher-grid" + row_id).find(".editable")[5].textContent;
        var sgender = $("#teacher-grid" + row_id).find(".editable")[6].textContent;
        var smail = $("#teacher-grid" + row_id).find(".editable")[7].textContent;
        var saddress = $("#teacher-grid" + row_id).find(".editable")[8].textContent;*/
        var sstat = $("#" + row_id).find(".editable")[9].textContent;

        $.ajax({  
                url:"edit-data_teach.php",  
                method: "POST",  
                data:{strteachcode = $('#strteachcode').text(), strteachfirstname = $('#strteachfirstname').text(), strteachmidname = $('#strteachmidname').text(), strteachlastname = $('#strteachlastname').text(), /*strteachaddress = $('#strteachaddress').text(),*/ strteachbday = $('#strteachbday').text(), strteachmail = $('#strteachmail').text(), /*strteachcontact = $('#strteachcontact').text(),*/ strteachgender = $('#strteachgender').text(), sstat:sstat},  
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
          $.getJSON('maintenace_faculty.php#teacher-grid=' + id, function(obj) {
            $('#edit-id').val(obj.id);
            $('#code').val(obj.strteachcode);
            $('#firstname').val(obj.strteachfirstname);
            $('#midname').val(obj.strteachmidname);
            $('#lastname').val(obj.strteachlastname);
            //$('#address').val(obj.strteachaddress);
            //$('#contact').val(obj.strteachcontact);
            $('#gender').val(obj.strteachgender);
            $('#mail').val(obj.strteachmail);
            $('#stat').val(obj.strteachstat);
            $('#openModalEdt').modal('show')
          }).fail(function() { alert('Unable to fetch data, please try again later.') });
        } else alert('Unknown row id.');
      }
</script>
</html>
