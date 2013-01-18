<?php

/* TpAdmin2Bundle:Default:manage.html.twig */
class __TwigTemplate_e05caef0fc4c13e6bb1249d6faafb03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TpAdmin2Bundle::layout-blog.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TpAdmin2Bundle::layout-blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " My cool blog posts ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
 <div class=\"container-fluid\">
      <div class=\"row-fluid\">
       <div class=\"span3\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              <li class=\"nav-header\">Tableau de bord de ";
        // line 12
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        } else {
            echo "?";
        }
        echo "</li>
              <li class=\"active\"><a href=\"#\"></a></li>
              <li><a href=\"#\">2</a></li>
              <li><a href=\"#\">3</a></li>
              <li><a href=\"#\">4</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class=\"span9\">
          
          <div class=\"row-fluid\">
            <div class=\"btn-toolbar\">
</div>
<div class=\"well\">
   

</div>
  
";
    }

    public function getTemplateName()
    {
        return "TpAdmin2Bundle:Default:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  40 => 6,  37 => 5,  29 => 3,);
    }
}
