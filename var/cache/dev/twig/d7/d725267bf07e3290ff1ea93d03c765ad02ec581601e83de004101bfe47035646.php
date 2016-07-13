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
        $__internal_98a02bc60f0d4b0fc4c1b561d9c4d39636b02dd5686c37c1f4fb283332de433a = $this->env->getExtension("native_profiler");
        $__internal_98a02bc60f0d4b0fc4c1b561d9c4d39636b02dd5686c37c1f4fb283332de433a->enter($__internal_98a02bc60f0d4b0fc4c1b561d9c4d39636b02dd5686c37c1f4fb283332de433a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_98a02bc60f0d4b0fc4c1b561d9c4d39636b02dd5686c37c1f4fb283332de433a->leave($__internal_98a02bc60f0d4b0fc4c1b561d9c4d39636b02dd5686c37c1f4fb283332de433a_prof);

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
