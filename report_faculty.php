<?php session_start();
if($_SESSION['user']==null)
{
  header('Location:login.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>School Grading System/REPORT/Student Report Card</title>
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
  <script src='./dist/print.min.js'></script>
  <script src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings(".result");
    if(inputVal.length){
      $.get("backend-searchFac.php", {term: inputVal}).done(function(data){
      // Display the returned data in browser
      resultDropdown.html(data);
      });
    } else{
      resultDropdown.empty();
    }
  });
    
  // Set search input value on click of result item
  $(document).on("click", ".result p", function(){
    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
    var h = document.getElementById('hhh').value;
    var xmlhttpreq;
    try
  {
  // Firefox, Opera 8.0+, Safari
  xmlhttpreq=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlhttpreq=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      xmlhttpreq=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
    
    var url= 'table_schedule_repajax.php';
    url= url + '?teach='+ h;
    //alert(url);
    xmlhttpreq.onreadystatechange=function(){if(this.readyState==4)
        {
             var myObject = JSON.parse(this.responseText);

//alert(myObject);  // Received the data 
var facName=document.getElementById('labelS').textContent;
var str="<thead><tr><th class='hidden-phone' position='center' style='font-style: bold;text-align:center;' background-color='white' colspan='3'>SCHEDULE REPORT</th></tr><tr><th class='hidden-phone' style='font-style: bold;' background-color='white' colspan='3'>Name: "+facName+"</th></tr><tr><th class='hidden-phone'>Class</th><th class='hidden-phone'>Subject</th><th class='hidden-phone'>Schedule</th></tr></thead><tbody>";

for(i=0;i<myObject.data.length;i++)
{ 
str = str + "<tr><td class='editable' id='tclass'>" + myObject.data[i].tclass + "</td><td class='editable' id='tsubj'>" + myObject.data[i].tsubj + "</td><td class='editable' id='sched'>" + myObject.data[i].sched + " </td></tr>"

}
str = str + "</tbody>" ;
//alert(str);
document.getElementById("subj-grid").innerHTML=str;
}
}
    xmlhttpreq.open('GET', url, true);
    xmlhttpreq.send();

        document.getElementById('labelS').innerHTML=h;      
        $(this).parent(".result").empty();  
    });
});

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
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
            <div class="search-box right" style="color: black; width: 17.5%">
            <input id='hhh' type="text" autocomplete="off" placeholder="Search Faculty.." /><button class="btn btn-primary" onclick="printDiv('printableArea')">Generate PDF</button>
            <div class="result">
        
            </div>
            </div>
            <div class = "Info">
            <label class='hidden' id= "labelS"></label>
            </div>
          
            

              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <div id="printableArea" class="row">
           

            <div class="col-md-4">             
          </div>

          <div class="w3-panel w3-blue w3-card-4">

          <table id = "subj-grid" class="table table-striped table-style-two" cellpadding="0" cellspacing="0">

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
