<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_3b4e981d3376beefb198107b48fa986429ac2ed05ae1696d8ba33a0928943ecc extends Twig_Template
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
        $__internal_10ceea67136d904005f631ddf95868b3a05ada24bc59a69f57c7f9912e8e03b6 = $this->env->getExtension("native_profiler");
        $__internal_10ceea67136d904005f631ddf95868b3a05ada24bc59a69f57c7f9912e8e03b6->enter($__internal_10ceea67136d904005f631ddf95868b3a05ada24bc59a69f57c7f9912e8e03b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_10ceea67136d904005f631ddf95868b3a05ada24bc59a69f57c7f9912e8e03b6->leave($__internal_10ceea67136d904005f631ddf95868b3a05ada24bc59a69f57c7f9912e8e03b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
