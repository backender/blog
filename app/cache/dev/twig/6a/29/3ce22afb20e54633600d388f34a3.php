<?php

/* WebdevBlogBundle::layout.html.twig */
class __TwigTemplate_6a293ce22afb20e54633600d388f34a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div id=\"blog_sidebar\" class=\"right\">
\t\t<p>Projekte</p>
\t\t<hr />
\t\t<ul>
\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t</ul>
\t\t<p>Archiv</p>
\t\t<hr />
\t\t<ul>
\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t</ul>
\t\t<p>Blogroll</p>
\t\t<hr />
\t\t<ul>
\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t</ul>
\t</div>
\t
\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "\t
";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t
\t";
        // line 33
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "80bf1c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80bf1c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/resources/compiled/layout_layout_1.css");
            // line 37
            echo "\t\t\t
\t\t<link href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t
\t";
        } else {
            // asset "80bf1c2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80bf1c2") : $this->env->getExtension('assets')->getAssetUrl("_controller/resources/compiled/layout.css");
            // line 37
            echo "\t\t\t
\t\t<link href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t
\t";
        }
        unset($context["asset_url"]);
        // line 41
        echo "\t\t\t\t
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
