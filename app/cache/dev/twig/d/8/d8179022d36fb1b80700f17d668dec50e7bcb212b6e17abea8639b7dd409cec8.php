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
        $__internal_c18096bcbb1816edcc5826b0a9420f5e8225dd4435a5237444762eb1240da70a = $this->env->getExtension("native_profiler");
        $__internal_c18096bcbb1816edcc5826b0a9420f5e8225dd4435a5237444762eb1240da70a->enter($__internal_c18096bcbb1816edcc5826b0a9420f5e8225dd4435a5237444762eb1240da70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
   
 <body onLoad=\"Defaults()\">
 ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        echo "</body>
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_c18096bcbb1816edcc5826b0a9420f5e8225dd4435a5237444762eb1240da70a->leave($__internal_c18096bcbb1816edcc5826b0a9420f5e8225dd4435a5237444762eb1240da70a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b7b84405c165183ac4ab4f0da23931d2f0fc1eee3876d4895c8f95a62b421d9 = $this->env->getExtension("native_profiler");
        $__internal_0b7b84405c165183ac4ab4f0da23931d2f0fc1eee3876d4895c8f95a62b421d9->enter($__internal_0b7b84405c165183ac4ab4f0da23931d2f0fc1eee3876d4895c8f95a62b421d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0b7b84405c165183ac4ab4f0da23931d2f0fc1eee3876d4895c8f95a62b421d9->leave($__internal_0b7b84405c165183ac4ab4f0da23931d2f0fc1eee3876d4895c8f95a62b421d9_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69896217d23c4c2182db963b640864b30634f2395fcafb8c15e81587c2589366 = $this->env->getExtension("native_profiler");
        $__internal_69896217d23c4c2182db963b640864b30634f2395fcafb8c15e81587c2589366->enter($__internal_69896217d23c4c2182db963b640864b30634f2395fcafb8c15e81587c2589366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "     
<link rel='stylesheet'  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/style.css"), "html", null, true);
        echo "\" type='text/css'  />


        ";
        
        $__internal_69896217d23c4c2182db963b640864b30634f2395fcafb8c15e81587c2589366->leave($__internal_69896217d23c4c2182db963b640864b30634f2395fcafb8c15e81587c2589366_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8e54aabb3610050e486d00193db48f0a4f7f3a3c5cf276c1558556801d94210 = $this->env->getExtension("native_profiler");
        $__internal_f8e54aabb3610050e486d00193db48f0a4f7f3a3c5cf276c1558556801d94210->enter($__internal_f8e54aabb3610050e486d00193db48f0a4f7f3a3c5cf276c1558556801d94210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8e54aabb3610050e486d00193db48f0a4f7f3a3c5cf276c1558556801d94210->leave($__internal_f8e54aabb3610050e486d00193db48f0a4f7f3a3c5cf276c1558556801d94210_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e4fb6adfd76904f0787afe5674c4e34ecabad9123e267e08c8e0843d9a8aed0 = $this->env->getExtension("native_profiler");
        $__internal_5e4fb6adfd76904f0787afe5674c4e34ecabad9123e267e08c8e0843d9a8aed0->enter($__internal_5e4fb6adfd76904f0787afe5674c4e34ecabad9123e267e08c8e0843d9a8aed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            
            
            <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/calendrier.js"), "html", null, true);
        echo "\"></script>
        
            <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName(\"mySlides\");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = \"none\";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = \"block\";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>";
        
        $__internal_5e4fb6adfd76904f0787afe5674c4e34ecabad9123e267e08c8e0843d9a8aed0->leave($__internal_5e4fb6adfd76904f0787afe5674c4e34ecabad9123e267e08c8e0843d9a8aed0_prof);

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
        return array (  115 => 21,  111 => 19,  105 => 18,  94 => 17,  83 => 10,  80 => 9,  74 => 8,  62 => 5,  53 => 39,  51 => 18,  47 => 17,  40 => 14,  38 => 8,  32 => 5,  26 => 1,);
    }
}
