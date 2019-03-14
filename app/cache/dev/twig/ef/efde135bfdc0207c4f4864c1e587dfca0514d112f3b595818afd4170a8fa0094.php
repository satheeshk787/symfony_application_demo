<?php

/* user/myprofile.html.twig */
class __TwigTemplate_770be7e28ae2d5b585a25a7140b75b2196b2801ccdf2283c6bda5ef8f988a628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/myprofile.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/myprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Edit Myprofile ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t

\t<h1 style=\"width:100%;\">Edit My Profile</h1>

\t<style>
\t#form div
\t{
\t\tmargin: 14px;
\t}
\t</style>

\t";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 20
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
\t</script>

<!-- \t<script>

\tvar \$collectionHolder;

\t// setup an \"add a hobby\" link
\tvar \$addHobbyButton = \$('<button type=\"button\" class=\"add_hobby_link btn btn-success\">Add a hobby</button>');

\tvar \$newLinkLi = \$addHobbyButton;

\tjQuery(document).ready(function() {
\t    // Get the ul that holds the collection of hobbies
\t    \$collectionHolder = \$('#form_hobbies');

\t    // add the \"add a hobby\" anchor and li to the hobbyies ul
\t    \$collectionHolder.append(\$newLinkLi);

\t    // count the current form inputs we have (e.g. 2), use that as the new
\t    // index when inserting a new item (e.g. 2)
\t    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

\t    \$addHobbyButton.on('click', function(e) {
\t        // add a new hobby form (see next code block)
\t        addHobbyForm(\$collectionHolder, \$newLinkLi);
\t    });



\t    //for delete

\t  \t// Get the ul that holds the collection of hobbies
\t    \$collectionHolder = \$('#form_hobbies');

\t    // add a delete link to all of the existing hobby form li elements
\t    \$collectionHolder.find('div[id^=form_hobbies]').each(function() {
\t        addHobbyFormDeleteLink(\$(this));
\t    });

\t    // ... the rest of the block from above

\t});


\tfunction addHobbyForm(\$collectionHolder, \$newLinkLi) {
\t    // Get the data-prototype explained earlier
\t    var prototype = \$collectionHolder.data('prototype');

\t    // get the new index
\t    var index = \$collectionHolder.data('index');

\t    var newForm = prototype;
\t    // You need this only if you didn't set 'label' => false in your hobbies field in TaskType
\t    // Replace '__name__label__' in the prototype's HTML to
\t    // instead be a number based on how many items we have
\t    // newForm = newForm.replace(/__name__label__/g, index);

\t    // Replace '__name__' in the prototype's HTML to
\t    // instead be a number based on how many items we have
\t    newForm = newForm.replace(/__name__/g, index);

\t    // increase the index with one for the next item
\t    \$collectionHolder.data('index', index + 1);

\t    // Display the form in the page in an li, before the \"Add a hobby\" link li
\t    var \$newFormLi = newForm;
\t    \$newLinkLi.before(\$newFormLi);

\t    addHobbyFormDeleteLink(\$newFormLi);
\t}





\tfunction addHobbyFormDeleteLink(\$hobbyFormLi) 
\t{
\t    var \$removeFormButton = \$('<button type=\"button\" class=\"btn btn-danger\" style=\"position: absolute;margin-top: -52px;\">X</button>');
\t    \$hobbyFormLi.append(\$removeFormButton);

\t    \$removeFormButton.on('click', function(e) {
\t        // remove the li for the hobby form
\t        \$hobbyFormLi.remove();
\t    });
\t}




\t</script> -->




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/myprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 2,  11 => 1,);
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
{% block title %} Edit Myprofile {% endblock %}


{% block body %}

\t

\t<h1 style=\"width:100%;\">Edit My Profile</h1>

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
\t</script>

<!-- \t<script>

\tvar \$collectionHolder;

\t// setup an \"add a hobby\" link
\tvar \$addHobbyButton = \$('<button type=\"button\" class=\"add_hobby_link btn btn-success\">Add a hobby</button>');

\tvar \$newLinkLi = \$addHobbyButton;

\tjQuery(document).ready(function() {
\t    // Get the ul that holds the collection of hobbies
\t    \$collectionHolder = \$('#form_hobbies');

\t    // add the \"add a hobby\" anchor and li to the hobbyies ul
\t    \$collectionHolder.append(\$newLinkLi);

\t    // count the current form inputs we have (e.g. 2), use that as the new
\t    // index when inserting a new item (e.g. 2)
\t    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

\t    \$addHobbyButton.on('click', function(e) {
\t        // add a new hobby form (see next code block)
\t        addHobbyForm(\$collectionHolder, \$newLinkLi);
\t    });



\t    //for delete

\t  \t// Get the ul that holds the collection of hobbies
\t    \$collectionHolder = \$('#form_hobbies');

\t    // add a delete link to all of the existing hobby form li elements
\t    \$collectionHolder.find('div[id^=form_hobbies]').each(function() {
\t        addHobbyFormDeleteLink(\$(this));
\t    });

\t    // ... the rest of the block from above

\t});


\tfunction addHobbyForm(\$collectionHolder, \$newLinkLi) {
\t    // Get the data-prototype explained earlier
\t    var prototype = \$collectionHolder.data('prototype');

\t    // get the new index
\t    var index = \$collectionHolder.data('index');

\t    var newForm = prototype;
\t    // You need this only if you didn't set 'label' => false in your hobbies field in TaskType
\t    // Replace '__name__label__' in the prototype's HTML to
\t    // instead be a number based on how many items we have
\t    // newForm = newForm.replace(/__name__label__/g, index);

\t    // Replace '__name__' in the prototype's HTML to
\t    // instead be a number based on how many items we have
\t    newForm = newForm.replace(/__name__/g, index);

\t    // increase the index with one for the next item
\t    \$collectionHolder.data('index', index + 1);

\t    // Display the form in the page in an li, before the \"Add a hobby\" link li
\t    var \$newFormLi = newForm;
\t    \$newLinkLi.before(\$newFormLi);

\t    addHobbyFormDeleteLink(\$newFormLi);
\t}





\tfunction addHobbyFormDeleteLink(\$hobbyFormLi) 
\t{
\t    var \$removeFormButton = \$('<button type=\"button\" class=\"btn btn-danger\" style=\"position: absolute;margin-top: -52px;\">X</button>');
\t    \$hobbyFormLi.append(\$removeFormButton);

\t    \$removeFormButton.on('click', function(e) {
\t        // remove the li for the hobby form
\t        \$hobbyFormLi.remove();
\t    });
\t}




\t</script> -->




{% endblock %}", "user/myprofile.html.twig", "/home/curator/sat_sym_project/app/Resources/views/user/myprofile.html.twig");
    }
}
