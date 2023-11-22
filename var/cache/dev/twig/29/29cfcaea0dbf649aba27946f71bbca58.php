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

/* admin/partials/sidebar.html.twig */
class __TwigTemplate_39ed7b1d7d5b09b4f459c898bed4ec7d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/sidebar.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("partials/_macro.html.twig", "admin/partials/sidebar.html.twig", 1)->unwrap();
        // line 2
        echo "
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\"> </div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    <li class=\"nav-item ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_is_active", ["admin_dashboard"], 13, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>Tableau de bord</span>
        </a>
    </li>

    <hr class=\"sidebar-divider my-0\">

        ";
        // line 23
        echo "                                                                ";
        // line 24
        echo "        ";
        // line 25
        echo "
            ";
        // line 48
        echo "
        ";
        // line 50
        echo "

    <li class=\"nav-item ";
        // line 52
        echo twig_call_macro($macros["macros"], "macro_is_active", ["admin_user"], 52, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">
            <i class=\"fas fa-user\"></i>
            <span>Evenement</span>
        </a>
    </li>

      
    <hr class=\"sidebar-divider d-none d-md-block\">


    <li class=\"nav-item ";
        // line 63
        echo twig_call_macro($macros["macros"], "macro_is_active", ["admin_user"], 63, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        echo "\">
            <i class=\"fas fa-user\"></i>
            <span>Categorie</span>
        </a>
    </li>
 <!--<hr class=\"sidebar-divider d-none d-md-block\">
 <li class=\"nav-item ";
        // line 70
        echo twig_call_macro($macros["macros"], "macro_is_active", ["admin_user"], 70, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_index");
        echo "\">
            <i class=\"fas fa-user\"></i>
            <span>Vols</span>
        </a>
    </li>
 <hr class=\"sidebar-divider d-none d-md-block\">
    <li class=\"nav-item ";
        // line 77
        echo twig_call_macro($macros["macros"], "macro_is_active", ["admin_user"], 77, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_billet_index");
        echo "\">
            <i class=\"fas fa-user\"></i>
            <span>Billets</span>
        </a>
    </li>-->



    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 78,  127 => 77,  118 => 71,  114 => 70,  105 => 64,  101 => 63,  88 => 53,  84 => 52,  80 => 50,  77 => 48,  74 => 25,  72 => 24,  70 => 23,  58 => 13,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"partials/_macro.html.twig\" as macros %}

<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\"> </div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    <li class=\"nav-item {{ macros.is_active('admin_dashboard') }}\">
        <a class=\"nav-link\" href=\"#\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>Tableau de bord</span>
        </a>
    </li>

    <hr class=\"sidebar-divider my-0\">

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                                {# ITEM COLLAPSED #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

            {# <div class=\"sidebar-heading\">
                Addons
            </div>

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Pages</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Login Screens:</h6>
                        <a class=\"collapse-item\" href=\"login.html\">Login</a>
                        <a class=\"collapse-item\" href=\"register.html\">Register</a>
                        <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                        <div class=\"collapse-divider\"></div>
                        <h6 class=\"collapse-header\">Other Pages:</h6>
                        <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                        <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                    </div>
                </div>
            </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}


    <li class=\"nav-item {{ macros.is_active('admin_user') }}\">
        <a class=\"nav-link\" href=\"{{ path('app_evenement_index') }}\">
            <i class=\"fas fa-user\"></i>
            <span>Evenement</span>
        </a>
    </li>

      
    <hr class=\"sidebar-divider d-none d-md-block\">


    <li class=\"nav-item {{ macros.is_active('admin_user') }}\">
        <a class=\"nav-link\" href=\"{{ path('app_categorie_index') }}\">
            <i class=\"fas fa-user\"></i>
            <span>Categorie</span>
        </a>
    </li>
 <!--<hr class=\"sidebar-divider d-none d-md-block\">
 <li class=\"nav-item {{ macros.is_active('admin_user') }}\">
        <a class=\"nav-link\" href=\"{{ path('app_vol_index') }}\">
            <i class=\"fas fa-user\"></i>
            <span>Vols</span>
        </a>
    </li>
 <hr class=\"sidebar-divider d-none d-md-block\">
    <li class=\"nav-item {{ macros.is_active('admin_user') }}\">
        <a class=\"nav-link\" href=\"{{ path('app_billet_index') }}\">
            <i class=\"fas fa-user\"></i>
            <span>Billets</span>
        </a>
    </li>-->



    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
", "admin/partials/sidebar.html.twig", "C:\\xampp2\\htdocs\\ExploraTerra-gestionVol\\templates\\admin\\partials\\sidebar.html.twig");
    }
}
