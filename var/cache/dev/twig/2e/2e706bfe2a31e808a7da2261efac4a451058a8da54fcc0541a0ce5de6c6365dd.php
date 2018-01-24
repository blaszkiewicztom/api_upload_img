<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bbf9ed76176bc9ee2e1bb07f6165ea855787c7a4b4d330c4409cbe70529e02cb extends Twig_Template
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
        $__internal_6218791a81b053d39d63ba3364899aec27b48bea367408830d3654e28c9da52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6218791a81b053d39d63ba3364899aec27b48bea367408830d3654e28c9da52c->enter($__internal_6218791a81b053d39d63ba3364899aec27b48bea367408830d3654e28c9da52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5b1f92ac356d460e3f2930d7a302178d0044904033057cbd7063fb74d0ed63da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1f92ac356d460e3f2930d7a302178d0044904033057cbd7063fb74d0ed63da->enter($__internal_5b1f92ac356d460e3f2930d7a302178d0044904033057cbd7063fb74d0ed63da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6218791a81b053d39d63ba3364899aec27b48bea367408830d3654e28c9da52c->leave($__internal_6218791a81b053d39d63ba3364899aec27b48bea367408830d3654e28c9da52c_prof);

        
        $__internal_5b1f92ac356d460e3f2930d7a302178d0044904033057cbd7063fb74d0ed63da->leave($__internal_5b1f92ac356d460e3f2930d7a302178d0044904033057cbd7063fb74d0ed63da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_890b2edfc89ac1c1280140b62204cdddaaf0aa8b327c15ccb0fe0ba4d1a70a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890b2edfc89ac1c1280140b62204cdddaaf0aa8b327c15ccb0fe0ba4d1a70a0e->enter($__internal_890b2edfc89ac1c1280140b62204cdddaaf0aa8b327c15ccb0fe0ba4d1a70a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_98057fe317b15da1346c1a0e0ea73538e87ef9ae4465359e71dd6190f4bfb38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98057fe317b15da1346c1a0e0ea73538e87ef9ae4465359e71dd6190f4bfb38e->enter($__internal_98057fe317b15da1346c1a0e0ea73538e87ef9ae4465359e71dd6190f4bfb38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98057fe317b15da1346c1a0e0ea73538e87ef9ae4465359e71dd6190f4bfb38e->leave($__internal_98057fe317b15da1346c1a0e0ea73538e87ef9ae4465359e71dd6190f4bfb38e_prof);

        
        $__internal_890b2edfc89ac1c1280140b62204cdddaaf0aa8b327c15ccb0fe0ba4d1a70a0e->leave($__internal_890b2edfc89ac1c1280140b62204cdddaaf0aa8b327c15ccb0fe0ba4d1a70a0e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32df996c88c445e3dafa1605de71bda0b081b06c73021e8777a9b14bcd38d009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32df996c88c445e3dafa1605de71bda0b081b06c73021e8777a9b14bcd38d009->enter($__internal_32df996c88c445e3dafa1605de71bda0b081b06c73021e8777a9b14bcd38d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e4244ce39120817a582cf483ba376ee9cf9b4fd86dc8b302b815c1f523dda7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4244ce39120817a582cf483ba376ee9cf9b4fd86dc8b302b815c1f523dda7e->enter($__internal_8e4244ce39120817a582cf483ba376ee9cf9b4fd86dc8b302b815c1f523dda7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e4244ce39120817a582cf483ba376ee9cf9b4fd86dc8b302b815c1f523dda7e->leave($__internal_8e4244ce39120817a582cf483ba376ee9cf9b4fd86dc8b302b815c1f523dda7e_prof);

        
        $__internal_32df996c88c445e3dafa1605de71bda0b081b06c73021e8777a9b14bcd38d009->leave($__internal_32df996c88c445e3dafa1605de71bda0b081b06c73021e8777a9b14bcd38d009_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0200d5f93635dc8fb1e285e46586298d02ba885169be7b6335a2e7cd86339cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0200d5f93635dc8fb1e285e46586298d02ba885169be7b6335a2e7cd86339cef->enter($__internal_0200d5f93635dc8fb1e285e46586298d02ba885169be7b6335a2e7cd86339cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38a2ebebc2451e3bdeaeeb5ac3f862fd918b5c2f88a2578698287e052d15875d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a2ebebc2451e3bdeaeeb5ac3f862fd918b5c2f88a2578698287e052d15875d->enter($__internal_38a2ebebc2451e3bdeaeeb5ac3f862fd918b5c2f88a2578698287e052d15875d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_38a2ebebc2451e3bdeaeeb5ac3f862fd918b5c2f88a2578698287e052d15875d->leave($__internal_38a2ebebc2451e3bdeaeeb5ac3f862fd918b5c2f88a2578698287e052d15875d_prof);

        
        $__internal_0200d5f93635dc8fb1e285e46586298d02ba885169be7b6335a2e7cd86339cef->leave($__internal_0200d5f93635dc8fb1e285e46586298d02ba885169be7b6335a2e7cd86339cef_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/api_upload_img/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
