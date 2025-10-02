<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/social_media_platforms/templates/social-media-platforms-links.html.twig */
class __TwigTemplate_74b8cdf1258e8db5e352ec6e5b488c77 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "<div ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["social-media-platforms__container"], "method", false, false, true, 20), "html", null, true);
        yield ">

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["platforms"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 23
            yield "
  ";
            // line 24
            $context["item_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 24), "addClass", [["social-media-platforms__link", ("social-media-platforms__link--" . $context["key"])]], "method", false, false, true, 24);
            // line 25
            yield "  ";
            $context["item_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25)], "method", false, false, true, 25);
            // line 26
            yield "  ";
            $context["item_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "setAttribute", ["title", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 26)], "method", false, false, true, 26);
            // line 27
            yield "
  ";
            // line 28
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["display_options"] ?? null), "target_blank", [], "any", false, false, true, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "    ";
                $context["item_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "setAttribute", ["target", "_blank"], "method", false, false, true, 29);
                // line 30
                yield "  ";
            }
            // line 31
            yield "
  <a ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_attributes"] ?? null), "html", null, true);
            yield ">

    ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["display_options"] ?? null), "icon_source", [], "any", false, false, true, 34) == "image")) {
                // line 35
                yield "      <img class=\"social-media-platforms__icon\" src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 35), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 35), "html", null, true);
                yield "\" >
    ";
            }
            // line 37
            yield "
    ";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["display_options"] ?? null), "icon_source", [], "any", false, false, true, 38) == "font")) {
                // line 39
                yield "      <i class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "font_classes", [], "any", false, false, true, 39), "html", null, true);
                yield "\"></i>
    ";
            }
            // line 41
            yield "

    ";
            // line 43
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["display_options"] ?? null), "show_label", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "      <span class=\"social-media-platforms__label\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 44), "html", null, true);
                yield "</span>
    ";
            }
            // line 46
            yield "
  </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "platforms", "display_options"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/social_media_platforms/templates/social-media-platforms-links.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  125 => 49,  117 => 46,  111 => 44,  109 => 43,  105 => 41,  99 => 39,  97 => 38,  94 => 37,  86 => 35,  84 => 34,  79 => 32,  76 => 31,  73 => 30,  70 => 29,  68 => 28,  65 => 27,  62 => 26,  59 => 25,  57 => 24,  54 => 23,  50 => 22,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/social_media_platforms/templates/social-media-platforms-links.html.twig", "/var/www/html/web/modules/contrib/social_media_platforms/templates/social-media-platforms-links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 22, "set" => 24, "if" => 28];
        static $filters = ["escape" => 20];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                [],
                $this->source
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
