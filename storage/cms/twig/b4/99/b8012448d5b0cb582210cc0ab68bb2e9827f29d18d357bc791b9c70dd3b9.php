<?php

/* C:\wamp\www\ipomi/themes/grill/layouts/default.htm */
class __TwigTemplate_b499b8012448d5b0cb582210cc0ab68bb2e9827f29d18d357bc791b9c70dd3b9 extends Twig_Template
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
<html lang=\"en\">
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
\t
<header>
    ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("top"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</header>

\t";
        // line 15
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 16
        echo "    
<footer>
    <div class=\"container\">
       ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("socials"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "             
    </div>
</footer>
    
<!-- Scripts -->
<script src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery-1.11.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery.gmap3.min.js");
        echo "\"></script>
<script src=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap-datepicker.js");
        echo "\"></script>
<script src=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/dpb-booking.js");
        echo "\"></script>
<script src=\"";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugins.js");
        echo "\"></script>
<script src=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 34
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 35
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 36
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  117 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  68 => 21,  62 => 20,  56 => 19,  51 => 16,  49 => 15,  45 => 13,  40 => 12,  36 => 11,  27 => 4,  23 => 3,  19 => 1,);
    }
}
