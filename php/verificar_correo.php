<?php

//Archivo para verificar el correo

function verificar($correo){
    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
        return false;
    }


    $dominio = substr(strrchr($correo, @), 1);
    if(!checkdnsrr($dominio, 'MX')){
        return false;
    }

    return true;

}


