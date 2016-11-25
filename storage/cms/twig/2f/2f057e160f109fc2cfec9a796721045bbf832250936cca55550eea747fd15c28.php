<?php

/* /Users/admin/Documents/5xpert /xcms/themes/xcms/layouts/_default.htm */
class __TwigTemplate_41196b2ca275173370d48acacafd27645d0c5a15aca2558a79635ed08df8daaa extends Twig_Template
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
        <title>5xpert CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"5xpert.com\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"5xpert CMS\">
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/style.css"));
        // line 14
        echo "\">
    </head>
    <body>

        <!-- Header
        Include: Top bar, Search, Banner, Top Menu
       -->
        <header>
            ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("common/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "        </header>
        <!-- End Header -->

        <!-- Slider Section -->
        <div id=\"slider\">
              ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("common/slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "        </div>
        <!-- End Slider Section -->


        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 35
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 36
        echo "        </section>
        <!-- End Content -->

        <!-- Footer -->
        <footer>
            ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("common/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "        </footer>
        <!-- End Footer -->


        <!-- Scripts -->
        <script type=\"text/javascript\" src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/app.js"));
        // line 49
        echo "\"></script>
        ";
        // line 50
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 51
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 52
        echo "        <!-- End Scripts -->

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/admin/Documents/5xpert /xcms/themes/xcms/layouts/_default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  111 => 51,  104 => 50,  101 => 49,  99 => 47,  92 => 42,  88 => 41,  81 => 36,  79 => 35,  71 => 29,  67 => 28,  60 => 23,  56 => 22,  46 => 14,  43 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
        <title>5xpert CMS - {{ this.page.title }}</title>
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"author\" content=\"5xpert.com\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"5xpert CMS\">
        {% styles %}
        <link rel=\"stylesheet\" href=\"{{ [
            'assets/css/style.css'] | theme
        }}\">
    </head>
    <body>

        <!-- Header
        Include: Top bar, Search, Banner, Top Menu
       -->
        <header>
            {% partial 'common/header' %}
        </header>
        <!-- End Header -->

        <!-- Slider Section -->
        <div id=\"slider\">
              {% partial 'common/slider' %}
        </div>
        <!-- End Slider Section -->


        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>
        <!-- End Content -->

        <!-- Footer -->
        <footer>
            {% partial 'common/footer' %}
        </footer>
        <!-- End Footer -->


        <!-- Scripts -->
        <script type=\"text/javascript\" src=\"{{[
          'assets/js/app.js'
        ] | theme }}\"></script>
        {% framework extras %}
        {% scripts %}
        <!-- End Scripts -->

    </body>
</html>", "/Users/admin/Documents/5xpert /xcms/themes/xcms/layouts/_default.htm", "");
    }
}
