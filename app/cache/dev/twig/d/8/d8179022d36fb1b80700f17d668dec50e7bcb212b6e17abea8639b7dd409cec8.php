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
            'otherscripy' => array($this, 'block_otherscripy'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9d09f9414d817daf027f935f625b9599ff301c3c18fe3fbda937fabc0743d3 = $this->env->getExtension("native_profiler");
        $__internal_6a9d09f9414d817daf027f935f625b9599ff301c3c18fe3fbda937fabc0743d3->enter($__internal_6a9d09f9414d817daf027f935f625b9599ff301c3c18fe3fbda937fabc0743d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

    <body  >
    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "</body>

";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 289
        echo "</body>
</html>
";
        
        $__internal_6a9d09f9414d817daf027f935f625b9599ff301c3c18fe3fbda937fabc0743d3->leave($__internal_6a9d09f9414d817daf027f935f625b9599ff301c3c18fe3fbda937fabc0743d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ba7fce2e8323c458354fa7c8488534ef57efeea7fa41a280a18a779dbec3eea = $this->env->getExtension("native_profiler");
        $__internal_3ba7fce2e8323c458354fa7c8488534ef57efeea7fa41a280a18a779dbec3eea->enter($__internal_3ba7fce2e8323c458354fa7c8488534ef57efeea7fa41a280a18a779dbec3eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ba7fce2e8323c458354fa7c8488534ef57efeea7fa41a280a18a779dbec3eea->leave($__internal_3ba7fce2e8323c458354fa7c8488534ef57efeea7fa41a280a18a779dbec3eea_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_399bab14c9679874a62fc80e626ced41431ce6dc99e331fb7ed1842a6756fdc1 = $this->env->getExtension("native_profiler");
        $__internal_399bab14c9679874a62fc80e626ced41431ce6dc99e331fb7ed1842a6756fdc1->enter($__internal_399bab14c9679874a62fc80e626ced41431ce6dc99e331fb7ed1842a6756fdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        <link rel='stylesheet'  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/style.css"), "html", null, true);
        echo "\" type='text/css'  />

         
    ";
        
        $__internal_399bab14c9679874a62fc80e626ced41431ce6dc99e331fb7ed1842a6756fdc1->leave($__internal_399bab14c9679874a62fc80e626ced41431ce6dc99e331fb7ed1842a6756fdc1_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f63c0c6040ecb2f8da2b8b412b3d58365554e0b96c9b1e22751b3f65c5421079 = $this->env->getExtension("native_profiler");
        $__internal_f63c0c6040ecb2f8da2b8b412b3d58365554e0b96c9b1e22751b3f65c5421079->enter($__internal_f63c0c6040ecb2f8da2b8b412b3d58365554e0b96c9b1e22751b3f65c5421079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f63c0c6040ecb2f8da2b8b412b3d58365554e0b96c9b1e22751b3f65c5421079->leave($__internal_f63c0c6040ecb2f8da2b8b412b3d58365554e0b96c9b1e22751b3f65c5421079_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27377ecd5e24844f55d4fcd0e4e58e2db3080fc85bcb3378e711874946c2be66 = $this->env->getExtension("native_profiler");
        $__internal_27377ecd5e24844f55d4fcd0e4e58e2db3080fc85bcb3378e711874946c2be66->enter($__internal_27377ecd5e24844f55d4fcd0e4e58e2db3080fc85bcb3378e711874946c2be66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        $this->displayBlock('otherscripy', $context, $blocks);
        // line 22
        echo " 
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery-1.7.2.js"), "html", null, true);
        echo "\"></script>
    
    <script>   
        \$(document).ready(function () {
            
            
            
            
           \$(\"#content_Standing\").hide();
                
                 \$(\"#content_body\").show();
                \$(\"#content_results\").hide();
                \$(\"#content_match\").hide();
                \$(\"#content_cup\").hide();
                \$(\"#content_champ\").hide();
                 \$(\"#content_players\").hide();
              \$('#home').addClass(\"active\");
            \$(\"#standing\").click(function () {
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                 \$('#match').removeClass(\"active\");
                 \$('#cup').removeClass(\"active\");
                  \$('#champ').removeClass(\"active\");
                  \$('#competition').removeClass(\"active\");
                \$('#standing').addClass(\"active\");
                \$(\"#content_body\").hide();
                 \$(\"#content_players\").hide();
                \$(\"#content_results\").hide();
                \$(\"#content_match\").hide();
                \$(\"#content_cup\").hide();
                \$(\"#content_champ\").hide();
                \$(\"#content_Standing\").show();

            });

            \$(\"#home\").click(function () {
                \$('#standing').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                  \$('#match').removeClass(\"active\");
                   \$('#cup').removeClass(\"active\");
                   \$('#champ').removeClass(\"active\");
                   \$('#competition').removeClass(\"active\");
                \$('#home').addClass(\"active\");
                \$(\"#content_Standing\").hide();
                \$(\"#content_players\").hide();
                 \$(\"#content_body\").hide();
                \$(\"#content_results\").hide();
                \$(\"#content_match\").hide();
                \$(\"#content_cup\").hide();
                 \$(\"#content_champ\").hide();
                \$(\"#content_body\").show();

            });


            \$(\"#player\").click(function () {
                \$('#standing').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                \$('#match').removeClass(\"active\");
                \$('#cup').removeClass(\"active\");
                 \$('#champ').removeClass(\"active\");
                 \$('#competition').removeClass(\"active\");
                \$('#player').addClass(\"active\");
                
                \$(\"#content_Standing\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_results\").hide();
                \$(\"#content_match\").hide();
                 \$(\"#content_cup\").hide();
                  \$(\"#content_champ\").hide();
                \$(\"#content_players\").show();

            });
            
            
                \$(\"#results\").click(function () {
                \$('#standing').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                 \$('#cup').removeClass(\"active\");
                  \$('#champ').removeClass(\"active\");
                  \$('#competition').removeClass(\"active\");
             \$('#match').removeClass(\"active\");
                \$('#results').addClass(\"active\");
                \$(\"#content_Standing\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_players\").hide();
                \$(\"#content_match\").hide();
                \$(\"#content_cup\").hide();
                 \$(\"#content_champ\").hide();
                \$(\"#content_results\").show();

            });
              \$(\"#btnNews\").click(function () {
                  var btnC = \$(txt).val();
    alert(\"Hi \"+btnC+\"  you will receive our newsletter as soon as possible !\");    
 

            });
            
                   \$( \"table tr [id^='trTeam']\" ).click(function () {
                  var btnC = \$(txt).val();
    alert(\"Hi \"+btnC+\"  you will receive our newsletter as soon as possible !\");    
 

            });
            
            \$(\"#match\").click(function () {
                \$('#standing').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                \$('#cup').removeClass(\"active\");
                 \$('#champ').removeClass(\"active\");
                  \$('#competition').removeClass(\"active\");
                \$('#match').addClass(\"active\");
                \$(\"#content_Standing\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_players\").hide();
                \$(\"#content_cup\").hide();
                \$(\"#content_results\").hide();
                 \$(\"#content_champ\").hide();
                  \$(\"#content_match\").show();
            });
           
             \$(\"#cup\").click(function () {
                \$('#standing').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                \$('#match').removeClass(\"active\");
                 \$('#champ').removeClass(\"active\");
                \$('#cup').addClass(\"active\");
                \$('#competition').addClass(\"active\");
                \$(\"#content_Standing\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_players\").hide();
                \$(\"#content_match\").hide();
                \$(\"#content_results\").hide();
                 \$(\"#content_champ\").hide();
                  \$(\"#content_cup\").show();
            });
            
             \$(\"#champ\").click(function () {
                \$('#standing').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                \$('#match').removeClass(\"active\");
                 \$('#cup').removeClass(\"active\");
                \$('#champ').addClass(\"active\");
                \$('#competition').addClass(\"active\");
                \$(\"#content_Standing\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_players\").hide();
                \$(\"#content_match\").hide();
                \$(\"#content_results\").hide();
                 \$(\"#content_cup\").hide();
                  \$(\"#content_champ\").show();
            });
            \$(\"#lienmatch\").click(function () {
                \$('#standing').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                \$('#champ').removeClass(\"active\");
                 \$('#cup').removeClass(\"active\");
                 \$('#competition').removeClass(\"active\");
                 
                \$('#match').addClass(\"active\");
               
                \$(\"#content_Standing\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_players\").hide();
                \$(\"#content_champ\").hide();
                \$(\"#content_results\").hide();
                 \$(\"#content_cup\").hide();
                  \$(\"#content_match\").show();
            });
            
             \$(\"#lienstanding\").click(function () {
                \$('#match').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                \$('#results').removeClass(\"active\");
                \$('#champ').removeClass(\"active\");
                 \$('#cup').removeClass(\"active\");
                 \$('#competition').removeClass(\"active\");
                 
                \$('#standing').addClass(\"active\");
               
                \$(\"#content_match\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_players\").hide();
                \$(\"#content_champ\").hide();
                \$(\"#content_results\").hide();
                 \$(\"#content_cup\").hide();
                  \$(\"#content_Standing\").show();
            });
            
             \$(\"#lienresult\").click(function () {
                \$('#match').removeClass(\"active\");
                \$('#home').removeClass(\"active\");
                \$('#player').removeClass(\"active\");
                
                \$('#champ').removeClass(\"active\");
                 \$('#cup').removeClass(\"active\");
                 \$('#competition').removeClass(\"active\");
                 \$('#standing').removeClass(\"active\");
                \$('#results').addClass(\"active\");
               
                \$(\"#content_match\").hide();
                \$(\"#content_body\").hide();
                \$(\"#content_players\").hide();
                \$(\"#content_champ\").hide();
                \$(\"#content_Standing\").hide();
                 \$(\"#content_cup\").hide();
                  \$(\"#content_results\").show();
            });
                   
        });
     
    function goToUrl(id) {
        //  alert(id);
                         
            var path=\"";
        // line 251
        echo $this->env->getExtension('routing')->getPath("players_team", array("id" => "PLACEHOLDER"));
        echo "\";
     \t 
          
    
           var url =  path.replace(\"PLACEHOLDER\", id);
           
          
 
    \$.ajax({url: url, success: function(result){
        \$(\"#players\").replaceWith(result);
    }});
 
    }
     
     goToUrl(3);  
    </script>



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
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = \"block\";
            setTimeout(carousel, 4000); // Change image every 2 seconds
        }
    </script>";
        
        $__internal_27377ecd5e24844f55d4fcd0e4e58e2db3080fc85bcb3378e711874946c2be66->leave($__internal_27377ecd5e24844f55d4fcd0e4e58e2db3080fc85bcb3378e711874946c2be66_prof);

    }

    // line 21
    public function block_otherscripy($context, array $blocks = array())
    {
        $__internal_31c4418e4b3618e74a294381390ba8005abaa600c31439c37354f25b2261feab = $this->env->getExtension("native_profiler");
        $__internal_31c4418e4b3618e74a294381390ba8005abaa600c31439c37354f25b2261feab->enter($__internal_31c4418e4b3618e74a294381390ba8005abaa600c31439c37354f25b2261feab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherscripy"));

        
        $__internal_31c4418e4b3618e74a294381390ba8005abaa600c31439c37354f25b2261feab->leave($__internal_31c4418e4b3618e74a294381390ba8005abaa600c31439c37354f25b2261feab_prof);

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
        return array (  395 => 21,  350 => 251,  119 => 23,  116 => 22,  114 => 21,  108 => 20,  97 => 17,  86 => 10,  83 => 9,  77 => 8,  65 => 5,  56 => 289,  54 => 20,  50 => 18,  48 => 17,  41 => 14,  39 => 8,  33 => 5,  27 => 1,);
    }
}
