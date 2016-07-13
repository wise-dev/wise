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
        $__internal_fd641938b3b0a49c5c91b9c0836f28bc82b6d95aff3f74c6b0f886d325081056 = $this->env->getExtension("native_profiler");
        $__internal_fd641938b3b0a49c5c91b9c0836f28bc82b6d95aff3f74c6b0f886d325081056->enter($__internal_fd641938b3b0a49c5c91b9c0836f28bc82b6d95aff3f74c6b0f886d325081056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fd641938b3b0a49c5c91b9c0836f28bc82b6d95aff3f74c6b0f886d325081056->leave($__internal_fd641938b3b0a49c5c91b9c0836f28bc82b6d95aff3f74c6b0f886d325081056_prof);

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
