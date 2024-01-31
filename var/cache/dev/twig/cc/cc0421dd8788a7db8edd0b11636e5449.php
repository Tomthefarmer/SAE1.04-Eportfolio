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

/* fr_competence/index.html.twig */
class __TwigTemplate_b0854fed3110befc7df30291392b8d65 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fr_competence/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fr_competence/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fr_competence/index.html.twig", 1);
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

        echo "Compétence";
        
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
    <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Administrer les Réseaux et l'Internet</strong></div>
        <div>
            <p>Comprendre les principes et standards du codage de l'information</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Configurer les fonctions de base du réseau LAN</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 95%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Maîtriser des protocoles et leurs rôles pour administrer des réseaux</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <br>
        </div>
    </div>

    <Bloc2 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Connecter les Entreprises et les Usagers</strong></div>
        <div>
            <p>Caractèriser des systèmes de transmissions élémentaire et modélisation mathématique</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Communiquer avec un client ou un collaborateur</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 65%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <br>
        </div>
    </Bloc2>

    <Bloc3 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Créer des Outils et Application Informatique pour les Réseaux & Télécommunication</strong></div>
        <div>
            <p>Utilisation un système informatique et de ses outils</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Programmer, lire, corriger un programme</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Connaître l'architecture et les technologies d'un site Web</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <br>
        </div>
    </Bloc3>
    <div style=\"text-align: center\">
        <p>Voici un contenaires</p>
    </div>
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
        return "fr_competence/index.html.twig";
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
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compétence{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!--Contenu-->
<head>
    <br>
    <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Administrer les Réseaux et l'Internet</strong></div>
        <div>
            <p>Comprendre les principes et standards du codage de l'information</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Configurer les fonctions de base du réseau LAN</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 95%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Maîtriser des protocoles et leurs rôles pour administrer des réseaux</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <br>
        </div>
    </div>

    <Bloc2 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Connecter les Entreprises et les Usagers</strong></div>
        <div>
            <p>Caractèriser des systèmes de transmissions élémentaire et modélisation mathématique</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Communiquer avec un client ou un collaborateur</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 65%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <br>
        </div>
    </Bloc2>

    <Bloc3 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Créer des Outils et Application Informatique pour les Réseaux & Télécommunication</strong></div>
        <div>
            <p>Utilisation un système informatique et de ses outils</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Programmer, lire, corriger un programme</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Connaître l'architecture et les technologies d'un site Web</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <br>
        </div>
    </Bloc3>
    <div style=\"text-align: center\">
        <p>Voici un contenaires</p>
    </div>
    <br>
</head>

{% endblock %}
", "fr_competence/index.html.twig", "C:\\Users\\lafer\\Downloads\\github\\Eportfolio2\\Eportfolio\\templates\\fr_competence\\index.html.twig");
    }
}
