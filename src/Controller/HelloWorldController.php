<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloWorldController {
    #[Route('/helloworld', name: 'hello_world')]
    public function helloworld():Response {
        $text = "Hello World from Symfony!";

        return new Response(
            '<html><body>' . $text . '</body></html>'
        );
    }
}