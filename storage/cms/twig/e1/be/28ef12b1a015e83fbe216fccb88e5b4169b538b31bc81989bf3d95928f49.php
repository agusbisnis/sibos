<?php

/* C:\wamp\www\ipomi/themes/grill/pages/mobile/pesan.htm */
class __TwigTemplate_e1be28ef12b1a015e83fbe216fccb88e5b4169b538b31bc81989bf3d95928f49 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('head'        );
        // line 2
        echo "
     <link href=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets2/css/style-responsive.css", 1 => "assets2/css/table-responsive.css"));
        // line 4
        echo "\" rel=\"stylesheet\">

";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 7
        echo "


<section class=\"struk-page wrapper back-ipomi\" id=\"sub-content\">
        <h3>Pesan Tiket
    <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-seat-side-32-dark.png");
        echo "\" class=\"pull-right\">
</h3>
<hr />

        <div class=\"row mt\">
              <div class=\"col-lg-12\">


            <!-- panel -->

            <form class=\"form-horizontal style-form\" action=\"";
        // line 22
        echo $this->env->getExtension('CMS')->pageFilter("mobile/hasil");
        echo "\">
             
         
  
                  <label>Dari</label>
             <span class=\"input-group\">
               <span class=\"input-group-addon transparan\"><img src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/bus-dari.png");
        echo "\" class=\"pull-right\"></span>
              <select class=\"form-control transparan\" name=\"dari\">
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kotas"]) ? $context["kotas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 31
            echo "                                       <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "nama", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
              </select>
              </span>
              
              <!--<select class=\"form-control\">
                <option>Terminal Pulogadung</option><option>Alfamart Pantura1</option><option>Indomaret Marco</option></select> -->
              <label>Menuju</label>
              <span class=\"input-group\">
              <span class=\"input-group-addon transparan\"><img src=\"";
        // line 41
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/bus-menuju.png");
        echo "\" class=\"pull-right\"></span>
                        <select class=\"form-control transparan\" name=\"ke\">
                            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kotas"]) ? $context["kotas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 44
            echo "                                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "nama", array()), "html", null, true);
            echo "</option>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                      </select>
              </span>
             
    
            
            <label>Tanggal Berangkat</label>
            <span class=\"input-group\">
                          
                                <input name=\"pergi\" type=\"text\" id=\"userBookingArrival\" data-date=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" data-date-format=\"dd-mm-yyyy\" class=\"form-control transparan\">
                                <span class=\"input-group-addon transparan\"><a ng-click=\"open(\$event)\"><img src=\"";
        // line 55
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/tgl.png");
        echo "\" class=\"pull-right\"></a></span>
                          
                            
                        </span>  
            
            
                      
           


            <label>Jumlah Penumpang</label>
            <p class=\"input-group\">
              <span class=\"input-group-addon transparan\"><a ng-click=\"open(\$event)\"><img src=\"";
        // line 67
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/kid.png");
        echo "\" class=\"pull-right\"></a></span>
              <select class=\"form-control transparan\" name=\"jmlpenumpang\">
              
              <option>0</option><option selected=\"selected\">1</option><option>2</option><option>3</option><option>4</option></select>
              </p>
    
         <span>
          <button class=\"btn btn-warning btn-lg btn-block putih\" type=\"submit\"> <i class=\"fa fa-search pull-left\"></i><strong>Pesan Tiket</strong></button>
          </span>
</form>
</div>
</div>
    
      </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/mobile/pesan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 67,  125 => 55,  121 => 54,  111 => 46,  100 => 44,  96 => 43,  91 => 41,  81 => 33,  70 => 31,  66 => 30,  61 => 28,  52 => 22,  39 => 12,  32 => 7,  30 => 1,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
