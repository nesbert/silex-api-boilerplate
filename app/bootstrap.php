<?php
/**
 * API Application bootstrap process.
 *
 * @todo XSS handler/helper
 * @todo Logging: dev, audit, metrics, stream to Cube
 */

// register vendor auto loaders
require_once __DIR__ . '/../vendor/autoload.php';

// simple config handling based on ENV setting
$config =  include __DIR__ . '/config/config.php';

// overwrite config based on environment
if ($envMode = 'dev') {
    $config = ((array) include __DIR__ . "/config/{$envMode}/config.php") + $config;
}

// init and set app settings
$app = new Api\Application(array(
    'environment'   => $config['environment'],
    'debug'         =>  $config['debug'],
    'config'        => $config,
    'startTime'     => microtime(true),
));

// custom default errors
require_once __DIR__ . '/config/errors.php';

// register services
require_once __DIR__ . '/config/services.php';

// TODO SET PRE & POST HOOKS (TOKENIZER, REQ/RES LOGS, AUDIT LOG, ETC)

// register routes
require_once __DIR__ . '/config/routes.php';

return $app;
