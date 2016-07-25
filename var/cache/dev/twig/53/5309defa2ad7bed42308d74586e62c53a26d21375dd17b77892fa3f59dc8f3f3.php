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
        $__internal_af1573a53310d483324d68ff246edd4e0cc92e92857d2732459cc074784b20be = $this->env->getExtension("native_profiler");
        $__internal_af1573a53310d483324d68ff246edd4e0cc92e92857d2732459cc074784b20be->enter($__internal_af1573a53310d483324d68ff246edd4e0cc92e92857d2732459cc074784b20be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af1573a53310d483324d68ff246edd4e0cc92e92857d2732459cc074784b20be->leave($__internal_af1573a53310d483324d68ff246edd4e0cc92e92857d2732459cc074784b20be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_902c3195ae84dee6fe5919a61fc85de2fd61a9fddc2b12f5e591f622ccf1beca = $this->env->getExtension("native_profiler");
        $__internal_902c3195ae84dee6fe5919a61fc85de2fd61a9fddc2b12f5e591f622ccf1beca->enter($__internal_902c3195ae84dee6fe5919a61fc85de2fd61a9fddc2b12f5e591f622ccf1beca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_902c3195ae84dee6fe5919a61fc85de2fd61a9fddc2b12f5e591f622ccf1beca->leave($__internal_902c3195ae84dee6fe5919a61fc85de2fd61a9fddc2b12f5e591f622ccf1beca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f022d58f258fb21df0c0c560f29999bb1b568d862508894a2e94d5cc97754de = $this->env->getExtension("native_profiler");
        $__internal_7f022d58f258fb21df0c0c560f29999bb1b568d862508894a2e94d5cc97754de->enter($__internal_7f022d58f258fb21df0c0c560f29999bb1b568d862508894a2e94d5cc97754de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7f022d58f258fb21df0c0c560f29999bb1b568d862508894a2e94d5cc97754de->leave($__internal_7f022d58f258fb21df0c0c560f29999bb1b568d862508894a2e94d5cc97754de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bbb9e8e322dca783cf0a8d45ce1d785d32000d7c7cfdf9272d2c8a7ef824614 = $this->env->getExtension("native_profiler");
        $__internal_0bbb9e8e322dca783cf0a8d45ce1d785d32000d7c7cfdf9272d2c8a7ef824614->enter($__internal_0bbb9e8e322dca783cf0a8d45ce1d785d32000d7c7cfdf9272d2c8a7ef824614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0bbb9e8e322dca783cf0a8d45ce1d785d32000d7c7cfdf9272d2c8a7ef824614->leave($__internal_0bbb9e8e322dca783cf0a8d45ce1d785d32000d7c7cfdf9272d2c8a7ef824614_prof);

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
