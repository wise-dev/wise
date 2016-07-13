<?php

/* WiseProfileBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_cab1a508c4216ad734733b7b08158865bf9e6233442357b9cad8b2847c005ea0 extends Twig_Template
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
        $__internal_7091d7975d9371f8e6326b7f9c48449ff16b89dbaaf848117dd82cbb7f720f0a = $this->env->getExtension("native_profiler");
        $__internal_7091d7975d9371f8e6326b7f9c48449ff16b89dbaaf848117dd82cbb7f720f0a->enter($__internal_7091d7975d9371f8e6326b7f9c48449ff16b89dbaaf848117dd82cbb7f720f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_7091d7975d9371f8e6326b7f9c48449ff16b89dbaaf848117dd82cbb7f720f0a->leave($__internal_7091d7975d9371f8e6326b7f9c48449ff16b89dbaaf848117dd82cbb7f720f0a_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:ChangePassword:changePassword_content.html.twig";
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
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
