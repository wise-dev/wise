<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8470ae3d68b5e5fbd944b34d18c5a69450c5211973c338a85bcb735b0c1982df extends Twig_Template
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
        $__internal_c489cdb903fd1868219f05639a44feb48d456d0c4a4003504b494d84899ada3b = $this->env->getExtension("native_profiler");
        $__internal_c489cdb903fd1868219f05639a44feb48d456d0c4a4003504b494d84899ada3b->enter($__internal_c489cdb903fd1868219f05639a44feb48d456d0c4a4003504b494d84899ada3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c489cdb903fd1868219f05639a44feb48d456d0c4a4003504b494d84899ada3b->leave($__internal_c489cdb903fd1868219f05639a44feb48d456d0c4a4003504b494d84899ada3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
