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

/* block.html.twig */
class __TwigTemplate_e4b3163fbbbf4c48b67f688c68f3289c1d5e080bea5884476f5c58aec509a170 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "delta", [], "any", false, false, true, 45) != "main")) {
            // line 47
            $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 49
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 49), 49, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 50
($context["plugin_id"] ?? null), 50, $this->source)))];
            // line 53
            echo "<section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 56, $this->source), "html", null, true);
        echo "
  ";
        // line 57
        if (($context["label"] ?? null)) {
            // line 58
            echo "    <h2 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 58, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 58, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 60
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 60, $this->source), "html", null, true);
        echo "

  ";
        // line 62
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 63
            echo "  <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 63, $this->source), "html", null, true);
            echo ">
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        if (twig_length_filter($this->env, ($context["content_attributes"] ?? null))) {
            // line 71
            echo "  </div>
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "delta", [], "any", false, false, true, 74) != "main")) {
            // line 75
            echo "</section>
";
        }
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 67, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 67,  108 => 66,  102 => 75,  100 => 74,  97 => 73,  93 => 71,  91 => 70,  88 => 69,  86 => 66,  83 => 65,  77 => 63,  75 => 62,  69 => 60,  61 => 58,  59 => 57,  55 => 56,  52 => 55,  46 => 53,  44 => 50,  43 => 49,  42 => 47,  40 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "block.html.twig", "themes/zurb_foundation/templates/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45, "set" => 47, "block" => 66);
        static $filters = array("clean_class" => 49, "escape" => 53, "length" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['clean_class', 'escape', 'length'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
