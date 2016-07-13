<?php

/* WiseProfileBundle:Profile:show_content.html.twig */
class __TwigTemplate_f60d6b35d9ff3d34bbbe004f851553a830f34b9d3586983f08d6ee9b66dd6f59 extends Twig_Template
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
        $__internal_86c4f46b67e67a457a68a1315e4b37e0e73a7735a07631e7bdd6c6d512a818b6 = $this->env->getExtension("native_profiler");
        $__internal_86c4f46b67e67a457a68a1315e4b37e0e73a7735a07631e7bdd6c6d512a818b6->enter($__internal_86c4f46b67e67a457a68a1315e4b37e0e73a7735a07631e7bdd6c6d512a818b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WiseProfileBundle:Profile:show_content.html.twig"));

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
        
        $__internal_86c4f46b67e67a457a68a1315e4b37e0e73a7735a07631e7bdd6c6d512a818b6->leave($__internal_86c4f46b67e67a457a68a1315e4b37e0e73a7735a07631e7bdd6c6d512a818b6_prof);

    }

    public function getTemplateName()
    {
        return "WiseProfileBundle:Profile:show_content.html.twig";
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
