<?php

/* ::layout.html.twig */
class __TwigTemplate_7194c1db2b491138e8cf918f1387815c extends Twig_Template
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
        // line 10
        echo "  </head>
  <body>
       <div class=\"container\">
      <div class=\"navbar navbar-fixed-top\">
          <div class=\"navbar\">
              <div class=\"navbar-inner\">
                 


                  <a class=\"brand\" href=\"#\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></a>
                      <ul class=\"nav\">
                          <li class=\"active\"><a href=\"#\">Acceil</a></li>
                          <li><a href=\"#\">Inscription</a></li>
                          <li><a href=\"#\">Scolarite</a></li>
                          <li><a href=\"#\">Plateforme E-Learning</a></li>
                          <li><a href=\"#\">Stage et projet</a></li>
                          <li><a href=\"#\">Réglement intérieur</a></li>
                          <li><a href=\"#\">Contact</a></li>
                          <li>
                            ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "                                  <a href=\"#\"> Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " </a> </li>
                              <li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            // line 32
            echo "\">Déconnexion</a><
                                     ";
        } else {
            // line 34
            echo "                                  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
                             ";
        }
        // line 36
        echo "
                          </li>
                      </ul>

                     ";
        // line 44
        echo "                  </div>

              </div>
          </div>
               
      </div>
      <div id=\"header\" class=\"hero-unit\">
            <div id=\"myCarousel\" class=\"carousel slide\">
                   <ol class=\"carousel-indicators\">
                       <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                       <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                       <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                   </ol>
                   <!-- Carousel items -->
                   <div class=\"carousel-inner\">
                       
                       <div class=\"active item\"><center><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/400.jpg"), "html", null, true);
        echo "\" /></center></div>
                       <div class=\"item\"><center><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/4001.jpg"), "html", null, true);
        echo "\" /></center></div>
                       <div class=\"item\"><center><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/4002.jpg"), "html", null, true);
        echo "\" /></center></div>
                   </div>
                   <!-- Carousel nav -->
                  
                   <a class=\"carousel-control left\" href=\"myCarousel\" data-slide=\"prev\">&lsaquo;</a>
                   <a class=\"carousel-control right\" href=\"myCarousel\" data-slide=\"next\">&rsaquo;</a>
               </div>
          
      
      </div>
      
          ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "      
  ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "  </body>
</html>";
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

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "        
      
          ";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        // line 81
        echo "    <script
src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 84
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 84,  171 => 83,  167 => 81,  165 => 79,  162 => 78,  156 => 74,  153 => 73,  145 => 7,  142 => 6,  136 => 5,  129 => 78,  126 => 77,  124 => 73,  110 => 62,  102 => 60,  84 => 44,  78 => 36,  72 => 34,  68 => 32,  66 => 31,  61 => 30,  59 => 29,  46 => 19,  35 => 10,  29 => 5,  23 => 1,  147 => 104,  140 => 103,  43 => 6,  40 => 5,  33 => 6,  158 => 79,  139 => 63,  135 => 62,  131 => 86,  127 => 60,  123 => 59,  106 => 61,  101 => 43,  97 => 41,  85 => 32,  80 => 30,  76 => 28,  74 => 27,  63 => 19,  58 => 17,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 2,);
    }
}
