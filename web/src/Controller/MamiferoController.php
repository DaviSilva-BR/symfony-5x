<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class MamiferoController 
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response('ola mundo');
    }

    /**
     * @Route("/animal/{slug}")
     */
    public function show($slug)
    {
        return new Response('Animal: ' . $slug);
    }


}