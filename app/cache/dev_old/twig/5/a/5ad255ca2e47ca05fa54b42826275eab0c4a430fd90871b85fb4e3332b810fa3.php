<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_5ad255ca2e47ca05fa54b42826275eab0c4a430fd90871b85fb4e3332b810fa3 extends Twig_Template
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
        $__internal_143c5df136dc3f9e40209b815e53072ba8950cc1554bf9f59ea3781b1fabb118 = $this->env->getExtension("native_profiler");
        $__internal_143c5df136dc3f9e40209b815e53072ba8950cc1554bf9f59ea3781b1fabb118->enter($__internal_143c5df136dc3f9e40209b815e53072ba8950cc1554bf9f59ea3781b1fabb118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_143c5df136dc3f9e40209b815e53072ba8950cc1554bf9f59ea3781b1fabb118->leave($__internal_143c5df136dc3f9e40209b815e53072ba8950cc1554bf9f59ea3781b1fabb118_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
