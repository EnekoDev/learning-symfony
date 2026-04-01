<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController {
    #[Route('/hello/{name}', name: 'hello_page')]
    public function index(string $name):Response {
        return $this->render('hello/hello.html.twig', [
            'name' => ucfirst($name)
        ]);
    }
}