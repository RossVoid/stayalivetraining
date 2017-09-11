<?php

/* D:\xampp\htdocs\stayalive/plugins/kurtjensen/mycalendar/components/partials/month.htm */
class __TwigTemplate_44ffeffe9e015d4d203c97438e0788280e5c3144d7f51377d69215b40972711b extends Twig_Template
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
        $context["dayPointer"] = $this->getAttribute(($context["__SELF__"] ?? null), "dayPointer", array());
        // line 2
        $context["devents"] = $this->getAttribute(($context["__SELF__"] ?? null), "monthEvents", array());
        // line 3
        $context["dprops"] = $this->getAttribute(($context["__SELF__"] ?? null), "monthProperties", array());
        // line 4
        $context["trailDay"] = 0;
        // line 5
        echo "<table class=\"mycal\"";
        if ($this->getAttribute(($context["__SELF__"] ?? null), "data_request", array())) {
            echo " data-request-data=\"year:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "year", array()), "html", null, true);
            echo ", month:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "monthNum", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    <thead>
        <tr>
            <th colspan=\"2\" class=\"text-right\">
                ";
        // line 9
        echo $this->getAttribute(($context["__SELF__"] ?? null), "prevLink", array(), "method");
        echo "
            </th>
            <th colspan=\"3\"  class=\"monthHead\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "monthTitle", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "year", array()), "html", null, true);
        echo "
            </th>
            <th colspan=\"2\" class=\"text-left\">
                ";
        // line 15
        echo $this->getAttribute(($context["__SELF__"] ?? null), "nextLink", array(), "method");
        echo "
            </th>
        </tr>


<!-- START DAY LABELS -->
        <tr class=\"daysHead\">

";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["weekDayNum"]) {
            // line 30
            $context["labelOffset"] = ($context["weekDayNum"] + $this->getAttribute(($context["__SELF__"] ?? null), "weekstart", array()));
            // line 31
            $context["labelKey"] = (((($context["labelOffset"] ?? null) > 6)) ? ((($context["labelOffset"] ?? null) - 7)) : (($context["labelOffset"] ?? null)));
            // line 32
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["__SELF__"] ?? null), "calHeadings", array()), ($context["labelKey"] ?? null), array(), "array"), "html", null, true);
            echo "</th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weekDayNum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tr>
<!-- END DAY LABELS -->
     </thead>


<!-- START DAYS of Previous month -->
     <tbody>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 46
            if ((($context["dayPointer"] ?? null) < $this->getAttribute(($context["__SELF__"] ?? null), "days_in_month", array()))) {
                // line 47
                echo "        <tr class=\"days\">

";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                    // line 51
                    echo "
";
                    // line 53
                    $context["dayPointer"] = (($context["dayPointer"] ?? null) + 1);
                    // line 54
                    echo "
";
                    // line 56
                    if ((($context["dayPointer"] ?? null) < 1)) {
                        // line 57
                        echo "
";
                        // line 58
                        $context["prevDay"] = ($this->getAttribute(($context["__SELF__"] ?? null), "prevMonthStartDay", array()) + $context["x"]);
                        // line 59
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['Container'] = ($context["__SELF__"] ?? null)                        ;
                        $context['__cms_partial_params']['events'] = $this->getAttribute($this->getAttribute(($context["__SELF__"] ?? null), "monthEvents", array(0 =>  -1), "method"), ($context["prevDay"] ?? null), array(), "array")                        ;
                        $context['__cms_partial_params']['dayProp'] = array("class" => "dis")                        ;
                        $context['__cms_partial_params']['dayPointer'] = ($context["prevDay"] ?? null)                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("@day"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 60
                        echo "
";
                    } elseif ((                    // line 62
($context["dayPointer"] ?? null) > $this->getAttribute(($context["__SELF__"] ?? null), "days_in_month", array()))) {
                        // line 63
                        $context["trailDay"] = (($context["trailDay"] ?? null) + 1);
                        // line 64
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['Container'] = ($context["__SELF__"] ?? null)                        ;
                        $context['__cms_partial_params']['events'] = $this->getAttribute($this->getAttribute(($context["__SELF__"] ?? null), "monthEvents", array(0 => 1), "method"), ($context["trailDay"] ?? null), array(), "array")                        ;
                        $context['__cms_partial_params']['dayProp'] = array("class" => "dis")                        ;
                        $context['__cms_partial_params']['dayPointer'] = ($context["trailDay"] ?? null)                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("@day"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 65
                        echo "
";
                    } else {
                        // line 68
                        echo "
";
                        // line 69
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['Container'] = ($context["__SELF__"] ?? null)                        ;
                        $context['__cms_partial_params']['events'] = $this->getAttribute(($context["devents"] ?? null), ($context["dayPointer"] ?? null), array(), "array")                        ;
                        $context['__cms_partial_params']['dayProp'] = $this->getAttribute(($context["dprops"] ?? null), ($context["dayPointer"] ?? null), array(), "array")                        ;
                        $context['__cms_partial_params']['dayPointer'] = ($context["dayPointer"] ?? null)                        ;
                        $context['__cms_partial_params']['data_request'] = $this->getAttribute(($context["__SELF__"] ?? null), "data_request", array())                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("@day"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 70
                        echo "
";
                    }
                    // line 72
                    echo "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "        </tr>
";
            }
            // line 76
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/month.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 78,  175 => 76,  171 => 74,  164 => 72,  160 => 70,  151 => 69,  148 => 68,  144 => 65,  136 => 64,  134 => 63,  132 => 62,  129 => 60,  121 => 59,  119 => 58,  116 => 57,  114 => 56,  111 => 54,  109 => 53,  106 => 51,  102 => 50,  98 => 47,  96 => 46,  92 => 45,  83 => 37,  74 => 32,  72 => 31,  70 => 30,  66 => 26,  55 => 15,  47 => 12,  41 => 9,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set dayPointer = __SELF__.dayPointer %}
{% set devents = __SELF__.monthEvents %}
{% set dprops = __SELF__.monthProperties %}
{% set trailDay = 0 %}
<table class=\"mycal\"{% if __SELF__.data_request %} data-request-data=\"year:{{ __SELF__.year }}, month:{{ __SELF__.monthNum }}\"{% endif %}>
    <thead>
        <tr>
            <th colspan=\"2\" class=\"text-right\">
                {{ __SELF__.prevLink()|raw }}
            </th>
            <th colspan=\"3\"  class=\"monthHead\">
                {{ __SELF__.monthTitle }} {{ __SELF__.year }}
            </th>
            <th colspan=\"2\" class=\"text-left\">
                {{ __SELF__.nextLink()|raw }}
            </th>
        </tr>


<!-- START DAY LABELS -->
        <tr class=\"daysHead\">

{# 
    ** START - walk through 7 days of week for titles  **
#}
{% for weekDayNum in range(0,6) %}
{# 
    ** calculate order of day labels based on week start setting  **
#}
{% set labelOffset = weekDayNum + __SELF__.weekstart %}
{% set labelKey = labelOffset > 6 ? labelOffset - 7 : labelOffset %}
            <th>{{ __SELF__.calHeadings[labelKey] }}</th>
{% endfor %}
{# 
    ** END - walk through 7 days of week for titles  **
#}
        </tr>
<!-- END DAY LABELS -->
     </thead>


<!-- START DAYS of Previous month -->
     <tbody>
{# ** START - walk through 6 weeks of month ** #}
{% for rows in range(1,6) %}
{% if dayPointer < __SELF__.days_in_month %}
        <tr class=\"days\">

{# ** START - walk through 7 days of week ** #}
{% for x in range(0, 6) %}

{# ** Advance dayPointer ** #}
{% set dayPointer = dayPointer + 1 %}

{# ************ SHOW PREVIOUS MONTH DAYS ************ If dayPointer indicates that current month has not started yet. #}
{% if dayPointer <1 %}

{% set prevDay = __SELF__.prevMonthStartDay + x %}
{% partial '@day' Container=__SELF__ events= __SELF__.monthEvents(-1)[prevDay] dayProp = { class:'dis'} dayPointer=prevDay %}

{# ************ SHOW NEXT MONTH DAYS ************ If dayPointer indicates that current month has past. #}
{% elseif dayPointer > __SELF__.days_in_month %}
{% set trailDay = trailDay + 1 %}
{% partial '@day' Container=__SELF__ events= __SELF__.monthEvents(1)[trailDay] dayProp = { class:'dis'} dayPointer=trailDay %}

{# ************ SHOW CURRENT MONTH DAYS ************ If dayPointer indicates current month. ( Not Past or Previous ) #}
{% else %}

{% partial '@day' Container=__SELF__ events=devents[dayPointer] dayProp = dprops[dayPointer] dayPointer=dayPointer data_request=__SELF__.data_request %}

{% endif %}{# ** END - If dayPointer indicates that current month ** #}

{% endfor %}{# ** END - walk through 7 days of week ** #}
        </tr>
{% endif %}

{% endfor %}{# ** END - walk through 6 weeks of month ** #}
    </tbody>
</table>", "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/month.htm", "");
    }
}
