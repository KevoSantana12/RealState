<?php

function conectarDB() : mysqli{
    $db = mysqli_connect("localhost","root","Temach2022NM","bienesraicescru");

    if(!$db){
        echo("Error, no se pudo conectar a la DB");
        exit;
    }
    return $db;
}

