<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3afc0bc8f9c528bafcdd454c1346036d2323fe55c65219f2bb51a02a885fa516 extends Twig_Template
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
        $__internal_b7cb7e050c8fa462d438099970c5dddb04534425a250d139a2a310ed5a7849d4 = $this->env->getExtension("native_profiler");
        $__internal_b7cb7e050c8fa462d438099970c5dddb04534425a250d139a2a310ed5a7849d4->enter($__internal_b7cb7e050c8fa462d438099970c5dddb04534425a250d139a2a310ed5a7849d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b7cb7e050c8fa462d438099970c5dddb04534425a250d139a2a310ed5a7849d4->leave($__internal_b7cb7e050c8fa462d438099970c5dddb04534425a250d139a2a310ed5a7849d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
