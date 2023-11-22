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

/* backoffice/vol/index.html.twig */
class __TwigTemplate_f16fc8ea3aa097d9939f25cb35fe78a6 extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/vol/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/vol/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "backoffice/vol/index.html.twig", 1);
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

        echo "Vol index";
        
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
        echo "    <h1>Vol index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>NumeroVol</th>
                <th>DateDepart</th>
                <th>DateArrivee</th>
                <th>LieuDepart</th>
                <th>LieuArrivee</th>
                <th>CompagnieAerienne</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vol"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "numeroVol", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["vol"], "dateDepart", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "dateDepart", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["vol"], "dateArrivee", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "dateArrivee", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "LieuDepart", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "LieuArrivee", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "compagnieAerienne", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td><img src=\"../uploads/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "imagePath", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"img-fluid\" height=\"100\" width=\"125\"></td>

                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_show", ["id" => twig_get_attribute($this->env, $this->source, $context["vol"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["vol"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/vol/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 47,  171 => 44,  162 => 40,  153 => 36,  149 => 35,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  112 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Vol index{% endblock %}

{% block body %}
    <h1>Vol index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>NumeroVol</th>
                <th>DateDepart</th>
                <th>DateArrivee</th>
                <th>LieuDepart</th>
                <th>LieuArrivee</th>
                <th>CompagnieAerienne</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for vol in vols %}
            <tr>
                <td>{{ vol.id }}</td>
                <td>{{ vol.numeroVol }}</td>
                <td>{{ vol.dateDepart ? vol.dateDepart|date('Y-m-d') : '' }}</td>
                <td>{{ vol.dateArrivee ? vol.dateArrivee|date('Y-m-d') : '' }}</td>
                <td>{{ vol.LieuDepart }}</td>
                <td>{{ vol.LieuArrivee }}</td>
                <td>{{ vol.compagnieAerienne }}</td>
                <td><img src=\"../uploads/{{ vol.imagePath }}\" class=\"img-fluid\" height=\"100\" width=\"125\"></td>

                <td>
                    <a href=\"{{ path('app_vol_show', {'id': vol.id}) }}\">show</a>
                    <a href=\"{{ path('app_vol_edit', {'id': vol.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_vol_new') }}\">Create new</a>
{% endblock %}
", "backoffice/vol/index.html.twig", "C:\\xampp2\\htdocs\\ExploraTerra-gestionVol\\templates\\backoffice\\vol\\index.html.twig");
    }
}
