<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul', name: 'app_calcul')]
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'CalculController',
        ]);
    }
    #[Route('/calcul/somme/{a}/{b}', name: 'app_somme')]
    public function somme($a,$b): Response
    {
        $s=$a+$b;
        return $this->render('calcul/somme.html.twig',['a'=>$a,'b'=>$b,'s'=>$s]);
    }

    #[Route('/calcul/sous/{a}/{b}', name: 'app_soustraction')]
    public function soustraction($a,$b): Response
    {
        if($a>$b){
            $d=$a-$b;
        }
        else{
            $d=$b-$a;
        }
        return $this->render('calcul/sous.html.twig',['a'=>$a,'b'=>$b,'d'=>$d]);
    }
}