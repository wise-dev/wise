<?php

/* @WiseProfile/Group/show_content.html.twig */
class __TwigTemplate_4d5112cb1f9d7b603a155951e9e50aa10c1011607865bc5279f7d6fe7e61dd0a extends Twig_Template
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
        $__internal_0a81eb716b2a81f1ac20800cebdec8944026bf268b0d2e32566b67d8c5da79c6 = $this->env->getExtension("native_profiler");
        $__internal_0a81eb716b2a81f1ac20800cebdec8944026bf268b0d2e32566b67d8c5da79c6->enter($__internal_0a81eb716b2a81f1ac20800cebdec8944026bf268b0d2e32566b67d8c5da79c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0a81eb716b2a81f1ac20800cebdec8944026bf268b0d2e32566b67d8c5da79c6->leave($__internal_0a81eb716b2a81f1ac20800cebdec8944026bf268b0d2e32566b67d8c5da79c6_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
