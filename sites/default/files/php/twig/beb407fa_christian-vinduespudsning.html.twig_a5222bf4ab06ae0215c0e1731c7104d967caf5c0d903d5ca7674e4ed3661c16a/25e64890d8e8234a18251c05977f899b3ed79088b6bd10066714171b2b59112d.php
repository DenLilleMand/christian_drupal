<?php

/* modules/custom/christian/templates/christian-vinduespudsning.html.twig */
class __TwigTemplate_c625a4a28fac3808a32d7fd25aec87727292713beac3ad9a442ae0c52b4745ce extends Twig_Template
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
        <h2 class=\"featurette-heading\">Vi kommer altid til tiden<span class=\"text-muted\"> og kvaliteten er altid 100% i orden. </span>
        </h2>
        <p class=\"lead\">
        <ul>
            <li>
                Indvendig og Udvendig vinduespudsning - mulighed for fast vindues pudsning alt efter dit behov uden
                nogen form for binding<br/>
            </li>
            <li>
                Afrensning af vinduer for eksempelvis klistermærker og maling-rester
            </li>
            <li>
                Vask af vindueskarme
            </li>
            <li>
                Trappevask
            </li>
            <li>
                Persiennevask
            </li>
            <li>
                Tæpperens
            </li>
        </ul>
        </p>
    </div>
    <div class=\"col-md-5 image-col\">
        <img class=\"featurette-image img-fluid center-block\" src=";
        // line 31
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
        return array (  75 => 31,  43 => 1,);
    }
}
/* <hr class="featurette-divider">*/
/* <div class="row featurette" id="christian-vinduespudsning-section">*/
/*     <div class="col-md-7">*/
/*         <h2 class="featurette-heading">Vi kommer altid til tiden<span class="text-muted"> og kvaliteten er altid 100% i orden. </span>*/
/*         </h2>*/
/*         <p class="lead">*/
/*         <ul>*/
/*             <li>*/
/*                 Indvendig og Udvendig vinduespudsning - mulighed for fast vindues pudsning alt efter dit behov uden*/
/*                 nogen form for binding<br/>*/
/*             </li>*/
/*             <li>*/
/*                 Afrensning af vinduer for eksempelvis klistermærker og maling-rester*/
/*             </li>*/
/*             <li>*/
/*                 Vask af vindueskarme*/
/*             </li>*/
/*             <li>*/
/*                 Trappevask*/
/*             </li>*/
/*             <li>*/
/*                 Persiennevask*/
/*             </li>*/
/*             <li>*/
/*                 Tæpperens*/
/*             </li>*/
/*         </ul>*/
/*         </p>*/
/*     </div>*/
/*     <div class="col-md-5 image-col">*/
/*         <img class="featurette-image img-fluid center-block" src={{ image }} alt="Vinduespudsning">*/
/*     </div>*/
/* </div>*/
