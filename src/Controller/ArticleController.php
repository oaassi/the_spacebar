<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends  AbstractController {

    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Hello Dear');
    }

    /**
     * @Route("/new/{slug}")
     */
    public function show($slug){
        $comments=[
          'fffffffffffffffffffffffffff',
          'fffbbgbgf',
            'vfvvvvvv',
            'fvvvwmohamed'
        ];
        return $this->render('article/show.html.twig',[
           'title' => ucwords(str_replace('_',' ',$slug)),
            'comments' => $comments
        ]);
    }
}