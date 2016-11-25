<?php

/* /Users/admin/Documents/5xpert /xcms/themes/xcms/pages/home.htm */
class __TwigTemplate_9b66213bb17ec6da721c8f88d6b37ff0895597aaf4c5d95fbf7d288d115acd3c extends Twig_Template
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
        echo "This is home page";
    }

    public function getTemplateName()
    {
        return "/Users/admin/Documents/5xpert /xcms/themes/xcms/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("This is home page", "/Users/admin/Documents/5xpert /xcms/themes/xcms/pages/home.htm", "");
    }
}
