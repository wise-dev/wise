<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3f23994368a175dee29a36803e07d721090ab21c992437a1d8c6f1b66579a1a9 extends Twig_Template
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
        $__internal_59d4c78b7d5fe283db449006916a57f5a7a962f213702d413d43649fb0414c08 = $this->env->getExtension("native_profiler");
        $__internal_59d4c78b7d5fe283db449006916a57f5a7a962f213702d413d43649fb0414c08->enter($__internal_59d4c78b7d5fe283db449006916a57f5a7a962f213702d413d43649fb0414c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_59d4c78b7d5fe283db449006916a57f5a7a962f213702d413d43649fb0414c08->leave($__internal_59d4c78b7d5fe283db449006916a57f5a7a962f213702d413d43649fb0414c08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
