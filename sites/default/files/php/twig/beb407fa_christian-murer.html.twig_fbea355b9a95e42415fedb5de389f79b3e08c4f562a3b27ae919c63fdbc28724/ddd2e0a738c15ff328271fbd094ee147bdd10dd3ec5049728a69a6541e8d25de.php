<?php

/* modules/custom/christian/templates/christian-murer.html.twig */
class __TwigTemplate_eb56201fe7b6da0ad40d86d81cffaf9600eac1c4dddfb7b307d89fa6c897bae0 extends Twig_Template
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
<div class=\"row featurette\" id=\"christian-murer-section\">
    <div class=\"col-md-7 col-md-push-5\">
        <h2 class=\"featurette-heading\">Verdensklasse håndværk<span class=\"text-muted\"> og det er billigt</span></h2>
        <p class=\"lead\">
            Hos os får du dansk murerarbejde fra start til slut, både når det drejer sig om store entrepriser eller små mureropgaver efter aftale.
            Vi giver dig sikkerhed for professionelt håndværk med en tilfredsstillende service oveni. Og så er vi naturligvis omfattet af Byggaranti, hvis uheldet skulle være ude.
            Vi er stolte af tilfredse kunder, og det bliver vi kun ved med at have, hvis kvaliteten hver gang er i top og prisen er konkurrencedygtig.
        </p>
    </div>
    <div class=\"col-md-5 col-md-pull-7\">
        <img class=\"featurette-image img-fluid center-block\" src=";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo " alt=\"murer\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/christian/templates/christian-murer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }
}
/* <hr class="featurette-divider">*/
/* <div class="row featurette" id="christian-murer-section">*/
/*     <div class="col-md-7 col-md-push-5">*/
/*         <h2 class="featurette-heading">Verdensklasse håndværk<span class="text-muted"> og det er billigt</span></h2>*/
/*         <p class="lead">*/
/*             Hos os får du dansk murerarbejde fra start til slut, både når det drejer sig om store entrepriser eller små mureropgaver efter aftale.*/
/*             Vi giver dig sikkerhed for professionelt håndværk med en tilfredsstillende service oveni. Og så er vi naturligvis omfattet af Byggaranti, hvis uheldet skulle være ude.*/
/*             Vi er stolte af tilfredse kunder, og det bliver vi kun ved med at have, hvis kvaliteten hver gang er i top og prisen er konkurrencedygtig.*/
/*         </p>*/
/*     </div>*/
/*     <div class="col-md-5 col-md-pull-7">*/
/*         <img class="featurette-image img-fluid center-block" src={{ image }} alt="murer">*/
/*     </div>*/
/* </div>*/
