<?php

/* D:\xampp\htdocs\stayalive/themes/ross_sat/layouts/default.htm */
class __TwigTemplate_65b4ec61ff548fd345c1d28a4fc8dcc7a640ef9a42af0ab2c910a34ebcf98dbf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "- ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Michael Ross\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/dist/css/style.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 24
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 25
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/dist/js/app.js");
        echo "\"></script>
        ";
        // line 34
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 35
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 36
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  98 => 35,  91 => 34,  87 => 33,  82 => 30,  78 => 29,  72 => 25,  70 => 24,  64 => 20,  60 => 19,  53 => 14,  50 => 13,  46 => 12,  42 => 11,  35 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.theme.site_name }}- {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Michael Ross\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/dist/css/style.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/dist/js/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "D:\\xampp\\htdocs\\stayalive/themes/ross_sat/layouts/default.htm", "");
    }
}
