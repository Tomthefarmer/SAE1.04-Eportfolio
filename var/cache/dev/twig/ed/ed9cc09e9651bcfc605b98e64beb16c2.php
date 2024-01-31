<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* en_cv/index.html.twig */
class __TwigTemplate_74f9d1621ce117c5c807663b7f98fba4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseen.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en_cv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en_cv/index.html.twig"));

        $this->parent = $this->loadTemplate("baseen.html.twig", "en_cv/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!--Contenu-->
<head>   
    <br>
    <bloc1 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\">Training</div>
        <div class=\"card-body\">
          <h4 class=\"card-title\">BUT Networks and Telecommunications</h4>
          <p class=\"card-text\">IUT de Roanne<br>
            2023 - Now
        </p>
        <h4 class=\"card-title\">General Baccalaureate</h4>
        <p class=\"card-text\">Jean Perrin High School, Lyon<br>
            2020 - 2023
        </p>
        <h4 class=\"card-title\">Middle school certificate</h4>
        <p class=\"card-text\">Jean Perrin Middle School, Lyon<br>
            2016 - 2020
        </p>
        </div>
    </bloc1>
    <bloc2 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\">Professional experiences</div>
        <div class=\"card-body\">
            <h4 class=\"card-title\">Internship</h4>
            <p class=\"card-text\">- Service area (customer reception, repairs)<br>
              - IT asset management (after-sales service, equipment returns)
          </p>
        </div>
    </bloc2>
    <br>
</head>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "en_cv/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseen.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!--Contenu-->
<head>   
    <br>
    <bloc1 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\">Training</div>
        <div class=\"card-body\">
          <h4 class=\"card-title\">BUT Networks and Telecommunications</h4>
          <p class=\"card-text\">IUT de Roanne<br>
            2023 - Now
        </p>
        <h4 class=\"card-title\">General Baccalaureate</h4>
        <p class=\"card-text\">Jean Perrin High School, Lyon<br>
            2020 - 2023
        </p>
        <h4 class=\"card-title\">Middle school certificate</h4>
        <p class=\"card-text\">Jean Perrin Middle School, Lyon<br>
            2016 - 2020
        </p>
        </div>
    </bloc1>
    <bloc2 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\">Professional experiences</div>
        <div class=\"card-body\">
            <h4 class=\"card-title\">Internship</h4>
            <p class=\"card-text\">- Service area (customer reception, repairs)<br>
              - IT asset management (after-sales service, equipment returns)
          </p>
        </div>
    </bloc2>
    <br>
</head>

{% endblock %}
", "en_cv/index.html.twig", "C:\\Users\\lafer\\Downloads\\github\\Eportfolio2\\Eportfolio\\templates\\en_cv\\index.html.twig");
    }
}
