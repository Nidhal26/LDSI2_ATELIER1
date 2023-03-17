<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{   #[Route('/welcome')]
    public function hello(){
        //var_dump("hello"); //afficher la variable et sa structure
        dd("hello");
        //die(); //éviter l'erreur syntaxique et afficher le résultat directement sans return
    }
    #[Route('/show')]
    public function show(){
        $var="FI9OU!!";
        return new Response("<H1>ça fonctionne $var</H1>");
    }

    #[Route('/afficher')]
    public function afficher(){
        return $this->render('test/afficher.html.twig');//retourner une reponse pour le twig
    }
}