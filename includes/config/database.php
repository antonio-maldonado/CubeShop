<?php

    function conectarDB(): mysqli{
        $db = mysqli_connect("localhost","root","admin","tienda");

        if(!$db){
            
            exit;
        }
        return $db;
    }
?>