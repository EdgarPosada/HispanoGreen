<?php
include_once 'Classes/Control.php';
$con = new Control();

if(isset($_REQUEST['ingresar']))
{
    $con->setEmail($_POST['email']);
    $con->setContra($_POST['contra']);
    $res = $con->getUserLogin();
    
    
    if($res == 1)
    {
        session_start();
        
        $_SESSION['user'] = $_POST['email'];
        header('Location: index1.php');
    }
    else
        $_SESSION['email'] = '';
    
    
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from responsivewebinc.com/premium/metro/green/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:17:11 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Login - Metro Mania</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome.css">
  <link href="style/prettyPhoto.css" rel="stylesheet">
  <!-- Parallax slider -->
  <link rel="stylesheet" href="style/slider.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="style/flexslider.css">

  <link href="style/style.css" rel="stylesheet">

  <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
  <link href="style/green.css" rel="stylesheet">

  <link href="style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Header Starts -->
<header>
    <?php include './modules/topMenu.php' ?>
</header>>

<!-- Navigation bar starts -->
         <?php include './modules/navigation.php' ?>

<!-- Navigation bar ends -->

<div class="content">
  <div class="container">

          <div class="register">
              <div class="row">
                <div class="span6">
                  <h2>Register Today</h2>
                  <p class="big grey">Morbi tincidunt posuere turpis eu laoreet</p>
                  <p>Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>
                  <p>Nullam in est urna. In vitae adipiscing enim. In ut nulla est. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>

                </div>

                <div class="span6">
                  <div class="formy">
                     <h5>Accede a tu cuenta.</h5>
                                  <div class="form">
                                      <!-- Login form (not working)-->
                                      <form class="form-horizontal" action="login.php" method="POST">
                                          <!-- Username -->
                                          <div class="control-group">
                                            <label class="control-label" for="username">Correo Electronico</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" id="username" name="email">
                                            </div>
                                          </div>
                                          <!-- Password -->
                                          <div class="control-group">
                                              <label class="control-label" for="email">Contrase&ncaron;a</label>
                                            <div class="controls">
                                                <input type="password" class="input-large" id="password" name="contra">
                                            </div>
                                          </div>
                                          <div class="control-group">
                                             <div class="controls">
                                                <label class="checkbox">
                                                <input type="checkbox"> Recordarme
                                                </label>
                                             </div>
                                          </div>                                                                               
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                             <button type="submit" class="btn" name="ingresar">ingresar</button>
                                             
<!--                                            <button type="reset" class="btn">Reset</button>-->
                                          </div>
                                      </form>
                                             Aun no tienes una cuenta con HispanoGreen.com? <a href="register.php">Registrate</a>
                                    </div> 
                                  </div>

                </div>
              </div>
            </div>              


  <div class="border"></div>

<!-- Product & links starts -->

<div class="prod">
    <div class="row">
      <div class="span4">
        <div class="home-links">
          <div class="col-l">
            <h5>Downloads</h5>
            <ul>
              <li><a href="#">Linux 8</a></li>
              <li><a href="#">PlayStation</a></li>
              <li><a href="#">GTalk</a></li>
              <li><a href="#">Google Search</a></li>
              <li><a href="#">Linux Phone</a></li>
            </ul>
          </div>
          <div class="col-r">
            <h5>Support</h5>
            <ul>
              <li><a href="#">Linux Update</a></li>
              <li><a href="#">PlayStation</a></li>
              <li><a href="#">GTalk</a></li>
              <li><a href="#">Google Search</a></li>
              <li><a href="#">Linux Phone</a></li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="span8"> 
        <div class="home-product">
          <div class="home-prod-img" id="s1">
              <img src="img/photos/s1.jpg" />
              <img src="img/photos/s2.jpg" />
              <img src="img/photos/s3.jpg" />
          </div>
          <h3>Canonical Linux 8</h3>
          <p>Aliquam ut feugiat ante. Curabitur justo aliquam. Maecenas turpis urna, eleifend et venenatis eget, ultricies quis urna. Aliquam ut feugiat ante. Curabitur justo aliquam. Aliquam ut feugiat ante. Curabitur justo aliquam. </p>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>

<!-- Product & links ends --> 

  </div>
</div>

<!-- Social -->

<div class="social-links">
  <div class="container">
    <div class="row">
      <div class="span12">
        <p class="big"><span>Follow Us On</span> <a href="#"><i class="icon-facebook"></i>Facebook</a> <a href="#"><i class="icon-twitter"></i>Twitter</a> <a href="#"><i class="icon-google-plus"></i>Google Plus</a> <a href="#"><i class="icon-linkedin"></i>LinkedIn</a></p>
      </div>
    </div>    
  </div>
</div>


<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">

      <div class="widgets">
        <div class="span4">
          <div class="fwidget">

            <div class="col-l">
              <h6>Downlaods</h6>
              <ul>
                <li><a href="#">Condimentum</a></li>
                <li><a href="#">Etiam at</a></li>
                <li><a href="#">Fusce vel</a></li>
                <li><a href="#">Vivamus</a></li>
                <li><a href="#">Pellentesque</a></li>
              </ul>
            </div>

            <div class="col-r">
              <h6>Support</h6>
              <ul>
                <li><a href="#">Condimentum</a></li>
                <li><a href="#">Etiam at</a></li>
                <li><a href="#">Fusce vel</a></li>
                <li><a href="#">Vivamus</a></li>
                <li><a href="#">Pellentesque</a></li>
              </ul>
            </div>

          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>Categories</h6>
            <ul>
              <li><a href="#">Condimentum - Condimentum gravida</a></li>
              <li><a href="#">Etiam at - Condimentum gravida</a></li>
              <li><a href="#">Fusce vel - Condimentum gravida</a></li>
              <li><a href="#">Vivamus - Condimentum gravida</a></li>
              <li><a href="#">Pellentesque - Condimentum gravida</a></li>
            </ul>
          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>Recent Posts</h6>
            <ul>
              <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
              <li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li>
              <li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li>
              <li><a href="#">Vivamus scelerisque dui in massa</a></li>
              <li><a href="#">Pellentesque eget adipiscing dui semper</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="span12">
          <div class="copy">
            <h6>Metro <span class="color">Mania</span></h6>
            <p>Copyright &copy; <a href="#">Your Site</a> - <a href="index-2.html">Home</a> | <a href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a> | <a href="contactus.html">Contact Us</a></p>
          </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer> 	

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/jquery.isotope.js"></script> <!-- Isotope for gallery -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto for images -->
<script src="js/jquery.cslider.js"></script> <!-- Parallax slider -->
<script src="js/modernizr.custom.28468.js"></script>
<script src="js/filter.js"></script> <!-- Filter for support page -->
<script src="js/cycle.js"></script> <!-- Cycle slider -->
<script src="js/jquery.flexslider-min.js"></script> <!-- Flex slider -->

<script src="js/easing.js"></script> <!-- Easing -->
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from responsivewebinc.com/premium/metro/green/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:17:11 GMT -->
</html>