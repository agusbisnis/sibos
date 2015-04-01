<?php

/* C:\wamp\www\ipomi/themes/grill/pages/mobile/konfirmasipesan.htm */
class __TwigTemplate_53aa3ce0f8e0c361808a2800407507c5c6a214659ebc6bafeca29350a12a94a9 extends Twig_Template
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
        <h3>Konfirmasi Pemesanan
    <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-change-32-dark.png");
        echo "\" class=\"pull-right\">
</h3>
<hr />
     
        <div class=\"row mt\">
              <div class=\"col-lg-12\">
                     
<p><strong>Tujuan Perjalanan</strong><br>
";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asal"]) ? $context["asal"] : null), "nama", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tujuan"]) ? $context["tujuan"] : null), "nama", array()), "html", null, true);
        echo "
</p>
<p> <strong>Waktu Keberangkatan</strong><br>
Tgl Datang    : ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tgl", array()), "d-M-Y"), "html", null, true);
        echo "<br>
Jam Datang    : ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "jamdatang", array()), "H:i"), "html", null, true);
        echo "<br>
Tempat Datang : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "nama", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "alamat", array()), "html", null, true);
        echo "
</p>
 
<p><strong>Waktu Tiba</strong><br>
Tgl Tiba    : ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tgltiba", array()), "d-M-Y"), "html", null, true);
        echo " <br>
Waktu Tiba  : ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "jamtiba", array()), "H:i"), "html", null, true);
        echo "
</p>

<p><strong>Jumlah Penumpang</strong> : ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["jmlpenumpang"]) ? $context["jmlpenumpang"] : null), "html", null, true);
        echo " orang <br></p>
<p> <strong>Pemesan Yang Bisa Dihubungi</strong><br>
Nama  :  ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["nama"]) ? $context["nama"] : null), "html", null, true);
        echo " <br>
Telp  :  ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["telp"]) ? $context["telp"] : null), "html", null, true);
        echo " <br>
Email :  ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "  <br>
Alamat:  ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["alamat"]) ? $context["alamat"] : null), "html", null, true);
        echo "

</p>
<p> <strong>Total Harga Tiket</strong><br>
";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["jmlpenumpang"]) ? $context["jmlpenumpang"] : null), "html", null, true);
        echo " x Rp ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "harga", array()), 2, ",", "."), "html", null, true);
        echo " = Rp ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 2, ",", "."), "html", null, true);
        echo "
</p>

                           <form class=\"form-horizontal style-form\" action=\"";
        // line 45
        echo $this->env->getExtension('CMS')->pageFilter("mobile/sukses");
        echo "\">
                            <input type=\"hidden\" name=\"agen\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["agen"]) ? $context["agen"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"trayek\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["trayek"]) ? $context["trayek"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"jmlpenumpang\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["jmlpenumpang"]) ? $context["jmlpenumpang"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"nama\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["nama"]) ? $context["nama"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"telp\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["telp"]) ? $context["telp"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"email\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"alamat\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["alamat"]) ? $context["alamat"] : null), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"bayar\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "\" />

                           <button class=\"btn btn-warning btn-lg btn-block putih\" type=\"submit\"><i class=\"fa fa-check pull-left\"></i>&nbsp;Pesan/Reserve</button>
                           </form>
                  </div><!-- /col-lg-12 -->
</div>
    
      </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/mobile/konfirmasipesan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 53,  147 => 52,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  109 => 42,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  85 => 33,  79 => 30,  75 => 29,  66 => 25,  62 => 24,  58 => 23,  50 => 20,  39 => 12,  32 => 7,  30 => 1,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
