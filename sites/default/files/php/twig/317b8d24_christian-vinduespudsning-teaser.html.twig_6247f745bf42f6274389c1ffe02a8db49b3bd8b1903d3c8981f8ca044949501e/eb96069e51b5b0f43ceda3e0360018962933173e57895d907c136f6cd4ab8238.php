<?php

/* modules/custom/christian/templates/christian-vinduespudsning-teaser.html.twig */
class __TwigTemplate_b0c6265cc9341e8f14f0d159780fb90d39d11cff97bd3df6b8004d723dd04ef5 extends Twig_Template
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
        echo " alt=\"Vinduespudser\" width=\"140\" height=\"140\">
    <h2>Rengøring og vinduespudsning</h2>
    <p>
        Vi ordner erhverv, privat og trappevask
    </p>
    <p><a class=\"btn btn-secondary\" href=\"#christian-vinduespudsning-section\" role=\"button\">Læs mere &raquo;</a></p>
</div><!-- /.col-lg-4 -->";
    }

    public function getTemplateName()
    {
        return "modules/custom/christian/templates/christian-vinduespudsning-teaser.html.twig";
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
/*     <img class="img-circle" src={{ image }} alt="Vinduespudser" width="140" height="140">*/
/*     <h2>Rengøring og vinduespudsning</h2>*/
/*     <p>*/
/*         Vi ordner erhverv, privat og trappevask*/
/*     </p>*/
/*     <p><a class="btn btn-secondary" href="#christian-vinduespudsning-section" role="button">Læs mere &raquo;</a></p>*/
/* </div><!-- /.col-lg-4 -->*/
