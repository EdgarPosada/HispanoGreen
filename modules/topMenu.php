<?php

include_once 'Classes/validaSession.php';
include_once 'Classes/Control.php';

$con = new Control();

$status = validaSession();
    if($status != 0)
    {
        $user = $_SESSION['user'];
        $sign = 'Logout';
        $ref = '<a href="confUsuario.php">';
        $titleConf = 'Configura tu cuenta';
        
        //Se asigna la variable de sesion con el correo al metodo setEmail
        $con->setEmail($user);
        
        //Se realiza una consulta para obtener la imagen del Usuario
        $usuarioImagen = $con->getUsuarioImg();
        $userImg = mysql_fetch_array($usuarioImagen);
        
        //Se asigna la ruta de la imagen del usuario a la variable $usImg
        //ahora la variable tiene la ruta de la imagen de Usuario
            $usImg = $userImg['reg_userImg'];
    }
    else
    {
        $user = 'No has iniciado sesion';
        $sign = 'Login';
        $ref = '';
        $titleConf = 'No has iniciado sesion';
        $usImg = '';
    }


?>


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
  <link rel="shortcut icon" href="..img/favicon/favicon.png">
  </head>
  <div style="background-color:#5d9900; height: 55px; width: 1355px; position: fixed; z-index: 20; ">
      
      <!--Div donde esta search y los botones de login y el usuario-->
      <div style=" width: 400px; height: 50px;">
          <div style="width: 50px; height: 50px; position: relative; right: -20px; " >
              <img src="img/littleLogo.png" >
          </div>
          <div style=" position: relative;  width: 250px; right: -110px; top: -40px;" >
              <form method="get" id="searchform" action="#" class="form-search">
                  <input type="text" value="" name="search" id="s" class="input-medium"/>
                  <button type="submit" class="btn">Search</button>
                  <br>
              </form>
          </div>
      </div>
      
      <div style=" width: 415px; height: 55px; position: relative; right: -930px; top: -50px;">
          <div style="position: relative; width: 58px;  top: 15px; " >
              <a href="Classes/Logout.php"><font color="white" ><b><?php echo $sign; ?></b></font></a>
          </div>

          <div style=" position: relative;  width: 240px;  right: -70px; top: -10px; ">

              <font size="4" color="white" ><b>Hello:</b></font><span><font color="white" ><?php echo $user; ?></a></font></span>
          </div>
          <div style="position: relative; width: 50px; height: 50px; right: -320px; top: -50px;">
              <img src="thumb.php?file=/<?php echo $usImg;?>&width=80" /></a>
          </div>
          <div style="position: relative; width: 40px; height: 40px;  right: -370px; top: -90px;">
              <?php echo $ref; ?><img src="img/gearIcon2.png" title="<?php echo $titleConf;?>" /></a>
          </div>
      </div>
      
  </div>
  <div class="container" style=" margin-top: 50px; position: relative; right: 130px;">
      
      <div style="height: 5px;">
          
      </div>

      <div class="row">
          <div class="span6">
              <div class="logo" style=" right: 160px;">
                  <img src="img/logoHG.png" title="Foro para ayuda a Negocios Hispanos" />
              </div>
          </div>
          <div class="span6">
              <div class="form">
                  
              </div>
          </div>


      </div>
  </div>
