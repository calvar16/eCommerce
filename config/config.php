<?php
/* Creación de constante de directorio de la aplicación */

include_once('functions.php');
if ( !defined('ROOT')){
    define("ROOT", 'http://'.$_SERVER['HTTP_HOST'].getFolderProject());
}
?>