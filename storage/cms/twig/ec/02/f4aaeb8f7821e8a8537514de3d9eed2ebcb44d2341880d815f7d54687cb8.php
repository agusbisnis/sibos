<?php

/* C:\wamp\www\ipomi/themes/grill/partials/top.htm */
class __TwigTemplate_ec02f4aaeb8f7821e8a8537514de3d9eed2ebcb44d2341880d815f7d54687cb8 extends Twig_Template
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
        echo "<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    
                    <a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo-ipomi.png");
        echo "\" title=\"Ipomi\" alt=\"Ipomi\" ></a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-phone\"></i>
                    <a href=\"#\">Hotline :</a> (021) 123456 
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
