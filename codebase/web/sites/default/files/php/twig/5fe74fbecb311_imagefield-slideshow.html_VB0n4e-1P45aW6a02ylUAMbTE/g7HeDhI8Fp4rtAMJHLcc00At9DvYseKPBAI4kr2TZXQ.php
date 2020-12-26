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

/* modules/contrib/imagefield_slideshow/templates/imagefield-slideshow.html.twig */
class __TwigTemplate_093d3e09263a05696950c6e36ad96c4d9f8556e5f9188e65a1a2a13431138cf0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 27, "for" => 30];
        $filters = ["escape" => 20];
        $functions = ["random" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['random']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        $context["prev"] = twig_random($this->env);
        // line 17
        $context["next"] = twig_random($this->env);
        // line 18
        echo "<div class=\"imagefield_slideshow-wrapper\">
    <div class=\"cycle-slideshow\"
         data-cycle-pause-on-hover='";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pause"] ?? null)), "html", null, true);
        echo "'
         data-cycle-fx=\"";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["effect"] ?? null)), "html", null, true);
        echo "\"
         data-cycle-speed=\"";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["speed"] ?? null)), "html", null, true);
        echo "\"
         data-cycle-timeout=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["timeout"] ?? null)), "html", null, true);
        echo "\"
         data-cycle-prev=\"#imagefield_slideshow-prev-";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev"] ?? null)), "html", null, true);
        echo "\"
         data-cycle-next=\"#imagefield_slideshow-next-";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next"] ?? null)), "html", null, true);
        echo "\"
         data-cycle-loader=\"wait\">
        ";
        // line 27
        if (($context["pager"] ?? null)) {
            // line 28
            echo "            <div class=\"cycle-pager\"></div>
        ";
        }
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["url"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 31
            echo "            <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    ";
        // line 34
        if (($context["prev_next"] ?? null)) {
            // line 35
            echo "        <div class=\"prev-next\">
            <a href=# id=\"imagefield_slideshow-prev-";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev"] ?? null)), "html", null, true);
            echo "\">Prev</a>
            <a href=# id=\"imagefield_slideshow-next-";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next"] ?? null)), "html", null, true);
            echo "\">Next</a>
        </div>
    ";
        }
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/imagefield_slideshow/templates/imagefield-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  120 => 37,  116 => 36,  113 => 35,  111 => 34,  108 => 33,  99 => 31,  94 => 30,  90 => 28,  88 => 27,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 18,  57 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a formatted imagefield slideshow field.
 *
 * Available variables:
 * - image: A collection of image data.
 * - image_style: An optional image style.
 * - url: An optional URL the image can be linked to.
 *
 * @see template_preprocess_image_formatter()
 *
 * @ingroup themeable
 */
#}
{% set prev = random() %}
{% set next = random() %}
<div class=\"imagefield_slideshow-wrapper\">
    <div class=\"cycle-slideshow\"
         data-cycle-pause-on-hover='{{ pause }}'
         data-cycle-fx=\"{{ effect }}\"
         data-cycle-speed=\"{{ speed }}\"
         data-cycle-timeout=\"{{ timeout }}\"
         data-cycle-prev=\"#imagefield_slideshow-prev-{{ prev }}\"
         data-cycle-next=\"#imagefield_slideshow-next-{{ next }}\"
         data-cycle-loader=\"wait\">
        {% if pager %}
            <div class=\"cycle-pager\"></div>
        {% endif %}
        {% for key,value in url %}
            <img src=\"{{ value }}\" />
        {% endfor %}
    </div>
    {% if prev_next %}
        <div class=\"prev-next\">
            <a href=# id=\"imagefield_slideshow-prev-{{ prev }}\">Prev</a>
            <a href=# id=\"imagefield_slideshow-next-{{ next }}\">Next</a>
        </div>
    {% endif %}
</div>
", "modules/contrib/imagefield_slideshow/templates/imagefield-slideshow.html.twig", "/var/www/html/web/modules/contrib/imagefield_slideshow/templates/imagefield-slideshow.html.twig");
    }
}
