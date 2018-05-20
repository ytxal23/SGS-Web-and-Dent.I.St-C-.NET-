<?
session_start();
if($_SESSION['user']==null && $_SESSION['role']==null)
{
  header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Profile - School Grading System</title>
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

  <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<!-- ======== @Region: body ======== -->

<body class="fullscreen-centered page-register">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="school" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
          <?php
          session_start();
            $role = $_SESSION['role'];
            if($role =="Administrator")
            {
              echo "<a class='navbar-brand center-block' href='home-Admin.php' title='Home'>";
            }
            elseif($role =="Teacher")
            {
              echo "<a class='navbar-brand center-block' href='home-Faculty.php' title='Home'>";
            }
            elseif($role =="Student")
            {
              echo "<a class='navbar-brand center-block' href='home-Student.php' title='Home'>";
            }
            else
              if($role =="Administrator")
            {
              echo "<a class='navbar-brand center-block' href='login.php' title='Home'>";
            }
          ?>
          
            <h1 class="panel-heading">
              <img src="img/sgslogo.png" style="float: left" width="75px" height="75px" hspace="10" >
                <h1 text-align="center">School Grading System
                <!--img src="img/logo.png" alt="Flexor Logo"-->
              </h1>  
            
            
            </a>
            <!--h1 class="hidden">
                <img src="img/logo.png" alt="Flexor Logo">
                Flexor
              </h1-->
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-center">
            <div class="panel-heading">
              <h3 class="panel-title">
                  Profile
                </h3>
            </div>
            <div class="panel-body">
              <form accept-charset="utf-8" role="form">
                
                  <?php
                  //session_start();
                  $user = $_SESSION['user'];
                  $role = $_SESSION['role'];
//                  $qry = mysqli_query($con,"SELECT us.strUserName, ro.strRoleName FROM tblUser us LEFT JOIN tblUserRole ro ON us.intfkRole=ro.intRole;");
//                  $row1 = mysqli_fetch_array($qry);

                  if($role == 'Student')
                  {
                    include('db_con_select.php');
                    $result = $con->query("SELECT * FROM tblstudent WHERE strStudCode = '".$user."';");
                    while($row2=$result->fetch())
                    echo 
                      '<label>Student #: </label><label>'. $row2['intStudent'] . '</label><br>' .
                      '<label>Student Code: </label><label>'. $row2['strStudCode'] . '</label><br>' .
                      '<label>FIRST NAME: </label><label>'. $row2['strStudFirstName'] . '</label><br>' .
                      '<label>MIDDLE NAME: </label><label>'. $row2['strStudMidName'] . '</label><br> ' .
                      '<label>LAST NAME: </label><label>'. $row2['strStudLastName'] . '</label><br>' .
                      '<label>CONTACT: </label><label>'. $row2['strStudContact'] . '</label><br>' .
                      '<label>BIRTHDAY: </label><label>'. $row2['dtmStudBirth'] . '</label><br>' .
                      '<label>GENDER: </label><label>'. $row2['strStudGender'] . '</label><br>' .
                      '<label>EMAIL: </label><label>'. $row2['strStudMail'] . '</label><br>' .
                      '<label>DATE REGISTERED: </label><label>'. $row2['dtmStudRegi'] . '</label><br>' .
                      '<label>STATUS: </label><label>'. $row2['strStudStat'] . '</label><br><br>';

                    
                  }
                  elseif($role == 'Teacher')
                  {
                    include('db_con_select.php');
                    $result = $con->query("SELECT * FROM tblteacher WHERE strTeacherID = '".$user."';");
                    while($row2=$result->fetch())
                    echo 
                      '<label>Teacher #: </label><label>'. $row2['intTeacher'] . '</label><br>' .
                      '<label>Teacher ID: </label><label>'. $row2['strTeacherID'] . '</label><br>' .
                      '<label>FIRST NAME: </label><label>'. $row2['strTeacherFirstName'] . '</label><br> ' .
                      '<label>MIDDLE NAME: </label><label>'. $row2['strTeacherMidName'] . '</label><br> ' .
                      '<label>LAST NAME: </label><label>'. $row2['strTeacherLastName'] . '</label><br>' .
                     //'<label>'. $row2['strTeacherContact'] . '</label><br>' .
                      '<label>BIRTHDAY: </label><label>'. $row2['dtmTeacherBirth'] . '</label><br>' .
                      '<label>GENDER: </label><label>'. $row2['strTeacherGender'] . '</label><br>' .
                      '<label>EMAIL: </label><label>'. $row2['strTeacherMail'] . '</label><br>' .
                      //'<label>'. $row2['dtmStudRegi'] . '</label><br>' .
                      '<label>STATUS: </label><label>'. $row2['strTeacherStatus'] . '</label><br><br>';
                  }  
                  elseif($role == 'Administrator')
                  {
                    include('db_con_select.php');
                    $result = $con->query("SELECT * FROM tbluser WHERE strUserName = '".$user."';");
                    while($row2=$result->fetch())
                    echo 
                      '<label>USER #: </label><label>'. $row2['intUserID'] . '</label><br>' .
                      '<label>ADMIN ID: </label><label>'. $row2['strUserName'] . '</label><br>' .
                      '<label>PASSWORD: </label><label>'. $row2['strPassword'] . '</label><br>'.
                      '<label>ROLE #: </label><label>'. $row2['intfkRole'] . '</label><br><br>' .
                      '<label>ROLE: </label><label>'. $role . '</label><br><br>';
                  }
                   else
                  {

                    echo '<label>NONE'.$user.$role.'</label><br>';
                    
                  }
                  
                  ?>
              </form>
              <!--p class="m-b-0 m-t">Already signed up? <a href="login.php">Login here</a>.</p>
              <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
            
          </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
  </div>

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

  <!--script src="js/modal.js"></script-->

</body>

</html>
