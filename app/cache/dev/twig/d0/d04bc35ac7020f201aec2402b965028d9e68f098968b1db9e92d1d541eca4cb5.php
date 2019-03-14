<?php

/* base.html.twig */
class __TwigTemplate_64115f2ff4895696aa3d0cc32534084f49cca34a8a1f1c299f8840b4ef3274a7 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"></script>
        <script src=\"http://wiese.github.io/jquery-sfPrototypeMan/jquery.sfprototypeman.js\" type=\"text/javascript\"></script>

        <script>

        function confirmDelete() 
        { 
            return confirm(\"Press OK to Delete. \");
        } 

        </script>

    </head>
    <body>


        <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
          <a class=\"navbar-brand\" href=\"#\">Symfony App</a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
            <ul class=\"navbar-nav\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact\">Contact</a>
              </li>

                ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "admin")) {
                // line 43
                echo "                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/university\">University</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/university_changed_user\">University changed user</a>
                      </li>
                    ";
            }
            // line 50
            echo "
                    ";
            // line 51
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "professor")) {
                // line 52
                echo "                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/user\">Students</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/assignment\">Assignments</a>
                      </li>
                    ";
            }
            // line 59
            echo "
                     ";
            // line 60
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "student")) {
                // line 61
                echo "                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/student_assignment/\">Assignments</a>
                      </li>
                    ";
            }
            // line 65
            echo "
                ";
        }
        // line 67
        echo "
            </ul>

            <ul class=\"nav navbar-nav\">
                ";
        // line 71
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 72
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/profile\">
                        ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " 
                        <img height=\"30px\" src= \"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getWebProfilePicturePath", array()), "html", null, true);
            echo "\">
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                ";
        } else {
            // line 83
            echo "                     <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        // line 87
        echo "            </ul>




          </div>  
        </nav>

        <div class=\"container\" style=\"margin-top:30px\">
            ";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "        <div>
            
    </div>


</div>

    <footer class=\"page-footer font-small blue\">
      <div class=\"footer-copyright text-center py-3\">© 2018 Copyright</div>
    </footer>


 </body>

";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  236 => 111,  225 => 96,  214 => 6,  202 => 5,  193 => 112,  191 => 111,  175 => 97,  173 => 96,  162 => 87,  154 => 84,  151 => 83,  143 => 80,  135 => 75,  131 => 74,  127 => 72,  125 => 71,  119 => 67,  115 => 65,  109 => 61,  107 => 60,  104 => 59,  95 => 52,  93 => 51,  90 => 50,  81 => 43,  78 => 42,  76 => 41,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"></script>
        <script src=\"http://wiese.github.io/jquery-sfPrototypeMan/jquery.sfprototypeman.js\" type=\"text/javascript\"></script>

        <script>

        function confirmDelete() 
        { 
            return confirm(\"Press OK to Delete. \");
        } 

        </script>

    </head>
    <body>


        <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
          <a class=\"navbar-brand\" href=\"#\">Symfony App</a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
            <ul class=\"navbar-nav\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact\">Contact</a>
              </li>

                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {% if app.user.role == 'admin' %}
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/university\">University</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/university_changed_user\">University changed user</a>
                      </li>
                    {% endif %}

                    {% if app.user.role == 'professor' %}
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/user\">Students</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/assignment\">Assignments</a>
                      </li>
                    {% endif %}

                     {% if app.user.role == 'student' %}
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/student_assignment/\">Assignments</a>
                      </li>
                    {% endif %}

                {% endif %}

            </ul>

            <ul class=\"nav navbar-nav\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/profile\">
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} 
                        <img height=\"30px\" src= \"{{ app.user.getWebProfilePicturePath }}\">
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\"> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>
                    </li>
                {% else %}
                     <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\"> {{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    </li>
                {% endif %}
            </ul>




          </div>  
        </nav>

        <div class=\"container\" style=\"margin-top:30px\">
            {% block body %}{% endblock %}
        <div>
            
    </div>


</div>

    <footer class=\"page-footer font-small blue\">
      <div class=\"footer-copyright text-center py-3\">© 2018 Copyright</div>
    </footer>


 </body>

{% block javascripts %}{% endblock %}

</html>
", "base.html.twig", "/home/curator/sat_sym_project/app/Resources/views/base.html.twig");
    }
}
