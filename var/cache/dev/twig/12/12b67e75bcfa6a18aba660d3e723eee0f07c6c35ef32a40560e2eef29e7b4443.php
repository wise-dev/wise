<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5149c41367b21b7cd77e76e6aeb588bb3d362a310291a9a4c1dd00d90fa8b5b6 extends Twig_Template
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
        $__internal_573aa4759319e4c67ed1103c7f3d5616cbda0d6a03162767ec40b358a5e3d116 = $this->env->getExtension("native_profiler");
        $__internal_573aa4759319e4c67ed1103c7f3d5616cbda0d6a03162767ec40b358a5e3d116->enter($__internal_573aa4759319e4c67ed1103c7f3d5616cbda0d6a03162767ec40b358a5e3d116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_573aa4759319e4c67ed1103c7f3d5616cbda0d6a03162767ec40b358a5e3d116->leave($__internal_573aa4759319e4c67ed1103c7f3d5616cbda0d6a03162767ec40b358a5e3d116_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
