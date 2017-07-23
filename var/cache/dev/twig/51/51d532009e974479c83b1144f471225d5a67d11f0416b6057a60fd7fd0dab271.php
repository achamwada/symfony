<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_893971eec49d81bb2caf32a817e67a6f50ab18c3a5f463f89646911edde0bb96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893971eec49d81bb2caf32a817e67a6f50ab18c3a5f463f89646911edde0bb96->enter($__internal_893971eec49d81bb2caf32a817e67a6f50ab18c3a5f463f89646911edde0bb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7da29b94800a7d8f68c81f63a043e326381d352bee8c1a85561ce87eae3d2a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da29b94800a7d8f68c81f63a043e326381d352bee8c1a85561ce87eae3d2a57->enter($__internal_7da29b94800a7d8f68c81f63a043e326381d352bee8c1a85561ce87eae3d2a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_893971eec49d81bb2caf32a817e67a6f50ab18c3a5f463f89646911edde0bb96->leave($__internal_893971eec49d81bb2caf32a817e67a6f50ab18c3a5f463f89646911edde0bb96_prof);

        
        $__internal_7da29b94800a7d8f68c81f63a043e326381d352bee8c1a85561ce87eae3d2a57->leave($__internal_7da29b94800a7d8f68c81f63a043e326381d352bee8c1a85561ce87eae3d2a57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0275f03c534edf1ff9de29612865304c2b5a3a96e979d31d2df061f3ba5b33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0275f03c534edf1ff9de29612865304c2b5a3a96e979d31d2df061f3ba5b33a->enter($__internal_c0275f03c534edf1ff9de29612865304c2b5a3a96e979d31d2df061f3ba5b33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cdcad64be4a69980c2d9198c058b6acb3d55b5427419f3e6d9a35d7d8fb44b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcad64be4a69980c2d9198c058b6acb3d55b5427419f3e6d9a35d7d8fb44b05->enter($__internal_cdcad64be4a69980c2d9198c058b6acb3d55b5427419f3e6d9a35d7d8fb44b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cdcad64be4a69980c2d9198c058b6acb3d55b5427419f3e6d9a35d7d8fb44b05->leave($__internal_cdcad64be4a69980c2d9198c058b6acb3d55b5427419f3e6d9a35d7d8fb44b05_prof);

        
        $__internal_c0275f03c534edf1ff9de29612865304c2b5a3a96e979d31d2df061f3ba5b33a->leave($__internal_c0275f03c534edf1ff9de29612865304c2b5a3a96e979d31d2df061f3ba5b33a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_189df774cd26b3dfcdb3d0ea89e4da365acf89bcab1cbaa07959f0e34ea975f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189df774cd26b3dfcdb3d0ea89e4da365acf89bcab1cbaa07959f0e34ea975f5->enter($__internal_189df774cd26b3dfcdb3d0ea89e4da365acf89bcab1cbaa07959f0e34ea975f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d379caf01a24d921104652fde8659f3a523e37726fae44f1b4d6a432015a248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d379caf01a24d921104652fde8659f3a523e37726fae44f1b4d6a432015a248->enter($__internal_3d379caf01a24d921104652fde8659f3a523e37726fae44f1b4d6a432015a248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3d379caf01a24d921104652fde8659f3a523e37726fae44f1b4d6a432015a248->leave($__internal_3d379caf01a24d921104652fde8659f3a523e37726fae44f1b4d6a432015a248_prof);

        
        $__internal_189df774cd26b3dfcdb3d0ea89e4da365acf89bcab1cbaa07959f0e34ea975f5->leave($__internal_189df774cd26b3dfcdb3d0ea89e4da365acf89bcab1cbaa07959f0e34ea975f5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b86db6117897bb5c5f836c5772082b73a9b683933219fd004ac8cbdbfed5ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b86db6117897bb5c5f836c5772082b73a9b683933219fd004ac8cbdbfed5ac6->enter($__internal_1b86db6117897bb5c5f836c5772082b73a9b683933219fd004ac8cbdbfed5ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa94b41486788e535a2fa1f51c9d35c4caa5f5c9b6dec4baa3071e4092920500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa94b41486788e535a2fa1f51c9d35c4caa5f5c9b6dec4baa3071e4092920500->enter($__internal_fa94b41486788e535a2fa1f51c9d35c4caa5f5c9b6dec4baa3071e4092920500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa94b41486788e535a2fa1f51c9d35c4caa5f5c9b6dec4baa3071e4092920500->leave($__internal_fa94b41486788e535a2fa1f51c9d35c4caa5f5c9b6dec4baa3071e4092920500_prof);

        
        $__internal_1b86db6117897bb5c5f836c5772082b73a9b683933219fd004ac8cbdbfed5ac6->leave($__internal_1b86db6117897bb5c5f836c5772082b73a9b683933219fd004ac8cbdbfed5ac6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
