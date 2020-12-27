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

/* __string_template__89058c66286ff9a0edb00a839f52eae70d28b4f970ca06d30c3423effa338680 */
class __TwigTemplate_3ed7b60c0f2d5c07676076a5644c26b5fe3aeb053da276c8da3c6693b91715e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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


  <div style=\"text-align:left\" class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" data-identifier=\"node_176_field_like_this_faggot_index_0\" data-engine=\"drupal\" data-engine_v=\"8.9.11\" data-plugin_v=\"2.4\"  data-show_like_label=\"false\"  data-dislike_enabled=\"false\"  data-icon_dislike_show=\"false\"  data-unlike_allowed=\"false\"  data-theme=\"review\"  data-share_size=\"small\" ></span>
  </div>

<script>(function(d,e,s){if(d.getElementById(\"likebtn_wjs\"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id=\"likebtn_wjs\";a.src=s;m.parentNode.insertBefore(a, m)})(document,\"script\",\"//w.likebtn.com/js/w/widget.js\");</script>";
    }

    public function getTemplateName()
    {
        return "__string_template__89058c66286ff9a0edb00a839f52eae70d28b4f970ca06d30c3423effa338680";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<script type=\"text/javascript\">
  if (typeof(LikeBtn) != \"undefined\") {
    LikeBtn.init();
  }
</script>


  <div style=\"text-align:left\" class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" data-identifier=\"node_176_field_like_this_faggot_index_0\" data-engine=\"drupal\" data-engine_v=\"8.9.11\" data-plugin_v=\"2.4\"  data-show_like_label=\"false\"  data-dislike_enabled=\"false\"  data-icon_dislike_show=\"false\"  data-unlike_allowed=\"false\"  data-theme=\"review\"  data-share_size=\"small\" ></span>
  </div>

<script>(function(d,e,s){if(d.getElementById(\"likebtn_wjs\"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id=\"likebtn_wjs\";a.src=s;m.parentNode.insertBefore(a, m)})(document,\"script\",\"//w.likebtn.com/js/w/widget.js\");</script>", "__string_template__89058c66286ff9a0edb00a839f52eae70d28b4f970ca06d30c3423effa338680", "");
    }
}
