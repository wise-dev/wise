<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e30e277cf7e1dda6535adb80dcc1b871b55180e3b4e183eb0127554bb45de771 extends Twig_Template
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
        $__internal_5f956e0b4f4bd7a4cf290ea01787b2baf54a5af2828a38321d5ff20297d4ef6e = $this->env->getExtension("native_profiler");
        $__internal_5f956e0b4f4bd7a4cf290ea01787b2baf54a5af2828a38321d5ff20297d4ef6e->enter($__internal_5f956e0b4f4bd7a4cf290ea01787b2baf54a5af2828a38321d5ff20297d4ef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5f956e0b4f4bd7a4cf290ea01787b2baf54a5af2828a38321d5ff20297d4ef6e->leave($__internal_5f956e0b4f4bd7a4cf290ea01787b2baf54a5af2828a38321d5ff20297d4ef6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
