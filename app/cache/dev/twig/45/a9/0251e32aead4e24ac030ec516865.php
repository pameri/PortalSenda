<?php

/* ::base.html.twig */
class __TwigTemplate_45a90251e32aead4e24ac030ec516865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageid' => array($this, 'block_pageid'),
            'estiloid' => array($this, 'block_estiloid'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - SENDA SOLUTIONS</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html");
        echo "\" type=\"text/css\" media=\"all\">
          <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html");
        echo "\" type=\"text/css\" media=\"all\">
          <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html");
        echo "\" type=\"text/css\" media=\"all\">
          <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.dualSlider.0.3.css"), "html");
        echo "\" media=\"all\">
          <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.4.2.min.js"), "html");
        echo "\" type=\"text/javascript\"></script>
          <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html");
        echo "\" type=\"text/javascript\"></script>
          <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.timers-1.2.js"), "html");
        echo "\" type=\"text/javascript\"></script>
          <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dualSlider.0.3.js"), "html");
        echo "\" type=\"text/javascript\"></script>
          <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html");
        echo "\" type=\"text/javascript\" ></script>
          <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html");
        echo "\" />
    </head>
    <body id=\"";
        // line 25
        $this->displayBlock('pageid', $context, $blocks);
        echo "\">
        <header style=\"";
        // line 26
        $this->displayBlock('estiloid', $context, $blocks);
        echo "\">
            <div class=\"container\">
            ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "            </div>
         </header>
  
          <div class=\"container\">
            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
            <footer>
              ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "              
            </footer>
          </div>
           ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "            
            
        
      
        
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "WEB ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "                 
        ";
    }

    // line 25
    public function block_pageid($context, array $blocks = array())
    {
        echo "";
    }

    // line 26
    public function block_estiloid($context, array $blocks = array())
    {
        echo "";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "                    <div class=\"container\">
                        <div class=\"inside\" style=\"text-align: center;\">
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "soluciones")), "html");
        echo "\">&copy; ";
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html");
        echo " - SENDA TI SOLUTIONS</a>
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "privacidad")), "html");
        echo "\"> Privacidad</a>
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "condiciones")), "html");
        echo "\"> Condiciones de uso</a>
                        </div>
                  </div>
              ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
