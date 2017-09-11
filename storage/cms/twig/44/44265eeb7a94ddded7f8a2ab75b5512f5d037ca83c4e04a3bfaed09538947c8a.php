<?php

/* D:\xampp\htdocs\stayalive/plugins/kurtjensen/mycalendar/components/partials/details.htm */
class __TwigTemplate_07653315e3e14a9c4d1273a9e989e5eba3fd2ae7618ffe13aa26651e39008df5 extends Twig_Template
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
        echo "      <div class=\"modal-content\">
          <div class=\"modal-header";
        // line 2
        if (($context["context"] ?? null)) {
            echo " modal-header-";
            echo twig_escape_filter($this->env, ($context["context"] ?? null), "html", null, true);
        }
        echo "\"> 
              <a type=\"button\" class=\"close btn btn-default\" data-dismiss=\"modal\">&times;</a>
              <h4 class=\"modal-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ev"] ?? null), "name", array()), "html", null, true);
        echo "</h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ev"] ?? null), "date", array()), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["ev"] ?? null), "time", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ev"] ?? null), "time", array()), "html", null, true);
        }
        // line 5
        echo "          </div>
          <div class=\"modal-body\">
            ";
        // line 7
        echo $this->getAttribute(($context["ev"] ?? null), "text", array());
        echo "
          </div>
          <div class=\"modal-footer\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ev"] ?? null), "cats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 11
            echo "              <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
            echo "</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  <br />
";
        // line 13
        if (($context["occs"] ?? null)) {
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["occs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["occ"]) {
                // line 15
                echo "              <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, $context["occ"], "html", null, true);
                echo "</span>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  <br />
";
        }
        // line 18
        if ($this->getAttribute(($context["ev"] ?? null), "owner_name", array())) {
            echo "<small>Owner: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ev"] ?? null), "owner_name", array()), "html", null, true);
            echo "</small>";
        }
        // line 19
        echo "          </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  84 => 18,  80 => 16,  71 => 15,  67 => 14,  65 => 13,  62 => 12,  53 => 11,  49 => 10,  43 => 7,  39 => 5,  30 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("      <div class=\"modal-content\">
          <div class=\"modal-header{% if context %} modal-header-{{ context }}{% endif %}\"> 
              <a type=\"button\" class=\"close btn btn-default\" data-dismiss=\"modal\">&times;</a>
              <h4 class=\"modal-title\">{{ ev.name }}</h4>{{ ev.date }} {% if ev.time %} {{ ev.time }}{% endif %}
          </div>
          <div class=\"modal-body\">
            {{ ev.text|raw }}
          </div>
          <div class=\"modal-footer\">
{% for cat in ev.cats %}
              <span class=\"label label-info\">{{cat}}</span>
{% endfor %}  <br />
{% if occs %}
{% for occ in occs %}
              <span class=\"label label-default\">{{occ}}</span>
{% endfor %}  <br />
{% endif %}
{% if ev.owner_name %}<small>Owner: {{ ev.owner_name }}</small>{% endif %}
          </div>
      </div>", "D:\\xampp\\htdocs\\stayalive/plugins/kurtjensen/mycalendar/components/partials/details.htm", "");
    }
}
