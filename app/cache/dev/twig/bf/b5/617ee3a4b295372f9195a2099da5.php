<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_bfb5617ee3a4b295372f9195a2099da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:toolbar", array("token" => $this->getContext($context, "token"), "position" => "normal"), array());
        // line 6
        echo "
    <div id=\"content\">
        ";
        // line 8
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 9
        echo "
        <div id=\"main\">

            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    ";
        // line 14
        if ($this->getContext($context, "profile")) {
            // line 15
            echo "                        <div id=\"resume\">
                            <strong>Profile for:</strong>
                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "method")), "html", null, true);
            echo "
                            ";
            // line 18
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "method")), array(0 => "GET", 1 => "HEAD"))) {
                // line 19
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 21
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
                echo "
                            ";
            }
            // line 23
            echo "                            <span class=\"date\">
                                <em>by ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "ip"), "html", null, true);
            echo "</em> at <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "time"), "r"), "html", null, true);
            echo "</em>
                            </span>
                        </div>
                    ";
        }
        // line 28
        echo "
                    <div id=\"collector_content\">
                        ";
        // line 30
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 31
        echo "                        ";
        $this->displayBlock('panel', $context, $blocks);
        // line 32
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 35
        if (array_key_exists("templates", $context)) {
            // line 36
            echo "                        <ul id=\"menu_profiler\">
                            ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 38
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 39
                echo "                                ";
                if (($this->getContext($context, "menu") != "")) {
                    // line 40
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    if (($this->getContext($context, "name") == $this->getContext($context, "panel"))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
                    echo "\">";
                    echo $this->getContext($context, "menu");
                    echo "</a>
                                    </li>
                                ";
                }
                // line 44
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 45
            echo "                        </ul>
                    ";
        }
        // line 47
        echo "                    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array(), array());
        // line 48
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, "token")));
        // line 49
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
