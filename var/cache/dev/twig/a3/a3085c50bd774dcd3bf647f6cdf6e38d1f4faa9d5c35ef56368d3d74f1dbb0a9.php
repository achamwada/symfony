<?php

/* /animals/animal.html.twig */
class __TwigTemplate_5fb6f6ff1d7704fe27b20e20f636815ee077d6430728aff1e121c02d376d9caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/animals/animal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46f2be7c8df830e9248ddc68a87885a0989704983a6122c061133cd94596d858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f2be7c8df830e9248ddc68a87885a0989704983a6122c061133cd94596d858->enter($__internal_46f2be7c8df830e9248ddc68a87885a0989704983a6122c061133cd94596d858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/animals/animal.html.twig"));

        $__internal_caa3035088ba2c73c245e089b0fddc6aff835bac7df7be2606771a8d330be048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa3035088ba2c73c245e089b0fddc6aff835bac7df7be2606771a8d330be048->enter($__internal_caa3035088ba2c73c245e089b0fddc6aff835bac7df7be2606771a8d330be048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/animals/animal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f2be7c8df830e9248ddc68a87885a0989704983a6122c061133cd94596d858->leave($__internal_46f2be7c8df830e9248ddc68a87885a0989704983a6122c061133cd94596d858_prof);

        
        $__internal_caa3035088ba2c73c245e089b0fddc6aff835bac7df7be2606771a8d330be048->leave($__internal_caa3035088ba2c73c245e089b0fddc6aff835bac7df7be2606771a8d330be048_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c8826afae3779d30073c1bccdaa587d5b1d5d4308c5804c36d5f06322aacef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8826afae3779d30073c1bccdaa587d5b1d5d4308c5804c36d5f06322aacef5->enter($__internal_8c8826afae3779d30073c1bccdaa587d5b1d5d4308c5804c36d5f06322aacef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c7cc3f397547c10f61e4daed0d7bb7efdbab20a1f0084d0232266db12f8f3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7cc3f397547c10f61e4daed0d7bb7efdbab20a1f0084d0232266db12f8f3c4->enter($__internal_9c7cc3f397547c10f61e4daed0d7bb7efdbab20a1f0084d0232266db12f8f3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hi there ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " ";
        
        $__internal_9c7cc3f397547c10f61e4daed0d7bb7efdbab20a1f0084d0232266db12f8f3c4->leave($__internal_9c7cc3f397547c10f61e4daed0d7bb7efdbab20a1f0084d0232266db12f8f3c4_prof);

        
        $__internal_8c8826afae3779d30073c1bccdaa587d5b1d5d4308c5804c36d5f06322aacef5->leave($__internal_8c8826afae3779d30073c1bccdaa587d5b1d5d4308c5804c36d5f06322aacef5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6acb48f61c3e3bf0c437ebb2846d0174bc664b3157377f75922406e55f24d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6acb48f61c3e3bf0c437ebb2846d0174bc664b3157377f75922406e55f24d28->enter($__internal_e6acb48f61c3e3bf0c437ebb2846d0174bc664b3157377f75922406e55f24d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de337aba4017579fa18e3d1f204a189e6bde89638de323fe026d7d4d26abb44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de337aba4017579fa18e3d1f204a189e6bde89638de323fe026d7d4d26abb44d->enter($__internal_de337aba4017579fa18e3d1f204a189e6bde89638de323fe026d7d4d26abb44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Below are the notes</h1>
    <ul>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 7
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["note"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    </ul>


";
        
        $__internal_de337aba4017579fa18e3d1f204a189e6bde89638de323fe026d7d4d26abb44d->leave($__internal_de337aba4017579fa18e3d1f204a189e6bde89638de323fe026d7d4d26abb44d_prof);

        
        $__internal_e6acb48f61c3e3bf0c437ebb2846d0174bc664b3157377f75922406e55f24d28->leave($__internal_e6acb48f61c3e3bf0c437ebb2846d0174bc664b3157377f75922406e55f24d28_prof);

    }

    public function getTemplateName()
    {
        return "/animals/animal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 9,  78 => 7,  74 => 6,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Hi there {{ name }} {% endblock %}
{% block body %}
    <h1>Below are the notes</h1>
    <ul>
        {% for note in notes %}
            <li>{{ note }}</li>
        {% endfor %}

    </ul>


{% endblock %}", "/animals/animal.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/MyAPI_Project/app/Resources/views/animals/animal.html.twig");
    }
}
