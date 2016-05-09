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
        $__internal_c3f98162cd73c3d8808693f6fc7e7f794f3ab1f99d03b77faa5b5f8c03bfd955 = $this->env->getExtension("native_profiler");
        $__internal_c3f98162cd73c3d8808693f6fc7e7f794f3ab1f99d03b77faa5b5f8c03bfd955->enter($__internal_c3f98162cd73c3d8808693f6fc7e7f794f3ab1f99d03b77faa5b5f8c03bfd955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f98162cd73c3d8808693f6fc7e7f794f3ab1f99d03b77faa5b5f8c03bfd955->leave($__internal_c3f98162cd73c3d8808693f6fc7e7f794f3ab1f99d03b77faa5b5f8c03bfd955_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_366c0910510b94bef352b5071029fdf4412d37822cb14a3c8012af25fb667490 = $this->env->getExtension("native_profiler");
        $__internal_366c0910510b94bef352b5071029fdf4412d37822cb14a3c8012af25fb667490->enter($__internal_366c0910510b94bef352b5071029fdf4412d37822cb14a3c8012af25fb667490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_366c0910510b94bef352b5071029fdf4412d37822cb14a3c8012af25fb667490->leave($__internal_366c0910510b94bef352b5071029fdf4412d37822cb14a3c8012af25fb667490_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4df774fd005d7680d08032ef21e4696e13811ec7c26a115699a3953f78bdbcc = $this->env->getExtension("native_profiler");
        $__internal_c4df774fd005d7680d08032ef21e4696e13811ec7c26a115699a3953f78bdbcc->enter($__internal_c4df774fd005d7680d08032ef21e4696e13811ec7c26a115699a3953f78bdbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4df774fd005d7680d08032ef21e4696e13811ec7c26a115699a3953f78bdbcc->leave($__internal_c4df774fd005d7680d08032ef21e4696e13811ec7c26a115699a3953f78bdbcc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d29d88ba5dd2b4bfbfff57955d967befee2bd83ee26d434cbc345039ada0aac = $this->env->getExtension("native_profiler");
        $__internal_4d29d88ba5dd2b4bfbfff57955d967befee2bd83ee26d434cbc345039ada0aac->enter($__internal_4d29d88ba5dd2b4bfbfff57955d967befee2bd83ee26d434cbc345039ada0aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4d29d88ba5dd2b4bfbfff57955d967befee2bd83ee26d434cbc345039ada0aac->leave($__internal_4d29d88ba5dd2b4bfbfff57955d967befee2bd83ee26d434cbc345039ada0aac_prof);

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
