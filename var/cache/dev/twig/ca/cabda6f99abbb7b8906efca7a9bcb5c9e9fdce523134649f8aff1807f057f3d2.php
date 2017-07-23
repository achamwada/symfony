<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9ee7276dff33f6ddb17ad6ad738c332a37a16c41c8f6245f32c24cf871ac5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ee7276dff33f6ddb17ad6ad738c332a37a16c41c8f6245f32c24cf871ac5fb->enter($__internal_d9ee7276dff33f6ddb17ad6ad738c332a37a16c41c8f6245f32c24cf871ac5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_803928c816badf0c387f39367666b89d6e989a5c990eb49299ede8f148802f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803928c816badf0c387f39367666b89d6e989a5c990eb49299ede8f148802f88->enter($__internal_803928c816badf0c387f39367666b89d6e989a5c990eb49299ede8f148802f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9ee7276dff33f6ddb17ad6ad738c332a37a16c41c8f6245f32c24cf871ac5fb->leave($__internal_d9ee7276dff33f6ddb17ad6ad738c332a37a16c41c8f6245f32c24cf871ac5fb_prof);

        
        $__internal_803928c816badf0c387f39367666b89d6e989a5c990eb49299ede8f148802f88->leave($__internal_803928c816badf0c387f39367666b89d6e989a5c990eb49299ede8f148802f88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f376c1d497aeb414216cb877e0fc34d2a93349b832f1b01be4d806b57e923023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f376c1d497aeb414216cb877e0fc34d2a93349b832f1b01be4d806b57e923023->enter($__internal_f376c1d497aeb414216cb877e0fc34d2a93349b832f1b01be4d806b57e923023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_284bcaaf6f9d403f48df5261dd26a6b01fddf8042b091f241c50ae5a3a1036dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284bcaaf6f9d403f48df5261dd26a6b01fddf8042b091f241c50ae5a3a1036dd->enter($__internal_284bcaaf6f9d403f48df5261dd26a6b01fddf8042b091f241c50ae5a3a1036dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_284bcaaf6f9d403f48df5261dd26a6b01fddf8042b091f241c50ae5a3a1036dd->leave($__internal_284bcaaf6f9d403f48df5261dd26a6b01fddf8042b091f241c50ae5a3a1036dd_prof);

        
        $__internal_f376c1d497aeb414216cb877e0fc34d2a93349b832f1b01be4d806b57e923023->leave($__internal_f376c1d497aeb414216cb877e0fc34d2a93349b832f1b01be4d806b57e923023_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_944d1bf2af0b933eab8845e85e97427e177812f8ee4736e5f916eef4548322a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944d1bf2af0b933eab8845e85e97427e177812f8ee4736e5f916eef4548322a5->enter($__internal_944d1bf2af0b933eab8845e85e97427e177812f8ee4736e5f916eef4548322a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff58888f82fee86399baed97bbff79b3e12f8f19573ec8fc6ce4fe0a165b2be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff58888f82fee86399baed97bbff79b3e12f8f19573ec8fc6ce4fe0a165b2be4->enter($__internal_ff58888f82fee86399baed97bbff79b3e12f8f19573ec8fc6ce4fe0a165b2be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff58888f82fee86399baed97bbff79b3e12f8f19573ec8fc6ce4fe0a165b2be4->leave($__internal_ff58888f82fee86399baed97bbff79b3e12f8f19573ec8fc6ce4fe0a165b2be4_prof);

        
        $__internal_944d1bf2af0b933eab8845e85e97427e177812f8ee4736e5f916eef4548322a5->leave($__internal_944d1bf2af0b933eab8845e85e97427e177812f8ee4736e5f916eef4548322a5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a546fc38596e7ac4f9256cee6dc70d97825395625e51ed6beb9b58d729ac5345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a546fc38596e7ac4f9256cee6dc70d97825395625e51ed6beb9b58d729ac5345->enter($__internal_a546fc38596e7ac4f9256cee6dc70d97825395625e51ed6beb9b58d729ac5345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c7b7748ddcc18a16a3d90abe0a46e9dc3e2cea0ca737a2968ffda65ccf56b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7b7748ddcc18a16a3d90abe0a46e9dc3e2cea0ca737a2968ffda65ccf56b7d->enter($__internal_5c7b7748ddcc18a16a3d90abe0a46e9dc3e2cea0ca737a2968ffda65ccf56b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5c7b7748ddcc18a16a3d90abe0a46e9dc3e2cea0ca737a2968ffda65ccf56b7d->leave($__internal_5c7b7748ddcc18a16a3d90abe0a46e9dc3e2cea0ca737a2968ffda65ccf56b7d_prof);

        
        $__internal_a546fc38596e7ac4f9256cee6dc70d97825395625e51ed6beb9b58d729ac5345->leave($__internal_a546fc38596e7ac4f9256cee6dc70d97825395625e51ed6beb9b58d729ac5345_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
