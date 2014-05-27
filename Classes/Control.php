<?php
include_once 'Conexion.php';

class Control
{
    private $email;
    private $contra;
    private $count;
    private $reng;
    //Variables para insertar leads
    private $nombreLead;
    private $apellidoLead;
    private $negocioLead;
    private $telNegocioLead;
    private $celNegocioLead;
    private $emailLead;
    private $ingresoLead;
    private $recibirLead;
    
    //Variables para actualizar los datos del Usuario
    private $actualizaNombre;
    private $actualizaApellido;
    private $actualizaEstado;
    private $actualizaContra;
    private $actualizaImagen;
    
    //Variables para actualizar la imagen de usuario
    private $nombreImagenUsuario;
    private $origenImagenUsuario;
    private $destinoImagenUsuario;
    
    //Variables para registrar los datos de la empresa en el directorio empresarial
    private $empNombre;
    private $empDireccion;
    private $empTelefono;
    private $empCiudad;
    private $empEstado;
    private $empCodigoP;
    private $empWebsite;
    private $empProducto;
    private $empDescripcion;
    private $empFecha;
    private $latitud;
    private $longitud;
    
    
    
    //seter
    function setEmail($val)
    { $this->email = $val;  }
    
    function setContra($val)
    { $this->contra = $val; }
    
    //seters para insertar ledas
    function setNombreLead($val)
    { $this->nombreLead = $val; }
    
    function setApellidoLead($val)
    { $this->apellidoLead = $val; }
    
    function setNegocioLead($val)
    { $this->negocioLead = $val; }
    
    function setTelNegocioLead($val)
    { $this->telNegocioLead = $val; }
    
    function setCelNegocioLead($val)
    { $this->celNegocioLead = $val; }
    
    function setEmailLead($val)
    { $this->emailLead = $val; }
    
    function setIngresoLead($val)
    { $this->ingresoLead = $val; }
    
    function setRecibirLead($val)
    { $this->recibirLead = $val; }
    
    //Seters para actualizar los datos del usuario
    function setActNombre($val)
    { $this->actualizaNombre = $val; }
    
    function setActApellido($val)
    { $this->actualizaApellido = $val; }
    
    function setActEstado($val)
    { $this->actualizaEstado = $val; }
    
    function setActContra($val)
    { $this->actualizaContra = $val; }
    
    function setActImagen($val)
    { $this->actualizaImagen = $val; }
    
    //Seters para actualizar la imagen del Usuario
    function setNombreImagenUsuario($val)
    { $this->nombreImagenUsuario = $val; }
    
    function setOrigenImagenUsuario($val)
    { $this->origenImagenUsuario = $val; }
    
    function setDestinoImagenUsuario($val)
    { $this->destinoImagenUsuario = $val; }
    
    //Seters para registrar los datos de la empresa para el directorio
    //empresarial
    function setNombreEmp($val)
    { $this->empNombre = $val; }
    
    function setDireccionEmp($val)
    { $this->empDireccion = $val; }
    
    function setTelefonoEmp($val)
    { $this->empTelefono = $val; }
    
    function setCiudadEmp($val)
    { $this->empCiudad = $val; }
    
    function setEstadoEmp($val)
    { $this->empEstado = $val; }
    
    function setCodigoPEmp($val)
    { $this->empCodigoP = $val; }
    
    function setWebsiteEmp($val)
    { $this->empWebsite = $val; }
    
    function setProductoEmp($val)
    { $this->empProducto = $val; }
    
    function setDescripcionEmp($val)
    { $this->empDescripcion = $val; }
    
    function setFechaEmp($val)
    { $this->empFecha = $val; }
    
    function setLatitudEmp($val)
    { $this->latitud = $val; }
    
    function setLongitudEmp($val)
    { $this->longitud = $val; }
    
    
    //Funciones para Login
    function verificarUsuario()
    {
        $con = new Conexion();
        $sql = "SELECT *FROM registro WHERE reg_email = '$this->email' AND reg_contra = '$this->contra' ";
        $result = $con->sql($sql);
        $count = 0;
        
        while($row = mysql_fetch_array($result))
        {
            $count ++;
            $reng = $row;
        }
        
        if($count == 1)
        {
            return $reng;
        }
        
        else
        {
            return 0;
        }
        
    }
    
    //Funcion para validat si el usuario existe en la base de datos
    function getUserLogin()
    {
        $existe = 0;
        
        $con = new Conexion();
        $sql = "SELECT *FROM registro WHERE reg_email = '$this->email' AND reg_contra = '$this->contra' ";
        $result = $con->sql($sql);
        
        
        while($result2 = mysql_fetch_array($result))
        {
            $existe = 1;
        }
        
        return $existe;
        
    }
    
    
    //Funcion para insertar leads
    function insertLead()
    {
        $con = new Conexion();
        $sql = "INSERT INTO leads (nombreLead, "
                . "apellidoLead, "
                . "negocioLead, "
                . "telNegocioLead, "
                . "celNegocioLead, "
                . "emailLead, "
                . "ingresoLead, "
                . "recibirLead) "
                . "values('$this->nombreLead', "
                . "'$this->apellidoLead', "
                . "'$this->negocioLead', "
                . "'$this->telNegocioLead', "
                . "'$this->celNegocioLead', "
                . "'$this->emailLead', "
                . "'$this->ingresoLead', "
                . "'$this->recibirLead')";
        $con->sql($sql);
        header('Location:../registroCompletado.php');
        
    }
    
    //Funcion para obtener los datos del Usuario
    function getUsuario()
    {
        $con = new Conexion();
        $sql = "SELECT *FROM registro WHERE reg_email = '$this->email' ";
        $reg = $con->sql($sql);
        
        return $reg;
    }
    
    //Funciones para actualizar Nombre de Usuario
    function actualizaNombre()
    {
        $con = new Conexion();
        $sql = "UPDATE registro SET reg_nombre = '$this->actualizaNombre' WHERE reg_email = '$this->email' ";
        $con->sql($sql);
    }
    
    //Funcion para actualizar el apellido de Usuario
    function actualizaApellido()
    {
        $con = new Conexion();
        $sql = "UPDATE registro SET reg_apellido = '$this->actualizaApellido' WHERE reg_email = '$this->email' ";
        $con->sql($sql);
    }
    
    //Funcion para actualizar el estado de residencia
    
    function actualizaEstado()
    {
        $con = new Conexion();
        $sql = "UPDATE registro SET reg_edo = '$this->actualizaEstado' WHERE reg_email = '$this->email' ";
        $con->sql($sql);
        
    }
    
    //Funcion para actualizar la imagen de usuario
    function actualizaImagenUsuario()
    {
        move_uploaded_file($this->origenImagenUsuario, $this->destinoImagenUsuario);
        
        $con = new Conexion();
        $sql = "UPDATE registro SET reg_userImg = '$this->destinoImagenUsuario' WHERE reg_email = '$this->email' ";
        $con->sql($sql);
    }
    
    //Funcion para obtener la imagen del usuario
    function getUsuarioImg()
    {
        $con = new Conexion();
        $sql = "SELECT reg_userImg FROM registro WHERE reg_email = '$this->email' ";
        $reg = $con->sql($sql);
        
        return $reg;
    }
    
    function getEmpresa()
    {
        $con = new Conexion();
        $sql = "SELECT * FROM empresa WHERE emp_email = '$this->email' ";
        $result = $con->sql($sql);
        
        return $result;
    }
    
    
    //Funcion para obtener la latitud de la direccion
    function getLatitude()
    {
        $address = $this->empDireccion;
        $address = str_replace(" ", "+", $address);
        $state = $this->empEstado;
        $city = $this->empCiudad;
        $city = str_replace(" ", "+", $city);
        
        $direccionFisica = $address."+". $city ."+". $state;
        
        
        $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$direccionFisica&sensor=true");
        $json = json_decode($json);
        return $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        
    }
    
    //Funcion para obtener la longitud de la direccion de la empresa
    function getLongitud()
    {
        $address = $this->empDireccion;
        $address = str_replace(" ", "+", $address);
        $state = $this->empEstado;
        $city = $this->empCiudad;
        $city = str_replace(" ", "+", $city);
        
        $direccionFisica = $address."+". $city ."+". $state;
        
        
        $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$direccionFisica&sensor=true");
        $json = json_decode($json);
        return $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    }
    
    //Funcion para guardar los datos de la empresa
    function registraEmpresa()
    {
        $con = new Conexion();
        $sql = "INSERT INTO empresa (emp_nombre, emp_direccion, emp_telefono, emp_ciudad, emp_estado, emp_codigoPostal, emp_website, emp_servicio, emp_long, emp_lat, emp_email, emp_fecha)"
                . " values('$this->empNombre', '$this->empDireccion', '$this->empTelefono', '$this->empCiudad', '$this->empEstado', '$this->empCodigoP', '$this->empWebsite', '$this->empProducto', '$this->longitud', '$this->latitud', '$this->email', '$this->empFecha')";
        $con->sql($sql);
    }
}