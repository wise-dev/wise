<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_93a51c0f378a3d2e16845e9eba31002ca0ba72aae90376669795aeec8e48e147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9ef0a33d2c0beeb801c01030d230365c8fd6c6319b258fa4343a90591ded01f = $this->env->getExtension("native_profiler");
        $__internal_d9ef0a33d2c0beeb801c01030d230365c8fd6c6319b258fa4343a90591ded01f->enter($__internal_d9ef0a33d2c0beeb801c01030d230365c8fd6c6319b258fa4343a90591ded01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9ef0a33d2c0beeb801c01030d230365c8fd6c6319b258fa4343a90591ded01f->leave($__internal_d9ef0a33d2c0beeb801c01030d230365c8fd6c6319b258fa4343a90591ded01f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c592db7fae2892e0408e86ead086cc4a7be4e398cef9fea77467e68e78c73a4 = $this->env->getExtension("native_profiler");
        $__internal_7c592db7fae2892e0408e86ead086cc4a7be4e398cef9fea77467e68e78c73a4->enter($__internal_7c592db7fae2892e0408e86ead086cc4a7be4e398cef9fea77467e68e78c73a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c592db7fae2892e0408e86ead086cc4a7be4e398cef9fea77467e68e78c73a4->leave($__internal_7c592db7fae2892e0408e86ead086cc4a7be4e398cef9fea77467e68e78c73a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff5b12b7d939d56001fefc609bf615f9a780387b72c2b974f4ed160967c69271 = $this->env->getExtension("native_profiler");
        $__internal_ff5b12b7d939d56001fefc609bf615f9a780387b72c2b974f4ed160967c69271->enter($__internal_ff5b12b7d939d56001fefc609bf615f9a780387b72c2b974f4ed160967c69271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff5b12b7d939d56001fefc609bf615f9a780387b72c2b974f4ed160967c69271->leave($__internal_ff5b12b7d939d56001fefc609bf615f9a780387b72c2b974f4ed160967c69271_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3261365b547d1b58c6b24af6f08c3f672fcd2231f483513499a415897f6d94c4 = $this->env->getExtension("native_profiler");
        $__internal_3261365b547d1b58c6b24af6f08c3f672fcd2231f483513499a415897f6d94c4->enter($__internal_3261365b547d1b58c6b24af6f08c3f672fcd2231f483513499a415897f6d94c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3261365b547d1b58c6b24af6f08c3f672fcd2231f483513499a415897f6d94c4->leave($__internal_3261365b547d1b58c6b24af6f08c3f672fcd2231f483513499a415897f6d94c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
