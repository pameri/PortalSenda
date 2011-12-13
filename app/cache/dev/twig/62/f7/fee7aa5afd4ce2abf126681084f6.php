<?php

/* PortalBundle:Estaticas:soluciones.html.twig */
class __TwigTemplate_62f7fee7aa5afd4ce2abf126681084f6 extends Twig_Template
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<section id=\"content\">
    <div class=\"container\">
    \t<div class=\"inside\">
        <div class=\"indent\">
        \t<div class=\"wrapper\">

        \t<div class=\"col-3\" style=\"width:780px;\">



        \t<h2 style=\"color:#314E64;font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;\">
        \tSistema Integrado ERP SENDA       \t</h2>

        \t<p>SENDA TI SOLUTIONS S.A.C.</p>

        \t<br />


        \t <figure><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/imagen1.jpg"), "html");
        echo "\" alt=\"\" style=\"margin: 0 85px 0 0;\"></figure>

        \t <ul style=\"list-style: square outside none;\">
\t\t\t\t<li><strong>ADMINISTRACION Y SEGURIDAD</strong> </li>
\t\t\t\t<li><strong>LOGISTICA</strong> </li>
\t\t\t\t<li><strong>VENTAS</strong> </li>
\t\t\t\t<li><strong>FINANZAS Y CONTABILIDAD</strong> </li>
\t\t\t\t<li><strong>CUENTAS POR COBRAR</strong> </li>
\t\t\t\t<li><strong>GESTION DE HARDWARE & SOFTWARE</strong> </li>
\t\t\t\t<li><strong>ORDEN DE ATENCION AL CLIENTE & HELPDESK</strong> </li>
\t\t\t</ul>

\t\t      <br />
\t\t      <br />
\t\t      <br />
\t\t      <br />
\t\t      <br />
\t\t      <br />


\t\t      <h3 style=\"font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-style:normal;color:#314e64;\">
\t\t      NUESTRAS SOLUCIONES:</h3>
\t\t      <br />


        \t</div>
        \t  <div class=\"col-1\" style=\"width:350px;\">


        \t  <article>
                <div class=\"wrapper\">
                  <h4 style=\"color:#314E64;\">MODULO DE VENTAS</h4>
                  <p>
                  documento en el sistema comercial ya sea en forma manual o en forma masiva a través de un proceso especial. 
Los datos relevantes de un documento son: Cliente, RUC, Dirección, 
Cliente a quien se le  deberá cobrar (que por default será el mismo.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            </article>

            <article>
                <div class=\"wrapper\">
                  <h4 style=\"color:#314E64;\">MODULO DE LOGISTICA</h4>
                  <p>
                  Para la administración del acopio, almacenamiento y distribución de los bienes y servicios.
                  Consta de los siguientes Módulos:

                  <h4 style=\"color:#314E64;\">Orden de Requerimiento o Solicitud de Bienes</h4>
                  Este documento lo elaboran las personas autorizadas a generar pedidos de bienes o servicios. Entre estos se encuentran los de reposición de                                     stock.

En cada Solicitud, se menciona para qué centro de gasto es y para qué unidad operativa o cadena funcional.

Se imprime esta solicitud en cada nivel de aprobación. Puede manejar hasta 4 niveles de aprobación. En los últimos dos niveles se puede variar la cantidada aprobada.

<h4 style=\"color:#314E64;\">Cotizaciones y pedido de cotización</h4>

Para hacer llegar a los proveedores potenciales los pedidos de cotización, con el fin de atender las solicitudes de bienes o requerimientos.
Cuando se ha decidido a qué proveedor / proveedores comprarles los bienes o servicios, entra a funcionar el sistema de compras con la elbaoración de la orden de compra; su posterior aceptación; su conversión a factura de compra, se anota el ingreso del bien o servicio y se revisa la provisión creada por la factura de compras para el pago respectivo en el área de tesorería.

<h4 style=\"color:#314E64;\">Tabla de Usuarios / Requerimiento</h4>
Para que los usuarios que están autorizados a generar pedidos estén registrados en el sistema.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            </article>

<article>
                <div class=\"wrapper\">
                  <h4 style=\"color:#314E64;\">MODULO DE FINANZAS</h4>
                  <p>
                  Este módulo es también una base de datos que el usuario puede explotar para determinados trabajos o estudios económico financieros. 
                  Reporte flujo de caja y bancos tomando en cuenta los pagos y cobros por realizar, así como los movimientos en las cuentas. Además presenta los saldos iniciales y finales. Los datos vienen desde los subsistemas de ventas y logistica.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            </article>


              </div>
            <div class=\"col-2\" style=\"width:350px;\">

            <article>
                <div class=\"wrapper\">
                  <h4 style=\"color:#314E64;\">SENDA TOUCH POS</h4>
                  <p>
                  SENDA TOUCH POS es un módulo de ventas (facturación o boleta desde un mostrador), vale decir, el documento a generar se aprecia en pantalla y luego se imprime rápidamente para velocidad y eficiencia del vendedor. Su emisión es instantánea. Saca los artículos directamente del almacén.

Caja Bancos recibe la provisión o compromiso de cobranza y prosigue el procedimiento ordinario.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            </article>

            <article>
                <div class=\"wrapper\">
                  <h4 style=\"color:#314E64;\">SENDA REST POS</h4>
                  <p>
                  SENDA REST POS es un módulo que permite agilizar la atención netamente de restaurantes.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            </article>


            <article>
                <div class=\"wrapper\">
                  <h4 style=\"color:#314E64;\">SENDA TOUCH POS</h4>
                  <p>
                  SENDA TOUCH POS es un módulo de ventas (facturación o boleta desde un mostrador), vale decir, el documento a generar se aprecia en pantalla y luego se imprime rápidamente para velocidad y eficiencia del vendedor. Su emisión es instantánea. Saca los artículos directamente del almacén.

Caja Bancos recibe la provisión o compromiso de cobranza y prosigue el procedimiento ordinario.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            </article>

            <article>
                <div class=\"wrapper\">
                  <h4 style=\"color:#314E64;\">SENDA HELP DESK</h4>
                  <p>
                  SENDA HELP DESK es un módulo.
                  </p>
                  <!--<a href=\"#\" class=\"button\">read more</a>-->
                </div>
            </article>


        \t</div>



        </div>
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "PortalBundle:Estaticas:soluciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
