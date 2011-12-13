<?php

/* PortalBundle:Estaticas:nosotros.html.twig */
class __TwigTemplate_7d09ba81ed122c4387325ec4375b7f89 extends Twig_Template
{
    protected $parent;

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

    public function getTemplateName()
    {
        return "PortalBundle:Estaticas:nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
