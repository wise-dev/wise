<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c68c6813b07e75b882f04d2ca8e2da0558731563a57972f9f42a6f86d6a1cc8b extends Twig_Template
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
        $__internal_52bbb6ca5913a15550f6348255db2fb06e6b8487dfd7be2613b9fdcdcd0ed363 = $this->env->getExtension("native_profiler");
        $__internal_52bbb6ca5913a15550f6348255db2fb06e6b8487dfd7be2613b9fdcdcd0ed363->enter($__internal_52bbb6ca5913a15550f6348255db2fb06e6b8487dfd7be2613b9fdcdcd0ed363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_52bbb6ca5913a15550f6348255db2fb06e6b8487dfd7be2613b9fdcdcd0ed363->leave($__internal_52bbb6ca5913a15550f6348255db2fb06e6b8487dfd7be2613b9fdcdcd0ed363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
