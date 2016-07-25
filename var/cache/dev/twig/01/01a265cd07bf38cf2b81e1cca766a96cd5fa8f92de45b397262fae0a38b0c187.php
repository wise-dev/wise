<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e5e3d6e48fb88d43d45e13e0b218755ed879f3f942811b41e58ab7fdf7e2982e extends Twig_Template
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
        $__internal_be055718f7071d085d485b1840e0d0fd6548046ccce0fb177c56f5e2ec6e558e = $this->env->getExtension("native_profiler");
        $__internal_be055718f7071d085d485b1840e0d0fd6548046ccce0fb177c56f5e2ec6e558e->enter($__internal_be055718f7071d085d485b1840e0d0fd6548046ccce0fb177c56f5e2ec6e558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_be055718f7071d085d485b1840e0d0fd6548046ccce0fb177c56f5e2ec6e558e->leave($__internal_be055718f7071d085d485b1840e0d0fd6548046ccce0fb177c56f5e2ec6e558e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
