<?php
session_start();
if(session_destroy())
{
    header("location:../login.php");
}
//if (ini_get("session.use_cookies")) {
//    $params = session_get_cookie_params();
//    setcookie(session_name(), '', time() - 42000,
//        $params["path"], $params["domain"],
//        $params["secure"], $params["httponly"]
//    );
//}
//$_SESSION = array();
//unset($_SESSION['email']);
//session_destroy();
//header("location:../index1.php");

