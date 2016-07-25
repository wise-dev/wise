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
        $__internal_84730ea77491f860af7913c0363bc4a559bc6321323191f0821ac579bd733b2c = $this->env->getExtension("native_profiler");
        $__internal_84730ea77491f860af7913c0363bc4a559bc6321323191f0821ac579bd733b2c->enter($__internal_84730ea77491f860af7913c0363bc4a559bc6321323191f0821ac579bd733b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84730ea77491f860af7913c0363bc4a559bc6321323191f0821ac579bd733b2c->leave($__internal_84730ea77491f860af7913c0363bc4a559bc6321323191f0821ac579bd733b2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9048e7c300891356ec958e688f45d65749321a1d2cff292fe338a9591ab929c9 = $this->env->getExtension("native_profiler");
        $__internal_9048e7c300891356ec958e688f45d65749321a1d2cff292fe338a9591ab929c9->enter($__internal_9048e7c300891356ec958e688f45d65749321a1d2cff292fe338a9591ab929c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9048e7c300891356ec958e688f45d65749321a1d2cff292fe338a9591ab929c9->leave($__internal_9048e7c300891356ec958e688f45d65749321a1d2cff292fe338a9591ab929c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad45a07883da8abe2641fd96fa60b43851cd27eec88cf95c68885fabedbbb1de = $this->env->getExtension("native_profiler");
        $__internal_ad45a07883da8abe2641fd96fa60b43851cd27eec88cf95c68885fabedbbb1de->enter($__internal_ad45a07883da8abe2641fd96fa60b43851cd27eec88cf95c68885fabedbbb1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad45a07883da8abe2641fd96fa60b43851cd27eec88cf95c68885fabedbbb1de->leave($__internal_ad45a07883da8abe2641fd96fa60b43851cd27eec88cf95c68885fabedbbb1de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95b6529a9da93d3e75c4911256d22ca28c979b55cb1b266bb917e9ff1267be29 = $this->env->getExtension("native_profiler");
        $__internal_95b6529a9da93d3e75c4911256d22ca28c979b55cb1b266bb917e9ff1267be29->enter($__internal_95b6529a9da93d3e75c4911256d22ca28c979b55cb1b266bb917e9ff1267be29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_95b6529a9da93d3e75c4911256d22ca28c979b55cb1b266bb917e9ff1267be29->leave($__internal_95b6529a9da93d3e75c4911256d22ca28c979b55cb1b266bb917e9ff1267be29_prof);

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
