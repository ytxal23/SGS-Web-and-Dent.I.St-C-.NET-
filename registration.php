<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Register - Flexor Bootstrap Theme</title>
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
  <div id="background-wrapper" class="school">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
          <!--a class="navbar-brand center-block" href="index.php"  title="Home"-->
          <a class="navbar-brand center-block" href="index.php" title="Home">
            <h1 class="panel-heading">
              <img src="img/sgslogo.png" style="float: left" width="75px" height="75px" hspace="10" >
                <h1 text-align="center">School Grading System
                <!--img src="img/logo.png" alt="Flexor Logo"-->
              </h1>  
            </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-center">
            <div class="panel-heading">
              <h3 class="panel-title"> 
                  Sign Up
                </h3>
            </div>
            <div class="panel-body">
              <form id="register" class="form-style-9" action="insert-data_user.php" method = "post">
              <ul>
                <li>
                  <!-- <input type="radio" name="userrole" id="userrole" value="2" required>
                <label> Teacher</label>
                <input type="radio" name="userrole"  id="userrole" value="3" required>
                <label> Student</label> -->
                <label>Register as: <select id='userrole' name='userrole' required>
                  <option>PLEASE SELECT</option>
                  <option value='2'>TEACHER</option>
                  <option value='3'>STUDENT</option>
                </select>
              </li>
            
              <li>
                <label id='username' name='username' class="form-group">
                </label>
               </li> 
                
              <li>
                  <input pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' type="text" name="firstname" id="firstname" class="field-style field-split align-left" placeholder="FirstName" required/>
                  <input pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' type="text" name="midname" id="midname" class="field-style field-split align-center" placeholder="MiddleName" optional/>
                  <input pattern='[a-zA-Z]{2,45}' title='Letters are only allowed in Last Name, Middle Name and First Name' maxlength='45' type="text" name="lastname" id="lastname" class="field-style field-split align-right" placeholder="LastName" required/>
              </li>
              <li>
              
              </li>
              <li>
                <input min='1990-01-01' max='2001-12-31' title='From 1990-01-01 to 2001-12-31 only' pattern='(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31)){10}
            }
' type="date" name="birthday" id="birthday" class="field-style field-split align-left" placeholder="Birthday" required/>
                <input type="password" name="password" id="birthday" class="field-style field-split align-right" placeholder="Password" required/> 
              </li>
              <li>
                <input type="radio" name="gender" id="gender" value="Female" required>
                <label>Female</label>
                <input type="radio" name="gender"  id="gender" value="Male" required>
                <label>Male</label>
              </li>
              
              <li>
              <button type="submit" id="insert" class="btn btn-primary btn-block" name= "insert" onclick = "insertData()">Register</button>
              </li>
              </ul>
              </form>
              <p class="m-b-0 m-t">Already signed up? <a href="login.php">Login here</a>.</p>
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

  <script type="text/javascript">
    function insertData(){  
           if(username == '')  
           {  
                alert("Enter Subject");  
                return false;  
           }  
           $.ajax({  
                url:"insert-data_user.php",  
                method: "POST",  
                 data:{username = $('#username').text(), userrole = $('#userrole').text(), firstname = $('#firstname').text(), midname = $('#midname').text(), lastname = $('#lastname').text(), birthday = $('#birthday').text(), password = $('#password').text(), gender = $('#gender')},  
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
    <script type="text/javascript">
document.addEventListener('DOMContentLoaded',function() {
    document.querySelector('select[name="userrole"]').onchange=changeEventHandler;
},false);

function changeEventHandler(event) {
    // You can use “this” to refer to the selected element.
    if(!event.target.value) {alert('Please Select One');}
    else {
        document.getElementById('username').innerHTML = '<?php include('incUserID.php'); print autoincteachuser(); ?>';
    }
}
</script>
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
