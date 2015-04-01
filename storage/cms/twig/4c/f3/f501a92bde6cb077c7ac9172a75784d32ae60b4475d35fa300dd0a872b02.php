<?php

/* C:\wamp\www\ipomi/themes/grill/pages/mobile/sukses.htm */
class __TwigTemplate_4cf3f501a92bde6cb077c7ac9172a75784d32ae60b4475d35fa300dd0a872b02 extends Twig_Template
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
        <h3>Sukses
    <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-change-32-dark.png");
        echo "\" class=\"pull-right\">
</h3>
<hr />
      
        <div class=\"row mt\">
              <div class=\"col-lg-12\">
                     <div id=\"qrcodeCanvas\" align=\"center\"></div>

                           Selamat, pemesanan tiket bus dengan kode pembayaran <strong>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["notiket"]) ? $context["notiket"] : null), "html", null, true);
        echo " </strong>telah berhasil anda lakukan. Pembayaran dilakukan paling lama 3 jam dari waktu pemesanan. <br>
                           Pembayaran bisa dilakukan melalui ATM, Payment Point, ataupun Tunai di Agen dengan memasukkan Kode Pembayaran
                           <br />
                           <strong>Pembayaran di ATM</strong> 
                           <br />
                           <ul>
                           <li>Bank Mandiri</li>
                           <li>Bank BII Maybank</li>
                           <li>Bank BRI</li>
                           <li>Bank BCA</li>
                           <li>Bank Panin</li>
                           <li>Bank CIMB Niaga</li>
                           <li>Bank BTN</li>
                           <li>Bank Mega</li>
                           <li>Bank Mayapada</li>
                           </ul>

                           <strong>Pembayaran di Payment Point</strong> 
                           <ul>
                             <li>Alfamart</li>
                             <li>Indomaret</li>
                             <li>Seven Eleven</li>
                             <li>Indo Grosir</li>
                           </ul>

                           <form class=\"form-horizontal style-form\" action=\"";
        // line 45
        echo $this->env->getExtension('CMS')->pageFilter("mobile/home");
        echo "\">


                           <button class=\"btn btn-warning btn-lg btn-block putih\" type=\"submit\"><i class=\"fa fa-check pull-left\"></i>&nbsp;Menu Utama</button>
                           </form>
                  </div><!-- /col-lg-12 -->
</div>
    
      </section>
";
        // line 54
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 55
        echo " <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/js/jquery.qrcode.js");
        echo "\"></script>
  <script src=\"";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets2/js/qrcode.js");
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery('#qrcodeCanvas').qrcode({width: 100,height: 100,text: \"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["notiket"]) ? $context["notiket"] : null), "html", null, true);
        echo "\"});
    </script>
";
        // line 54
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/mobile/sukses.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 54,  102 => 58,  97 => 56,  92 => 55,  90 => 54,  78 => 45,  50 => 20,  39 => 12,  32 => 7,  30 => 1,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
