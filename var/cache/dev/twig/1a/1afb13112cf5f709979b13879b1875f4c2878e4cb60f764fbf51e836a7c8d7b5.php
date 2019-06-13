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

/* /stagiaire/view_all_Stagiaire.html.twig */
class __TwigTemplate_0182d1f40a819a21498a728e260116857424687b5b81cc5b15a58d10443ddc2a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/stagiaire/view_all_Stagiaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/stagiaire/view_all_Stagiaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/stagiaire/view_all_Stagiaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        // line 13
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <style>
        table {
            border-collapse: collapse;
        }
        table td {
            border:1px solid;
            padding: 10px;
        }
    </style>


<div class=\"card\" style=\"margin:auto;width:13cm;background:#b3e2c7\">
    <div class=\"px-3 py-2\">
    <h1 class=\"alert alert-primary\"> Liste des Stagiaires <a  href=\"insert-with-form-stagiaire\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ajout.jpg"), "html", null, true);
        echo "\" title=\"Ajouter un stagiaire\" border=\"0\" width=\"40\" height=\"30\"/></a>
        </h1>


    <table >
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stagiaires"]) || array_key_exists("stagiaires", $context) ? $context["stagiaires"] : (function () { throw new RuntimeError('Variable "stagiaires" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["stagiaire"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "getname", [], "method", false, false, false, 40)), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "getphone", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "getbirthday", [], "method", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "</td>
                <td> <a  href=\"remove-stagiaire/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "getid", [], "method", false, false, false, 43), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/delete.jpg"), "html", null, true);
            echo "\" title=\"Supprimer un stagiaire\" border=\"0\" width=\"40\" height=\"30\"/></a>
                    <a  href=\"insert-with-form-stagiaire/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "getid", [], "method", false, false, false, 45), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/modif.jpg"), "html", null, true);
            echo "\" title=\"Modifier un stagiaire\" border=\"0\" width=\"40\" height=\"30\"/></a>
                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['stagiaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    </table>

    <script type=\"text/javascript\">

        \$(\"tr\").on('mouseover', function() {
            // le \$(this) reprénsente l'élément précis qui a déclenché l'évenement
            \$(this).css('background-color', 'red');
        });

        \$(\"tr\").on('mouseout', function() {
            \$(this).css('background-color', '');
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/stagiaire/view_all_Stagiaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 51,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  129 => 42,  125 => 41,  121 => 40,  118 => 39,  114 => 38,  106 => 33,  90 => 19,  81 => 18,  68 => 13,  66 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block menu %}
    {# surcharge du block menu dans base.html.twig : on laisse le block vide
        donc plus de menu sur ce template

        <a href=\"{{ path('remove-stagiaire', {'id': stagiaire.getid()}) }}\"
                   class=\"btn btn-default\">Sup</a>
    <img src=\"{{ asset('images/delete.jpg') }}\"
                          alt=\"Poubelle\" border=\"0\" width=\"40\" height=\"30\"/>

    #}



{% endblock %}

{% block body  %}
    <style>
        table {
            border-collapse: collapse;
        }
        table td {
            border:1px solid;
            padding: 10px;
        }
    </style>


<div class=\"card\" style=\"margin:auto;width:13cm;background:#b3e2c7\">
    <div class=\"px-3 py-2\">
    <h1 class=\"alert alert-primary\"> Liste des Stagiaires <a  href=\"insert-with-form-stagiaire\">
            <img src=\"{{ asset('images/ajout.jpg') }}\" title=\"Ajouter un stagiaire\" border=\"0\" width=\"40\" height=\"30\"/></a>
        </h1>


    <table >
        {% for key,stagiaire in stagiaires %}
            <tr>
                <td>{{ stagiaire.getname() |capitalize }}</td>
                <td>{{ stagiaire.getphone() }}</td>
                <td>{{ stagiaire.getbirthday() | date('d/m/Y') }}</td>
                <td> <a  href=\"remove-stagiaire/{{stagiaire.getid() }}\">
                        <img src=\"{{ asset('images/delete.jpg') }}\" title=\"Supprimer un stagiaire\" border=\"0\" width=\"40\" height=\"30\"/></a>
                    <a  href=\"insert-with-form-stagiaire/{{stagiaire.getid() }}\">
                        <img src=\"{{ asset('images/modif.jpg') }}\" title=\"Modifier un stagiaire\" border=\"0\" width=\"40\" height=\"30\"/></a>
                </td>

            </tr>
        {% endfor %}

    </table>

    <script type=\"text/javascript\">

        \$(\"tr\").on('mouseover', function() {
            // le \$(this) reprénsente l'élément précis qui a déclenché l'évenement
            \$(this).css('background-color', 'red');
        });

        \$(\"tr\").on('mouseout', function() {
            \$(this).css('background-color', '');
        });

    </script>
{% endblock %}", "/stagiaire/view_all_Stagiaire.html.twig", "C:\\xampp\\htdocs\\php\\php4\\exam\\esv_symfony\\app\\Resources\\views\\stagiaire\\view_all_Stagiaire.html.twig");
    }
}
