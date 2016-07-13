<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8ed28434a2630e7bc71367ccfb7c80a8ef2780819149db53a656241154ebcb70 extends Twig_Template
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
        $__internal_7d28248f5bace39060b66fb952fce0523bcba457853b0e56d72460c34773878b = $this->env->getExtension("native_profiler");
        $__internal_7d28248f5bace39060b66fb952fce0523bcba457853b0e56d72460c34773878b->enter($__internal_7d28248f5bace39060b66fb952fce0523bcba457853b0e56d72460c34773878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7d28248f5bace39060b66fb952fce0523bcba457853b0e56d72460c34773878b->leave($__internal_7d28248f5bace39060b66fb952fce0523bcba457853b0e56d72460c34773878b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
