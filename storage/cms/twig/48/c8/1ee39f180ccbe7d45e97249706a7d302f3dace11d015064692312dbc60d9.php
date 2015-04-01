<?php

/* C:\wamp\www\ipomi/themes/grill/partials/bottom.htm */
class __TwigTemplate_48c81ee39f180ccbe7d45e97249706a7d302f3dace11d015064692312dbc60d9 extends Twig_Template
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
        echo "<div class=\"main-footer\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"about\">
                <h4 class=\"footer-title\">Tentang Ipomi</h4>
                <p>Tentang <span class=\"blue\">Ipomi</span><span class=\"green\">(Ikatan Pengusaha Otobus Muda Indonesia)</span> 
                <br><br>Credit goes to <a rel=\"nofollow\" href=\"http://sibos-online.com\">Sibos</a> for make this happen</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"shop-list\">
                <h4 class=\"footer-title\">Daftar PO</h4>
                    <ul>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>New Grill Menu</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Healthy Fresh Juices</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Spicy Delicious Meals</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Simple Italian Pizzas</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Pure Good Yogurts</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Ice-cream for kids</a></li>
                    </ul>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"recent-posts\">
                <h4 class=\"footer-title\">Berita Terkini</h4>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/recent-post1.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">Delicious and Healthy Menus</a></h6>
                            <span>24/12/2084</span>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"";
        // line 37
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/recent-post2.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">Simple and effective meals</a></h6>
                            <span>18/12/2084</span>
                        </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"more-info\">
                <h4 class=\"footer-title\">Info Lebih Lanjut</h4>
                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i>010-020-0340</li>
                        <li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                        <li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 37,  48 => 28,  19 => 1,);
    }
}
