<?php

/* C:\wamp\www\ipomi/themes/grill/partials/agenside.htm */
class __TwigTemplate_2ce4fed938ab93a17e0a8602229f8357abd34b8c44bb28f748340e126cad241b extends Twig_Template
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
        echo "<div id=\"sidebar\" class=\"nav-collapse\">
        <!-- sidebar menu start-->
        <div class=\"leftside-navigation\">
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <li>
                    <a href=\"";
        // line 6
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
        // line 13
        echo $this->env->getExtension('CMS')->pageFilter("agen/pesan");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "agen/pesan")) {
            echo "active";
        }
        echo "\">
                          <i class=\"fa fa-laptop\"></i>
                          <span>Pemesanan</span>
                      </a>
                  </li>

                   <li>
                      <a href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->pageFilter("agen/booking");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "agen/booking")) {
            echo "active";
        }
        echo "\">
                          <i class=\"fa fa-qrcode\"></i>
                          <span>Cek Booking</span>
                      </a>
                  </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-laptop\"></i>
                        <span>Keuangan</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"boxed_page.html\">Fee Agen</a></li>
                        <li><a href=\"horizontal_menu.html\">Transaksi Bus</a></li>
                        <li><a href=\"language_switch.html\">Penjualan Channel</a></li>
                    </ul>
                </li>
            

        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/partials/agenside.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  40 => 13,  26 => 6,  19 => 1,);
    }
}
