<?php

/* modules/custom/christian/templates/christian-header.html.twig */
class __TwigTemplate_6fe74b1325da183a471c58b3cee3eef388ad3a22d90c94bd25fac364a9b64081 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-static-top navbar-light bg-faded\">
    <div class=\"navbar-brand\">BYENS MURERMESTER - Christian Ulrich Brink - Kolding og omegn</div>
    <div
            class=\"fb-like pull-xs-right\"
            data-share=\"true\"
            data-action=\"like\"
            data-width=\"450\"
            data-show-faces=\"true\"
            data-href=\"http://www.facebook.com/matti.a.nielsen\"
            data-layout=\"standard\">
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/christian/templates/christian-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <nav class="navbar navbar-static-top navbar-light bg-faded">*/
/*     <div class="navbar-brand">BYENS MURERMESTER - Christian Ulrich Brink - Kolding og omegn</div>*/
/*     <div*/
/*             class="fb-like pull-xs-right"*/
/*             data-share="true"*/
/*             data-action="like"*/
/*             data-width="450"*/
/*             data-show-faces="true"*/
/*             data-href="http://www.facebook.com/matti.a.nielsen"*/
/*             data-layout="standard">*/
/*     </div>*/
/* </nav>*/
/* */
