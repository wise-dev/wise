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
        $__internal_c5cc962d79100212598a9a8aa868888cc5a760cba3955c6099c0e8b1a62e5ef6 = $this->env->getExtension("native_profiler");
        $__internal_c5cc962d79100212598a9a8aa868888cc5a760cba3955c6099c0e8b1a62e5ef6->enter($__internal_c5cc962d79100212598a9a8aa868888cc5a760cba3955c6099c0e8b1a62e5ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5cc962d79100212598a9a8aa868888cc5a760cba3955c6099c0e8b1a62e5ef6->leave($__internal_c5cc962d79100212598a9a8aa868888cc5a760cba3955c6099c0e8b1a62e5ef6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ef04a15b10475d31a884576d8934e8628018a501011bdffb28b05d29491e9db = $this->env->getExtension("native_profiler");
        $__internal_5ef04a15b10475d31a884576d8934e8628018a501011bdffb28b05d29491e9db->enter($__internal_5ef04a15b10475d31a884576d8934e8628018a501011bdffb28b05d29491e9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ef04a15b10475d31a884576d8934e8628018a501011bdffb28b05d29491e9db->leave($__internal_5ef04a15b10475d31a884576d8934e8628018a501011bdffb28b05d29491e9db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a284230b7aff1402dc1a07dd69bd905d7ab272c58e6038eb26161463650f4eb = $this->env->getExtension("native_profiler");
        $__internal_5a284230b7aff1402dc1a07dd69bd905d7ab272c58e6038eb26161463650f4eb->enter($__internal_5a284230b7aff1402dc1a07dd69bd905d7ab272c58e6038eb26161463650f4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a284230b7aff1402dc1a07dd69bd905d7ab272c58e6038eb26161463650f4eb->leave($__internal_5a284230b7aff1402dc1a07dd69bd905d7ab272c58e6038eb26161463650f4eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c54ce1432c1960e1af46e98df5dd94281a40d20e028632d7a76d6e16ad2edaa = $this->env->getExtension("native_profiler");
        $__internal_3c54ce1432c1960e1af46e98df5dd94281a40d20e028632d7a76d6e16ad2edaa->enter($__internal_3c54ce1432c1960e1af46e98df5dd94281a40d20e028632d7a76d6e16ad2edaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c54ce1432c1960e1af46e98df5dd94281a40d20e028632d7a76d6e16ad2edaa->leave($__internal_3c54ce1432c1960e1af46e98df5dd94281a40d20e028632d7a76d6e16ad2edaa_prof);

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
