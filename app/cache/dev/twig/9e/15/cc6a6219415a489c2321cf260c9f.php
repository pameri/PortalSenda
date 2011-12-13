<?php

/* PortalBundle::layout.html.twig */
class __TwigTemplate_9e15cc6a6219415a489c2321cf260c9f extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "::base.html.twig";
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "    <nav>
      \t<div class=\"logo\">
      \t  <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logosenda.png"), "html");
        echo "\" /></a>
      \t</div>
      \t<ul>
          <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html");
        echo "\">  Inicio</a></li>
          <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "soluciones")), "html");
        echo "\">Soluciones</a></li>
          <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "servicios")), "html");
        echo "\">Servicios</a></li>
          <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "clientes")), "html");
        echo "\">Clientes</a></li>
          <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "nosotros")), "html");
        echo "\">Nosotros</a></li>
          <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "contacto")), "html");
        echo "\">Contacto</a></li>

        </ul>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "PortalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
