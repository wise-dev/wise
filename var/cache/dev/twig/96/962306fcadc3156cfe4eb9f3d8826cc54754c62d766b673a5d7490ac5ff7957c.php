<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_df1601e20a59b06f8832f9158e34c2c0a3958f6e54e0420e08f8097ae1266976 extends Twig_Template
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
        $__internal_b07f0f2fd5c675f62927b8e52bff8b352477d7e559cdccc882202f58553ef3c9 = $this->env->getExtension("native_profiler");
        $__internal_b07f0f2fd5c675f62927b8e52bff8b352477d7e559cdccc882202f58553ef3c9->enter($__internal_b07f0f2fd5c675f62927b8e52bff8b352477d7e559cdccc882202f58553ef3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b07f0f2fd5c675f62927b8e52bff8b352477d7e559cdccc882202f58553ef3c9->leave($__internal_b07f0f2fd5c675f62927b8e52bff8b352477d7e559cdccc882202f58553ef3c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
