<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_07e85d0814e0283cc8bf4da9469877b3b4a8ec7968a0e51bcdd3326ad6b5a7c3 extends Twig_Template
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
        $__internal_be70fc1382a70279077170ed4f4c8b42ed47672c3f0bfb9d6a063fdf88721916 = $this->env->getExtension("native_profiler");
        $__internal_be70fc1382a70279077170ed4f4c8b42ed47672c3f0bfb9d6a063fdf88721916->enter($__internal_be70fc1382a70279077170ed4f4c8b42ed47672c3f0bfb9d6a063fdf88721916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_be70fc1382a70279077170ed4f4c8b42ed47672c3f0bfb9d6a063fdf88721916->leave($__internal_be70fc1382a70279077170ed4f4c8b42ed47672c3f0bfb9d6a063fdf88721916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
