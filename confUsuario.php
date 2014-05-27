<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from responsivewebinc.com/premium/metro/green/404.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:16:37 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Configurar Cuenta - Hispano Green</title>
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
  
  <!--My Css-->
  <link href="style/myCss.css" type="text/css" rel="stylesheet" >
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<script>
    //Codigo javascript para el toggle de Nombre
    $(document).ready(function(){
                $("#editNombre").click(function(){
                    $("#divApellido").hide();
                    $("#divEmail").hide();
                    $("#divEstado").hide();
                    $("#divContra").hide();
                    $("#divImagen").hide();
                    $("#divEmpresa").hide();
                    $("#divNombre").fadeToggle();
                });
            });
            
            //Codigo javascript para el toggle de Apellido
            $(document).ready(function(){
                $("#editApellido").click(function(){
                    $("#divEmail").hide();
                    $("#divEstado").hide();
                    $("#divNombre").hide();
                    $("#divContra").hide();
                    $("#divImagen").hide();
                    $("#divEmpresa").hide();
                    $("#divApellido").fadeToggle();
                });
            });
            //Codigo javascript para el toggle de Email
            $(document).ready(function(){
                $("#editEmail").click(function(){
                    $("#divApellido").hide();
                    $("#divEstado").hide();
                    $("#divNombre").hide();
                    $("#divContra").hide();
                    $("#divImagen").hide();
                    $("#divEmpresa").hide();
                    $("#divEmail").fadeToggle();
                });
            });
            
             //Codigo javascript para el toggle de Estado
            $(document).ready(function(){
                $("#editEstado").click(function(){
                    $("#divApellido").hide();
                    $("#divEmail").hide();
                    $("#divNombre").hide();
                    $("#divContra").hide();
                    $("#divImagen").hide();
                    $("#divEmpresa").hide();
                    $("#divEstado").fadeToggle();
                });
            });
            
            //Codigo javascript para el toggle de la Contraseña
            $(document).ready(function(){
                $("#editContra").click(function(){
                    $("#divApellido").hide();
                    $("#divEmail").hide();
                    $("#divNombre").hide();
                    $("#divEstado").hide();
                    $("#divImagen").hide();
                    $("#divEmpresa").hide();
                    $("#divContra").fadeToggle();
                });
            });
            
            //Codigo javascript para el toggle de la Imagen de Usuario
            $(document).ready(function(){
                $("#editImagen").click(function(){
                    $("#divApellido").hide();
                    $("#divEmail").hide();
                    $("#divNombre").hide();
                    $("#divEstado").hide();
                    $("#divContra").hide();
                    $("#divEmpresa").hide();
                    $("#divImagen").fadeToggle();
                });
            });
            
            //Codigo javascript para el toggle de la Empresa
            $(document).ready(function(){
                $("#editEmpresa").click(function(){
                    $("#divApellido").hide();
                    $("#divEmail").hide();
                    $("#divNombre").hide();
                    $("#divEstado").hide();
                    $("#divContra").hide();
                    $("#divImagen").hide();
                    $("#divEmpresa").fadeToggle();
                });
            });
</script>



<body>

<!-- Header Starts -->
<header>
<?php include './modules/topMenu.php'; ?>
</header>

<!--Codigo PHP-->
<?php
include_once 'Classes/Control.php';
include_once 'modules/actualizarContra.php';

//Objetos
$con = new Control();
$camContra = new ActualizaContra();

$nombre = '';
$apellido = '';
$email = '';
$estado = '';
$contra = '';
$contraUsuario = '';
$nombreImagenUsuario = '';
$emailContra = '';



//Validaciones para saber si se presiono el boton para actualizar el nombre
if(isset($_REQUEST['actualizaNombre']))
{
    $nombre = $_POST['nombre'];
    $contra = $_POST['contraNombre'];
    
    //Se asigna el valor de la variable de sesion email
    $con->setEmail($_SESSION['user']);
    
    //Se realiza una consulta para obtener la contraseña y validarla 
    //para realizar los cambios
    $reg = $con->getUsuario();
    $reg2 = mysql_fetch_array($reg);
    
    $contraUsuario = $reg2['reg_contra'];
    
    //Se valida que la contraseña ingresada sea igual a la que esta
    //en la base de datos
    if($contra == $contraUsuario)
    {
        $con->setActNombre($nombre);
        $con->actualizaNombre();
        ?>
<script lang="javascript">
    alert("Se actualizaron los datos correctamente.");
</script>
<?php

        sleep(3);
//Se refresca la pantalla para que no queden los datos guardados en memoria
        header('Location:confUsuario.php');
    }
    else
    {
        ?>
<!--Se muestra un mensaje que la contraseña no es correcta-->
<script lang="javascript">
    alert("La contraseña no es valida");
</script>
        <?php
        //Se refresca la pantalla para que no queden los datos guardados en memoria
        header('Location:confUsuario.php');
    }
}



//Se valida si se presionó el boton de actualizar Apellido de Usuario
if(isset($_REQUEST['actualizaApellido']))
{
    $apellido = $_POST['apellido'];
    $contra = $_POST['contraApellido'];

    //Se asigna el valor de la variable de sesion email
    $con->setEmail($_SESSION['user']);

    //Se realiza una consulta para obtener la contraseña y validarla 
    //para realizar los cambios
    $reg = $con->getUsuario();
    $reg2 = mysql_fetch_array($reg);

    //Se asigna a la variable contraUsuario la contraseña del usuario de la base de datos
    $contraUsuario = $reg2['reg_contra'];
    //Se valida que la contraseña ingresada sea igual a la que esta
    //en la base de datos
    if ($contra == $contraUsuario) {
        $con->setActApellido($apellido);
        $con->actualizaApellido();
        ?>
        <script lang="javascript">
            alert("Se actualizaron los datos correctamente.");
        </script>
        <?php
        //Se refresca la pantalla para que no queden los datos guardados en memoria
        header('Location:confUsuario.php');
    } else {
        ?>
        <!--Se muestra un mensaje que la contraseña no es correcta-->
        <script lang="javascript">
            alert("La contraseña no es valida");
        </script>
        <?php
        //Se refresca la pantalla para que no queden los datos guardados en memoria
        header('Location:confUsuario.php');
    }
}



//Se valida si se presiono el boton de actualizar Estado
if(isset($_REQUEST['actualizaEstado']))
{
    $estado = $_POST['estado'];
    $contra = $_POST['contraEstado'];
    
    echo $estado;
    echo $contra;
    echo 'Aqui estoy';
    
    
    //Se asigna el valor de la variable de sesion email
    $con->setEmail($_SESSION['user']);

    //Se realiza una consulta para obtener la contraseña y validarla 
    //para realizar los cambios
    $reg = $con->getUsuario();
    $reg2 = mysql_fetch_array($reg);

    //Se asigna a la variable contraUsuario la contraseña del usuario de la base de datos
    $contraUsuario = $reg2['reg_contra'];
    
    //Se valida que la contraseña ingresada sea igual a la que esta
    //en la base de datos
    if ($contra == $contraUsuario) {
        
        $con->setActEstado($estado);
        $con->actualizaEstado();
        ?>
        <script lang="javascript">
            alert("Se actualizo el estado correctamente.");
        </script>
        <?php
        //Se refresca la pantalla para que no queden los datos guardados en memoria
        header('Location:confUsuario.php');
    } else {
        ?>
        <!--Se muestra un mensaje que la contraseña no es correcta-->
        <script lang="javascript">
            alert("La contraseña no es valida");
        </script>
        <?php
        //Se refresca la pantalla para que no queden los datos guardados en memoria
        header('Location:confUsuario.php');
    }
}


//Se valida si se presiono el boton de actualizar la contraseña
if(isset($_REQUEST['actualizaContra']))
{
    $emailContra = $_POST['emailContra'];
    $camContra->setEmail($emailContra);
    
    $camContra->enviarEmail();
    
    
}





//Se valida si se presiono el boton de actualizar Imagen de Usuario
if(isset($_REQUEST['actualizaImagen']))
{
    
    $nombreImagenUsuario = $_SESSION['user'].$_FILES["img"]["name"];
    $origenImagenUsuario = $_FILES["img"]["tmp_name"];
    $destinoImagenUsuario = 'img/'.$nombreImagenUsuario;
    $contra = $_POST['contraImg'];
    
    //Se asigna el valor de la variable de sesion email
    $con->setEmail($_SESSION['user']);
    
    //Se realiza una consulta para obtener la contraseña y validarla 
    //para realizar los cambios
    $reg = $con->getUsuario();
    $reg2 = mysql_fetch_array($reg);
    
    //Se asigna a la variable la contraseña del usuario de la base de datos
    $contraUsuario = $reg2['reg_contra'];
    
    //Se valida que la contraseña ingresada sea igual a la que esta
    //en la base de datos
    if($contra == $contraUsuario)
    {
        $con->setNombreImagenUsuario($nombreImagenUsuario);
        $con->setOrigenImagenUsuario($origenImagenUsuario);
        $con->setDestinoImagenUsuario($destinoImagenUsuario);
        $con->setEmail($_SESSION['user']);

        $con->actualizaImagenUsuario();
        ?>
<!--Se muestra un mensaje que la contraseña es correcta-->
                <script lang="javascript">
                    alert("Se actualizó la imagen de Usuario correctamente.");
                </script>
        <?php
        //Se refresca la pantalla para que no queden los datos guardados en memoria
        header('Location:confUsuario.php');
        
    } else 
        {       
        ?>
                <!--Se muestra un mensaje que la contraseña no es correcta-->
                        <script lang="javascript">
                            alert("La contraseña no es valida");
                        </script>
                        <?php
                        //Se refresca la pantalla para que no queden los datos guardados en memoria
                        header('Location:confUsuario.php');
        }
}

//Se obtiene los datos de la empresa

//Se asigna la variable de session del usuario al set de la Classe Control.php
$con->setEmail($_SESSION['user']);

//Se realiza una consulta para saber si el usuario tiene una empresa registrada
$res = $con->getEmpresa();

$res2 = mysql_fetch_array($res);

$empresa = $res2['emp_nombre'];

if($empresa == '')
{
    $empresa = 'No hay empresa registrada con este usuario '.' <a href="registrarEmpresa.php">Haz clic aqui </a>Para registrar tu empresa';
}
else
{
   $empresa = $res2['emp_nombre'];
}



?>
<!-- Navigation bar starts -->
          <?php include './modules/navigation.php'; ?>

<!-- Navigation bar ends -->

<div class="content" style="margin-bottom: 20px;">
  <div class="container">

  <h2>Configuracion de Cuenta</h2>
  <hr/>
  
  <!--Codigo para obtener los datos del usuario de la funcion getUsuario-->
  <?php
    
    //Se asigna el valor de la variable de sesion email
    $con->setEmail($_SESSION['user']);
    $reg = $con->getUsuario();
    //Se asignan el valor de la consulta a las variables locales
    $reg2 = mysql_fetch_array($reg);
    
    $nombre = $reg2['reg_nombre'];
    $apellido = $reg2['reg_apellido'];
    $email = $reg2['reg_email'];
    $estado = $reg2['reg_edo'];
    $usuarioImagen = $reg2['reg_userImg'];
  
  ?>
  
  <!--Div para la configuracion de los datos de la cuenta-->
  <div style=" height: 600px;" >
      
      <!--Tabla donde aparecen los datos del usuario-->
      <div style="">
      <table border='0'>
          <div>
              <tr style="border-bottom: 1px solid #e5e5e5;" >
                  <td  style=" text-align: center; height: 50px; width: 200px;" ><b>Nombre</b></td>
                  <td  style=" text-align: center; height: 50px; width: 250px;"><?php echo $nombre; ?></td>
                  <td style=" text-align: right; height: 50px; width: 380px;" id='editNombre'><a>Edit</a></td>
              </tr>
              <tr style="border-bottom: 1px solid #e5e5e5;" >
                  <td colspan='3'>  
                      <!--Contenedor para las opciones de modificar Nombre-->
                      <div style=" text-align: center;  display: none; " id="divNombre" >
                          <form action="confUsuario.php" method="POST" >
                              <br>
                              <div style="width: 500px; text-align: center; position: relative; right: -170px;">
                              <p> <b>Usted puede cambiar su nombre, pero solo lo puede hacer 2 veces por año.</b> </p>
                              <hr/>
                              </div>
                              Nuevo Nombre: 
                              <br>
                              <input type="text" name="nombre" required/>
                              <br>
                              Ingrese su contraseña para guardar los cambios:
                              <br>
                              <input type="text" name="contraNombre" required />
                              <br>
                              <input type="submit" value="Guardar los cambios" name="actualizaNombre" />
                          </form>
                      </div>
                  </td>
              </tr>
          </div>
          
          <div>
              <tr style="border-bottom: 1px solid #e5e5e5;">
                  <td style=" text-align: center; height: 50px; width: 200px;"><b>Apellido</b></td>
                  <td style=" text-align: center; height: 50px; width: 250px;"><?php echo $apellido; ?></td>
                  <td style=" text-align: right; height: 50px; width: 200px;" id='editApellido' ><a>Edit</a></td>
              </tr>
              <tr  style="border-bottom: 1px solid #e5e5e5;">
                  <td colspan='3'>  
                      <!--Contenedor para las opciones de modificar Apellido-->
                      <div style=" text-align: center;  display: none; " id="divApellido" >
                          <form action="confUsuario.php" method="POST" >
                              <div style="width: 500px; text-align: center; position: relative; right: -170px;">
                                  <p> <b>Usted puede cambiar su apellido, pero solo lo puede hacer 2 veces por año.</b> </p>
                                  <hr/>
                              </div>
                              Nuevo Apellido: 
                              <br>
                              <input type="text" name="apellido" />
                              <br>
                              Ingrese su contraseña para guardar los cambios:
                              <br>
                              <input type="text" name="contraApellido" required />
                              <br>
                              <input type="submit" value="Guardar los cambios" name="actualizaApellido" />
                          </form>
                      </div>
                  </td>
              </tr>
          </div>
          
          <div>
          <tr style="border-bottom: 1px solid #e5e5e5;">
              <td style=" text-align: center; height: 50px; width: 200px;"><b>Email</b></td>
              <td style=" text-align: center; height: 50px; width: 250px;"><?php echo $email;?></td>
              <td style=" text-align: right; height: 50px; width: 200px;" id="editEmail"><a>Edit</a></td>
          </tr>
          <tr  style="border-bottom: 1px solid #e5e5e5;">
                  <td colspan='3'>  
                      <!--Contenedor para el email-->
                      <div style=" text-align: center;  display: none;" id="divEmail"  >
                              <br>
                              No se puede modificar el Email
                              <br>
                              <?php echo $email;?>
                              <br>
                              <br>
                      </div>
                  </td>
              </tr>
          </div>
          
          <div>
          <tr style="border-bottom: 1px solid #e5e5e5;">
              <td style=" text-align: center; height: 50px; width: 200px;"><b>Estado</b></td>
              <td style=" text-align: center; height: 50px; width: 250px;"><?php echo $estado; ?></td>
              <td style=" text-align: right; height: 50px; width: 200px;" id="editEstado" ><a>Edit</a></td>
          </tr>
          <tr  style="border-bottom: 1px solid #e5e5e5;">
                  <td colspan='3'>  
                      <!--Contenedor para las opciones de modificar eestado-->
                      <div style=" text-align: center;  display: none;" id='divEstado' >
                          <form action="confUsuario.php" method="POST" >
                              <br>
                              <label class="control-label" for="select">Nuevo Estado</label>
                                            <div class="controls">                               
                                                <select name="estado" required>
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
                              <br>
                              Ingrese su contraseña para guardar los cambios:
                              <br>
                              <input type="text" name="contraEstado" />
                              <br>
                              <input type="submit" value="Guardar los cambios" name="actualizaEstado" />
                          </form>
                          
                      </div>
                  </td>
              </tr>
          </div>
          
          <div>
          <tr style="border-bottom: 1px solid #e5e5e5;">
              <td style=" text-align: center; height: 50px; width: 200px;"><b>Contraseña</b></td>
              <td style=" text-align: center; height: 50px; width: 250px;">**********</td>
              <td style=" text-align: right; height: 50px; width: 200px;" id="editContra" ><a>Edit</a></td>
          </tr>
          <tr  style="border-bottom: 1px solid #e5e5e5;">
              <td colspan='3' >  
                      <!--Contenedor para las opciones de modificar contraseña-->
                      <div style=" text-align: center;  display: none; " id='divContra'  >
                          <form action="confUsuario.php" method="POST">
                              <div style="width: 500px; text-align: center; position: relative; right: -170px;">
                                  <p> <b>Ingrese su correo con el que se registro en HispanoGreen.com y recibirá un correo con las instrucciones para cambiar su contraseña.</b> </p>
                                  <hr/>
                              </div>
                              Email:
                              <br>
                              <input type="email" name="emailContra" required />
                              <br>
                              <input type="submit" value="Enviar email de confirmacion" name="actualizaContra" />
                          </form>
                          
                      </div>
                  </td>
              </tr>
          </div>
          
          <div>
              <tr style="border-bottom: 1px solid #e5e5e5;">
                  <td style=" text-align: center; height: 50px; width: 200px;"><b>Imagen de Usuario</b></td>
                  <td style=" text-align: center; height: 50px; width: 250px;"><img src="thumb.php?file=/<?php echo $usuarioImagen;?>&width=80" /></td>
                  <td style=" text-align: right; height: 50px; width: 200px;" id='editImagen' ><a>Edit</a></td>
              </tr>
              <tr  style="border-bottom: 1px solid #e5e5e5;">
                  <td colspan='3'>  
                      <!--Contenedor para las opciones de modificar Apellido-->
                      <div style=" text-align: center;  display: none; " id="divImagen" >
                          <form action="confUsuario.php" method="POST"  enctype="multipart/form-data">
                              <br>
                              Seleccione su imagen de perfil: 
                              <br>
                              <input type="file" name="img" id="img" />
                              <br>
                              Ingrese su contraseña para guardar los cambios:
                              <br>
                              <input type="text" name="contraImg" required />
                              <br>
                              <input type="submit" value="Guardar los cambios" name="actualizaImagen" />
                          </form>
                      </div>
                  </td>
              </tr>
          </div>
          
          <div>
              <tr style="border-bottom: 1px solid #e5e5e5;">
                  <td style=" text-align: center; height: 50px; width: 200px;"><b>Empresa</b></td>
                  <td style=" text-align: center; height: 50px; width: 250px;"><?php echo $empresa;?></td>
                  <td style=" text-align: right; height: 50px; width: 200px;" id='editEmpresa' ><a>Edit</a></td>
              </tr>
              
              <tr  style="border-bottom: 1px solid #e5e5e5;">
                  <td colspan='3'>  
                      <!--Contenedor para las opciones de modificar Apellido-->
                      <div style=" text-align: center;  display: none; " id="divEmpresa" >
                          <form action="confUsuario.php" method="POST"  enctype="multipart/form-data">
                              <br>
                              Seleccione su imagen de perfil: 
                              <br>
                              <input type="file" name="img" id="img" />
                              <br>
                              Ingrese su contraseña para guardar los cambios:
                              <br>
                              <input type="text" name="contraImg" required />
                              <br>
                              <input type="submit" value="Guardar los cambios" name="actualizaImagen" />
                          </form>
                      </div>
                  </td>
              </tr>
              
          </div>
      </table>
          </div>
  </div>
  <!--Div solo para darle margen y no se encimen los divs-->
  <div style="margin-bottom: 150px; position: relative;">
      
  </div>
  <hr />
<!--  <div class="form" style="background-color: #004c99;">
             <a href=""></a>
             <form method="get" id="searchform" action="register.php" class="form-search">
            <input type="text" value="" name="s" id="s" class="input-medium"/>
            
          </form>
        </div>-->

  

<!--  <div class="border"></div>-->

<!-- Product & links starts -->

<!--<div class="prod">
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
  </div>-->

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

<!-- Mirrored from responsivewebinc.com/premium/metro/green/404.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 27 Oct 2013 07:16:37 GMT -->
</html>

