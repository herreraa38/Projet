<?php

/* TpBlogBundle:Default:show.html.twig */
class __TwigTemplate_3cafb92904661931966cf39a79b1b60a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TpBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TpBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " My cool blog posts ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"containeur\">
\t<div class=\"span-16\">

\t
    \t<div id=\"content\">
\t    \t\t<div  id=\"back\">
\t\t        \t<span><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_homepage"), "html", null, true);
        echo "\">Back</a></span>
\t\t        </div>
\t\t\t\t<div class=\"bloc2\">
\t\t\t\t\t<div class=\"span-4\">
\t\t\t\t\t    <span class=\"date\">";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "date"), "Y-M-D"), "html", null, true);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span-12\">
\t\t\t\t\t\t<h2 class=\"title-bloc\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "title"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "content"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<div class=\"footerbloc\">
\t\t\t\t\t\t\t<p class=\"footer-bloc\"><img src=\"/images/user.png\"/> By <span class=\"links\">John Doe</span> in <span class=\"links\">Web Design</span> with <span class=\"links\">3 comments</span></p>
\t\t\t\t\t\t\t<p class=\"share\"><img src=\"/images/share.png\"/><span class=\"links\">Share</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
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
        return "TpBlogBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  61 => 20,  55 => 17,  48 => 13,  40 => 7,  37 => 6,  29 => 4,);
    }
}
