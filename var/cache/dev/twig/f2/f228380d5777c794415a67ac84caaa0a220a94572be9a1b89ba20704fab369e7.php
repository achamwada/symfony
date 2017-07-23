<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c3dc17b960a7db502e7731d5be3b6e564051d6096f78d43a62f3aa07c107630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3dc17b960a7db502e7731d5be3b6e564051d6096f78d43a62f3aa07c107630->enter($__internal_1c3dc17b960a7db502e7731d5be3b6e564051d6096f78d43a62f3aa07c107630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4a8f4eca9acbfca7f6e42ef4472d09b3962809bbebfbd0905f9ce5910894e8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8f4eca9acbfca7f6e42ef4472d09b3962809bbebfbd0905f9ce5910894e8f5->enter($__internal_4a8f4eca9acbfca7f6e42ef4472d09b3962809bbebfbd0905f9ce5910894e8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3dc17b960a7db502e7731d5be3b6e564051d6096f78d43a62f3aa07c107630->leave($__internal_1c3dc17b960a7db502e7731d5be3b6e564051d6096f78d43a62f3aa07c107630_prof);

        
        $__internal_4a8f4eca9acbfca7f6e42ef4472d09b3962809bbebfbd0905f9ce5910894e8f5->leave($__internal_4a8f4eca9acbfca7f6e42ef4472d09b3962809bbebfbd0905f9ce5910894e8f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_334d784a2ef4a471408ea2bb1b13dc66c60152cc9f1dc4f82f6b63d867825e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334d784a2ef4a471408ea2bb1b13dc66c60152cc9f1dc4f82f6b63d867825e8b->enter($__internal_334d784a2ef4a471408ea2bb1b13dc66c60152cc9f1dc4f82f6b63d867825e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0a93e42531f2924707f450a9d6b350e61db780b37b8d911845cd5c1f889e317b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a93e42531f2924707f450a9d6b350e61db780b37b8d911845cd5c1f889e317b->enter($__internal_0a93e42531f2924707f450a9d6b350e61db780b37b8d911845cd5c1f889e317b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a93e42531f2924707f450a9d6b350e61db780b37b8d911845cd5c1f889e317b->leave($__internal_0a93e42531f2924707f450a9d6b350e61db780b37b8d911845cd5c1f889e317b_prof);

        
        $__internal_334d784a2ef4a471408ea2bb1b13dc66c60152cc9f1dc4f82f6b63d867825e8b->leave($__internal_334d784a2ef4a471408ea2bb1b13dc66c60152cc9f1dc4f82f6b63d867825e8b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a62cb57aec0c4c7bd0c7e925152ab18ce1557ef306554f4d0c2bc96b5fc2e5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62cb57aec0c4c7bd0c7e925152ab18ce1557ef306554f4d0c2bc96b5fc2e5af->enter($__internal_a62cb57aec0c4c7bd0c7e925152ab18ce1557ef306554f4d0c2bc96b5fc2e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ddc34e7b338cdf8ab60f33341180876debe46c5574728e21f1730f9be46494bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc34e7b338cdf8ab60f33341180876debe46c5574728e21f1730f9be46494bb->enter($__internal_ddc34e7b338cdf8ab60f33341180876debe46c5574728e21f1730f9be46494bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ddc34e7b338cdf8ab60f33341180876debe46c5574728e21f1730f9be46494bb->leave($__internal_ddc34e7b338cdf8ab60f33341180876debe46c5574728e21f1730f9be46494bb_prof);

        
        $__internal_a62cb57aec0c4c7bd0c7e925152ab18ce1557ef306554f4d0c2bc96b5fc2e5af->leave($__internal_a62cb57aec0c4c7bd0c7e925152ab18ce1557ef306554f4d0c2bc96b5fc2e5af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7c9055f8ea630f407eb93b8d5379d7fd453704361b0ce66630cdb9efe9d11cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c9055f8ea630f407eb93b8d5379d7fd453704361b0ce66630cdb9efe9d11cf->enter($__internal_e7c9055f8ea630f407eb93b8d5379d7fd453704361b0ce66630cdb9efe9d11cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_749a6812795834dce498bec0463bf7273b9c9c62feb433fa2eca37acbd702016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749a6812795834dce498bec0463bf7273b9c9c62feb433fa2eca37acbd702016->enter($__internal_749a6812795834dce498bec0463bf7273b9c9c62feb433fa2eca37acbd702016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_749a6812795834dce498bec0463bf7273b9c9c62feb433fa2eca37acbd702016->leave($__internal_749a6812795834dce498bec0463bf7273b9c9c62feb433fa2eca37acbd702016_prof);

        
        $__internal_e7c9055f8ea630f407eb93b8d5379d7fd453704361b0ce66630cdb9efe9d11cf->leave($__internal_e7c9055f8ea630f407eb93b8d5379d7fd453704361b0ce66630cdb9efe9d11cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
