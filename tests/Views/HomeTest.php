<?php

namespace Test\Views;

use Symfony\Component\Panther\PantherTestCase;

class HomeTest extends PantherTestCase {
    public function testIndexPage() {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}