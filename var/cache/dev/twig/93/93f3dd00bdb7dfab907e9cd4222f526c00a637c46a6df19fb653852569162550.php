<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb42ae077172cadf2ad6e14cf54eb2e5a447fd9962644f1b7094b2d49e246061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fb7541313aec97dc9324a85d42e0487fd0b49e9c2d08fde4aa8000da572d613 = $this->env->getExtension("native_profiler");
        $__internal_4fb7541313aec97dc9324a85d42e0487fd0b49e9c2d08fde4aa8000da572d613->enter($__internal_4fb7541313aec97dc9324a85d42e0487fd0b49e9c2d08fde4aa8000da572d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fb7541313aec97dc9324a85d42e0487fd0b49e9c2d08fde4aa8000da572d613->leave($__internal_4fb7541313aec97dc9324a85d42e0487fd0b49e9c2d08fde4aa8000da572d613_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51c03d77f0113e93345f1f976e7762ac166bc7d39fa0311bf32fb2f3b11e8bc9 = $this->env->getExtension("native_profiler");
        $__internal_51c03d77f0113e93345f1f976e7762ac166bc7d39fa0311bf32fb2f3b11e8bc9->enter($__internal_51c03d77f0113e93345f1f976e7762ac166bc7d39fa0311bf32fb2f3b11e8bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51c03d77f0113e93345f1f976e7762ac166bc7d39fa0311bf32fb2f3b11e8bc9->leave($__internal_51c03d77f0113e93345f1f976e7762ac166bc7d39fa0311bf32fb2f3b11e8bc9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f445bcf8c0915508befda15f8ae010fe050bbfd5076225647a1079174f509a7c = $this->env->getExtension("native_profiler");
        $__internal_f445bcf8c0915508befda15f8ae010fe050bbfd5076225647a1079174f509a7c->enter($__internal_f445bcf8c0915508befda15f8ae010fe050bbfd5076225647a1079174f509a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f445bcf8c0915508befda15f8ae010fe050bbfd5076225647a1079174f509a7c->leave($__internal_f445bcf8c0915508befda15f8ae010fe050bbfd5076225647a1079174f509a7c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b2ac5da247209e07edbe44933d618505c5e9b5072657ca7b4b5e8062e92d19b = $this->env->getExtension("native_profiler");
        $__internal_8b2ac5da247209e07edbe44933d618505c5e9b5072657ca7b4b5e8062e92d19b->enter($__internal_8b2ac5da247209e07edbe44933d618505c5e9b5072657ca7b4b5e8062e92d19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8b2ac5da247209e07edbe44933d618505c5e9b5072657ca7b4b5e8062e92d19b->leave($__internal_8b2ac5da247209e07edbe44933d618505c5e9b5072657ca7b4b5e8062e92d19b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
