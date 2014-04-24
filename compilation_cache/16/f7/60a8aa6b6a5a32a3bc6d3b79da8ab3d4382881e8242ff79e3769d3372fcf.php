<?php

/* default.html */
class __TwigTemplate_16f760a8aa6b6a5a32a3bc6d3b79da8ab3d4382881e8242ff79e3769d3372fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div style=\"height: 70px;\"></div>

<div class=\"fog50\"> 
  <div class=\"panel-group\" id=\"accordion\">
    
    ";
        // line 9
        $this->env->loadTemplate("sectionOne.html")->display($context);
        // line 10
        echo "
    ";
        // line 11
        $this->env->loadTemplate("sectionTwo.html")->display($context);
        // line 12
        echo "
    ";
        // line 13
        $this->env->loadTemplate("sectionThree.html")->display($context);
        // line 14
        echo "
    ";
        // line 15
        $this->env->loadTemplate("sectionFour.html")->display($context);
        // line 16
        echo "
    ";
        // line 17
        $this->env->loadTemplate("sectionFive.html")->display($context);
        // line 18
        echo "
  </div> <!-- panel-group -->
</div> <!-- fog50 -->

";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  31 => 3,  28 => 2,);
    }
}
