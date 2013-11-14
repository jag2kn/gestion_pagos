<?php

/* JorgeGespagosBundle:Pagos:index.html.twig */
class __TwigTemplate_3016c2171b2925125182f9eebbad8308726bd3e891eec00f05ac871e49acd7ca extends Twig_Template
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
        echo "<h1>Lista de Pagos - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombres"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos"), "html", null, true);
        echo "</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Periodo</th>
                <th>Constante</th>
                <th>Monto</th>
                <th>Descripción</th>
                <th>Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagos_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "periodo"), "html", null, true);
            echo "</td>
                <td>
                \t";
            // line 26
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "constante") == 1)) {
                // line 27
                echo "                \t\tConstante
                \t";
            } else {
                // line 29
                echo "                \t\tUnico
                \t";
            }
            // line 31
            echo "
                </td>
                <td>\$ ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "monto"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapago")) {
                // line 36
                echo "                \t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapago"), "Y-m-d"), "html", null, true);
                echo "<br>
                \t\t<strong>\$ ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pagorealizado"), "html", null, true);
                echo "</strong>
                \t";
            } else {
                // line 39
                echo "                \t\t<strong>Pago no realizado</strong>
                \t";
            }
            // line 40
            echo "</td>
                <td>
\t\t                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagos_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Ver detalles</a><br>
\t\t                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a><hr>
\t\t                    ";
            // line 44
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapago")) {
                // line 45
                echo "\t\t\t\t\t\t    ";
            } else {
                // line 46
                echo "\t\t                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagos_do", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">Realizar pago</a><hr>
\t\t                   \t";
            }
            // line 48
            echo "\t\t                    <div style=\"font-size: 10px;\">
\t\t\t\t\t\t    Creado: ";
            // line 49
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actualizacion")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actualizacion"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "<br>
\t\t\t\t\t\t    Modificado: ";
            // line 50
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creacion")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creacion"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "<br>
\t\t\t\t\t\t    </div>
\t\t                </li>
\t\t            </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("pagos_new");
        echo "\">
                Crear nuevo pago
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "JorgeGespagosBundle:Pagos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  160 => 57,  145 => 50,  139 => 49,  136 => 48,  130 => 46,  127 => 45,  125 => 44,  121 => 43,  117 => 42,  113 => 40,  109 => 39,  104 => 37,  99 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 31,  81 => 29,  77 => 27,  75 => 26,  70 => 24,  64 => 23,  60 => 22,  57 => 21,  53 => 20,  31 => 4,  28 => 3,);
    }
}
