<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1875264956fc1589840371693334a1d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form class=\"box login\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t<fieldset class=\"boxBody\">
\t  <label>Username</label>
               <input type=\"text\" tabindex=\"1\" id=\"username\"  placeholder=\"PremiumPixel\"  name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
   
\t  <label>Password</label>
          <input type=\"password\" tabindex=\"2\" id=\"password\" name=\"_password\" required=\"required\" />

\t</fieldset>
\t<footer>
         

\t  <label><input type=\"checkbox\" tabindex=\"3\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t  <input type=\"submit\" class=\"btnLogin\" value=\"Login\" tabindex=\"4\">
\t</footer>
</form>


";
        // line 54
        echo "       
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  167 => 81,  165 => 79,  153 => 73,  129 => 78,  124 => 73,  110 => 62,  102 => 60,  23 => 3,  90 => 31,  76 => 25,  63 => 21,  59 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 24,  38 => 6,  155 => 58,  135 => 47,  126 => 77,  114 => 42,  84 => 44,  70 => 20,  67 => 23,  61 => 30,  94 => 22,  89 => 20,  85 => 28,  75 => 23,  68 => 32,  56 => 9,  87 => 20,  21 => 2,  26 => 2,  93 => 28,  88 => 29,  78 => 36,  46 => 19,  27 => 4,  44 => 14,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 70,  158 => 67,  156 => 74,  151 => 63,  142 => 6,  138 => 57,  136 => 5,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 6,  25 => 3,  19 => 1,  79 => 18,  72 => 34,  69 => 54,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  157 => 56,  145 => 7,  139 => 50,  131 => 86,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 14,  66 => 31,  55 => 15,  52 => 21,  50 => 8,  43 => 8,  41 => 10,  35 => 10,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 84,  168 => 72,  164 => 59,  162 => 78,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 61,  103 => 37,  99 => 30,  95 => 29,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 20,  57 => 11,  54 => 18,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 5,  30 => 1,);
    }
}