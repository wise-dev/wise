<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3f0c0d8f75e85669d3efa20148be82549b3f16936a0ed2a75a5c4e430ac95755 extends Twig_Template
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
        $__internal_df19006037c53de37174d8f5f0fad4572185c6d69ec643a4c055e67e5f7eca43 = $this->env->getExtension("native_profiler");
        $__internal_df19006037c53de37174d8f5f0fad4572185c6d69ec643a4c055e67e5f7eca43->enter($__internal_df19006037c53de37174d8f5f0fad4572185c6d69ec643a4c055e67e5f7eca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_df19006037c53de37174d8f5f0fad4572185c6d69ec643a4c055e67e5f7eca43->leave($__internal_df19006037c53de37174d8f5f0fad4572185c6d69ec643a4c055e67e5f7eca43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
