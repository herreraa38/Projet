<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // tp_admin_categories
        if (0 === strpos($pathinfo, '/categories') && preg_match('#^/categories/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::categoriesAction',)), array('_route' => 'tp_admin_categories'));
        }

        // tp_admin2_homepage
        if ($pathinfo === '/admin/login') {
            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::indexAction',  '_route' => 'tp_admin2_homepage',);
        }

        // categories
        if (rtrim($pathinfo, '/') === '/admin/categories') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'categories');
            }

            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::gestionCategoriesAction',  '_route' => 'categories',);
        }

        // tp_admin_article_update
        if (0 === strpos($pathinfo, '/admin/article/update') && preg_match('#^/admin/article/update/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::updatepostsAction',)), array('_route' => 'tp_admin_article_update'));
        }

        // tp_admin_categorie_update
        if (0 === strpos($pathinfo, '/admin/categories/update') && preg_match('#^/admin/categories/update/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::updatecategoriesAction',)), array('_route' => 'tp_admin_categorie_update'));
        }

        // tp_admin_categorie_suppression
        if (0 === strpos($pathinfo, '/admin/categories/suppression') && preg_match('#^/admin/categories/suppression/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::suppressionCategoriesAction',)), array('_route' => 'tp_admin_categorie_suppression'));
        }

        // tp_admin_articles_suppression
        if (0 === strpos($pathinfo, '/admin/articles/suppression') && preg_match('#^/admin/articles/suppression/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::suppressionArticlesAction',)), array('_route' => 'tp_admin_articles_suppression'));
        }

        // tp_admin2_manage
        if ($pathinfo === '/admin/manage') {
            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::manageAction',  '_route' => 'tp_admin2_manage',);
        }

        // redirection_add
        if ($pathinfo === '/admin/add') {
            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::addpostsAction',  '_route' => 'redirection_add',);
        }

        // tp_admin2_posts_add
        if ($pathinfo === '/admin/add') {
            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::addpostsAction',  '_route' => 'tp_admin2_posts_add',);
        }

        // tp_admin2_posts_delete
        if ($pathinfo === '/admin/article') {
            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::deletepostsAction',  '_route' => 'tp_admin2_posts_delete',);
        }

        // tp_admin2_posts_update
        if ($pathinfo === '/admin/update') {
            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::updatepostsAction',  '_route' => 'tp_admin2_posts_update',);
        }

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

        // tp_blog_categories
        if (0 === strpos($pathinfo, '/categories') && preg_match('#^/categories/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\BlogBundle\\Controller\\DefaultController::categoriesAction',)), array('_route' => 'tp_blog_categories'));
        }

        // tp_blog_user
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tp\\BlogBundle\\Controller\\DefaultController::userAction',)), array('_route' => 'tp_blog_user'));
        }

        // tp_blog_add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'Tp\\BlogBundle\\Controller\\DefaultController::addAction',  '_route' => 'tp_blog_add',);
        }

        // tp_admin
        if ($pathinfo === '/admin/login') {
            return array (  '_controller' => 'Tp\\Admin2Bundle\\Controller\\DefaultController::loginAction',  '_route' => 'tp_admin',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
