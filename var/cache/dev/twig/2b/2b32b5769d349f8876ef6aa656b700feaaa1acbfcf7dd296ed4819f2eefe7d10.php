<?php

/* base.html.twig */
class __TwigTemplate_c3a38651a2a916dce8fecc342c38c38e4c1beeee4f3a530a24a1dee5165abe5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36f3f616b3770aa94c3cf219f6c8aec05ff71ade03941e98b37a57fd3f63b727 = $this->env->getExtension("native_profiler");
        $__internal_36f3f616b3770aa94c3cf219f6c8aec05ff71ade03941e98b37a57fd3f63b727->enter($__internal_36f3f616b3770aa94c3cf219f6c8aec05ff71ade03941e98b37a57fd3f63b727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_36f3f616b3770aa94c3cf219f6c8aec05ff71ade03941e98b37a57fd3f63b727->leave($__internal_36f3f616b3770aa94c3cf219f6c8aec05ff71ade03941e98b37a57fd3f63b727_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3cee5ed05b0d9e9280a4a0671a8477195d766b5a50f1521df4aa9d50cf1de84 = $this->env->getExtension("native_profiler");
        $__internal_f3cee5ed05b0d9e9280a4a0671a8477195d766b5a50f1521df4aa9d50cf1de84->enter($__internal_f3cee5ed05b0d9e9280a4a0671a8477195d766b5a50f1521df4aa9d50cf1de84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3cee5ed05b0d9e9280a4a0671a8477195d766b5a50f1521df4aa9d50cf1de84->leave($__internal_f3cee5ed05b0d9e9280a4a0671a8477195d766b5a50f1521df4aa9d50cf1de84_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_996938a74b93aad5b822976098d955c18037f5f5b3e6d02019c434a3fa93bc69 = $this->env->getExtension("native_profiler");
        $__internal_996938a74b93aad5b822976098d955c18037f5f5b3e6d02019c434a3fa93bc69->enter($__internal_996938a74b93aad5b822976098d955c18037f5f5b3e6d02019c434a3fa93bc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_996938a74b93aad5b822976098d955c18037f5f5b3e6d02019c434a3fa93bc69->leave($__internal_996938a74b93aad5b822976098d955c18037f5f5b3e6d02019c434a3fa93bc69_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_015739aaf127433e9a967b0f0f1695a7ceef46842173862b14b9380fc684cc66 = $this->env->getExtension("native_profiler");
        $__internal_015739aaf127433e9a967b0f0f1695a7ceef46842173862b14b9380fc684cc66->enter($__internal_015739aaf127433e9a967b0f0f1695a7ceef46842173862b14b9380fc684cc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_015739aaf127433e9a967b0f0f1695a7ceef46842173862b14b9380fc684cc66->leave($__internal_015739aaf127433e9a967b0f0f1695a7ceef46842173862b14b9380fc684cc66_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9ba2db87e0da3ab7fcc606f4e7011230ef30d479f38da1b0e01feca5d289add = $this->env->getExtension("native_profiler");
        $__internal_c9ba2db87e0da3ab7fcc606f4e7011230ef30d479f38da1b0e01feca5d289add->enter($__internal_c9ba2db87e0da3ab7fcc606f4e7011230ef30d479f38da1b0e01feca5d289add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c9ba2db87e0da3ab7fcc606f4e7011230ef30d479f38da1b0e01feca5d289add->leave($__internal_c9ba2db87e0da3ab7fcc606f4e7011230ef30d479f38da1b0e01feca5d289add_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
