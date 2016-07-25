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
        $__internal_75d1ad7c9e0b22d50add8163b2e03aea3695e7bc0d19f7add67dd57c6819f5a4 = $this->env->getExtension("native_profiler");
        $__internal_75d1ad7c9e0b22d50add8163b2e03aea3695e7bc0d19f7add67dd57c6819f5a4->enter($__internal_75d1ad7c9e0b22d50add8163b2e03aea3695e7bc0d19f7add67dd57c6819f5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_75d1ad7c9e0b22d50add8163b2e03aea3695e7bc0d19f7add67dd57c6819f5a4->leave($__internal_75d1ad7c9e0b22d50add8163b2e03aea3695e7bc0d19f7add67dd57c6819f5a4_prof);

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
