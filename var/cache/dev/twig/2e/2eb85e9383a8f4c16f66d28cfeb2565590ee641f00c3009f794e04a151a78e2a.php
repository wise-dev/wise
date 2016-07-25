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
        $__internal_54f60e0f08462734b6437c4b37112b09f3e2c4a25b04f7c87733511958817f9a = $this->env->getExtension("native_profiler");
        $__internal_54f60e0f08462734b6437c4b37112b09f3e2c4a25b04f7c87733511958817f9a->enter($__internal_54f60e0f08462734b6437c4b37112b09f3e2c4a25b04f7c87733511958817f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_54f60e0f08462734b6437c4b37112b09f3e2c4a25b04f7c87733511958817f9a->leave($__internal_54f60e0f08462734b6437c4b37112b09f3e2c4a25b04f7c87733511958817f9a_prof);

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
