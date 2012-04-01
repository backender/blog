<?php

/* WebdevBlogBundle:Default:index.html.twig */
class __TwigTemplate_6f5a4b5dff58d9e4fd8dc2c3bb8d6dfd extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "WebdevBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
