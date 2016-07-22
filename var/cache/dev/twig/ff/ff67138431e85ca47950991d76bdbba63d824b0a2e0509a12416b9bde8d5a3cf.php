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
        $__internal_ae386cec98eba0f88b5d33b6eeec4f52867c6b93b51973f4eb14039036afbb1f = $this->env->getExtension("native_profiler");
        $__internal_ae386cec98eba0f88b5d33b6eeec4f52867c6b93b51973f4eb14039036afbb1f->enter($__internal_ae386cec98eba0f88b5d33b6eeec4f52867c6b93b51973f4eb14039036afbb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae386cec98eba0f88b5d33b6eeec4f52867c6b93b51973f4eb14039036afbb1f->leave($__internal_ae386cec98eba0f88b5d33b6eeec4f52867c6b93b51973f4eb14039036afbb1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b4936bc928d1f19d7ac9799886fca43886f373855f3ad09fc8008f5305313d0 = $this->env->getExtension("native_profiler");
        $__internal_3b4936bc928d1f19d7ac9799886fca43886f373855f3ad09fc8008f5305313d0->enter($__internal_3b4936bc928d1f19d7ac9799886fca43886f373855f3ad09fc8008f5305313d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b4936bc928d1f19d7ac9799886fca43886f373855f3ad09fc8008f5305313d0->leave($__internal_3b4936bc928d1f19d7ac9799886fca43886f373855f3ad09fc8008f5305313d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3513813a3b334b020a7ed41eae63a099247fef7ac035a23bb6d638d7ab1842fe = $this->env->getExtension("native_profiler");
        $__internal_3513813a3b334b020a7ed41eae63a099247fef7ac035a23bb6d638d7ab1842fe->enter($__internal_3513813a3b334b020a7ed41eae63a099247fef7ac035a23bb6d638d7ab1842fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3513813a3b334b020a7ed41eae63a099247fef7ac035a23bb6d638d7ab1842fe->leave($__internal_3513813a3b334b020a7ed41eae63a099247fef7ac035a23bb6d638d7ab1842fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6bec07f9cb22e2a0e8efa35d1f787f47c48d1fb6c4a49000d3e3c59301a12f2 = $this->env->getExtension("native_profiler");
        $__internal_c6bec07f9cb22e2a0e8efa35d1f787f47c48d1fb6c4a49000d3e3c59301a12f2->enter($__internal_c6bec07f9cb22e2a0e8efa35d1f787f47c48d1fb6c4a49000d3e3c59301a12f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6bec07f9cb22e2a0e8efa35d1f787f47c48d1fb6c4a49000d3e3c59301a12f2->leave($__internal_c6bec07f9cb22e2a0e8efa35d1f787f47c48d1fb6c4a49000d3e3c59301a12f2_prof);

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
