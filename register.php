<?php 
$fecha = date("Y-m-d");

//Variables del formulario
$nombre = '';
$apellido = '';
$email = '';
$estado = '';
//$usuario = '';
$contra = '';
$imagen = '';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from responsivewebinc.com/premium/metro/green/register.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:17:11 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Registrarse - Hispano Green</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
   <link href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/font-awesome.css">
  <link href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/prettyPhoto.css" rel="stylesheet">
  <!-- Parallax slider -->
  <link rel="stylesheet" href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/slider.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/flexslider.css">

  <link href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/style.css" rel="stylesheet">

  <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
  <link href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/green.css" rel="stylesheet">

  <link href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../../../../foroNegociosHispanosOLD/responsivewebinc.com/premium/metro/green/img/favicon/favicon.png">
</head>

<body>

<!-- Header Starts -->
<header>
<?php include 'modules/topMenu.php'; ?>
    </header>

<!-- Navigation bar starts -->
          <?php include 'modules/navigation.php'; ?>

<!-- Navigation bar ends -->

<div class="content">
  <div class="container">

          <div class="register">
              <div class="row">
                <div class="span6">
                  <h2>Registrate en HispanoGreen.com</h2>
                  <p class="big grey">Morbi tincidunt posuere turpis eu laoreet</p>
                  <p>Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>
                  <p>Nullam in est urna. In vitae adipiscing enim. In ut nulla est. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. </p>

                </div>

                <div class="span6">
                  <div class="formy">
                     <h5>Registrate es Gratis!</h5>
                                  <div class="form">
                                      <!-- Register form (not working)-->
                                      <form class="form-horizontal" action="regCompletado.php"  method="POST">
                                          <!-- Name -->
                                          <div class="control-group">
                                            <label class="control-label" for="name">Nombre</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" id="nombre" name="nombre" required="" value="<?php echo $nombre;?>">
                                            </div>
                                          </div>
                                          <!--Apellido-->
                                          <div class="control-group">
                                            <label class="control-label" for="name">Apellido</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" id="apellido" name="apellido" required="" value="<?php echo $apellido; ?>">
                                            </div>
                                          </div>
                                          <!-- Email -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Email</label>
                                            <div class="controls">
                                                <input type="email" class="input-large" id="email" name="email" required="" value="<?php echo $email; ?>">
                                            </div>
                                          </div>
                                          <!-- Select box -->
                                          <div class="control-group">
                                            <label class="control-label" for="select">Estado</label>
                                            <div class="controls">                               
                                                <select name="estado" required="">
                                                <option><?php echo $estado; ?></option>
                                                <option>Alabama</option> 
                                                <option>Alaska</option>
                                                <option>Arkansas</option>
                                                <option>California</option>
                                                <option>Carolina del Norte</option>
                                                <option>Carolina del Sur</option>
                                                <option>Colorado</option>
                                                <option>Connecticut</option>
                                                <option>Dakota del Norte</option>
                                                <option>Dakota del Sur</option>
                                                <option>Delaware</option>
                                                <option>Florida</option>
                                                <option>Georgia</option>
                                                <option>Hawai</option>
                                                <option>Idaho</option>
                                                <option>Illinois</option>
                                                <option>Indiana</option>
                                                <option>Iowa</option>
                                                <option>Kansas</option>
                                                <option>Kentuky</option>
                                                <option>Louisiana</option>
                                                <option>Maine</option>
                                                <option>Maryland</option>
                                                <option>Massachusetts</option>
                                                <option>Michigan</option>
                                                <option>Minnesota</option>
                                                <option>Mississippi</option>
                                                <option>Missouri</option>
                                                <option>Montana</option>
                                                <option>Nebraska</option>
                                                <option>Nevada</option>
                                                <option>Nueva Jersey</option>
                                                <option>Nueva York</option>
                                                <option>Nuevo Hampshire</option>
                                                <option>Nuevo Mexico</option>
                                                <option>Ohio</option>
                                                <option>Oklahoma</option>
                                                <option>Oregon</option>
                                                <option>Pennsylvania</option>
                                                <option>Rhode Island</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Utha</option>
                                                <option>Vermont</option>
                                                <option>Virginia</option>
                                                <option>West Virginia</option>
                                                <option>Washignton</option>
                                                <option>Winconsin</option>
                                                <option>Wyoming</option>
                                                </select>  
                                            </div>
                                          </div>                                           
                                          <!-- Username -->
<!--                                          <div class="control-group">
                                            <label class="control-label" for="username">Usuario</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" id="usuario" name="usuario" required="" value="">
                                            </div>
                                          </div>-->
                                          <!-- Password -->
                                          <div class="control-group">
                                              <label class="control-label" for="email">Contrase&ncaron;a</label>
                                            <div class="controls">
                                                <input type="password" class="input-large" id="contraseña" name="contra" required="" value="<?php echo $contra; ?>">
                                            </div>
                                          </div>
                                          <input type="hidden" class="input-large" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
                                          <!-- Checkbox -->
                                          <div class="control-group">
                                             <div class="controls">
                                                <label class="checkbox inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="deacuerdo" value="deacuerdo" checked=""> Estoy deacuerdon con los terminos y condiciones.
                                                    
                                                </label>
                                                 <label class="checkbox inline">
                                                     <input type="hidden" id="inlineCheckbox1" name="fecha" value="<?php echo $fecha; ?>" checked="">
                                                    
                                                </label>
                                             </div>
                                          </div> 
                                          
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                            <button type="submit" class="btn">Registrarse</button>
<!--                                            <button type="reset" class="btn">Reset</button>-->
                                          </div>
                                      </form>
                                             Ya estas registrado en HispanoGreen.com? <a href="login.html">Login</a>
                                    </div> 
                                  </div>

                </div>
              </div>
            </div>              


  <div class="border"></div>

<!-- Product & links starts -->

<?php include 'modules/footer.php'; ?>

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

<!-- Mirrored from responsivewebinc.com/premium/metro/green/register.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:17:11 GMT -->
</html>