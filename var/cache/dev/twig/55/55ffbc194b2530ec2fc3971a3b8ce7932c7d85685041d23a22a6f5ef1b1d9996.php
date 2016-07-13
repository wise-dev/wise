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
        $__internal_6da6160299b332cd43d0948d4ff38bf0605aa1c1fdbfd0a6b21a10f62dd8820e = $this->env->getExtension("native_profiler");
        $__internal_6da6160299b332cd43d0948d4ff38bf0605aa1c1fdbfd0a6b21a10f62dd8820e->enter($__internal_6da6160299b332cd43d0948d4ff38bf0605aa1c1fdbfd0a6b21a10f62dd8820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6da6160299b332cd43d0948d4ff38bf0605aa1c1fdbfd0a6b21a10f62dd8820e->leave($__internal_6da6160299b332cd43d0948d4ff38bf0605aa1c1fdbfd0a6b21a10f62dd8820e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_395fbe097125404b8b8f7179e03ed46ebf79816d7b326202c5055bef9975772d = $this->env->getExtension("native_profiler");
        $__internal_395fbe097125404b8b8f7179e03ed46ebf79816d7b326202c5055bef9975772d->enter($__internal_395fbe097125404b8b8f7179e03ed46ebf79816d7b326202c5055bef9975772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_395fbe097125404b8b8f7179e03ed46ebf79816d7b326202c5055bef9975772d->leave($__internal_395fbe097125404b8b8f7179e03ed46ebf79816d7b326202c5055bef9975772d_prof);

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
