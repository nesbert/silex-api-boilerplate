<?php
/**
 * Register autoload routine for source classes.
 */
//require_once __DIR__ . '/../app/autoload.php';

/**
 * Register autoload routine for test classes.
 */
spl_autoload_register(function($class) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace(
            array('\\', 'Tests'),
            array('/', ''), $class) . '.php';

    if (is_file($file)) {
        require_once $file;
    }
});