<?php

namespace App\Tests\Controllers;

use Symfony\Component\Panther\PantherTestCase;

class WelcomeControllerTest extends PantherTestCase
{
    private $client;

    protected function setUp(): void 
    {
        $this->client = static::createPantherClient();
    }

    public function testResponseCode(): void
    {
        $this->client->request("GET", "/welcome");
        $this->assertResponseStatusCodeSame(200);
    }
}
