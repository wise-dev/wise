<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_91f0144f2e5fd73cba4fe99065c32def3a1aea4bda5a4cc94b941ba82d79ac74 extends Twig_Template
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
        $__internal_d869f3091cbbf746d253e52f930640a7387bd660d3a6848f16c9af1916129d15 = $this->env->getExtension("native_profiler");
        $__internal_d869f3091cbbf746d253e52f930640a7387bd660d3a6848f16c9af1916129d15->enter($__internal_d869f3091cbbf746d253e52f930640a7387bd660d3a6848f16c9af1916129d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d869f3091cbbf746d253e52f930640a7387bd660d3a6848f16c9af1916129d15->leave($__internal_d869f3091cbbf746d253e52f930640a7387bd660d3a6848f16c9af1916129d15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
