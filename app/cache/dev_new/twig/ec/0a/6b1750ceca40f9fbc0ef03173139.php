<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ec0a6b1750ceca40f9fbc0ef03173139 extends Twig_Template
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
        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 91,  161 => 87,  152 => 82,  127 => 94,  102 => 69,  23 => 3,  65 => 21,  58 => 18,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 92,  143 => 56,  140 => 55,  132 => 5,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  87 => 20,  21 => 2,  26 => 2,  93 => 27,  88 => 29,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 89,  158 => 86,  156 => 66,  151 => 63,  142 => 59,  138 => 6,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 20,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 22,  47 => 14,  40 => 12,  37 => 11,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 81,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 68,  96 => 28,  83 => 26,  74 => 23,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 13,  41 => 7,  35 => 10,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 72,  164 => 59,  162 => 57,  154 => 54,  149 => 81,  147 => 58,  144 => 53,  141 => 7,  133 => 55,  130 => 41,  125 => 86,  122 => 85,  116 => 36,  112 => 42,  109 => 41,  106 => 70,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 27,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
