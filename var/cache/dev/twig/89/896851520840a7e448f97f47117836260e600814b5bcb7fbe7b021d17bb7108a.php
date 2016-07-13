<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_aa05b55fe2e8413ee2d1d261bda6feeb005ef0acb664240629eceebcf3e349f3 extends Twig_Template
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
        $__internal_f639db0b2fb79804dfa98f15376d9a89a24df5cc45c418505dde31c574ca5ce6 = $this->env->getExtension("native_profiler");
        $__internal_f639db0b2fb79804dfa98f15376d9a89a24df5cc45c418505dde31c574ca5ce6->enter($__internal_f639db0b2fb79804dfa98f15376d9a89a24df5cc45c418505dde31c574ca5ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f639db0b2fb79804dfa98f15376d9a89a24df5cc45c418505dde31c574ca5ce6->leave($__internal_f639db0b2fb79804dfa98f15376d9a89a24df5cc45c418505dde31c574ca5ce6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
