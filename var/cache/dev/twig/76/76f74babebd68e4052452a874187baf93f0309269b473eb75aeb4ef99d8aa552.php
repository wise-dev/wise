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
        $__internal_05c777262baac31a7ec7465080b27253c3e973e6ebf7f464cee2e481238bdbf5 = $this->env->getExtension("native_profiler");
        $__internal_05c777262baac31a7ec7465080b27253c3e973e6ebf7f464cee2e481238bdbf5->enter($__internal_05c777262baac31a7ec7465080b27253c3e973e6ebf7f464cee2e481238bdbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c777262baac31a7ec7465080b27253c3e973e6ebf7f464cee2e481238bdbf5->leave($__internal_05c777262baac31a7ec7465080b27253c3e973e6ebf7f464cee2e481238bdbf5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb47d057d3db51661d9c15e18a5606e9affab036e1ad621c56d1a096512564ea = $this->env->getExtension("native_profiler");
        $__internal_eb47d057d3db51661d9c15e18a5606e9affab036e1ad621c56d1a096512564ea->enter($__internal_eb47d057d3db51661d9c15e18a5606e9affab036e1ad621c56d1a096512564ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eb47d057d3db51661d9c15e18a5606e9affab036e1ad621c56d1a096512564ea->leave($__internal_eb47d057d3db51661d9c15e18a5606e9affab036e1ad621c56d1a096512564ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59429565e9141d21a64c1253c5f7809222dc030a9daf613ac12b1ff2cf962d54 = $this->env->getExtension("native_profiler");
        $__internal_59429565e9141d21a64c1253c5f7809222dc030a9daf613ac12b1ff2cf962d54->enter($__internal_59429565e9141d21a64c1253c5f7809222dc030a9daf613ac12b1ff2cf962d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59429565e9141d21a64c1253c5f7809222dc030a9daf613ac12b1ff2cf962d54->leave($__internal_59429565e9141d21a64c1253c5f7809222dc030a9daf613ac12b1ff2cf962d54_prof);

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
