<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb42ae077172cadf2ad6e14cf54eb2e5a447fd9962644f1b7094b2d49e246061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_027808541fd07b3140291f3752de8f853bfe166b8398cc13830f56c50db80bc9 = $this->env->getExtension("native_profiler");
        $__internal_027808541fd07b3140291f3752de8f853bfe166b8398cc13830f56c50db80bc9->enter($__internal_027808541fd07b3140291f3752de8f853bfe166b8398cc13830f56c50db80bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027808541fd07b3140291f3752de8f853bfe166b8398cc13830f56c50db80bc9->leave($__internal_027808541fd07b3140291f3752de8f853bfe166b8398cc13830f56c50db80bc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a801c8dbbf5296c3e6c5afd5ab24e13549f3261c1925c0b4884a28827096700 = $this->env->getExtension("native_profiler");
        $__internal_9a801c8dbbf5296c3e6c5afd5ab24e13549f3261c1925c0b4884a28827096700->enter($__internal_9a801c8dbbf5296c3e6c5afd5ab24e13549f3261c1925c0b4884a28827096700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9a801c8dbbf5296c3e6c5afd5ab24e13549f3261c1925c0b4884a28827096700->leave($__internal_9a801c8dbbf5296c3e6c5afd5ab24e13549f3261c1925c0b4884a28827096700_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fd64591cf364106eb75fafc59ebaeaf91a2c928cdf4ba6c75883f12c2d836f5 = $this->env->getExtension("native_profiler");
        $__internal_4fd64591cf364106eb75fafc59ebaeaf91a2c928cdf4ba6c75883f12c2d836f5->enter($__internal_4fd64591cf364106eb75fafc59ebaeaf91a2c928cdf4ba6c75883f12c2d836f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4fd64591cf364106eb75fafc59ebaeaf91a2c928cdf4ba6c75883f12c2d836f5->leave($__internal_4fd64591cf364106eb75fafc59ebaeaf91a2c928cdf4ba6c75883f12c2d836f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_31aa3d1ee2b9bf5a60cba47e4107f63b41bc4c437bc59ee4a41e343f478ad449 = $this->env->getExtension("native_profiler");
        $__internal_31aa3d1ee2b9bf5a60cba47e4107f63b41bc4c437bc59ee4a41e343f478ad449->enter($__internal_31aa3d1ee2b9bf5a60cba47e4107f63b41bc4c437bc59ee4a41e343f478ad449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_31aa3d1ee2b9bf5a60cba47e4107f63b41bc4c437bc59ee4a41e343f478ad449->leave($__internal_31aa3d1ee2b9bf5a60cba47e4107f63b41bc4c437bc59ee4a41e343f478ad449_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
