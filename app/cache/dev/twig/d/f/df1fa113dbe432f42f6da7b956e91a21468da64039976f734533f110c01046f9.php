<?php

/* ::base2.html.twig */
class __TwigTemplate_df1fa113dbe432f42f6da7b956e91a21468da64039976f734533f110c01046f9 extends Twig_Template
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
            'otherscripy' => array($this, 'block_otherscripy'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48108e1dc4bd5aadeb0212d1e48eae3e36610177a82f7fa6c1a03be26f278fb4 = $this->env->getExtension("native_profiler");
        $__internal_48108e1dc4bd5aadeb0212d1e48eae3e36610177a82f7fa6c1a03be26f278fb4->enter($__internal_48108e1dc4bd5aadeb0212d1e48eae3e36610177a82f7fa6c1a03be26f278fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <body onLoad=\"Defaults();\">
    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "</body>

";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "</body>
</html>
";
        
        $__internal_48108e1dc4bd5aadeb0212d1e48eae3e36610177a82f7fa6c1a03be26f278fb4->leave($__internal_48108e1dc4bd5aadeb0212d1e48eae3e36610177a82f7fa6c1a03be26f278fb4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_211477594de319329d19aeb1945a7017ef7b1f0b406190f86240a2d27c523632 = $this->env->getExtension("native_profiler");
        $__internal_211477594de319329d19aeb1945a7017ef7b1f0b406190f86240a2d27c523632->enter($__internal_211477594de319329d19aeb1945a7017ef7b1f0b406190f86240a2d27c523632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_211477594de319329d19aeb1945a7017ef7b1f0b406190f86240a2d27c523632->leave($__internal_211477594de319329d19aeb1945a7017ef7b1f0b406190f86240a2d27c523632_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b72c0231cd0d02e3883917816b907dd3e2a1af7e7e746d736385ad2c31b432fd = $this->env->getExtension("native_profiler");
        $__internal_b72c0231cd0d02e3883917816b907dd3e2a1af7e7e746d736385ad2c31b432fd->enter($__internal_b72c0231cd0d02e3883917816b907dd3e2a1af7e7e746d736385ad2c31b432fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        <link rel='stylesheet'  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/style.css"), "html", null, true);
        echo "\" type='text/css'  />

       
    ";
        
        $__internal_b72c0231cd0d02e3883917816b907dd3e2a1af7e7e746d736385ad2c31b432fd->leave($__internal_b72c0231cd0d02e3883917816b907dd3e2a1af7e7e746d736385ad2c31b432fd_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8db5a1b8f036f8ea2e6d9215c3eccc699ec92f5a008e91c9e2731a4d6244b8bf = $this->env->getExtension("native_profiler");
        $__internal_8db5a1b8f036f8ea2e6d9215c3eccc699ec92f5a008e91c9e2731a4d6244b8bf->enter($__internal_8db5a1b8f036f8ea2e6d9215c3eccc699ec92f5a008e91c9e2731a4d6244b8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8db5a1b8f036f8ea2e6d9215c3eccc699ec92f5a008e91c9e2731a4d6244b8bf->leave($__internal_8db5a1b8f036f8ea2e6d9215c3eccc699ec92f5a008e91c9e2731a4d6244b8bf_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1178c6a69404ffcfb1f683db7c603c363a3e16e103f590959871c935ee69b24e = $this->env->getExtension("native_profiler");
        $__internal_1178c6a69404ffcfb1f683db7c603c363a3e16e103f590959871c935ee69b24e->enter($__internal_1178c6a69404ffcfb1f683db7c603c363a3e16e103f590959871c935ee69b24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        $this->displayBlock('otherscripy', $context, $blocks);
        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/calendrier.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery-1.7.2.js"), "html", null, true);
        echo "\"></script>
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\">
    function goToUrl(id) {
        //  alert(id);
                         
            var path=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("players_team", array("id" => "PLACEHOLDER"));
        echo "\";
     \t 
          
    
           var url =  path.replace(\"PLACEHOLDER\", id);
           
 
    \$.ajax({url: url, success: function(result){
        \$(\"#players\").replaceWith(result);
    }});
 
    }
     
       
    </script>


 ";
        
        $__internal_1178c6a69404ffcfb1f683db7c603c363a3e16e103f590959871c935ee69b24e->leave($__internal_1178c6a69404ffcfb1f683db7c603c363a3e16e103f590959871c935ee69b24e_prof);

    }

    // line 21
    public function block_otherscripy($context, array $blocks = array())
    {
        $__internal_5a3ecb08a001588725ca976e10c1de0dea877b99f7f6ee84fbe1c6d5fffe7449 = $this->env->getExtension("native_profiler");
        $__internal_5a3ecb08a001588725ca976e10c1de0dea877b99f7f6ee84fbe1c6d5fffe7449->enter($__internal_5a3ecb08a001588725ca976e10c1de0dea877b99f7f6ee84fbe1c6d5fffe7449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherscripy"));

        
        $__internal_5a3ecb08a001588725ca976e10c1de0dea877b99f7f6ee84fbe1c6d5fffe7449->leave($__internal_5a3ecb08a001588725ca976e10c1de0dea877b99f7f6ee84fbe1c6d5fffe7449_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 21,  129 => 28,  121 => 23,  116 => 22,  114 => 21,  108 => 20,  97 => 17,  86 => 10,  83 => 9,  77 => 8,  65 => 5,  56 => 46,  54 => 20,  50 => 18,  48 => 17,  41 => 14,  39 => 8,  33 => 5,  27 => 1,);
    }
}
