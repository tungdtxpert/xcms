<?php

/* /Users/admin/Documents/5xpert /xcms/themes/xcms/partials/common/header.htm */
class __TwigTemplate_451911ea85f3b89d5b988d48500ef581aecfea873f6f5523da54afefbf18f8ed extends Twig_Template
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
        echo "<div class=\"top-menu\">
  <ul>
    <li>Top bar</li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/admin/Documents/5xpert /xcms/themes/xcms/partials/common/header.htm";
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
        return new Twig_Source("<div class=\"top-menu\">
  <ul>
    <li>Top bar</li>
  </ul>
</div>", "/Users/admin/Documents/5xpert /xcms/themes/xcms/partials/common/header.htm", "");
    }
}
