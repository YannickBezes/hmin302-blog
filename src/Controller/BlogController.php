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
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('select p from App:Post p order by p.Date')->setMaxResults(10);

        $Posts = $query->getResult();

        if(!$Posts)
        {
            throw $this->createNotFoundException('Aucun post trouvé !');
        }

        return $this->render('blog/posts.html.twig', [
            'posts' => $Posts,
        ]);
    }

    /**
     * @Route("/post/{idPost}", name="post_details", requirements={"idPost"="\d+" })
     */
    public function edit(int $idPost) {
        $Post = $this->getDoctrine()
            ->getRepository('App:Post')
            ->find($idPost);

        if(!$Post)
        {
            throw $this->createNotFoundException('Aucun post trouvé avec l\'id '.$idPost);
        }

        return $this->render('blog/post_details.html.twig', [
            'id_post' => $Post,
        ]);
    }
}
