<?php

/* TuittyBundle:Default:index.html.twig */
class __TwigTemplate_94f98eebfe6c1429ece7c7f8c5f8dd03318b660f26277c671b9e36d4576d52dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "user"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "TuittyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
