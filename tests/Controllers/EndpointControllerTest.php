<?php

namespace App\Tests\Controllers;

use PHPUnit\Framework\Attributes\DataProvider;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\Panther\PantherTestCase;

class EndpointControllerTest extends PantherTestCase
{
    private KernelBrowser $client;

    protected function setUp(): void 
    {
        $this->client = static::createClient();
    }

    public static function endpointProvider():array
    {
        return [
            ["/"],
            ["/about"]
        ];
    }

    #[DataProvider('endpointProvider')]
    public function testResponseCode($endpoint): void
    {
        $this->client->request("GET", $endpoint);
        $this->assertResponseStatusCodeSame(200);
    }

    #[DataProvider('endpointProvider')]
    public function testResponseContent($endpoint):void
    {
        $this->client->request("GET", $endpoint);
        $this->assertSelectorExists("h1");
    }
}
