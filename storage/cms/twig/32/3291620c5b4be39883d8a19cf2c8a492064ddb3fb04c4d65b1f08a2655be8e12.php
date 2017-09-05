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
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "name", array()), "html", null, true);
            echo "</h2><span>Price is ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "price", array()), "html", null, true);
            echo "</span>
    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["record"] ?? null), "icon", array()), "thumb", array(0 => 200, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
            echo "\"> 
    ";
            // line 9
            echo $this->getAttribute(($context["record"] ?? null), "description", array());
            echo "

    <h3>Gallery</h3>

    <ul class=\"gallery clearfix\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "course_gallery", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 15
                echo "            <li>
            <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "thumb", array(0 => 200, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
                echo "\"> 
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ul>

    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            ";
            // line 24
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
                // line 25
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 26
                    echo "            <li data-target=\"#myCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"active\"></li>
            ";
                } else {
                    // line 28
                    echo "            <li data-target=\"#myCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\"></li>       
            ";
                }
                // line 30
                echo "            ";
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
            // line 31
            echo "        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">  <img src=\"\"> 
            ";
            // line 35
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
                // line 36
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 37
                    echo "                <div class=\"item active\">
                    <img src=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                    echo "\">
                </div>
            ";
                } else {
                    // line 41
                    echo "                <div class=\"item\">
                    <img src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                    echo "\">
                </div>
            ";
                }
                // line 45
                echo "            ";
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
            // line 46
            echo "        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    

";
        } else {
            // line 61
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 63
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
        return array (  204 => 63,  198 => 61,  181 => 46,  167 => 45,  159 => 42,  156 => 41,  148 => 38,  145 => 37,  142 => 36,  125 => 35,  119 => 31,  105 => 30,  99 => 28,  93 => 26,  90 => 25,  73 => 24,  66 => 19,  57 => 16,  54 => 15,  50 => 14,  42 => 9,  38 => 8,  31 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
    <h2>{{ record.name }}</h2><span>Price is {{ record.price }}</span>
    <img src=\"{{ record.icon.thumb(200,auto) }}\"> 
    {{ record.description | raw }}

    <h3>Gallery</h3>

    <ul class=\"gallery clearfix\">
        {% for image in record.course_gallery %}
            <li>
            <img src=\"{{ image.thumb(200,auto) }}\"> 
            </li>
        {% endfor %}
    </ul>

    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            {% for image in record.course_gallery %}
            {% if loop.first %}
            <li data-target=\"#myCarousel\" data-slide-to=\"{{ loop.index }}\" class=\"active\"></li>
            {% else %}
            <li data-target=\"#myCarousel\" data-slide-to=\"{{ loop.index }}\"></li>       
            {% endif %}
            {% endfor %}
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">  <img src=\"\"> 
            {% for image in record.course_gallery %}
            {% if loop.first %}
                <div class=\"item active\">
                    <img src=\"{{ image.path }}\" alt=\"{{ image.title }}\">
                </div>
            {% else %}
                <div class=\"item\">
                    <img src=\"{{ image.path }}\" alt=\"{{ image.title }}\">
                </div>
            {% endif %}
            {% endfor %}
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    

{% else %}
    {{ notFoundMessage }}
{% endif %}
</div>", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/pages/class.htm", "");
    }
}
