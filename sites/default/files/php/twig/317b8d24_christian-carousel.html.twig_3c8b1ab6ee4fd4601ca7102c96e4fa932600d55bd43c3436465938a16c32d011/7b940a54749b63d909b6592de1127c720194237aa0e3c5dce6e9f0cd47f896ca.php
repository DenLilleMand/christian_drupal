<?php

/* modules/custom/christian/templates/christian-carousel.html.twig */
class __TwigTemplate_903b5af895aa7ac8466bc8c28ac504ed1b1b38b150c96648c0897b5d2ee84a7e extends Twig_Template
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
        echo "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"carousel-item active\">
            <img class=\"first-slide flex-slider-image\" src=";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image1"]) ? $context["image1"] : null), "html", null, true));
        echo " alt=\"First slide\">
            <div class=\"container\">
                <div class=\"carousel-caption text-xs-left\">
                    <h1>Håndværk</h1>
                    <p>Vi har mange års erfaring i branchen</p>
                </div>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img class=\"second-slide flex-slider-image\" src=";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image2"]) ? $context["image2"] : null), "html", null, true));
        echo " alt=\"Second slide\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h1>Rengøring</h1>
                    <p>Vi er rutinerede i vores rengøring</p>
                </div>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img class=\"third-slide flex-slider-image\" src=";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image3"]) ? $context["image3"] : null), "html", null, true));
        echo " alt=\"Third slide\">
\t    <div class=\"container\">
                <div class=\"carousel-caption text-xs-right\">
                    <h1>Kontakt os og få et godt tilbud</h1>
                    <p>eller lad os kontakte dig</p>
                </div>
            </div>
        </div>
    </div>
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/christian/templates/christian-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  66 => 19,  54 => 10,  43 => 1,);
    }
}
/* <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*     <!-- Indicators -->*/
/*     <ol class="carousel-indicators">*/
/*         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*     </ol>*/
/*     <div class="carousel-inner" role="listbox">*/
/*         <div class="carousel-item active">*/
/*             <img class="first-slide flex-slider-image" src={{ image1 }} alt="First slide">*/
/*             <div class="container">*/
/*                 <div class="carousel-caption text-xs-left">*/
/*                     <h1>Håndværk</h1>*/
/*                     <p>Vi har mange års erfaring i branchen</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="carousel-item">*/
/*             <img class="second-slide flex-slider-image" src={{ image2 }} alt="Second slide">*/
/*             <div class="container">*/
/*                 <div class="carousel-caption">*/
/*                     <h1>Rengøring</h1>*/
/*                     <p>Vi er rutinerede i vores rengøring</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="carousel-item">*/
/*             <img class="third-slide flex-slider-image" src={{ image3 }} alt="Third slide">*/
/* 	    <div class="container">*/
/*                 <div class="carousel-caption text-xs-right">*/
/*                     <h1>Kontakt os og få et godt tilbud</h1>*/
/*                     <p>eller lad os kontakte dig</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*         <span class="sr-only">Previous</span>*/
/*     </a>*/
/*     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*         <span class="sr-only">Next</span>*/
/*     </a>*/
/* </div>*/
/* */
