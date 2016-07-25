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
        $__internal_17003d5bff4d7140675dae8310aa5aee57f25388dcd9f5178923a50de3306640 = $this->env->getExtension("native_profiler");
        $__internal_17003d5bff4d7140675dae8310aa5aee57f25388dcd9f5178923a50de3306640->enter($__internal_17003d5bff4d7140675dae8310aa5aee57f25388dcd9f5178923a50de3306640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_17003d5bff4d7140675dae8310aa5aee57f25388dcd9f5178923a50de3306640->leave($__internal_17003d5bff4d7140675dae8310aa5aee57f25388dcd9f5178923a50de3306640_prof);

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
