<?php

/* TuittyBundle:Account:new_user.html.twig */
class __TwigTemplate_0acd94c76b1325f320aa8a37b6f9fd1045ff1cf88524264fc2c3c0c9c76a5c1e extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "acction"), "html", null, true);
        echo "\" method=\"post\">
    
    <input type=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "TuittyBundle:Account:new_user.html.twig";
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
