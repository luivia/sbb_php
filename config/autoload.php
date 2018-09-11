<?php
function loadClass($className){
    $file = dirname(__DIR__)."\\".$className.".php";
    $str = str_replace("\\","/", $file);
    $file = $str;
    require $file; 
}
spl_autoload_register('loadClass');
