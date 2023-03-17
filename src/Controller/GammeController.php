<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{
    #[Route('/gamme', name: 'app_gamme')]
    public function lister(): Response
    {
        $Gamme=['ordinateur','videoProjecteur','imprimante','accessoire'];
        return $this->render('gamme/Lister.html.twig',['tab'=>$Gamme]);
    }
}