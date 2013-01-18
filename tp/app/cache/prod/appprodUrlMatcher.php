<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // tp_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tp_blog_homepage');
            }

            return array (  '_controller' => 'Tp\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tp_blog_homepage',);
        }

        // tp_blog_article
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\BlogBundle\\Controller\\DefaultController::showAction',)), array('_route' => 'tp_blog_article'));
        }

        // tp_blog_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Tp\\BlogBundle\\Controller\\StaticController::contactAction',  '_route' => 'tp_blog_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
