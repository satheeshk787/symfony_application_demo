<?php

/* user/show.html.twig */
class __TwigTemplate_604709413576ccfaee1df58069a1a082d9a161eab7ecf6f3ad1d087f1eb8b7c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

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
      View Profile 
      <!-- <a style=\" float: right;\" href=\"/myprofile/edit\" class=\"btn btn-warning\">Edit</a> -->
  </div>
  <div class=\"card-body\">

      <table class=\"table\">
        <tr>
          <td colspan=\"2\" align=\"center\">
            <img height=\"150px\" src= \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "getWebProfilePicturePath", array()), "html", null, true);
        echo "\">
          </td>
        </tr>
        <tr>
          <th>User name</th>
          <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>University</th>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "university", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>Date of birth</th>
          <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "dob", array()), "d-m-Y"), "html", null, true);
        echo "</td>
        </tr>

         <tr>
          <th>Hobbies</th>
          <td>

          <ul>
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "hobbies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
            // line 43
            echo "              <li>
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["hobby"], "name", array()), "html", null, true);
            echo "
              </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </ul>
          </td>
        </tr>

        <tr>
          <th>Role</th>
          <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "role", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
      
      <!-- { include \"@FOSUser/Profile/show_content.html.twig\"} -->

  </div> 
</div>

  




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 53,  111 => 47,  102 => 44,  99 => 43,  95 => 42,  84 => 34,  77 => 30,  70 => 26,  63 => 22,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
      View Profile 
      <!-- <a style=\" float: right;\" href=\"/myprofile/edit\" class=\"btn btn-warning\">Edit</a> -->
  </div>
  <div class=\"card-body\">

      <table class=\"table\">
        <tr>
          <td colspan=\"2\" align=\"center\">
            <img height=\"150px\" src= \"{{ user.getWebProfilePicturePath }}\">
          </td>
        </tr>
        <tr>
          <th>User name</th>
          <td>{{user.username}}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{user.email}}</td>
        </tr>
        <tr>
          <th>University</th>
          <td>{{user.university}}</td>
        </tr>
        <tr>
          <th>Date of birth</th>
          <td>{{user.dob|date('d-m-Y')}}</td>
        </tr>

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
          <td>{{user.role}}</td>
        </tr>
      </table>
      
      <!-- { include \"@FOSUser/Profile/show_content.html.twig\"} -->

  </div> 
</div>

  




{% endblock %}
", "user/show.html.twig", "/home/curator/sat_sym_project/app/Resources/views/user/show.html.twig");
    }
}
