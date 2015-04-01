<?php

/* C:\wamp\www\ipomi/themes/grill/partials/aside.htm */
class __TwigTemplate_c8040d85b4f5f13a660e0a46fdc5528ededd55cee1b2b78b0cdb8a3f9b422c1b extends Twig_Template
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
        echo "<aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                  
                  
              \t  <p class=\"centered\"><a href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarThumb", array()), "html", null, true);
        echo "\"></a></p>
              \t  <h4 class=\"centered\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo " </h4>
              \t  <h5 class=\"centered\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "street_addr", array()), "html", null, true);
        echo "</h5>\t

                  <li class=\"mt\">
                      <a href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->pageFilter("agen/home");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "agen/home")) {
            echo "active";
        }
        echo "\">
                          <i class=\"fa fa-dashboard\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li>
                      <a href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("agen/pesan");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "agen/pesan")) {
            echo "active";
        }
        echo "\">
                          <i class=\"fa fa-dashboard\"></i>
                          <span>Pemesanan</span>
                      </a>
                  </li>

                  <li>
                      <a href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->pageFilter("agen/pesan");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "agen/pesan")) {
            echo "active";
        }
        echo "\">
                          <i class=\"fa fa-dashboard\"></i>
                          <span>Keberangkatan</span>
                      </a>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-cogs\"></i>
                          <span>Keuangan</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"";
        // line 38
        echo $this->env->getExtension('CMS')->pageFilter("kategoriproduk");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kategoriproduk")) {
            echo "active";
        }
        echo "\">Penjualan Tiket</a></li>
                          <li><a href=\"";
        // line 39
        echo $this->env->getExtension('CMS')->pageFilter("jenisproduk");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "jenisproduk")) {
            echo "active";
        }
        echo "\">Fee Keberangkatan</a></li>
                          <li><a  href=\"";
        // line 40
        echo $this->env->getExtension('CMS')->pageFilter("satuanproduksi");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "satuanproduksi")) {
            echo "active";
        }
        echo "\">Rekapitulasi</a></li>
                          <li><a  href=\"";
        // line 41
        echo $this->env->getExtension('CMS')->pageFilter("kategorienergi");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kategorienergi")) {
            echo "active";
        }
        echo "\">Deposit</a></li>
                         

                      </ul>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"";
        // line 48
        echo $this->env->getExtension('CMS')->pageFilter("perusahaan");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "perusahaan")) {
            echo "active";
        }
        echo "\">
                          <i class=\"fa fa-desktop\"></i>
                          <span>Kotak Pesan</span>
                      </a>
                  </li>

                  
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/partials/aside.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  112 => 41,  104 => 40,  96 => 39,  88 => 38,  69 => 26,  55 => 19,  41 => 12,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
