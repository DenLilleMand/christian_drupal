<?php

/* modules/custom/christian/templates/christian-contact-teaser.html.twig */
class __TwigTemplate_7ce83c98c80310220baf76f0257348540b79cbf5730b04235d08a0acc1c5f5aa extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"col-lg-4\">
    <img class=\"img-circle\" src=";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo " alt=\"Murer\" width=\"140\" height=\"140\"/>

    <h2>
        Kontakt os på
    </h2>

    <p>
        <div class=\"input-group-addon\">
            Telefon
        </div>
        <div class=\"form-control\">
            30 13 38 34
        </div>
    </p>
    <p>
        <a class=\"btn btn-secondary contact-teaser-button\" href=\"#christian-contact-form-id\" role=\"button\">
            Eller lad os kontakte dig &raquo;
        </a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/christian/templates/christian-contact-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }
}
/* <div class="col-lg-4">*/
/*     <img class="img-circle" src={{ image }} alt="Murer" width="140" height="140"/>*/
/* */
/*     <h2>*/
/*         Kontakt os på*/
/*     </h2>*/
/* */
/*     <p>*/
/*         <div class="input-group-addon">*/
/*             Telefon*/
/*         </div>*/
/*         <div class="form-control">*/
/*             30 13 38 34*/
/*         </div>*/
/*     </p>*/
/*     <p>*/
/*         <a class="btn btn-secondary contact-teaser-button" href="#christian-contact-form-id" role="button">*/
/*             Eller lad os kontakte dig &raquo;*/
/*         </a>*/
/*     </p>*/
/* </div>*/
