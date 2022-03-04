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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</title>
\t</head>
\t<body>

\t\t<p>À partir du contrôleur ci-dessous, écrivez le contenu du fichier homepage.html.twig en mettant le contenu de la balise h1> en majuscules. Affichez ensuite le contenu du dernier article en affichant la date au bon format.</p>
\t\t<h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "</h1>
\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
\t\t<h2>Le dernier article</h2>

\t\t<p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "
\t\t\técrit le
\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastPost"]) || array_key_exists("lastPost", $context) ? $context["lastPost"] : (function () { throw new RuntimeError('Variable "lastPost" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</p>

\t\t<h1>Balise d'exécution</h1>

\t\t<p>Affecter une variable
\t\t\t";
        // line 22
        $context["username"] = "Nicolas";
        // line 23
        echo "\t\t\t";
        echo twig_escape_filter($this->env, ("Bonjour " . (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "
\t\t</p>

\t\t<h1>Conditionner l'affichage d'une variable</h1>
\t\t<p>
\t\t\t";
        // line 28
        if (array_key_exists("user", $context)) {
            // line 29
            echo "\t\t\t\t<p>Utilisateur connecté :
\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t<p>Pas d'utilisateur connecté !</p>
\t\t\t";
        }
        // line 34
        echo "\t\t</p>

\t\t<p>
\t\t\t";
        // line 37
        if ((array_key_exists("user", $context) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37)))) {
            // line 38
            echo "\t\t\t\t<p>Utilisateur connecté :
\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "username", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t<p>Pas d'utilisateur connecté !</p>
\t\t\t";
        }
        // line 43
        echo "\t\t</p>

\t\t

\t\t<p>";
        // line 64
        echo "</p>

\t\t<h1>Boucler sur un tableau</h1>

<p>Avec loop index0 part de 0 sinon c'est 1 le départ</p>
        <ul>
\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 70, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 71
            echo "\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 71), "html", null, true);
            echo "</li>
                ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 72)) {
                // line 73
                echo "                <li>Fin</li>
                ";
            }
            // line 75
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
\t\t</ul>

\t\t
\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 81
            echo "\t\t    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t
\t\t
\t\t
\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 86, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 87
            echo "\t\t    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "\t\t    <p>Aucun utilisateur trouvé !</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t
\t\t

\t\t<h1>Les fonctions</h1>
\t\t<p>
\t\t";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_date_converter($this->env, "now"));
        echo "
\t\t
\t\t
\t\t";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, range(0, 3));
        echo " ";
        // line 100
        echo "
\t";
        // line 102
        echo "\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, range(0, 10, 2));
        echo "
\t\t";
        // line 104
        echo "
\t\t";
        // line 106
        echo "\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, range(0, 10, 2));
        echo "
\t\t";
        // line 108
        echo "
\t\t";
        // line 110
        echo "\t\t";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, range(0, 2));
        echo "
\t\t";
        // line 112
        echo "\t</body>
</html></p>#}</body></html>
";
        
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
        return array (  266 => 112,  261 => 110,  258 => 108,  253 => 106,  250 => 104,  245 => 102,  242 => 100,  239 => 99,  233 => 96,  226 => 91,  219 => 89,  211 => 87,  206 => 86,  201 => 83,  192 => 81,  188 => 80,  182 => 76,  168 => 75,  164 => 73,  162 => 72,  155 => 71,  138 => 70,  130 => 64,  124 => 43,  120 => 41,  115 => 39,  112 => 38,  110 => 37,  105 => 34,  101 => 32,  96 => 30,  93 => 29,  91 => 28,  82 => 23,  80 => 22,  72 => 17,  67 => 15,  61 => 12,  57 => 11,  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/homepage_ex.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>{{ title }}</title>
\t</head>
\t<body>

\t\t<p>À partir du contrôleur ci-dessous, écrivez le contenu du fichier homepage.html.twig en mettant le contenu de la balise h1> en majuscules. Affichez ensuite le contenu du dernier article en affichant la date au bon format.</p>
\t\t<h1>{{ title|upper }}</h1>
\t\t<p>{{ content }}</p>
\t\t<h2>Le dernier article</h2>

\t\t<p>{{ lastPost.title }}
\t\t\técrit le
\t\t\t{{ lastPost.createdAt|date('d/m/Y') }}</p>

\t\t<h1>Balise d'exécution</h1>

\t\t<p>Affecter une variable
\t\t\t{% set username = 'Nicolas' %}
\t\t\t{{ 'Bonjour ' ~ username }}
\t\t</p>

\t\t<h1>Conditionner l'affichage d'une variable</h1>
\t\t<p>
\t\t\t{% if user is defined %}
\t\t\t\t<p>Utilisateur connecté :
\t\t\t\t\t{{ user.username }}</p>
\t\t\t{% else %}
\t\t\t\t<p>Pas d'utilisateur connecté !</p>
\t\t\t{% endif %}
\t\t</p>

\t\t<p>
\t\t\t{% if user is defined and user.username is not null %}
\t\t\t\t<p>Utilisateur connecté :
\t\t\t\t\t{{ user.username }}</p>
\t\t\t{% else %}
\t\t\t\t<p>Pas d'utilisateur connecté !</p>
\t\t\t{% endif %}
\t\t</p>

\t\t

\t\t<p>{#{% if user.username == '' %}
\t\t\t    <p>Nom d'utilisateur vide.</p>
\t\t\t{% endif %}
\t\t\t
\t\t\t
\t\t\t{% if 1 in [1, 2, 3] %}
\t\t\t
\t\t\t
\t\t\tPour utiliser des expressions régulières, nous pouvons utiliser matches :
\t\t\t
\t\t\t{% if phone matches '/^[\\\\d\\\\.]+\$/' %}
\t\t\t    <p>Numéro de téléphone valide !</p>
\t\t\t{% endif %}
\t\t\t
\t\t\tEnfin, il est aussi possible de vérifier si une chaîne de caractères commence ou se termine par une lettre particulière :
\t\t\t{% if 'Twig' starts with 'T' and 'Twig' ends with 'g' %}
\t\t\t
\t\t\t#}</p>

\t\t<h1>Boucler sur un tableau</h1>

<p>Avec loop index0 part de 0 sinon c'est 1 le départ</p>
        <ul>
\t\t\t{% for user in users %}
\t\t\t\t<li>{{ loop.index }} - {{ user.username}}</li>
                {% if loop.last %}
                <li>Fin</li>
                {% endif %}
\t\t\t{% endfor %}

\t\t</ul>

\t\t
\t\t{% for user in users %}
\t\t    <p>{{ user.username }}</p>
\t\t{% endfor %}
\t\t
\t\t
\t\t
\t\t{% for user in users %}
\t\t    <p>{{ user.username }}</p>
\t\t{% else %}
\t\t    <p>Aucun utilisateur trouvé !</p>
\t\t{% endfor %}
\t\t
\t\t

\t\t<h1>Les fonctions</h1>
\t\t<p>
\t\t{{ dump(date(\"now\")) }}
\t\t
\t\t
\t\t{{ dump(range(0, 3)) }} {# génère 0, 1, 2, 3 #}

\t{# Le troisième argument, step, permet de spécifier de combien on incrémente entre chaque valeur #}
\t\t{{ dump(range(0, 10, 2)) }}
\t\t{# Génère 0, 2, 4, 6, 8, 10 #}

\t\t{# On peut utiliser les paramètres nommés, pour rendre notre code plus explicite #}
\t\t{{ dump(range(low=0, high=10, step=2)) }}
\t\t{# Le résultat est identique #}

\t\t{# L'opérateur .. est un sucre syntaxique qui permet de générer une liste d'entiers avec un step de 1 #}
\t\t{{ dump(0..2) }}
\t\t{# Génère 0, 1, 2 #}
\t</body>
</html></p>#}</body></html>
", "homepage_ex.html.twig", "/home/cyril/Bureau/symfonytwig2/templates/homepage_ex.html.twig");
    }
}
