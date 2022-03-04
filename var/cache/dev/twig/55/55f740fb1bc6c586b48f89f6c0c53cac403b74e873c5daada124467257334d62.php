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

/* homepage_ex.html.twig */
class __TwigTemplate_59e8a8fc403dac11f29c0ea2e375ea32966c7dfb7d8dbd0b9e80a98157b26cfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage_ex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage_ex.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</title>
    </head>
    <body>

    <p>À partir du contrôleur ci-dessous, écrivez le contenu du fichier homepage.html.twig en mettant le contenu de la balise h1> en majuscules. Affichez ensuite le contenu du dernier article en affichant la date au bon format.</p>
        <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "</h1>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
        <h2>Le dernier article</h2>
        
        <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo " écrit le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 15, $this->source); })()), "createdAt", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        echo "</p>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "homepage_ex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  61 => 12,  57 => 11,  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/homepage_ex.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{{ title }}</title>
    </head>
    <body>

    <p>À partir du contrôleur ci-dessous, écrivez le contenu du fichier homepage.html.twig en mettant le contenu de la balise h1> en majuscules. Affichez ensuite le contenu du dernier article en affichant la date au bon format.</p>
        <h1>{{ title|upper }}</h1>
        <p>{{ content }}</p>
        <h2>Le dernier article</h2>
        
        <p>{{ lastPost.title }} écrit le {{ lastPost.createdAt|date('d/m/Y') }}</p>
    </body>
</html>", "homepage_ex.html.twig", "/home/cyril/Bureau/symfonytwig2/templates/homepage_ex.html.twig");
    }
}
