<?php

/* D:\xampp\htdocs\stayalive/themes/ross_sat/pages/homepage.htm */
class __TwigTemplate_a52d2e5de59ecb5ca8b0145cc89ce1ec5e0a95cee3deca4a7c38c1fe5f5710a4 extends Twig_Template
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
        echo "<div class=\"jumbotron\" style=\"background: url(";
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "jumbotron_background", array()));
        echo "); background-size: cover; background-repeat: no-repeat;\">
  <div class=\"container\">
    ";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "jumbotron_content", array());
        echo "
  </div>
</div>
    

    
    ";
        // line 9
        $context["records"] = $this->getAttribute(($context["builderList"] ?? null), "records", array());
        // line 10
        echo "    ";
        $context["displayColumn"] = $this->getAttribute(($context["builderList"] ?? null), "displayColumn", array());
        // line 11
        echo "    ";
        $context["noRecordsMessage"] = $this->getAttribute(($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 12
        echo "    ";
        $context["detailsPage"] = $this->getAttribute(($context["builderList"] ?? null), "detailsPage", array());
        // line 13
        echo "    ";
        $context["detailsKeyColumn"] = $this->getAttribute(($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 14
        echo "    ";
        $context["detailsUrlParameter"] = $this->getAttribute(($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 15
        echo "
<div class=\"container\">
    <div id=\"classes\" class=\"container-fluid text-center\">
        <div class=\"row slideanim\">   
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 20
            echo "                <div class=\"col-sm-4\">
                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "icon", array()), "thumb", array(0 => 100, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
            echo "\">
                    ";
            // line 22
            ob_start();
            // line 23
            echo "                        ";
            if (($context["detailsPage"] ?? null)) {
                // line 24
                echo "                            <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => $this->getAttribute($context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                        ";
            }
            // line 26
            echo "                            <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "name", array()), "html", null, true);
            echo "</h4>
                        ";
            // line 27
            if (($context["detailsPage"] ?? null)) {
                // line 28
                echo "                            </a>
                        ";
            }
            // line 30
            echo "                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 31
            echo "                    ";
            echo $this->getAttribute($context["record"], "excerpt", array());
            echo "
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <div class=\"col-sm-4\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
            ";
        // line 37
        if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 38
            echo "                <ul class=\"pagination\">
                    ";
            // line 39
            if (($this->getAttribute(($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 40
                echo "                        <li><a href=\"";
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
                echo "                        <li class=\"";
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
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
                    ";
            }
            // line 52
            echo "                </ul>
            ";
        }
        // line 54
        echo "        </div>
    </div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 54,  162 => 52,  156 => 50,  154 => 49,  151 => 48,  140 => 45,  135 => 44,  131 => 43,  128 => 42,  122 => 40,  120 => 39,  117 => 38,  115 => 37,  112 => 36,  103 => 34,  94 => 31,  91 => 30,  87 => 28,  85 => 27,  80 => 26,  74 => 24,  71 => 23,  69 => 22,  65 => 21,  62 => 20,  57 => 19,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  34 => 9,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\" style=\"background: url({{ this.theme.jumbotron_background|media }}); background-size: cover; background-repeat: no-repeat;\">
  <div class=\"container\">
    {{ this.theme.jumbotron_content|raw }}
  </div>
</div>
    

    
    {% set records = builderList.records %}
    {% set displayColumn = builderList.displayColumn %}
    {% set noRecordsMessage = builderList.noRecordsMessage %}
    {% set detailsPage = builderList.detailsPage %}
    {% set detailsKeyColumn = builderList.detailsKeyColumn %}
    {% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"container\">
    <div id=\"classes\" class=\"container-fluid text-center\">
        <div class=\"row slideanim\">   
            {% for record in records %}
                <div class=\"col-sm-4\">
                    <img src=\"{{ record.icon.thumb(100,auto) }}\">
                    {% spaceless %}
                        {% if detailsPage %}
                            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                        {% endif %}
                            <h4>{{ record.name }}</h4>
                        {% if detailsPage %}
                            </a>
                        {% endif %}
                    {% endspaceless %}
                    {{ record.excerpt | raw }}
                </div>
            {% else %}
                <div class=\"col-sm-4\">{{ noRecordsMessage }}</div>
            {% endfor %}

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
        </div>
    </div>
    
</div>", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/homepage.htm", "");
    }
}
