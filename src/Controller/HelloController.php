<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController {
    #[Route('/hello/{name}', name: 'hello_page')]
    public function hello(string $name):Response {
        return new Response("<html><body><h1>Hello " . $name . "!</h1></body></html>");
    }
}