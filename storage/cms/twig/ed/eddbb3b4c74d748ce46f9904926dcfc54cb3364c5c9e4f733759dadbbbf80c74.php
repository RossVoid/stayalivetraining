<?php

/* D:\xampp\htdocs\stayalive/themes/ross_sat/pages/classes.htm */
class __TwigTemplate_8e81cb01aec79fb95ac09f1dd2dd11a119fa5dd7e8eebd84198b8beba67dc3e4 extends Twig_Template
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
    <h1>Classes</h1>
";
        // line 3
        $context["records"] = $this->getAttribute(($context["builderList"] ?? null), "records", array());
        // line 4
        $context["displayColumn"] = $this->getAttribute(($context["builderList"] ?? null), "displayColumn", array());
        // line 5
        $context["noRecordsMessage"] = $this->getAttribute(($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 6
        $context["detailsPage"] = $this->getAttribute(($context["builderList"] ?? null), "detailsPage", array());
        // line 7
        $context["detailsKeyColumn"] = $this->getAttribute(($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 8
        $context["detailsUrlParameter"] = $this->getAttribute(($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 9
        echo "
<ul class=\"record-list\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 12
            echo "        <li>
            ";
            // line 14
            echo "            <h3>
            ";
            // line 15
            ob_start();
            // line 16
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 17
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => $this->getAttribute($context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 19
            echo "
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "name", array()), "html", null, true);
            echo "
                

                ";
            // line 23
            if (($context["detailsPage"] ?? null)) {
                // line 24
                echo "                    </a>
                ";
            }
            // line 26
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 27
            echo "            </h3>

            ";
            // line 29
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["record"], "description", array()), 150));
            echo "
            Price is ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "price", array()), "html", null, true);
            echo "
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</ul>

";
        // line 37
        if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 38
            echo "    <ul class=\"pagination\">
        ";
            // line 39
            if (($this->getAttribute(($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 40
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "            <li class=\"";
                echo ((($this->getAttribute(($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 45
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
        ";
            // line 49
            if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > $this->getAttribute(($context["records"] ?? null), "currentPage", array()))) {
                // line 50
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 52
            echo "    </ul>
";
        }
        // line 54
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/classes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 54,  155 => 52,  149 => 50,  147 => 49,  144 => 48,  133 => 45,  128 => 44,  124 => 43,  121 => 42,  115 => 40,  113 => 39,  110 => 38,  108 => 37,  104 => 35,  95 => 33,  87 => 30,  83 => 29,  79 => 27,  76 => 26,  72 => 24,  70 => 23,  64 => 20,  61 => 19,  55 => 17,  52 => 16,  50 => 15,  47 => 14,  44 => 12,  39 => 11,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
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
    <h1>Classes</h1>
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            <h3>
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ record.name }}
                

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
            </h3>

            {{ html_limit(record.description, 150) | raw}}
            Price is {{ record.price }}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
</div>", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/classes.htm", "");
    }
}
