<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1660747430e152868e5fc4134f1f6e2f4a2f648530e71c818c3b2420f71e7e4f extends Twig_Template
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
        $__internal_6f8a3380a40534b066c5e38b0594bf9489e697849973c619e41da2c05c6d8606 = $this->env->getExtension("native_profiler");
        $__internal_6f8a3380a40534b066c5e38b0594bf9489e697849973c619e41da2c05c6d8606->enter($__internal_6f8a3380a40534b066c5e38b0594bf9489e697849973c619e41da2c05c6d8606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6f8a3380a40534b066c5e38b0594bf9489e697849973c619e41da2c05c6d8606->leave($__internal_6f8a3380a40534b066c5e38b0594bf9489e697849973c619e41da2c05c6d8606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */