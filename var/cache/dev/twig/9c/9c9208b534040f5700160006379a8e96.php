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

/* frontoffice/index.html.twig */
class __TwigTemplate_ed36b6778187c317ce973265ac43dc99 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontoffice/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<!--packages start-->


<section id=\"pack\" class=\"packages\">
    <div class=\"container\">
        <div class=\"gallary-header text-center\">
            <h2>
                Vols : 
            </h2>
            <p>
               liste des vols 
            </p>
        </div><!--/.gallery-header-->
        
        <div class=\"packages-content\">
            <div class=\"row\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new RuntimeError('Variable "vols" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vol"]) {
            // line 25
            echo "                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"single-package-item\">
                    ";
            // line 27
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["vol"], "imagePath", [], "any", false, false, false, 27))) {
                // line 28
                echo "                        <img src=\"../uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "imagePath", [], "any", false, false, false, 28), "html", null, true);
                echo "\" alt=\"package-place\" height=\"345\" width=\"229\">
                    ";
            } else {
                // line 30
                echo "                      <img src=\"https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/5/d/3/5d3c0362c7_116006_avion-vol-paris-new-york.jpg\" alt=\"default-image\" height=\"345\" width=\"229\">
                    ";
            }
            // line 32
            echo "                        <div class=\"single-package-item-txt\">
                            <h3>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "numeroVol", [], "any", false, false, false, 33), "html", null, true);
            echo " <span class=\"pull-right\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "compagnieAerienne", [], "any", false, false, false, 33), "html", null, true);
            echo "</span></h3>
                            <div class=\"packages-para\">
                                <p>
                                    <span>
                                        <i class=\"fa fa-angle-right\"></i> ";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["vol"], "dateDepart", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "dateDepart", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                                    </span>
                                    <i class=\"fa fa-angle-right\"></i>  ";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["vol"], "dateArrivee", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "dateArrivee", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
                                </p>
                                <p>
                                    <span>
                                        <i class=\"fa fa-angle-right\"></i>de ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "LieuDepart", [], "any", false, false, false, 43), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "LieuArrivee", [], "any", false, false, false, 43), "html", null, true);
            echo "
                                    </span>
                                    <i class=\"fa fa-angle-right\"></i>  ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vol"], "compagnieAerienne", [], "any", false, false, false, 45), "html", null, true);
            echo "
                                 </p>
                            </div><!--/.packages-para-->
                           
                            <div class=\"about-btn\">
                                <button  class=\"about-view packages-btn\">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
            </div><!--/.row-->
        </div><!--/.packages-content-->
       
    </div><!--/.container-->

</section><!--/.packages-->
<!--packages end-->


<table class=\"table\">
        <thead>
            <tr>
                <th>NumeroSiege</th>
                <th>Prix</th>
                <th>Classe</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["billets"]) || array_key_exists("billets", $context) ? $context["billets"] : (function () { throw new RuntimeError('Variable "billets" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["billet"]) {
            // line 80
            echo "            <tr>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["billet"], "numeroSiege", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["billet"], "prix", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["billet"], "classe", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_billet_show", ["id" => twig_get_attribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_billet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["billet"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['billet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 94,  234 => 90,  225 => 86,  221 => 85,  216 => 83,  212 => 82,  208 => 81,  205 => 80,  200 => 79,  178 => 59,  158 => 45,  151 => 43,  144 => 39,  139 => 37,  130 => 33,  127 => 32,  123 => 30,  117 => 28,  115 => 27,  111 => 25,  107 => 24,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Welcome{% endblock %}

{% block body %}

<!--packages start-->


<section id=\"pack\" class=\"packages\">
    <div class=\"container\">
        <div class=\"gallary-header text-center\">
            <h2>
                Vols : 
            </h2>
            <p>
               liste des vols 
            </p>
        </div><!--/.gallery-header-->
        
        <div class=\"packages-content\">
            <div class=\"row\">
                {% for vol in vols %}
                <div class=\"col-md-4 col-sm-6\">
                    <div class=\"single-package-item\">
                    {% if vol.imagePath is not null %}
                        <img src=\"../uploads/{{ vol.imagePath }}\" alt=\"package-place\" height=\"345\" width=\"229\">
                    {% else %}
                      <img src=\"https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/5/d/3/5d3c0362c7_116006_avion-vol-paris-new-york.jpg\" alt=\"default-image\" height=\"345\" width=\"229\">
                    {% endif %}
                        <div class=\"single-package-item-txt\">
                            <h3>{{ vol.numeroVol }} <span class=\"pull-right\">{{ vol.compagnieAerienne }}</span></h3>
                            <div class=\"packages-para\">
                                <p>
                                    <span>
                                        <i class=\"fa fa-angle-right\"></i> {{ vol.dateDepart ? vol.dateDepart|date('Y-m-d') : '' }}
                                    </span>
                                    <i class=\"fa fa-angle-right\"></i>  {{ vol.dateArrivee ? vol.dateArrivee|date('Y-m-d') : '' }}
                                </p>
                                <p>
                                    <span>
                                        <i class=\"fa fa-angle-right\"></i>de {{ vol.LieuDepart }} à {{ vol.LieuArrivee }}
                                    </span>
                                    <i class=\"fa fa-angle-right\"></i>  {{ vol.compagnieAerienne }}
                                 </p>
                            </div><!--/.packages-para-->
                           
                            <div class=\"about-btn\">
                                <button  class=\"about-view packages-btn\">
                                    book now
                                </button>
                            </div><!--/.about-btn-->
                        </div><!--/.single-package-item-txt-->
                    </div><!--/.single-package-item-->

                </div><!--/.col-->
                {% endfor %}

            </div><!--/.row-->
        </div><!--/.packages-content-->
       
    </div><!--/.container-->

</section><!--/.packages-->
<!--packages end-->


<table class=\"table\">
        <thead>
            <tr>
                <th>NumeroSiege</th>
                <th>Prix</th>
                <th>Classe</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for billet in billets %}
            <tr>
                <td>{{ billet.numeroSiege }}</td>
                <td>{{ billet.prix }}</td>
                <td>{{ billet.classe }}</td>
                <td>
                    <a href=\"{{ path('app_billet_show', {'id': billet.id}) }}\">show</a>
                    <a href=\"{{ path('app_billet_edit', {'id': billet.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}", "frontoffice/index.html.twig", "C:\\xampp2\\htdocs\\ExploraTerra-gestionVol\\templates\\frontoffice\\index.html.twig");
    }
}
