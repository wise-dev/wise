<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_36ff23520064705f00294afd733fc2e0f524ff47d46519bd92072e4f7c52de82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6bd5e87d70ae2e544227d58b0b4fdc71cfe9226c30e9b8f9cdb78ad44c49ee67 = $this->env->getExtension("native_profiler");
        $__internal_6bd5e87d70ae2e544227d58b0b4fdc71cfe9226c30e9b8f9cdb78ad44c49ee67->enter($__internal_6bd5e87d70ae2e544227d58b0b4fdc71cfe9226c30e9b8f9cdb78ad44c49ee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd5e87d70ae2e544227d58b0b4fdc71cfe9226c30e9b8f9cdb78ad44c49ee67->leave($__internal_6bd5e87d70ae2e544227d58b0b4fdc71cfe9226c30e9b8f9cdb78ad44c49ee67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a77995b0523f1ef2fe70e9956aab14c62f0a6081bd4e9d93e06dd43c0c9915cb = $this->env->getExtension("native_profiler");
        $__internal_a77995b0523f1ef2fe70e9956aab14c62f0a6081bd4e9d93e06dd43c0c9915cb->enter($__internal_a77995b0523f1ef2fe70e9956aab14c62f0a6081bd4e9d93e06dd43c0c9915cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a77995b0523f1ef2fe70e9956aab14c62f0a6081bd4e9d93e06dd43c0c9915cb->leave($__internal_a77995b0523f1ef2fe70e9956aab14c62f0a6081bd4e9d93e06dd43c0c9915cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4960bcf380c92b016908a6499d3c7e536180054662b969bbafefb2afda8bdb9 = $this->env->getExtension("native_profiler");
        $__internal_e4960bcf380c92b016908a6499d3c7e536180054662b969bbafefb2afda8bdb9->enter($__internal_e4960bcf380c92b016908a6499d3c7e536180054662b969bbafefb2afda8bdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4960bcf380c92b016908a6499d3c7e536180054662b969bbafefb2afda8bdb9->leave($__internal_e4960bcf380c92b016908a6499d3c7e536180054662b969bbafefb2afda8bdb9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_494a358dc923fc6935877d9540e041c91c2473012ecdce7cefee4ad0c0fad1d8 = $this->env->getExtension("native_profiler");
        $__internal_494a358dc923fc6935877d9540e041c91c2473012ecdce7cefee4ad0c0fad1d8->enter($__internal_494a358dc923fc6935877d9540e041c91c2473012ecdce7cefee4ad0c0fad1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_494a358dc923fc6935877d9540e041c91c2473012ecdce7cefee4ad0c0fad1d8->leave($__internal_494a358dc923fc6935877d9540e041c91c2473012ecdce7cefee4ad0c0fad1d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
