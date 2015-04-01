<?php

/* C:\wamp\www\ipomi/themes/grill/pages/mobile/pilihagen.htm */
class __TwigTemplate_dcc7ed6638ca61ba2d97b2af87ee2d9843d8afa0ef42d2432baa76803ff2ac38 extends Twig_Template
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
        <h3>Pilih Agen
    <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-home-32-dark.png");
        echo "\" class=\"pull-right\">
</h3>
<hr />
      ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asal"]) ? $context["asal"] : null), "nama", array()), "html", null, true);
        echo "
        <div class=\"row mt\">
              <div class=\"col-lg-12\">
                      
              
                          <div id=\"no-more-tables\">
                              <table class=\"table table-bordered table-striped table-condensed cf transparan\">
                                  <thead class=\"cf\">
                                  <tr>
                                      <th>Nama Agen</th>
                                      <th>Alamat</th>
                                      
                                      <th>Pesan</th>
                                      
                                  </tr>
                                  </thead>
                                  <tbody>
                                   
                                  ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agens"]) ? $context["agens"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 34
            echo "                                  <form class=\"form-horizontal style-form\" action=\"";
            echo $this->env->getExtension('CMS')->pageFilter("mobile/datapenumpang");
            echo "\">
                                  <input type=\"hidden\" name=\"agen\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\" />
                                  <input type=\"hidden\" name=\"trayek\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trayek"]) ? $context["trayek"] : null), "id", array()), "html", null, true);
            echo "\" />
                                  <input type=\"hidden\" name=\"jmlpenumpang\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["jmlpenumpang"]) ? $context["jmlpenumpang"] : null), "html", null, true);
            echo "\" />
                                  <tr>
                                  
                                      <td data-title=\"Nama Agen\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nama", array()), "html", null, true);
            echo "</td>
                                      <td data-title=\"Alamat\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "alamat", array()), "html", null, true);
            echo "</td>
                                      
                                      <td class=\"numeric\">
                     <button class=\"btn btn-warning btn-block putih\" type=\"submit\"><i class=\"fa fa-check pull-left\"></i>&nbsp;Pesan / Reserve</button>

                                        
                                      </td>
                                  </tr>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                  </tbody>
                              </table>
                         </div>

                          

                      
                  </div><!-- /col-lg-12 -->
</div>
    
      </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/mobile/pilihagen.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 50,  93 => 41,  89 => 40,  83 => 37,  79 => 36,  75 => 35,  70 => 34,  66 => 33,  45 => 15,  39 => 12,  32 => 7,  30 => 1,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
