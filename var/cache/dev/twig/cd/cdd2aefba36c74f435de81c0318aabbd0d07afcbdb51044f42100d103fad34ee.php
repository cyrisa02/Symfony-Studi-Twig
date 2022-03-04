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

/* homepage.html.twig */
class __TwigTemplate_2f32ffe1c2cf4cf62d1e659ab582242ce531c24745f6e623601cf4beff8bb5d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>title</title>
\t</head>
\t<body>
\t\t<h1>title</h1>
\t\t<p>Complétez le fichier homepage.html.twig et son contrôleur, en utilisant :
\t\t\t\t\t\t
\t\t\t\t\t\t    une variable title dans la balise title> (en-tête) et h1> (corps) : « MDN web docs »
\t\t\t\t\t\t
\t\t\t\t\t\t    une variable content dans un paragraphe HTML : « Des ressources pour les développeurs, par les développeurs. »</p>

\t\t<p>
\t\t\tcontent</p>


\t\t<p>";
        // line 20
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["welcome"]) || array_key_exists("welcome", $context) ? $context["welcome"] : (function () { throw new RuntimeError('Variable "welcome" does not exist.', 20, $this->source); })())), "html", null, true);
        echo "</p>
\t\t<p>Vous êtes le
\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["visitorNumber"]) || array_key_exists("visitorNumber", $context) ? $context["visitorNumber"] : (function () { throw new RuntimeError('Variable "visitorNumber" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "ème visiteur !</p>
\t\t<p>Sommes-nous sur la page d'accueil ?
\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["isHomepage"]) || array_key_exists("isHomepage", $context) ? $context["isHomepage"] : (function () { throw new RuntimeError('Variable "isHomepage" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "
\t\t</p>
\t\t<p>Savons-nous déjà tout ce qu'il y a à savoir sur Twig ?
\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["knowEverythingAboutTwig"]) || array_key_exists("knowEverythingAboutTwig", $context) ? $context["knowEverythingAboutTwig"] : (function () { throw new RuntimeError('Variable "knowEverythingAboutTwig" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</p>
\t\t<p>La page a chargé en
\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["pageLoadTime"]) || array_key_exists("pageLoadTime", $context) ? $context["pageLoadTime"] : (function () { throw new RuntimeError('Variable "pageLoadTime" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "
\t\t\tseconde(s)</p>
\t\t<p>Les filtres les plus utilisés :
\t\t\t\t\t\t
\t\t\t\t\t\t    lower : met toutes les lettres d'une chaîne de caractères en minuscules.
\t\t\t\t\t\t
\t\t\t\t\t\t    capitalize : met la première lettre d'une chaîne de caractères en majuscule.
\t\t\t\t\t\t
\t\t\t\t\t\t    date : formate une date selon le format donné passé en paramètre,
\t\t\t    myDate|date(\"d-m-Y\") }}
\t\t\tpar exemple.
\t\t\t\t\t\t
\t\t\t\t\t\t    keys : appliqué à un array, retourne les clés de ce tableau (utile si nous souhaitons parcourir les clés plutôt que les valeurs).
\t\t\t\t\t\t
\t\t\t\t\t\t    length : retourne le nombre d'éléments s'il s'agit d'un array, ou la longueur pour une chaîne de caractères.
\t\t\t\t\t\t
\t\t\t\t\t\t    raw : permet d’exécuter le HTML ou le JavaScript contenu dans la variable (à n'utiliser que sur des valeurs considérées comme sûres).</p>

                            <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " affiche l'année grâce au filtre</p>

\t\t\t\t\t\t\t

\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  84 => 29,  79 => 27,  73 => 24,  68 => 22,  63 => 20,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/homepage.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>title</title>
\t</head>
\t<body>
\t\t<h1>title</h1>
\t\t<p>Complétez le fichier homepage.html.twig et son contrôleur, en utilisant :
\t\t\t\t\t\t
\t\t\t\t\t\t    une variable title dans la balise title> (en-tête) et h1> (corps) : « MDN web docs »
\t\t\t\t\t\t
\t\t\t\t\t\t    une variable content dans un paragraphe HTML : « Des ressources pour les développeurs, par les développeurs. »</p>

\t\t<p>
\t\t\tcontent</p>


\t\t<p>{{ welcome | upper}}</p>
\t\t<p>Vous êtes le
\t\t\t{{ visitorNumber }}ème visiteur !</p>
\t\t<p>Sommes-nous sur la page d'accueil ?
\t\t\t{{ isHomepage }}
\t\t</p>
\t\t<p>Savons-nous déjà tout ce qu'il y a à savoir sur Twig ?
\t\t\t{{ knowEverythingAboutTwig }}</p>
\t\t<p>La page a chargé en
\t\t\t{{ pageLoadTime }}
\t\t\tseconde(s)</p>
\t\t<p>Les filtres les plus utilisés :
\t\t\t\t\t\t
\t\t\t\t\t\t    lower : met toutes les lettres d'une chaîne de caractères en minuscules.
\t\t\t\t\t\t
\t\t\t\t\t\t    capitalize : met la première lettre d'une chaîne de caractères en majuscule.
\t\t\t\t\t\t
\t\t\t\t\t\t    date : formate une date selon le format donné passé en paramètre,
\t\t\t    myDate|date(\"d-m-Y\") }}
\t\t\tpar exemple.
\t\t\t\t\t\t
\t\t\t\t\t\t    keys : appliqué à un array, retourne les clés de ce tableau (utile si nous souhaitons parcourir les clés plutôt que les valeurs).
\t\t\t\t\t\t
\t\t\t\t\t\t    length : retourne le nombre d'éléments s'il s'agit d'un array, ou la longueur pour une chaîne de caractères.
\t\t\t\t\t\t
\t\t\t\t\t\t    raw : permet d’exécuter le HTML ou le JavaScript contenu dans la variable (à n'utiliser que sur des valeurs considérées comme sûres).</p>

                            <p>{{ \"now\"|date(\"Y\")}} affiche l'année grâce au filtre</p>

\t\t\t\t\t\t\t

\t</body>
</html>
", "homepage.html.twig", "/home/cyril/Bureau/symfonytwig2/templates/homepage.html.twig");
    }
}
