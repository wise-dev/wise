<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d56d097daac5b73d9398a3f8a92c9fe41aa1c57878eb0fa8367274b4ae24bc33 extends Twig_Template
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
        $__internal_df5d761011560be2128bdd178fe921ddd7559af15e834ea9999be84db40fdf3d = $this->env->getExtension("native_profiler");
        $__internal_df5d761011560be2128bdd178fe921ddd7559af15e834ea9999be84db40fdf3d->enter($__internal_df5d761011560be2128bdd178fe921ddd7559af15e834ea9999be84db40fdf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df5d761011560be2128bdd178fe921ddd7559af15e834ea9999be84db40fdf3d->leave($__internal_df5d761011560be2128bdd178fe921ddd7559af15e834ea9999be84db40fdf3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
