<?php

/* @WiseProfile/Profile/show_content.html.twig */
class __TwigTemplate_ef835265b0f5652bf5d45f086bbcb170b9e5358ef8940ca1d874c2778480d33d extends Twig_Template
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
        $__internal_17c511646be4163cfc18ee2a991916a0be92ff01f61c40eaf9935e669b351bb9 = $this->env->getExtension("native_profiler");
        $__internal_17c511646be4163cfc18ee2a991916a0be92ff01f61c40eaf9935e669b351bb9->enter($__internal_17c511646be4163cfc18ee2a991916a0be92ff01f61c40eaf9935e669b351bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WiseProfile/Profile/show_content.html.twig"));

        // line 2
        echo "<img alt=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((("image/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())) . "/") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()))), "html", null, true);
        echo "\" width=200 hight=400 />
    <div class=\"fos_user_user_show\">  nnnnn
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>   
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>   
    <p>Description ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_17c511646be4163cfc18ee2a991916a0be92ff01f61c40eaf9935e669b351bb9->leave($__internal_17c511646be4163cfc18ee2a991916a0be92ff01f61c40eaf9935e669b351bb9_prof);

    }

    public function getTemplateName()
    {
        return "@WiseProfile/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  28 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <img alt="logo" src="{{ asset('image/' ~ user.id ~'/' ~ user.image)}}" width=200 hight=400 />*/
/*     <div class="fos_user_user_show">  nnnnn*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>   */
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>   */
/*     <p>Description {{ user.description }}</p>*/
/* </div>*/
