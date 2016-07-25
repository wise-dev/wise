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
        $__internal_d19b851e4bcbb4db11ef3a13314893d55ce87ee20a9dc6afc62e42d6733459e8 = $this->env->getExtension("native_profiler");
        $__internal_d19b851e4bcbb4db11ef3a13314893d55ce87ee20a9dc6afc62e42d6733459e8->enter($__internal_d19b851e4bcbb4db11ef3a13314893d55ce87ee20a9dc6afc62e42d6733459e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d19b851e4bcbb4db11ef3a13314893d55ce87ee20a9dc6afc62e42d6733459e8->leave($__internal_d19b851e4bcbb4db11ef3a13314893d55ce87ee20a9dc6afc62e42d6733459e8_prof);

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
