<?php

/* C:\wamp\www\ipomi/themes/grill/partials/nav.htm */
class __TwigTemplate_e1ea155abbeb457f4e5dcf48c35b6dd8265f53f19bde36273e0b926c951e69ef extends Twig_Template
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
        // line 2
        $context["links"] = array("pesan" => array(0 => "home", 1 => "Pesan Tiket"), "cara" => array(0 => "samples/about-us", 1 => "Cara Pesan"), "jadwal" => array(0 => "samples/jadwal", 1 => "Cek Jadwal"), "cek" => array(0 => "samples/products", 1 => "Cek Booking"), "tentang" => array(0 => "samples/contact-us", 1 => "Tentang"));
        // line 11
        echo "
";
        // line 32
        echo "
";
        // line 33
        $context["nav"] = $this;
        // line 34
        echo "
<div id=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            
            <div class=\"col-md-24\">
                <div class=\"main-menu\">
                    <ul>
                        ";
        // line 42
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>";
    }

    // line 12
    public function getrender_menu($__links__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 14
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 16
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 17
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 18
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 20
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 21
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 22
                echo "            </a>
            ";
                // line 23
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 24
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 26
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 29
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ipomi/themes/grill/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  106 => 26,  102 => 24,  100 => 23,  97 => 22,  93 => 21,  89 => 20,  83 => 18,  79 => 17,  75 => 16,  67 => 14,  62 => 13,  51 => 12,  39 => 42,  29 => 34,  27 => 33,  24 => 32,  21 => 11,  19 => 2,);
    }
}
