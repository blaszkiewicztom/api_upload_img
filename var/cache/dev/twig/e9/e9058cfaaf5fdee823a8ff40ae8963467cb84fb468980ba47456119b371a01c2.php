<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0d1f52c0d54b8c49567ab29bec60318ee88c74abc7501b84c6d91c50647781e6 extends Twig_Template
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
        $__internal_cf53469aa897b4522040fcb0aa5f3f5d769e933515921305014eee3e039e259f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf53469aa897b4522040fcb0aa5f3f5d769e933515921305014eee3e039e259f->enter($__internal_cf53469aa897b4522040fcb0aa5f3f5d769e933515921305014eee3e039e259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0eed7b9fda93c0aeafcbdfe4241094ec95847bdf33af9ebaf91ee67a02802f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eed7b9fda93c0aeafcbdfe4241094ec95847bdf33af9ebaf91ee67a02802f3f->enter($__internal_0eed7b9fda93c0aeafcbdfe4241094ec95847bdf33af9ebaf91ee67a02802f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cf53469aa897b4522040fcb0aa5f3f5d769e933515921305014eee3e039e259f->leave($__internal_cf53469aa897b4522040fcb0aa5f3f5d769e933515921305014eee3e039e259f_prof);

        
        $__internal_0eed7b9fda93c0aeafcbdfe4241094ec95847bdf33af9ebaf91ee67a02802f3f->leave($__internal_0eed7b9fda93c0aeafcbdfe4241094ec95847bdf33af9ebaf91ee67a02802f3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a0ee8fbeb6565e26627597a9711aabab65c560e1c27a09f8abe9ed75dc563ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0ee8fbeb6565e26627597a9711aabab65c560e1c27a09f8abe9ed75dc563ff->enter($__internal_8a0ee8fbeb6565e26627597a9711aabab65c560e1c27a09f8abe9ed75dc563ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e2651a9f06ce86cd4d14e1faab2d827b54fcc56b02443927510769c060a8ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2651a9f06ce86cd4d14e1faab2d827b54fcc56b02443927510769c060a8ed2->enter($__internal_6e2651a9f06ce86cd4d14e1faab2d827b54fcc56b02443927510769c060a8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6e2651a9f06ce86cd4d14e1faab2d827b54fcc56b02443927510769c060a8ed2->leave($__internal_6e2651a9f06ce86cd4d14e1faab2d827b54fcc56b02443927510769c060a8ed2_prof);

        
        $__internal_8a0ee8fbeb6565e26627597a9711aabab65c560e1c27a09f8abe9ed75dc563ff->leave($__internal_8a0ee8fbeb6565e26627597a9711aabab65c560e1c27a09f8abe9ed75dc563ff_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a2d064942365d971785d7c174c077fe348b10fcd96b27fa8ce418f580034f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2d064942365d971785d7c174c077fe348b10fcd96b27fa8ce418f580034f68->enter($__internal_0a2d064942365d971785d7c174c077fe348b10fcd96b27fa8ce418f580034f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea93366ec603bed2143117bf9e2c2b7d041aff5b20374bed9d8e32a81a3d08a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea93366ec603bed2143117bf9e2c2b7d041aff5b20374bed9d8e32a81a3d08a4->enter($__internal_ea93366ec603bed2143117bf9e2c2b7d041aff5b20374bed9d8e32a81a3d08a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ea93366ec603bed2143117bf9e2c2b7d041aff5b20374bed9d8e32a81a3d08a4->leave($__internal_ea93366ec603bed2143117bf9e2c2b7d041aff5b20374bed9d8e32a81a3d08a4_prof);

        
        $__internal_0a2d064942365d971785d7c174c077fe348b10fcd96b27fa8ce418f580034f68->leave($__internal_0a2d064942365d971785d7c174c077fe348b10fcd96b27fa8ce418f580034f68_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2835acf576a0a6f45a20c9837a478972773b85577eb91122bd9f8e0f896503b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2835acf576a0a6f45a20c9837a478972773b85577eb91122bd9f8e0f896503b1->enter($__internal_2835acf576a0a6f45a20c9837a478972773b85577eb91122bd9f8e0f896503b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edb736dc9abce8a36d1ea5440cb8525541327199522227e3b2371ff214f8dc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb736dc9abce8a36d1ea5440cb8525541327199522227e3b2371ff214f8dc73->enter($__internal_edb736dc9abce8a36d1ea5440cb8525541327199522227e3b2371ff214f8dc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_edb736dc9abce8a36d1ea5440cb8525541327199522227e3b2371ff214f8dc73->leave($__internal_edb736dc9abce8a36d1ea5440cb8525541327199522227e3b2371ff214f8dc73_prof);

        
        $__internal_2835acf576a0a6f45a20c9837a478972773b85577eb91122bd9f8e0f896503b1->leave($__internal_2835acf576a0a6f45a20c9837a478972773b85577eb91122bd9f8e0f896503b1_prof);

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
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/api_upload_img/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
