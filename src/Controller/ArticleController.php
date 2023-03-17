<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function lister(){
        $articles=
        [
        ["id"=>101,
        "libelle"=>"Asus i3",
        "quantite"=>30,
        "gamme"=>"ordinateur"],
        ["id"=>102,
        "libelle"=>"laser Brother",
        "quantite"=>10,
        "gamme"=>"imprimante"],
        ["id"=>103,
        "libelle"=>"Epson S31",
        "quantite"=>12,
        "gamme"=>"videoprojecteur"],
        ["id"=>104,
        "libelle"=>"cableHDMI 3m",
        "quantite"=>20,
        "gamme"=>"accessoire"],
        ];
        return $this->render('article/lister.html.twig', ['articles' =>$articles]);
        }
}
