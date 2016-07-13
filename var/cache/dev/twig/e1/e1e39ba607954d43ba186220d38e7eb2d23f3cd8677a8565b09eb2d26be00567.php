<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cd69148ec7f732b0c783ebeb5fed38cc0cec79c5eff22d8c5e1b15904c0427f4 extends Twig_Template
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
        $__internal_b6b478598568e27ca8c0dab7139b03535563b5b1e3a576466bd7936f56c97bae = $this->env->getExtension("native_profiler");
        $__internal_b6b478598568e27ca8c0dab7139b03535563b5b1e3a576466bd7936f56c97bae->enter($__internal_b6b478598568e27ca8c0dab7139b03535563b5b1e3a576466bd7936f56c97bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b6b478598568e27ca8c0dab7139b03535563b5b1e3a576466bd7936f56c97bae->leave($__internal_b6b478598568e27ca8c0dab7139b03535563b5b1e3a576466bd7936f56c97bae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
