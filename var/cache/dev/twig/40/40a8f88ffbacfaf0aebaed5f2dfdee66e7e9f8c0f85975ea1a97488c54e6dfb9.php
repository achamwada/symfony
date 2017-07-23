<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_88199494ffc299b9ca013f224905931a4a1d5ce1270d16657ad9eadedc25bf78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88199494ffc299b9ca013f224905931a4a1d5ce1270d16657ad9eadedc25bf78->enter($__internal_88199494ffc299b9ca013f224905931a4a1d5ce1270d16657ad9eadedc25bf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dea2edbb41e1c76742db5d9672d04f7b5ab486401c851185c22d579cfd342752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea2edbb41e1c76742db5d9672d04f7b5ab486401c851185c22d579cfd342752->enter($__internal_dea2edbb41e1c76742db5d9672d04f7b5ab486401c851185c22d579cfd342752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88199494ffc299b9ca013f224905931a4a1d5ce1270d16657ad9eadedc25bf78->leave($__internal_88199494ffc299b9ca013f224905931a4a1d5ce1270d16657ad9eadedc25bf78_prof);

        
        $__internal_dea2edbb41e1c76742db5d9672d04f7b5ab486401c851185c22d579cfd342752->leave($__internal_dea2edbb41e1c76742db5d9672d04f7b5ab486401c851185c22d579cfd342752_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87f576500863a3b6291fc1021d8592b8cf1c49e9940bac464a614d718423d83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f576500863a3b6291fc1021d8592b8cf1c49e9940bac464a614d718423d83b->enter($__internal_87f576500863a3b6291fc1021d8592b8cf1c49e9940bac464a614d718423d83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd4f4100835726b8e042106a691b28ae418cddbe1f664aebe14dc54b9052f05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4f4100835726b8e042106a691b28ae418cddbe1f664aebe14dc54b9052f05a->enter($__internal_bd4f4100835726b8e042106a691b28ae418cddbe1f664aebe14dc54b9052f05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bd4f4100835726b8e042106a691b28ae418cddbe1f664aebe14dc54b9052f05a->leave($__internal_bd4f4100835726b8e042106a691b28ae418cddbe1f664aebe14dc54b9052f05a_prof);

        
        $__internal_87f576500863a3b6291fc1021d8592b8cf1c49e9940bac464a614d718423d83b->leave($__internal_87f576500863a3b6291fc1021d8592b8cf1c49e9940bac464a614d718423d83b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eac88b7579cd5c802930023f0525a11d0ca4635d7bc897e772866d3f5a1ab4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac88b7579cd5c802930023f0525a11d0ca4635d7bc897e772866d3f5a1ab4e9->enter($__internal_eac88b7579cd5c802930023f0525a11d0ca4635d7bc897e772866d3f5a1ab4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8d1c8d82eb9f7ebb5846df225084ea6483eda37d9bb805e03fa4247a4513088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d1c8d82eb9f7ebb5846df225084ea6483eda37d9bb805e03fa4247a4513088->enter($__internal_f8d1c8d82eb9f7ebb5846df225084ea6483eda37d9bb805e03fa4247a4513088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f8d1c8d82eb9f7ebb5846df225084ea6483eda37d9bb805e03fa4247a4513088->leave($__internal_f8d1c8d82eb9f7ebb5846df225084ea6483eda37d9bb805e03fa4247a4513088_prof);

        
        $__internal_eac88b7579cd5c802930023f0525a11d0ca4635d7bc897e772866d3f5a1ab4e9->leave($__internal_eac88b7579cd5c802930023f0525a11d0ca4635d7bc897e772866d3f5a1ab4e9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01fb3b07529ffff274af82261e31bccfcc07ee5c11146699b13bb9bf7f97fc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fb3b07529ffff274af82261e31bccfcc07ee5c11146699b13bb9bf7f97fc3d->enter($__internal_01fb3b07529ffff274af82261e31bccfcc07ee5c11146699b13bb9bf7f97fc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2df1b870c61b62cfce0c3a486593954ce1995ca85708632bed33c6674c9a35b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df1b870c61b62cfce0c3a486593954ce1995ca85708632bed33c6674c9a35b1->enter($__internal_2df1b870c61b62cfce0c3a486593954ce1995ca85708632bed33c6674c9a35b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2df1b870c61b62cfce0c3a486593954ce1995ca85708632bed33c6674c9a35b1->leave($__internal_2df1b870c61b62cfce0c3a486593954ce1995ca85708632bed33c6674c9a35b1_prof);

        
        $__internal_01fb3b07529ffff274af82261e31bccfcc07ee5c11146699b13bb9bf7f97fc3d->leave($__internal_01fb3b07529ffff274af82261e31bccfcc07ee5c11146699b13bb9bf7f97fc3d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
