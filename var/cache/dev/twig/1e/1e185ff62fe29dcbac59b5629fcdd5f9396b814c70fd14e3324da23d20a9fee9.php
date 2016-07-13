<?php

/* @WiseProfile/Registration/checkEmail.html.twig */
class __TwigTemplate_16a0331f31c6fbbeb0e4a8f1c8a11eded5d86f88d4f0ff2156039368ede69f12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5969afe20141857607e68b86a1cd41b792cc92c2e4c7ffea69bcd267d3ff3a3 = $this->env->getExtension("native_profiler");
        $__internal_b5969afe20141857607e68b86a1cd41b792cc92c2e4c7ffea69bcd267d3ff3a3->enter($__internal_b5969afe20141857607e68b86a1cd41b792cc92c2e4c7ffea69bcd267d3ff3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5969afe20141857607e68b86a1cd41b792cc92c2e4c7ffea69bcd267d3ff3a3->leave($__internal_b5969afe20141857607e68b86a1cd41b792cc92c2e4c7ffea69bcd267d3ff3a3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da024d9160b2e1ef00a9729e8b3a6715b54c21b3f9b13f95b70f14747307d571 = $this->env->getExtension("native_profiler");
        $__internal_da024d9160b2e1ef00a9729e8b3a6715b54c21b3f9b13f95b70f14747307d571->enter($__internal_da024d9160b2e1ef00a9729e8b3a6715b54c21b3f9b13f95b70f14747307d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_da024d9160b2e1ef00a9729e8b3a6715b54c21b3f9b13f95b70f14747307d571->leave($__internal_da024d9160b2e1ef00a9729e8b3a6715b54c21b3f9b13f95b70f14747307d571_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
