<?php

/* @Profile/Default/index.html.twig */
class __TwigTemplate_9dfadc62551f219e39919833b40360c6e1fc9214dc42a405ca7bd7f42499e4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Profile/Default/index.html.twig", 1);
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
        $__internal_e4d8d85bc44c743ce95844778c1075ac5e7cdab1ddb4324d7ee538b290ab29e5 = $this->env->getExtension("native_profiler");
        $__internal_e4d8d85bc44c743ce95844778c1075ac5e7cdab1ddb4324d7ee538b290ab29e5->enter($__internal_e4d8d85bc44c743ce95844778c1075ac5e7cdab1ddb4324d7ee538b290ab29e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Profile/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d8d85bc44c743ce95844778c1075ac5e7cdab1ddb4324d7ee538b290ab29e5->leave($__internal_e4d8d85bc44c743ce95844778c1075ac5e7cdab1ddb4324d7ee538b290ab29e5_prof);

    }

    // line 3
    public function block_wiseTitle($context, array $blocks = array())
    {
        $__internal_e979cba5cb0feb92b0b398ef7b81815e36a9928cbefe7ae8367d6e991cbe7594 = $this->env->getExtension("native_profiler");
        $__internal_e979cba5cb0feb92b0b398ef7b81815e36a9928cbefe7ae8367d6e991cbe7594->enter($__internal_e979cba5cb0feb92b0b398ef7b81815e36a9928cbefe7ae8367d6e991cbe7594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseTitle"));

        echo "Home";
        
        $__internal_e979cba5cb0feb92b0b398ef7b81815e36a9928cbefe7ae8367d6e991cbe7594->leave($__internal_e979cba5cb0feb92b0b398ef7b81815e36a9928cbefe7ae8367d6e991cbe7594_prof);

    }

    // line 5
    public function block_wiseBody($context, array $blocks = array())
    {
        $__internal_8f459b1ba176c804ec10ef4b98479197a18433c1572526471ece820f8d9b6670 = $this->env->getExtension("native_profiler");
        $__internal_8f459b1ba176c804ec10ef4b98479197a18433c1572526471ece820f8d9b6670->enter($__internal_8f459b1ba176c804ec10ef4b98479197a18433c1572526471ece820f8d9b6670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wiseBody"));

        // line 6
        echo "    <span class=\"btn btn-bg\">NNNNNNN</span>
";
        
        $__internal_8f459b1ba176c804ec10ef4b98479197a18433c1572526471ece820f8d9b6670->leave($__internal_8f459b1ba176c804ec10ef4b98479197a18433c1572526471ece820f8d9b6670_prof);

    }

    public function getTemplateName()
    {
        return "@Profile/Default/index.html.twig";
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
