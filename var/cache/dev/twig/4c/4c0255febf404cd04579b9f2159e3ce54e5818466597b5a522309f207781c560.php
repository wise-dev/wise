<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f7bae491e5eef8956f6176c1e6b9d628cefd01d818e92abe567b4cd49ca3564f extends Twig_Template
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
        $__internal_6ae5b33c77dfdbdec5d24fb744eb253ef18409b127cbaee68cdc6f976b465923 = $this->env->getExtension("native_profiler");
        $__internal_6ae5b33c77dfdbdec5d24fb744eb253ef18409b127cbaee68cdc6f976b465923->enter($__internal_6ae5b33c77dfdbdec5d24fb744eb253ef18409b127cbaee68cdc6f976b465923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6ae5b33c77dfdbdec5d24fb744eb253ef18409b127cbaee68cdc6f976b465923->leave($__internal_6ae5b33c77dfdbdec5d24fb744eb253ef18409b127cbaee68cdc6f976b465923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
