<?php
// Autoloader
// Autoloads classes for the framework.
spl_autoload_register('autoload');
function autoload($class) {
    include_once 'config.php';
    include_once 'routes.php';
    if (file_exists('vendor/autoload.php')) include_once 'vendor/autoload.php';
    if (file_exists('vendor/composer/autoload_real.php')) include_once 'vendor/composer/autoload_real.php';
    if (file_exists('controllers/'.$class.'.php')) include_once 'controllers/'.$class.'.php';
    if (file_exists('models/'.$class.'.php')) include_once 'models/'.$class.'.php';
}