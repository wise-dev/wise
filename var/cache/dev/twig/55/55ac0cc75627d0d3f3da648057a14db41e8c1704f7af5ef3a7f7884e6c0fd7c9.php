<?php

/* WiseProfileBundle:Group:show_content.html.twig */
class __TwigTemplate_6b374d2dfa59f3b1275c8874dd8bf8951e903bbc76ae2cbd6ed792d48b92ba0c extends Twig_Template
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
        $__internal_1324abd22fff4d63f95a508f3a658291f057833a59624710fb0ecfdf16c4ecaf = $this->env->getExtension("native_profiler");
        $__internal_1324abd22fff4d63f95a508f3a658291f057833a59624710fb0ecfdf16c4ecaf->enter($__internal_1324abd22fff4d63f95a508f3a658291f057833a59624710fb0ecfdf16c4ecaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Group:show_content.html.twig"));

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
        
        $__internal_1324abd22fff4d63f95a508f3a658291f057833a59624710fb0ecfdf16c4ecaf->leave($__internal_1324abd22fff4d63f95a508f3a658291f057833a59624710fb0ecfdf16c4ecaf_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Group:show_content.html.twig";
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
