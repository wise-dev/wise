<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ed173b1843458b2447a226e9ac0ec4bf988c0fcb56011f91864a3b129a757126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_439caa1598ca8ea44f051652a79573b30513bd4c7bc440f5ce7395613518c404 = $this->env->getExtension("native_profiler");
        $__internal_439caa1598ca8ea44f051652a79573b30513bd4c7bc440f5ce7395613518c404->enter($__internal_439caa1598ca8ea44f051652a79573b30513bd4c7bc440f5ce7395613518c404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_439caa1598ca8ea44f051652a79573b30513bd4c7bc440f5ce7395613518c404->leave($__internal_439caa1598ca8ea44f051652a79573b30513bd4c7bc440f5ce7395613518c404_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8ac8ad895c08c88da6ae17c416cc579b2eb18d5c5e3f2b66043a8d3045dad3f = $this->env->getExtension("native_profiler");
        $__internal_d8ac8ad895c08c88da6ae17c416cc579b2eb18d5c5e3f2b66043a8d3045dad3f->enter($__internal_d8ac8ad895c08c88da6ae17c416cc579b2eb18d5c5e3f2b66043a8d3045dad3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8ac8ad895c08c88da6ae17c416cc579b2eb18d5c5e3f2b66043a8d3045dad3f->leave($__internal_d8ac8ad895c08c88da6ae17c416cc579b2eb18d5c5e3f2b66043a8d3045dad3f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76ca4230c679fc3e5a756d5f6bb13ec28f303d3099d67bb498bd02db54bb6656 = $this->env->getExtension("native_profiler");
        $__internal_76ca4230c679fc3e5a756d5f6bb13ec28f303d3099d67bb498bd02db54bb6656->enter($__internal_76ca4230c679fc3e5a756d5f6bb13ec28f303d3099d67bb498bd02db54bb6656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76ca4230c679fc3e5a756d5f6bb13ec28f303d3099d67bb498bd02db54bb6656->leave($__internal_76ca4230c679fc3e5a756d5f6bb13ec28f303d3099d67bb498bd02db54bb6656_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2217ab913ecc14c40a0b0a5ec4b4d52df2c0163d6f2480657a6fddbb702c1406 = $this->env->getExtension("native_profiler");
        $__internal_2217ab913ecc14c40a0b0a5ec4b4d52df2c0163d6f2480657a6fddbb702c1406->enter($__internal_2217ab913ecc14c40a0b0a5ec4b4d52df2c0163d6f2480657a6fddbb702c1406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2217ab913ecc14c40a0b0a5ec4b4d52df2c0163d6f2480657a6fddbb702c1406->leave($__internal_2217ab913ecc14c40a0b0a5ec4b4d52df2c0163d6f2480657a6fddbb702c1406_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
