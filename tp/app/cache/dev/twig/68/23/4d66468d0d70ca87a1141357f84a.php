<?php

/* TpAdmin2Bundle::layout-blog.html.twig */
class __TwigTemplate_68234d66468d0d70ca87a1141357f84a extends Twig_Template
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
  <link href=\"/css/bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
  <link href=\"/css/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<!--[if IE]>
\t<link rel=\"stylesheet\" href=\"/css/blueprint/ie.css\" type=\"text/css\" media=\"screen, projection\">
\t<![endif]-->
\t<!--[if IE]>
\t<link rel=\"stylesheet\" href=\"/css/blueprint/ie.css\" media=\"screen, projection\">
\t<![endif]-->
  <link href=\"/css/bootstrap/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"/css/bootstrap/js/bootstrap.js\"></script>
  </head>
  
  <body style=\"background-color:white\">
  <div class=\"container\">
  <div class=\"navbar\">
  <div class=\"navbar-inner\">
    <div class=\"container-fluid\">
      <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>
      <a class=\"brand\" href=\"#\" name=\"top\">Blog Admin</a>
      <div class=\"nav-collapse collapse\">
        <ul class=\"nav\">
          <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin2_manage"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i> TDB</a></li>
          <li class=\"divider-vertical\"></li>
          <li ><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin2_posts_delete"), "html", null, true);
        echo "\"><i class=\"icon-file\"></i> Articles</a></li>
          <li ><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories"), "html", null, true);
        echo "\"><i class=\"icon-file\"></i> Categories</a></li>
          <li class=\"divider-vertical\"></li>
          <li><a href=\"#\"><i class=\"icon-envelope\"></i> Comments</a></li>
        </ul>
        <div class=\"btn-group pull-right\">
          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"icon-user\"></i> admin <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\"><i class=\"icon-wrench\"></i> Settings</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin"), "html", null, true);
        echo "\"><i class=\"icon-share\"></i> Logout</a></li>
          </ul>
        </div>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </div>
  <!--/.navbar-inner -->
</div>
<!--/.navbar -->
   

";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "
  </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Test application";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "TpAdmin2Bundle::layout-blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 65,  115 => 64,  109 => 4,  103 => 68,  101 => 64,  85 => 51,  71 => 40,  62 => 37,  26 => 4,  21 => 1,  92 => 35,  81 => 30,  74 => 28,  70 => 27,  67 => 39,  63 => 25,  48 => 13,  40 => 7,  37 => 6,  29 => 4,);
    }
}
