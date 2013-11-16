<?php

function my_autoloader($class) {
    
    // Breakdown name:
    
$name_breakdown = explode("_", $class);
    
    include SITE_ROOT .'/'. $name_breakdown[0] .'/' . $class . '.php';
}

spl_autoload_register('my_autoloader');