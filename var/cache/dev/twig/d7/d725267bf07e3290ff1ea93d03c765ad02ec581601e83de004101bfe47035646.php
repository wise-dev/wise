<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_33f0585465dd3cc84b4ffa51ade60d5e4b0b6fa0cf987fc11fec82b1ac50ff88 extends Twig_Template
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
        $__internal_1c4c29e20c53e509cdbb5cf5753316e93f3a9a07f2fd9498725df852955fd898 = $this->env->getExtension("native_profiler");
        $__internal_1c4c29e20c53e509cdbb5cf5753316e93f3a9a07f2fd9498725df852955fd898->enter($__internal_1c4c29e20c53e509cdbb5cf5753316e93f3a9a07f2fd9498725df852955fd898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1c4c29e20c53e509cdbb5cf5753316e93f3a9a07f2fd9498725df852955fd898->leave($__internal_1c4c29e20c53e509cdbb5cf5753316e93f3a9a07f2fd9498725df852955fd898_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
