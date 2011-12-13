<?php

/* PortalBundle:Estaticas:clientes.html.twig */
class __TwigTemplate_6794cffbe8462ceb91d3a80ffd89ab01 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'pageid' => array($this, 'block_pageid'),
            'estiloid' => array($this, 'block_estiloid'),
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
        echo "page2";
    }

    // line 4
    public function block_estiloid($context, array $blocks = array())
    {
        echo "height: 118px;";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "   <section id=\"content\">
    <div class=\"container\">
    \t<div class=\"inside\">
      \t<!-- .top-info -->
      \t<section class=\"top-info\">
        \t<!-- .box -->
        \t<!--
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
          -->
        \t<!-- /.box -->
        </section>
      \t<!-- /.top-info -->
        <div class=\"indent\">
        <div class=\"wrapper\">
        \t  <div class=\"col-1\">
        \t  <h2 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">
                      CLIENTES</h2>
            \t<article>
                <div class=\"wrapper\">
                  <figure><img src=\"images/3page-img1.jpg\" alt=\"\"></figure>
                  <h4 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">HN IMPORTACIONES LATINAS</h4>
                  <p><strong>RUC:</strong> 20537893584 <br />
                  <strong>Raz&oacute;n Social:</strong> HN IMPORTACIONES LATINAS<br />
                  <strong>Actividad Comercial:</strong> Consultores Prog. y Sumin. Informatic.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            \t</article>
            \t<article>
                <div class=\"wrapper\">
                  <figure><img src=\"images/3page-img1.jpg\" alt=\"\"></figure>
                  <h4 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">MPORTACIONES TAPYCUERO</h4>
                  <p><strong>RUC:</strong> 20538566919 <br />
                  <strong>Raz&oacute;n Social:</strong> IMPORTACIONES TAPYCUERO EIRL<br />
                  <strong>Actividad Comercial:</strong> Vta. May. Productos Textiles.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            \t</article>
            \t<article>
                <div class=\"wrapper\">
                  <figure><img src=\"images/3page-img1.jpg\" alt=\"\"></figure>
                  <h4 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">R & H CUEROS Y TAPICES S.</h4>
                  <p><strong>RUC:</strong> 20538700585 <br />
                  <strong>Actividad Comercial:</strong> Vta. May. Productos Textiles.
                  </p>

                </div>
            \t</article>


            \t<article>
                <div class=\"wrapper\">
                  <figure><img src=\"images/3page-img1.jpg\" alt=\"\"></figure>
                  <h4 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">IMPORTACIONES ASTRI DE EDGAR HERRERA BERRU</h4>
                  <p><strong>RUC:</strong> 10088740021 <br />
                  </p>

                </div>
            \t</article>

            \t<article>
                <div class=\"wrapper\">
                  <figure><img src=\"images/3page-img1.jpg\" alt=\"\"></figure>
                  <h4 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">INDUSTRIAS BAZ SAC - INDUBAZ SAC</h4>
                  <p><strong>RUC:</strong> 20493068220 <br />
                  </p>

                </div>
            \t</article>


            </div>
        \t  <div class=\"col-2\">


             <h2 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">Acerca de los clientes</h2>
              <p>Contamos con varios clientes alrededor del pais. Son las empresas mas destacadas en su rubro.</p>

              <figure><img src=\"images/foto_clientes.jpg\" alt=\"\" style=\"margin: 10px 0px 0 0px;\"></figure>

            </div>
        \t</div>
        </div>
      </div>
    </div>
  </section>
  
";
    }

    public function getTemplateName()
    {
        return "PortalBundle:Estaticas:clientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
