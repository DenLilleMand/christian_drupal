<?php

/* modules/custom/christian/templates/christian-vinduespudsning.html.twig */
class __TwigTemplate_d20e5f9a026ec92714301d19be41ff4a2fb524e922f6e40c1c85065ac9a8f02a extends Twig_Template
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
        echo "<hr class=\"featurette-divider\">
<div class=\"row featurette\" id=\"christian-vinduespudsning-section\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">Rengøring der holder dine flader skinnende rene <span class=\"text-muted\"> hos privat, erhverv og trappeopgange </span></h2>
        <p class=\"lead\">
            For mange mennesker står rengøring ikke øverst på deres to-do liste.
            rengøring er både tidskrævende og vanskeligt.
            I stedet kan du få en professionel rengøringsperson hos os til at sørge for,
            at dine flader er flotte og rene året rundt til en lav pris — og uden at få sved på panden.
        </p>
    </div>
    <div class=\"col-md-5\">
        <img class=\"featurette-image img-fluid center-block\" src=";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo " alt=\"Vinduespudsning\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/christian/templates/christian-vinduespudsning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  43 => 1,);
    }
}
/* <hr class="featurette-divider">*/
/* <div class="row featurette" id="christian-vinduespudsning-section">*/
/*     <div class="col-md-7">*/
/*         <h2 class="featurette-heading">Rengøring der holder dine flader skinnende rene <span class="text-muted"> hos privat, erhverv og trappeopgange </span></h2>*/
/*         <p class="lead">*/
/*             For mange mennesker står rengøring ikke øverst på deres to-do liste.*/
/*             rengøring er både tidskrævende og vanskeligt.*/
/*             I stedet kan du få en professionel rengøringsperson hos os til at sørge for,*/
/*             at dine flader er flotte og rene året rundt til en lav pris — og uden at få sved på panden.*/
/*         </p>*/
/*     </div>*/
/*     <div class="col-md-5">*/
/*         <img class="featurette-image img-fluid center-block" src={{ image }} alt="Vinduespudsning">*/
/*     </div>*/
/* </div>*/
