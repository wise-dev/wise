<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_756db98a9f93a271fb98afe665bf185db15b58f1f785de461da818b44963c045 extends Twig_Template
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
        $__internal_827bf1d92fc54830ae14684c44ede24a0372c0e70bec7501794a147d97e680e4 = $this->env->getExtension("native_profiler");
        $__internal_827bf1d92fc54830ae14684c44ede24a0372c0e70bec7501794a147d97e680e4->enter($__internal_827bf1d92fc54830ae14684c44ede24a0372c0e70bec7501794a147d97e680e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_827bf1d92fc54830ae14684c44ede24a0372c0e70bec7501794a147d97e680e4->leave($__internal_827bf1d92fc54830ae14684c44ede24a0372c0e70bec7501794a147d97e680e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
