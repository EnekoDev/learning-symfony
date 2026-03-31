<?php

namespace Test\Controllers;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\Panther\PantherTestCase;

class HelloControllerTest extends PantherTestCase {
    private KernelBrowser $client;

    public function setUp(): void {
        $this->client = static::createClient();
    }

    public function testRouteResponse() {
        $this->client->request('GET', '/hello/John');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testRouteContent() {
        $this->client->request('GET', 'hello/John');
        $this->assertSelectorTextContains("h1", "John");
    }

    public function testInvalidRoute() {
        $this->client->request('GET', '/fakeEndpoint');
        $this->assertEquals(404, $this->client->getResponse()->getStatusCode());
    }
}