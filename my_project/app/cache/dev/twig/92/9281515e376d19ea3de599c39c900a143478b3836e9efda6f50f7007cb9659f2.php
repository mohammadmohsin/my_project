<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_6f5c93e8ca0bdf68ce3bf38946fdd0ad362d33c3843f3fbcd05c85413d49bfbd extends Twig_Template
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
        $__internal_e10d2816facb2c9762b7cdf5c2ee41f15893e9f367e7c1fc27ead07b8e8c0b11 = $this->env->getExtension("native_profiler");
        $__internal_e10d2816facb2c9762b7cdf5c2ee41f15893e9f367e7c1fc27ead07b8e8c0b11->enter($__internal_e10d2816facb2c9762b7cdf5c2ee41f15893e9f367e7c1fc27ead07b8e8c0b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e10d2816facb2c9762b7cdf5c2ee41f15893e9f367e7c1fc27ead07b8e8c0b11->leave($__internal_e10d2816facb2c9762b7cdf5c2ee41f15893e9f367e7c1fc27ead07b8e8c0b11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
