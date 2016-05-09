<?php

/* ::base.html.twig */
class __TwigTemplate_d8179022d36fb1b80700f17d668dec50e7bcb212b6e17abea8639b7dd409cec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_170aa6f9a7f999cb06cd2cd8013ac1e5db69e147f99182aa02c7dab7923aa16b = $this->env->getExtension("native_profiler");
        $__internal_170aa6f9a7f999cb06cd2cd8013ac1e5db69e147f99182aa02c7dab7923aa16b->enter($__internal_170aa6f9a7f999cb06cd2cd8013ac1e5db69e147f99182aa02c7dab7923aa16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_170aa6f9a7f999cb06cd2cd8013ac1e5db69e147f99182aa02c7dab7923aa16b->leave($__internal_170aa6f9a7f999cb06cd2cd8013ac1e5db69e147f99182aa02c7dab7923aa16b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f07025cd4672c2963ff437648eab645dc204c9b752df3488adfdf7e3671492c4 = $this->env->getExtension("native_profiler");
        $__internal_f07025cd4672c2963ff437648eab645dc204c9b752df3488adfdf7e3671492c4->enter($__internal_f07025cd4672c2963ff437648eab645dc204c9b752df3488adfdf7e3671492c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f07025cd4672c2963ff437648eab645dc204c9b752df3488adfdf7e3671492c4->leave($__internal_f07025cd4672c2963ff437648eab645dc204c9b752df3488adfdf7e3671492c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_544add7e64611b626b701eb66e5202f58deb5babe24f64395124e08c6dc8d8da = $this->env->getExtension("native_profiler");
        $__internal_544add7e64611b626b701eb66e5202f58deb5babe24f64395124e08c6dc8d8da->enter($__internal_544add7e64611b626b701eb66e5202f58deb5babe24f64395124e08c6dc8d8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_544add7e64611b626b701eb66e5202f58deb5babe24f64395124e08c6dc8d8da->leave($__internal_544add7e64611b626b701eb66e5202f58deb5babe24f64395124e08c6dc8d8da_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f4687066869659582381518757ebd263ec294cb9b9204495adac1e34069222e = $this->env->getExtension("native_profiler");
        $__internal_1f4687066869659582381518757ebd263ec294cb9b9204495adac1e34069222e->enter($__internal_1f4687066869659582381518757ebd263ec294cb9b9204495adac1e34069222e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f4687066869659582381518757ebd263ec294cb9b9204495adac1e34069222e->leave($__internal_1f4687066869659582381518757ebd263ec294cb9b9204495adac1e34069222e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f721dc7474313cc6b10a8ffa5f56672659aa12ea3c01c6177e1a1bfc84d4e49 = $this->env->getExtension("native_profiler");
        $__internal_6f721dc7474313cc6b10a8ffa5f56672659aa12ea3c01c6177e1a1bfc84d4e49->enter($__internal_6f721dc7474313cc6b10a8ffa5f56672659aa12ea3c01c6177e1a1bfc84d4e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f721dc7474313cc6b10a8ffa5f56672659aa12ea3c01c6177e1a1bfc84d4e49->leave($__internal_6f721dc7474313cc6b10a8ffa5f56672659aa12ea3c01c6177e1a1bfc84d4e49_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
