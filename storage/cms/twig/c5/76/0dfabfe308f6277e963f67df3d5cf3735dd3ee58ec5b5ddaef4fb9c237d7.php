<?php

/* C:\wamp\www\ipomi/themes/grill/pages/web/hasil.htm */
class __TwigTemplate_c5760dfabfe308f6277e963f67df3d5cf3735dd3ee58ec5b5ddaef4fb9c237d7 extends Twig_Template
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


<section class=\"home-title\">
<div class=\"container\">
        <h3>Pilih Bus
    <img src=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-bus-mirror-32-dark.png");
        echo "\" class=\"pull-right\">
</h3>
<hr />
<span><div class=\"alert alert-warning\"><b>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asal"]) ? $context["asal"] : null), "nama", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tujuan"]) ? $context["tujuan"] : null), "nama", array()), "html", null, true);
        echo "</b><div class=\"pull-right\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["tgl"]) ? $context["tgl"] : null), "d-M-Y"), "html", null, true);
        echo "</div></div>

      </span>
        <div class=\"row mt\">
              <div class=\"col-lg-12\">
                      
              
                          <div id=\"no-more-tables\">
                              <table class=\"table table-bordered table-striped table-condensed cf transparan\">
                                  <thead class=\"cf\">
                                  <tr>
                                      <th>Nama PO</th>
                                      <th>No Armada</th>
                                      <th>Datang</th>
                                      <th>Tiba</th>
                                      <th>Tersedia</th>
                                      <th class=\"numeric\">Harga</th>
                                      <th>Pesan</th>
                                      
                                  </tr>
                                  </thead>
                                  <tbody>
                                   
                                  ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trayeks"]) ? $context["trayeks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 40
            echo "                                  <form class=\"form-horizontal style-form\" action=\"";
            echo $this->env->getExtension('CMS')->pageFilter("web/pilihagen");
            echo "\">
                                  <input type=\"hidden\" name=\"trayek\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\" />
                                  <input type=\"hidden\" name=\"jmlpenumpang\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["jmlpenumpang"]) ? $context["jmlpenumpang"] : null), "html", null, true);
            echo "\" />
                                  <tr>
                                  
                                      <td data-title=\"Nama PO\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["t"], "bus", array()), "po", array()), "nama", array()), "html", null, true);
            echo "</td>
                                      <td data-title=\"No Armada\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "bus", array()), "nama", array()), "html", null, true);
            echo "</td>
                                      <td data-title=\"Datang\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "jamdatang", array()), "H:i"), "html", null, true);
            echo "</td>
                                      <td data-title=\"Tiba\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "jamtiba", array()), "H:i"), "html", null, true);
            echo "</td>
                                      <td data-title=\"Tersedia\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "bus", array()), "jmlseat", array()), "html", null, true);
            echo "</td>
                                      <td data-title=\"Harga\" class=\"numeric\">Rp ";
            // line 50
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["t"], "harga", array()), 2, ",", "."), "html", null, true);
            echo "</td>
                                      <td class=\"numeric\">
                     <button class=\"btn btn-warning btn-block putih\" type=\"submit\"><i class=\"fa fa-check pull-left\"></i>&nbsp;Pesan / Reserve</button>

                                        
                                      </td>
                                  </tr>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                  </tbody>
                              </table>
                         </div>

                          

                      
                  </div><!-- /col-lg-12 -->
</div>
    </div>
      </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/web/hasil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 58,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  99 => 46,  95 => 45,  89 => 42,  85 => 41,  80 => 40,  76 => 39,  46 => 16,  40 => 13,  32 => 7,  30 => 1,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
