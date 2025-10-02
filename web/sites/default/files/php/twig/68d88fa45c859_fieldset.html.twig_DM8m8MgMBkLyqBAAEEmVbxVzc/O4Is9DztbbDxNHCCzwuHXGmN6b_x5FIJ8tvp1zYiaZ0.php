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

/* themes/contrib/bootstrap_barrio/templates/form/fieldset.html.twig */
class __TwigTemplate_b628da22327f87fce777b253dbb8a5db extends Template
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
        // line 24
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper", "mb-3", (((($tmp =         // line 30
($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-error") : (""))];
        // line 33
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33), "html", null, true);
        yield ">
  ";
        // line 35
        $context["legend_span_classes"] = ["fieldset-legend", (((($tmp =         // line 37
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("js-form-required") : ("")), (((($tmp =         // line 38
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-required") : (""))];
        // line 41
        yield "  ";
        // line 42
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 42), "html", null, true);
        yield ">
    <span";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 43), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 43), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 43), "html", null, true);
        yield "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 46
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 51
        yield "    ";
        if ((($tmp = ($context["prefix"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 54
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
    ";
        // line 55
        if ((($tmp = ($context["suffix"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 58
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "      <small";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 59), "addClass", ["description", "text-muted"], "method", false, false, true, 59), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 59), "html", null, true);
            yield "</small>
    ";
        }
        // line 61
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["errors", "attributes", "required", "legend", "legend_span", "prefix", "children", "suffix", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap_barrio/templates/form/fieldset.html.twig";
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
        return array (  115 => 61,  107 => 59,  104 => 58,  98 => 56,  96 => 55,  91 => 54,  85 => 52,  82 => 51,  76 => 48,  73 => 47,  71 => 46,  63 => 43,  58 => 42,  56 => 41,  54 => 38,  53 => 37,  52 => 35,  47 => 33,  45 => 30,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/form/fieldset.html.twig", "/var/www/html/web/themes/contrib/bootstrap_barrio/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 24, "if" => 46];
        static $filters = ["escape" => 33];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
