<?php

/* TpAdmin2Bundle:Default:sidebar.html.twig */
class __TwigTemplate_02d10ca47e794455c329cbd646b18380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"span-7 last\">
        <div id=\"col-droite\">
        
        \t<div class=\"bloc-col\" id=\"social\">
        \t\t<ul>
        \t\t\t<li><img src=\"/images/rss.png\" alt=\"RSS\"/>10,023</li>
        \t\t\t<li><img src=\"/images/facebook.png\" alt=\"/twitter\"/>7,508</li>
        \t\t\t<li><img src=\"/images/facebook.png\" alt=\"Facebook\"/>6,491</li>
        \t\t</ul>
        \t</div>
        \t
        \t<div class=\"bloc-col\" id=\"search\">
        \t\t<input name=\"search\" type=\"text\" placeholder=\"type your search and hit enter...\"/>
        \t</div>
        \t
\t\t\t\t<div class=\"bloc-col\" id=\"categories\">
\t        \t\t<h3>Categories</h3>
\t        \t\t<ul class=\"list-cat\">
\t        \t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
            // line 21
            echo "\t\t\t\t\t    <li class=\"li-cat\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin_categories", array("id" => $this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), "title"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "\t\t\t\t\t\t<li class=\"li-cat\"><a href=\"#\">View all...</a></li>
\t\t\t\t\t</ul>
        \t\t</div>
        \t
        \t
        \t<div class=\"bloc-col\" id=\"categories\">
        \t\t<h3>Archives <span>by</span> month</h3>
        \t\t<ul class=\"list-cat\">
\t        \t\t<li class=\"li-cat\">April 2011</li>
\t        \t\t<li class=\"li-cat\">February 2011</li>
\t        \t\t<li class=\"li-cat\">January 2011</li>
\t        \t\t<li class=\"li-cat\">December 2010</li>
\t        \t\t<li class=\"li-cat\">October 2010</li>
\t        \t\t<li class=\"li-cat\">July 2010</li>
        \t\t</ul>
        \t\t<ul class=\"list-cat\">
\t        \t\t<li class=\"li-cat\">August 2009</li>
\t        \t\t<li class=\"li-cat\">March 2009</li>
\t        \t\t<li class=\"li-cat\">February 2009</li>
\t        \t\t<li class=\"li-cat\">September 2009</li>
\t        \t\t<li class=\"li-cat\">April 2009</li>
\t        \t\t<li class=\"li-cat\">Further back...</li>
        \t\t</ul>
        \t</div>
        \t
        \t<div class=\"bloc-col\" id=\"latest\">
        \t\t<h3>Latest <span>on</span> flicklr</h3>
        \t\t<ul>
        \t\t\t<li class=\"latest-list\"></li>        \t\t\t
        \t\t\t<li class=\"latest-list\"></li>
        \t\t\t<li class=\"latest-list\"></li>
        \t\t\t<li class=\"latest-list\"></li>
        \t\t\t<li class=\"latest-list\"></li>
        \t\t\t<li class=\"latest-list\"></li>
        \t\t</ul>
        \t</div>
        \t
        \t<div class=\"bloc-col\" id=\"visit\">
        \t\t<h3>Visit <span>our</span> sponsors</h3>
        \t\t<div id=\"sponsor\"></div>
        \t\t<p>Praesent commodo cursus magna, consectetur et. Nullam id dolor ut id elit.</p>
        \t</div>
        </div>
    </div> 
</div>
     <div id=\"footer\" class=\"span-24\">
        <p>© 2011 John Doe. All Rights Reserved.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TpAdmin2Bundle:Default:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  44 => 21,  40 => 20,  19 => 1,);
    }
}
