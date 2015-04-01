<?php

/* C:\wamp\www\ipomi/themes/grill/pages/agen.htm */
class __TwigTemplate_1f2ba7470ec3702162238600e3f7428cba3c08cecfe6be422189861b6d89bcd2 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 2
        echo "<script>
jQuery(document).ready(function(\$){
    \$(document).on('ajaxFail', '#entranceForm', function() {
        var errorMsg = \$('#entranceForm').data('error-message')

        if (errorMsg == 'A user was found to match all plain text credentials however hashed credential [password] did not match.')
            errorMsg = 'Detail salah <a href=\"#\">Lupa kata sandi?</a>';

        \$('#entranceError').show().html(errorMsg)
    })
})
</script>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 15
        echo "<html class=\"no-js\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>IPOMI</title>
\t<meta name=\"description\" content=\"Learn how to recreate the preloader from Cantina Negrar. Tutorial for a passionate front-end web developers by Petr Tichy.\">

\t<!--iOS -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">


\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets2/css/normalize.css");
        echo "\" >
\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets2/css/main.css");
        echo "\" >
\t<script src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js");
        echo "\"></script>

\t<link href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets2/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
    
    <link href=\"";
        // line 34
        echo $this->env->getExtension('CMS')->themeFilter("assets2/font-awesome/css/font-awesome.css");
        echo "\" rel=\"stylesheet\" />
        
    
    <link href=\"";
        // line 37
        echo $this->env->getExtension('CMS')->themeFilter("assets2/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter("assets2/css/style-responsive.css");
        echo "\" rel=\"stylesheet\">
\t
</head>
<body class=\"demo oranye\">
<!--[if lt IE 7]>
<p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

\t<!-- Demo content -->\t\t\t
\t<div id=\"demo-content\">

\t\t

\t\t<div id=\"loader-wrapper\">
\t\t\t<div id=\"loader\"></div>

\t\t\t<div class=\"loader-section section-left\"></div>
            <div class=\"loader-section section-right\"></div>

\t\t</div>

\t\t<div id=\"content\" >
\t\t<div class=\"tengah-login\">
\t\t<img src=\"";
        // line 61
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logoipomidark.png");
        echo "\"></div>
       
         <div id=\"entranceError\" class=\"alert alert-danger lead\" style=\"display: none\"></div>
\t\t\t<form
                            id=\"entranceForm\"
                            class=\"form-login\"
                            data-request-error=\"return true\"
                            data-request=\"onEnter\" >

\t\t        <h2 class=\"form-login-heading\">SELAMAT DATANG</h2>
\t\t        <div class=\"login-wrap\">
\t\t            
                            <div class=\"form-group\">
                                <input
                                    name=\"username\"
                                    type=\"text\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Username\"
                                    id=\"inputUsername\" />
                                <label class=\"signin-field-icon fui-mail\" for=\"signin-username\"></label>
                            </div>
                            <div class=\"form-group\">
                                <input
                                    name=\"password\"
                                    type=\"password\"
                                    class=\"form-control signin-field\"
                                    value=\"\"
                                    placeholder=\"Password\"
                                    id=\"inputPassword\" />
                                <label class=\"signin-field-icon fui-user\" for=\"signin-name\"></label>
                            </div>

                             ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 94
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 95
            echo "            <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
        ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 97
        echo "
                            

                            <button class=\"btn btn-theme btn-lg btn-block\" type=\"submit\">Masuk</button>
\t\t            
\t\t            <label class=\"checkbox\">
\t\t            \t<span class=\"pull-left\">
\t\t            \t<a class=\"\" href=\"";
        // line 104
        echo $this->env->getExtension('CMS')->pageFilter("agen/home");
        echo "\">
\t\t                    Daftar
\t\t                </a>
\t\t                </span>
\t\t                <span class=\"pull-right\">
\t\t                    <a data-toggle=\"modal\" href=\"";
        // line 109
        echo $this->env->getExtension('CMS')->pageFilter("register");
        echo " \"> Lupa Password?</a>
\t\t
\t\t                </span>
\t\t            </label>
\t\t            
\t\t
\t\t        </div>
\t\t
\t\t          
\t\t
\t\t      </form>
\t\t</div>

\t</div>
\t<!-- /Demo content -->

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
\t<script>window.jQuery || document.write('<script src=\"";
        // line 126
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery-1.11.0.min.js");
        echo "\"><\\/script>')</script>
\t<script src=\"";
        // line 127
        echo $this->env->getExtension('CMS')->themeFilter("assets2/js/bootstrap.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 128
        echo $this->env->getExtension('CMS')->themeFilter("assets2/js/main.js");
        echo "\"></script>
\t<!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type=\"text/javascript\" src=\"";
        // line 131
        echo $this->env->getExtension('CMS')->themeFilter("assets2/js/jquery.backstretch.min.js");
        echo "\"></script>
    <script>
        \$.backstretch(\"";
        // line 133
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/bg-image-color.png");
        echo "\", {speed: 500});
    </script>
    ";
        // line 135
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 136
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 137
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/agen.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 137,  218 => 136,  211 => 135,  206 => 133,  201 => 131,  195 => 128,  191 => 127,  187 => 126,  167 => 109,  159 => 104,  150 => 97,  144 => 95,  142 => 94,  106 => 61,  80 => 38,  76 => 37,  70 => 34,  65 => 32,  60 => 30,  56 => 29,  52 => 28,  37 => 15,  35 => 1,  21 => 2,  19 => 1,);
    }
}
