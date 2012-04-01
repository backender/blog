<?php

/* WebdevBlogBundle:Post:view.html.twig */
class __TwigTemplate_3dc2df5b3246ebae4ec4d775fdeabd0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 10
        echo "\t<div id=\"blog_post_metadata\" class=\"left small\">
\t\t<table>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>Erstellt am</td>
\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "createdAt"), "d.m.Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Geändert am</td>
\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "updatedAt"), "d.m.Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Klicks</td>
\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "clicks"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Kommentare</td>
\t\t\t\t\t<td>10</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<p>Trackbacks (<a href=\"\">URL</a>)</p>
\t\t<ul class=\"no_margin\">
\t\t\t<li><a href=\"\">Lorem Ipsum</a></li>
\t\t\t<li><a href=\"\">Lorem Ipsum dolor</a></li>
\t\t</ul>
\t</div>

\t";
        // line 39
        echo "\t<h2 class=\"no_margin\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "</h2>
\t<div id=\"blog_post_content\">
\t\t";
        // line 41
        echo $this->getAttribute($this->getContext($context, "post"), "content");
        echo "
\t</div>
\t
\t";
        // line 45
        echo "\t<h3 class=\"no_margin clear\">Kommentare</h3>
\t<hr class=\"no_margin\"/>
\t<div id=\"blog_post_comment_new\">
\t\t<p>Wenn du auch einen Kommentar schreiben möchtest, melde dich bitte <a href=\"\">hier</a> an.</p>
\t</div>

";
    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 55
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t
\t";
        // line 57
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ab1207e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab1207e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/resources/compiled/view_view_1.css");
            // line 61
            echo "\t\t\t
\t\t<link href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t
\t";
        } else {
            // asset "ab1207e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab1207e") : $this->env->getExtension('assets')->getAssetUrl("_controller/resources/compiled/view.css");
            // line 61
            echo "\t\t\t
\t\t<link href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t
\t";
        }
        unset($context["asset_url"]);
        // line 65
        echo "\t\t\t    
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
