<?php

/* user/share_assignment.html.twig */
class __TwigTemplate_8dd4ce63eb9959ca9bb7e245c41717d00424c626d1ec3eb5cc4cc0007c004d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/share_assignment.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/share_assignment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Share to Students </h1>

   
<form method=\"post\" action=\"\" > 

    <table class=\"table\">
        <thead>
            <tr>
                <th>Select</th>
                <th>User Name</th>
                <th>Email</th>
                <th colspan=\"3\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context["i"] = 0;
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "            <tr>
                <td>
                    <label>
                        <input ";
            // line 24
            if (twig_in_filter($this->getAttribute($context["user"], "id", array()), ($context["users_shares"] ?? $this->getContext($context, "users_shares")))) {
                echo "checked";
            }
            echo " name=\"share[]\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" > Select user
                    </label>
                    ";
            // line 26
            if (twig_in_filter($this->getAttribute($context["user"], "id", array()), ($context["users_shares"] ?? $this->getContext($context, "users_shares")))) {
                // line 27
                echo "                        <input type=\"hidden\" name=\"before_shared_users[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 29
            echo "                    
                </td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a></td>

                </td>
            </tr>
        ";
            // line 37
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 38
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>




<input type=\"submit\" class=\"btn btn-primary\" value=\"Share\">


</form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/share_assignment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  107 => 38,  105 => 37,  98 => 33,  94 => 32,  90 => 31,  86 => 29,  80 => 27,  78 => 26,  69 => 24,  64 => 21,  59 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Share to Students </h1>

   
<form method=\"post\" action=\"\" > 

    <table class=\"table\">
        <thead>
            <tr>
                <th>Select</th>
                <th>User Name</th>
                <th>Email</th>
                <th colspan=\"3\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% set i=0 %}
        {% for user in users %}
            <tr>
                <td>
                    <label>
                        <input {% if user.id in users_shares %}checked{% endif %} name=\"share[]\" type=\"checkbox\" value=\"{{ user.id }}\" > Select user
                    </label>
                    {% if user.id in users_shares %}
                        <input type=\"hidden\" name=\"before_shared_users[]\" value=\"{{ user.id }}\">
                    {% endif %}
                    
                </td>
                <td>{{ user.username }}</td>
                <td>{{ user.email }}</td>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a></td>

                </td>
            </tr>
        {% set i=i+1 %}
        {% endfor %}
        </tbody>
    </table>




<input type=\"submit\" class=\"btn btn-primary\" value=\"Share\">


</form>


{% endblock %}
", "user/share_assignment.html.twig", "/home/curator/sat_sym_project/app/Resources/views/user/share_assignment.html.twig");
    }
}
