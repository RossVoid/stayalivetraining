<?php

/* D:\xampp\htdocs\stayalive/plugins/kurtjensen/mycalendar/components/partials/day.htm */
class __TwigTemplate_ce4e39184d4ff6d7322b672222fe9991ee371d2ff5e2b4f6604ab72d1f88d91b extends Twig_Template
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
        echo "            <td";
        if (($context["data_request"] ?? null)) {
            echo " data-request-data=\"day:'";
            echo twig_escape_filter($this->env, ($context["dayPointer"] ?? null), "html", null, true);
            echo "'\"";
        }
        echo ">
";
        // line 2
        if ($this->getAttribute(($context["dayProp"] ?? null), "link", array())) {
            // line 3
            echo "                <a ";
            echo $this->getAttribute(($context["dayProp"] ?? null), "link", array());
            echo ">
";
        }
        // line 5
        echo "                <div class=\"";
        if ($this->getAttribute(($context["dayProp"] ?? null), "class", array())) {
            echo $this->getAttribute(($context["dayProp"] ?? null), "class", array());
        } else {
            echo "dayLabel ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Container"] ?? null), "color", array()), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, ($context["dayPointer"] ?? null), "html", null, true);
        echo "</div>
";
        // line 6
        if ($this->getAttribute(($context["dayProp"] ?? null), "link", array())) {
            // line 7
            echo "                </a>
";
        }
        // line 9
        if (($context["events"] ?? null)) {
            // line 10
            echo "                <ul class=\"eventList\">
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
                // line 13
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['ev'] = $context["ev"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("@event"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </ul>
";
        }
        // line 17
        echo "            </td>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/day.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  73 => 15,  63 => 13,  59 => 12,  56 => 10,  54 => 9,  50 => 7,  48 => 6,  36 => 5,  30 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("            <td{% if data_request %} data-request-data=\"day:'{{ dayPointer }}'\"{% endif %}>
{% if dayProp.link %}
                <a {{ dayProp.link|raw }}>
{% endif %}
                <div class=\"{% if dayProp.class %}{{ dayProp.class|raw }}{% else %}dayLabel {{ Container.color }}{% endif %}\">{{ dayPointer }}</div>
{% if dayProp.link %}
                </a>
{% endif %}
{% if events %}
                <ul class=\"eventList\">
{#    ** Walk through events of the day ** #}
{% for ev in events %}
                    {% partial '@event' ev = ev %}
{% endfor %}
                </ul>
{% endif %}
            </td>", "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/day.htm", "");
    }
}
