<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b87066ecf35a448837c0d65bf32a4afcafea7ee994b189e957e20b2c153a5438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce121d1f646b8dc99b63f6bf89514e2a6500d7cd3af9c25017dd6d834f37be1f = $this->env->getExtension("native_profiler");
        $__internal_ce121d1f646b8dc99b63f6bf89514e2a6500d7cd3af9c25017dd6d834f37be1f->enter($__internal_ce121d1f646b8dc99b63f6bf89514e2a6500d7cd3af9c25017dd6d834f37be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce121d1f646b8dc99b63f6bf89514e2a6500d7cd3af9c25017dd6d834f37be1f->leave($__internal_ce121d1f646b8dc99b63f6bf89514e2a6500d7cd3af9c25017dd6d834f37be1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_974c834a371cda6248a26dffd1fc23f457f84106396ca036219f1cf335cd33a3 = $this->env->getExtension("native_profiler");
        $__internal_974c834a371cda6248a26dffd1fc23f457f84106396ca036219f1cf335cd33a3->enter($__internal_974c834a371cda6248a26dffd1fc23f457f84106396ca036219f1cf335cd33a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_974c834a371cda6248a26dffd1fc23f457f84106396ca036219f1cf335cd33a3->leave($__internal_974c834a371cda6248a26dffd1fc23f457f84106396ca036219f1cf335cd33a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_963cb7c86e4c32f681520e6a31677de06dc56270b98d44121bd2abc10e1744ce = $this->env->getExtension("native_profiler");
        $__internal_963cb7c86e4c32f681520e6a31677de06dc56270b98d44121bd2abc10e1744ce->enter($__internal_963cb7c86e4c32f681520e6a31677de06dc56270b98d44121bd2abc10e1744ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_963cb7c86e4c32f681520e6a31677de06dc56270b98d44121bd2abc10e1744ce->leave($__internal_963cb7c86e4c32f681520e6a31677de06dc56270b98d44121bd2abc10e1744ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45d71080e3e4a4d2cef5176bfe2aa404f72723bf1c06d4bef476e728d7d172fb = $this->env->getExtension("native_profiler");
        $__internal_45d71080e3e4a4d2cef5176bfe2aa404f72723bf1c06d4bef476e728d7d172fb->enter($__internal_45d71080e3e4a4d2cef5176bfe2aa404f72723bf1c06d4bef476e728d7d172fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45d71080e3e4a4d2cef5176bfe2aa404f72723bf1c06d4bef476e728d7d172fb->leave($__internal_45d71080e3e4a4d2cef5176bfe2aa404f72723bf1c06d4bef476e728d7d172fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
