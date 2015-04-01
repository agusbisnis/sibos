<?php

/* C:\wamp\www\ipomi/themes/grill/partials/aheader.htm */
class __TwigTemplate_d9d9ff1086af7a84fed92b5456bffbd352fa660a6fd69913e1447022383e46fc extends Twig_Template
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
        echo "<header class=\"header black-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Menu\"></div>
              </div>
            <!--logo start-->
            <a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("mobile/home");
        echo "\" class=\"logo\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo-ipomi.png");
        echo "\"></div></a>
            <!--logo end-->
            
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/partials/aheader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
