<?php

/* TpAdmin2Bundle:Default:deleteposts.html.twig */
class __TwigTemplate_4ca7b4d07cfa8e35c5c587fd13803990 extends Twig_Template
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
          <th>Username</th>
          <th>Date</th>
          <th>Categorie</th>
          <th style=\"width: 36px;\"></th>
        </tr>
      </thead>
      <tbody>
  \t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "\t\t";
            $this->env->loadTemplate("TpAdmin2Bundle:Default:post.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
            // line 30
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "
        
      </tbody>
    </table>
</div>

\t<div class=\"pagination\">
    <ul>
        <li><a href=\"#\">Prev</a></li>
        <li><a href=\"#\">1</a></li>
        <li><a href=\"#\">2</a></li>
        <li><a href=\"#\">3</a></li>
        <li><a href=\"#\">4</a></li>
        <li><a href=\"#\">Next</a></li>
    </ul>
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
        return "TpAdmin2Bundle:Default:deleteposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  86 => 30,  83 => 29,  66 => 28,  48 => 13,  40 => 7,  37 => 6,  29 => 4,);
    }
}
