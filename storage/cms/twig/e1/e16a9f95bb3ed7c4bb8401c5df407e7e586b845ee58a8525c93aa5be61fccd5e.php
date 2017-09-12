<?php

/* D:\xampp\htdocs\stayalive/themes/ross_sat/partials/site/header.htm */
class __TwigTemplate_917f110615a5429752aa5b3dd2b4ddd1bf3a42bbe41d4208660a1b3bd82b4d38 extends Twig_Template
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
        echo "<!-- Logo Topper Header -->
    <div class=\"row-fluid hidden-xs topper\">
        <div class=\"col-xs-offset-1 col-xs-7 col-sm-7\">
            <a href=\"/\"><img alt=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "logo", array())), "html", null, true);
        echo "\"  src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "logo", array()));
        echo "\" class=\"img-responsive img-topper\"></a>
        </div>
        <div class=\"col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-0 text-center \">
            <p class=\"topper-phone\">
                <i class=\"fa fa-phone fa-2x\" aria-hidden=\"true\"></i> <a href=\"tel:+";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "business_phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "business_phone", array()), "html", null, true);
        echo "</a>
            </p>
            <p>
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "facebook_url", array()), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i></a>
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "twitter_url", array()), "html", null, true);
        echo "\"><i class=\"fa fa-twitter-square fa-2x\" aria-hidden=\"true\"></i></a>
            </p>
        </div>
    </div> <!-- End Topper -->

    <!-- Nav -->
    <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-autohide\" role=\"navigation\">
        <div class=\"container clearfix\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse navbar-main-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"";
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "homepage")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage");
        echo "\">Home</a></li>
                    <li class=\"";
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "classes")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("classes");
        echo "\">Classes</a></li>
                    <li class=\"";
        // line 32
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "calendar")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("calendar");
        echo "\">Calendar</a></li>
                </ul>
            </div>
        </div>
    </nav> <!-- End Nav -->";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  74 => 31,  66 => 30,  45 => 12,  41 => 11,  33 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Logo Topper Header -->
    <div class=\"row-fluid hidden-xs topper\">
        <div class=\"col-xs-offset-1 col-xs-7 col-sm-7\">
            <a href=\"/\"><img alt=\"{{ this.theme.logo|title }}\"  src=\"{{ this.theme.logo|media }}\" class=\"img-responsive img-topper\"></a>
        </div>
        <div class=\"col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-0 text-center \">
            <p class=\"topper-phone\">
                <i class=\"fa fa-phone fa-2x\" aria-hidden=\"true\"></i> <a href=\"tel:+{{ this.theme.business_phone }}\">{{ this.theme.business_phone }}</a>
            </p>
            <p>
                <a href=\"{{ this.theme.facebook_url }}\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i></a>
                <a href=\"{{ this.theme.twitter_url }}\"><i class=\"fa fa-twitter-square fa-2x\" aria-hidden=\"true\"></i></a>
            </p>
        </div>
    </div> <!-- End Topper -->

    <!-- Nav -->
    <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-autohide\" role=\"navigation\">
        <div class=\"container clearfix\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse navbar-main-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"{% if this.page.id == 'homepage' %}active{% endif %}\"><a href=\"{{ 'homepage'|page }}\">Home</a></li>
                    <li class=\"{% if this.page.id == 'classes' %}active{% endif %}\"><a href=\"{{ 'classes'|page }}\">Classes</a></li>
                    <li class=\"{% if this.page.id == 'calendar' %}active{% endif %}\"><a href=\"{{ 'calendar'|page }}\">Calendar</a></li>
                </ul>
            </div>
        </div>
    </nav> <!-- End Nav -->", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/partials/site/header.htm", "");
    }
}
