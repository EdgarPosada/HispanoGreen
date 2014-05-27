<?php
include 'Conexion.php';

class hbblog
{
    //Variables
    private $titulo;
    private $imagen;
    private $contenido;
    private $autor;
    private $fecha;
    private $origen;
    private $destino;

    //Seters
    function setTitulo($val)
    { $this->titulo = $val; }
    
    function setImagen($val)
    { $this->imagen = $val; }
    
    function setContenido($val)
    { $this->contenido = $val; }
    
    function setAutor($val)
    { $this->autor = $val; }
    
    function setFecha($val)
    { $this->fecha = $val; }
    
    function setDestino($val)
    { $this->destino = $val; }
    
    
    //Funcion para ingresar los datos en la base de datos
    function insertaEntrada()
    {
        $con = new Conexion();
        $sql = "insert into entrada (tituloEntrada, fechaEntrada, autorEntrada, imagenEntrada, contenidoEntrada) values('$this->titulo', '$this->fecha', '$this->autor', '$this->destino', '$this->contenido') ";
        $con->sql($sql);
    }
    
    //Funcion para obtener los datos de la base de datos
    function obtenerDatos()
    {
        $con = new Conexion();
        $sql = "select *from entrada WHERE idEntrada = (select MAX(idEntrada) from entrada)";
        $res = $con->sql($sql);
        return $res;
    }
    

}
