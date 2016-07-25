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
        $__internal_d120711a37420e8668ba517684c9de5c551e07c371c786f65dd122289d89c7ed = $this->env->getExtension("native_profiler");
        $__internal_d120711a37420e8668ba517684c9de5c551e07c371c786f65dd122289d89c7ed->enter($__internal_d120711a37420e8668ba517684c9de5c551e07c371c786f65dd122289d89c7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d120711a37420e8668ba517684c9de5c551e07c371c786f65dd122289d89c7ed->leave($__internal_d120711a37420e8668ba517684c9de5c551e07c371c786f65dd122289d89c7ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9e81ed0fff80461c12bd613c4b7a751c6d8bcadfe050cf5c52e831f8d20498f = $this->env->getExtension("native_profiler");
        $__internal_a9e81ed0fff80461c12bd613c4b7a751c6d8bcadfe050cf5c52e831f8d20498f->enter($__internal_a9e81ed0fff80461c12bd613c4b7a751c6d8bcadfe050cf5c52e831f8d20498f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a9e81ed0fff80461c12bd613c4b7a751c6d8bcadfe050cf5c52e831f8d20498f->leave($__internal_a9e81ed0fff80461c12bd613c4b7a751c6d8bcadfe050cf5c52e831f8d20498f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5bb1786d44ed5869fa385381b5d337f4c4995db08cb7298f239d1df5d3b9626 = $this->env->getExtension("native_profiler");
        $__internal_e5bb1786d44ed5869fa385381b5d337f4c4995db08cb7298f239d1df5d3b9626->enter($__internal_e5bb1786d44ed5869fa385381b5d337f4c4995db08cb7298f239d1df5d3b9626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e5bb1786d44ed5869fa385381b5d337f4c4995db08cb7298f239d1df5d3b9626->leave($__internal_e5bb1786d44ed5869fa385381b5d337f4c4995db08cb7298f239d1df5d3b9626_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d134938a5a13e0d1508905374947a40d3f143e0f7fc3534237d65d2165f5c77d = $this->env->getExtension("native_profiler");
        $__internal_d134938a5a13e0d1508905374947a40d3f143e0f7fc3534237d65d2165f5c77d->enter($__internal_d134938a5a13e0d1508905374947a40d3f143e0f7fc3534237d65d2165f5c77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d134938a5a13e0d1508905374947a40d3f143e0f7fc3534237d65d2165f5c77d->leave($__internal_d134938a5a13e0d1508905374947a40d3f143e0f7fc3534237d65d2165f5c77d_prof);

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
