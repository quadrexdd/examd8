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

/* likebtn-markup.html.twig */
class __TwigTemplate_e35d3b2675ade78f7665b3a3d81666011eb1e9a5ad784693dcf74d64b802f0a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7];
        $filters = ["escape" => 8, "raw" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                []
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
        // line 1
        echo "<script type=\"text/javascript\">
  if (typeof(LikeBtn) != \"undefined\") {
    LikeBtn.init();
  }
</script>

";
        // line 7
        if (($context["html_before"] ?? null)) {
            // line 8
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_before"] ?? null)), "html", null, true);
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        if (($context["aligment"] ?? null)) {
            // line 12
            echo "  <div style=\"text-align:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["aligment"] ?? null)), "html", null, true);
            echo "\" class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["data"] ?? null)));
            echo "></span>
  </div>
";
        } else {
            // line 16
            echo "  <div class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["data"] ?? null)));
            echo "></span>
  </div>
";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["html_after"] ?? null)) {
            // line 22
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_after"] ?? null)), "html", null, true);
            echo "
";
        }
        // line 24
        echo "<script>(function(d,e,s){if(d.getElementById(\"likebtn_wjs\"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id=\"likebtn_wjs\";a.src=s;m.parentNode.insertBefore(a, m)})(document,\"script\",\"//w.likebtn.com/js/w/widget.js\");</script>";
    }

    public function getTemplateName()
    {
        return "likebtn-markup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  101 => 22,  99 => 21,  96 => 20,  90 => 17,  87 => 16,  81 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
  if (typeof(LikeBtn) != \"undefined\") {
    LikeBtn.init();
  }
</script>

{% if html_before %}
  {{ html_before }}
{% endif %}

{% if aligment %}
  <div style=\"text-align:{{ aligment }}\" class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" {{ data|raw }}></span>
  </div>
{% else %}
  <div class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" {{ data|raw }}></span>
  </div>
{% endif %}

{% if html_after %}
  {{ html_after }}
{% endif %}
<script>(function(d,e,s){if(d.getElementById(\"likebtn_wjs\"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id=\"likebtn_wjs\";a.src=s;m.parentNode.insertBefore(a, m)})(document,\"script\",\"//w.likebtn.com/js/w/widget.js\");</script>", "likebtn-markup.html.twig", "modules/contrib/likebtn/templates/likebtn-markup.html.twig");
    }
}
