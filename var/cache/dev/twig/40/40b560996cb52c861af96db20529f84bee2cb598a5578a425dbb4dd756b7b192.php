<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_afd3db4c34013b7eb1bc7715c04e62559d50adec3bbfbd6ca2a0235653ec7c37 extends Twig_Template
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
        $__internal_d1985175e1ac7298c8ee3d03c2b36b5d6341f8b6e40ced3a94a44a93f8c6336c = $this->env->getExtension("native_profiler");
        $__internal_d1985175e1ac7298c8ee3d03c2b36b5d6341f8b6e40ced3a94a44a93f8c6336c->enter($__internal_d1985175e1ac7298c8ee3d03c2b36b5d6341f8b6e40ced3a94a44a93f8c6336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d1985175e1ac7298c8ee3d03c2b36b5d6341f8b6e40ced3a94a44a93f8c6336c->leave($__internal_d1985175e1ac7298c8ee3d03c2b36b5d6341f8b6e40ced3a94a44a93f8c6336c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
