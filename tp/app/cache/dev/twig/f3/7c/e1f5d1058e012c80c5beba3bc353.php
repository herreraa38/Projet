<?php

/* TpAdmin2Bundle:Default:gestionCategories.html.twig */
class __TwigTemplate_f37ce1f5d1058e012c80c5beba3bc353 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " My cool blog posts / Delete ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<div id=\"containeur\">
\t    <div class=\"span-16\">

\t    
\t        <div id=\"content\">
\t\t\t\t<div class=\"btn-toolbar\">
\t    <button class=\"btn btn-primary\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("redirection_add"), "html", null, true);
        echo "\">Add</a></button>
\t</div>
\t<div class=\"well\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>ID</th>
          <th>Titre</th>
          <th style=\"width: 36px;\"></th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "        <tr>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"), "html", null, true);
            echo "</td>
          <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_blog_article", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
            echo "</a></td>
          <td>
              <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin_categorie_update", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i></a>
              <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tp_admin_categorie_suppression", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))), "html", null, true);
            echo "\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-remove\"></i></a>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "      </tbody>
    </table>
</div>
<div class=\"modal small hide fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h3 id=\"myModalLabel\">Delete Confirmation</h3>
    </div>
    <div class=\"modal-body\">
        <p class=\"error-text\">Are you sure you want to delete the user?</p>
    </div>
    <div class=\"modal-footer\">
        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button>
        <button class=\"btn btn-danger\" data-dismiss=\"modal\">Delete</button>
    </div>
</div>
        </div>
            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "TpAdmin2Bundle:Default:gestionCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  85 => 31,  81 => 30,  74 => 28,  70 => 27,  67 => 26,  63 => 25,  48 => 13,  40 => 7,  37 => 6,  29 => 4,);
    }
}
