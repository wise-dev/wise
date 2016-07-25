<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d89ab77d5510fc8b79d53500a2055754cb343cc944aa23a2155ea6dc088b1cbe extends Twig_Template
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
        $__internal_82dec0090e609293d359334ec904c6057f45a3f7cf9b2738afd2ba3eea595409 = $this->env->getExtension("native_profiler");
        $__internal_82dec0090e609293d359334ec904c6057f45a3f7cf9b2738afd2ba3eea595409->enter($__internal_82dec0090e609293d359334ec904c6057f45a3f7cf9b2738afd2ba3eea595409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_82dec0090e609293d359334ec904c6057f45a3f7cf9b2738afd2ba3eea595409->leave($__internal_82dec0090e609293d359334ec904c6057f45a3f7cf9b2738afd2ba3eea595409_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
