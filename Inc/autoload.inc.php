<?php

spl_autoload_register('autoloader');

function autoloader($className) {

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'Inc') !== false) {

        $path = '../Classes/';
     } else {

        $path = 'Classes/';
    }

    $ext = ".class.php";

    $fullpath = $path . $className . $ext;

    include $fullpath;
}

?>
