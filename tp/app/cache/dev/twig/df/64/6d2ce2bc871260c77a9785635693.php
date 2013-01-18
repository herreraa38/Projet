<?php

/* TpBlogBundle::layout.html.twig */
class __TwigTemplate_df646d2ce2bc871260c77a9785635693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html> 
  <head>
  \t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"/css/blueprint/screen.css\" type=\"text/css\" media=\"screen, projection\">
\t<link rel=\"stylesheet\" href=\"/css/blueprint/print.css\" type=\"text/css\" media=\"print\">
\t<link rel=\"stylesheet\" href=\"/css/style.css\" type=\"text/css\" media=\"screen\">  
\t<!--[if IE]>
\t<link rel=\"stylesheet\" href=\"/css/blueprint/ie.css\" type=\"text/css\" media=\"screen, projection\">
\t<![endif]-->
\t<!--[if IE]>
\t<link rel=\"stylesheet\" href=\"/css/blueprint/ie.css\" media=\"screen, projection\">
\t<![endif]-->
  </head>
  
  <body>
  <div class=\"container\">
  
    <div id=\"header\" class=\"span-24\">
      <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin"), "html", null, true);
        echo "\" title=\"Log In\">Log In</a>
        <ul>
        \t<li class=\"first\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_homepage"), "html", null, true);
        echo "\" title=\"home\">home</a></li>
        \t<li><a href=\"#\" title=\"about\">about</a></li>
        \t<li class=\"logo\"><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_homepage"), "html", null, true);
        echo "\" title=\"logo\"><img src=\"/images/logo.png\" alt=\"logo\"/></a></li>
        \t<li><a href=\"#\" title=\"archive\">archive</a></li>
        \t<li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_contact"), "html", null, true);
        echo "\" title=\"email\">email</a></li>
        </ul>
    </div>

";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        echo $this->env->getExtension('actions')->renderAction("TpBlogBundle:Default:sidebar", array(), array());
        // line 36
        echo "
  
  </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Test application";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "TpBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  87 => 30,  81 => 4,  74 => 36,  72 => 35,  69 => 34,  67 => 30,  60 => 26,  55 => 24,  50 => 22,  45 => 20,  26 => 4,  21 => 1,);
    }
}
