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
        $__internal_146e51fd657bcea8ac5d8803a3e34dce205ab2400a200b13e63c6872f49b4b9f = $this->env->getExtension("native_profiler");
        $__internal_146e51fd657bcea8ac5d8803a3e34dce205ab2400a200b13e63c6872f49b4b9f->enter($__internal_146e51fd657bcea8ac5d8803a3e34dce205ab2400a200b13e63c6872f49b4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_146e51fd657bcea8ac5d8803a3e34dce205ab2400a200b13e63c6872f49b4b9f->leave($__internal_146e51fd657bcea8ac5d8803a3e34dce205ab2400a200b13e63c6872f49b4b9f_prof);

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
