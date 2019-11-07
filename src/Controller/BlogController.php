<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/post/{idPost}", name="post_details", requirements={"idPost"="\d+" })
     */
    public function edit(int $idPost) {
        return $this->render('blog/post_details.html.twig', [
            'id_post' => $idPost,
        ]);
    }
}
