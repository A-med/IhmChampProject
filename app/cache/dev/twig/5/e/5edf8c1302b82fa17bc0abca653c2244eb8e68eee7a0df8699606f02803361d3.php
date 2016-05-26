<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5edf8c1302b82fa17bc0abca653c2244eb8e68eee7a0df8699606f02803361d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17bab98374a57729f6a5040cd58d04df26d82cdc40cee0a7c8a2b9b8daa64d16 = $this->env->getExtension("native_profiler");
        $__internal_17bab98374a57729f6a5040cd58d04df26d82cdc40cee0a7c8a2b9b8daa64d16->enter($__internal_17bab98374a57729f6a5040cd58d04df26d82cdc40cee0a7c8a2b9b8daa64d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17bab98374a57729f6a5040cd58d04df26d82cdc40cee0a7c8a2b9b8daa64d16->leave($__internal_17bab98374a57729f6a5040cd58d04df26d82cdc40cee0a7c8a2b9b8daa64d16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed5b8e4cf53dc62111ad5c6f7a9fcfc8f65463201b38af1c275f24d60c7d6326 = $this->env->getExtension("native_profiler");
        $__internal_ed5b8e4cf53dc62111ad5c6f7a9fcfc8f65463201b38af1c275f24d60c7d6326->enter($__internal_ed5b8e4cf53dc62111ad5c6f7a9fcfc8f65463201b38af1c275f24d60c7d6326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed5b8e4cf53dc62111ad5c6f7a9fcfc8f65463201b38af1c275f24d60c7d6326->leave($__internal_ed5b8e4cf53dc62111ad5c6f7a9fcfc8f65463201b38af1c275f24d60c7d6326_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c82bcdf6604a339dd719639d7fd243275ba7e315142ce0b756effdc849c1805 = $this->env->getExtension("native_profiler");
        $__internal_5c82bcdf6604a339dd719639d7fd243275ba7e315142ce0b756effdc849c1805->enter($__internal_5c82bcdf6604a339dd719639d7fd243275ba7e315142ce0b756effdc849c1805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c82bcdf6604a339dd719639d7fd243275ba7e315142ce0b756effdc849c1805->leave($__internal_5c82bcdf6604a339dd719639d7fd243275ba7e315142ce0b756effdc849c1805_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67ca5d8d632a4119ac2d0268de5614730d343eb7878018281cc8a7fe92283913 = $this->env->getExtension("native_profiler");
        $__internal_67ca5d8d632a4119ac2d0268de5614730d343eb7878018281cc8a7fe92283913->enter($__internal_67ca5d8d632a4119ac2d0268de5614730d343eb7878018281cc8a7fe92283913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_67ca5d8d632a4119ac2d0268de5614730d343eb7878018281cc8a7fe92283913->leave($__internal_67ca5d8d632a4119ac2d0268de5614730d343eb7878018281cc8a7fe92283913_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
