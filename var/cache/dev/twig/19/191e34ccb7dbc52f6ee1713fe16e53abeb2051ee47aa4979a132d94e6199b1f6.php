<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_29d7a5698fcad11e194b55c0df2e65a9382d7f6bd24232a4d77ca07e53eb88d2 extends Twig_Template
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
        $__internal_f5c3013180026c32d06bcbdea3be1155c937b622e80b63fe17bcf926a604d4f7 = $this->env->getExtension("native_profiler");
        $__internal_f5c3013180026c32d06bcbdea3be1155c937b622e80b63fe17bcf926a604d4f7->enter($__internal_f5c3013180026c32d06bcbdea3be1155c937b622e80b63fe17bcf926a604d4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f5c3013180026c32d06bcbdea3be1155c937b622e80b63fe17bcf926a604d4f7->leave($__internal_f5c3013180026c32d06bcbdea3be1155c937b622e80b63fe17bcf926a604d4f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
