<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e6863252fd04d560ed240678dd7e07d71ab1146cfb50287be2dd7e244e93e5b5 extends Twig_Template
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
        $__internal_a060a4567e9b49ab6243a974c0e4debc85ec2c8810b0cb04dce64493261c6ce0 = $this->env->getExtension("native_profiler");
        $__internal_a060a4567e9b49ab6243a974c0e4debc85ec2c8810b0cb04dce64493261c6ce0->enter($__internal_a060a4567e9b49ab6243a974c0e4debc85ec2c8810b0cb04dce64493261c6ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a060a4567e9b49ab6243a974c0e4debc85ec2c8810b0cb04dce64493261c6ce0->leave($__internal_a060a4567e9b49ab6243a974c0e4debc85ec2c8810b0cb04dce64493261c6ce0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
