<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class TesteController
{
    public function index()
    {
        return new Response('teste');
    }
}