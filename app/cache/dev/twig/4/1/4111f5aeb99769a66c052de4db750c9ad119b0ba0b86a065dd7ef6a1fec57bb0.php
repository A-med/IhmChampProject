<?php

/* IITIhmBundle:Home:playerList.html.twig */
class __TwigTemplate_4111f5aeb99769a66c052de4db750c9ad119b0ba0b86a065dd7ef6a1fec57bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITIhmBundle:Home:playerList.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdafb4d84bcb6fb3ee441830a202ab923a7e1ee4a47a8eb5f626dda1ac189e4c = $this->env->getExtension("native_profiler");
        $__internal_cdafb4d84bcb6fb3ee441830a202ab923a7e1ee4a47a8eb5f626dda1ac189e4c->enter($__internal_cdafb4d84bcb6fb3ee441830a202ab923a7e1ee4a47a8eb5f626dda1ac189e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITIhmBundle:Home:playerList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdafb4d84bcb6fb3ee441830a202ab923a7e1ee4a47a8eb5f626dda1ac189e4c->leave($__internal_cdafb4d84bcb6fb3ee441830a202ab923a7e1ee4a47a8eb5f626dda1ac189e4c_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_970a90268f6dd7761d73b05613f63609645e3053bbe10467fe9882d19fd7d671 = $this->env->getExtension("native_profiler");
        $__internal_970a90268f6dd7761d73b05613f63609645e3053bbe10467fe9882d19fd7d671->enter($__internal_970a90268f6dd7761d73b05613f63609645e3053bbe10467fe9882d19fd7d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/calendrier.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery-1.7.2.js"), "html", null, true);
        echo "\"></script>
    <script>   
        id=0;
         function goToUrl(id) {
       
     var route=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("players_team", array("id" => "PLACEHOLDER"));
        echo "\";
     
   
     \t
 
        window.location = route.replace(\"PLACEHOLDER\", id);

    }
 </script>
    
    <script>
 \$(document).ready(function () {
   \$(\"#stdTbl tr\").click(function() {
    var selected = \$(this).hasClass(\"highlight\");
    \$(\"#stdTbl tr\").removeClass(\"highlight\");
    if(!selected)
            \$(this).addClass(\"highlight\");
});
        \$(\"#content_Standing\").hide();
                
                 \$(\"#content_body\").hide();
                \$(\"#content_results\").hide();
                \$(\"#content_match\").hide();
                \$(\"#content_cup\").hide();
                \$(\"#content_champ\").hide();
                 \$(\"#content_players\").show();
              \$('#player').addClass(\"active\");
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
            
        });</script>";
        
        $__internal_970a90268f6dd7761d73b05613f63609645e3053bbe10467fe9882d19fd7d671->leave($__internal_970a90268f6dd7761d73b05613f63609645e3053bbe10467fe9882d19fd7d671_prof);

    }

    // line 232
    public function block_body($context, array $blocks = array())
    {
        $__internal_3205b9c2e02a229b75d75317d431d079353e86084a4ff0c55d58bf1a3e1387c9 = $this->env->getExtension("native_profiler");
        $__internal_3205b9c2e02a229b75d75317d431d079353e86084a4ff0c55d58bf1a3e1387c9->enter($__internal_3205b9c2e02a229b75d75317d431d079353e86084a4ff0c55d58bf1a3e1387c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 233
        echo "


   

    <div class=\"header\">
        <div class=\"logo\">
            <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" />
        </div>
        <div class=\"titre_header\">
            Football Soccer
        </div>
    </div>
    <div class=\"dim\">
        <div class=\"nav\">

            <ul>

                <li id=\"home\" action=\"onClick()\"><a href=\"#\" >Home</a></li>
                <li id=\"standing\"><a href=\"#\">Standing</a></li>
                <li id=\"player\"><a href=\"#\">Players</a></li>
                <li id=\"results\"><a href=\"#\">Results</a></li>
                <li id=\"match\"><a href=\"#\">Next Match</a></li>
                <li id=\"competition\">
                    <a href=\"#\">Competitions</a>
                    <ul>
                        <li id=\"cup\"><a href=\"#\">Cup</a></li>
                        <li id=\"champ\"><a href=\"#\">Championship</a></li>

                    </ul>
                </li>
                

            </ul>

        </div>

     <div id=\"content_Standing\" >
            <div class=\"divStanding\">
                <aside class=\"asideStanding\">
                    <div class=\"titre_Standing\">Standing</div>
                    <table rules=\"rows\" style=\"width:1127px;\">
                        <thead>
                        <tr>
                                <td style=\"width:70px;padding-left:15px;font-weight: bold;\">Position</td>
                                <td style=\"width:70px;font-weight: bold;\">Team</td>
                                <td style=\"font-weight: bold;\">Name</td>
                                <td style=\"font-weight: bold;\">Points</td>
                                <td style=\"font-weight: bold;\">Win</td>
                                <td style=\"font-weight: bold;\">Lost</td>
                                <td style=\"font-weight: bold;\">Draw</td>
                                 <td style=\"font-weight: bold;\">Played</td>
                            </tr>  
                        </thead>
                        <tbody>
                            ";
        // line 288
        $context["compteur"] = 1;
        // line 289
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 290
            echo "                                
                             <tr>
                                 <td style=\"width:70px;padding-left:15px\"> ";
            // line 292
            echo twig_escape_filter($this->env, (isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")), "html", null, true);
            echo " </td>
                                 <td> <img class=\"image_equipe\" src=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageequipe/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
            echo ".png\" > </td>
                                 <td><span>";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
            echo "</span> </td>
                                    <td>";
            // line 295
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "g", array()) * 3) + ($this->getAttribute($context["entity"], "n", array()) * 1)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "g", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "p", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "n", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "j", array()), "html", null, true);
            echo "</td>
                                </tr>
                                 ";
            // line 301
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 302
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "                        </tbody>
                    </table>

                </aside>
            </div>
        </div>


        <div id=\"content_players\">


            <div class=\"divListTeams\">
                <aside class=\"asideListTeams\">
                    <div class=\"titre_list_team\">List of teams</div>
                    <table rules=\"rows\" style=\"width:552px;\" id=\"stdTbl\">
                        <thead>

                            <tr >
                               
                                <td style=\"padding-left:20px;width:70px;font-weight: bold;\">Team</td>
                                <td style=\"font-weight: bold;\">Name</td>

                            </tr>
                        </thead>
                        <tbody class=\"trTeam\">
                            ";
        // line 328
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 329
            echo "                               <tr id=\"trTeam";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" onclick=\"goToUrl(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo ");\" > 
                           
                                    
                                    
                                     <td style=\"padding-left:20px;\"> <img class=\"image_equipe\" src=\"";
            // line 333
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageequipe/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
            echo ".png\" > </td>
                                    <td><span>";
            // line 334
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
            echo "</span></td>
                           
                                </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "                        </tbody>
                    </table>
                </aside>
            </div>
                   <div class=\"divListPlayer\">

             <aside class=\"asideListPlayer\">
                    <div class=\"titre_list_player\">List of Players</div>
                    <table rules=\"all\" style=\"width:552px; \" >
                        <tbody>
            ";
        // line 348
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")), 3, "No item"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 349
            echo "                            <tr  style=\"height:190px;\">
                       ";
            // line 350
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 351
                echo "                                                   <div  id=\"popup";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" class=\"overlay\">
                                <div class=\"popup\">
                                    <center><img class=\"image_playerListPlayer\" style=\"padding-left:10px;\" src=\"";
                // line 353
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\"></center>

                                    <h2><center>";
                // line 355
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array()) . "  ") . $this->getAttribute($context["entity"], "prenom", array())), "html", null, true);
                echo "</center></h2>
                                    <a class=\"close\" href=\"#\">&times;</a>
                                    <div class=\"content\">
                                        <center><b>Nationality :</b>&nbsp;";
                // line 358
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationalite", array()), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b>Day of birth :</b>&nbsp;";
                // line 360
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datenaiss", array()), "d/m/Y"), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b>Height :&nbsp;</b>";
                // line 362
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "taille", array()) . " ") . "cm"), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b> Weight :&nbsp;</b>";
                // line 364
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "poids", array()) . " ") . "kg"), "html", null, true);
                echo "</center>
                                    </div>
                                </div>
                            </div>
                                
                                   <td style=\"width:100px;\">
                                    
                                        <img class=\"image_playerListPlayer\" src=\"";
                // line 371
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\">
                                    <center><p  style=\"font-size: 15px;font-family: inherit;font-weight: bold;\" >  ";
                // line 372
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array()) . " ") . $this->getAttribute($context["entity"], "prenom", array())), "html", null, true);
                echo " </p> </center>
                                    <center><a  href=\"#popup";
                // line 373
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/info.png"), "html", null, true);
                echo "\" ></a></center>
                                    </td>

                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            echo "
                                     
                                 </tr>
  
                               

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "



                        </tbody>
                    </table>
                </aside>
            </div>


        </div>


        <div id=\"content_results\">
            <aside class=\"aside_tab_result\" style=\"overflow:auto;overflow-x: hidden;\">
                <div class=\"titre_tab_player\">All Results</div>

                <table rules=\"rows\" style=\"width:1125px;\">
                    <thead>

                    </thead>
                    <tbody>
                        ";
        // line 406
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 407
            echo "                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
            // line 408
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
            echo "</span></td>
                                <td style=\"width:170px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
            // line 410
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
            echo ".png\" ></a> 

                                </td>
                                <td style=\"width:20px;font-weight: bold;\">
                                    ";
            // line 414
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq1", array()), "html", null, true);
            echo "
                                </td>

                                <td style=\"font-weight: bold;\">-</td>

                                <td style=\"width:170px;font-weight: bold;\">
                                    ";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq2", array()), "html", null, true);
            echo "
                                </td>
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
            // line 423
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
            echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
            echo "</span></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "                    </tbody>
                </table>


            </aside>
        </div>


        <div id=\"content_match\">
            <aside class=\"aside_tab_result\" style=\"overflow:auto;overflow-x: hidden;\">
                <div class=\"titre_tab_player\">Match</div>


                <table rules=\"rows\" style=\"width:1115px;\">
                    <thead>

                    </thead>
                    <tbody>
                       ";
        // line 447
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 448
            echo "                          ";
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "Y-m-d"))) {
                echo " 
                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
                // line 450
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "</span></td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 452
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 456
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "d - m - Y"), "html", null, true);
                echo "
                                </td>
                                   <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 459
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo " 
                                </td>
                               

                                
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 465
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
                // line 468
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span></td>
                            </tr>
                           ";
            }
            // line 470
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 472
        echo "                    </tbody>
                </table>

            </aside>
        </div>
         
                 <div id=\"content_cup\">
            <aside class=\"aside_tab_result\" style=\"overflow:auto;overflow-x: hidden;\">
                <div class=\"titre_tab_player\">Match of Cup</div>


                <table rules=\"rows\" style=\"width:1127px;\">
                    <thead>

                    </thead>
                    <tbody>
                       ";
        // line 488
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 489
            echo "                            ";
            if (($this->getAttribute($context["entity"], "idcompetition", array()) == "Cup")) {
                echo " 
                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
                // line 491
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "</span></td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 493
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 497
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "d - m - Y"), "html", null, true);
                echo " 
                                </td>
                                   <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 500
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo " 
                                </td>
                             

                                
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 506
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
                // line 509
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span></td>
                            </tr>
                              ";
            }
            // line 512
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "                    </tbody>
                </table>

            </aside>
        </div>

         <div id=\"content_champ\">
            <aside class=\"aside_tab_result\" style=\"overflow:auto;overflow-x: hidden;\">
                <div class=\"titre_tab_player\">Match of Championship</div>


                <table rules=\"rows\" style=\"width:1127px;\">
                    <thead>

                    </thead>
                    <tbody>
                       ";
        // line 529
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 530
            echo "                           
                           ";
            // line 531
            if (($this->getAttribute($context["entity"], "idcompetition", array()) == "Championship")) {
                echo " 
                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
                // line 533
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "</span></td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 535
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 539
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "d - m - Y"), "html", null, true);
                echo "
                                </td>
                                   <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 542
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo " 
                                </td>
                               

                                
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 548
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
                // line 551
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span></td>
                            </tr>
                           ";
            }
            // line 553
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 555
        echo "                    </tbody>
                </table>

            </aside>
        </div>
            
                    
                    
        <div id=\"content_body\">
            <div class=\"aside-slide\">
                <div class=\"div-results\">
                    <aside class=\"asideResults\">
                        <div class=\"titre\">Results</div>
                        <center>
                            <TABLE  rules=\"rows\"  style=\"width:251px;\">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead> \t\t
                                <tbody>
                                    ";
        // line 576
        $context["compteur"] = 0;
        // line 577
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 578
            echo "                                        ";
            if (((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) < 3)) {
                // line 579
                echo "
                                            <tr class=\"row_match\">
                                                <td>
                                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 582
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 
                                                </td>
                                                <td>
                                        <center>


                                           
                                            
                                            <br>
                                            <span style=\"font-weight: bold;font-size: larger\">";
                // line 591
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq1", array()), "html", null, true);
                echo "&nbsp; - &nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq2", array()), "html", null, true);
                echo "</span>
                                            <br>
                                            <br>
                                              <span style=\"font-weight: bold;\">  ";
                // line 594
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "&nbsp; VS &nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span>\t
                                            
                                        </center>
                                        </td>
                                        <td>
                                            <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 599
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\"></a>
                                        </td>

                                        </tr>\t
                                    ";
            }
            // line 604
            echo "                                    ";
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 605
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "                                </tbody>
                            </table>
                        </center>
                         <div class=\"lien_match\">
                             <button class=\"button_lien\"><a id=\"lienresult\" style=\"color:#ffffff;text-decoration:none; \" class=\"result_lien\" href=\"#\" >View full table</a></button>
                        </div>
                    </aside>
                </div>
                <div class=\"slide\">
                    <img class=\"mySlides\" src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img1.jpg"), "html", null, true);
        echo "\" >
                    <img class=\"mySlides\" src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img2.jpg"), "html", null, true);
        echo "\" >
                    <img class=\"mySlides\" src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img3.jpg"), "html", null, true);
        echo "\" >
                </div>
                <div class=\"div-match\">
                    <aside class=\"asideMatch\">
                        <div class=\"titre\">Match</div>
                        <center>
                            <TABLE  rules=\"rows\"  style=\"width:251px;\">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead> \t\t
                                <tbody>
                                    ";
        // line 630
        $context["compteur"] = 0;
        // line 631
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 632
            echo "                                        ";
            if (((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) < 3)) {
                // line 633
                echo "                                            <tr class=\"row_match\">
                                                <td>
                                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 635
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 
                                                </td>
                                                <td>
                                        <center>
                                            <br>

                                            <span style=\"font-weight: bold;font-size: larger\">";
                // line 641
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "m/d/Y"), "html", null, true);
                echo "</span> 


                                            <br>

                                                <span style=\"font-weight: bold;font-size: larger\"> ";
                // line 646
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo "  </span>

                                            

                                                <br>
                                                <span style=\"font-weight: bold;\"> ";
                // line 651
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo " vs  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "\t</span>
                                            
                                        </center>
                                        </td>
                                        <td>
                                            <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 656
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a>
                                        </td>
                                        </tr>
                                    ";
            }
            // line 660
            echo "                                    ";
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 661
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "

                                </tbody>
                            </table>
                        </center>
                         <div class=\"lien_match\">
                             <button class=\"button_lien\"><a id=\"lienmatch\" style=\"color:#ffffff;text-decoration:none; \" class=\"result_lien\" href=\"#\" >View full table</a></button>
                        </div>
                    </aside>
                </div>
            </div>
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
            </script>
      <div class=\"div-classement\">
                <aside class=\"asideClassement\">
                    <div class=\"titre_classement\">Standing</div>
                    <table rules=\"rows\" style=\"width:700px;\">
                        <thead>
                            <tr>
                                <td style=\"width:70px;padding-left:15px;font-weight: bold;\">Position</td>
                                <td style=\"width:70px;font-weight: bold;\">Team</td>
                                <td style=\"font-weight: bold;\">Name</td>
                                <td style=\"font-weight: bold;\">Points</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 705
        $context["compteur"] = 1;
        // line 706
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 707
            echo "                                ";
            if (((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) < 7)) {
                // line 708
                echo "                                    <tr>
                                        <td style=\"width:70px;padding-left:15px\">";
                // line 709
                echo twig_escape_filter($this->env, (isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")), "html", null, true);
                echo "</td>
                                        <td> <img class=\"image_equipe\" src=\"";
                // line 710
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageequipe/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                echo ".png\" > </td>
                                        <td><span>";
                // line 711
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
                echo "</span></td>
                                        <td>";
                // line 712
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "g", array()) * 3) + ($this->getAttribute($context["entity"], "n", array()) * 1)), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            // line 715
            echo "                                ";
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 716
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 717
        echo "                        </tbody>
                    </table>
                    <div class=\"lien_classement\">
                             <button class=\"button_lien\"><a id=\"lienstanding\" style=\"color:#ffffff;text-decoration:none; \" class=\"result_lien\" href=\"#\" >View full table</a></button>
                        </div>
                </aside>
            </div>
            <div class=\"div_Player\">
                <aside class=\"asidePlayer\">
                    <div class=\"titre_Player\">Best Players</div>

                    <table rules=\"all\"  >
                        <tbody>
            
           ";
        // line 731
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")), 3, ""));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 732
            echo "  
    
   <tr >
        ";
            // line 735
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 736
                echo "        
                                <td style=\"width:150px;\">
                                     <center>
                                     <img class=\"image_BestPlayer\" src=\"";
                // line 739
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\">
                                     <p style=\"font-size: 11px;font-family: sans-serif;font-weight: bold;\">";
                // line 740
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo "</p>
                                     </center>
                                </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 744
            echo "    </tr>
    
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 748
        echo "

                        </tbody>
                    </table>
                </aside>
            </div>
            <div class=\"div-video\">
                <aside class=\"asidevideo\">
                    <center>
                        <div class=\"titre_video\">Video</div>
                        <iframe width=\"1121\" height=\"374\"  src=\"https://www.youtube.com/embed/uItfey7mQEQ\" frameborder=\"0\" allowfullscreen></iframe> 
                    </center>
                </aside>
            </div>
        </div>
       <footer>
            <aside class=\"aside_footer\">
               
                <div class=\"subscribe\">
                 <form action=\"\">
                     <p style=\"color: #EEEFEF\"><b>Newsletter</b></>
                     <hr>
                     <input class=\"input\"type=\"text\"  placeholder=\"Leave your email adress here\">
                     <br>
                     <input class=\"button_news\" type=\"submit\" value=\"Send\">
                 </form>
                </div>

                
                <div class=\"liens\">
                    <p style=\"color: #EEEFEF\"><b>Social Networks</b></>
                     <hr>
                    <a class=\"button_footer\" href=\"https://www.facebook.com\">
                        <img src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/fb2.png"), "html", null, true);
        echo "\"/>
                    </a>
                    &nbsp;
                 
                    <a class=\"button_footer\" href=\"https://twitter.com\">
                    <img src=\"";
        // line 786
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/twitter.png"), "html", null, true);
        echo "\"/>
                    </a>
                     &nbsp;
                   
                    <a class=\"button_footer\" href=\"https://plus.google.com\" >
                        <img src=\"";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/google.png"), "html", null, true);
        echo "\"/>
                    </a>
             
                </div>
                <div class=\"contact\">
                 
                    <p style=\"color: #EEEFEF\"><b>Contact</b></p>
                     <hr>
                     <p style=\"color: #EEEFEF\">
                       Email : Glid2@iit.ens.tn<br>
                       Tel :+216 24 101 240 <br>
                       Adress :<br>
                       Street of Mharza
                       Sfax
                       Tunisia
                     </p>
                 
                </div>
                    
                <div class=\"sous_footer\">
                    2016 Football Soccer
                </div>
                <div class=\"sous_footer2\">
                    Designed by Glid II
                </div>
            </aside>
        </footer>
     <div  style=\"position: fixed; bottom: 30px; right: 20px; opacity: 8; cursor: pointer;\">
        <a  href=\"#\">
            <img style=\"width: 40px;height: 40px;\" src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/fhaut.png"), "html", null, true);
        echo "\" >
        </a>
    </div>

";
        
        $__internal_3205b9c2e02a229b75d75317d431d079353e86084a4ff0c55d58bf1a3e1387c9->leave($__internal_3205b9c2e02a229b75d75317d431d079353e86084a4ff0c55d58bf1a3e1387c9_prof);

    }

    public function getTemplateName()
    {
        return "IITIhmBundle:Home:playerList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1282 => 820,  1250 => 791,  1242 => 786,  1234 => 781,  1199 => 748,  1190 => 744,  1178 => 740,  1173 => 739,  1168 => 736,  1164 => 735,  1159 => 732,  1155 => 731,  1139 => 717,  1133 => 716,  1130 => 715,  1124 => 712,  1120 => 711,  1115 => 710,  1111 => 709,  1108 => 708,  1105 => 707,  1100 => 706,  1098 => 705,  1054 => 663,  1047 => 661,  1044 => 660,  1036 => 656,  1026 => 651,  1018 => 646,  1010 => 641,  1000 => 635,  996 => 633,  993 => 632,  988 => 631,  986 => 630,  970 => 617,  966 => 616,  962 => 615,  951 => 606,  945 => 605,  942 => 604,  933 => 599,  923 => 594,  915 => 591,  902 => 582,  897 => 579,  894 => 578,  889 => 577,  887 => 576,  864 => 555,  857 => 553,  851 => 551,  844 => 548,  835 => 542,  829 => 539,  821 => 535,  816 => 533,  811 => 531,  808 => 530,  804 => 529,  786 => 513,  780 => 512,  774 => 509,  767 => 506,  758 => 500,  752 => 497,  744 => 493,  739 => 491,  733 => 489,  729 => 488,  711 => 472,  704 => 470,  698 => 468,  691 => 465,  682 => 459,  676 => 456,  668 => 452,  663 => 450,  657 => 448,  653 => 447,  633 => 429,  624 => 426,  617 => 423,  611 => 420,  602 => 414,  594 => 410,  589 => 408,  586 => 407,  582 => 406,  558 => 384,  546 => 377,  534 => 373,  530 => 372,  525 => 371,  515 => 364,  510 => 362,  505 => 360,  500 => 358,  494 => 355,  488 => 353,  482 => 351,  478 => 350,  475 => 349,  471 => 348,  459 => 338,  449 => 334,  444 => 333,  434 => 329,  430 => 328,  403 => 303,  397 => 302,  395 => 301,  390 => 299,  386 => 298,  382 => 297,  378 => 296,  374 => 295,  370 => 294,  365 => 293,  361 => 292,  357 => 290,  352 => 289,  350 => 288,  299 => 240,  290 => 233,  284 => 232,  54 => 9,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
