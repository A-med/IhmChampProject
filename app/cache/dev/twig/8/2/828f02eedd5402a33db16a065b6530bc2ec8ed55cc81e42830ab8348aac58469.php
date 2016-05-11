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
        $__internal_8be6fe142afb5e32d901f011a1ff11c7c4073e7f57de826bb6b574b430d9acc2 = $this->env->getExtension("native_profiler");
        $__internal_8be6fe142afb5e32d901f011a1ff11c7c4073e7f57de826bb6b574b430d9acc2->enter($__internal_8be6fe142afb5e32d901f011a1ff11c7c4073e7f57de826bb6b574b430d9acc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IITIhmBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be6fe142afb5e32d901f011a1ff11c7c4073e7f57de826bb6b574b430d9acc2->leave($__internal_8be6fe142afb5e32d901f011a1ff11c7c4073e7f57de826bb6b574b430d9acc2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f8fc8799f4b1bcc71ab8106bf296555f68b35a4d35b8894046693dbcd7760fb = $this->env->getExtension("native_profiler");
        $__internal_2f8fc8799f4b1bcc71ab8106bf296555f68b35a4d35b8894046693dbcd7760fb->enter($__internal_2f8fc8799f4b1bcc71ab8106bf296555f68b35a4d35b8894046693dbcd7760fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " 



<div class=\"header\">
<div class=\"logo\">
  <img src=\"";
        // line 9
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
  <li id=\"team\"><a href=\"#\">Teams</a></li>
  <li id=\"player\"><a href=\"#\">Players</a></li>
  <li id=\"comp\"><a href=\"#\">Competition</a></li>
  <li id=\"about\"><a href=\"#\">About</a></li>
 
</ul>

</div>
<div class=\"aside-slide\">
<div class=\"div-results\">
<aside class=\"asideResults\">
<div class=\"titre\">Results</div>
<center>
<TABLE  rules=\"rows\"  style=\"width:251px;\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t\t</thead> \t\t
\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t<tr class=\"row_match\" >
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/kangaroos-124x128.png"), "html", null, true);
        echo "\" ></a> 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<time  datetime=\"2016-06-02 16:30:00\">
\t\t\t\t\t\t\t\tJune 2, 2016
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span>1-1</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tKangaroos VS Bulls\t
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/bulls-98x128.png"), "html", null, true);
        echo "\" ></a>
\t\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr class=\"row_match\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/kangaroos-124x128.png"), "html", null, true);
        echo "\" ></a> 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<time  datetime=\"2016-06-02 16:30:00\">
\t\t\t\t\t\t\t\tJune 2, 2016
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span>1-1</span>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tKangaroos v Bulls\t
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</center>\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/bulls-98x128.png"), "html", null, true);
        echo "\" ></a>
\t\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr class=\"row_match\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/kangaroos-124x128.png"), "html", null, true);
        echo "\" ></a> 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<time  datetime=\"2016-06-02 16:30:00\">
\t\t\t\t\t\t\t\tJune 2, 2016
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span>1-1</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tKangaroos v Bulls\t
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/bulls-98x128.png"), "html", null, true);
        echo "\" ></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t</tr>\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t</tbody>
\t\t</table>
</center>
\t\t<div class=\"lien_match\">
\t\t\t<a href=\"#\">View full table</a>
\t\t</div>
</aside>
</div>
<div class=\"slide\">
  <img class=\"mySlides\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img1.jpg"), "html", null, true);
        echo "\" >
  <img class=\"mySlides\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img2.jpg"), "html", null, true);
        echo "\" >
  <img class=\"mySlides\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/image/img3.jpg"), "html", null, true);
        echo "\" >
</div>
<div class=\"div-match\">
<aside class=\"asideMatch\">
<div class=\"titre\">Match</div>
<center>
<TABLE  rules=\"rows\"  style=\"width:251px;\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t\t</thead> \t\t
\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t<tr class=\"row_match\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/kangaroos-124x128.png"), "html", null, true);
        echo "\" ></a> 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<time  datetime=\"2016-06-02 16:30:00\">
\t\t\t\t\t\t\t\tJune 2, 2016
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span >4:30 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tKangaroos v Bulls\t
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/bulls-98x128.png"), "html", null, true);
        echo "\" ></a>
\t\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr class=\"row_match\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/kangaroos-124x128.png"), "html", null, true);
        echo "\" ></a> 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<time  datetime=\"2016-06-02 16:30:00\">
\t\t\t\t\t\t\t\tJune 2, 2016
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span >4:30 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tKangaroos v Bulls\t
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/bulls-98x128.png"), "html", null, true);
        echo "\" ></a>
\t\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr class=\"row_match\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/kangaroos-124x128.png"), "html", null, true);
        echo "\" ></a> 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<time  datetime=\"2016-06-02 16:30:00\">
\t\t\t\t\t\t\t\tJune 2, 2016
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span >4:30 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tKangaroos v Bulls\t
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a  href=\"#\"><img class=\"image_equipe\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/bulls-98x128.png"), "html", null, true);
        echo "\" ></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t</tr>\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t</tbody>
\t\t</table>
\t\t</center>
<div class=\"lien_match\">
<a href=\"#\">View full table</a>
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
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = \"block\";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

<div class=\"div-classement\">
<aside class=\"asideClassement\">
<div class=\"titre_classement\">Classement</div>
<table rules=\"rows\" style=\"width:700px;\">
\t<thead>
\t\t<tr>
\t\t\t<td style=\"width:70px;padding-left:15px;font-weight: bold;\">Position</td>
\t\t\t<td style=\"width:70px;font-weight: bold;\">Team</td>
\t\t\t<td style=\"font-weight: bold;\">Name</td>
\t\t\t<td style=\"font-weight: bold;\">Points</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td style=\"width:70px;padding-left:15px\">1</td>
\t\t\t<td><img class=\"image_equipe\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\" ></td>
\t\t\t<td><span>Budgies</span></td>
\t\t\t<td>20</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td style=\"width:70px;padding-left:15px\">2</td>
\t\t\t<td><img class=\"image_equipe\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\" ></td>
\t\t\t<td><span>Budgies</span></td>
\t\t\t<td>20</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td style=\"width:70px;padding-left:15px\">3</td>
\t\t\t<td><img class=\"image_equipe\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\" ></td>
\t\t\t<td><span>Budgies</span></td>
\t\t\t<td>20</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td style=\"width:70px;padding-left:15px\">4</td>
\t\t\t<td><img class=\"image_equipe\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\" ></td>
\t\t\t<td><span>Budgies</span></td>
\t\t\t<td>20</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td style=\"width:70px;padding-left:15px\">5</td>
\t\t\t<td><img class=\"image_equipe\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\" ></td>
\t\t\t<td><span>Budgies</span></td>
\t\t\t<td>20</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td style=\"width:70px;padding-left:15px\">6</td>
\t\t\t<td><img class=\"image_equipe\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\" ></td>
\t\t\t<td><span>Budgies</span></td>
\t\t\t<td>20</td>
\t\t</tr>
\t</tbody>
</table>
<div class=\"lien_classement\">
<a href=\"#\">View full table</a>
</div>
</aside>
</div>
<div class=\"div_calendrier\">
<aside class=\"asideCalendrier\">
<div class=\"titre_calendrier\">Calendrier</div>
\t\t<div id=NavBar style=\"position:relative;width:286px;top:15px;padding-left:65px;\" align=\"left\">
\t\t\t<form name=\"when\"><table>
\t\t\t\t<tr>
\t\t\t\t\t<td><input type=\"button\" class=\"button\" value=\"<-- Last\" onClick=\"Skip('-')\"></td>
\t\t\t\t<td> </td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"month\" onChange=\"On_Month()\">

\t\t\t\t\t<script language=\"JavaScript1.2\">
\t\t\t\t\tif (ie4||ns6){
\t\t\t\t\t\t\tfor (j=0;j<Month_Label.length;j++) {
\t\t\t\t\t\t\tdocument.writeln('<option value=' + j + '>' + Month_Label[j]);
\t\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t</script>

\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td><input type=\"text\" name=\"year\" size=4 maxlength=4 onKeyPress=\"return Check_Nums()\" onKeyUp=\"On_Year()\"></td>
\t\t\t\t<td> </td>
\t\t\t\t<td><input type=\"button\" class=\"button\" value=\"Next -->\" onClick=\"Skip('+')\"></td>
\t\t\t\t</tr></table></form></div>
\t\t\t\t<div id=Calendar style=\"position:relative;width:400px;top:-2px;\" align=\"left\"></div>
</aside>
</div>
<div class=\"div_player\">
<aside class=\"asidePlayer\">
<div class=\"titre_Player\">Best Players</div>
\t<table rules=\"all\" style=\"width:1125px;\">
\t<tbody>
\t\t<tr style=\"height:185px;\">
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t
\t\t</tr>
\t\t<tr style=\"height:187px;\">
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<img class=\"image_player\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://demo.themeboy.com/football-club-soccer/wp-content/uploads/sites/34/budgies-113x128.png"), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"nomJoueur\">Ali maaloul</p>
\t\t\t</td>
\t\t\t
\t\t</tr>
\t
\t\t
\t\t
\t</tbody>
</table>
</aside>
</div>

<aside class=\"aside_footer\">
\t
\t<div class=\"sous_footer\">
\t\t© 2016 Football Soccer
\t</div>
\t<div class=\"sous_footer2\">
\t\tDesigned by Glid II
\t</div>
</aside>

</div>
<div title=\"Haut de page\" style=\"position: fixed; bottom: 30px; right: 20px; opacity: 8; cursor: pointer;\">
<a class=\"haut\" href=\"#\">
haut
</a>
</div>
 
 ";
        
        $__internal_2f8fc8799f4b1bcc71ab8106bf296555f68b35a4d35b8894046693dbcd7760fb->leave($__internal_2f8fc8799f4b1bcc71ab8106bf296555f68b35a4d35b8894046693dbcd7760fb_prof);

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
        return array (  513 => 381,  506 => 377,  499 => 373,  492 => 369,  485 => 365,  475 => 358,  468 => 354,  461 => 350,  454 => 346,  447 => 342,  398 => 296,  389 => 290,  380 => 284,  371 => 278,  362 => 272,  353 => 266,  304 => 220,  281 => 200,  272 => 194,  249 => 174,  240 => 168,  217 => 148,  198 => 132,  194 => 131,  190 => 130,  173 => 116,  150 => 96,  141 => 90,  118 => 70,  109 => 64,  86 => 44,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
