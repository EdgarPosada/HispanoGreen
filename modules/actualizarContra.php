<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * Autor Edgar Posada
 */

class ActualizaContra{
    
    private $email;
    
    function setEmail($val)
    { $this->email = $val; }
    
 function enviarEmail()
 {
     $email = $this->email;
     $asunto = 'Cambiar contraseña de hispanogreen';
     $cuerpoHtml = 'Por favor haga <a href="http://localhost/foroNegociosHispanos/responsivewebinc.com/premium/metro/green/cambiarContra.php" >click aqui</a> para cambiar su contraseña de HispanoGreen.com</p>';
     $header = 'From: edgar@sancofunding.com'.'\r\n';
     
     mail($email, $asunto, $cuerpoHtml,$header);
     
 }
    
}


