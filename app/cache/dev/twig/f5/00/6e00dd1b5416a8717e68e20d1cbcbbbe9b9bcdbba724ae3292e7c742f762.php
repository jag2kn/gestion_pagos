<?php

/* JorgeGespagosBundle:Usuario:edit.html.twig */
class __TwigTemplate_f5006e00dd1b5416a8717e68e20d1cbcbbbe9b9bcdbba724ae3292e7c742f762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Usuario edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_usuario");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "JorgeGespagosBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  160 => 57,  127 => 45,  113 => 54,  77 => 27,  70 => 24,  134 => 54,  129 => 45,  124 => 6,  97 => 35,  76 => 35,  23 => 1,  148 => 70,  118 => 5,  114 => 50,  104 => 37,  81 => 34,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 59,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 68,  135 => 53,  119 => 42,  102 => 46,  71 => 19,  67 => 26,  63 => 15,  59 => 14,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 71,  142 => 59,  138 => 54,  136 => 48,  121 => 43,  117 => 42,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  94 => 28,  89 => 33,  85 => 31,  75 => 26,  68 => 14,  56 => 9,  38 => 6,  26 => 6,  93 => 34,  88 => 38,  78 => 36,  87 => 25,  46 => 14,  44 => 12,  31 => 4,  27 => 4,  25 => 5,  21 => 2,  24 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 74,  145 => 50,  139 => 49,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 55,  108 => 36,  101 => 32,  98 => 45,  96 => 31,  83 => 25,  74 => 30,  66 => 24,  55 => 19,  52 => 18,  50 => 12,  43 => 10,  41 => 5,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 39,  106 => 50,  103 => 32,  99 => 36,  95 => 42,  92 => 42,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 23,  60 => 22,  57 => 21,  54 => 10,  51 => 14,  48 => 13,  45 => 9,  42 => 10,  39 => 10,  36 => 5,  33 => 5,  30 => 7,);
    }
}
