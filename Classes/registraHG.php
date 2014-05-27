<?php
include 'Conexion.php';

class registraHG
{
    private $nombre;
    private $apellido;
    private $email;
    private $estado;
//    private $usuario;
    private $contra;
    private $deacuerdo;
    private $fecha;
    
    //seters
    function setNombre($val)
    { $this->nombre = $val;}
    
    function setApellido($val)
    { $this->apellido = $val; }
    
    function setEmail($val)
    { $this->email = $val; }
    
    function setEstado($val)
    { $this->estado = $val; }
    
    function setContra($val)
    { $this->contra = $val; }
    
    function setDeacuerdo($val)
    { $this->deacuerdo = $val; }
    
    function setFecha($val)
    { $this->fecha = $val; }

function registrar()
{
    $con = new Conexion();
    $sql = "insert into registro (reg_nombre, reg_apellido, reg_email, reg_edo,reg_contra,reg_deacuerdo,reg_fecha) values ('$this->nombre', '$this->apellido', '$this->email', '$this->estado', '$this->contra', '$this->deacuerdo', '$this->fecha')";
    $con->sql($sql);
}

}

