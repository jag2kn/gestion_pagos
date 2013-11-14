<?php

/* ::base.html.twig */
class __TwigTemplate_bd1e4ad7bf8e65be8fa0b4f08875978495aba3c02f51a4f159c19bf5c82a8a6d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jorgegespagos/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jorgegespagos/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jorgegespagos/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<style>\t
        \ttable {
\t\t\t\tbackground-color: rgba(0, 0, 0, 0);
\t\t\t\tborder-collapse: collapse;
\t\t\t\tborder-spacing: 0;
\t\t\t\tmax-width: 100%;
\t\t\t}
        \ttable thead{
        \t\tbackground-color: #82bdf3;
        \t}
        \ttable th{
        \t\tpadding: 10px 15px;
        \t\tborder: 1px solid gray;
        \t}
        \t
        \ttable td {
        \t\tborder: 1px solid gray;
        \t\tpadding: 10px 15px;
        \t} 
        </style>
    </head>
    <body>

<div class=\"container\">
    \t";
        // line 37
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 38
            echo "\t    \tBienvenido: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a>
\t    \t<hr>
\t    \t
    \t";
        } else {
            // line 42
            echo "    \t\t
    \t";
        }
        // line 44
        echo "    
<h1>Gestión de pagos</h1>

        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "

<hr/>
<div class=\"container\">
Programación Web en PHP 2013-II - Proyecto Aula<br>
Jorge Andrés González Cetina - 1310012235
</div>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gestión de pagos";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  131 => 47,  126 => 6,  120 => 5,  113 => 57,  111 => 56,  101 => 48,  99 => 47,  94 => 44,  90 => 42,  80 => 38,  78 => 37,  50 => 12,  46 => 11,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
