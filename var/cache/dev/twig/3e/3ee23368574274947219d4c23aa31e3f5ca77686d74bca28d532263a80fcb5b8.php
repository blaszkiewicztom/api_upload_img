<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8487224623204e190cc47d38cf4f0141646eb3f4b85bf66d54515d4175ab15df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ff70e7cff5294aaae9f3c14c1619e05bbd75d9f93301ea1d8487947fa1e1c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff70e7cff5294aaae9f3c14c1619e05bbd75d9f93301ea1d8487947fa1e1c76->enter($__internal_3ff70e7cff5294aaae9f3c14c1619e05bbd75d9f93301ea1d8487947fa1e1c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_29c6c3f3b45edb82e446f2c3ef660b6e1759731a7c7e8b50b1c73b69e691fe3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c6c3f3b45edb82e446f2c3ef660b6e1759731a7c7e8b50b1c73b69e691fe3e->enter($__internal_29c6c3f3b45edb82e446f2c3ef660b6e1759731a7c7e8b50b1c73b69e691fe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ff70e7cff5294aaae9f3c14c1619e05bbd75d9f93301ea1d8487947fa1e1c76->leave($__internal_3ff70e7cff5294aaae9f3c14c1619e05bbd75d9f93301ea1d8487947fa1e1c76_prof);

        
        $__internal_29c6c3f3b45edb82e446f2c3ef660b6e1759731a7c7e8b50b1c73b69e691fe3e->leave($__internal_29c6c3f3b45edb82e446f2c3ef660b6e1759731a7c7e8b50b1c73b69e691fe3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ba1890ce6b4534ec7be43a15642835c2895de5c2f534ecd9fd8570ddbc3bc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba1890ce6b4534ec7be43a15642835c2895de5c2f534ecd9fd8570ddbc3bc0d->enter($__internal_6ba1890ce6b4534ec7be43a15642835c2895de5c2f534ecd9fd8570ddbc3bc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ac06a3be000bcad2c3c58d7066db3e4cd12bea7c64df4f81dac79e9087f09fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac06a3be000bcad2c3c58d7066db3e4cd12bea7c64df4f81dac79e9087f09fbd->enter($__internal_ac06a3be000bcad2c3c58d7066db3e4cd12bea7c64df4f81dac79e9087f09fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ac06a3be000bcad2c3c58d7066db3e4cd12bea7c64df4f81dac79e9087f09fbd->leave($__internal_ac06a3be000bcad2c3c58d7066db3e4cd12bea7c64df4f81dac79e9087f09fbd_prof);

        
        $__internal_6ba1890ce6b4534ec7be43a15642835c2895de5c2f534ecd9fd8570ddbc3bc0d->leave($__internal_6ba1890ce6b4534ec7be43a15642835c2895de5c2f534ecd9fd8570ddbc3bc0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/api_upload_img/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
