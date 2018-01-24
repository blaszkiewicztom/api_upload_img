<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f1adfaa9d19f17cfef68bc7e476b05a1ab00b0ead29c54fd5fdb6d3cbcbefbe5 extends Twig_Template
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
        $__internal_41956d59e622b6d16de70abc206de429782dd431aeec95d2f704395c2f9d8b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41956d59e622b6d16de70abc206de429782dd431aeec95d2f704395c2f9d8b6a->enter($__internal_41956d59e622b6d16de70abc206de429782dd431aeec95d2f704395c2f9d8b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d5b61f77a42795b4cf839be76316bbd9e8f58a03516180dc0be0a7eb630b0d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b61f77a42795b4cf839be76316bbd9e8f58a03516180dc0be0a7eb630b0d01->enter($__internal_d5b61f77a42795b4cf839be76316bbd9e8f58a03516180dc0be0a7eb630b0d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41956d59e622b6d16de70abc206de429782dd431aeec95d2f704395c2f9d8b6a->leave($__internal_41956d59e622b6d16de70abc206de429782dd431aeec95d2f704395c2f9d8b6a_prof);

        
        $__internal_d5b61f77a42795b4cf839be76316bbd9e8f58a03516180dc0be0a7eb630b0d01->leave($__internal_d5b61f77a42795b4cf839be76316bbd9e8f58a03516180dc0be0a7eb630b0d01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f0fff35b1bba2ddcd2e8fa114f20ec20c1eae5d161c40bbed178855db256194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0fff35b1bba2ddcd2e8fa114f20ec20c1eae5d161c40bbed178855db256194->enter($__internal_8f0fff35b1bba2ddcd2e8fa114f20ec20c1eae5d161c40bbed178855db256194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9bbff26563118dd0fe8d01782d400397711a875e1143e91ee5764fb748a8f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bbff26563118dd0fe8d01782d400397711a875e1143e91ee5764fb748a8f56->enter($__internal_e9bbff26563118dd0fe8d01782d400397711a875e1143e91ee5764fb748a8f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e9bbff26563118dd0fe8d01782d400397711a875e1143e91ee5764fb748a8f56->leave($__internal_e9bbff26563118dd0fe8d01782d400397711a875e1143e91ee5764fb748a8f56_prof);

        
        $__internal_8f0fff35b1bba2ddcd2e8fa114f20ec20c1eae5d161c40bbed178855db256194->leave($__internal_8f0fff35b1bba2ddcd2e8fa114f20ec20c1eae5d161c40bbed178855db256194_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1f779704f147e6dfca04b16a5fee61bd25c803c4a0fdb22f8efb9201a74410f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f779704f147e6dfca04b16a5fee61bd25c803c4a0fdb22f8efb9201a74410f->enter($__internal_b1f779704f147e6dfca04b16a5fee61bd25c803c4a0fdb22f8efb9201a74410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf8c4cbbca6e207c95d18f5fc3700ee9c56a85bf4c40a74d0ff85ed8bb8fc51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8c4cbbca6e207c95d18f5fc3700ee9c56a85bf4c40a74d0ff85ed8bb8fc51b->enter($__internal_bf8c4cbbca6e207c95d18f5fc3700ee9c56a85bf4c40a74d0ff85ed8bb8fc51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bf8c4cbbca6e207c95d18f5fc3700ee9c56a85bf4c40a74d0ff85ed8bb8fc51b->leave($__internal_bf8c4cbbca6e207c95d18f5fc3700ee9c56a85bf4c40a74d0ff85ed8bb8fc51b_prof);

        
        $__internal_b1f779704f147e6dfca04b16a5fee61bd25c803c4a0fdb22f8efb9201a74410f->leave($__internal_b1f779704f147e6dfca04b16a5fee61bd25c803c4a0fdb22f8efb9201a74410f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08e0c844e86be511e5930366351bf6c0ea98837eb767f940de82243b9a10b849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e0c844e86be511e5930366351bf6c0ea98837eb767f940de82243b9a10b849->enter($__internal_08e0c844e86be511e5930366351bf6c0ea98837eb767f940de82243b9a10b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0ccd4aa8be9fc2edc7ab43125528a9eac4db54a856bde364b3c389280b65c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ccd4aa8be9fc2edc7ab43125528a9eac4db54a856bde364b3c389280b65c9e->enter($__internal_b0ccd4aa8be9fc2edc7ab43125528a9eac4db54a856bde364b3c389280b65c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b0ccd4aa8be9fc2edc7ab43125528a9eac4db54a856bde364b3c389280b65c9e->leave($__internal_b0ccd4aa8be9fc2edc7ab43125528a9eac4db54a856bde364b3c389280b65c9e_prof);

        
        $__internal_08e0c844e86be511e5930366351bf6c0ea98837eb767f940de82243b9a10b849->leave($__internal_08e0c844e86be511e5930366351bf6c0ea98837eb767f940de82243b9a10b849_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/api_upload_img/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
