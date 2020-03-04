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

/* authentification.html.twig */
class __TwigTemplate_73a0c103a008bcf4ec52ebb0870b280b0a260a0c17a7edb74c250e952319c40f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentification.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<link href=\"../public/css/AuthentificationCSS.css\" rel=\"stylesheet\" type=\"text/css\"/>
<h1>Page d'authentification, numéro chance ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
<div class=\"content\">
    <h1 >Authentification</h1>
    <form name=\"authentification\" method=\"POST\">
        <div class=\"item\">
            <label for=\"input_username\">Utilisateur : </label>
            <input type=\"text\" name=\"utilisateur\" id=\"utilisateur\" value=\"\" size=\"24\" class=\"textfield\"/>
        </div>
        <div class=\"item\">
            <label for=\"input_password\">Mot de passe : </label>
            <input type=\"password\" name=\"mdp\" id=\"mdp\" value=\"\" size=\"24\" class=\"textfield\" />
        </div>
        <div class=\"itemButton\">
            <input id=\"input_go\" type=\"submit\" value=\"OK !\"/>
        </div>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  59 => 7,  52 => 6,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# empty Twig template #}
{% extends 'base.html.twig' %}



{% block body %}
<link href=\"../public/css/AuthentificationCSS.css\" rel=\"stylesheet\" type=\"text/css\"/>
<h1>Page d'authentification, numéro chance {{ number }}</h1>
<div class=\"content\">
    <h1 >Authentification</h1>
    <form name=\"authentification\" method=\"POST\">
        <div class=\"item\">
            <label for=\"input_username\">Utilisateur : </label>
            <input type=\"text\" name=\"utilisateur\" id=\"utilisateur\" value=\"\" size=\"24\" class=\"textfield\"/>
        </div>
        <div class=\"item\">
            <label for=\"input_password\">Mot de passe : </label>
            <input type=\"password\" name=\"mdp\" id=\"mdp\" value=\"\" size=\"24\" class=\"textfield\" />
        </div>
        <div class=\"itemButton\">
            <input id=\"input_go\" type=\"submit\" value=\"OK !\"/>
        </div>
    </form>
</div>
{% endblock %}", "authentification.html.twig", "/var/www/html/GestionLocative/templates/authentification.html.twig");
    }
}
