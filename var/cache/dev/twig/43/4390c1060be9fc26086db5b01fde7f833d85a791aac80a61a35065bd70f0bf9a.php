<?php

/* @WiseProfile/Resetting/checkEmail.html.twig */
class __TwigTemplate_c2fb134eacc652754c8daff22fdfa0628eac3a2ffea3032c6364168eb9c52dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@WiseProfile/Resetting/checkEmail.html.twig", 1);
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
        $__internal_bb08626c05deb8384d973ab7f890cb0e785523c991e087ab15ae84b3f3f72332 = $this->env->getExtension("native_profiler");
        $__internal_bb08626c05deb8384d973ab7f890cb0e785523c991e087ab15ae84b3f3f72332->enter($__internal_bb08626c05deb8384d973ab7f890cb0e785523c991e087ab15ae84b3f3f72332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb08626c05deb8384d973ab7f890cb0e785523c991e087ab15ae84b3f3f72332->leave($__internal_bb08626c05deb8384d973ab7f890cb0e785523c991e087ab15ae84b3f3f72332_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51c1e94531bb67de160025ac3655142505311fb1ceda05501f711128615808be = $this->env->getExtension("native_profiler");
        $__internal_51c1e94531bb67de160025ac3655142505311fb1ceda05501f711128615808be->enter($__internal_51c1e94531bb67de160025ac3655142505311fb1ceda05501f711128615808be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_51c1e94531bb67de160025ac3655142505311fb1ceda05501f711128615808be->leave($__internal_51c1e94531bb67de160025ac3655142505311fb1ceda05501f711128615808be_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Resetting/checkEmail.html.twig";
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
