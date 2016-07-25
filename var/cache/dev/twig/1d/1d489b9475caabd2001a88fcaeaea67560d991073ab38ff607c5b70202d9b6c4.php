<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f2a4b4d8d6b8ecfc5991208600810ffdd78a42dfc714f0862ee4a7a65cc5b34f extends Twig_Template
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
        $__internal_600d4911e76c8905c578826a362b5c69beab648c4571016d41377703905eb217 = $this->env->getExtension("native_profiler");
        $__internal_600d4911e76c8905c578826a362b5c69beab648c4571016d41377703905eb217->enter($__internal_600d4911e76c8905c578826a362b5c69beab648c4571016d41377703905eb217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_600d4911e76c8905c578826a362b5c69beab648c4571016d41377703905eb217->leave($__internal_600d4911e76c8905c578826a362b5c69beab648c4571016d41377703905eb217_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
