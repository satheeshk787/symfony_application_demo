<?php

/* user/share.html.twig */
class __TwigTemplate_05c78153d44507841b9575f0a1f8cc713ff077e387a3f26ef5af195d982ab55d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/share.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/share.html.twig"));

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




<div class=\"input-group md-form form-sm form-2 pl-0\">
  <input class=\"form-control my-0 py-1 amber-border\" type=\"text\" id=\"search\" value=\"\" placeholder=\"Search\" aria-label=\"Search\">
  <div class=\"input-group-append\">
    <input type=\"button\" class=\"btn btn-primary\" id=\"search_submit\" value=\"Search\">
    <input type=\"button\" class=\"btn btn-danger\" id=\"search_close\" value=\"X\">
  </div>
</div>

<script type=\"text/javascript\">
    \$(\"#search_submit\").click(function(){
      window.location.href = \"?search=\"+ \$('#search').val();
    });
    \$('#search').on(\"keypress\", function(e) {
        if (e.keyCode == 13) {
            window.location.href = \"?search=\"+ \$('#search').val();
        }
    });
    \$(\"#search_close\").click(function(){
      window.location.href = \"?\";
    });
</script>



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
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "            <tr>
                <td>
                    <label>
                        <input ";
            // line 49
            if (twig_in_filter($this->getAttribute($context["user"], "id", array()), ($context["users_shares"] ?? $this->getContext($context, "users_shares")))) {
                echo "checked";
            }
            echo " name=\"share[]\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" > Select user
                    </label>
                    ";
            // line 51
            if (twig_in_filter($this->getAttribute($context["user"], "id", array()), ($context["users_shares"] ?? $this->getContext($context, "users_shares")))) {
                // line 52
                echo "                        <input type=\"hidden\" name=\"before_shared_users[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 54
            echo "                    
                </td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a></td>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>




<input type=\"submit\" class=\"btn btn-primary\" value=\"Share\">


</form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  121 => 58,  117 => 57,  113 => 56,  109 => 54,  103 => 52,  101 => 51,  92 => 49,  87 => 46,  83 => 45,  40 => 4,  34 => 3,  11 => 1,);
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




<div class=\"input-group md-form form-sm form-2 pl-0\">
  <input class=\"form-control my-0 py-1 amber-border\" type=\"text\" id=\"search\" value=\"\" placeholder=\"Search\" aria-label=\"Search\">
  <div class=\"input-group-append\">
    <input type=\"button\" class=\"btn btn-primary\" id=\"search_submit\" value=\"Search\">
    <input type=\"button\" class=\"btn btn-danger\" id=\"search_close\" value=\"X\">
  </div>
</div>

<script type=\"text/javascript\">
    \$(\"#search_submit\").click(function(){
      window.location.href = \"?search=\"+ \$('#search').val();
    });
    \$('#search').on(\"keypress\", function(e) {
        if (e.keyCode == 13) {
            window.location.href = \"?search=\"+ \$('#search').val();
        }
    });
    \$(\"#search_close\").click(function(){
      window.location.href = \"?\";
    });
</script>



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
        {% endfor %}
        </tbody>
    </table>




<input type=\"submit\" class=\"btn btn-primary\" value=\"Share\">


</form>


{% endblock %}
", "user/share.html.twig", "/home/curator/sat_sym_project/app/Resources/views/user/share.html.twig");
    }
}
