<?php

/* WebdevBlogBundle:Post:view.html.twig */
class __TwigTemplate_8bb96449c243764b59412233eaa903df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebdevBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "</h2>
\t<p>";
        // line 6
        echo $this->getAttribute($this->getContext($context, "post"), "content");
        echo "</p>
\t<p>Klicks: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "clicks"), "html", null, true);
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "WebdevBlogBundle:Post:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
