<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ec928acd28b2ecd186d3d8eafd7a6de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>

  <body>
       
        <div>
";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "                
                </div>
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
  </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ESPRIT";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"
type=\"text/css\" />
      
    ";
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        // line 24
        echo "    <script
src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 27
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  92 => 26,  88 => 24,  86 => 22,  83 => 21,  79 => 17,  76 => 16,  67 => 7,  64 => 6,  58 => 5,  50 => 29,  48 => 21,  44 => 19,  42 => 16,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }
}
