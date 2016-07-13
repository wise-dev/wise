<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_87b81904f65757faeb59183737ad98625f5b4bf44ec29d0f4d88b5ace41f0125 extends Twig_Template
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
        $__internal_e0f437d704e377e85b11d7a90fd5abbbde781096504251fb10d3189880815dc7 = $this->env->getExtension("native_profiler");
        $__internal_e0f437d704e377e85b11d7a90fd5abbbde781096504251fb10d3189880815dc7->enter($__internal_e0f437d704e377e85b11d7a90fd5abbbde781096504251fb10d3189880815dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e0f437d704e377e85b11d7a90fd5abbbde781096504251fb10d3189880815dc7->leave($__internal_e0f437d704e377e85b11d7a90fd5abbbde781096504251fb10d3189880815dc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
