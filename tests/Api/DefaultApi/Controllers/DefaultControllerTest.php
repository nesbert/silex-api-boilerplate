<?php

namespace Tests\Api\DefaultApi\Controllers;

use Tests\Api\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    public function testInfo()
    {
        $client = $this->createClient();
        $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals(
            '{"name":"myapi","version":1,"source":"0.0.1","env":"dev","debug":true}',
            $client->getResponse()->getContent()
        );
    }

}