<?php

/* D:\xampp\htdocs\stayalive/themes/ross_sat/pages/calendar.htm */
class __TwigTemplate_0d7334e1f55e377a63b23ff9dba019a73eb246697b293995c5037efa86def94b extends Twig_Template
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
        echo "<div class=\"container\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("MonthEvents"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("EvList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("WeekEvents"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/calendar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    {% component 'MonthEvents' %}
    {% component 'EvList' %}
    {% component 'WeekEvents' %}
</div>", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/calendar.htm", "");
    }
}
