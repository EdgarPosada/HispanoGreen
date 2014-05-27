<?php 
require './Classes/Control.php';

$con = new Control();

$empFecha = date("Y-m-d");

//Variables del formulario
$empNombre = '';
$empDireccion = '';
$empTelefono = '';
$empCiudad = '';
$empEstado = '';
$empCodigoP = '';
$empWebsite = '';
$empProducto = '';
$empDescripcion = '';

if (isset($_REQUEST['registraEmpresa'])) 
{
    $empNombre = $_POST['nomEmpresa'];
    $empDireccion = $_POST['dirEmpresa'];
    $empTelefono = $_POST['telEmpresa'];
    $empCiudad = $_POST['ciudadEmpresa'];
    $empEstado = $_POST['estadoEmpresa'];
    $empCodigoP = $_POST['codigoEmpresa'];
    $empWebsite = $_POST['webEmpresa'];
    $empProducto = $_POST['productoEmpresa'];
    $empDescripcion = $_POST['descripcionEmpresa'];
    
    //Se asignan los valores de las variables a los seters de la clase Control
    $con->setNombreEmp($empNombre);
    $con->setDireccionEmp($empDireccion); 
    $con->setTelefonoEmp($empTelefono);
    $con->setCiudadEmp($empCiudad);
    $con->setEstadoEmp($empEstado);
    $con->setCodigoPEmp($empCodigoP);
    $con->setWebsiteEmp($empWebsite);
    $con->setProductoEmp($empProducto);
    $con->setDescripcionEmp($empDescripcion);
    $con->setFechaEmp($empFecha);
    
    //Se obtiene la latitud de la direccion
    $lat = $con->getLatitude();
    
    //Se obtiene la longitud de la direccion
    $lng = $con->getLongitud();
    
    //Se asignan la longitud y latitud a los seters
    $con->setLatitudEmp($lat);
    $con->setLongitudEmp($lng);
    
    //Se ejecuta la funcion para guardar los datos de la empresa
    $con->registraEmpresa();
    
    //Se manda un mensaje de que los datos fueron ingresados correctamente
    ?>
    <script languaje="javascript">
        alert('Los datos fueron registrados correctamente');
    </script>
    <?php
//refrescamos la pagina 
    $self = $_SERVER['PHP_SELF'];
header('refresh:300; url=$self');

}
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
                  <h2>Registra a tu Empresa en HispanoGreen.com</h2>
                  <p class="big grey">Obten los beneficios que HispanoGreen.com tiene para ti</p>
                  <p>Al registrar a tu empresa con HispanoGreen.com te obsequiamos un espacio en nuestro apartado de <span> <a href="directorioCat.php">Directorio Empresarial</a></span> en el que puedes hacer publicidad a tu empresa completamente GRATIS! </p>
                  <p>Ofrecemos completa discrecion en cuanto a datos personales, solo se pueden ver los datos de su empresa que usted elija </p>
                  <p>Hoy en dia es muy importante que tu empresa tenga publicidad en internet "Quien no esta en internet no vende" </p>

                </div>

                <div class="span6">
                  <div class="formy">
                     <h5>Registra a tu Empresa es y seguira siendo Gratis!</h5>
                                  <div class="form">
                                      <!-- Register form (not working)-->
                                      <form class="form-horizontal" action="registrarEmpresa.php"  method="POST">
                                          <!-- Nombre de la empresa -->
                                          <div class="control-group">
                                            <label class="control-label" for="name">Nombre de la Empresa</label>
                                            <div class="controls">
                                                <input style="position: relative; top: 10px;" type="text" class="input-large" id="nombre" name="nomEmpresa" required="" value="<?php echo $empNombre;?>">
                                            </div>
                                          </div>
                                          <!--Direccion fisica de la empresa-->
                                          <div class="control-group">
                                            <label class="control-label" for="name">Direccion Fisica</label>
                                            <div class="controls">
                                                <input style="position: relative; top: 10px;" type="text" class="input-large" id="apellido" name="dirEmpresa" required="" value="<?php echo $empDireccion; ?>">
                                            </div>
                                          </div>
                                          
                                          <!--Telefono de la empresa-->
                                          <div class="control-group">
                                            <label class="control-label" for="name">Telefono</label>
                                            <div class="controls">
                                                <input style="position: relative; top: 0px;" type="text" class="input-large" id="apellido" name="telEmpresa" required="" value="<?php echo $empTelefono; ?>">
                                            </div>
                                          </div>
                                          
                                          <!-- Ciudad -->
                                          <div class="control-group">
                                            <label class="control-label" for="email">Ciudad</label>
                                            <div class="controls">
                                                <input  type="text" class="input-large" id="email" name="ciudadEmpresa" required="" value="<?php echo $empCiudad; ?>">
                                            </div>
                                          </div>
                                          <!-- Estado  -->
                                          <div class="control-group">
                                            <label class="control-label" for="select">Estado</label>
                                            <div class="controls">                               
                                                <select name="estadoEmpresa" required="">
                                                <option><?php echo $empEstado; ?></option>
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
                                              <label class="control-label" for="email">Codigo Postal</label>
                                            <div class="controls">
                                                <input style="position: relative; top: 10px;" type="text" class="input-large" id="contraseña" name="codigoEmpresa" required="" value="<?php echo $empCodigoP; ?>">
                                            </div>
                                          </div>
                                          
                                          <div class="control-group">
                                              <label class="control-label" for="email">Sitio web de su empresa</label>
                                            <div class="controls">
                                                <input style="position: relative; top: 10px;" type="text" class="input-large" id="contraseña" name="webEmpresa" required="" value="<?php echo $empWebsite; ?>">
                                            </div>
                                          </div>
                                          
                                          <div class="control-group">
                                              <label class="control-label" for="email">Producto o Servicio que vende</label>
                                            <div class="controls">
                                                <select style="position: relative; top: 15px;" required="" name="productoEmpresa" >
                                                    <option><?php echo $empProducto; ?></option>
                                                    <option>Compras</option>
                                                    <option>Construccion</option>
                                                    <option>Educacion</option>
                                                    <option>Empresas y Servicios</option>
                                                    <option>Entretenimento</option>
                                                    <option>Financieros</option>
                                                    <option>Gastronomia</option>
                                                    <option>Industria</option>
                                                    <option>Informatica</option>
                                                    <option>Salud y Bienestar</option>
                                                    <option>Transporte</option>
                                                    <option>Viajes</option>
                                                </select>
                                            </div>
                                          </div>
                                          
                                          <div class="control-group">
                                              <label class="control-label" for="email">Anuncio que desea mostrar en el Directorio Empresarial</label>
                                            <div class="controls">
                                                <textarea  name="descripcionEmpresa" rows="10" required="" ><?php echo $empDescripcion; ?></textarea>
                                            </div>
                                          </div>
                                          
                                          <input type="hidden" class="input-large" id="fecha" name="fechaEmpresa" value="">
                                          <!-- Checkbox -->
                                          <div class="control-group">
                                             <div class="controls">
                                                <label class="checkbox inline">
                                                    <input type="checkbox" id="inlineCheckbox1" name="deacuerdo" value="deacuerdo" checked=""> Estoy deacuerdon con los terminos y condiciones.
                                                    
                                                </label>
                                                 
                                             </div>
                                          </div> 
                                          
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                             <button type="submit" class="btn" name="registraEmpresa">Registrarse</button>
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