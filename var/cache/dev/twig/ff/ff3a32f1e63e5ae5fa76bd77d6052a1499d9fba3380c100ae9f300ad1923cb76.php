<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_481780243e65f73af40b21b2a0536bfc3208318a1cb448cebd5fdce5b2e055eb extends Twig_Template
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
        $__internal_8c0dea228ccddebaa9ca91518bd110a1da1761951548c98643ced16aa6b8e73c = $this->env->getExtension("native_profiler");
        $__internal_8c0dea228ccddebaa9ca91518bd110a1da1761951548c98643ced16aa6b8e73c->enter($__internal_8c0dea228ccddebaa9ca91518bd110a1da1761951548c98643ced16aa6b8e73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_8c0dea228ccddebaa9ca91518bd110a1da1761951548c98643ced16aa6b8e73c->leave($__internal_8c0dea228ccddebaa9ca91518bd110a1da1761951548c98643ced16aa6b8e73c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
