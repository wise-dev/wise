<?php

/* @WiseProfile/Group/edit_content.html.twig */
class __TwigTemplate_1f66c458e6bea8131a9a9a985452cb4295287d22b4a67d75230e543fb2c6f565 extends Twig_Template
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
        $__internal_42a08254f36eaff3dcce64ec36a126dad308bac9979c8b19cce03456ec5fedc2 = $this->env->getExtension("native_profiler");
        $__internal_42a08254f36eaff3dcce64ec36a126dad308bac9979c8b19cce03456ec5fedc2->enter($__internal_42a08254f36eaff3dcce64ec36a126dad308bac9979c8b19cce03456ec5fedc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_42a08254f36eaff3dcce64ec36a126dad308bac9979c8b19cce03456ec5fedc2->leave($__internal_42a08254f36eaff3dcce64ec36a126dad308bac9979c8b19cce03456ec5fedc2_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Group/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
