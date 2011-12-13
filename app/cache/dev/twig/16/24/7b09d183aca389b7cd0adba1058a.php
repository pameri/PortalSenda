<?php

/* PortalBundle:Estaticas:servicios.html.twig */
class __TwigTemplate_16247b09d183aca389b7cd0adba1058a extends Twig_Template
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
        return "PortalBundle:Estaticas:servicios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
