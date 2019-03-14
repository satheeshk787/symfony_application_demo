<?php

/* assignment/student_assignment_view.html.twig */
class __TwigTemplate_e5765319ea62b7efc33fb2a2f593168ac19885b5f4cf0dd9116f377f0f605a7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/student_assignment_view.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/student_assignment_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Your Assignment Details</h1>



<!-- The Modal -->
<div class=\"modal\" id=\"myModal\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">

      <!-- Modal Header -->
      <div class=\"modal-header\">
        <h4 class=\"modal-title\"></h4>
        <button type=\"button\" class=\"close close-d\" data-dismiss=\"modal\">&times;</button>
      </div>

      <!-- Modal body -->
      <div class=\"modal-body\">
        
      </div>

      <!-- Modal footer -->
      <div class=\"modal-footer\">
        <button type=\"button\"  class=\"btn btn-danger close-d\" data-dismiss=\"modal\">Close</button>
      </div>

    </div>
  </div>
</div>




    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["assignment"] ?? $this->getContext($context, "assignment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["assignment"] ?? $this->getContext($context, "assignment")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["assignment"] ?? $this->getContext($context, "assignment")), "description", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Materials</th>
                <td>
                    <ul>
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["assignment"] ?? $this->getContext($context, "assignment")), "materials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 56
            echo "
                            <li>
                                <a class=\"show\" 
                                    title='";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
            echo "' 
                                    download='";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "getWebMaterialDataPath", array()), "html", null, true);
            echo "' 
                                    type='' 
                                    href=\"#\" 
                                    data-toggle=\"modal\" 
                                    data-target=\"#myModal\" > ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
            echo " </a> 
                            </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </ul>
                </td>


            </tr>

        </tbody>
    </table>







<script type=\"text/javascript\">
  
  \$(\".show\").click(function(){

      this.type = this.download.split('.').pop();

      \$(\".modal-title\").html(this.title);
      
      if(this.type == 'png' || this.type == 'jpg' || this.type == 'jpeg')
      {
         \$(\".modal-body\").html(\"<img style='width:100%;' src='\"+this.download+\"' >\");
      }
      else if(this.type == 'pdf')
      {
          \$(\".modal-body\").html(\"<iframe src='\"+this.download+\"' style='width:100%;height:-webkit-fill-available' ></iframe>\");
      }
      else if(this.type == 'mp4')
      {
          \$(\".modal-body\").html(\"<video style='width:100%;' controls><source src='\"+this.download+\"' type='video/mp4' style='width:100%;'> Your browser does not support the video tag.</video>\");
      }
      else
      {
          \$(\".modal-body\").html(\"We cannot recognize your file<br><a href='\"+this.download+\"' >Download File</a>\");
      }



  });
  \$(\".close-d\").click(function(){

    \$(\".modal-body\").html(\"\");
    \$(\".modal-title\").html(\"\");
  
  });
</script>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "assignment/student_assignment_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 68,  122 => 64,  115 => 60,  111 => 59,  106 => 56,  102 => 55,  92 => 48,  85 => 44,  78 => 40,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Your Assignment Details</h1>



<!-- The Modal -->
<div class=\"modal\" id=\"myModal\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">

      <!-- Modal Header -->
      <div class=\"modal-header\">
        <h4 class=\"modal-title\"></h4>
        <button type=\"button\" class=\"close close-d\" data-dismiss=\"modal\">&times;</button>
      </div>

      <!-- Modal body -->
      <div class=\"modal-body\">
        
      </div>

      <!-- Modal footer -->
      <div class=\"modal-footer\">
        <button type=\"button\"  class=\"btn btn-danger close-d\" data-dismiss=\"modal\">Close</button>
      </div>

    </div>
  </div>
</div>




    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ assignment.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ assignment.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ assignment.description }}</td>
            </tr>

            <tr>
                <th>Materials</th>
                <td>
                    <ul>
                        {% for material in assignment.materials %}

                            <li>
                                <a class=\"show\" 
                                    title='{{ material.title }}' 
                                    download='{{ material.getWebMaterialDataPath }}' 
                                    type='' 
                                    href=\"#\" 
                                    data-toggle=\"modal\" 
                                    data-target=\"#myModal\" > {{ material.title }} </a> 
                            </li>

                        {% endfor %}
                    </ul>
                </td>


            </tr>

        </tbody>
    </table>







<script type=\"text/javascript\">
  
  \$(\".show\").click(function(){

      this.type = this.download.split('.').pop();

      \$(\".modal-title\").html(this.title);
      
      if(this.type == 'png' || this.type == 'jpg' || this.type == 'jpeg')
      {
         \$(\".modal-body\").html(\"<img style='width:100%;' src='\"+this.download+\"' >\");
      }
      else if(this.type == 'pdf')
      {
          \$(\".modal-body\").html(\"<iframe src='\"+this.download+\"' style='width:100%;height:-webkit-fill-available' ></iframe>\");
      }
      else if(this.type == 'mp4')
      {
          \$(\".modal-body\").html(\"<video style='width:100%;' controls><source src='\"+this.download+\"' type='video/mp4' style='width:100%;'> Your browser does not support the video tag.</video>\");
      }
      else
      {
          \$(\".modal-body\").html(\"We cannot recognize your file<br><a href='\"+this.download+\"' >Download File</a>\");
      }



  });
  \$(\".close-d\").click(function(){

    \$(\".modal-body\").html(\"\");
    \$(\".modal-title\").html(\"\");
  
  });
</script>






{% endblock %}
", "assignment/student_assignment_view.html.twig", "/home/curator/sat_sym_project/app/Resources/views/assignment/student_assignment_view.html.twig");
    }
}
