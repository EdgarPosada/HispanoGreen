<?php

class Insert{

//Variables para insertar leads
    private $nombreLead;
    private $apellidoLead;
    private $negocioLead;
    private $telNegocioLead;
    private $celNegocioLead;
    private $emailLead;
    private $ingresoLead;
    private $recibirLead;
    
    
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
        header('Location:registroCompletado.php');
        
    }
}

