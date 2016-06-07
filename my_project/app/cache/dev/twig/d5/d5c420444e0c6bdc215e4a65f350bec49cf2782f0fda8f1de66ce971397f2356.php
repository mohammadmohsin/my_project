<?php

/* base.html.twig */
class __TwigTemplate_6d8f3552b4a2859d049ee0d5a30ce0a98b5752557ae7b8405659a4ed907395e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c6d00b5d23f6a9135b7fe8062f626c1bf5056892e669ce8b5c5c81de3c992b = $this->env->getExtension("native_profiler");
        $__internal_a0c6d00b5d23f6a9135b7fe8062f626c1bf5056892e669ce8b5c5c81de3c992b->enter($__internal_a0c6d00b5d23f6a9135b7fe8062f626c1bf5056892e669ce8b5c5c81de3c992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a0c6d00b5d23f6a9135b7fe8062f626c1bf5056892e669ce8b5c5c81de3c992b->leave($__internal_a0c6d00b5d23f6a9135b7fe8062f626c1bf5056892e669ce8b5c5c81de3c992b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4906336be423e02dded8052dd18d5fdb6d9eaeb6c40fb728e4703685dcb6a690 = $this->env->getExtension("native_profiler");
        $__internal_4906336be423e02dded8052dd18d5fdb6d9eaeb6c40fb728e4703685dcb6a690->enter($__internal_4906336be423e02dded8052dd18d5fdb6d9eaeb6c40fb728e4703685dcb6a690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4906336be423e02dded8052dd18d5fdb6d9eaeb6c40fb728e4703685dcb6a690->leave($__internal_4906336be423e02dded8052dd18d5fdb6d9eaeb6c40fb728e4703685dcb6a690_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_125df042e63f0a517a6566a692dbae07b97407e4f0ccf79d04e4c98659572ac6 = $this->env->getExtension("native_profiler");
        $__internal_125df042e63f0a517a6566a692dbae07b97407e4f0ccf79d04e4c98659572ac6->enter($__internal_125df042e63f0a517a6566a692dbae07b97407e4f0ccf79d04e4c98659572ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_125df042e63f0a517a6566a692dbae07b97407e4f0ccf79d04e4c98659572ac6->leave($__internal_125df042e63f0a517a6566a692dbae07b97407e4f0ccf79d04e4c98659572ac6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e60526471acc0015875d7b7e1f61221bf3df685c2aedc9592ae337c11f6ec97 = $this->env->getExtension("native_profiler");
        $__internal_1e60526471acc0015875d7b7e1f61221bf3df685c2aedc9592ae337c11f6ec97->enter($__internal_1e60526471acc0015875d7b7e1f61221bf3df685c2aedc9592ae337c11f6ec97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e60526471acc0015875d7b7e1f61221bf3df685c2aedc9592ae337c11f6ec97->leave($__internal_1e60526471acc0015875d7b7e1f61221bf3df685c2aedc9592ae337c11f6ec97_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0b7f9a96a5cb6694531a4cb8947fd02b1477c3c3ad7c461c0f7369dfd1a38e9 = $this->env->getExtension("native_profiler");
        $__internal_a0b7f9a96a5cb6694531a4cb8947fd02b1477c3c3ad7c461c0f7369dfd1a38e9->enter($__internal_a0b7f9a96a5cb6694531a4cb8947fd02b1477c3c3ad7c461c0f7369dfd1a38e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0b7f9a96a5cb6694531a4cb8947fd02b1477c3c3ad7c461c0f7369dfd1a38e9->leave($__internal_a0b7f9a96a5cb6694531a4cb8947fd02b1477c3c3ad7c461c0f7369dfd1a38e9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
