<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0e1246e77692a7266172c006f66b21fe70309347a0c237ec16cf16d50ddff6f3 extends Twig_Template
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
        $__internal_d7d950bb518d26427727be6bc6e4669a3884400fdd83cf5bff18b9639ec05aee = $this->env->getExtension("native_profiler");
        $__internal_d7d950bb518d26427727be6bc6e4669a3884400fdd83cf5bff18b9639ec05aee->enter($__internal_d7d950bb518d26427727be6bc6e4669a3884400fdd83cf5bff18b9639ec05aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d7d950bb518d26427727be6bc6e4669a3884400fdd83cf5bff18b9639ec05aee->leave($__internal_d7d950bb518d26427727be6bc6e4669a3884400fdd83cf5bff18b9639ec05aee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
