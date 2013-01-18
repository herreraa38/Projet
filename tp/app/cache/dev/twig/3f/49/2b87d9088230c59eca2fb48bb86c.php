<?php

/* TpAdmin2Bundle:Default:updateposts.html.twig */
class __TwigTemplate_3f492b87d9088230c59eca2fb48bb86c extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " My cool blog posts ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"containeur\">
\t<div class=\"span-16\">

\t
    \t<div id=\"content\">
\t    \t\t<div  id=\"back\">
\t\t        \t<span><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin2_homepage"), "html", null, true);
        echo "\">Back</a></span>
\t\t        </div>
\t\t        <form action=\"\" method=\"post\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t               ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'row');
        echo "
\t               ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'row');
        echo "
\t\t\t\t   ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
\t\t\t\t   ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'row');
        echo "
\t\t\t\t   ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'row');
        echo "

\t\t\t\t   ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t   <input type=\"submit\" />
\t\t\t\t</form>
\t\t\t    <div class=\"separateur\">
\t\t\t    \t<hr>
\t\t\t    </div>
\t        </div>
        </div>
    </div>
\t
";
    }

    public function getTemplateName()
    {
        return "TpAdmin2Bundle:Default:updateposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  57 => 17,  53 => 16,  48 => 14,  40 => 8,  37 => 7,  29 => 5,);
    }
}