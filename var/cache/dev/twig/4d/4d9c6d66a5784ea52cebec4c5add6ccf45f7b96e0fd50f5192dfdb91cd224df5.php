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
        $__internal_bed9e23bd2c63e33299a457292c268caec056527f17fe0451bb92c0af5914056 = $this->env->getExtension("native_profiler");
        $__internal_bed9e23bd2c63e33299a457292c268caec056527f17fe0451bb92c0af5914056->enter($__internal_bed9e23bd2c63e33299a457292c268caec056527f17fe0451bb92c0af5914056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bed9e23bd2c63e33299a457292c268caec056527f17fe0451bb92c0af5914056->leave($__internal_bed9e23bd2c63e33299a457292c268caec056527f17fe0451bb92c0af5914056_prof);

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
