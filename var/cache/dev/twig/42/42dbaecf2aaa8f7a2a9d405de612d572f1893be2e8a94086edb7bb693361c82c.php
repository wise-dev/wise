<?php

/* ::base.html.twig */
class __TwigTemplate_096533e8595e1d0848208bc0f65c66303acd21720c5fd9b43e7c17af204a77ac extends Twig_Template
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
        $__internal_7df73a4037e55b9dde88906d944a09c515d0f5e69bf3b8a34510e1e72571c09d = $this->env->getExtension("native_profiler");
        $__internal_7df73a4037e55b9dde88906d944a09c515d0f5e69bf3b8a34510e1e72571c09d->enter($__internal_7df73a4037e55b9dde88906d944a09c515d0f5e69bf3b8a34510e1e72571c09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7df73a4037e55b9dde88906d944a09c515d0f5e69bf3b8a34510e1e72571c09d->leave($__internal_7df73a4037e55b9dde88906d944a09c515d0f5e69bf3b8a34510e1e72571c09d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac2dd23e5018dcd4312bf228e61b0e5f3d4ee4f8dd98e28794a3fabea0124d2c = $this->env->getExtension("native_profiler");
        $__internal_ac2dd23e5018dcd4312bf228e61b0e5f3d4ee4f8dd98e28794a3fabea0124d2c->enter($__internal_ac2dd23e5018dcd4312bf228e61b0e5f3d4ee4f8dd98e28794a3fabea0124d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ac2dd23e5018dcd4312bf228e61b0e5f3d4ee4f8dd98e28794a3fabea0124d2c->leave($__internal_ac2dd23e5018dcd4312bf228e61b0e5f3d4ee4f8dd98e28794a3fabea0124d2c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_defe49a4460763299dd0161956281ce3b9eaf19c1cdd6a35632348cce844b88c = $this->env->getExtension("native_profiler");
        $__internal_defe49a4460763299dd0161956281ce3b9eaf19c1cdd6a35632348cce844b88c->enter($__internal_defe49a4460763299dd0161956281ce3b9eaf19c1cdd6a35632348cce844b88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_defe49a4460763299dd0161956281ce3b9eaf19c1cdd6a35632348cce844b88c->leave($__internal_defe49a4460763299dd0161956281ce3b9eaf19c1cdd6a35632348cce844b88c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_55296ee58f70227116577a4b741a7a4e95f56364f844a2e9e6101520265b8f36 = $this->env->getExtension("native_profiler");
        $__internal_55296ee58f70227116577a4b741a7a4e95f56364f844a2e9e6101520265b8f36->enter($__internal_55296ee58f70227116577a4b741a7a4e95f56364f844a2e9e6101520265b8f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55296ee58f70227116577a4b741a7a4e95f56364f844a2e9e6101520265b8f36->leave($__internal_55296ee58f70227116577a4b741a7a4e95f56364f844a2e9e6101520265b8f36_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e1b37dae1cfae653f048308f080e891e6fb40e2bea8036259b1f81877f98f4c = $this->env->getExtension("native_profiler");
        $__internal_1e1b37dae1cfae653f048308f080e891e6fb40e2bea8036259b1f81877f98f4c->enter($__internal_1e1b37dae1cfae653f048308f080e891e6fb40e2bea8036259b1f81877f98f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1e1b37dae1cfae653f048308f080e891e6fb40e2bea8036259b1f81877f98f4c->leave($__internal_1e1b37dae1cfae653f048308f080e891e6fb40e2bea8036259b1f81877f98f4c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
