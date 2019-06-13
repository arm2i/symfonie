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
class __TwigTemplate_19987a02ca10025cba46dcd6861f1fcfcdfef017fcaf478cab17e4b5886c1da0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>

        <script
                src=\"http://code.jquery.com/jquery-3.3.1.min.js\"
                integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
                crossorigin=\"anonymous\"></script>

        <!-- CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery-ui-1.8.22.custom.css\"  media=\"screen\" />
        <script type=\"text/javascript\" src=\"/js/jquery-1.7.2.min.js\"></script>
        <script type=\"text/javascript\" src=\"/js/jquery-ui-1.8.22.custom.min.js\"></script>

        <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "

        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        echo "Welcome!";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        // line 26
        echo "

        ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
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
        return array (  107 => 31,  101 => 26,  98 => 25,  93 => 21,  87 => 20,  81 => 32,  79 => 31,  75 => 29,  73 => 25,  66 => 22,  64 => 21,  60 => 20,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\php\\php4\\exam\\esv_symfony\\app\\Resources\\views\\base.html.twig");
    }
}
