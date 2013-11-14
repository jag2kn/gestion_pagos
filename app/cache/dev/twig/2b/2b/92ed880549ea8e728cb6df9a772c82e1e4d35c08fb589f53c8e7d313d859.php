<?php

/* JorgeGespagosBundle:Default:index.html.twig */
class __TwigTemplate_2b2b92ed880549ea8e728cb6df9a772c82e1e4d35c08fb589f53c8e7d313d859 extends Twig_Template
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
        // line 5
        echo "Gestión de pagos

\t";
        // line 7
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 8
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</li>
\t";
        } else {
            // line 10
            echo "\t\t<ul>
\t\t\t<li><a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Ingresar al sistema</a></li>
\t\t\t<li><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("registro");
            echo "\">Registrarse</a></li>
\t\t</ul>
\t";
        }
    }

    public function getTemplateName()
    {
        return "JorgeGespagosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  46 => 11,  43 => 10,  37 => 8,  35 => 7,  31 => 5,  28 => 3,);
    }
}
