<?php

/* TpBlogBundle:Static:contact.html.twig */
class __TwigTemplate_5b86e156c08482254f4481a1acec6bd0 extends Twig_Template
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
        echo "<div id=\"containeur\">
\t<div class=\"span-16\">
    \t<div id=\"content\">
\t        <div id=\"bloc1\">
\t        \t<h2>Contact us</h2>
\t        \t<div class=\"span-12\">
\t\t        \t<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
\t
\t\t        \t<p>Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis.</p>
\t        \t</div>
\t        \t<div id=\"miguel\" class=\"span-4\">
\t        \t\t<img src=\"/images/miguel.jpg\" alt=\"miguel\" width=\"130\"/>
\t        \t</div>
\t        </div>\t        
\t     </div>
    </div>
</div>

\t
";
    }

    public function getTemplateName()
    {
        return "TpBlogBundle:Static:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  29 => 3,);
    }
}
