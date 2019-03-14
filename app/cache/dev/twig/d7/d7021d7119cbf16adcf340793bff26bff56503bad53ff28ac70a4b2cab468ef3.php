<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_1dfb62af8e8a7f0ecf98c0fbc88bf4bd8876b6dead1d40952c41fd6393145f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<div class=\"card\">
  <div class=\"card-header bg-primary text-white\">
  \t\tView Profile 
       ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "          ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "student")) {
                // line 12
                echo "  \t\t        <a style=\" float: right;\" href=\"/student_profile/edit\" class=\"btn btn-warning\">Edit</a>
          ";
            } else {
                // line 14
                echo "              <a style=\" float: right;\" href=\"/myprofile/edit\" class=\"btn btn-warning\">Edit</a>
          ";
            }
            // line 16
            echo "      ";
        }
        // line 17
        echo "  </div>
  <div class=\"card-body\">


  \t\t<table class=\"table\">
  \t\t\t<tr>
  \t\t\t\t<td colspan=\"2\" align=\"center\">
  \t\t\t\t\t<img height=\"150px\" src= \"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getWebProfilePicturePath", array()), "html", null, true);
        echo "\">
  \t\t\t\t</td>
  \t\t\t</tr>
  \t\t\t<tr>
  \t\t\t\t<th>User name</th>
  \t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</td>
  \t\t\t</tr>
  \t\t\t<tr>
  \t\t\t\t<th>Email</th>
  \t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
  \t\t\t</tr>

  \t\t\t<tr>
  \t\t\t\t<th>Date of birth</th>
  \t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "dob", array()), "d-m-Y"), "html", null, true);
        echo "</td>
  \t\t\t</tr>


        ";
        // line 42
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "university", array()) != "")) {
            // line 43
            echo "          ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getUniversityStatus", array()) == "")) {
                // line 44
                echo "            <tr>
              <th>University name</th>
              <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "university", array()), "html", null, true);
                echo "</td>
            </tr>
          ";
            } else {
                // line 49
                echo "             <tr>
              <th>University name</th>
              <td>You are selected '";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "university", array()), "html", null, true);
                echo "' and your university under review. </td>
            </tr>
          ";
            }
            // line 54
            echo "        ";
        }
        // line 55
        echo "


         <tr>
          <th>Hobbies</th>
          <td>

          <ul>
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "hobbies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 64
            echo "              <li>
                  ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["hobby"], "name", array()), "html", null, true);
            echo "
              </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "          </ul>
          </td>
        </tr>


        <tr>
          <th>Role</th>
          <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()), "html", null, true);
        echo "</td>
        </tr>
  \t\t</table>
      
  \t\t<!-- { include \"@FOSUser/Profile/show_content.html.twig\"} -->

  </div> 
</div>

\t




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 75,  157 => 68,  148 => 65,  145 => 64,  141 => 63,  131 => 55,  128 => 54,  122 => 51,  118 => 49,  112 => 46,  108 => 44,  105 => 43,  103 => 42,  96 => 38,  88 => 33,  81 => 29,  73 => 24,  64 => 17,  61 => 16,  57 => 14,  53 => 12,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}



<div class=\"card\">
  <div class=\"card-header bg-primary text-white\">
  \t\tView Profile 
       {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
          {% if app.user.role == 'student' %}
  \t\t        <a style=\" float: right;\" href=\"/student_profile/edit\" class=\"btn btn-warning\">Edit</a>
          {% else %}
              <a style=\" float: right;\" href=\"/myprofile/edit\" class=\"btn btn-warning\">Edit</a>
          {% endif %}
      {% endif %}
  </div>
  <div class=\"card-body\">


  \t\t<table class=\"table\">
  \t\t\t<tr>
  \t\t\t\t<td colspan=\"2\" align=\"center\">
  \t\t\t\t\t<img height=\"150px\" src= \"{{ app.user.getWebProfilePicturePath }}\">
  \t\t\t\t</td>
  \t\t\t</tr>
  \t\t\t<tr>
  \t\t\t\t<th>User name</th>
  \t\t\t\t<td>{{app.user.username}}</td>
  \t\t\t</tr>
  \t\t\t<tr>
  \t\t\t\t<th>Email</th>
  \t\t\t\t<td>{{app.user.email}}</td>
  \t\t\t</tr>

  \t\t\t<tr>
  \t\t\t\t<th>Date of birth</th>
  \t\t\t\t<td>{{app.user.dob|date('d-m-Y')}}</td>
  \t\t\t</tr>


        {% if app.user.university !=\"\" %}
          {% if app.user.getUniversityStatus=='' %}
            <tr>
              <th>University name</th>
              <td>{{app.user.university}}</td>
            </tr>
          {% else %}
             <tr>
              <th>University name</th>
              <td>You are selected '{{app.user.university}}' and your university under review. </td>
            </tr>
          {% endif %}
        {% endif %}



         <tr>
          <th>Hobbies</th>
          <td>

          <ul>
          {% for hobby in user.hobbies %}
              <li>
                  {{ hobby.name }}
              </li>
          {% endfor %}
          </ul>
          </td>
        </tr>


        <tr>
          <th>Role</th>
          <td>{{app.user.role}}</td>
        </tr>
  \t\t</table>
      
  \t\t<!-- { include \"@FOSUser/Profile/show_content.html.twig\"} -->

  </div> 
</div>

\t




{% endblock %}
", "@FOSUser/Profile/show.html.twig", "/home/curator/sat_sym_project/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
