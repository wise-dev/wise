<?php

/* ProfileBundle:Default:index.html.twig */
class __TwigTemplate_49a54b979c814a2fe3b7a81c4bd92894c3091c705cc2a76ab8c8683fffcd19bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ProfileBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'wiseTitle' => array($this, 'block_wiseTitle'),
            'wiseBody' => array($this, 'block_wiseBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6899aeb81c559b64dfcd3b9fad11be1edba703e50b983916b66e8adc5d3f9aa = $this->env->getExtension("native_profiler");
        $__internal_d6899aeb81c559b64dfcd3b9fad11be1edba703e50b983916b66e8adc5d3f9aa->enter($__internal_d6899aeb81c559b64dfcd3b9fad11be1edba703e50b983916b66e8adc5d3f9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfileBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6899aeb81c559b64dfcd3b9fad11be1edba703e50b983916b66e8adc5d3f9aa->leave($__internal_d6899aeb81c559b64dfcd3b9fad11be1edba703e50b983916b66e8adc5d3f9aa_prof);

    }

    // line 3
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_331baab23421858865aff7d434b1d1c365c08b25823b0a0c3271b0fd52936bb4 = $this->env->getExtension("native_profiler");
        $__internal_331baab23421858865aff7d434b1d1c365c08b25823b0a0c3271b0fd52936bb4->enter($__internal_331baab23421858865aff7d434b1d1c365c08b25823b0a0c3271b0fd52936bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Home";
        
        $__internal_331baab23421858865aff7d434b1d1c365c08b25823b0a0c3271b0fd52936bb4->leave($__internal_331baab23421858865aff7d434b1d1c365c08b25823b0a0c3271b0fd52936bb4_prof);

    }

    // line 5
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_4a9cd36ecdf6801b5564a6014f373ec2c45d019c60f8c1a209f1836b50863009 = $this->env->getExtension("native_profiler");
        $__internal_4a9cd36ecdf6801b5564a6014f373ec2c45d019c60f8c1a209f1836b50863009->enter($__internal_4a9cd36ecdf6801b5564a6014f373ec2c45d019c60f8c1a209f1836b50863009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 6
        echo "    <span class=\"btn btn-bg\">NNNNNNN</span>
";
        
        $__internal_4a9cd36ecdf6801b5564a6014f373ec2c45d019c60f8c1a209f1836b50863009->leave($__internal_4a9cd36ecdf6801b5564a6014f373ec2c45d019c60f8c1a209f1836b50863009_prof);

    }

    public function getTemplateName()
    {
        return "ProfileBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block wiseTitle %}Home{% endblock %}*/
/* */
/* {% block wiseBody %}*/
/*     <span class="btn btn-bg">NNNNNNN</span>*/
/* {% endblock %}*/
/* */
