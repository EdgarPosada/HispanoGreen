<?php
include 'Classes/HGBlog.php';

//Objeto de la clase HGBlog
$blog = new hbblog();


$fecha = date("Y-m-d");
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$autor = $_POST['autor'];


    if(isset($_FILES['img']))
    {
        //Se obtiene la hora del sistema para agregarla al nombre de la imagen que se subira
        date_default_timezone_set("America/Los_Angeles");
        $hora = date("H:i:s");
        
        //Se quitan los puntos a la hora para que no cree error al copiar la imagen
        $hora = preg_replace('(:)', '', $hora);
        
        //Se guarda el nombre de la imagen y la ruta de donde viene
        $nombreFoto = $_FILES["img"]["name"];
        $origen = $_FILES["img"]["tmp_name"];
        
        
        //Se concatena con un string que contiene la carpeta a donde se guardara la imagen
        $destino = "img/".$hora.$nombreFoto;
        
        //Se copia la imagen a la carpeta seleccionada
         move_uploaded_file($origen, $destino);
         
         //Se envian los parametros a los seters de la clase HGBlog para su uso en esa clase
        $blog->setTitulo($titulo);
        $blog->setImagen($nombreFoto);
        $blog->setContenido($contenido);
        $blog->setAutor($autor);
        $blog->setFecha($fecha);
        $blog->setDestino($destino);
        
    
        //Se ejecuta la funcion insertarEntrada de la clase HGBlog para guardar los datos en la base de datos
        $blog->insertaEntrada();
    }
        
        else{
            
         print_r($_FILES['img']);
        }
        
?>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <form action="Admin.php" method="POST" enctype="multipart/form-data"  >
        
        <table border="1">
            <tr>
                <td>
                    Titulo:<input type="text" name="titulo" value="<?php echo $titulo; ?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Autor:<input type="text" name="autor" value="<?php echo $autor; ?>" />
                </td>
            </tr>    
            <tr>
                <td>
                    Imagen:<input type="file" name="img" id="img" />
                </td>
            </tr>
            <tr>
                <td>
                    Contenido:<textarea name="contenido"><?php echo $contenido; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Guardar" >
                </td>
            </tr>
            
            <?php
                    $res = $blog->obtenerDatos();
                    while($res2 = mysql_fetch_array($res))
                    {
                
                ?>
            
            <tr>
                
                <td>
                    <img src="<?php echo $res2['imagenEntrada']; ?>" style="max-width: 300px; max-height: 300px;" />
                </td>
                <td>
                    <img src="thumb.php?file=/<?php echo $res2['imagenEntrada'];?>&width=80" />
                </td>                
            </tr>    
        <?php
            }
            ?>
        </table>
            </form>
        
    </body>
</html>

