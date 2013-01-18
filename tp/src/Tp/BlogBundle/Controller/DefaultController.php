<?php

namespace Tp\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tp\BlogBundle\Form\PostType;
use Tp\BlogBundle\Entity\Post;

class DefaultController extends Controller
{
    public function indexAction()
    {

    	$posts = $this	->getDoctrine()
    					->getRepository('TpBlogBundle:Post')
    					->findAll();



        return $this->render('TpBlogBundle:Default:index.html.twig', 
        		array('name' => 'jean',
        			  'posts' => $posts)
        );
    }
    
    public function showAction($id)
    {

        $posts = $this  ->getDoctrine()
                        ->getRepository('TpBlogBundle:Post')
                        ->find($id);

        return $this->render('TpBlogBundle:Default:show.html.twig', array('posts' => $posts));
    }

    public function sidebarAction()
    {
        $categories = $this  ->getDoctrine()
                             ->getRepository('TpBlogBundle:Categories')
                             ->findAll();


        return $this->render('TpBlogBundle:Default:sidebar.html.twig', array('categories' => $categories));
    }

    public function categoriesAction($id)
    {
        $cat = $this  ->getDoctrine()
                             ->getRepository('TpBlogBundle:Categories')
                             ->find($id);


        return $this->render('TpBlogBundle:Default:categories.html.twig', array('cat' => $cat));
    }

    public function userAction($id)
    {
        $user = $this  ->getDoctrine()
                             ->getRepository('TpBlogBundle:User')
                             ->find($id);


        return $this->render('TpBlogBundle:Default:user.html.twig', array('user' => $user));
    }
    public function addAction(Request $request)
    {
        //création d'un nouveau post
        $post = new Post();
        //création du fomrulaire
        $form = $this->createForm(new PostType(), $post);
        //Test pour savoir si méthode post
        if ($request->isMethod('POST')) {
            //On récupère les données de la requête dans la form
            $form->bind($request);
            //On test si les données son ok
            if ($form->isValid()) {
                //Sauvegarde dans la base de donnée
                $em = $this->getDoctrine()->getManager();
                $em->persist($post);
                $em->flush();
            }
        }

        return $this->render('TpBlogBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    public function loginAction()
    {
        return $this->render('TpAdminBundle:Default:index.html.twig');
    }
}

















