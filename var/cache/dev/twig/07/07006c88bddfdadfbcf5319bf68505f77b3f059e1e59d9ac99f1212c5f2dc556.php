<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_af9ccbecda8c2f0a33919e04f1b7d4bcc06dc390b8eb316bd1844def3fc57b1f extends Twig_Template
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
        $__internal_9a351206b263bb149f7f9feea9f4f6ab7fec68547c4887f095a7e5e6de7a469b = $this->env->getExtension("native_profiler");
        $__internal_9a351206b263bb149f7f9feea9f4f6ab7fec68547c4887f095a7e5e6de7a469b->enter($__internal_9a351206b263bb149f7f9feea9f4f6ab7fec68547c4887f095a7e5e6de7a469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a351206b263bb149f7f9feea9f4f6ab7fec68547c4887f095a7e5e6de7a469b->leave($__internal_9a351206b263bb149f7f9feea9f4f6ab7fec68547c4887f095a7e5e6de7a469b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
