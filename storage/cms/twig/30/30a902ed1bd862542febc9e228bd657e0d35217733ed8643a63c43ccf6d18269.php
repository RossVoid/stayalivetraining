<?php

/* D:\xampp\htdocs\stayalive/themes/ross_sat/partials/site/footer.htm */
class __TwigTemplate_b0a89c2c8c46b395e67aa9096ce9812cc94ca39fab925ea49f2577344c9eb1e3 extends Twig_Template
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
        echo "<hr />
<div id=\"footer\">
    <div class=\"container\">
        <div class=\"col-sm-4\">
            <div class=\"row\">   
                <a href=\"/\"><img alt=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "logo_footer", array())), "html", null, true);
        echo "\"  src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->mediaFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "logo_footer", array()));
        echo "\" class=\"img-responsive\"></a>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <i class=\"fa fa-map-marker fa-2x\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"col-sm-10\">
                    ";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "business_address", array());
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"col-sm-10\">
                    <p>Phone: <a href=\"tel:+";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "business_phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "business_phone", array()), "html", null, true);
        echo "</a></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <i class=\"fa fa-fax\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"col-sm-10\">
                    <p>Fax: <a href=\"fax:+";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "business_fax", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "business_fax", array()), "html", null, true);
        echo "</a></p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
             <div class=\"row\">
                 <h4>About Us</h4>
                 <hr>
                ";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "footer_about", array());
        echo "
             </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <h4>Navigate</h4>
                <hr>
                <ul class=\"footer-navigate\">
                    <li>
                        <a href=\"/\">Home</a>
                    </li>
                    <li>
                        <a href=\"/classes\">Classes</a>
                    </li>
                </ul>
             </div>
        </div>
    </div>
</div>
<div class=\"webmaster-bar\">
    <p>Any issues with this site please report to <a href=\"mailto:mross71690@gmail.com\">Rossvoid</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  62 => 29,  49 => 21,  38 => 13,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr />
<div id=\"footer\">
    <div class=\"container\">
        <div class=\"col-sm-4\">
            <div class=\"row\">   
                <a href=\"/\"><img alt=\"{{ this.theme.logo_footer|title }}\"  src=\"{{ this.theme.logo_footer|media }}\" class=\"img-responsive\"></a>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <i class=\"fa fa-map-marker fa-2x\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"col-sm-10\">
                    {{ this.theme.business_address|raw }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"col-sm-10\">
                    <p>Phone: <a href=\"tel:+{{ this.theme.business_phone }}\">{{ this.theme.business_phone }}</a></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <i class=\"fa fa-fax\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"col-sm-10\">
                    <p>Fax: <a href=\"fax:+{{ this.theme.business_fax }}\">{{ this.theme.business_fax }}</a></p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
             <div class=\"row\">
                 <h4>About Us</h4>
                 <hr>
                {{ this.theme.footer_about|raw }}
             </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <h4>Navigate</h4>
                <hr>
                <ul class=\"footer-navigate\">
                    <li>
                        <a href=\"/\">Home</a>
                    </li>
                    <li>
                        <a href=\"/classes\">Classes</a>
                    </li>
                </ul>
             </div>
        </div>
    </div>
</div>
<div class=\"webmaster-bar\">
    <p>Any issues with this site please report to <a href=\"mailto:mross71690@gmail.com\">Rossvoid</a></p>
</div>", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/partials/site/footer.htm", "");
    }
}
