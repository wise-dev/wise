<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f2a4b4d8d6b8ecfc5991208600810ffdd78a42dfc714f0862ee4a7a65cc5b34f extends Twig_Template
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
        $__internal_ace813e2c32be730513a8161e166c68c9a098ad2366a8842f8ebf42e1e6c3446 = $this->env->getExtension("native_profiler");
        $__internal_ace813e2c32be730513a8161e166c68c9a098ad2366a8842f8ebf42e1e6c3446->enter($__internal_ace813e2c32be730513a8161e166c68c9a098ad2366a8842f8ebf42e1e6c3446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ace813e2c32be730513a8161e166c68c9a098ad2366a8842f8ebf42e1e6c3446->leave($__internal_ace813e2c32be730513a8161e166c68c9a098ad2366a8842f8ebf42e1e6c3446_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
