<?php
/**
 * Register default routes and dynamically register routes.
 *
 * Convention:  /:api/:controller
 *
 * @todo flag to scope and register all to allow forwarding?
 */

// base routes
$defaultRoutes = new Api\DefaultApi\Routes($app);
$defaultRoutes->register();

$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

// for now only register URI based routes for each request
if ($uri !== '/') {
    $uriParts = explode('/', $uri);

    if (isset($uriParts[1])) {
        $apiRoutesName = '\Api\\' . ucfirst($uriParts[1]) . 'Api\Routes';
        if (method_exists($apiRoutesName, 'register')) {
            $requestRoutes = new $apiRoutesName($app);
            $requestRoutes->register();
        }
    }

}

// TODO scope and register all routes
