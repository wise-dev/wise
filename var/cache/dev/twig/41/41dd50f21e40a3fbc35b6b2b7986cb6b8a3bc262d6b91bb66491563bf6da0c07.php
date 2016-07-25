<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_706131ad72d00d06684eceba554d80563d2c1f0c1d5f3050a12f8ce6458cef1e extends Twig_Template
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
        $__internal_716e5227105695aa90bc1554b910eb2fac073867c19e37dc079b66cfb6449545 = $this->env->getExtension("native_profiler");
        $__internal_716e5227105695aa90bc1554b910eb2fac073867c19e37dc079b66cfb6449545->enter($__internal_716e5227105695aa90bc1554b910eb2fac073867c19e37dc079b66cfb6449545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_716e5227105695aa90bc1554b910eb2fac073867c19e37dc079b66cfb6449545->leave($__internal_716e5227105695aa90bc1554b910eb2fac073867c19e37dc079b66cfb6449545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
