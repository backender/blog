<?php

/* WebProfilerBundle:Collector:time.html.twig */
class __TwigTemplate_f72fbedc17128ae5537f9d0fc1f3f8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((!array_key_exists("colors", $context))) {
            // line 4
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_toolbar($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"16\" height=\"28\" alt=\"Time\" style=\"vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAiNJREFUeNpi/P//PwMlgImBQjDwBrCcO3cOq0RRUdF3ZH5fXx8nTVzAePbsWcq8gMwxMjJiSUlJcXv9+nXm169fbf78+SMAVsTC8paXl3ePmJjYjJkzZx4GevsviheAGhmBguL+/v4779y5s/Xjx48+MM0gAGQLv3//PvzmzZv7AwMD19y+fVsEpAfsBWBCYly8eLHcsmXLjnz//l2GGGcDXXM1IyPD2dvb+xXIBTwbN25chU3zgQMHwBgdfP78WXvp0qVzgUwuprq6utg3b96YkRp4z549854wYYI7071791LJjYFLly7lM7148UKHXAOALtdnAYYwCyGFyOHg4OAAZ3/69ImfopTIzMz8j4WVlfXf79+/sRqEbBs2wMfH94tJXV39DbkuUFFReclkb29/jlwDPD09jzGFhoZu0NTU/EKqZktLyzdOTk7bQX4/U1tbu1pcXPwvsZoVFBR+lZeXLwUyz4MMuCMlJbWmv79/o56e3k9Cms3MzL5PmjRphYCAwCYg9wE4MwEZwkBsDsReO3fudN+zZ4/shQsX2ICxA9bEzs7OYGBg8NPHx+eBra3tdqDQVpDLgfgjuEABZk2QS3hBAQvExkBsAHIpMAsLAOP6PzC63gP590FOBmJQCXQPiL8Ai4D/KCUS0CBWIAUqB8SAWAiIQeUgqOIAlY/vgPgVEH8AavyDtUQCSoDc/BqEoQUGLIH9A9mGtUwc8JoJIMAAS9XemfR7crQAAAAASUVORK5CYII=\"/>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($this->getContext($context, "collector"), "totaltime")), "html", null, true);
        echo " ms
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        // line 27
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/time.png"), "html", null, true);
        echo "\" alt=\"Timeline\" /></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 33
    public function block_panel($context, array $blocks = array())
    {
        // line 34
        echo "    <h2>Timeline</h2>

    ";
        // line 36
        $context["threshold"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "threshold", 1 => 1), "method");
        // line 37
        echo "    ";
        $context["width"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "width", 1 => 680), "method");
        // line 38
        echo "
    <form action=\"\" method=\"get\" style=\"display: inline\">
        <input type=\"hidden\" name=\"panel\" value=\"time\" />
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($this->getContext($context, "collector"), "totaltime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute($this->getContext($context, "collector"), "inittime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getContext($context, "threshold"), "html", null, true);
        echo "\" min=\"0\" /> ms</td>
            </tr>
            <tr>
                <th>Width</th>
                <td><input type=\"range\" name=\"width\" min=\"0\" max=\"1200\" step=\"10\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
        echo "\" onChange=\"drawCanvases(this.value);\" /> px</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td><input type=\"submit\" value=\"refresh\" /></td>
            </tr>
        </table>
    </form>

    <h3>
        Main Request
        <small>
            - ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "totaltime"), "html", null, true);
        echo " ms
            ";
        // line 69
        if ($this->getAttribute($this->getContext($context, "profile"), "parent")) {
            // line 70
            echo "                - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($this->getContext($context, "profile"), "parent"), "token"), "panel" => "time", "threshold" => $this->getContext($context, "threshold"), "width" => $this->getContext($context, "width"))), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 72
        echo "        </small>
    </h3>

    ";
        // line 75
        $context["max"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "endtime");
        // line 76
        echo "
    ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this, "display_timeline", array(0 => ("timeline_" . $this->getContext($context, "token")), 1 => $this->getAttribute($this->getContext($context, "collector"), "events"), 2 => $this->getContext($context, "threshold"), 3 => $this->getContext($context, "colors"), 4 => $this->getContext($context, "width")), "method"), "html", null, true);
        echo "

    ";
        // line 79
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "children"))) {
            // line 80
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "profile"), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 81
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($this->getContext($context, "child"), "getcollector", array(0 => "time"), "method"), "events");
                // line 82
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "child"), "token"), "panel" => "time", "threshold" => $this->getContext($context, "threshold"), "width" => $this->getContext($context, "width"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "child"), "getcollector", array(0 => "request"), "method"), "requestattributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "events"), "__section__"), "totaltime"), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this, "display_timeline", array(0 => ("timeline_" . $this->getAttribute($this->getContext($context, "child"), "token")), 1 => $this->getContext($context, "events"), 2 => $this->getContext($context, "threshold"), 3 => $this->getContext($context, "colors"), 4 => $this->getContext($context, "width")), "method"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function drawCanvas(request, max, threshold, width) {
            \"use strict\";
            var text,
                ms,
                xc,
                mainEvents,
                colors = ";
        // line 98
        echo twig_jsonencode_filter($this->getContext($context, "colors"));
        echo ",
                space = 10.5,
                ratio = (width - space * 2) / max,
                height = 0,
                h = space,
                x = request.left * ratio + space,
                canvas = document.getElementById('timeline_' + request.id),
                ctx = canvas.getContext(\"2d\");

            request.events = request.events.filter(function(event) {
                return event.totaltime >= threshold;
            });

            height += 38 * request.events.length;
            canvas.width = width;
            ctx.textBaseline = \"middle\";
            ctx.lineWidth = 0;

            request.events.forEach(function(event) {
                event.periods.forEach(function(period) {
                    if ('__section__.child' === event.name) {
                        ctx.fillStyle = colors.child_sections;
                        ctx.fillRect(x + period.begin * ratio, 0, (period.end - period.begin) * ratio, height);
                    } else if ('section' === event.category) {
                        ctx.beginPath();
                        ctx.strokeStyle = \"#dfdfdf\";
                        ctx.moveTo(x + period.begin * ratio, 0);
                        ctx.lineTo(x + period.begin * ratio, height);
                        ctx.moveTo(x + period.end * ratio, 0);
                        ctx.lineTo(x + period.end * ratio, height);
                        ctx.fill();
                        ctx.closePath();
                        ctx.stroke();
                    }
                });
            });

            mainEvents = request.events.filter(function(event) {
                return '__section__.child' !== event.name;
            });

            mainEvents.forEach(function(event) {

                h += 8;

                event.periods.forEach(function(period) {

                    if (colors[event.name]) {
                        ctx.fillStyle = colors[event.name];
                        ctx.strokeStyle = colors[event.name];
                    } else if (colors[event.category]) {
                        ctx.fillStyle = colors[event.category];
                        ctx.strokeStyle = colors[event.category];
                    } else {
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];
                    }

                    if ('section' !== event.category) {
                        ctx.fillRect(x + period.begin * ratio, h + 3, 2, 6);
                        ctx.fillRect(x + period.begin * ratio, h, (period.end - period.begin) * ratio || 2, 6);
                    } else {
                        ctx.beginPath();
                        ctx.moveTo(x + period.begin * ratio, h);
                        ctx.lineTo(x + period.begin * ratio, h + 11);
                        ctx.lineTo(x + period.begin * ratio + 8, h);
                        ctx.lineTo(x + period.begin * ratio, h);
                        ctx.fill();
                        ctx.closePath();
                        ctx.stroke();

                        ctx.beginPath();
                        ctx.moveTo(x + period.end * ratio, h);
                        ctx.lineTo(x + period.end * ratio, h + 11);
                        ctx.lineTo(x + period.end * ratio - 8, h);
                        ctx.lineTo(x + period.end * ratio, h);
                        ctx.fill();
                        ctx.closePath();
                        ctx.stroke();

                        ctx.beginPath();
                        ctx.moveTo(x + period.begin * ratio, h);
                        ctx.lineTo(x + period.end * ratio, h);
                        ctx.lineTo(x + period.end * ratio, h + 2);
                        ctx.lineTo(x + period.begin * ratio, h + 2);
                        ctx.lineTo(x + period.begin * ratio, h);
                        ctx.fill();
                        ctx.closePath();
                        ctx.stroke();
                    }
                });

                h += 30;

                ctx.beginPath();
                ctx.strokeStyle = \"#dfdfdf\";
                ctx.moveTo(0, h - 10);
                ctx.lineTo(width, h - 10);
                ctx.closePath();
                ctx.stroke();
            });

            h = space;

            mainEvents.forEach(function(event) {

                ctx.fillStyle = \"#444\";
                ctx.font = \"12px sans-serif\";
                text = event.name;
                ms = \" ~ \" + (event.totaltime < 1 ? event.totaltime : parseInt(event.totaltime, 10)) + \" ms\";
                if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                    ctx.textAlign = \"end\";
                    ctx.font = \"10px sans-serif\";
                    xc = x + event.endtime * ratio - 1;
                    ctx.fillText(ms, xc, h);

                    xc -= ctx.measureText(ms).width;
                    ctx.font = \"12px sans-serif\";
                    ctx.fillText(text, xc, h);
                } else {
                    ctx.textAlign = \"start\";
                    ctx.font = \"12px sans-serif\";
                    xc = x + event.starttime * ratio + 1;
                    ctx.fillText(text, xc, h);

                    xc += ctx.measureText(text).width;
                    ctx.font = \"10px sans-serif\";
                    ctx.fillText(ms, xc, h);
                }

                h += 38;
            });
        }

        function drawCanvases(width)
        {
            \"use strict\";
            requests_data.requests.forEach(function(request) {
                drawCanvas(request, requests_data.max, ";
        // line 236
        echo twig_escape_filter($this->env, $this->getContext($context, "threshold"), "html", null, true);
        echo ", width);
            });
        }

        var requests_data = {
            \"max\": ";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "endtime"), "html", null, true);
        echo ",
            \"requests\": [
";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute($this, "dump_request_data", array(0 => $this->getContext($context, "token"), 1 => $this->getContext($context, "profile"), 2 => $this->getAttribute($this->getContext($context, "collector"), "events"), 3 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "origin")), "method"), "html", null, true);
        echo "

";
        // line 245
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "children"))) {
            // line 246
            echo "                ,
";
            // line 247
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "profile"), "children"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 248
                echo twig_escape_filter($this->env, $this->getAttribute($this, "dump_request_data", array(0 => $this->getAttribute($this->getContext($context, "child"), "token"), 1 => $this->getContext($context, "child"), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "child"), "getcollector", array(0 => "time"), "method"), "events"), 3 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "events"), "__section__"), "origin")), "method"), "html", null, true);
                echo (($this->getAttribute($this->getContext($context, "loop"), "last")) ? ("") : (","));
                echo "
";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 251
        echo "            ]
        };

        drawCanvases(";
        // line 254
        echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
        echo ");
    //]]></script>
";
    }

    // line 258
    public function getdump_request_data($token = null, $profile = null, $events = null, $origin = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "token" => $token,
            "profile" => $profile,
            "events" => $events,
            "origin" => $origin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 259
            echo "                {
                    \"id\": \"";
            // line 260
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\",
                    \"left\": ";
            // line 261
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getContext($context, "events"), "__section__"), "origin") - $this->getContext($context, "origin")), "html", null, true);
            echo ",
                    \"events\": [
";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($this, "dump_events", array(0 => $this->getContext($context, "events")), "method"), "html", null, true);
            echo "
                    ]
                }
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 268
    public function getdump_events($events = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "events" => $events,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 269
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "events"));
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
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 270
                if (("__section__" != $this->getContext($context, "name"))) {
                    // line 271
                    echo "                        {
                            \"name\": \"";
                    // line 272
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "category"), "html", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 274
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "origin"), "html", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 275
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "starttime"), "html", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 276
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "endtime"), "html", null, true);
                    echo ",
                            \"totaltime\": ";
                    // line 277
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "totaltime"), "html", null, true);
                    echo ",
                            \"periods\": [";
                    // line 279
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "event"), "periods"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 280
                        echo "{\"begin\": ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "period"), 0), "html", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "period"), 1), "html", null, true);
                        echo "}";
                        echo (($this->getAttribute($this->getContext($context, "loop"), "last")) ? ("") : (", "));
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 282
                    echo "]
                        }";
                    // line 283
                    echo (($this->getAttribute($this->getContext($context, "loop"), "last")) ? ("") : (","));
                    echo "
";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 288
    public function getdisplay_timeline($id = null, $events = null, $threshold = null, $colors = null, $width = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "id" => $id,
            "events" => $events,
            "threshold" => $threshold,
            "colors" => $colors,
            "width" => $width,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 289
            echo "    ";
            $context["height"] = 0;
            // line 290
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "events"));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                if ((("__section__" != $this->getContext($context, "name")) && ($this->getAttribute($this->getContext($context, "event"), "totaltime") >= $this->getContext($context, "threshold")))) {
                    // line 291
                    echo "        ";
                    $context["height"] = ($this->getContext($context, "height") + 38);
                    // line 292
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 293
            echo "
    <div>
        <small>
            ";
            // line 296
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "colors"));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 297
                echo "                <span style=\"background-color: ";
                echo twig_escape_filter($this->env, $this->getContext($context, "color"), "html", null, true);
                echo "\">&nbsp;&nbsp;&nbsp;</span> ";
                echo twig_escape_filter($this->env, $this->getContext($context, "category"), "html", null, true);
                echo "&nbsp;&nbsp;
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 299
            echo "        </small>
    </div>

    <canvas width=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "height"), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
