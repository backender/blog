<?php

/* WebdevBlogBundle::layout.html.twig */
class __TwigTemplate_1bd77b0ec2d8bab3a5528389ae7865e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div>
\t
\t\t";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "\t\t<div style=\"float:right;\">
\t\t\t<p>Menü</p>
\t\t</div>
\t\t
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "WebdevBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
