<?php

/* base.html.twig */
class __TwigTemplate_dd8d46e1063d94e0ed459c73e1d8bd814aea14a5fdcebe820808fe6dd8b47b31 extends Twig_Template
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
                    ";
            }
            // line 47
            echo "                ";
        }
        // line 48
        echo "
            </ul>

            <ul class=\"nav navbar-nav\">
                ";
        // line 52
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/profile\">
                        ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " 
                        <img height=\"30px\" src= \"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "getWebProfilePicturePath", array()), "html", null, true);
            echo "\">
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                ";
        } else {
            // line 64
            echo "                     <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        // line 68
        echo "            </ul>




          </div>  
        </nav>

        <div class=\"container\" style=\"margin-top:30px\">
            ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "        <div>
            
    </div>


</div>

    <footer class=\"page-footer font-small blue\">
      <div class=\"footer-copyright text-center py-3\">© 2018 Copyright</div>
    </footer>


 </body>

";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
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

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
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
        return array (  207 => 92,  196 => 77,  185 => 6,  173 => 5,  164 => 93,  162 => 92,  146 => 78,  144 => 77,  133 => 68,  125 => 65,  122 => 64,  114 => 61,  106 => 56,  102 => 55,  98 => 53,  96 => 52,  90 => 48,  87 => 47,  81 => 43,  78 => 42,  76 => 41,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
