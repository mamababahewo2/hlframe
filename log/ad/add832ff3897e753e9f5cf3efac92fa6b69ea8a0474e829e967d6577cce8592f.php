<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html */
class __TwigTemplate_74f23a02e7092d313d20eed9a04a18e54a6e08cdb2a70325ef440a8814ace762 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>布局页面</title>
</head>
<body>
    <header>header</header>
    <content>
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </content>
    <footer>footer</footer>
</body>
</html>";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  51 => 10,  44 => 13,  42 => 10,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>布局页面</title>
</head>
<body>
    <header>header</header>
    <content>
        {% block content %}

        {% endblock %}
    </content>
    <footer>footer</footer>
</body>
</html>", "layout.html", "E:\\phpStudy\\WWW\\hlframe\\app\\views\\layout.html");
    }
}
