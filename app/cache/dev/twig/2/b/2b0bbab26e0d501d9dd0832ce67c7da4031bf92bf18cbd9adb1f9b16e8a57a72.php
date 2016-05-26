<?php

/* IITIhmBundle:Home:teams.html.twig */
class __TwigTemplate_2b0bbab26e0d501d9dd0832ce67c7da4031bf92bf18cbd9adb1f9b16e8a57a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a60f92fcf68a635c49477343827e4a90b9f6c5dda7071b543e9b4cd841dd125f = $this->env->getExtension("native_profiler");
        $__internal_a60f92fcf68a635c49477343827e4a90b9f6c5dda7071b543e9b4cd841dd125f->enter($__internal_a60f92fcf68a635c49477343827e4a90b9f6c5dda7071b543e9b4cd841dd125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITIhmBundle:Home:teams.html.twig"));

        // line 1
        echo " 
<div class=\"divListPlayer\" id=\"players\">

             <aside class=\"asideListPlayer\">
                    <div class=\"titre_list_player\">List of Players</div>
                    <table rules=\"all\" style=\"width:552px; \" >
                        <tbody>
            ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")), 3, "No item"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "                            <tr style=\"height:190px;\">
                       ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 11
                echo "                            <div  id=\"popup";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" class=\"overlay\">
                                <div class=\"popup\">
                                    <center><img class=\"image_playerListPlayer\" style=\"padding-left:10px;\" src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\"></center>

                                    <h2><center>";
                // line 15
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array()) . "  ") . $this->getAttribute($context["entity"], "prenom", array())), "html", null, true);
                echo "</center></h2>
                                    <a class=\"close\" href=\"#\">&times;</a>
                                    <div class=\"content\">
                                        <center><b>Nationality :</b>&nbsp;";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nationalite", array()), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b>Day of birth :</b>&nbsp;";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datenaiss", array()), "d/m/Y"), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b>Height :&nbsp;</b>";
                // line 22
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "taille", array()) . " ") . "cm"), "html", null, true);
                echo "</center>
                                        <br>
                                        <center><b> Weight :&nbsp;</b>";
                // line 24
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "poids", array()) . " ") . "kg"), "html", null, true);
                echo "</center>
                                    </div>
                                </div>
                            </div>
                                
                                    <td style=\"width:100px;\">
                                    
                                        <img class=\"image_playerListPlayer\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/imagejoueur/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
                echo "\">
                                    <center><p  style=\"font-size: 15px;font-family: inherit;font-weight: bold;\" >  ";
                // line 32
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array()) . " ") . $this->getAttribute($context["entity"], "prenom", array())), "html", null, true);
                echo " </p> </center>
                                    <center><a  href=\"#popup";
                // line 33
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
            // line 37
            echo "
                                     
                                 </tr>
  
                               

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "



                        </tbody>
                    </table>
                </aside>
            </div>
                        ";
        
        $__internal_a60f92fcf68a635c49477343827e4a90b9f6c5dda7071b543e9b4cd841dd125f->leave($__internal_a60f92fcf68a635c49477343827e4a90b9f6c5dda7071b543e9b4cd841dd125f_prof);

    }

    public function getTemplateName()
    {
        return "IITIhmBundle:Home:teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  106 => 37,  94 => 33,  90 => 32,  85 => 31,  75 => 24,  70 => 22,  65 => 20,  60 => 18,  54 => 15,  48 => 13,  42 => 11,  38 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
