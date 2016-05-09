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
        $__internal_f3995f8b4e05eb8a2cb75cd2bf08b2dc36ad381e5213b63346aba6b5aa5e97ee = $this->env->getExtension("native_profiler");
        $__internal_f3995f8b4e05eb8a2cb75cd2bf08b2dc36ad381e5213b63346aba6b5aa5e97ee->enter($__internal_f3995f8b4e05eb8a2cb75cd2bf08b2dc36ad381e5213b63346aba6b5aa5e97ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3995f8b4e05eb8a2cb75cd2bf08b2dc36ad381e5213b63346aba6b5aa5e97ee->leave($__internal_f3995f8b4e05eb8a2cb75cd2bf08b2dc36ad381e5213b63346aba6b5aa5e97ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e57ad6c9f5fab94d174af4603ef6f2eaf9efb2536781883466b00053aba6480 = $this->env->getExtension("native_profiler");
        $__internal_4e57ad6c9f5fab94d174af4603ef6f2eaf9efb2536781883466b00053aba6480->enter($__internal_4e57ad6c9f5fab94d174af4603ef6f2eaf9efb2536781883466b00053aba6480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e57ad6c9f5fab94d174af4603ef6f2eaf9efb2536781883466b00053aba6480->leave($__internal_4e57ad6c9f5fab94d174af4603ef6f2eaf9efb2536781883466b00053aba6480_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1a7e50733b079db66d8676abb99e5af1bf2855ab0ba0f217f6768b046c52fb7 = $this->env->getExtension("native_profiler");
        $__internal_d1a7e50733b079db66d8676abb99e5af1bf2855ab0ba0f217f6768b046c52fb7->enter($__internal_d1a7e50733b079db66d8676abb99e5af1bf2855ab0ba0f217f6768b046c52fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1a7e50733b079db66d8676abb99e5af1bf2855ab0ba0f217f6768b046c52fb7->leave($__internal_d1a7e50733b079db66d8676abb99e5af1bf2855ab0ba0f217f6768b046c52fb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b511b381545740a373a228fc088836cf29ee0caf2d6a50eadebc0de28dcbebd = $this->env->getExtension("native_profiler");
        $__internal_4b511b381545740a373a228fc088836cf29ee0caf2d6a50eadebc0de28dcbebd->enter($__internal_4b511b381545740a373a228fc088836cf29ee0caf2d6a50eadebc0de28dcbebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4b511b381545740a373a228fc088836cf29ee0caf2d6a50eadebc0de28dcbebd->leave($__internal_4b511b381545740a373a228fc088836cf29ee0caf2d6a50eadebc0de28dcbebd_prof);

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
