<?php

/* PortalBundle:Default:index.html.twig */
class __TwigTemplate_1d7238208c69dac9cdd21798e8349f07 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'pageid' => array($this, 'block_pageid'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "PortalBundle::layout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageid($context, array $blocks = array())
    {
        echo "page1";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
       ";
        // line 7
        echo $this->renderParentBlock("header", $context, $blocks);
        echo "
       <div class=\"slider\"   >
      \t<div class=\"carousel clearfix\">

          <div class=\"panel\">
            <div class=\"details_wrapper\">
              <div class=\"details\">
                <div class=\"detail\">
                  <h2 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:white;text-shadow: 2px 2px 2px black;\">Sistema Integrado SENDA ERP</h2>
                  <p style=\"color:white;font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">
                  Solución empresarial que consiste en un conjunto de Aplicativos desarrollados en forma modular, 
                  lo que facilita una rigida personalización de acuerdo a las necesidades de cada cliente.</p>
                 <!-- <a href=\"index-1.html\" title=\"Learn more\" class=\"more\">Leer mas</a>-->
                </div><!-- /detail -->

                <div class=\"detail\">
                  <h2 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:white;text-shadow: 2px 2px 2px black;\">Nuestros clientes</h2>
                  <p style=\"color:white;font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">
                  Nuestros clientes usan nuestro software en sus empresas.</p>
                  <!--<a href=\"index-2.html\" title=\"Learn more\" class=\"more\">Leer mas</a>-->
                </div><!-- /detail -->

                <div class=\"detail\">
                  <h2 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:white;text-shadow: 2px 2px 2px black;\">Senda Touch</h2>
                  <p style=\"color:white;font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Solucion para puntos de ventas</p>
                 <!-- <a href=\"#\" title=\"Learn more\" class=\"more\">Learn More</a>-->
                </div><!-- /detail -->



              </div><!-- /details -->

            </div><!-- /details_wrapper -->

            <div class=\"paging\">
              <div id=\"numbers\"></div>
              <a href=\"javascript:void(0);\" class=\"previous\" title=\"Previous\">Previous</a>
              <a href=\"javascript:void(0);\" class=\"next\" title=\"Next\">Next</a>
            </div><!-- /paging -->

          </div><!-- /panel -->

          <div class=\"backgrounds\">
            <div class=\"item\">
              <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide1.jpg"), "html");
        echo "\" alt=\"\" style=\"border-radius:6px 0px 0px 0px ;-moz-border-radius:6px 0px 0px 0px;-webkit-border-radius:6px 0px 0px 0px;\">
            </div><!-- /item -->

            <div class=\"item\">
              <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide2.jpg"), "html");
        echo "\" alt=\"\" style=\"border-radius:6px 0px 0px 0px ;-moz-border-radius:6px 0px 0px 0px;-webkit-border-radius:6px 0px 0px 0px;\">
            </div><!-- /item -->

            <div class=\"item\">
              <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/touch.jpg"), "html");
        echo "\" alt=\"\" style=\"border-radius:6px 0px 0px 0px ;-moz-border-radius:6px 0px 0px 0px;-webkit-border-radius:6px 0px 0px 0px;\">
            </div><!-- /item -->



          </div><!-- /backgrounds -->

        </div><!-- /carousel -->
      </div>
     \t<!-- /.slider -->   
";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "   
    <section id=\"content\">
      <div class=\"container\" style=\"margin-top:-55px;\">
    \t<div class=\"inside\">

      \t<!-- .top-info -->
      \t<section class=\"top-info\">
        \t
        \t<div class=\"box\">
          \t<div class=\"wrapper\">
          \t  <div class=\"col-1 colborder\">
              \t<div class=\"inner\">
              \t  <h3>Services <img src=\"images/icon1.jpg\" alt=\"\"></h3>
                  <ul class=\"list1\">
                  \t<li>Consec tetuer adipiscge</li>
                    <li>Elraesenonummy hendrerit</li>
                    <li>Maurisellus porsisque nulla</li>
                    <li><a href=\"#\">Vestibulum libero</a> nisl porta</li>
                  </ul>
                  <a href=\"#\" class=\"more-link\">Read More</a>
              \t</div>
              </div>
          \t  <div class=\"col-2 colborder\">
              \t<div class=\"inner\">
              \t  <h3>Products <img src=\"images/icon2.jpg\" alt=\"\"></h3>
                  <ul class=\"list1\">
                  \t<li>Hendrerit risellus porsi</li>
                    <li>Vestibulum <a href=\"#\">libero nisl porta</a></li>
                    <li>Scelerisque eget malesuada</li>
                    <li>Etiam cursus leo vel metus</li>
                  </ul>
                  <a href=\"#\" class=\"more-link\">Read More</a>
              \t</div>
              </div>
          \t  <div class=\"col-3 colborder\">
              \t<div class=\"inner\">
              \t  <h3>Technologies <img src=\"images/icon3.jpg\" alt=\"\"></h3>
                  <ul class=\"list1\">
                  \t<li>Porta elerisque eget mal</li>
                    <li>Aenean nec erosstibulum ante</li>
                    <li>Primis in faucibus <a href=\"#\">orci luctus</a></li>
                    <li>Ultrices posuere cubiliaurae</li>
                  </ul>
                  <a href=\"#\" class=\"more-link\">Read More</a>
              \t</div>
              </div>
          \t  <div class=\"col-4\">
              \t<div class=\"inner\">
              \t  <h3>Latest News <img src=\"images/icon4.jpg\" alt=\"\"></h3>
                  <ul class=\"list1\">
                  \t<li><a href=\"#\">Eget malenean nec erosstibulum antemis in faucibus orci</a></li>
                    <li>Porta elerisque eget malean</li>
                    <li>Malnean nec erosstibulum ante imis in faucibus orci luctus</li>
                  </ul>
                  <a href=\"#\" class=\"more-link\">Read More</a>
              \t</div>
              </div>
          \t</div>
          </div>
         
        </section>
      \t<!-- /.top-info -->
\t\t
\t
\t";
        // line 200
        echo "      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "PortalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
