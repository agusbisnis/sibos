<?php

/* C:\wamp\www\ipomi/themes/grill/pages/agen/datapenumpang.htm */
class __TwigTemplate_e9dbaed1e2eec7baea77aa821c87ec63cf64929afa79fe55e392b199e281e3bf extends Twig_Template
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
        <h3>Data Pemesan
    <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-age-mature-32-dark.png");
        echo "\" class=\"pull-right\">
</h3>
<hr />
      ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asal"]) ? $context["asal"] : null), "nama", array()), "html", null, true);
        echo "
        <div class=\"row mt\">
              <div class=\"col-lg-12\">
                     
                           <form class=\"form-horizontal style-form\" action=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("agen/konfirmasipesan");
        echo "\">
                            <input type=\"hidden\" name=\"agen\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["agen"]) ? $context["agen"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"trayek\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["trayek"]) ? $context["trayek"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"jmlpenumpang\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["jmlpenumpang"]) ? $context["jmlpenumpang"] : null), "html", null, true);
        echo "\" />
                           
                              <label class=\"col-sm-2 col-sm-2 control-label\">Nama</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\" class=\"form-control transparan\" name=\"nama\"  id=\"input1\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "\" >
                              </div>
                              
                              
                              <label class=\"col-sm-2 col-sm-2 control-label\">E-Mail</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\" class=\"form-control transparan\" name=\"email\"  value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\" >
                              </div>
                              
                              <label class=\"col-sm-2 col-sm-2 control-label\">No Yang Bisa Dihubungi</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\" class=\"form-control transparan\" name=\"telp\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\" >
                              </div>
                              
                              <label class=\"col-sm-2 col-sm-2 control-label\">Alamat</label>
                              <div class=\"col-sm-10\">
                                  <input type=\"text\" class=\"form-control transparan\" name=\"alamat\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "street_addr", array()), "html", null, true);
        echo "\" >
                              </div>
                         <hr />
                         <div class=\"col-sm-12\">
                          <button class=\"btn btn-warning btn-lg btn-block putih\" type=\"submit\"><i class=\"fa fa-check pull-left\"></i>&nbsp;Pesan/Reserve</button>
                          </div>
                          

                          

                      
                  </div><!-- /col-lg-12 -->
</div>
    
      </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/agen/datapenumpang.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 42,  88 => 37,  80 => 32,  71 => 26,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  45 => 15,  39 => 12,  32 => 7,  30 => 1,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
