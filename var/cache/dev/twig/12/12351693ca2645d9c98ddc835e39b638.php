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

/* base.html.twig */
class __TwigTemplate_983d984dfe8635fb6392b6f4bcf42996 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\"  lang=\"en\">

\t<head>
\t\t<!-- META DATA -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t\t<!--font-family-->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rufina:400,700\" rel=\"stylesheet\" />

\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\" />

\t\t<!-- TITLE OF SITE -->
\t\t<title>Travel</title>

\t\t<!-- favicon img -->
\t\t<link rel=\"shortcut icon\" type=\"image/icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo/favicon.png"), "html", null, true);
        echo "\"/>

\t\t<!--font-awesome.min.css-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

\t\t<!--animate.css-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" />

\t\t<!--hover.css-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hover-min.css"), "html", null, true);
        echo "\">

\t\t<!--datepicker.css-->
\t\t<link rel=\"stylesheet\"  href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" >

\t\t<!--owl.carousel.css-->
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>

\t\t<!-- range css-->
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery-ui.min.css"), "html", null, true);
        echo "\" />

\t\t<!--bootstrap.min.css-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />

\t\t<!-- bootsnav -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootsnav.css"), "html", null, true);
        echo "\"/>

\t\t<!--style.css-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />

\t\t<!--responsive.css-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" />

\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

\t\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->

\t</head>

\t<body>
\t\t<!--[if lte IE 9]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade
\t\t\tyour browser</a> to improve your experience and security.</p>
\t\t<![endif]-->

\t\t<!-- main-menu Start -->
";
        // line 70
        $this->displayBlock('navbar', $context, $blocks);
        // line 115
        echo "\t\t<br>
<br><br>
<br><br>
<br>
";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 1493
        $this->displayBlock('footer', $context, $blocks);
        // line 1575
        echo "



\t\t<script src=\"";
        // line 1579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->

\t\t<!--modernizr.min.js-->
\t\t<script  src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>


\t\t<!--bootstrap.min.js-->
\t\t<script  src=\"";
        // line 1587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- bootsnav js -->
\t\t<script src=\"";
        // line 1590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootsnav.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- jquery.filterizr.min.js -->
\t\t<script src=\"";
        // line 1593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>

\t\t<script  src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\"></script>

\t\t<!--jquery-ui.min.js-->
        <script src=\"";
        // line 1598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

        <!-- counter js -->
\t\t<script src=\"";
        // line 1601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!--owl.carousel.js-->
        <script  src=\"";
        // line 1605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

        <!-- jquery.sticky.js -->
\t\t<script src=\"";
        // line 1608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>

        <!--datepicker.js-->
        <script  src=\"";
        // line 1611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/datepicker.js"), "html", null, true);
        echo "\"></script>

\t\t<!--Custom JS-->
\t\t<script src=\"";
        // line 1614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>


\t</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 71
        echo "\t\t<header class=\"top-area\">
\t\t\t<div class=\"header-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\ttour<span>Nest</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div><!-- /.logo-->
\t\t\t\t\t\t</div><!-- /.col-->
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t</button><!-- / button-->
\t\t\t\t\t\t\t\t</div><!-- /.navbar-header-->
\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\">\t\t  
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#home\">home</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#gallery\">Destination</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#pack\">Packages </a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#spo\">Special Offers</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#blog\">blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#subs\">subscription</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#spo\">Special Offers</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"book-btn\" onclick=\"window.location.href='";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vol_index");
        echo "'\">Back Office</button>

\t\t\t\t\t\t\t\t\t\t</li><!--/.project-btn--> 
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t\t\t</div><!-- /.main-menu-->
\t\t\t\t\t\t</div><!-- /.col-->
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t<div class=\"home-border\"></div><!-- /.home-border-->
\t\t\t\t</div><!-- /.container-->
\t\t\t</div><!-- /.header-area -->

\t\t</header><!-- /.top-area-->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 120
        echo "
\t\t<!-- main-menu End -->

\t\t
\t\t<!--about-us start -->
\t\t<section id=\"home\" class=\"about-us\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"about-us-content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"single-about-us\">
\t\t\t\t\t\t\t\t<div class=\"about-us-txt\">
\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\tExplore the Beauty of the Beautiful World 

\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view\">
\t\t\t\t\t\t\t\t\t\t\texplore now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.about-us-txt-->
\t\t\t\t\t\t\t</div><!--/.single-about-us-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t<div class=\"col-sm-0\">
\t\t\t\t\t\t\t<div class=\"single-about-us\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><!--/.single-about-us-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t</div><!--/.row-->
\t\t\t\t</div><!--/.about-us-content-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.about-us-->
\t\t<!--about-us end -->

\t\t<!--travel-box start-->
\t\t<section  class=\"travel-box\">
        \t<div class=\"container\">
        \t\t<div class=\"row\">
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t<div class=\"single-travel-boxes\">
        \t\t\t\t\t<div id=\"desc-tabs\" class=\"desc-tabs\">

\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">

\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t\t \t<a href=\"#tours\" aria-controls=\"tours\" role=\"tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t \t\t<i class=\"fa fa-tree\"></i>
\t\t\t\t\t\t\t\t\t \t\ttours
\t\t\t\t\t\t\t\t\t \t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#hotels\" aria-controls=\"hotels\" role=\"tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-building\"></i>
\t\t\t\t\t\t\t\t\t\t\thotels
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t \t<a href=\"#flights\" aria-controls=\"flights\" role=\"tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t \t\t<i class=\"fa fa-plane\"></i>
\t\t\t\t\t\t\t\t\t \t\tflights
\t\t\t\t\t\t\t\t\t \t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active fade in\" id=\"tours\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-para\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>destination</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination country</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"turkey\">turkey</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"russia\">russia</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"egept\">egypt</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"istambul\">istambul</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"mosko\">mosko</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"cairo\">cairo</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check in</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_in\" class=\"form-control\" data-toggle=\"datepicker\" placeholder=\"12 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check out</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_out\" class=\"form-control\"  data-toggle=\"datepicker\" placeholder=\"22 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>duration</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">5</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"10\">10</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"15\">15</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"20\">20</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>members</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">1</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"2\">2</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"4\">4</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"8\">8</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-budget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>budget : </h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"co-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"slider-range\"></div><!--/.slider-range-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_slider_amount\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"amount\" name=\"price\"  placeholder=\"Add Your Price\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.price_slider_amount-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.price-filter-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.info_widget-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.travel-filter-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.travel-budget-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clo-sm-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn travel-mrt-0 pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view travel-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsearch\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button><!--/.travel-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t</div><!--/.tab-para-->

\t\t\t\t\t\t\t\t\t</div><!--/.tabpannel-->

\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in\" id=\"hotels\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-para\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>destination</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination country</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"turkey\">turkey</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"russia\">russia</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"egept\">egypt</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"istambul\">istambul</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"mosko\">mosko</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"cairo\">cairo</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check in</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_in\" class=\"form-control\" data-toggle=\"datepicker\" placeholder=\"12 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check out</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_out\" class=\"form-control\"  data-toggle=\"datepicker\" placeholder=\"22 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>duration</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">5</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"10\">10</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"15\">15</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"20\">20</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>members</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">1</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"2\">2</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"4\">4</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"8\">8</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\"></div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clo-sm-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn travel-mrt-0 pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view travel-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsearch\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button><!--/.travel-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t</div><!--/.tab-para-->

\t\t\t\t\t\t\t\t\t</div><!--/.tabpannel-->

\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in\" id=\"flights\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-para\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"trip-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-trip-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radio01\" name=\"radio\" />
  \t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radio01\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder1\"></span>
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>round trip
  \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-trip-circle-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-trip-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radio02\" name=\"radio\" />
  \t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radio02\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder1\"></span>
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>on way
  \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-trip-circle-->
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.trip-circle-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>from</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"turkey\">turkey</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"russia\">russia</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"egept\">egypt</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>departure</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"departure\" class=\"form-control\" data-toggle=\"datepicker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"12 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>return</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"return\" class=\"form-control\" data-toggle=\"datepicker\" placeholder=\"22 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>adults</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">5</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"10\">10</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"15\">15</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"20\">20</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>childs</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">1</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"2\">2</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"4\">4</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"8\">8</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>to</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"istambul\">istambul</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"mosko\">mosko</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"cairo\">cairo</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>class</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter class</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"A\">A</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"B\">B</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"C\">C</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clo-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view travel-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsearch\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button><!--/.travel-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div><!--/.tabpannel-->

\t\t\t\t\t\t\t\t</div><!--/.tab content-->
\t\t\t\t\t\t\t</div><!--/.desc-tabs-->
        \t\t\t\t</div><!--/.single-travel-box-->
        \t\t\t</div><!--/.col-->
        \t\t</div><!--/.row-->
        \t</div><!--/.container-->

        </section><!--/.travel-box-->
\t\t<!--travel-box end-->

        <!--service start-->
\t\t<section id=\"service\" class=\"service\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"service-counter text-center\">

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"single-service-box\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/service/s1.png\" alt=\"service-icon\" />
\t\t\t\t\t\t\t</div><!--/.service-img-->
\t\t\t\t\t\t\t<div class=\"service-content\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tamazing tour packages
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
\t\t\t\t\t\t\t</div><!--/.service-content-->
\t\t\t\t\t\t</div><!--/.single-service-box-->
\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"single-service-box\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/service/s2.png\" alt=\"service-icon\" />
\t\t\t\t\t\t\t</div><!--/.service-img-->
\t\t\t\t\t\t\t<div class=\"service-content\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tbook top class hotel
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
\t\t\t\t\t\t\t</div><!--/.service-content-->
\t\t\t\t\t\t</div><!--/.single-service-box-->
\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"single-service-box\">
\t\t\t\t\t\t\t<div class=\"statistics-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/service/s3.png\" alt=\"service-icon\" />
\t\t\t\t\t\t\t</div><!--/.service-img-->
\t\t\t\t\t\t\t<div class=\"service-content\">

\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tonline flight booking
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
\t\t\t\t\t\t\t</div><!--/.service-content-->
\t\t\t\t\t\t</div><!--/.single-service-box-->
\t\t\t\t\t</div><!--/.col-->

\t\t\t\t</div><!--/.statistics-counter-->\t
\t\t\t</div><!--/.container-->

\t\t</section><!--/.service-->
\t\t<!--service end-->

\t\t<!--galley start-->
\t\t<section id=\"gallery\" class=\"gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"gallery-details\">
\t\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\ttop destination
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tDuis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
\t\t\t\t\t\t</p>
\t\t\t\t\t</div><!--/.gallery-header-->
\t\t\t\t\t<div class=\"gallery-box\">
\t\t\t\t\t\t<div class=\"gallery-content\">
\t\t\t\t\t\t  \t<div class=\"filtr-container\">
\t\t\t\t\t\t  \t\t<div class=\"row\">

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g1.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tchina
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>20 tours</span><span>15 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.item-title -->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g2.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tvenuzuala
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>12 tours</span><span>9 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g3.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tbrazil
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>25 tours</span><span>10 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.item-title -->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g4.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\taustralia 
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>18 tours</span><span>9 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g5.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tnetharland
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>14 tours</span><span>12 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g6.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tturkey
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>14 tours</span><span>6 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t</div><!-- /.row -->

\t\t\t\t\t\t  \t</div><!-- /.filtr-container-->
\t\t\t\t\t\t</div><!-- /.gallery-content -->
\t\t\t\t\t</div><!--/.galley-box-->
\t\t\t\t</div><!--/.gallery-details-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.gallery-->
\t\t<!--gallery end-->


\t\t<!--discount-offer start-->
\t\t<section class=\"discount-offer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"dicount-offer-content text-center\">
\t\t\t\t\t\t\t<h2>Join with us within 21 January, 2018 and get upto 40% Discount</h2>
\t\t\t\t\t\t\t<div class=\"campaign-timer\">
\t\t\t\t\t\t\t\t<div id=\"timer\">
\t\t\t\t\t\t\t\t\t<div class=\"time time-after\" id=\"days\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t\t<div class=\"time time-after\" id=\"hours\">

\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t\t<div class=\"time time-after\" id=\"minutes\">

\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t\t<div class=\"time\" id=\"seconds\">

\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t</div><!--/.timer-->
\t\t\t\t\t\t\t</div><!--/.campaign-timer-->
\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t<button  class=\"about-view discount-offer-btn\">
\t\t\t\t\t\t\t\t\tjoin now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div><!--/.about-btn-->


\t\t\t\t\t\t</div><!-- /.dicount-offer-content-->
\t\t\t\t\t</div><!-- /.col-->
\t\t\t\t</div><!-- /.row-->
\t\t\t</div><!-- /.container-->

\t\t</section><!-- /.discount-offer-->
\t\t<!--discount-offer end-->

\t\t<!--packages start-->
\t\t<section id=\"pack\" class=\"packages\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tspecial packages
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDuis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
\t\t\t\t\t</p>
\t\t\t\t</div><!--/.gallery-header-->
\t\t\t\t<div class=\"packages-content\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p1.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>italy <span class=\"pull-right\">\$499</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p2.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>england <span class=\"pull-right\">\$1499</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p3.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>france <span class=\"pull-right\">\$1199</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p4.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>india <span class=\"pull-right\">\$799</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p5.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>spain <span class=\"pull-right\">\$999</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p6.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>thailand <span class=\"pull-right\">\$799</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t</div><!--/.row-->
\t\t\t\t</div><!--/.packages-content-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.packages-->
\t\t<!--packages end-->

\t\t<!-- testemonial Start -->
\t\t<section   class=\"testemonial\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tclients reviews
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDuis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. 
\t\t\t\t\t</p>

\t\t\t\t</div><!--/.gallery-header-->

\t\t\t\t<div class=\"owl-carousel owl-theme\" id=\"testemonial-carousel\">

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial2.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial2.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial2.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t</div><!--/.testemonial-carousel-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.testimonial-->\t
\t\t<!-- testemonial End -->


\t\t<!--special-offer start-->
\t\t<section id=\"spo\" class=\"special-offer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"special-offer-content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<div class=\"single-special-offer\">
\t\t\t\t\t\t\t\t<div class=\"single-special-offer-txt\">
\t\t\t\t\t\t\t\t\t<h2>thiland</h2>
\t\t\t\t\t\t\t\t\t<div class=\"packages-review special-offer-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-para special-offer-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 2 person
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t\t</span>  
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"offer-para\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna  aliqua. Ut enim ad minim veniam, quis nostrud exercitation una <br> ullamco laboris nisi ut aliquip ex ea commodo consequat. 
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"offer-btn-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn offfer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\tmake tour
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t</div><!--/.offer-btn-group-->
\t\t\t\t\t\t\t\t</div><!--/.single-special-offer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-special-offer-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"single-special-offer\">
\t\t\t\t\t\t\t\t<div class=\"single-special-offer-bg\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/offer/offer-shape.png\" alt=\"offer-shape\">
\t\t\t\t\t\t\t\t</div><!--/.single-special-offer-bg-->
\t\t\t\t\t\t\t\t<div class=\"single-special-shape-txt\">
\t\t\t\t\t\t\t\t\t<h3>special offer</h3>
\t\t\t\t\t\t\t\t\t<h4><span>40%</span><br>off</h4>
\t\t\t\t\t\t\t\t\t<p><span>\$999</span><br>reguler \$ 1450</p>
\t\t\t\t\t\t\t\t</div><!--/.single-special-shape-txt-->
\t\t\t\t\t\t\t</div><!--/.single-special-offer-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t</div><!--/.row-->
\t\t\t\t</div><!--/.special-offer-content-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.special-offer end-->
\t\t<!--special-offer end-->

\t\t<!--blog start-->
\t\t<section id=\"blog\" class=\"blog\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"blog-details\">
\t\t\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tlatest news
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tTravel News from all over the world 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div><!--/.gallery-header-->
\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t<h2>trending news <span>15 november 2017</span></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/b1.jpg\" alt=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img-overlay\"></div><!--/.thumbnail-img-overlay-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-img-->
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDiscover on beautiful weather, Fantastic foods and historical place in Prag
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.blog-txt-->
\t\t\t\t\t\t\t\t\t\t</div><!--/.caption-->
\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-->

\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t<h2>trending news <span>15 november 2017</span></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/b2.jpg\" alt=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img-overlay\"></div><!--/.thumbnail-img-overlay-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-img-->
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDiscover on beautiful weather, Fantastic foods and historical place in india
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.blog-txt-->
\t\t\t\t\t\t\t\t\t\t</div><!--/.caption-->
\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-->

\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t<h2>trending news <span>15 november 2017</span></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/b3.jpg\" alt=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img-overlay\"></div><!--/.thumbnail-img-overlay-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-img-->
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">10 Most Natural place to Discover</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.blog-txt-->
\t\t\t\t\t\t\t\t\t\t</div><!--/.caption-->
\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-->

\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t</div><!--/.row-->
\t\t\t\t\t\t</div><!--/.blog-content-->
\t\t\t\t\t</div><!--/.blog-details-->
\t\t\t\t</div><!--/.container-->

\t\t</section><!--/.blog-->
\t\t<!--blog end-->

\t\t
\t\t<!--subscribe start-->
\t\t<section id=\"subs\" class=\"subscribe\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"subscribe-title text-center\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tJoin our Subscribers List to Get Regular Update
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tSubscribe Now. We will send you Best offer for your Trip 
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<form>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
\t\t\t\t\t\t\t<div class=\"custom-input-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Enter your Email Here\">
\t\t\t\t\t\t\t\t<button class=\"appsLand-btn subscribe-btn\">Subscribe</button>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t</section>
\t\t<!--subscribe end-->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1493
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1494
        echo "
\t\t<!-- footer-copyright start -->
\t\t<footer  class=\"footer-copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item\">
\t\t\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\ttour<span>Nest</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tbest travel agency
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->
\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item\">
\t\t\t\t\t\t\t\t<h2>link</h2>
\t\t\t\t\t\t\t\t<div class=\"single-footer-txt\">
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">home</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">destination</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">spacial packages</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">special offers</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">blog</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">contacts</a></p>
\t\t\t\t\t\t\t\t</div><!--/.single-footer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->

\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item\">
\t\t\t\t\t\t\t\t<h2>popular destination</h2>
\t\t\t\t\t\t\t\t<div class=\"single-footer-txt\">
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">china</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">venezuela</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">brazil</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">australia</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">london</a></p>
\t\t\t\t\t\t\t\t</div><!--/.single-footer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->
\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"text-left\">contacts</h2>
\t\t\t\t\t\t\t\t<div class=\"single-footer-txt text-left\">
\t\t\t\t\t\t\t\t\t<p>+1 (300) 1234 6543</p>
\t\t\t\t\t\t\t\t\t<p class=\"foot-email\"><a href=\"#\">info@tnest.com</a></p>
\t\t\t\t\t\t\t\t\t<p>North Warnner Park 336/A</p>
\t\t\t\t\t\t\t\t\t<p>Newyork, USA</p>
\t\t\t\t\t\t\t\t</div><!--/.single-footer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->
\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t</div><!--/.row-->

\t\t\t\t</div><!--/.footer-content-->
\t\t\t\t<hr>
\t\t\t\t<div class=\"foot-icons \">
\t\t\t\t\t<ul class=\"footer-social-links list-inline list-unstyled\">
\t\t                <li><a href=\"#\" target=\"_blank\" class=\"foot-icon-bg-1\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t                <li><a href=\"#\" target=\"_blank\" class=\"foot-icon-bg-2\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t                <li><a href=\"#\" target=\"_blank\" class=\"foot-icon-bg-3\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t        \t</ul>
\t\t        \t<p>&copy; 2017 <a href=\"https://www.themesine.com\">ThemeSINE</a>. All Right Reserved</p>

\t\t        </div><!--/.foot-icons-->
\t\t\t\t<div id=\"scroll-Top\">
\t\t\t\t\t<i class=\"fa fa-angle-double-up return-to-top\" id=\"scroll-top\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Back to Top\" aria-hidden=\"true\"></i>
\t\t\t\t</div><!--/.scroll-Top-->
\t\t\t</div><!-- /.container-->

\t\t</footer><!-- /.footer-copyright-->
\t\t<!-- footer-copyright end -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1720 => 1494,  1710 => 1493,  328 => 120,  318 => 119,  294 => 101,  262 => 71,  252 => 70,  236 => 1614,  230 => 1611,  224 => 1608,  218 => 1605,  212 => 1602,  208 => 1601,  202 => 1598,  194 => 1593,  188 => 1590,  182 => 1587,  171 => 1579,  165 => 1575,  163 => 1493,  161 => 119,  155 => 115,  153 => 70,  131 => 51,  125 => 48,  119 => 45,  113 => 42,  107 => 39,  101 => 36,  97 => 35,  91 => 32,  85 => 29,  79 => 26,  73 => 23,  67 => 20,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\"  lang=\"en\">

\t<head>
\t\t<!-- META DATA -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t\t<!--font-family-->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Rufina:400,700\" rel=\"stylesheet\" />

\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\" />

\t\t<!-- TITLE OF SITE -->
\t\t<title>Travel</title>

\t\t<!-- favicon img -->
\t\t<link rel=\"shortcut icon\" type=\"image/icon\" href=\"{{ asset('assets/logo/favicon.png') }}\"/>

\t\t<!--font-awesome.min.css-->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/font-awesome.min.css') }}\" />

\t\t<!--animate.css-->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\" />

\t\t<!--hover.css-->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/hover-min.css') }}\">

\t\t<!--datepicker.css-->
\t\t<link rel=\"stylesheet\"  href=\"{{ asset('assets/css/datepicker.css') }}\" >

\t\t<!--owl.carousel.css-->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.theme.default.min.css') }}\"/>

\t\t<!-- range css-->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery-ui.min.css') }}\" />

\t\t<!--bootstrap.min.css-->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />

\t\t<!-- bootsnav -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootsnav.css') }}\"/>

\t\t<!--style.css-->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" />

\t\t<!--responsive.css-->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/responsive.css') }}\" />

\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

\t\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->

\t</head>

\t<body>
\t\t<!--[if lte IE 9]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade
\t\t\tyour browser</a> to improve your experience and security.</p>
\t\t<![endif]-->

\t\t<!-- main-menu Start -->
{% block navbar %}
\t\t<header class=\"top-area\">
\t\t\t<div class=\"header-area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\ttour<span>Nest</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div><!-- /.logo-->
\t\t\t\t\t\t</div><!-- /.col-->
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t</button><!-- / button-->
\t\t\t\t\t\t\t\t</div><!-- /.navbar-header-->
\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\">\t\t  
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#home\">home</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#gallery\">Destination</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#pack\">Packages </a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#spo\">Special Offers</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#blog\">blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#subs\">subscription</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"smooth-menu\"><a href=\"#spo\">Special Offers</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"book-btn\" onclick=\"window.location.href='{{ path('app_vol_index') }}'\">Back Office</button>

\t\t\t\t\t\t\t\t\t\t</li><!--/.project-btn--> 
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t\t\t</div><!-- /.main-menu-->
\t\t\t\t\t\t</div><!-- /.col-->
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t<div class=\"home-border\"></div><!-- /.home-border-->
\t\t\t\t</div><!-- /.container-->
\t\t\t</div><!-- /.header-area -->

\t\t</header><!-- /.top-area-->
\t\t{% endblock %}
\t\t<br>
<br><br>
<br><br>
<br>
{% block body %}

\t\t<!-- main-menu End -->

\t\t
\t\t<!--about-us start -->
\t\t<section id=\"home\" class=\"about-us\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"about-us-content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"single-about-us\">
\t\t\t\t\t\t\t\t<div class=\"about-us-txt\">
\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\tExplore the Beauty of the Beautiful World 

\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view\">
\t\t\t\t\t\t\t\t\t\t\texplore now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.about-us-txt-->
\t\t\t\t\t\t\t</div><!--/.single-about-us-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t<div class=\"col-sm-0\">
\t\t\t\t\t\t\t<div class=\"single-about-us\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div><!--/.single-about-us-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t</div><!--/.row-->
\t\t\t\t</div><!--/.about-us-content-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.about-us-->
\t\t<!--about-us end -->

\t\t<!--travel-box start-->
\t\t<section  class=\"travel-box\">
        \t<div class=\"container\">
        \t\t<div class=\"row\">
        \t\t\t<div class=\"col-md-12\">
        \t\t\t\t<div class=\"single-travel-boxes\">
        \t\t\t\t\t<div id=\"desc-tabs\" class=\"desc-tabs\">

\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">

\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t\t \t<a href=\"#tours\" aria-controls=\"tours\" role=\"tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t \t\t<i class=\"fa fa-tree\"></i>
\t\t\t\t\t\t\t\t\t \t\ttours
\t\t\t\t\t\t\t\t\t \t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#hotels\" aria-controls=\"hotels\" role=\"tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-building\"></i>
\t\t\t\t\t\t\t\t\t\t\thotels
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t \t<a href=\"#flights\" aria-controls=\"flights\" role=\"tab\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t \t\t<i class=\"fa fa-plane\"></i>
\t\t\t\t\t\t\t\t\t \t\tflights
\t\t\t\t\t\t\t\t\t \t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active fade in\" id=\"tours\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-para\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>destination</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination country</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"turkey\">turkey</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"russia\">russia</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"egept\">egypt</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"istambul\">istambul</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"mosko\">mosko</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"cairo\">cairo</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check in</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_in\" class=\"form-control\" data-toggle=\"datepicker\" placeholder=\"12 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check out</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_out\" class=\"form-control\"  data-toggle=\"datepicker\" placeholder=\"22 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>duration</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">5</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"10\">10</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"15\">15</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"20\">20</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>members</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">1</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"2\">2</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"4\">4</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"8\">8</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-budget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>budget : </h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"co-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"slider-range\"></div><!--/.slider-range-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_slider_amount\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"amount\" name=\"price\"  placeholder=\"Add Your Price\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.price_slider_amount-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.price-filter-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.info_widget-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.travel-filter-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.travel-budget-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clo-sm-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn travel-mrt-0 pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view travel-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsearch\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button><!--/.travel-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t</div><!--/.tab-para-->

\t\t\t\t\t\t\t\t\t</div><!--/.tabpannel-->

\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in\" id=\"hotels\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-para\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>destination</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination country</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"turkey\">turkey</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"russia\">russia</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"egept\">egypt</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"istambul\">istambul</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"mosko\">mosko</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"cairo\">cairo</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check in</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_in\" class=\"form-control\" data-toggle=\"datepicker\" placeholder=\"12 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>check out</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"check_out\" class=\"form-control\"  data-toggle=\"datepicker\" placeholder=\"22 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>duration</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">5</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"10\">10</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"15\">15</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"20\">20</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>members</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">1</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"2\">2</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"4\">4</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"8\">8</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\"></div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clo-sm-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn travel-mrt-0 pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view travel-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsearch\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button><!--/.travel-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t</div><!--/.tab-para-->

\t\t\t\t\t\t\t\t\t</div><!--/.tabpannel-->

\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in\" id=\"flights\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-para\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"trip-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-trip-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radio01\" name=\"radio\" />
  \t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radio01\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder1\"></span>
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>round trip
  \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-trip-circle-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-trip-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"radio02\" name=\"radio\" />
  \t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"radio02\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"round-boarder1\"></span>
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>on way
  \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-trip-circle-->
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.trip-circle-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>from</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"turkey\">turkey</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"russia\">russia</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"egept\">egypt</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>departure</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"departure\" class=\"form-control\" data-toggle=\"datepicker\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"12 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>return</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-check-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"return\" class=\"form-control\" data-toggle=\"datepicker\" placeholder=\"22 -01 - 2017 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-check-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>adults</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">5</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"10\">10</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"15\">15</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"20\">20</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-1 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>childs</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">1</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"2\">2</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"4\">4</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"8\">8</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>to</h2>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter your destination location</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"istambul\">istambul</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"mosko\">mosko</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"cairo\">cairo</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-tab-select-box\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>class</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"travel-select-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"default\">enter class</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"A\">A</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"B\">B</option><!-- /.option-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"C\">C</option><!-- /.option-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select><!-- /.select-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.travel-select-icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.single-tab-select-box-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clo-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view travel-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsearch\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button><!--/.travel-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.row-->

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div><!--/.tabpannel-->

\t\t\t\t\t\t\t\t</div><!--/.tab content-->
\t\t\t\t\t\t\t</div><!--/.desc-tabs-->
        \t\t\t\t</div><!--/.single-travel-box-->
        \t\t\t</div><!--/.col-->
        \t\t</div><!--/.row-->
        \t</div><!--/.container-->

        </section><!--/.travel-box-->
\t\t<!--travel-box end-->

        <!--service start-->
\t\t<section id=\"service\" class=\"service\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"service-counter text-center\">

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"single-service-box\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/service/s1.png\" alt=\"service-icon\" />
\t\t\t\t\t\t\t</div><!--/.service-img-->
\t\t\t\t\t\t\t<div class=\"service-content\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\tamazing tour packages
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
\t\t\t\t\t\t\t</div><!--/.service-content-->
\t\t\t\t\t\t</div><!--/.single-service-box-->
\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"single-service-box\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/service/s2.png\" alt=\"service-icon\" />
\t\t\t\t\t\t\t</div><!--/.service-img-->
\t\t\t\t\t\t\t<div class=\"service-content\">
\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tbook top class hotel
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
\t\t\t\t\t\t\t</div><!--/.service-content-->
\t\t\t\t\t\t</div><!--/.single-service-box-->
\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"single-service-box\">
\t\t\t\t\t\t\t<div class=\"statistics-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/service/s3.png\" alt=\"service-icon\" />
\t\t\t\t\t\t\t</div><!--/.service-img-->
\t\t\t\t\t\t\t<div class=\"service-content\">

\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tonline flight booking
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.</p>
\t\t\t\t\t\t\t</div><!--/.service-content-->
\t\t\t\t\t\t</div><!--/.single-service-box-->
\t\t\t\t\t</div><!--/.col-->

\t\t\t\t</div><!--/.statistics-counter-->\t
\t\t\t</div><!--/.container-->

\t\t</section><!--/.service-->
\t\t<!--service end-->

\t\t<!--galley start-->
\t\t<section id=\"gallery\" class=\"gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"gallery-details\">
\t\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\ttop destination
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tDuis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
\t\t\t\t\t\t</p>
\t\t\t\t\t</div><!--/.gallery-header-->
\t\t\t\t\t<div class=\"gallery-box\">
\t\t\t\t\t\t<div class=\"gallery-content\">
\t\t\t\t\t\t  \t<div class=\"filtr-container\">
\t\t\t\t\t\t  \t\t<div class=\"row\">

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g1.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tchina
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>20 tours</span><span>15 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.item-title -->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g2.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tvenuzuala
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>12 tours</span><span>9 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g3.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tbrazil
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>25 tours</span><span>10 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.item-title -->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g4.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\taustralia 
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>18 tours</span><span>9 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g5.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tnetharland
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>14 tours</span><span>12 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t  \t\t\t\t<div class=\"filtr-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/gallary/g6.jpg\" alt=\"portfolio image\"/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\tturkey
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p><span>14 tours</span><span>6 places</span></p>
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /.item-title-->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.filtr-item -->
\t\t\t\t\t\t  \t\t\t</div><!-- /.col -->

\t\t\t\t\t\t  \t\t</div><!-- /.row -->

\t\t\t\t\t\t  \t</div><!-- /.filtr-container-->
\t\t\t\t\t\t</div><!-- /.gallery-content -->
\t\t\t\t\t</div><!--/.galley-box-->
\t\t\t\t</div><!--/.gallery-details-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.gallery-->
\t\t<!--gallery end-->


\t\t<!--discount-offer start-->
\t\t<section class=\"discount-offer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"dicount-offer-content text-center\">
\t\t\t\t\t\t\t<h2>Join with us within 21 January, 2018 and get upto 40% Discount</h2>
\t\t\t\t\t\t\t<div class=\"campaign-timer\">
\t\t\t\t\t\t\t\t<div id=\"timer\">
\t\t\t\t\t\t\t\t\t<div class=\"time time-after\" id=\"days\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t\t<div class=\"time time-after\" id=\"hours\">

\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t\t<div class=\"time time-after\" id=\"minutes\">

\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t\t<div class=\"time\" id=\"seconds\">

\t\t\t\t\t\t\t\t\t</div><!--/.time-->
\t\t\t\t\t\t\t\t</div><!--/.timer-->
\t\t\t\t\t\t\t</div><!--/.campaign-timer-->
\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t<button  class=\"about-view discount-offer-btn\">
\t\t\t\t\t\t\t\t\tjoin now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div><!--/.about-btn-->


\t\t\t\t\t\t</div><!-- /.dicount-offer-content-->
\t\t\t\t\t</div><!-- /.col-->
\t\t\t\t</div><!-- /.row-->
\t\t\t</div><!-- /.container-->

\t\t</section><!-- /.discount-offer-->
\t\t<!--discount-offer end-->

\t\t<!--packages start-->
\t\t<section id=\"pack\" class=\"packages\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tspecial packages
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDuis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  
\t\t\t\t\t</p>
\t\t\t\t</div><!--/.gallery-header-->
\t\t\t\t<div class=\"packages-content\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p1.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>italy <span class=\"pull-right\">\$499</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p2.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>england <span class=\"pull-right\">\$1499</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p3.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>france <span class=\"pull-right\">\$1199</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p4.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>india <span class=\"pull-right\">\$799</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p5.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>spain <span class=\"pull-right\">\$999</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"single-package-item\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/packages/p6.jpg\" alt=\"package-place\">
\t\t\t\t\t\t\t\t<div class=\"single-package-item-txt\">
\t\t\t\t\t\t\t\t\t<h3>thailand <span class=\"pull-right\">\$799</span></h3>
\t\t\t\t\t\t\t\t\t<div class=\"packages-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t</div><!--/.single-package-item-txt-->
\t\t\t\t\t\t\t</div><!--/.single-package-item-->

\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t</div><!--/.row-->
\t\t\t\t</div><!--/.packages-content-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.packages-->
\t\t<!--packages end-->

\t\t<!-- testemonial Start -->
\t\t<section   class=\"testemonial\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tclients reviews
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDuis aute irure dolor in  velit esse cillum dolore eu fugiat nulla. 
\t\t\t\t\t</p>

\t\t\t\t</div><!--/.gallery-header-->

\t\t\t\t<div class=\"owl-carousel owl-theme\" id=\"testemonial-carousel\">

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial2.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial2.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial2.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t\t<div class=\"home1-testm item\">
\t\t\t\t\t\t<div class=\"home1-testm-single text-center\">
\t\t\t\t\t\t\t<div class=\"home1-testm-img\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/client/testimonial1.jpg\" alt=\"img\"/>
\t\t\t\t\t\t\t</div><!--/.home1-testm-img-->
\t\t\t\t\t\t\t<div class=\"home1-testm-txt\">
\t\t\t\t\t\t\t\t<span class=\"icon section-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tkevin watson
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<h4>london, england</h4>
\t\t\t\t\t\t\t</div><!--/.home1-testm-txt-->\t
\t\t\t\t\t\t</div><!--/.home1-testm-single-->

\t\t\t\t\t</div><!--/.item-->

\t\t\t\t</div><!--/.testemonial-carousel-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.testimonial-->\t
\t\t<!-- testemonial End -->


\t\t<!--special-offer start-->
\t\t<section id=\"spo\" class=\"special-offer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"special-offer-content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<div class=\"single-special-offer\">
\t\t\t\t\t\t\t\t<div class=\"single-special-offer-txt\">
\t\t\t\t\t\t\t\t\t<h2>thiland</h2>
\t\t\t\t\t\t\t\t\t<div class=\"packages-review special-offer-review\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>2544 review</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-review-->
\t\t\t\t\t\t\t\t\t<div class=\"packages-para special-offer-para\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 5 daays 6 nights
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 2 person
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  5 star accomodation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  transportation
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>  food facilities
\t\t\t\t\t\t\t\t\t\t\t</span>  
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"offer-para\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna  aliqua. Ut enim ad minim veniam, quis nostrud exercitation una <br> ullamco laboris nisi ut aliquip ex ea commodo consequat. 
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div><!--/.packages-para-->
\t\t\t\t\t\t\t\t\t<div class=\"offer-btn-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn offfer-btn\">
\t\t\t\t\t\t\t\t\t\t\t\tmake tour
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t\t<div class=\"about-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button  class=\"about-view packages-btn\">
\t\t\t\t\t\t\t\t\t\t\t\tbook now
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div><!--/.about-btn-->
\t\t\t\t\t\t\t\t\t</div><!--/.offer-btn-group-->
\t\t\t\t\t\t\t\t</div><!--/.single-special-offer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-special-offer-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"single-special-offer\">
\t\t\t\t\t\t\t\t<div class=\"single-special-offer-bg\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/offer/offer-shape.png\" alt=\"offer-shape\">
\t\t\t\t\t\t\t\t</div><!--/.single-special-offer-bg-->
\t\t\t\t\t\t\t\t<div class=\"single-special-shape-txt\">
\t\t\t\t\t\t\t\t\t<h3>special offer</h3>
\t\t\t\t\t\t\t\t\t<h4><span>40%</span><br>off</h4>
\t\t\t\t\t\t\t\t\t<p><span>\$999</span><br>reguler \$ 1450</p>
\t\t\t\t\t\t\t\t</div><!--/.single-special-shape-txt-->
\t\t\t\t\t\t\t</div><!--/.single-special-offer-->
\t\t\t\t\t\t</div><!--/.col-->
\t\t\t\t\t</div><!--/.row-->
\t\t\t\t</div><!--/.special-offer-content-->
\t\t\t</div><!--/.container-->

\t\t</section><!--/.special-offer end-->
\t\t<!--special-offer end-->

\t\t<!--blog start-->
\t\t<section id=\"blog\" class=\"blog\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"blog-details\">
\t\t\t\t\t\t<div class=\"gallary-header text-center\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tlatest news
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tTravel News from all over the world 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div><!--/.gallery-header-->
\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t<h2>trending news <span>15 november 2017</span></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/b1.jpg\" alt=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img-overlay\"></div><!--/.thumbnail-img-overlay-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-img-->
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDiscover on beautiful weather, Fantastic foods and historical place in Prag
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.blog-txt-->
\t\t\t\t\t\t\t\t\t\t</div><!--/.caption-->
\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-->

\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t<h2>trending news <span>15 november 2017</span></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/b2.jpg\" alt=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img-overlay\"></div><!--/.thumbnail-img-overlay-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-img-->
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDiscover on beautiful weather, Fantastic foods and historical place in india
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.blog-txt-->
\t\t\t\t\t\t\t\t\t\t</div><!--/.caption-->
\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-->

\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t<h2>trending news <span>15 november 2017</span></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/b3.jpg\" alt=\"blog-img\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail-img-overlay\"></div><!--/.thumbnail-img-overlay-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-img-->
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-txt\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">10 Most Natural place to Discover</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/.blog-txt-->
\t\t\t\t\t\t\t\t\t\t</div><!--/.caption-->
\t\t\t\t\t\t\t\t\t</div><!--/.thumbnail-->

\t\t\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t\t</div><!--/.row-->
\t\t\t\t\t\t</div><!--/.blog-content-->
\t\t\t\t\t</div><!--/.blog-details-->
\t\t\t\t</div><!--/.container-->

\t\t</section><!--/.blog-->
\t\t<!--blog end-->

\t\t
\t\t<!--subscribe start-->
\t\t<section id=\"subs\" class=\"subscribe\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"subscribe-title text-center\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tJoin our Subscribers List to Get Regular Update
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tSubscribe Now. We will send you Best offer for your Trip 
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<form>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
\t\t\t\t\t\t\t<div class=\"custom-input-group\">
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Enter your Email Here\">
\t\t\t\t\t\t\t\t<button class=\"appsLand-btn subscribe-btn\">Subscribe</button>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t</section>
\t\t<!--subscribe end-->
\t\t{% endblock %}
{% block footer %}

\t\t<!-- footer-copyright start -->
\t\t<footer  class=\"footer-copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item\">
\t\t\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\ttour<span>Nest</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tbest travel agency
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->
\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item\">
\t\t\t\t\t\t\t\t<h2>link</h2>
\t\t\t\t\t\t\t\t<div class=\"single-footer-txt\">
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">home</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">destination</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">spacial packages</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">special offers</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">blog</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">contacts</a></p>
\t\t\t\t\t\t\t\t</div><!--/.single-footer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->

\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item\">
\t\t\t\t\t\t\t\t<h2>popular destination</h2>
\t\t\t\t\t\t\t\t<div class=\"single-footer-txt\">
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">china</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">venezuela</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">brazil</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">australia</a></p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">london</a></p>
\t\t\t\t\t\t\t\t</div><!--/.single-footer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->
\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"single-footer-item text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"text-left\">contacts</h2>
\t\t\t\t\t\t\t\t<div class=\"single-footer-txt text-left\">
\t\t\t\t\t\t\t\t\t<p>+1 (300) 1234 6543</p>
\t\t\t\t\t\t\t\t\t<p class=\"foot-email\"><a href=\"#\">info@tnest.com</a></p>
\t\t\t\t\t\t\t\t\t<p>North Warnner Park 336/A</p>
\t\t\t\t\t\t\t\t\t<p>Newyork, USA</p>
\t\t\t\t\t\t\t\t</div><!--/.single-footer-txt-->
\t\t\t\t\t\t\t</div><!--/.single-footer-item-->
\t\t\t\t\t\t</div><!--/.col-->

\t\t\t\t\t</div><!--/.row-->

\t\t\t\t</div><!--/.footer-content-->
\t\t\t\t<hr>
\t\t\t\t<div class=\"foot-icons \">
\t\t\t\t\t<ul class=\"footer-social-links list-inline list-unstyled\">
\t\t                <li><a href=\"#\" target=\"_blank\" class=\"foot-icon-bg-1\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t                <li><a href=\"#\" target=\"_blank\" class=\"foot-icon-bg-2\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t                <li><a href=\"#\" target=\"_blank\" class=\"foot-icon-bg-3\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t        \t</ul>
\t\t        \t<p>&copy; 2017 <a href=\"https://www.themesine.com\">ThemeSINE</a>. All Right Reserved</p>

\t\t        </div><!--/.foot-icons-->
\t\t\t\t<div id=\"scroll-Top\">
\t\t\t\t\t<i class=\"fa fa-angle-double-up return-to-top\" id=\"scroll-top\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Back to Top\" aria-hidden=\"true\"></i>
\t\t\t\t</div><!--/.scroll-Top-->
\t\t\t</div><!-- /.container-->

\t\t</footer><!-- /.footer-copyright-->
\t\t<!-- footer-copyright end -->
\t\t{% endblock %}




\t\t<script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->

\t\t<!--modernizr.min.js-->
\t\t<script  src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>


\t\t<!--bootstrap.min.js-->
\t\t<script  src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

\t\t<!-- bootsnav js -->
\t\t<script src=\"{{ asset('assets/js/bootsnav.js') }}\"></script>

\t\t<!-- jquery.filterizr.min.js -->
\t\t<script src=\"{{ asset('assets/js/jquery.filterizr.min.js') }}\"></script>

\t\t<script  src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\"></script>

\t\t<!--jquery-ui.min.js-->
        <script src=\"{{ asset('assets/js/jquery-ui.min.js') }}\"></script>

        <!-- counter js -->
\t\t<script src=\"{{ asset('assets/js/jquery.counterup.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/waypoints.min.js') }}\"></script>

\t\t<!--owl.carousel.js-->
        <script  src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>

        <!-- jquery.sticky.js -->
\t\t<script src=\"{{ asset('assets/js/jquery.sticky.js') }}\"></script>

        <!--datepicker.js-->
        <script  src=\"{{ asset('assets/js/datepicker.js') }}\"></script>

\t\t<!--Custom JS-->
\t\t<script src=\"{{ asset('assets/js/custom.js') }}\"></script>


\t</body>

</html>", "base.html.twig", "C:\\xampp2\\htdocs\\ExploraTerra-gestionVol\\templates\\base.html.twig");
    }
}
