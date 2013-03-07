<?php

/* ::layout.html.twig */
class __TwigTemplate_4beca2560cb1e8d8cef914ba678d5b56 extends Twig_Template
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
                          <li class=\"dropdown\">
                              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                  Connexion
                                  <b class=\"caret\"></b>
                              </a>
                              <ul class=\"dropdown-menu\">
                                  <form>
                                      <fieldset>

                                          <input type=\"text\" placeholder=\"Login…\">
                                          <input type=\"password\" placeholder=\"Mot de passe…\">
                                          <button type=\"submit\" class=\"btn\">Connexion</button>
                                      </fieldset>
                                  </form>

                              </ul>

                          </li>
                      </ul>

                      <form class=\"navbar-search pull-left\">
                         <input type=\"text\" class=\"search-query\" placeholder=\"Search\">
                          
                      </form>
                  </div>

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
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/400.jpg"), "html", null, true);
        echo "\" /></center></div>
                       <div class=\"item\"><center><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/4001.jpg"), "html", null, true);
        echo "\" /></center></div>
                       <div class=\"item\"><center><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/4002.jpg"), "html", null, true);
        echo "\" /></center></div>
                   </div>
                   <!-- Carousel nav -->
                  
                   <a class=\"carousel-control left\" href=\"myCarousel\" data-slide=\"prev\">&lsaquo;</a>
                   <a class=\"carousel-control right\" href=\"myCarousel\" data-slide=\"next\">&rsaquo;</a>
               </div>
          
      
      </div>
      
          ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "      
  ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
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

    // line 81
    public function block_body($context, array $blocks = array())
    {
        // line 82
        echo "        
      
          ";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        // line 89
        echo "    <script
src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 92
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
        return array (  169 => 92,  167 => 91,  163 => 89,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  141 => 7,  138 => 6,  132 => 5,  127 => 94,  125 => 86,  122 => 85,  120 => 81,  106 => 70,  102 => 69,  98 => 68,  46 => 19,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
