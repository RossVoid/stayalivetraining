<?php

/* D:\xampp\htdocs\stayalive/plugins/kurtjensen/mycalendar/components/monthevents/default.htm */
class __TwigTemplate_6ea80b46578b7a6e49a831f35a8ffa75a5cee3920136adec481c7a63bc17184c extends Twig_Template
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
        echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\" id=\"EventDetail\">
  </div>
</div>
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("@month"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/monthevents/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\" id=\"EventDetail\">
  </div>
</div>
{% partial \"@month\" %}", "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/monthevents/default.htm", "");
    }
}
