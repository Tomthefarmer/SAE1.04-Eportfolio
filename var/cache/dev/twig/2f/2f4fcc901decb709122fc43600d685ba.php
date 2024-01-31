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

/* en_competence/index.html.twig */
class __TwigTemplate_00308562a8da1327fb0e924ef5e9bfe6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en_competence/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en_competence/index.html.twig"));

        $this->parent = $this->loadTemplate("baseen.html.twig", "en_competence/index.html.twig", 1);
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
    <Bloc1 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Managing networks and the Internet</strong></div>
        <div>
            <p>Understand information coding principles and standards</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Configure basic LAN functions</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 95%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Master protocols and their roles in network administration</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            
            <br>
        </div>

    </Bloc1>

    <Bloc2 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Connecting businesses and consumers</strong></div>
        <div>
            <p>Characterizing elementary transmission systems and mathematical modeling</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Communicating with a customer or colleague</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 65%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            
            <br>
        </div>
    </Bloc2>

    <Bloc3 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Creating IT Tools and Applications for Networks & Telecommunications</strong></div>
        <div>
            <p>Using a computer system and its tools</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Programming, reading and correcting a program</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Knowledge of website architecture and technologies</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            
            <br>
        </div>
    </Bloc3>
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
        return "en_competence/index.html.twig";
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

{% block title %}Compétence{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!--Contenu-->
<head>
    <br>
    <Bloc1 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Managing networks and the Internet</strong></div>
        <div>
            <p>Understand information coding principles and standards</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Configure basic LAN functions</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 95%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Master protocols and their roles in network administration</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            
            <br>
        </div>

    </Bloc1>

    <Bloc2 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Connecting businesses and consumers</strong></div>
        <div>
            <p>Characterizing elementary transmission systems and mathematical modeling</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Communicating with a customer or colleague</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 65%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            
            <br>
        </div>
    </Bloc2>

    <Bloc3 class=\"card text-white bg-primary mb-3\" style=\"max-width: 50%; text-align: center; margin:0 auto\">
        <div class=\"card-header\"><strong>Creating IT Tools and Applications for Networks & Telecommunications</strong></div>
        <div>
            <p>Using a computer system and its tools</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Programming, reading and correcting a program</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            <p>Knowledge of website architecture and technologies</p>
            <div class=\"progress\">
                <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
            
            <br>
        </div>
    </Bloc3>
    <br>
</head>

{% endblock %}
", "en_competence/index.html.twig", "C:\\Users\\lafer\\Downloads\\github\\Eportfolio2\\Eportfolio\\templates\\en_competence\\index.html.twig");
    }
}
