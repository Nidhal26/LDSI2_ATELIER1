<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/list', name: 'blog_list')]
    public function list() : Response //response est le type de retour de résultat
    {
        return new Response("<H1>Liste des articles</H1>");
    }
    #[Route('/blog/show{id<\d+>}', name: 'blog_list')]
    public function show($id) : Response //recuperer l'id avec $Get
    {//recherche dans la base de données
        //............
        $name='Introduction à la base de données';
        //return new Response("<H1>Le numéro d'article : $id</H1>");
        return $this->render('blog/show.html.twig', ['a'=>$id, 'b'=>$name]);
    }

    #[Route('/blog/{id<\d+>}/{name?vide}', name: 'blog_detail')] //décrire la valeur par défaut
    public function detail($id,$name): Response
    {
        return $this->render("blog/detail.html.twig",['id'=>$id,'name'=>$name]);
        
    }

    #[Route('/blog/{id<\d+>}/{name?vide}', name: 'blog_detail2',priority:1)]
    public function detail2($id,$name): Response
    {
        return new Response("Le nom de l'article $id est $name");
        
    }

    #[Route('/blog/test', name: 'blog_test')]
    public function someMethod(): Response
    {
        /*$url=$this->generateUrl('blog_detail2',['id'=>100,'name'=>'Symfony']);
        return $this->redirect($url);
        dd($url);*/
        return $this->redirectToRoute('blog_detail2',['id'=>100,'name'=>'Symfony']);//redirection vers la route
    }
}
