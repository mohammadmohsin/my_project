<?php

/* default/previous-show.html.twig */
class __TwigTemplate_b64fe548de9a578f57c0bde5800b65adc18f786377be216cad31636fbc1db849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/previous-show.html.twig", 1);
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
        $__internal_236f815020f652b6cf26f0cb57d06de2d9e8fe11f8ac50acec2abd1e451ff4a3 = $this->env->getExtension("native_profiler");
        $__internal_236f815020f652b6cf26f0cb57d06de2d9e8fe11f8ac50acec2abd1e451ff4a3->enter($__internal_236f815020f652b6cf26f0cb57d06de2d9e8fe11f8ac50acec2abd1e451ff4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/previous-show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_236f815020f652b6cf26f0cb57d06de2d9e8fe11f8ac50acec2abd1e451ff4a3->leave($__internal_236f815020f652b6cf26f0cb57d06de2d9e8fe11f8ac50acec2abd1e451ff4a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94de66811527eef4081b28da1f628216b6160fad82c4a03658f107cce46584e5 = $this->env->getExtension("native_profiler");
        $__internal_94de66811527eef4081b28da1f628216b6160fad82c4a03658f107cce46584e5->enter($__internal_94de66811527eef4081b28da1f628216b6160fad82c4a03658f107cce46584e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> BBC Previous Show</h1>
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
        $this->loadTemplate("::partial/readshowinfo.html.twig", "default/previous-show.html.twig", 17)->display($context);
        // line 18
        echo "            </div>
            <div id=\"next\">

            </div>

        </div>
    </div>
";
        
        $__internal_94de66811527eef4081b28da1f628216b6160fad82c4a03658f107cce46584e5->leave($__internal_94de66811527eef4081b28da1f628216b6160fad82c4a03658f107cce46584e5_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7456d164625b6b617253839a065dd6d1cec878ef7990735722895159923b7656 = $this->env->getExtension("native_profiler");
        $__internal_7456d164625b6b617253839a065dd6d1cec878ef7990735722895159923b7656->enter($__internal_7456d164625b6b617253839a065dd6d1cec878ef7990735722895159923b7656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7456d164625b6b617253839a065dd6d1cec878ef7990735722895159923b7656->leave($__internal_7456d164625b6b617253839a065dd6d1cec878ef7990735722895159923b7656_prof);

    }

    public function getTemplateName()
    {
        return "default/previous-show.html.twig";
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
/*                 <h1><span>Welcome to</span> BBC Previous Show</h1>*/
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
