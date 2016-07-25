<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b1c7402c54a2086da7723f36236a8ba3714789e4fa2bf0629eccf22631cceda2 extends Twig_Template
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
        $__internal_d107e7842848dc6f8532a22f815caf7c73e13ae7374588ba4bb8b34e266d1208 = $this->env->getExtension("native_profiler");
        $__internal_d107e7842848dc6f8532a22f815caf7c73e13ae7374588ba4bb8b34e266d1208->enter($__internal_d107e7842848dc6f8532a22f815caf7c73e13ae7374588ba4bb8b34e266d1208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d107e7842848dc6f8532a22f815caf7c73e13ae7374588ba4bb8b34e266d1208->leave($__internal_d107e7842848dc6f8532a22f815caf7c73e13ae7374588ba4bb8b34e266d1208_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
