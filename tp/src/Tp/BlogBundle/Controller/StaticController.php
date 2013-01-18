<?php

namespace Tp\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    public function contactAction()
    {
        return $this->render('TpBlogBundle:Static:contact.html.twig');
    }
}
