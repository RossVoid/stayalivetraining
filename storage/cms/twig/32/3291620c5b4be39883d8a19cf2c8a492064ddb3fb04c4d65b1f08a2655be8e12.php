<?php

/* D:\xampp\htdocs\stayalive/themes/ross_sat/pages/class.htm */
class __TwigTemplate_950b77decf11e1c6700082b38e69eb79347d8ee4614544e1b1f376f7ffd5cdeb extends Twig_Template
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
        $context["record"] = $this->getAttribute(($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = $this->getAttribute(($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = $this->getAttribute(($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
<div class=\"container\">
";
        // line 6
        if (($context["record"] ?? null)) {
            // line 7
            echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            
            <h2><img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["record"] ?? null), "icon", array()), "thumb", array(0 => 50, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "name", array()), "html", null, true);
            echo "</h2><span>Price is ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "price", array()), "html", null, true);
            echo "</span>
            <hr>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
            // line 17
            echo $this->getAttribute(($context["record"] ?? null), "description", array());
            echo "
        </div>
        <div class=\"col-sm-6\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "course_gallery", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 24
                echo "                        ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 25
                    echo "                            <li data-target=\"#myCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                    echo "\" class=\"active\"></li>
                        ";
                } else {
                    // line 27
                    echo "                            <li data-target=\"#myCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                    echo "\"></li>       
                        ";
                }
                // line 29
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </ol> <!-- End of Indicators -->
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "course_gallery", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 34
                echo "                        ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 35
                    echo "                            <div class=\"item active\">
                                <img src=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                    echo "\">
                                <div class=\"carousel-caption\">
                                    <h2>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                    echo "</h2>
                                </div>
                            </div>
                        ";
                } else {
                    // line 42
                    echo "                            <div class=\"item\">
                                <img src=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                    echo "\">
                                <div class=\"carousel-caption\">
                                    <h2>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                    echo "</h2>
                                </div>
                            </div>
                        ";
                }
                // line 49
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </div> <!-- End of Slides -->
                <!-- Left and right controls -->
                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    <span class=\"sr-only\">Next</span>
                </a> <!-- End of Left and right controls -->
            </div>
        </div>
    </div>
";
        } else {
            // line 64
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 66
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/class.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 66,  194 => 64,  178 => 50,  164 => 49,  157 => 45,  150 => 43,  147 => 42,  140 => 38,  133 => 36,  130 => 35,  127 => 34,  110 => 33,  105 => 30,  91 => 29,  85 => 27,  79 => 25,  76 => 24,  59 => 23,  50 => 17,  37 => 11,  31 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

<div class=\"container\">
{% if record %}

    <div class=\"row\">
        <div class=\"col-sm-12\">
            
            <h2><img src=\"{{ record.icon.thumb(50,auto) }}\"> {{ record.name }}</h2><span>Price is {{ record.price }}</span>
            <hr>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            {{ record.description | raw }}
        </div>
        <div class=\"col-sm-6\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    {% for image in record.course_gallery %}
                        {% if loop.first %}
                            <li data-target=\"#myCarousel\" data-slide-to=\"{{ loop.index - 1 }}\" class=\"active\"></li>
                        {% else %}
                            <li data-target=\"#myCarousel\" data-slide-to=\"{{ loop.index - 1 }}\"></li>       
                        {% endif %}
                    {% endfor %}
                </ol> <!-- End of Indicators -->
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    {% for image in record.course_gallery %}
                        {% if loop.first %}
                            <div class=\"item active\">
                                <img src=\"{{ image.path }}\" alt=\"{{ image.title }}\">
                                <div class=\"carousel-caption\">
                                    <h2>{{ image.title }}</h2>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"item\">
                                <img src=\"{{ image.path }}\" alt=\"{{ image.title }}\">
                                <div class=\"carousel-caption\">
                                    <h2>{{ image.title }}</h2>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div> <!-- End of Slides -->
                <!-- Left and right controls -->
                <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    <span class=\"sr-only\">Next</span>
                </a> <!-- End of Left and right controls -->
            </div>
        </div>
    </div>
{% else %}
    {{ notFoundMessage }}
{% endif %}
</div>", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/class.htm", "");
    }
}
