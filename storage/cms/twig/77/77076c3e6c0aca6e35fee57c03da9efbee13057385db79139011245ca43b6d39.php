<?php

/* D:\xampp\htdocs\stayalive/plugins/kurtjensen/mycalendar/components/evlist/default.htm */
class __TwigTemplate_1b58981ed4131a5e3ebcef8c0b2853edf0c575287279b6d0b9baffffca526269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["MyM"] = ($context["__SELF__"] ?? null);
        // line 2
        $context["devents"] = $this->getAttribute(($context["MyM"] ?? null), "events", array());
        // line 3
        echo "<table class=\"mycal\">
    <tbody>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devents"] ?? null));
        foreach ($context['_seq'] as $context["y"] => $context["eYear"]) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["eYear"]);
            foreach ($context['_seq'] as $context["m"] => $context["eMonth"]) {
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["eMonth"]);
                foreach ($context['_seq'] as $context["d"] => $context["eDay"]) {
                    // line 8
                    echo "        <tr data-request-data=\"year:";
                    echo twig_escape_filter($this->env, $context["y"], "html", null, true);
                    echo ",month:";
                    echo twig_escape_filter($this->env, $context["m"], "html", null, true);
                    echo ",day:";
                    echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                    echo "\">
            <td class=\"list-icon\">
                <div class=\"holder\">
                    <div class=\"month ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["MyM"] ?? null), "color", array()), "html", null, true);
                    echo "\">
                        <p>";
                    // line 12
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($context["m"] . "/1/") . $context["y"]), "M"), "html", null, true);
                    echo "</p> 
                    </div>
                    <div class=\"day\">
                        <p>";
                    // line 15
                    echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                    echo "</p>
                    </div>
                </div>
            </td>
            <td class=\"list-event\">
                <ul class=\"eventList\">
";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["eDay"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["eEvent"]) {
                        // line 22
                        echo "    ";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['ev'] = $context["eEvent"]                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("@event"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eEvent'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "                </ul>
            </td>
        </tr>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['d'], $context['eDay'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "<!-- eDay -->
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['m'], $context['eMonth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "<!-- eMonth -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['y'], $context['eYear'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<!-- eYear -->
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/evlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  99 => 28,  92 => 27,  83 => 24,  73 => 22,  69 => 21,  60 => 15,  54 => 12,  50 => 11,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set MyM = __SELF__ %}
{% set devents = MyM.events %}
<table class=\"mycal\">
    <tbody>
{% for y,eYear in devents %}
{% for m,eMonth in eYear %}
{% for d,eDay in eMonth %}
        <tr data-request-data=\"year:{{ y }},month:{{ m }},day:{{ d }}\">
            <td class=\"list-icon\">
                <div class=\"holder\">
                    <div class=\"month {{ MyM.color }}\">
                        <p>{{ (m~'/1/'~y)|date('M') }}</p> 
                    </div>
                    <div class=\"day\">
                        <p>{{ d }}</p>
                    </div>
                </div>
            </td>
            <td class=\"list-event\">
                <ul class=\"eventList\">
{% for eEvent in eDay %}
    {% partial '@event' ev = eEvent %}
{% endfor %}
                </ul>
            </td>
        </tr>
{% endfor %}<!-- eDay -->
{% endfor %}<!-- eMonth -->
{% endfor %}<!-- eYear -->
    </tbody>
</table>", "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/evlist/default.htm", "");
    }
}
