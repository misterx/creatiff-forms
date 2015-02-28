<?php
spl_autoload_register(function($class) {
    if (strpos($class, "Creatiff\\Forms") === 0) {
        $path = str_replace('Creatiff\\Forms', '', $class);
        $path = __DIR__.str_replace('\\', DIRECTORY_SEPARATOR, $path).'.php';
        require_once $path;
    }
});

?>
