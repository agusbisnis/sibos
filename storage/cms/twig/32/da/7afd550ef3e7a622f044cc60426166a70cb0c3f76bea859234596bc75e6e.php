<?php

/* C:\wamp\www\ipomi/themes/grill/pages/home.htm */
class __TwigTemplate_32da7afd550ef3e7a622f044cc60426166a70cb0c3f76bea859234596bc75e6e extends Twig_Template
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
        echo "<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-8\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                       
                        <li><img src=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider-bg.jpg");
        echo "\" alt=\"\" />
                        </li>
                        <li><img src=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ss.jpg");
        echo "\" alt=\"\" />
                        </li>
                    </ul>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4 pt\">
                        <img src=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/playstore.jpg");
        echo "\" alt=\"\" />
                    </div>
                    <div class=\"col-sm-4 pt\">
                        <img src=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/appstore.png");
        echo "\" alt=\"\" />
                    </div>
                    <div class=\"col-sm-4 pt\">
                        <img src=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/windowstore.jpg");
        echo "\" alt=\"\" />
                    </div>
                </div>
            </div>

             <div class=\"col-sm-4\">
                
                <div class=\"register-form\">
                
                <h3 align=\"center\"><img src=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon-seat.png");
        echo "\" alt=\"\" ><em>Info Jadwal & Reservasi </em></h3>
                 
                 <form action=\"";
        // line 35
        echo $this->env->getExtension('CMS')->pageFilter("web/hasil");
        echo "\">
                         <div class=\"form-group\">
                            
                           <img src=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon-schedule-24-dark.png");
        echo "\" alt=\"\" />    Tanggal
                          
                                <input name=\"pergi\" type=\"text\" id=\"userBookingArrival\" data-date=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" data-date-format=\"dd-mm-yyyy\" class=\"form-control transparan\">
                                
                       
                    </div>
                            
                                
                               
                            <div class=\"form-group\">
                            
                           <img src=\"";
        // line 49
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/bus-dari.png");
        echo "\" alt=\"\" />   Kota Asal
                          <select class=\"form-control transparan\" name=\"dari\">
                            ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kotas"]) ? $context["kotas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 52
            echo "                                                   <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "nama", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                          </select>
                    </div>

                            <div class=\"form-group\">
                            
                           <img src=\"";
        // line 60
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/bus-menuju.png");
        echo "\" alt=\"\" />   Kota Tujuan
                           <select class=\"form-control transparan\" name=\"ke\">
                            ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kotas"]) ? $context["kotas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 63
            echo "                                                   <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "nama", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                          </select>
                    </div>

                    
                             <div class=\"form-group\">
                            
                                <img src=\"";
        // line 72
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icon-toilet-24-dark.png");
        echo "\" alt=\"\" />    Penumpang
                                

                               
              
              <select class=\"form-control transparan\" name=\"jmlpenumpang\">
              
              <option>0</option><option selected=\"selected\">1</option><option>2</option><option>3</option><option>4</option></select>
              
                            </div>
                        

                        <div class=\"form-group send\">
                            <button type=\"submit\" class=\"btn btn-block\">Cari</button>
                       </div>
                       <div class=\"form-group send\">
                            <a href=\"";
        // line 88
        echo $this->env->getExtension('CMS')->pageFilter("web/cekbook");
        echo " \" class=\"button btn btn-block\">Cek Booking</a>
                       </div>

                        <div class=\"additional-links\">
                    Silahkan pelajari <a href=\"#\">Cara Pesan</a> atau <a href=\"#\">Kontak Kami</a>
                </div>
                    </form>
                </div>
                
            </div>

        </div>
    </div>
</section>

<div id=\"services\">
    ";
        // line 104
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 105
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 105,  191 => 104,  172 => 88,  153 => 72,  144 => 65,  133 => 63,  129 => 62,  124 => 60,  116 => 54,  105 => 52,  101 => 51,  96 => 49,  84 => 40,  79 => 38,  73 => 35,  68 => 33,  56 => 24,  50 => 21,  44 => 18,  34 => 11,  29 => 9,  19 => 1,);
    }
}
