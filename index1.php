<?php

include './Classes/HGBlog.php';
$reg = new hbblog();

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from responsivewebinc.com/premium/metro/green/index1.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:16:29 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Metro Mania</title>
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
  <?php include 'modules/topMenu.php' ?>
</header>

<!-- Navigation bar starts -->
          
<?php include 'modules/navigation.php'; ?>

<!-- Navigation bar ends -->

<div class="content">
  <div class="container">

<!-- Slider starts -->
  
<div class="row"  >
      <div class="span12">
        <!-- Slider (Parallax Slider) -->
          <div id="da-slider" class="da-slider">
            <div class="da-slide">
              <div class="da-blue">
                <h2><span>Capital para Negocios Hispanos</span></h2>
                <p>Necesita capital para su negocio?... Entre al apartado de "Capital para negocios" y le mostraremos opciones para adquirir capital.</p>
                
                <a href="landingCapitalParaNegocios.php" class="da-link">Read more</a>
                <div class="da-img"><img src="img/capital para negocios Main.png" alt="Capital para Negocios Hispanos" height="80" /></div>
              </div>
            </div>
            <div class="da-slide">
              <div class="da-green">
                <h2><span>Ultimas Noticias</span></h2>
                <p>Enterese de las ultimas noticias que acontecen en Estados Unidos.</p>
                <a href="#" class="da-link">Read more</a>
                <div class="da-img"><img src="img/noticiasNH.png" alt="image01" height="400" /></div>
              </div>
            </div>
            <div class="da-slide">
              <h2><span>Revolution</span></h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <a href="#" class="da-link">Read more</a>
              <div class="da-img"><img src="img/parallax/3.png" alt="image01" /></div>
            </div>
            <div class="da-slide">
              <h2><span>Quality Control</span></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <a href="#" class="da-link">Read more</a>
              <div class="da-img"><img src="img/parallax/4.png" alt="image01" /></div>
            </div>
            <nav class="da-arrows">
              <span class="da-arrows-prev"></span>
              <span class="da-arrows-next"></span>
            </nav>
          </div>
      </div>
    </div>

<!-- Slider Ends -->

<!-- Hero Unit -->

<!--Contenido de las categorias-->

<!--Que es Hipanogreen?-->
<div>
    <div style="height: 200px;"  >
        <div style="background-color: #5d9900;" >
            <h4> <font color="white" > Que es HispanoGreen.com? </font> </h4>
        </div>
        <div style=" width: 200px; position: relative; right: -150px; " >
            <img src="img/logoSolo.png" />
        </div>
        <div style="width: 500px; position: relative; right: -400px; top: -150px;" >
            <p><b>HispanoGreen.com es un foro para informar y apoyar a los negocios hispanos en los estados unidos, este foro sirve tambien para dar a conocer tu negocio en la internet</b></p>
        </div>
    </div>
</div>
<hr/>

<!--Fin de que es Hispanogreen-->

    <!--Noticias-->
    <div>
        <div style="height: 450px;">
            <div style="background-color: #5d9900;" >
                <h4> <font color="white" > Noticias </font> </h4>
            </div>
        <?php
            $res = $reg->obtenerDatos();
            $res2 = mysql_fetch_array($res)
        ?>
        <a href="#" ><h5><font color="green" ><b><?php echo $res2['tituloEntrada'] ?></b></font></h5></a>
        <br>
        <?php echo 'by:'; echo $res2['autorEntrada']  ?>
        <br>
        <img width="300px" height="300px" src="<?php echo $res2['imagenEntrada']; ?>" style="max-width: 300px; max-height: 300px;" />
        <div style="width: 500px; position: relative; right: -400px; top: -290px;">
            <p><b><?php
                //Se muestran solo 200 caracteres en el contenido
                $cont = $res2['contenidoEntrada'];
                $cont = substr($cont, 0, 200);
                echo $cont . '...';
                ?>
            </b></p>
            <br>
            <a href="#" >Leer articulo completo...</a>
        </div>
      </div>  
    </div>
    <hr/>
    <!--Fin de Noticias-->
    
    <!--Capital para negocios-->
    <div>
        <div style="height: 400px;">
        <div style="background-color: #5d9900;" >
                <h4> <font color="white" > Capital para Negocios </font> </h4>
            </div>
            <a href="landingCapitalParaNegocios.php" ><h5><font color="green" ><b>Necesitas Capital para tu Negocio?</b></font></h5></a>
        <br>
        <div style="background-color: #004c99; width: 300px;">
            <img src="img/capitalParaNegociosIndex1.jpg" width="400px" style="max-width: 400px; max-height: 300px;" />
        </div>
        <div style="width: 450px; position: relative; right: -420px; top: -250px;">
            <p><b>Aumentar el acceso a capital para empresarios hispanos:
Negocios hispanos enfrentan varios retos en acceder capital.  Un componente importante en poder ayudarlos son los programas de préstamos, cuales proporcionan 40% de préstamos de largo plazo a empresas pequeñas</b>
            </p>
            <br>
            <a href="landingCapitalParaNegocios.php" >Leer articulo completo...</a>
        </div>
        <hr />
      </div>  
    </div>
    <hr/>
    
    <!--Fin de Capital para negocios-->
    

<!--Fin de los contenidos de las categorias-->


<!-- Hero Ends -->  

<!-- Discover starts -->

  <div class="discover">
    <div class="row">
      <div class="span12">
        <h3>Discover</h3>
        <div class="big grey">Check out some of our Cool Products.</div>
          <div class="dis-nav button">
            <a href="#" id="one">Linux 8</a> 
            <a href="#" id="two">Linux 7</a> 
            <a href="#" id="three">Linux Phone</a> 
            <a href="#" id="four">MS Office</a> 
            <a href="#" id="five">PlayStation</a> 
            <a href="#" id="six">GTalk</a>
          </div>

          <div class="dis-content">
            <div class="one">
                <h3>Linux 8</h3>
                <p>Linux 8. Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Aliquam ut feugiat ante. Curabitur lacinia nulla vel tellus elementum non mollis justo aliquam.</p>
                <a href="#" class="btn btn-warning"><i class="icon-shopping-cart"></i> Buy Now</a> <a href="#" class="btn btn-success">Try Now</a>
            </div>
            <div class="two">
                <h3>Linux 7</h3>
                <p>Linux 7. Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Aliquam ut feugiat ante. Curabitur lacinia nulla vel tellus elementum non mollis justo aliquam.</p>
                <a href="#" class="btn btn-warning"><i class="icon-shopping-cart"></i> Buy Now</a> <a href="#" class="btn btn-success">Try Now</a>
            </div>
            <div class="three">
               <h3>Linux Phone</h3>
                <p>Linux Phone. Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Aliquam ut feugiat ante. Curabitur lacinia nulla vel tellus elementum non mollis justo aliquam.</p>
                <a href="#" class="btn btn-warning"><i class="icon-shopping-cart"></i> Buy Now</a> <a href="#" class="btn btn-success">Try Now</a>              
            </div>
            <div class="four">
               <h3>MS Office</h3>
                <p>MS Office. Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Aliquam ut feugiat ante. Curabitur lacinia nulla vel tellus elementum non mollis justo aliquam.</p>
                <a href="#" class="btn btn-warning"><i class="icon-shopping-cart"></i> Buy Now</a> <a href="#" class="btn btn-success">Try Now</a>              
            </div>
            <div class="five">
               <h3>PlayStation</h3>
                <p>PlayStation. Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Aliquam ut feugiat ante. Curabitur lacinia nulla vel tellus elementum non mollis justo aliquam.</p>
                <a href="#" class="btn btn-warning"><i class="icon-shopping-cart"></i> Buy Now</a> <a href="#" class="btn btn-success">Try Now</a>              
            </div>
            <div class="six">
               <h3>GTalk</h3>
                <p>GTalk. Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Aliquam ut feugiat ante. Curabitur lacinia nulla vel tellus elementum non mollis justo aliquam.</p>
                <a href="#" class="btn btn-warning"><i class="icon-shopping-cart"></i> Buy Now</a> <a href="#" class="btn btn-success">Try Now</a>              
            </div>
          </div>
      </div>
    </div>
  </div>

<!-- Disconver ends --> 

<hr />

<!-- Services starts -->

  <div class="services">
    <div class="row">

      <div class="span12">
        <h3>Services</h3>
      </div>

      <div class="span6">
        <div class="col-l">
          <div class="service">
            <div class="b-orange serv-block">
              <i class="icon-cloud"></i>
              <h3>Linux 8</h3>
            </div>
            <p>Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean lacus hendrerit.</p>
            <a href="#">Take a look </a><i class="icon-double-angle-right"></i> 
          </div>
        </div>
        <div class="col-r">
          <div class="service">      
            <div class="b-purple serv-block">
              <i class="icon-briefcase"></i>
              <h3>Google</h3>
            </div>     
            <p>Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean lacus hendrerit.</p>
            <a href="#">Take a look </a><i class="icon-double-angle-right"></i>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="span6">
        <div class="col-l">
          <div class="service">
            <div class="b-green serv-block">
              <i class="icon-camera"></i>
              <h3>PlayStation</h3>
            </div>
            <p>Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean lacus hendrerit.</p>
            <a href="#">Take a look </a><i class="icon-double-angle-right"></i>
          </div>
        </div>
        <div class="col-r">
          <div class="service"> 
            <div class="b-blue serv-block">
              <i class="icon-home"></i>
              <h3>GTalk</h3>
            </div>        
            <p>Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean lacus hendrerit.</p>
            <a href="#">Take a look </a><i class="icon-double-angle-right"></i>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>


    </div>
  </div>

<hr />

<!-- Services Ends -->

<!-- Testimonial starts -->

<div class="testimonial">
  <div class="row">
    <div class="span6">
      <blockquote>
        <p>Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Nulla vitae cursus leo. </p>
        <small>Ashok, <span class="color">Google</span></small>
      </blockquote>
    </div>
    <div class="span6">
      <blockquote>
        <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit. Nulla vitae cursus leo. Praesent eleifend sodales felis, in congue purus scelerisque eget.</p>
        <small>Ravi, <span class="color">Canonical</span></small>
      </blockquote>
    </div>
  </div>
</div>

<!-- Testimonial ends -->

  <div class="border"></div>

<!-- Product & links starts -->

<?php include'modules/footer.php'; ?>  

</body>

<!-- Mirrored from responsivewebinc.com/premium/metro/green/index1.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:16:31 GMT -->
</html>