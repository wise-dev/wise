<?php

/* @WiseProfile/Resetting/reset_content.html.twig */
class __TwigTemplate_a0060c0b1cd155de2c4ee7f34339e645b9d8935bf0d3822ed70e0b95983c3f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31837338279fa7c794479f23ea1ffe8be3c8475d7ac6b7e72610500d6c1b1ded = $this->env->getExtension("native_profiler");
        $__internal_31837338279fa7c794479f23ea1ffe8be3c8475d7ac6b7e72610500d6c1b1ded->enter($__internal_31837338279fa7c794479f23ea1ffe8be3c8475d7ac6b7e72610500d6c1b1ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_31837338279fa7c794479f23ea1ffe8be3c8475d7ac6b7e72610500d6c1b1ded->leave($__internal_31837338279fa7c794479f23ea1ffe8be3c8475d7ac6b7e72610500d6c1b1ded_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
