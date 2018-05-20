<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>School Grading System</title>
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

<body class="page-index has-hero">
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

                <p ><img src="img/sgslogo.png" style="float: left" width="75px" height="75px" hspace="10" >
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
                
                <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="registration.php" class="text-uppercase">Register</a></li>
                <li class="dropdown-"><i class="fa fa-sign-in text-primary"></i> <a href="login.php" class="text-uppercase">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!--div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <!--button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          <!--div class="navbar-text social-media social-media-inline pull-right">
            <!--@todo: replace with company social media details-->
            <!--a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <!--everything within this div is collapsed on mobile-->
          <!--div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="index.php"><i class="fa fa-home"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <!--ul class="dropdown-menu">
                  <li class="dropdown-header">Flexor Version Pages</li>
                  <li><a href="elements.php" tabindex="-1" class="menu-item">Elements</a></li>
                  <li><a href="about.php" tabindex="-1" class="menu-item">About / Inner Page</a></li>
                  <li><a href="login.php" tabindex="-1" class="menu-item">Login</a></li>
                  <li><a href="register.php" tabindex="-1" class="menu-item">Sign-Up</a></li>
                  <li class="dropdown-footer">Dropdown footer</li>
                </ul>
              </li>
              <!--li><a href="#">Menu Link</a></li>
              <li class="dropdown dropdown-mm">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <!--ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                  <li class="row">
                    <ul class="col-md-6">
                      <li class="dropdown-header">Websites and Apps</li>
                      <li><a href="#">Analysis and Planning</a></li>
                      <li><a href="#">User Experience / Information Architecture</a></li>
                      <li><a href="#">User Interface Design / UI Design</a></li>
                      <li><a href="#">Code &amp; Development / Implementation &amp; Support</a></li>
                    </ul>
                    <ul class="col-md-6">
                      <li class="dropdown-header">Enterprise solutions</li>
                      <li><a href="#">Business Analysis</a></li>
                      <li><a href="#">Custom UX Consulting</a></li>
                      <li><a href="#">Quality Assurance</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-footer">
                    <div class="row">
                      <div class="col-md-7">Like the lite version? <strong>Get the extended version of Flexor.</strong></div>
                      <div class="col-md-5">
                        <a href="https://bootstrapmade.com" class="btn btn-more btn-lg pull-right"><i class="fa fa-cloud-download"></i> Get It Now</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.navbar-collapse >
        </div-->
      </div>
    </div>
    <div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->
            <!--Slide 1-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 col-md-push-6 item-caption">
                  <h2 class="h1 text-weight-light">
                      Welcome to <span class="text-primary">School Grading System</span>
                    </h2>
                  <h4>
                      
                    </h4>
                  <p>Grading system are designed to provide incentives for achievement and assist in identifying, 
                    problem area of a student. it is the most commonly used means of analyzing sudent performance
                    talents, and skills. Students grades are vital information needed in advancing to the next grade/
                    year level and its accuracy is very important.</p>
                </div>
                <!--div class="col-md-6 col-md-pull-6 hidden-xs">
                  <img src="img/slides/slide1.png" alt="Slide 1" class="center-block img-responsive">
                </div-->
              </div>
            </div>
            <!--Slide 2-->
            <div class="item">
              <div class="row">
                <div class="col-md-6 text-right-md item-caption">
                  <h2 class="h1 text-weight-light">
                      <span class="text-primary">System Overview</span> 
                    </h2>
                  <p>Provides easy </p>
                </div>
                <!--div class="col-md-6 hidden-xs">
                  <img src="img/slides/slide2.png" alt="Slide 2" class="center-block img-responsive">
                </div-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <!-- Mission Statement -->
    <!--div class="mission text-center block block-pd-sm block-bg-noise">
      <!--div class="container">
        <!--h2 class="text-shadow-white">
            We are a full digital agency based in London. We are experienced professionals in building websites, applications, mobile solutions.
            
          </h2>
      </div-->
    </div>
    
    <!-- Services -->
    <div class="services block block-bg-gradient block-border-bottom">
      <div class="container">
        <!--h2 class="block-title">
            
          </h2-->
        <div class="row">
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-group fa-stack-1x fa-inverse"></i> </span>
            <h4 class="text-weight-strong">
                About Us
              </h4>
            <p>System Developers which aims to provide reliable software that can be used as a tool for school and organizations </p>
            
          </div>
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-pencil fa-stack-1x fa-inverse"></i> </span>
            <h4 class="text-weight-strong">
                Contact Us
              </h4>
            <p>SGS Developers <br>
            Leslie O. Escaro <br>
            Ellen Frances S. Tarriga <br>
            Camille R. Carpeso <br>
            Jophel Cyrus D. Ibasan <br>
            SGS_developers@gmail.com <br>
            09321269376</p>
            <a><label class="fa fa-twitter"></label></a>
            <a><label class="fa fa-facebook"></label></a>
            <a><label class="fa fa-linkedin"></label></a>
            <a><label class="fa fa-google-plus"></label></a>
          </div>
        </div>
      </div>
    </div>
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
