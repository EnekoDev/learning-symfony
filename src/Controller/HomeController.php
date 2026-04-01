<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController {
    #[Route('/', name: 'home')]
    public function index():Response {
        $text = "Hello World from Symfony!";

        return new Response(
            '<html><body><h1>' . $text . '</h1></body></html>'
        );
    }
}