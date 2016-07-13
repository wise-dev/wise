<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_24388e816666e1a4f0eb0d0f9e9b1f67304dfde6516b9bb98fcd39df7f5fafa6 extends Twig_Template
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
        $__internal_0d486a5b439be2c0eee35acc7e002bfd9a1855646c0a6e28649d6630fe119031 = $this->env->getExtension("native_profiler");
        $__internal_0d486a5b439be2c0eee35acc7e002bfd9a1855646c0a6e28649d6630fe119031->enter($__internal_0d486a5b439be2c0eee35acc7e002bfd9a1855646c0a6e28649d6630fe119031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_0d486a5b439be2c0eee35acc7e002bfd9a1855646c0a6e28649d6630fe119031->leave($__internal_0d486a5b439be2c0eee35acc7e002bfd9a1855646c0a6e28649d6630fe119031_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
