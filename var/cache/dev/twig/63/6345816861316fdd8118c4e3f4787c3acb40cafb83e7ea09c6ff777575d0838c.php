<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a3e919cfe2c0badd90f82b120dd032061ad39f1f8766d07c9d19ddab2c292ba7 extends Twig_Template
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
        $__internal_3d6996884a20a7c91dd8cdf6f07da6ab163047f609267295057983938dc6a6f8 = $this->env->getExtension("native_profiler");
        $__internal_3d6996884a20a7c91dd8cdf6f07da6ab163047f609267295057983938dc6a6f8->enter($__internal_3d6996884a20a7c91dd8cdf6f07da6ab163047f609267295057983938dc6a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3d6996884a20a7c91dd8cdf6f07da6ab163047f609267295057983938dc6a6f8->leave($__internal_3d6996884a20a7c91dd8cdf6f07da6ab163047f609267295057983938dc6a6f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
