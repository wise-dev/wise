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
        $__internal_7a9cce427a56d9f6a8e4f22805a5c4760d4ff4ab796b148671b44a0f856eea5f = $this->env->getExtension("native_profiler");
        $__internal_7a9cce427a56d9f6a8e4f22805a5c4760d4ff4ab796b148671b44a0f856eea5f->enter($__internal_7a9cce427a56d9f6a8e4f22805a5c4760d4ff4ab796b148671b44a0f856eea5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7a9cce427a56d9f6a8e4f22805a5c4760d4ff4ab796b148671b44a0f856eea5f->leave($__internal_7a9cce427a56d9f6a8e4f22805a5c4760d4ff4ab796b148671b44a0f856eea5f_prof);

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
