<?php

/* C:\wamp\www\ipomi/themes/grill/layouts/agen.htm */
class __TwigTemplate_cf91cfb2bda963f7adefdd8d4cec35c83852b21681ef3bd31a4b42966654027e extends Twig_Template
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
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>STRUK - ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets2/css/bootstrap.css", 1 => "assets2/font-awesome/css/font-awesome.css", 2 => "assets2/css/zabuto_calendar.css", 3 => "assets2/lineicons/style.css", 4 => "assets2/css/style.css", 5 => "assets2/css/style-responsive.css"));
        // line 20
        echo "\" rel=\"stylesheet\">
    
  <link rel=\"stylesheet\" href=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.css\">  
    ";
        // line 23
        $context['__placeholder_head_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('head', $context['__placeholder_head_default_contents']);
        unset($context['__placeholder_head_default_contents']);        // line 24
        echo "
   
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

  <section id=\"container\" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      \t\t\t";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("aheader"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "      
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      \t\t\t";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("aside"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
      \t\t\t";
        // line 57
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 58
        echo "      </section>
      <!--main content end-->
      <!--footer start-->
      \t\t\t";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("afooter"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster 'assets2/js/jquery-1.8.3.min.js',-->
    <script src=\"";
        // line 66
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets2/js/jquery.js", 1 => "assets2/js/bootstrap.min.js", 2 => "assets2/js/jquery.dcjqaccordion.2.7.js", 3 => "assets2/js/jquery.scrollTo.min.js", 4 => "assets2/js/jquery.nicescroll.js"));
        // line 77
        echo "\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
  <script src=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.js\"></script>
   <script src=\"";
        // line 80
        echo $this->env->getExtension('CMS')->themeFilter("assets2/js/common-scripts.js");
        echo "\"></script>
 
\t<!-- 'assets2/js/raphael.min.js',
                      'assets2/js/morris.min.js',<script src=\"";
        // line 83
        echo $this->env->getExtension('CMS')->themeFilter("assets2/js/morris-conf.js");
        echo "\"></script>
\t<script type=\"text/javascript\">
        \$(document).ready(function () {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href=\"http://blacktie.co\" target=\"_blank\" style=\"color:#ffd777\">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
\t</script>
\t-->
\t<script type=\"application/javascript\">
        \$(document).ready(function () {
            \$(\"#date-popover\").popover({html: true, trigger: \"manual\"});
            \$(\"#date-popover\").hide();
            \$(\"#date-popover\").click(function (e) {
                \$(this).hide();
            });
        
           
        });
        
        
        function myNavFunction(id) {
            \$(\"#date-popover\").hide();
            var nav = \$(\"#\" + id).data(\"navigation\");
            var to = \$(\"#\" + id).data(\"to\");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  \t 
    \t";
        // line 125
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 126
        echo "      
      ";
        // line 127
        $context['__placeholder_scripts_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('scripts', $context['__placeholder_scripts_default_contents']);
        unset($context['__placeholder_scripts_default_contents']);        // line 128
        echo "      

  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/layouts/agen.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 128,  175 => 127,  172 => 126,  165 => 125,  120 => 83,  114 => 80,  109 => 77,  107 => 66,  101 => 62,  97 => 61,  92 => 58,  90 => 57,  81 => 50,  77 => 49,  68 => 42,  64 => 41,  45 => 24,  43 => 23,  38 => 20,  36 => 13,  30 => 10,  19 => 1,);
    }
}
