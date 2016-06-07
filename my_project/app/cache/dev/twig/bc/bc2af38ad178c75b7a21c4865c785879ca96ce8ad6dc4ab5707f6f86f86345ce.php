<?php

/* default/next-show.html.twig */
class __TwigTemplate_c6fd155866109474835f162e233453f5120054041c3ab20d68ea80397443186b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/next-show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9acb1c589d6f9db2cb8cbd25d12f939adc3a409d211e322c0c5578385693755 = $this->env->getExtension("native_profiler");
        $__internal_d9acb1c589d6f9db2cb8cbd25d12f939adc3a409d211e322c0c5578385693755->enter($__internal_d9acb1c589d6f9db2cb8cbd25d12f939adc3a409d211e322c0c5578385693755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/next-show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9acb1c589d6f9db2cb8cbd25d12f939adc3a409d211e322c0c5578385693755->leave($__internal_d9acb1c589d6f9db2cb8cbd25d12f939adc3a409d211e322c0c5578385693755_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_655baf323b7cc94fba851869d661ae962c0d82bad3808e862cc3844a982ccbf0 = $this->env->getExtension("native_profiler");
        $__internal_655baf323b7cc94fba851869d661ae962c0d82bad3808e862cc3844a982ccbf0->enter($__internal_655baf323b7cc94fba851869d661ae962c0d82bad3808e862cc3844a982ccbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> BBC Next Show</h1>
            </div>

            <div>
                <a href=\"/previous-show\">Previous Show</a>
                <a href=\"/\">Current Show</a>
                <a href=\"/next-show\">Next Show</a>
            </div>
            <hr/>
            <div>
                ";
        // line 17
        $this->loadTemplate("::partial/readshowinfo.html.twig", "default/next-show.html.twig", 17)->display($context);
        // line 18
        echo "            </div>
            <div id=\"next\">

            </div>

        </div>
    </div>
";
        
        $__internal_655baf323b7cc94fba851869d661ae962c0d82bad3808e862cc3844a982ccbf0->leave($__internal_655baf323b7cc94fba851869d661ae962c0d82bad3808e862cc3844a982ccbf0_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37b6c3416a1e16723990757a92c92e1f54ce453d24038153c73e2986b16ba4ce = $this->env->getExtension("native_profiler");
        $__internal_37b6c3416a1e16723990757a92c92e1f54ce453d24038153c73e2986b16ba4ce->enter($__internal_37b6c3416a1e16723990757a92c92e1f54ce453d24038153c73e2986b16ba4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_37b6c3416a1e16723990757a92c92e1f54ce453d24038153c73e2986b16ba4ce->leave($__internal_37b6c3416a1e16723990757a92c92e1f54ce453d24038153c73e2986b16ba4ce_prof);

    }

    public function getTemplateName()
    {
        return "default/next-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  72 => 27,  58 => 18,  56 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1><span>Welcome to</span> BBC Next Show</h1>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 <a href="/previous-show">Previous Show</a>*/
/*                 <a href="/">Current Show</a>*/
/*                 <a href="/next-show">Next Show</a>*/
/*             </div>*/
/*             <hr/>*/
/*             <div>*/
/*                 {% include '::partial/readshowinfo.html.twig' %}*/
/*             </div>*/
/*             <div id="next">*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
