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
                  <h2 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:white;text-shadow: 2px 2px 2px black;\">
                      Sistema Integrado SENDA ERP
                  </h2>
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
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide1.jpg"), "html");
        echo "\" alt=\"\" style=\"border-radius:6px 0px 0px 0px ;-moz-border-radius:6px 0px 0px 0px;-webkit-border-radius:6px 0px 0px 0px;\">
            </div><!-- /item -->

            <div class=\"item\">
              <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide2.jpg"), "html");
        echo "\" alt=\"\" style=\"border-radius:6px 0px 0px 0px ;-moz-border-radius:6px 0px 0px 0px;-webkit-border-radius:6px 0px 0px 0px;\">
            </div><!-- /item -->

            <div class=\"item\">
              <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/touch.jpg"), "html");
        echo "\" alt=\"\" style=\"border-radius:6px 0px 0px 0px ;-moz-border-radius:6px 0px 0px 0px;-webkit-border-radius:6px 0px 0px 0px;\">
            </div><!-- /item -->



          </div><!-- /backgrounds -->

        </div><!-- /carousel -->
      </div>
     \t<!-- /.slider -->   
";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "     <section id=\"content\">
       <div class=\"container\" style=\"margin-top:-55px;\">
            <div class=\"indent\">
        \t<div class=\"wrapper\">
            \t     <div class=\"item\">
                      <article>
                            <div class=\"wrapper\">
                                <h2 style=\"color:#314E64;\" >MODULOS DEL SISTEMA INTEGRADO SENDA ERP</h2>

                              <!--<a href=\"#\" class=\"button\">read more</a>-->
                            </div>
                        </article>
                     </div>
                 </div>      
            </div>          
         
        </div>
     </section>
    <section id=\"content\">
      <div class=\"container\" style=\"margin-top:-55px;\">
    \t<div class=\"inside\">
                    
      \t<!-- .top-info -->
      \t<section class=\"top-info\">
          \t<div class=\"box\">
          \t<div class=\"wrapper\">
          \t  <div class=\"col-1 colborder\">
                    <div class=\"inner\">
                      <h3>LOGISTICA <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon1.jpg"), "html");
        echo "\" alt=\"\"></h3>
                      <ul class=\"list1\">
                        <li><a href=\"#\">Almacenes</a></li>
                        <li><a href=\"#\">Inventarios</a></li>
                        <li><a href=\"#\">Compras</a></li>

                        <li><a href=\"#\">Importaciones</a> </li>
                      </ul>
                      <a href=\"#\" class=\"more-link\">Read More</a>
                    </div>
                   </div>
          \t  <div class=\"col-1 colborder\">
                    <div class=\"inner\">
                      <h3>FINANZAS <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon2.jpg"), "html");
        echo "\" alt=\"\"></h3>
                      <ul class=\"list1\">
                        <li><a href=\"#\">Contabilidad</a></li>
                        <li><a href=\"#\">Tesoreria</a></li>
                        <li><a href=\"#\">Cuentas por Cobrar</a></li>
                        <li><a href=\"#\">Cuentas por Pagar</a></li>
                      </ul>
                      <a href=\"#\" class=\"more-link\">Read More</a>
                    </div>
                    </div>
          \t  <div class=\"col-1 colborder\">
                        <div class=\"inner\">
                          <h3>COMERCIAL Y VENTAS <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon3.jpg"), "html");
        echo "\" alt=\"\"></h3>
                          <ul class=\"list1\">
                           <li><a href=\"#\">Facturación</a></li>
                           <br />
                            <br />
                             <br />
                             <br />   
                          </ul>
                          <a href=\"#\" class=\"more-link\">Read More</a>
                        </div>
                 </div>
          \t  <div class=\"col-4\">
                    <div class=\"inner\">
                      <h3>RECURSOS HUMANOS<img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon4.jpg"), "html");
        echo "\" alt=\"\"></h3>
                      <ul class=\"list1\">
                        <li><a href=\"#\">Planillas</a></li>
                        <li><a href=\"#\">Control de Asistencia</a></li>
                        
                      </ul>
                      <a href=\"#\" class=\"more-link\">Read More</a>
                    </div>
              </div>
          \t</div>
          </div>
         
        </section>
        
         <section>
             <div class=\"box\">
              ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'clientes'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['cliente']) {
            // line 156
            echo "                
                    <article>
                            <p>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'cliente'), "nombre", array(), "any", false), "html");
            echo "</p>
                    </article>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 161
            echo "                    <p>NO EXISTE CLIENTES.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 163
        echo "             </div>
               
            </section>
        
        
        
        
        
      \t<!-- /.top-info -->
\t\t
\t
\t";
        // line 239
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
