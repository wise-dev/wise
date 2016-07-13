<?php

/* WiseProfileBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_815542cb1377a9af842bff5ad30e283255d7064ee06d1a586b74a5713cb06d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "WiseProfileBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_269f749e3c857736ab3e57a91926897c7e8f8158a08e6309fcd614069f251c16 = $this->env->getExtension("native_profiler");
        $__internal_269f749e3c857736ab3e57a91926897c7e8f8158a08e6309fcd614069f251c16->enter($__internal_269f749e3c857736ab3e57a91926897c7e8f8158a08e6309fcd614069f251c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_269f749e3c857736ab3e57a91926897c7e8f8158a08e6309fcd614069f251c16->leave($__internal_269f749e3c857736ab3e57a91926897c7e8f8158a08e6309fcd614069f251c16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_885adc8240f0e79573b05df1fe914954d03c74fa818c3eb51c3dab44f0254bcf = $this->env->getExtension("native_profiler");
        $__internal_885adc8240f0e79573b05df1fe914954d03c74fa818c3eb51c3dab44f0254bcf->enter($__internal_885adc8240f0e79573b05df1fe914954d03c74fa818c3eb51c3dab44f0254bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_885adc8240f0e79573b05df1fe914954d03c74fa818c3eb51c3dab44f0254bcf->leave($__internal_885adc8240f0e79573b05df1fe914954d03c74fa818c3eb51c3dab44f0254bcf_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Registration:checkEmail.html.twig";
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
