<?php

/* TpBlogBundle:UI:post.html.twig */
class __TwigTemplate_1088440c91fcebcbce0cfe752fe449f8 extends Twig_Template
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
        echo "<div class=\"bloc2\">
          <div class=\"span-4\">
              <span class=\"date\">";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "date"), "F jS, Y"), "html", null, true);
        echo "</span>
          </div>
          <div class=\"span-12\">
            <h2 class=\"title-bloc\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_article", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
        echo "</a></h2>
            <p class=\"description\">";
        // line 7
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content"), 300, true, "..."), "html", null, true);
        echo "<span class=\"links\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_article", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
        echo "\">Continue reading...</a></span></p>
            <div class=\"footerbloc\">
              <p class=\"footer-bloc\"><img src=\"/images/user.png\"/> By <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user"), "name"), "html", null, true);
        echo "</a> in <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_categories", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "categories"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "categories"), "title"), "html", null, true);
        echo "</a> with <span class=\"links-footer\">3 comments</span></p>
              <p class=\"share\"><img src=\"/images/share.png\"/><span class=\"links\">Share</span></p>
            </div>
          </div>
        </div>
          <div class=\"separateur\">
            <hr>
          </div>";
    }

    public function getTemplateName()
    {
        return "TpBlogBundle:UI:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  35 => 7,  23 => 3,  19 => 1,  86 => 30,  83 => 29,  77 => 4,  70 => 35,  68 => 34,  65 => 33,  63 => 29,  51 => 23,  46 => 21,  26 => 4,  21 => 1,  90 => 23,  76 => 22,  73 => 21,  56 => 25,  40 => 6,  37 => 5,  29 => 6,);
    }
}
