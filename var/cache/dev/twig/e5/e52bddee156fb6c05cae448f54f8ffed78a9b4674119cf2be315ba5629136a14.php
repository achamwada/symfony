<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_408a2cf0e94b6a936e0832b3e2b4b382d6194df48f56850a2f0e071671348fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408a2cf0e94b6a936e0832b3e2b4b382d6194df48f56850a2f0e071671348fca->enter($__internal_408a2cf0e94b6a936e0832b3e2b4b382d6194df48f56850a2f0e071671348fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_08bc9fd80db37d5394bf0a7c0a317ed8975d4e3b32770a19cb4b702ca097b668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bc9fd80db37d5394bf0a7c0a317ed8975d4e3b32770a19cb4b702ca097b668->enter($__internal_08bc9fd80db37d5394bf0a7c0a317ed8975d4e3b32770a19cb4b702ca097b668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_408a2cf0e94b6a936e0832b3e2b4b382d6194df48f56850a2f0e071671348fca->leave($__internal_408a2cf0e94b6a936e0832b3e2b4b382d6194df48f56850a2f0e071671348fca_prof);

        
        $__internal_08bc9fd80db37d5394bf0a7c0a317ed8975d4e3b32770a19cb4b702ca097b668->leave($__internal_08bc9fd80db37d5394bf0a7c0a317ed8975d4e3b32770a19cb4b702ca097b668_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a40238f740c9f8cb7afc2e39308b7fa82a56423601dc95e0a24fb0282c5a973a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40238f740c9f8cb7afc2e39308b7fa82a56423601dc95e0a24fb0282c5a973a->enter($__internal_a40238f740c9f8cb7afc2e39308b7fa82a56423601dc95e0a24fb0282c5a973a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11f80d98dc129c7c90d75a5a8bc589ed00b1c3ccdb1f5f861ccaf245cb3abfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f80d98dc129c7c90d75a5a8bc589ed00b1c3ccdb1f5f861ccaf245cb3abfe1->enter($__internal_11f80d98dc129c7c90d75a5a8bc589ed00b1c3ccdb1f5f861ccaf245cb3abfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11f80d98dc129c7c90d75a5a8bc589ed00b1c3ccdb1f5f861ccaf245cb3abfe1->leave($__internal_11f80d98dc129c7c90d75a5a8bc589ed00b1c3ccdb1f5f861ccaf245cb3abfe1_prof);

        
        $__internal_a40238f740c9f8cb7afc2e39308b7fa82a56423601dc95e0a24fb0282c5a973a->leave($__internal_a40238f740c9f8cb7afc2e39308b7fa82a56423601dc95e0a24fb0282c5a973a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd8f96642a858290b5c5aab4a6a01ee6b7fbbba40b58fc4c4d8241890bae4ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8f96642a858290b5c5aab4a6a01ee6b7fbbba40b58fc4c4d8241890bae4ffc->enter($__internal_fd8f96642a858290b5c5aab4a6a01ee6b7fbbba40b58fc4c4d8241890bae4ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_784ce8bc61dbfac68749a071958a73e62d15afacfb0887318ede52b4ea30793d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784ce8bc61dbfac68749a071958a73e62d15afacfb0887318ede52b4ea30793d->enter($__internal_784ce8bc61dbfac68749a071958a73e62d15afacfb0887318ede52b4ea30793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_784ce8bc61dbfac68749a071958a73e62d15afacfb0887318ede52b4ea30793d->leave($__internal_784ce8bc61dbfac68749a071958a73e62d15afacfb0887318ede52b4ea30793d_prof);

        
        $__internal_fd8f96642a858290b5c5aab4a6a01ee6b7fbbba40b58fc4c4d8241890bae4ffc->leave($__internal_fd8f96642a858290b5c5aab4a6a01ee6b7fbbba40b58fc4c4d8241890bae4ffc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_161432b3a59645f52cd973d936752c759285eeedd98e5c5b56395346dce8e3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161432b3a59645f52cd973d936752c759285eeedd98e5c5b56395346dce8e3a7->enter($__internal_161432b3a59645f52cd973d936752c759285eeedd98e5c5b56395346dce8e3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee105f69c1c0b16af19aecf84d3691f67415d2f7e6d6cb09674a78a6e35d952e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee105f69c1c0b16af19aecf84d3691f67415d2f7e6d6cb09674a78a6e35d952e->enter($__internal_ee105f69c1c0b16af19aecf84d3691f67415d2f7e6d6cb09674a78a6e35d952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee105f69c1c0b16af19aecf84d3691f67415d2f7e6d6cb09674a78a6e35d952e->leave($__internal_ee105f69c1c0b16af19aecf84d3691f67415d2f7e6d6cb09674a78a6e35d952e_prof);

        
        $__internal_161432b3a59645f52cd973d936752c759285eeedd98e5c5b56395346dce8e3a7->leave($__internal_161432b3a59645f52cd973d936752c759285eeedd98e5c5b56395346dce8e3a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3c876ff42d9b95512f4777b48e20ddceb00c44130c4f60b4658bf7f0b146067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c876ff42d9b95512f4777b48e20ddceb00c44130c4f60b4658bf7f0b146067->enter($__internal_f3c876ff42d9b95512f4777b48e20ddceb00c44130c4f60b4658bf7f0b146067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_abe26912ec647458d100914a2138c2d97f65110bae76523d37c9063be3690de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe26912ec647458d100914a2138c2d97f65110bae76523d37c9063be3690de9->enter($__internal_abe26912ec647458d100914a2138c2d97f65110bae76523d37c9063be3690de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_abe26912ec647458d100914a2138c2d97f65110bae76523d37c9063be3690de9->leave($__internal_abe26912ec647458d100914a2138c2d97f65110bae76523d37c9063be3690de9_prof);

        
        $__internal_f3c876ff42d9b95512f4777b48e20ddceb00c44130c4f60b4658bf7f0b146067->leave($__internal_f3c876ff42d9b95512f4777b48e20ddceb00c44130c4f60b4658bf7f0b146067_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/app/Resources/views/base.html.twig");
    }
}
