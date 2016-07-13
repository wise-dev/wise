<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7f2b71be6f0bc2c8d5bff83bf4816c21ba1c12a1e645b07076960c38bf8caa4f extends Twig_Template
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
        $__internal_e38e4d10bb8ba6be18bb5ec73d85dddb539537ddeec65408826ffa841e19b5bd = $this->env->getExtension("native_profiler");
        $__internal_e38e4d10bb8ba6be18bb5ec73d85dddb539537ddeec65408826ffa841e19b5bd->enter($__internal_e38e4d10bb8ba6be18bb5ec73d85dddb539537ddeec65408826ffa841e19b5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e38e4d10bb8ba6be18bb5ec73d85dddb539537ddeec65408826ffa841e19b5bd->leave($__internal_e38e4d10bb8ba6be18bb5ec73d85dddb539537ddeec65408826ffa841e19b5bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
