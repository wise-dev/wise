<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2872020d5945d80e66bb9bfe00b26c5f658b0d43881b589e2e08a09b01740df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_3ba1c17137c54ea60d7212b85b88390740a31b9557118ab6194644ca6c2bbbfd = $this->env->getExtension("native_profiler");
        $__internal_3ba1c17137c54ea60d7212b85b88390740a31b9557118ab6194644ca6c2bbbfd->enter($__internal_3ba1c17137c54ea60d7212b85b88390740a31b9557118ab6194644ca6c2bbbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba1c17137c54ea60d7212b85b88390740a31b9557118ab6194644ca6c2bbbfd->leave($__internal_3ba1c17137c54ea60d7212b85b88390740a31b9557118ab6194644ca6c2bbbfd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5c1d789ebb8d882b8bff71c158ed3dbcc73385578f3be518751ca1b6d1edbc3 = $this->env->getExtension("native_profiler");
        $__internal_c5c1d789ebb8d882b8bff71c158ed3dbcc73385578f3be518751ca1b6d1edbc3->enter($__internal_c5c1d789ebb8d882b8bff71c158ed3dbcc73385578f3be518751ca1b6d1edbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c5c1d789ebb8d882b8bff71c158ed3dbcc73385578f3be518751ca1b6d1edbc3->leave($__internal_c5c1d789ebb8d882b8bff71c158ed3dbcc73385578f3be518751ca1b6d1edbc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
