<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ffde3a88e72d95fb78e254fc2c4c64b662fc61f866fa8baba5529ce1e54c51f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_4b08096f14e1088ffd885d99164dbfdb3f28ff4e07f4092feeab3a3af32c81b9 = $this->env->getExtension("native_profiler");
        $__internal_4b08096f14e1088ffd885d99164dbfdb3f28ff4e07f4092feeab3a3af32c81b9->enter($__internal_4b08096f14e1088ffd885d99164dbfdb3f28ff4e07f4092feeab3a3af32c81b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b08096f14e1088ffd885d99164dbfdb3f28ff4e07f4092feeab3a3af32c81b9->leave($__internal_4b08096f14e1088ffd885d99164dbfdb3f28ff4e07f4092feeab3a3af32c81b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52e4597df59d9f7f645de66f4398e3f7d06a5b77138c7bb1e3b48e2b8b2fab3d = $this->env->getExtension("native_profiler");
        $__internal_52e4597df59d9f7f645de66f4398e3f7d06a5b77138c7bb1e3b48e2b8b2fab3d->enter($__internal_52e4597df59d9f7f645de66f4398e3f7d06a5b77138c7bb1e3b48e2b8b2fab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_52e4597df59d9f7f645de66f4398e3f7d06a5b77138c7bb1e3b48e2b8b2fab3d->leave($__internal_52e4597df59d9f7f645de66f4398e3f7d06a5b77138c7bb1e3b48e2b8b2fab3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77e8de509793eccb33843c81f489145e0192fc517a42421c801bb1b747b04bb0 = $this->env->getExtension("native_profiler");
        $__internal_77e8de509793eccb33843c81f489145e0192fc517a42421c801bb1b747b04bb0->enter($__internal_77e8de509793eccb33843c81f489145e0192fc517a42421c801bb1b747b04bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77e8de509793eccb33843c81f489145e0192fc517a42421c801bb1b747b04bb0->leave($__internal_77e8de509793eccb33843c81f489145e0192fc517a42421c801bb1b747b04bb0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
