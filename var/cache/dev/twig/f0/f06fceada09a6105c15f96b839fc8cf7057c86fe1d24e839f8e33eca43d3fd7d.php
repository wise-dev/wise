<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f822c86a1d6cbea144d6dffdebb3735c9fef86b996ab66c38c46eed7dfc87829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a5c391a2e919658cc33f28fe012e508cd2023b1b6eab9f30b5dd4400489074 = $this->env->getExtension("native_profiler");
        $__internal_60a5c391a2e919658cc33f28fe012e508cd2023b1b6eab9f30b5dd4400489074->enter($__internal_60a5c391a2e919658cc33f28fe012e508cd2023b1b6eab9f30b5dd4400489074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_60a5c391a2e919658cc33f28fe012e508cd2023b1b6eab9f30b5dd4400489074->leave($__internal_60a5c391a2e919658cc33f28fe012e508cd2023b1b6eab9f30b5dd4400489074_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c0df84ae5fcb53b0f79ac5e73607f6cb2de6d39ab55dcea3b20883ca061e0032 = $this->env->getExtension("native_profiler");
        $__internal_c0df84ae5fcb53b0f79ac5e73607f6cb2de6d39ab55dcea3b20883ca061e0032->enter($__internal_c0df84ae5fcb53b0f79ac5e73607f6cb2de6d39ab55dcea3b20883ca061e0032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c0df84ae5fcb53b0f79ac5e73607f6cb2de6d39ab55dcea3b20883ca061e0032->leave($__internal_c0df84ae5fcb53b0f79ac5e73607f6cb2de6d39ab55dcea3b20883ca061e0032_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d24b05977213ed2950032435d36a2ab62f4a35c10ee09f470f06e1e2abf69cf9 = $this->env->getExtension("native_profiler");
        $__internal_d24b05977213ed2950032435d36a2ab62f4a35c10ee09f470f06e1e2abf69cf9->enter($__internal_d24b05977213ed2950032435d36a2ab62f4a35c10ee09f470f06e1e2abf69cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d24b05977213ed2950032435d36a2ab62f4a35c10ee09f470f06e1e2abf69cf9->leave($__internal_d24b05977213ed2950032435d36a2ab62f4a35c10ee09f470f06e1e2abf69cf9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_81eace0be235c29bdc0fa4d0c70a1c028aaade262ba0032e274e5f7a4fefe3eb = $this->env->getExtension("native_profiler");
        $__internal_81eace0be235c29bdc0fa4d0c70a1c028aaade262ba0032e274e5f7a4fefe3eb->enter($__internal_81eace0be235c29bdc0fa4d0c70a1c028aaade262ba0032e274e5f7a4fefe3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_81eace0be235c29bdc0fa4d0c70a1c028aaade262ba0032e274e5f7a4fefe3eb->leave($__internal_81eace0be235c29bdc0fa4d0c70a1c028aaade262ba0032e274e5f7a4fefe3eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
