<?php

namespace Tp\Admin2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tp\Admin2Bundle\Form\CategorieType;
use Tp\Admin2Bundle\Form\PostType;
use Tp\Admin2Bundle\Entity\Categories;
use Tp\Admin2Bundle\Entity\Post;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('TpAdmin2Bundle:Default:index.html.twig');
    }
    public function manageAction()
    {
        return $this->render('TpAdmin2Bundle:Default:manage.html.twig');
    }
    public function sidebarAction()
    {
        $categories = $this  ->getDoctrine()
                             ->getRepository('TpAdmin2Bundle:Categories')
                             ->findAll();


        return $this->render('TpAdmin2Bundle:Default:sidebar.html.twig', array('categories' => $categories));
    }
    public function categoriesAction($id)
    {
        $cat = $this  ->getDoctrine()
                             ->getRepository('TpBlogBundle:Categories')
                             ->find($id);


        return $this->render('TpBlogBundle:Default:categories.html.twig', array('cat' => $cat));
    }
    public function addpostsAction(Request $request)
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

        return $this->render('TpAdmin2Bundle:Default:addposts.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    public function updatepostsAction($id, Request $request)
    {
    	$post = $this  ->getDoctrine()
                        ->getRepository('TpAdmin2Bundle:Post')
                        ->find($id);

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

        return $this->render('TpAdmin2Bundle:Default:updateposts.html.twig', 
        		array('form' => $form->createView(),
        			  'post' => $post));
    }
    public function updatecategoriesAction($id, Request $request)
    {
        $post = $this  ->getDoctrine()
                        ->getRepository('TpAdmin2Bundle:Categories')
                        ->find($id);

        //création du fomrulaire
        $form = $this->createForm(new CategorieType(), $post);
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

        return $this->render('TpAdmin2Bundle:Default:updatecategories.html.twig', 
                array('form' => $form->createView(),
                      'post' => $post));
    }
    public function deletepostsAction()
    {

    	$posts = $this	->getDoctrine()
    					->getRepository('TpAdmin2Bundle:Post')
    					->findAll();

        return $this->render('TpAdmin2Bundle:Default:deleteposts.html.twig', 
        		array('name' => 'jean',
        			  'posts' => $posts)
        );
    }
    public function gestionCategoriesAction()
    {

        $posts = $this  ->getDoctrine()
                        ->getRepository('TpAdmin2Bundle:Categories')
                        ->findAll();

        return $this->render('TpAdmin2Bundle:Default:gestionCategories.html.twig', 
                array('name' => 'jean',
                      'posts' => $posts)
        );
    }
    public function suppressionCategoriesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('TpAdmin2Bundle:Categories')->find($id);

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('categories'));
       
    }
    public function suppressionArticlesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('TpAdmin2Bundle:Post')->find($id);

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('tp_admin2_posts_delete'));
       
    }
   
}
