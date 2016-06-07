<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5951f7df5b8757e141d13aefd6f2a94c44b5366a70a20ee1e6f1a0fc2eaba1a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7678439adcc1fc326bb64da11825c3750da4bd22803ebfa165678995a86dbcb0 = $this->env->getExtension("native_profiler");
        $__internal_7678439adcc1fc326bb64da11825c3750da4bd22803ebfa165678995a86dbcb0->enter($__internal_7678439adcc1fc326bb64da11825c3750da4bd22803ebfa165678995a86dbcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7678439adcc1fc326bb64da11825c3750da4bd22803ebfa165678995a86dbcb0->leave($__internal_7678439adcc1fc326bb64da11825c3750da4bd22803ebfa165678995a86dbcb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b01d3aea050baf13e2e596a7fedd21e897a563407dc10b25636a9408a5a1231 = $this->env->getExtension("native_profiler");
        $__internal_6b01d3aea050baf13e2e596a7fedd21e897a563407dc10b25636a9408a5a1231->enter($__internal_6b01d3aea050baf13e2e596a7fedd21e897a563407dc10b25636a9408a5a1231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6b01d3aea050baf13e2e596a7fedd21e897a563407dc10b25636a9408a5a1231->leave($__internal_6b01d3aea050baf13e2e596a7fedd21e897a563407dc10b25636a9408a5a1231_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac5ae6ef24a955f51bd18e8a29e652490acea4e2a9d9ea17e7296cfbcc585991 = $this->env->getExtension("native_profiler");
        $__internal_ac5ae6ef24a955f51bd18e8a29e652490acea4e2a9d9ea17e7296cfbcc585991->enter($__internal_ac5ae6ef24a955f51bd18e8a29e652490acea4e2a9d9ea17e7296cfbcc585991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac5ae6ef24a955f51bd18e8a29e652490acea4e2a9d9ea17e7296cfbcc585991->leave($__internal_ac5ae6ef24a955f51bd18e8a29e652490acea4e2a9d9ea17e7296cfbcc585991_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a16d8f71b364f7b3de5aed656ea0c733e4e413f302f7136a5f215aae5031e27 = $this->env->getExtension("native_profiler");
        $__internal_2a16d8f71b364f7b3de5aed656ea0c733e4e413f302f7136a5f215aae5031e27->enter($__internal_2a16d8f71b364f7b3de5aed656ea0c733e4e413f302f7136a5f215aae5031e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2a16d8f71b364f7b3de5aed656ea0c733e4e413f302f7136a5f215aae5031e27->leave($__internal_2a16d8f71b364f7b3de5aed656ea0c733e4e413f302f7136a5f215aae5031e27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
