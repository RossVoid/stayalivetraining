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
        echo "<div class=\"container\">
    <h1>Homepage</h1>
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    
    ";
        // line 14
        $context["records"] = $this->getAttribute(($context["builderList"] ?? null), "records", array());
        // line 15
        echo "    ";
        $context["displayColumn"] = $this->getAttribute(($context["builderList"] ?? null), "displayColumn", array());
        // line 16
        echo "    ";
        $context["noRecordsMessage"] = $this->getAttribute(($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 17
        echo "    ";
        $context["detailsPage"] = $this->getAttribute(($context["builderList"] ?? null), "detailsPage", array());
        // line 18
        echo "    ";
        $context["detailsKeyColumn"] = $this->getAttribute(($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 19
        echo "    ";
        $context["detailsUrlParameter"] = $this->getAttribute(($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 20
        echo "

    <div id=\"classes\" class=\"container-fluid text-center\">
        <div class=\"row slideanim\">   
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 25
            echo "                <div class=\"col-sm-4\">
                    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "icon", array()), "thumb", array(0 => 100, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
            echo "\">
                    ";
            // line 27
            ob_start();
            // line 28
            echo "                        ";
            if (($context["detailsPage"] ?? null)) {
                // line 29
                echo "                            <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => $this->getAttribute($context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                        ";
            }
            // line 31
            echo "                            <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "name", array()), "html", null, true);
            echo "</h4>
                        ";
            // line 32
            if (($context["detailsPage"] ?? null)) {
                // line 33
                echo "                            </a>
                        ";
            }
            // line 35
            echo "                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 36
            echo "                    ";
            echo $this->getAttribute($context["record"], "excerpt", array());
            echo "
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                <div class=\"col-sm-4\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            ";
        // line 42
        if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 43
            echo "                <ul class=\"pagination\">
                    ";
            // line 44
            if (($this->getAttribute(($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 45
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
                    ";
            }
            // line 47
            echo "
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                echo "                        <li class=\"";
                echo ((($this->getAttribute(($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                            <a href=\"";
                // line 50
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
            // line 53
            echo "
                    ";
            // line 54
            if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > $this->getAttribute(($context["records"] ?? null), "currentPage", array()))) {
                // line 55
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
                    ";
            }
            // line 57
            echo "                </ul>
            ";
        }
        // line 59
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
        return array (  166 => 59,  162 => 57,  156 => 55,  154 => 54,  151 => 53,  140 => 50,  135 => 49,  131 => 48,  128 => 47,  122 => 45,  120 => 44,  117 => 43,  115 => 42,  112 => 41,  103 => 39,  94 => 36,  91 => 35,  87 => 33,  85 => 32,  80 => 31,  74 => 29,  71 => 28,  69 => 27,  65 => 26,  62 => 25,  57 => 24,  51 => 20,  48 => 19,  45 => 18,  42 => 17,  39 => 16,  36 => 15,  34 => 14,  19 => 1,);
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
    <h1>Homepage</h1>
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    <p>Advantage First Aid Training and Safety, LLC understands and is dedicated to meeting the needs of our clients. As experienced firefighters, paramedics, emergency medical technicians (EMTs) nurses and other professionals, our team of highly qualified instructions can help you prepare for an emergency. Our students gain knowledge and understanding , preparing them for the reality of what they will see and need to do when faced with an emergency, allowing them to apply their skills with confidence.</p>   
    
    {% set records = builderList.records %}
    {% set displayColumn = builderList.displayColumn %}
    {% set noRecordsMessage = builderList.noRecordsMessage %}
    {% set detailsPage = builderList.detailsPage %}
    {% set detailsKeyColumn = builderList.detailsKeyColumn %}
    {% set detailsUrlParameter = builderList.detailsUrlParameter %}


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
