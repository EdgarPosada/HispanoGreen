<?php

session_start();


function validaSession()
{
    if(isset($_SESSION['user']))
    {
        return 1;
    }
    else
    {
        return 0;
    }
}



