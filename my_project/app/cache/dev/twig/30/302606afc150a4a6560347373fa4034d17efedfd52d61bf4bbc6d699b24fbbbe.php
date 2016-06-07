<?php

/* ::partial/readshowinfo.html.twig */
class __TwigTemplate_223b2d2430c7f46fe4cb0d6643c26e0af2ec155106e23f737557fc938feb8c56 extends Twig_Template
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
        $__internal_b545fdb77603990934f5975406c18e80a50b34cb80348ec167ff3f8791733434 = $this->env->getExtension("native_profiler");
        $__internal_b545fdb77603990934f5975406c18e80a50b34cb80348ec167ff3f8791733434->enter($__internal_b545fdb77603990934f5975406c18e80a50b34cb80348ec167ff3f8791733434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::partial/readshowinfo.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["showlists"]) ? $context["showlists"] : $this->getContext($context, "showlists")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 2
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                // line 4
                echo "
        ";
                // line 5
                if (($context["key1"] == "showStartTime")) {
                    // line 6
                    echo "            Start Time : ";
                    echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                    echo " <br />
        ";
                }
                // line 8
                echo "
        ";
                // line 9
                if (($context["key1"] == "showTotalTime")) {
                    // line 10
                    echo "            Duration : ";
                    echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                    echo " <br />
        ";
                }
                // line 12
                echo "
        ";
                // line 13
                if (($context["key1"] == "showTitle")) {
                    // line 14
                    echo "            Title : ";
                    echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                    echo " <br />
        ";
                }
                // line 16
                echo "
        ";
                // line 17
                if (($context["key1"] == "showDescription")) {
                    // line 18
                    echo "            Description : ";
                    echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                    echo " <br />
        ";
                }
                // line 20
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    <br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b545fdb77603990934f5975406c18e80a50b34cb80348ec167ff3f8791733434->leave($__internal_b545fdb77603990934f5975406c18e80a50b34cb80348ec167ff3f8791733434_prof);

    }

    public function getTemplateName()
    {
        return "::partial/readshowinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  77 => 20,  71 => 18,  69 => 17,  66 => 16,  60 => 14,  58 => 13,  55 => 12,  49 => 10,  47 => 9,  44 => 8,  38 => 6,  36 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for key,value in showlists %}*/
/* */
/*     {% for key1,value1 in value %}*/
/* */
/*         {% if (key1 == "showStartTime") %}*/
/*             Start Time : {{ value1 }} <br />*/
/*         {% endif %}*/
/* */
/*         {% if (key1 == "showTotalTime") %}*/
/*             Duration : {{ value1 }} <br />*/
/*         {% endif %}*/
/* */
/*         {% if (key1 == "showTitle") %}*/
/*             Title : {{ value1 }} <br />*/
/*         {% endif %}*/
/* */
/*         {% if (key1 == "showDescription") %}*/
/*             Description : {{ value1 }} <br />*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/*     <br />*/
/* {% endfor %}*/
