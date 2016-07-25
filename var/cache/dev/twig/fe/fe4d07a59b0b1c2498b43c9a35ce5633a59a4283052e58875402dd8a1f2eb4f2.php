<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a0523dd7b8517febcf741190c85e7314138761128db01b1a0fcd7e98355d9d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_465afbc6afc99f19a0021bdbac04213583917636c44067d1fcc5b8696a1c3c83 = $this->env->getExtension("native_profiler");
        $__internal_465afbc6afc99f19a0021bdbac04213583917636c44067d1fcc5b8696a1c3c83->enter($__internal_465afbc6afc99f19a0021bdbac04213583917636c44067d1fcc5b8696a1c3c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465afbc6afc99f19a0021bdbac04213583917636c44067d1fcc5b8696a1c3c83->leave($__internal_465afbc6afc99f19a0021bdbac04213583917636c44067d1fcc5b8696a1c3c83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c26b2189cd5d0b0ba30573824fa84d311dee82961d2b59111db6d711b63f12bd = $this->env->getExtension("native_profiler");
        $__internal_c26b2189cd5d0b0ba30573824fa84d311dee82961d2b59111db6d711b63f12bd->enter($__internal_c26b2189cd5d0b0ba30573824fa84d311dee82961d2b59111db6d711b63f12bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c26b2189cd5d0b0ba30573824fa84d311dee82961d2b59111db6d711b63f12bd->leave($__internal_c26b2189cd5d0b0ba30573824fa84d311dee82961d2b59111db6d711b63f12bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a0fe42231eb8b13eb4c8cf9a6ae6972658445a2f6b07e8ce4b570f2596fbd5c = $this->env->getExtension("native_profiler");
        $__internal_5a0fe42231eb8b13eb4c8cf9a6ae6972658445a2f6b07e8ce4b570f2596fbd5c->enter($__internal_5a0fe42231eb8b13eb4c8cf9a6ae6972658445a2f6b07e8ce4b570f2596fbd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5a0fe42231eb8b13eb4c8cf9a6ae6972658445a2f6b07e8ce4b570f2596fbd5c->leave($__internal_5a0fe42231eb8b13eb4c8cf9a6ae6972658445a2f6b07e8ce4b570f2596fbd5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
