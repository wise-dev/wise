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
        $__internal_c8a3e1b268e5e8c72f2a8c87fc3a1e633e281f5a3bc6faae9c1da266b35a4698 = $this->env->getExtension("native_profiler");
        $__internal_c8a3e1b268e5e8c72f2a8c87fc3a1e633e281f5a3bc6faae9c1da266b35a4698->enter($__internal_c8a3e1b268e5e8c72f2a8c87fc3a1e633e281f5a3bc6faae9c1da266b35a4698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProfileBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a3e1b268e5e8c72f2a8c87fc3a1e633e281f5a3bc6faae9c1da266b35a4698->leave($__internal_c8a3e1b268e5e8c72f2a8c87fc3a1e633e281f5a3bc6faae9c1da266b35a4698_prof);

    }

    // line 3
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_7701d9fa480cc999632ed6771cec68acbae1c11ff0aa71dd175f5803aedd4f8e = $this->env->getExtension("native_profiler");
        $__internal_7701d9fa480cc999632ed6771cec68acbae1c11ff0aa71dd175f5803aedd4f8e->enter($__internal_7701d9fa480cc999632ed6771cec68acbae1c11ff0aa71dd175f5803aedd4f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Home";
        
        $__internal_7701d9fa480cc999632ed6771cec68acbae1c11ff0aa71dd175f5803aedd4f8e->leave($__internal_7701d9fa480cc999632ed6771cec68acbae1c11ff0aa71dd175f5803aedd4f8e_prof);

    }

    // line 5
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_5fe33135a62d05f5a427bc5bff46144ca1b58f829aa5a67a0e13fa750709d78b = $this->env->getExtension("native_profiler");
        $__internal_5fe33135a62d05f5a427bc5bff46144ca1b58f829aa5a67a0e13fa750709d78b->enter($__internal_5fe33135a62d05f5a427bc5bff46144ca1b58f829aa5a67a0e13fa750709d78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 6
        echo "    <span class=\"btn btn-bg\">NNNNNNN</span>
";
        
        $__internal_5fe33135a62d05f5a427bc5bff46144ca1b58f829aa5a67a0e13fa750709d78b->leave($__internal_5fe33135a62d05f5a427bc5bff46144ca1b58f829aa5a67a0e13fa750709d78b_prof);

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
