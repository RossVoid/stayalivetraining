<?php

/* D:\xampp\htdocs\stayalive/plugins/kurtjensen/mycalendar/components/week/default.htm */
class __TwigTemplate_06283098294612eb3ee395f5c6c0e5bed72543f183742ff39a9dc22acc55daac extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("@week"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/week/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial \"@week\" %}", "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/week/default.htm", "");
    }
}
