<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0b7c762a345ebad2f6e307ae0c2bdcea9eebd619af1f63ae13534f572b357dca extends Twig_Template
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
        $__internal_25f3481367d74ac2316ea54606ce8777f8bb5e0308b016cc3ae15f1d83d5a1af = $this->env->getExtension("native_profiler");
        $__internal_25f3481367d74ac2316ea54606ce8777f8bb5e0308b016cc3ae15f1d83d5a1af->enter($__internal_25f3481367d74ac2316ea54606ce8777f8bb5e0308b016cc3ae15f1d83d5a1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_25f3481367d74ac2316ea54606ce8777f8bb5e0308b016cc3ae15f1d83d5a1af->leave($__internal_25f3481367d74ac2316ea54606ce8777f8bb5e0308b016cc3ae15f1d83d5a1af_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64326ba7006d8f382b7198afdc5c01bd05430c55b8b13445ccd45ab11c3bbdc0 = $this->env->getExtension("native_profiler");
        $__internal_64326ba7006d8f382b7198afdc5c01bd05430c55b8b13445ccd45ab11c3bbdc0->enter($__internal_64326ba7006d8f382b7198afdc5c01bd05430c55b8b13445ccd45ab11c3bbdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64326ba7006d8f382b7198afdc5c01bd05430c55b8b13445ccd45ab11c3bbdc0->leave($__internal_64326ba7006d8f382b7198afdc5c01bd05430c55b8b13445ccd45ab11c3bbdc0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
