<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_896cbac7adc3074cbd24897faa5a012983b90f1cf86279701ce65bfdd043bce2 extends Twig_Template
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
        $__internal_16905d073f4614728aacaf042384ad3db054763dc5fae13666d6af9c1780255a = $this->env->getExtension("native_profiler");
        $__internal_16905d073f4614728aacaf042384ad3db054763dc5fae13666d6af9c1780255a->enter($__internal_16905d073f4614728aacaf042384ad3db054763dc5fae13666d6af9c1780255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_16905d073f4614728aacaf042384ad3db054763dc5fae13666d6af9c1780255a->leave($__internal_16905d073f4614728aacaf042384ad3db054763dc5fae13666d6af9c1780255a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
