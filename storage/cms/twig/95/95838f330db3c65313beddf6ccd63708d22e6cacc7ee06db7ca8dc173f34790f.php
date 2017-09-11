<?php

/* D:\xampp\htdocs\stayalive/plugins/kurtjensen/mycalendar/components/partials/week.htm */
class __TwigTemplate_88461772bcddcfdf4ac12badfc49295754d7bc0b868a34b0053ce4b61440c21b extends Twig_Template
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
        if ($this->getAttribute(($context["__SELF__"] ?? null), "data_request", array())) {
            echo "Hello";
        }
        // line 2
        echo "
";
        // line 3
        $context["dayPointer"] = $this->getAttribute(($context["__SELF__"] ?? null), "dayPointer", array());
        // line 4
        $context["devents"] = $this->getAttribute(($context["__SELF__"] ?? null), "monthEvents", array());
        // line 5
        $context["dprops"] = $this->getAttribute(($context["__SELF__"] ?? null), "monthProperties", array());
        // line 6
        $context["trailDay"] = 0;
        // line 7
        echo "<table class=\"mycal\" 
       data-request-data=\"month:'";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "monthNum", array()), "html", null, true);
        echo "'\">
    <thead>
        <tr>
            <th colspan=\"2\" class=\"text-right\">
                ";
        // line 12
        echo $this->getAttribute(($context["__SELF__"] ?? null), "prevLink", array(), "method");
        echo "
            </th>
            <th colspan=\"3\"  class=\"weekHead\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "monthTitle", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "year", array()), "html", null, true);
        echo "
            </th>
            <th colspan=\"2\" class=\"text-left\">
                ";
        // line 18
        echo $this->getAttribute(($context["__SELF__"] ?? null), "nextLink", array(), "method");
        echo "
            </th>
        </tr>


        <tr class=\"daysHead\">
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["__SELF__"] ?? null), "calHeadings", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["hding"]) {
            // line 25
            echo "            <th>";
            echo twig_escape_filter($this->env, $context["hding"], "html", null, true);
            echo "</th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hding'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tr>
     </thead>
     <tbody>

";
        // line 31
        if ((($context["dayPointer"] ?? null) < $this->getAttribute(($context["__SELF__"] ?? null), "days_in_month", array()))) {
            // line 32
            echo "
        <tr class=\"days\">

";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 36
                echo "
";
                // line 38
                $context["dayPointer"] = (($context["dayPointer"] ?? null) + 1);
                // line 39
                echo "

";
                // line 42
                if ((($context["dayPointer"] ?? null) < 1)) {
                    // line 43
                    echo "
";
                    // line 44
                    $context["prevDay"] = ($this->getAttribute(($context["__SELF__"] ?? null), "prevMonthStartDay", array()) + $context["x"]);
                    // line 45
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['Container'] = ($context["__SELF__"] ?? null)                    ;
                    $context['__cms_partial_params']['events'] = $this->getAttribute($this->getAttribute(($context["__SELF__"] ?? null), "monthEvents", array(0 =>  -1), "method"), ($context["prevDay"] ?? null), array(), "array")                    ;
                    $context['__cms_partial_params']['dayProp'] = array("class" => "dis")                    ;
                    $context['__cms_partial_params']['dayPointer'] = ($context["prevDay"] ?? null)                    ;
                    $context['__cms_partial_params']['data_request'] = $this->getAttribute(($context["__SELF__"] ?? null), "data_request", array())                    ;
                    echo $this->env->getExtension('CMS')->partialFunction("@day"                    , $context['__cms_partial_params']                    );
                    unset($context['__cms_partial_params']);
                    // line 46
                    echo "
";
                } elseif ((                // line 51
($context["dayPointer"] ?? null) > $this->getAttribute(($context["__SELF__"] ?? null), "days_in_month", array()))) {
                    // line 52
                    echo "
";
                    // line 53
                    $context["trailDay"] = (($context["trailDay"] ?? null) + 1);
                    // line 54
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['Container'] = ($context["__SELF__"] ?? null)                    ;
                    $context['__cms_partial_params']['events'] = $this->getAttribute($this->getAttribute(($context["__SELF__"] ?? null), "monthEvents", array(0 => 1), "method"), ($context["trailDay"] ?? null), array(), "array")                    ;
                    $context['__cms_partial_params']['dayProp'] = array("class" => "dis")                    ;
                    $context['__cms_partial_params']['dayPointer'] = ($context["trailDay"] ?? null)                    ;
                    echo $this->env->getExtension('CMS')->partialFunction("@day"                    , $context['__cms_partial_params']                    );
                    unset($context['__cms_partial_params']);
                    // line 55
                    echo "
";
                } else {
                    // line 62
                    echo "
";
                    // line 63
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['Container'] = ($context["__SELF__"] ?? null)                    ;
                    $context['__cms_partial_params']['events'] = $this->getAttribute(($context["devents"] ?? null), ($context["dayPointer"] ?? null), array(), "array")                    ;
                    $context['__cms_partial_params']['dayProp'] = $this->getAttribute(($context["dprops"] ?? null), ($context["dayPointer"] ?? null), array(), "array")                    ;
                    $context['__cms_partial_params']['dayPointer'] = ($context["dayPointer"] ?? null)                    ;
                    echo $this->env->getExtension('CMS')->partialFunction("@day"                    , $context['__cms_partial_params']                    );
                    unset($context['__cms_partial_params']);
                    // line 64
                    echo "
";
                }
                // line 66
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </tr>
";
        }
        // line 70
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/week.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 70,  166 => 68,  159 => 66,  155 => 64,  147 => 63,  144 => 62,  140 => 55,  132 => 54,  130 => 53,  127 => 52,  125 => 51,  122 => 46,  113 => 45,  111 => 44,  108 => 43,  106 => 42,  102 => 39,  100 => 38,  97 => 36,  93 => 35,  88 => 32,  86 => 31,  80 => 27,  71 => 25,  67 => 24,  58 => 18,  50 => 15,  44 => 12,  37 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.data_request %}Hello{% endif %}

{% set dayPointer = __SELF__.dayPointer %}
{% set devents = __SELF__.monthEvents %}
{% set dprops = __SELF__.monthProperties %}
{% set trailDay = 0 %}
<table class=\"mycal\" 
       data-request-data=\"month:'{{ __SELF__.monthNum }}'\">
    <thead>
        <tr>
            <th colspan=\"2\" class=\"text-right\">
                {{ __SELF__.prevLink()|raw }}
            </th>
            <th colspan=\"3\"  class=\"weekHead\">
                {{ __SELF__.monthTitle }} {{ __SELF__.year }}
            </th>
            <th colspan=\"2\" class=\"text-left\">
                {{ __SELF__.nextLink()|raw }}
            </th>
        </tr>


        <tr class=\"daysHead\">
{% for hding in  __SELF__.calHeadings %}
            <th>{{ hding }}</th>
{% endfor %}
        </tr>
     </thead>
     <tbody>

{% if dayPointer < __SELF__.days_in_month %}

        <tr class=\"days\">

{% for x in range(0, 6) %}{#    ** START - walk through 7 days of week ** #}

{#    ** Advance dayPointer ** #}
{% set dayPointer = dayPointer + 1 %}


{#    ** SHOW PREVIOUS MONTH DAYS ** If dayPointer indicates that current month has not started yet. #}
{% if dayPointer <1 %}

{% set prevDay = __SELF__.prevMonthStartDay + x %}
{% partial '@day' Container=__SELF__ events= __SELF__.monthEvents(-1)[prevDay] dayProp = { class:'dis'} dayPointer=prevDay data_request=__SELF__.data_request %}

{# 
************ SHOW NEXT MONTH DAYS ************
        If dayPointer indicates that current month has past.
#}
{% elseif dayPointer > __SELF__.days_in_month %}

{% set trailDay = trailDay + 1 %}
{% partial '@day' Container=__SELF__ events= __SELF__.monthEvents(1)[trailDay] dayProp = { class:'dis'} dayPointer=trailDay %}

{# 
************ SHOW CURRENT MONTH DAYS ************
        If dayPointer indicates current
        month. ( Not Past or Previous )
#}
{% else %}

{% partial '@day' Container=__SELF__ events=devents[dayPointer] dayProp = dprops[dayPointer] dayPointer=dayPointer %}

{% endif %}{# ** END - If dayPointer indicates that current month ** #}

{% endfor %}{# ** END - walk through 7 days of week ** #}
        </tr>
{% endif %}
    </tbody>
</table>", "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/week.htm", "");
    }
}
