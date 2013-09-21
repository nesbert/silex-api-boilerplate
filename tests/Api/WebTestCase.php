<?php

namespace Tests\Api;

/**
 * Basic test class to check the application status route
 */
abstract class WebTestCase extends \Silex\WebTestCase
{

    public function createApplication()
    {
        $app = require __DIR__ . '/../../app/bootstrap.php';
        $app['debug'] = true;
        return $app;
    }

}