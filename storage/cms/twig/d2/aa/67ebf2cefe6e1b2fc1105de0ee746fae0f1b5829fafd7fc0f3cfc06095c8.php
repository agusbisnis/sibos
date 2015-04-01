<?php

/* C:\wamp\www\ipomi/themes/grill/layouts/bucket.htm */
class __TwigTemplate_d2aa67ebf2cefe6e1b2fc1105de0ee746fae0f1b5829fafd7fc0f3cfc06095c8 extends Twig_Template
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
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"ThemeBucket\">
    <link rel=\"shortcut icon\" href=\"images/favicon.png\">
    <title>Ipomi::";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <!--Core CSS -->
    <link href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets3/bs3/css/bootstrap.min.css", 1 => "assets3/js/jquery-ui/jquery-ui-1.10.1.custom.min.css", 2 => "assets3/css/bootstrap-reset.css", 3 => "assets3/font-awesome/css/font-awesome.css", 4 => "assets3/js/jvector-map/jquery-jvectormap-1.2.2.css", 5 => "assets3/css/clndr.css", 6 => "assets3/js/css3clock/css/style.css", 7 => "assets3/js/morris-chart/morris.css", 8 => "assets3/css/style.css", 9 => "assets3/css/style-responsive.css", 10 => "assets3/css/orange-theme.css"));
        // line 23
        echo "\" rel=\"stylesheet\">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/ie8-responsive-file-warning.js");
        echo "\"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets3/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js");
        echo "\"></script>
    <script src=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets3/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js");
        echo "\"></script>
    <![endif]-->
</head>
<body>
<section id=\"container\">
<!--header start-->
<header class=\"header fixed-top clearfix\">
<!--logo start-->
    ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("agennav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "</header>
<!--header end-->
<!--sidebar start-->
<aside>
    ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("agenside"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "</aside>
<!--sidebar end-->
<!--main content start-->
<section id=\"main-content\">
<section class=\"wrapper\">

        ";
        // line 51
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 52
        echo "</section>
</section>
<!--main content end-->
<!--right sidebar start-->
<div class=\"right-sidebar\">
 ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("agenkanan"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "
</div>
<!--right sidebar end-->
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"";
        // line 63
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 64
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/jquery-ui/jquery-ui-1.10.1.custom.min.js");
        echo "\"></script>
<script src=\"";
        // line 65
        echo $this->env->getExtension('CMS')->themeFilter("assets3/bs3/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 66
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/jquery.dcjqaccordion.2.7.js");
        echo "\"></script>
<script src=\"";
        // line 67
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/jquery.scrollTo.min.js");
        echo "\"></script>
<script src=\"";
        // line 68
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js");
        echo "\"></script>
<script src=\"";
        // line 69
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/jquery.nicescroll.js");
        echo "\"></script>
<script src=\"";
        // line 70
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/css3clock/js/css3clock.js");
        echo "\"></script>
<!--common script init for all pages-->
<script src=\"";
        // line 72
        echo $this->env->getExtension('CMS')->themeFilter("assets3/js/scripts.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/layouts/bucket.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  133 => 70,  129 => 69,  125 => 68,  121 => 67,  117 => 66,  113 => 65,  109 => 64,  105 => 63,  98 => 58,  94 => 57,  87 => 52,  85 => 51,  77 => 45,  73 => 44,  67 => 40,  63 => 39,  52 => 31,  48 => 30,  42 => 27,  36 => 23,  34 => 11,  29 => 9,  19 => 1,);
    }
}
