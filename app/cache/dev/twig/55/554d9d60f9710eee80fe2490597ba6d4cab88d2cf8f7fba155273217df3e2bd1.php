<?php

/* assignment/student_assignment.html.twig */
class __TwigTemplate_15bb03c8991b32d00cc36417df0cb16328d5fe03e713a69b8340cad8d7b94052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/student_assignment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/student_assignment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Your Assignments list</h1>

    <table class='table'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Expire date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shares"] ?? $this->getContext($context, "shares")));
        foreach ($context['_seq'] as $context["_key"] => $context["share"]) {
            // line 18
            echo "            <tr>
              
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["share"], "assignment", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["share"], "assignment", array()), "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["share"], "assignment", array()), "getExpireDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["share"], "assignment", array()), "description", array()), "html", null, true);
            echo "</td>
                
                <td>
                    ";
            // line 26
            if (($this->getAttribute($this->getAttribute($context["share"], "assignment", array()), "status", array()) == "ACTIVE")) {
                // line 27
                echo "                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_assignment_show", array("id" => $this->getAttribute($this->getAttribute($context["share"], "assignment", array()), "id", array()))), "html", null, true);
                echo "\">show</a>
                    ";
            } else {
                // line 29
                echo "                      The link expired.
                    ";
            }
            // line 31
            echo "                </td>
               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "assignment/student_assignment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  93 => 31,  89 => 29,  83 => 27,  81 => 26,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Your Assignments list</h1>

    <table class='table'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Expire date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for share in shares %}
            <tr>
              
                <td>{{ share.assignment.name }}</td>
                <td>{{ share.assignment.status }}</td>
                <td>{{ share.assignment.getExpireDate|date(\"d-m-Y\") }}</td>
                <td>{{ share.assignment.description }}</td>
                
                <td>
                    {% if share.assignment.status=='ACTIVE' %}
                     <a href=\"{{ path('student_assignment_show', { 'id': share.assignment.id }) }}\">show</a>
                    {% else %}
                      The link expired.
                    {% endif %}
                </td>
               
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "assignment/student_assignment.html.twig", "/home/curator/sat_sym_project/app/Resources/views/assignment/student_assignment.html.twig");
    }
}
