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

/* themes/zurb_foundation/templates/page.html.twig */
class __TwigTemplate_e3ce5518b1f79ded446c24f1409744b21e767e9c0c1b7ae1847adc37e88c5e21 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_off_canvas", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_off_canvas", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 58)) {
            // line 59
            echo "        ";
            if (($context["meta_header_grid"] ?? null)) {
                // line 60
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 63
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "meta_header", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
        ";
            // line 64
            if (($context["meta_header_grid"] ?? null)) {
                // line 65
                echo "            </div>
          </div>
        ";
            }
            // line 68
            echo "      ";
        }
        // line 69
        echo "
      <header class=\"row\" role=\"banner\" aria-label=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          <div class=\"large-12 columns\">
            ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 76
        echo "      </header>

      <div class=\"row\">
        ";
        // line 79
        if (($context["show_account_info"] ?? null)) {
            // line 80
            echo "          <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["site_slogan"] ?? null)) ? ("large-6") : ("large-4 columns large-offset-8")));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 82
            if (($context["logged_in"] ?? null)) {
                // line 83
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.page"));
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("My Account"));
                echo "</a>
                <a href=\"";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.logout"));
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Logout"));
                echo "</a>
              ";
            } else {
                // line 86
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.login"));
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
                echo "</a>
                <a href=\"";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.register"));
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sign Up"));
                echo "</a>
              ";
            }
            // line 89
            echo "            </p>
          </div>
        ";
        }
        // line 92
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 93
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 94, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 97
        echo "        ";
        if (($context["show_account_info"] ?? null)) {
            // line 98
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.login"));
            echo "\" class=\"radius button\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login"));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.register"));
            echo "\" class=\"radius success button\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sign Up"));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 111
        echo "      </div>

      ";
        // line 113
        if ((($context["messages"] ?? null) &&  !($context["zurb_foundation_messages_modal"] ?? null))) {
            // line 114
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 116, $this->source), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 120
        echo "
      ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 121)) {
            // line 122
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
        </div>
      </div>
      ";
        }
        // line 128
        echo "
      <div class=\"row\">
        <main id=\"main\" class=\"";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid"] ?? null), 130, $this->source), "html", null, true);
        echo " columns\" role=\"main\">
          ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131)) {
            // line 132
            echo "            ";
            ob_start(function () { return ''; });
            // line 133
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
            ";
            $___internal_98b41e4700c358c81a3301701785e5c918fca79cd57631dc168157413f785cb2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_98b41e4700c358c81a3301701785e5c918fca79cd57631dc168157413f785cb2_));
            // line 135
            echo "          ";
        }
        // line 136
        echo "          <a id=\"main-content\"></a>
          ";
        // line 137
        if (($context["breadcrumb"] ?? null)) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 137, $this->source), "html", null, true);
            echo " ";
        }
        // line 138
        echo "          <section>
            ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 142)) {
            // line 143
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid"] ?? null), 143, $this->source), "html", null, true);
            echo " columns sidebar \">
            ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 147
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 147)) {
            // line 148
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_sec_grid"] ?? null), 148, $this->source), "html", null, true);
            echo " columns sidebar\">
            ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 152
        echo "      </div>
      ";
        // line 153
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 153) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 153)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 153))) {
            // line 154
            echo "        <footer class=\"row\">
          ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 155)) {
                // line 156
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 157
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 160
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 160)) {
                // line 161
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 162
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 165
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 165)) {
                // line 166
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 170
            echo "        </footer>
      ";
        }
        // line 172
        echo "      ";
        if (($context["block_copyright_show"] ?? null)) {
            // line 173
            echo "        <div class=\"bottom-bar callout secondary large-12 columns\">
          ";
            // line 174
            if ( !($context["block_copyright_custom_text"] ?? null)) {
                // line 175
                echo "            <p>&copy; ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 175, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All rights reserved."));
                echo "</p>
          ";
            } else {
                // line 177
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_copyright"] ?? null), 177, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 179
            echo "        </div>
      ";
        }
        // line 181
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 181,  363 => 179,  357 => 177,  347 => 175,  345 => 174,  342 => 173,  339 => 172,  335 => 170,  329 => 167,  326 => 166,  323 => 165,  317 => 162,  314 => 161,  311 => 160,  305 => 157,  302 => 156,  300 => 155,  297 => 154,  295 => 153,  292 => 152,  286 => 149,  281 => 148,  278 => 147,  272 => 144,  267 => 143,  265 => 142,  259 => 139,  256 => 138,  250 => 137,  247 => 136,  244 => 135,  242 => 132,  236 => 133,  233 => 132,  231 => 131,  227 => 130,  223 => 128,  216 => 124,  212 => 122,  210 => 121,  207 => 120,  200 => 116,  196 => 114,  194 => 113,  190 => 111,  180 => 106,  170 => 101,  165 => 98,  162 => 97,  156 => 94,  153 => 93,  150 => 92,  145 => 89,  138 => 87,  131 => 86,  124 => 84,  117 => 83,  115 => 82,  109 => 80,  107 => 79,  102 => 76,  96 => 73,  93 => 72,  91 => 71,  87 => 70,  84 => 69,  81 => 68,  76 => 65,  74 => 64,  69 => 63,  64 => 60,  61 => 59,  59 => 58,  52 => 54,  45 => 50,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zurb_foundation/templates/page.html.twig", "C:\\xampp\\htdocs\\artscrafts\\drupal-9.1.2\\themes\\zurb_foundation\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 58, "apply" => 132);
        static $filters = array("escape" => 50, "t" => 70, "spaceless" => 132, "date" => 175);
        static $functions = array("path" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 't', 'spaceless', 'date'],
                ['path']
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
