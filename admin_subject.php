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
          <!--button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>-->
          <!--social media icons-->
          <!--div class="navbar-text social-media social-media-inline pull-right">
            @todo: replace with company social media details>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>-->
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
            <div class="panel panel-default2">
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp;<label class="panel-title">
                  SUBJECT SCHEDULE
                </label>
              </div>
            
            <div class="col-md-4">
              
          
              <div id="openModal" class="modalDialog">
                    <div>
                      <a href="#close" title="Close" class="close">X</a>

                      

                      <h2>Add Subject Schedule</h2>
                      
                      <form method="post" onsubmit="insertData()" action="insert-data_subjsched.php">
                      <label>Subject:</label>
                        <select name="subj" id="subj" class="form-style-9">
                          <option value=''>Please Select</option>
                      <?php
                        include('db_con_select.php');
                          $get= $con->query("SELECT intSubject AS 'Code', strSubjectName AS 'Name' FROM tblsubject;");
                         while($row = $get->fetch())
                    
                           echo '<option value = "'.$row['Code'].'">'.$row['Name'].'</option>';
                      ?>
                    </select><br>

                        <label>DAY</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <label>FROM</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label>TO</label><br>
 
                        <div class="form-group">
                        <input type="checkbox" name="optionday[]" id="optmon" class="getval" value="Monday">Monday <input for="optmon" name="frmon" type="Time" min="7:00" max="9:00"/> <input for="optmon" name="tomon" type="Time" min="7:00" max="9:00"/></input>
                        <label id = "warnMon" class= "hidden" style="color: red; font-size: 11pt;">occupied schedule</label>
                      </div>
                      <div class="form-group">
                        <input type="checkbox" name="optionday[]" id="opttue" class="getval" value="Tuesday">Tuesday <input for="opttue" name="frtue" type="Time" min="7:00" max="9:00"/> <input for="opttue" name="totue" type="Time" min="7:00" max="9:00"/></input></div>
                        <div class="form-group">
                          <input type="checkbox" name="optionday[]" id="optwed" class="getval" value="Wednesday">Wednesday <input for="optwed" name="frwed" type="Time" min="7:00" max="9:00"/> <input for="optwed" name="towed" type="Time" min="7:00" max="9:00"/></input>
                      </div>
                        <div class="form-group">
                          <input type="checkbox" name="optionday[]" id="optthu" class="getval" value="Thursday">Thursday <input for="optthu" name="frthu" type="Time" min="7:00" max="9:00"/> <input for="optthu" name="tothu" type="Time" min="7:00" max="9:00"/></input>
                      </div>
                        <div class="form-group">
                          <input type="checkbox" name="optionday[]" id="optfri" class="getval" value="Friday">Friday <input for="optfri" name="frfri" type="Time" min="7:00" max="9:00"/> <input for="optfri" name="tofri" type="Time" min="7:00" max="9:00"/></input>
                      </div>
                        <div class="form-group">
                          <input type="checkbox" name="optionday[]" id="optsat" class="getval" value="Monday">Saturday <input for="optsat" name="frsat" type="Time" min="7:00" max="9:00"/> <input for="optsat" name="tosat" type="Time" min="7:00" max="9:00"/></input>
                      </div>
                      <br><input  name= "insert" id="insert" type="submit" onclick="insertData()" class="addbutton btn-primary" value="SAVE"/>
                    </form>
                
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

            <table id = "subj-grid" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">
              <thead>
                <tr>
                  <th class="hidden"></th>
                  <th class="hidden-phone">Subject</th>
                  <th class="hidden-phone">Time From</th>
                  <th class="hidden-phone">Time To</th>
                  <th class="hidden-phone"><a href="#openModal" style="position:fixed; right:125px;"><img src="img/add.png"></a>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
              <?php include('table_sched_subj.php');
                ?>   
              </tbody>
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

>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){ 
      var subj = $('#subj').val(); 
           var day = [];
           var fr = [];
           var to = [];  
           $('.getval').each(function(){  
                if($(this).is(":checked"))  
                {  
                     day.push($(this).val());
                     fr.push($('fr').val());
                     to.push($('to').val());  
                }  
           });  
           day = day.toString();  
           fr = fr.toString();  
           to = to.toString();  
           $.ajax({  
                url:"insert-data_subjsched.php",  
                method:"POST",  
                data:{subj:subj, day:day, fr:fr, to:to},  
                success:function(data){  
                     $('#result').html(data);  
                }  
           });  
      });  
 });  
 </script> 

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

</html>
