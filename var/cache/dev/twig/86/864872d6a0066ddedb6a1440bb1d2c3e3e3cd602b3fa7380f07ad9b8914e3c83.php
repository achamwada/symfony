<?php

/* /curlstuff/thexml.html.twig */
class __TwigTemplate_a81aef67e13e33eee21bacc77e90a56e13460dce65cf9335f973c1e0e324ecee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/curlstuff/thexml.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b720da37744e2a245910f1da4cc212ed7da3145192b5396033319fcb1a38e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b720da37744e2a245910f1da4cc212ed7da3145192b5396033319fcb1a38e33->enter($__internal_5b720da37744e2a245910f1da4cc212ed7da3145192b5396033319fcb1a38e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/curlstuff/thexml.html.twig"));

        $__internal_bf337b1b18b694ce1d1345e39a14a54c8210d963188ad548927e3828b3da4953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf337b1b18b694ce1d1345e39a14a54c8210d963188ad548927e3828b3da4953->enter($__internal_bf337b1b18b694ce1d1345e39a14a54c8210d963188ad548927e3828b3da4953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/curlstuff/thexml.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b720da37744e2a245910f1da4cc212ed7da3145192b5396033319fcb1a38e33->leave($__internal_5b720da37744e2a245910f1da4cc212ed7da3145192b5396033319fcb1a38e33_prof);

        
        $__internal_bf337b1b18b694ce1d1345e39a14a54c8210d963188ad548927e3828b3da4953->leave($__internal_bf337b1b18b694ce1d1345e39a14a54c8210d963188ad548927e3828b3da4953_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_310254eaab4bb9479110e13562f8ba2f0ad380de7722794214a7c4f3b3e08c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310254eaab4bb9479110e13562f8ba2f0ad380de7722794214a7c4f3b3e08c67->enter($__internal_310254eaab4bb9479110e13562f8ba2f0ad380de7722794214a7c4f3b3e08c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3baea6b3303afca31ed7b744f28864bca5cd2b7ed11fcec01e7691b28dd4c9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baea6b3303afca31ed7b744f28864bca5cd2b7ed11fcec01e7691b28dd4c9c1->enter($__internal_3baea6b3303afca31ed7b744f28864bca5cd2b7ed11fcec01e7691b28dd4c9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Welcome here</h1>
    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myxml"] ?? $this->getContext($context, "myxml")));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 6
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "loc", array()), "html", null, true);
            echo " + ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], "lastmod", array()), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>

";
        
        $__internal_3baea6b3303afca31ed7b744f28864bca5cd2b7ed11fcec01e7691b28dd4c9c1->leave($__internal_3baea6b3303afca31ed7b744f28864bca5cd2b7ed11fcec01e7691b28dd4c9c1_prof);

        
        $__internal_310254eaab4bb9479110e13562f8ba2f0ad380de7722794214a7c4f3b3e08c67->leave($__internal_310254eaab4bb9479110e13562f8ba2f0ad380de7722794214a7c4f3b3e08c67_prof);

    }

    public function getTemplateName()
    {
        return "/curlstuff/thexml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
<h1>Welcome here</h1>
    <ul>
        {% for ar in myxml %}
            <li>{{ ar.loc }} + {{ ar.lastmod }}</li>
            {% endfor %}
    </ul>

{% endblock %}", "/curlstuff/thexml.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/app/Resources/views/curlstuff/thexml.html.twig");
    }
}
