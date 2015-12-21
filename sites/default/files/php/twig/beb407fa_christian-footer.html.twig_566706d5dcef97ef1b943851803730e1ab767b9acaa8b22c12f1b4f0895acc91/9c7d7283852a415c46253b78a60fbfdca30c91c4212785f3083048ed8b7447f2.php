<?php

/* modules/custom/christian/templates/christian-footer.html.twig */
class __TwigTemplate_0d9ce4c6350eb92c1f094e549c1f94d9a2451fd579016dd7bf9f062957145951 extends Twig_Template
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
<footer>
    <p class=\"pull-xs-right\"><a href=\"#\">Tilbage til toppen</a></p>
    <p>&copy; 2016 BYENS MURERMESTER &middot; cvr - 232323231</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "modules/custom/christian/templates/christian-footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <hr class="featurette-divider">*/
/* <footer>*/
/*     <p class="pull-xs-right"><a href="#">Tilbage til toppen</a></p>*/
/*     <p>&copy; 2016 BYENS MURERMESTER &middot; cvr - 232323231</p>*/
/* </footer>*/
