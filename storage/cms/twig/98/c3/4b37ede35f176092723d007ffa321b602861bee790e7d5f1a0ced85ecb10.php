<?php

/* C:\wamp\www\ipomi/themes/grill/pages/mobile/home.htm */
class __TwigTemplate_98c34b37ede35f176092723d007ffa321b602861bee790e7d5f1a0ced85ecb10 extends Twig_Template
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

<section class=\"wrapper back-ipomi\" id=\"sub-content\">
        <div>
              <h3>Menu Utama
    <img src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-home-32-dark.png");
        echo "\" class=\"pull-right putih\">
</h3>
<hr  />

        <div class=\"row\">
              <div class=\"col-lg-12\">
                  <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"";
        // line 18
        echo $this->env->getExtension('CMS')->pageFilter("mobile/profil");
        echo "\"> <img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-profile-24-dark.png");
        echo "\" class=\"pull-left\"><strong>Profil</strong></a>
            

            <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->pageFilter("mobile/berita");
        echo "\"> <img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-news-24-dark.png");
        echo "\" class=\"pull-left\"><strong>Berita</strong></a>

            <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->pageFilter("mobile/pesan");
        echo "\"> <img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-seat-side-24-dark.png");
        echo "\" class=\"pull-left \"><strong>Pesan Tiket</strong></a>

            <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->pageFilter("mobile/cek");
        echo "\"> <img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-qr-code-24-dark.png");
        echo "\" class=\"pull-left \"><strong>Cek Booking</strong></a>

            <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"";
        // line 27
        echo $this->env->getExtension('CMS')->pageFilter("mobile/riwayat");
        echo "\"> <img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-riwayat-24-dark.png");
        echo "\" class=\"pull-left \"><strong>Riwayat</strong></a>

            <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->pageFilter("mobile/lokasi");
        echo "\"> <img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-location-24-dark.png");
        echo "\" class=\"pull-left \"><strong>Lokasi</strong></a>

            <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"";
        // line 31
        echo $this->env->getExtension('CMS')->pageFilter("mobile/tentang");
        echo "\"> <img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-info-24-dark.png");
        echo "\" class=\"pull-left \"><strong>Tentang</strong></a>

             <a class=\"btn btn-warning btn-lg btn-block putih\" href=\"javascript:;\" data-request=\"onLogout\"> <img src=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets2/img/icon/icon-key-24-dark.png");
        echo "\" class=\"pull-left \"><strong>Keluar</strong></a>
           
                   


           

           
            
        </div>
      </div>

         </div>
      </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/pages/mobile/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  91 => 31,  84 => 29,  77 => 27,  70 => 25,  63 => 23,  56 => 21,  48 => 18,  39 => 12,  32 => 7,  30 => 1,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
