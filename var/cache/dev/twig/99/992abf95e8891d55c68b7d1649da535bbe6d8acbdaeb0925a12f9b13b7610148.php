<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ed010bb52f951edca32939ffb7867f506b6f231c13024280dd3f4bbd26abc1a5 extends Twig_Template
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
        $__internal_155c5f40cf6954e49cda229e6de161b2940b79c5f2e8127862e3db8ab60d6e13 = $this->env->getExtension("native_profiler");
        $__internal_155c5f40cf6954e49cda229e6de161b2940b79c5f2e8127862e3db8ab60d6e13->enter($__internal_155c5f40cf6954e49cda229e6de161b2940b79c5f2e8127862e3db8ab60d6e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_155c5f40cf6954e49cda229e6de161b2940b79c5f2e8127862e3db8ab60d6e13->leave($__internal_155c5f40cf6954e49cda229e6de161b2940b79c5f2e8127862e3db8ab60d6e13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
