<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f7a19aaac8c0c3698f3c2ddee5ad2a6bf20c86f72d67f5bc70ad0d2caece0c5b extends Twig_Template
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
        $__internal_0f8225905debb9bb901f13720fa79cc2ce1dcebd2b97f060a2e833ee6dc2e296 = $this->env->getExtension("native_profiler");
        $__internal_0f8225905debb9bb901f13720fa79cc2ce1dcebd2b97f060a2e833ee6dc2e296->enter($__internal_0f8225905debb9bb901f13720fa79cc2ce1dcebd2b97f060a2e833ee6dc2e296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0f8225905debb9bb901f13720fa79cc2ce1dcebd2b97f060a2e833ee6dc2e296->leave($__internal_0f8225905debb9bb901f13720fa79cc2ce1dcebd2b97f060a2e833ee6dc2e296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
