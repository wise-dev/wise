<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9a0f7670688f53401aa3109bede3d6ae17cb591c1f0a62a406eb09ac827ad56c extends Twig_Template
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
        $__internal_f5157ef0a51e6832d29d01297d0aa2b3c734390a8f8de0dc29e787410db9db7c = $this->env->getExtension("native_profiler");
        $__internal_f5157ef0a51e6832d29d01297d0aa2b3c734390a8f8de0dc29e787410db9db7c->enter($__internal_f5157ef0a51e6832d29d01297d0aa2b3c734390a8f8de0dc29e787410db9db7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f5157ef0a51e6832d29d01297d0aa2b3c734390a8f8de0dc29e787410db9db7c->leave($__internal_f5157ef0a51e6832d29d01297d0aa2b3c734390a8f8de0dc29e787410db9db7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
