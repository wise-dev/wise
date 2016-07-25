<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_35f4b7ac8af4f9981961aec665e3bf8dedc4c53ef550dcca7a2a60e60f88fae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_0f495814784de892e092f24bba08e98ecf85a6c8b1f954159e93aca947d9989c = $this->env->getExtension("native_profiler");
        $__internal_0f495814784de892e092f24bba08e98ecf85a6c8b1f954159e93aca947d9989c->enter($__internal_0f495814784de892e092f24bba08e98ecf85a6c8b1f954159e93aca947d9989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f495814784de892e092f24bba08e98ecf85a6c8b1f954159e93aca947d9989c->leave($__internal_0f495814784de892e092f24bba08e98ecf85a6c8b1f954159e93aca947d9989c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01407486bcd615fe8b9997dcf5ee17d53c43eaca76e58614ca12be506fe0984a = $this->env->getExtension("native_profiler");
        $__internal_01407486bcd615fe8b9997dcf5ee17d53c43eaca76e58614ca12be506fe0984a->enter($__internal_01407486bcd615fe8b9997dcf5ee17d53c43eaca76e58614ca12be506fe0984a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_01407486bcd615fe8b9997dcf5ee17d53c43eaca76e58614ca12be506fe0984a->leave($__internal_01407486bcd615fe8b9997dcf5ee17d53c43eaca76e58614ca12be506fe0984a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
