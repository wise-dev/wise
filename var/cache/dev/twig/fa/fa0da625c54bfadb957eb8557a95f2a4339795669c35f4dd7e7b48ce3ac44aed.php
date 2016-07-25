<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ec9f7c60e709352c50a9025e12e45fdcf2912e418452e53fcd56a868a6ef3a82 extends Twig_Template
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
        $__internal_99870ec3a3d75744ba264dd674f346abaaf0ea35eaf19fc7a2baf939dd866514 = $this->env->getExtension("native_profiler");
        $__internal_99870ec3a3d75744ba264dd674f346abaaf0ea35eaf19fc7a2baf939dd866514->enter($__internal_99870ec3a3d75744ba264dd674f346abaaf0ea35eaf19fc7a2baf939dd866514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_99870ec3a3d75744ba264dd674f346abaaf0ea35eaf19fc7a2baf939dd866514->leave($__internal_99870ec3a3d75744ba264dd674f346abaaf0ea35eaf19fc7a2baf939dd866514_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e43a934caf3bfcca75e7049019aee65e462a53ad468bd5c4f6cc8ef7c6f0afc8 = $this->env->getExtension("native_profiler");
        $__internal_e43a934caf3bfcca75e7049019aee65e462a53ad468bd5c4f6cc8ef7c6f0afc8->enter($__internal_e43a934caf3bfcca75e7049019aee65e462a53ad468bd5c4f6cc8ef7c6f0afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e43a934caf3bfcca75e7049019aee65e462a53ad468bd5c4f6cc8ef7c6f0afc8->leave($__internal_e43a934caf3bfcca75e7049019aee65e462a53ad468bd5c4f6cc8ef7c6f0afc8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e391c1bbd7dace1b8666b8d2b0ed7762683b6e546efbe8c05ddeac143c05082a = $this->env->getExtension("native_profiler");
        $__internal_e391c1bbd7dace1b8666b8d2b0ed7762683b6e546efbe8c05ddeac143c05082a->enter($__internal_e391c1bbd7dace1b8666b8d2b0ed7762683b6e546efbe8c05ddeac143c05082a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e391c1bbd7dace1b8666b8d2b0ed7762683b6e546efbe8c05ddeac143c05082a->leave($__internal_e391c1bbd7dace1b8666b8d2b0ed7762683b6e546efbe8c05ddeac143c05082a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a62aea040fa490715156dd24c5e373993de6fca10aef33736dc394c9c3ad5e5f = $this->env->getExtension("native_profiler");
        $__internal_a62aea040fa490715156dd24c5e373993de6fca10aef33736dc394c9c3ad5e5f->enter($__internal_a62aea040fa490715156dd24c5e373993de6fca10aef33736dc394c9c3ad5e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a62aea040fa490715156dd24c5e373993de6fca10aef33736dc394c9c3ad5e5f->leave($__internal_a62aea040fa490715156dd24c5e373993de6fca10aef33736dc394c9c3ad5e5f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
