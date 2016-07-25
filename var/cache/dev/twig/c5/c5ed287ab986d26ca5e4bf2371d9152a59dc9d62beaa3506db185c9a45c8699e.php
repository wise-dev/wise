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
        $__internal_43881ec22e9c937e1e38316636350a07c50b8862cfa25007626fbc237fa12123 = $this->env->getExtension("native_profiler");
        $__internal_43881ec22e9c937e1e38316636350a07c50b8862cfa25007626fbc237fa12123->enter($__internal_43881ec22e9c937e1e38316636350a07c50b8862cfa25007626fbc237fa12123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_43881ec22e9c937e1e38316636350a07c50b8862cfa25007626fbc237fa12123->leave($__internal_43881ec22e9c937e1e38316636350a07c50b8862cfa25007626fbc237fa12123_prof);

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
