<?php

/* ::base.html.twig */
class __TwigTemplate_177ac91340e548c3632be1060eefc674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - marc's Blog</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t\t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<div id=\"header\">
\t\t\t\t<div id=\"header_text\">
\t\t\t\t\t<h1>marc's Blog</h1>
\t\t\t\t\t<p>Dein Computer ist nach zwei Jahren völlig veraltet. Dein Browser nach zwei Monaten.</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"header_font_size\" class=\"no_margin\">
\t\t\t\t\t<a href=\"javascript:;\" onclick=\"changeFontSize('-');\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/images/fontname_16x16.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t\t<a href=\"javascript:;\" onclick=\"changeFontSize('+');\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("resources/images/fontname_26x26.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t</div>
\t\t\t\t<ul id=\"header_links\" class=\"small no_margin\">
\t\t\t\t\t<li><a href=\"\">Twitter</a></li>
\t\t\t\t\t<li><a href=\"\">GitHub</a></li>
\t\t\t\t\t<li><a href=\"\">Impressum</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"body\">
\t\t\t\t";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "\t\t\t</div>
\t    </div>
\t    ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t
\t\t\t";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3bdee21_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3bdee21_0") : $this->env->getExtension('assets')->getAssetUrl("resources/compiled/base_base_1.css");
            // line 12
            echo "\t\t\t
\t\t\t\t<link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t
\t\t\t";
        } else {
            // asset "3bdee21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3bdee21") : $this->env->getExtension('assets')->getAssetUrl("resources/compiled/base.css");
            // line 12
            echo "\t\t\t
\t\t\t\t<link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
\t\t";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "\t    
\t    \t";
        // line 43
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b24dae1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b24dae1_0") : $this->env->getExtension('assets')->getAssetUrl("resources/compiled/base_jquery-1.7_1.js");
            // line 48
            echo "\t    \t
\t    \t<script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t    \t
\t    \t";
            // asset "b24dae1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b24dae1_1") : $this->env->getExtension('assets')->getAssetUrl("resources/compiled/base_base_2.js");
            // line 48
            echo "\t    \t
\t    \t<script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t    \t
\t    \t";
        } else {
            // asset "b24dae1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b24dae1") : $this->env->getExtension('assets')->getAssetUrl("resources/compiled/base.js");
            // line 48
            echo "\t    \t
\t    \t<script type=\"text/javascript\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t    \t
\t    \t";
        }
        unset($context["asset_url"]);
        // line 52
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
