<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d2a9f108a02609bdfa6a1add10bc469ee0154da490228c0e4de001d4538a3e1d extends Twig_Template
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
        $__internal_8559c60ac146850019136ddb8b0a9c9bb15cec47112052449e513734e4048ffc = $this->env->getExtension("native_profiler");
        $__internal_8559c60ac146850019136ddb8b0a9c9bb15cec47112052449e513734e4048ffc->enter($__internal_8559c60ac146850019136ddb8b0a9c9bb15cec47112052449e513734e4048ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8559c60ac146850019136ddb8b0a9c9bb15cec47112052449e513734e4048ffc->leave($__internal_8559c60ac146850019136ddb8b0a9c9bb15cec47112052449e513734e4048ffc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
