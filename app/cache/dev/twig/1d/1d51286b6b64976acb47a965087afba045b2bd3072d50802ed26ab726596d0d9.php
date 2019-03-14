<?php

/* user/edit.html.twig */
class __TwigTemplate_f705cf6c44f437ee7f781abffe605572da9aeca55cb58eae9bf1befeaad336f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Edit User Profile ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h1 style=\"width:100%;\">Edit User Profile</h1>

\t<style>
\t#form div
\t{
\t\tmargin: 14px;
\t}
\t</style>

\t";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function() {
\t\t\tjQuery().sfPrototypeMan({ 
\t\t\t\taddButtonText: \"Add Hobby\",
\t\t\t\trmButtonText: \"Remove\"
\t\t\t});
\t\t\t
\t\t\tjQuery(\"#form_hobbies\").sortable();


\t\t});

\t\tvar first_val = \$(\"#form_university\").val();
\t\t\$('#form_university').append('<option value=\"'+ first_val +'\">Other</option>');
\t\t\$(\"#form_university_add\").parent().hide();

\t\t\$(\"#form_university\").change(function(){
\t\t\tif(\$('#form_university option:selected').text()=='Other')
\t\t\t{
\t\t\t\t\$(\"#form_university_add\").parent().show();
\t\t  \t}
\t\t  \telse
\t\t  \t{
\t\t  \t\t\$(\"#form_university_add\").val(\"\");
\t\t  \t\t\$(\"#form_university_add\").parent().hide();
\t\t  \t}

\t\t});

\t</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 17,  65 => 16,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
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
{% block title %} Edit User Profile {% endblock %}


{% block body %}

\t<h1 style=\"width:100%;\">Edit User Profile</h1>

\t<style>
\t#form div
\t{
\t\tmargin: 14px;
\t}
\t</style>

\t{{ form_start(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}

\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function() {
\t\t\tjQuery().sfPrototypeMan({ 
\t\t\t\taddButtonText: \"Add Hobby\",
\t\t\t\trmButtonText: \"Remove\"
\t\t\t});
\t\t\t
\t\t\tjQuery(\"#form_hobbies\").sortable();


\t\t});

\t\tvar first_val = \$(\"#form_university\").val();
\t\t\$('#form_university').append('<option value=\"'+ first_val +'\">Other</option>');
\t\t\$(\"#form_university_add\").parent().hide();

\t\t\$(\"#form_university\").change(function(){
\t\t\tif(\$('#form_university option:selected').text()=='Other')
\t\t\t{
\t\t\t\t\$(\"#form_university_add\").parent().show();
\t\t  \t}
\t\t  \telse
\t\t  \t{
\t\t  \t\t\$(\"#form_university_add\").val(\"\");
\t\t  \t\t\$(\"#form_university_add\").parent().hide();
\t\t  \t}

\t\t});

\t</script>


{% endblock %}", "user/edit.html.twig", "/home/curator/sat_sym_project/app/Resources/views/user/edit.html.twig");
    }
}
