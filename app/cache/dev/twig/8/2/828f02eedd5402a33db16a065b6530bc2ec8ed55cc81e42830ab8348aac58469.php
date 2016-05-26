<?php

/* IITIhmBundle:Home:home.html.twig */
class __TwigTemplate_828f02eedd5402a33db16a065b6530bc2ec8ed55cc81e42830ab8348aac58469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IITIhmBundle:Home:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e5a26492de4d6bf984ca9e1b1fa9f60b043d04c7138637f60a0cb107299b054 = $this->env->getExtension("native_profiler");
        $__internal_5e5a26492de4d6bf984ca9e1b1fa9f60b043d04c7138637f60a0cb107299b054->enter($__internal_5e5a26492de4d6bf984ca9e1b1fa9f60b043d04c7138637f60a0cb107299b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITIhmBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5a26492de4d6bf984ca9e1b1fa9f60b043d04c7138637f60a0cb107299b054->leave($__internal_5e5a26492de4d6bf984ca9e1b1fa9f60b043d04c7138637f60a0cb107299b054_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_276011e6d504d8f7d0770c0b8d8ad83ef95eb26411995c307b697e9fd4647ba0 = $this->env->getExtension("native_profiler");
        $__internal_276011e6d504d8f7d0770c0b8d8ad83ef95eb26411995c307b697e9fd4647ba0->enter($__internal_276011e6d504d8f7d0770c0b8d8ad83ef95eb26411995c307b697e9fd4647ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <script  src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/calendrier.js"), "html", null, true);
        echo "\"></script>

    <div class=\"header\">
        <div class=\"logo\">
            <img src=\"";
        // line 10
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
        // line 59
        $context["compteur"] = 1;
        // line 60
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 61
            echo "                                
                             <tr>
                                 <td style=\"width:70px;padding-left:15px\"> ";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")), "html", null, true);
            echo " </td>
                                 <td> <img class=\"image_equipe\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageequipe/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
            echo ".png\" > </td>
                                 <td><span>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
            echo "</span> </td>
                                 <td style=\"font-weight: bold;padding-left:15px\">";
            // line 66
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "g", array()) * 3) + ($this->getAttribute($context["entity"], "n", array()) * 1)), "html", null, true);
            echo "</td>
                                 <td style=\"padding-left:10px\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "g", array()), "html", null, true);
            echo "</td>
                                 <td style=\"padding-left:10px\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "p", array()), "html", null, true);
            echo "</td>
                                 <td style=\"padding-left:10px\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "n", array()), "html", null, true);
            echo "</td>
                                 <td style=\"padding-left:10px\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "j", array()), "html", null, true);
            echo "</td>
                             </tr>
                                 ";
            // line 72
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 73
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </tbody>
                    </table>

                </aside>
            </div>
        </div>


        <div id=\"content_players\">


            <div class=\"divListTeams\">
                <aside class=\"asideListTeams\">
                    <div class=\"titre_list_team\">List of teams</div>
                    <table rules=\"rows\" style=\"width:552px;\">
                        <thead>

                            <tr >
                                
                                <td style=\"padding-left:20px;width:70px;font-weight: bold;\">Team</td>
                                <td style=\"font-weight: bold;\">Name</td>

                            </tr>
                        </thead>
                        <tbody class=\"trTeam\"  >
                            ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 100
            echo "                                <tr id=\"trTeam";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"oneTeam\" onclick=\"goToUrl(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo ")\" > 
                           
                                   
                                    
                                     <td style=\"padding-left:20px;\"> <img class=\"image_equipe\" src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageequipe/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
            echo ".png\" > </td>
                                    <td><span>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
            echo "</span></td>
                           
                                </tr> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                        </tbody>
                    </table>
                </aside>
            </div>
                        <div class=\"divListPlayer\" id=\"players\">

     
                            
            </div>


        </div>


        <div id=\"content_results\">
            <aside class=\"aside_tab_result\" style=\"overflow:auto;overflow-x: hidden;\">
                <div class=\"titre_tab_player\">All Results</div>

                <table rules=\"rows\" style=\"width:1127px;\">
                    <thead>

                    </thead>
                    <tbody>
                        ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 133
            echo "                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
            echo "</span></td>
                                <td style=\"width:170px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
            echo ".png\" ></a> 

                                </td>
                                <td style=\"width:20px;font-weight: bold;\">
                                    ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq1", array()), "html", null, true);
            echo "
                                </td>

                                <td style=\"width:20px;font-weight: bold;\">-</td>

                                <td style=\"width:170px;font-weight: bold;\">
                                    ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq2", array()), "html", null, true);
            echo "
                                </td>
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
            echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
            echo "</span></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    </tbody>
                </table>


            </aside>
        </div>


        <div id=\"content_match\" >
            <aside class=\"aside_tab_result\" style=\"overflow:auto;overflow-x: hidden;\">
                <div class=\"titre_tab_player\">Match</div>

                    <table rules=\"rows\" style=\"width:1127px;\">
                    <thead>

                    </thead>
                    <tbody>
                       ";
        // line 172
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 173
            echo "                             ";
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "Y-m-d"))) {
                echo " 
                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "</span></td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 181
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "d - m - Y"), "html", null, true);
                echo "
                                </td>
                                   <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 184
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo " 
                                </td>
                               

                                
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span></td>
                            </tr>
                             ";
            }
            // line 195
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
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
        // line 217
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 218
            echo "                            ";
            if (($this->getAttribute($context["entity"], "idcompetition", array()) == "Cup")) {
                echo " 
                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "</span></td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 226
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "d - m - Y"), "html", null, true);
                echo " 
                                </td>
                                   <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 229
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo " 
                                </td>
                             

                                
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span></td>
                            </tr>
                              ";
            }
            // line 241
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
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
        // line 258
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 259
            echo "                           
                           ";
            // line 260
            if (($this->getAttribute($context["entity"], "idcompetition", array()) == "Championship")) {
                echo " 
                            <tr>
                                <td style=\"padding-left: 170px;width:170px;font-weight: bold;\"><span>";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "</span></td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 268
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "d - m - Y"), "html", null, true);
                echo "
                                </td>
                                   <td style=\"width:120px;font-weight: bold;\">
                                    ";
                // line 271
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo " 
                                </td>
                               

                                
                                <td style=\"font-weight: bold;\">
                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a> 

                                </td>
                                <td style=\"font-weight: bold;\"><span>";
                // line 280
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span></td>
                            </tr>
                           ";
            }
            // line 282
            echo " 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
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
        // line 303
        $context["compteur"] = 0;
        // line 304
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) ? $context["resultats"] : $this->getContext($context, "resultats")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 305
            echo "                                        ";
            if (((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) < 3)) {
                // line 306
                echo "
                                            <tr class=\"row_match\">
                                                <td>
                                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 309
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 
                                                </td>
                                                <td>
                                        <center>


                                           
                                            
                                            <br>
                                            <span style=\"font-weight: bold;font-size: larger\">";
                // line 318
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq1", array()), "html", null, true);
                echo "&nbsp; - &nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "buteq2", array()), "html", null, true);
                echo "</span>
                                            <br>
                                            <br>
                                              <span style=\"font-weight: bold;\">  ";
                // line 321
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo "&nbsp; VS &nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "</span>\t
                                            
                                        </center>
                                        </td>
                                        <td>
                                            <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 326
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a>
                                        </td>

                                        </tr>\t
                                    ";
            }
            // line 331
            echo "                                    ";
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 332
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
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
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img1.jpg"), "html", null, true);
        echo "\" >
                    <img class=\"mySlides\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img2.jpg"), "html", null, true);
        echo "\" >
                    <img class=\"mySlides\" src=\"";
        // line 346
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
        // line 359
        $context["compteur"] = 0;
        // line 360
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 361
            echo "                                        ";
            if (((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) < 3)) {
                // line 362
                echo "                                            <tr class=\"row_match\">
                                                <td>
                                                    <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 364
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo ".png\" ></a> 
                                                </td>
                                                <td>
                                        <center>
                                            <br>

                                            <span style=\"font-weight: bold;font-size: larger\">";
                // line 370
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "m/d/Y"), "html", null, true);
                echo "</span> 


                                            <br>

                                                <span style=\"font-weight: bold;font-size: larger\"> ";
                // line 375
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "iddate", array()), "g:ia"), "html", null, true);
                echo "  </span>

                                            

                                                <br>
                                                <span style=\"font-weight: bold;\"> ";
                // line 380
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe1", array()), "html", null, true);
                echo " vs  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo "\t</span>
                                            
                                        </center>
                                        </td>
                                        <td>
                                            <a  href=\"#\"><img class=\"image_equipe\" src=\"";
                // line 385
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageeq/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idequipe2", array()), "html", null, true);
                echo ".png\" ></a>
                                        </td>
                                        </tr>
                                    ";
            }
            // line 389
            echo "                                    ";
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 390
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
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
        // line 436
        $context["compteur"] = 1;
        // line 437
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipe"]) ? $context["equipe"] : $this->getContext($context, "equipe")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 438
            echo "                                ";
            if (((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) < 7)) {
                // line 439
                echo "                                    <tr>
                                        <td style=\"width:70px;padding-left:15px\">";
                // line 440
                echo twig_escape_filter($this->env, (isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")), "html", null, true);
                echo "</td>
                                        <td> <img class=\"image_equipe\" src=\"";
                // line 441
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imageequipe/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                echo ".png\" > </td>
                                        <td><span>";
                // line 442
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "designation", array()), "html", null, true);
                echo "</span></td>
                                        <td>";
                // line 443
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "g", array()) * 3) + ($this->getAttribute($context["entity"], "n", array()) * 1)), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            // line 446
            echo "                                ";
            $context["compteur"] = ((isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")) + 1);
            // line 447
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 448
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
        // line 464
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")), 3, ""));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 465
            echo "  
    
   <tr >
        ";
            // line 468
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 469
                echo "        
                                <td style=\"width:150px;\">
                                     <center>
                                     <img class=\"image_BestPlayer\" src=\"";
                // line 472
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\">
                                     <p style=\"font-size: 11px;font-family: sans-serif;font-weight: bold;\">";
                // line 473
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
                echo "</p>
                                     </center>
                                </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 477
            echo "    </tr>
    
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 481
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
                     <input class=\"input\"type=\"text\"  placeholder=\"Leave your email adress here\" id=\"txt\">
                     <br>
                     <input class=\"button_news\" type=\"submit\" value=\"Send\" id=\"btnNews\">
                 </form>
                </div>

                
                <div class=\"liens\">
                    <p style=\"color: #EEEFEF\"><b>Social Networks</b></>
                     <hr>
                    <a class=\"button_footer\" href=\"https://www.facebook.com\">
                        <img src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/fb2.png"), "html", null, true);
        echo "\"/>
                    </a>
                    &nbsp;
                 
                    <a class=\"button_footer\" href=\"https://twitter.com\">
                    <img src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/twitter.png"), "html", null, true);
        echo "\"/>
                    </a>
                     &nbsp;
                   
                    <a class=\"button_footer\" href=\"https://plus.google.com\" >
                        <img src=\"";
        // line 524
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
    </div>
    <div  style=\"position: fixed; bottom: 30px; right: 20px; opacity: 8; cursor: pointer;\">
        <a  href=\"#\">
            <img style=\"width: 40px;height: 40px;\" src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/fhaut.png"), "html", null, true);
        echo "\" >
        </a>
    </div>

";
        
        $__internal_276011e6d504d8f7d0770c0b8d8ad83ef95eb26411995c307b697e9fd4647ba0->leave($__internal_276011e6d504d8f7d0770c0b8d8ad83ef95eb26411995c307b697e9fd4647ba0_prof);

    }

    public function getTemplateName()
    {
        return "IITIhmBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  945 => 554,  912 => 524,  904 => 519,  896 => 514,  861 => 481,  852 => 477,  840 => 473,  835 => 472,  830 => 469,  826 => 468,  821 => 465,  817 => 464,  799 => 448,  793 => 447,  790 => 446,  784 => 443,  780 => 442,  775 => 441,  771 => 440,  768 => 439,  765 => 438,  760 => 437,  758 => 436,  712 => 392,  705 => 390,  702 => 389,  694 => 385,  684 => 380,  676 => 375,  668 => 370,  658 => 364,  654 => 362,  651 => 361,  646 => 360,  644 => 359,  628 => 346,  624 => 345,  620 => 344,  607 => 333,  601 => 332,  598 => 331,  589 => 326,  579 => 321,  571 => 318,  558 => 309,  553 => 306,  550 => 305,  545 => 304,  543 => 303,  522 => 284,  515 => 282,  509 => 280,  502 => 277,  493 => 271,  487 => 268,  479 => 264,  474 => 262,  469 => 260,  466 => 259,  462 => 258,  444 => 242,  438 => 241,  432 => 238,  425 => 235,  416 => 229,  410 => 226,  402 => 222,  397 => 220,  391 => 218,  387 => 217,  365 => 197,  358 => 195,  352 => 193,  345 => 190,  336 => 184,  330 => 181,  322 => 177,  317 => 175,  311 => 173,  307 => 172,  288 => 155,  279 => 152,  272 => 149,  266 => 146,  257 => 140,  249 => 136,  244 => 134,  241 => 133,  237 => 132,  212 => 109,  202 => 105,  197 => 104,  187 => 100,  183 => 99,  156 => 74,  150 => 73,  148 => 72,  143 => 70,  139 => 69,  135 => 68,  131 => 67,  127 => 66,  123 => 65,  118 => 64,  114 => 63,  110 => 61,  105 => 60,  103 => 59,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
