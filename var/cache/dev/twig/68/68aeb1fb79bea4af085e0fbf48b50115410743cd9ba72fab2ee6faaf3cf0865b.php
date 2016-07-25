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
        $__internal_14b0df724a9537ddfca64cb9ee15750829d295782a82407a57cdb6e71aea411e = $this->env->getExtension("native_profiler");
        $__internal_14b0df724a9537ddfca64cb9ee15750829d295782a82407a57cdb6e71aea411e->enter($__internal_14b0df724a9537ddfca64cb9ee15750829d295782a82407a57cdb6e71aea411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14b0df724a9537ddfca64cb9ee15750829d295782a82407a57cdb6e71aea411e->leave($__internal_14b0df724a9537ddfca64cb9ee15750829d295782a82407a57cdb6e71aea411e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23e7f809ac1dd004fe9a1770d186276569bd513bddd2bf88a471225fc1796664 = $this->env->getExtension("native_profiler");
        $__internal_23e7f809ac1dd004fe9a1770d186276569bd513bddd2bf88a471225fc1796664->enter($__internal_23e7f809ac1dd004fe9a1770d186276569bd513bddd2bf88a471225fc1796664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_23e7f809ac1dd004fe9a1770d186276569bd513bddd2bf88a471225fc1796664->leave($__internal_23e7f809ac1dd004fe9a1770d186276569bd513bddd2bf88a471225fc1796664_prof);

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
