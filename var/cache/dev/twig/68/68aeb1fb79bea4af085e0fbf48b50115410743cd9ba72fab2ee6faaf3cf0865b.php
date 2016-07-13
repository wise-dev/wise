<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d487579c4017ffa2d7e5189a3eea7525bc5e6ad0ce8dd8b8a5deaf42c4ee7655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d08751b030a0854d6a7db4f52690ea4f571a0406c38a12eaa1d5fb8be90b40d4 = $this->env->getExtension("native_profiler");
        $__internal_d08751b030a0854d6a7db4f52690ea4f571a0406c38a12eaa1d5fb8be90b40d4->enter($__internal_d08751b030a0854d6a7db4f52690ea4f571a0406c38a12eaa1d5fb8be90b40d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d08751b030a0854d6a7db4f52690ea4f571a0406c38a12eaa1d5fb8be90b40d4->leave($__internal_d08751b030a0854d6a7db4f52690ea4f571a0406c38a12eaa1d5fb8be90b40d4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7df57d65abdee9d965495b683bd0fbd3cda880c921bbd2b8d93bc596e3eb1d4 = $this->env->getExtension("native_profiler");
        $__internal_d7df57d65abdee9d965495b683bd0fbd3cda880c921bbd2b8d93bc596e3eb1d4->enter($__internal_d7df57d65abdee9d965495b683bd0fbd3cda880c921bbd2b8d93bc596e3eb1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d7df57d65abdee9d965495b683bd0fbd3cda880c921bbd2b8d93bc596e3eb1d4->leave($__internal_d7df57d65abdee9d965495b683bd0fbd3cda880c921bbd2b8d93bc596e3eb1d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
