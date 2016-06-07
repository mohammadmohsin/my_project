<?php

/* default/index.html.twig */
class __TwigTemplate_0031dc60fcb151b6f7e026351cff17018a31b24c1420a31a0befcc61674bdb91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_7d36ab626195e8bbea3d6f09f2cc8c27677b7a0e15d81dc088601928fcda68e3 = $this->env->getExtension("native_profiler");
        $__internal_7d36ab626195e8bbea3d6f09f2cc8c27677b7a0e15d81dc088601928fcda68e3->enter($__internal_7d36ab626195e8bbea3d6f09f2cc8c27677b7a0e15d81dc088601928fcda68e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d36ab626195e8bbea3d6f09f2cc8c27677b7a0e15d81dc088601928fcda68e3->leave($__internal_7d36ab626195e8bbea3d6f09f2cc8c27677b7a0e15d81dc088601928fcda68e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6bc1c10bece5be4a49bf546cdddb6c8173076f3190efdd45280161281353471 = $this->env->getExtension("native_profiler");
        $__internal_d6bc1c10bece5be4a49bf546cdddb6c8173076f3190efdd45280161281353471->enter($__internal_d6bc1c10bece5be4a49bf546cdddb6c8173076f3190efdd45280161281353471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span>  BBC Show</span></h1>
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
        $this->loadTemplate("::partial/readshowinfo.html.twig", "default/index.html.twig", 17)->display($context);
        // line 18
        echo "            </div>
            <div id=\"next\">

            </div>

        </div>
    </div>
";
        
        $__internal_d6bc1c10bece5be4a49bf546cdddb6c8173076f3190efdd45280161281353471->leave($__internal_d6bc1c10bece5be4a49bf546cdddb6c8173076f3190efdd45280161281353471_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_537f68c7d49a6e7b983d16f20ab3b1108481cf9f3f12b352506c15bf95ab146e = $this->env->getExtension("native_profiler");
        $__internal_537f68c7d49a6e7b983d16f20ab3b1108481cf9f3f12b352506c15bf95ab146e->enter($__internal_537f68c7d49a6e7b983d16f20ab3b1108481cf9f3f12b352506c15bf95ab146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_537f68c7d49a6e7b983d16f20ab3b1108481cf9f3f12b352506c15bf95ab146e->leave($__internal_537f68c7d49a6e7b983d16f20ab3b1108481cf9f3f12b352506c15bf95ab146e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
/*                 <h1><span>Welcome to</span>  BBC Show</span></h1>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 <a href="/previous-show">Previous Show</a>*/
/*                     <a href="/">Current Show</a>*/
/*                     <a href="/next-show">Next Show</a>*/
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
