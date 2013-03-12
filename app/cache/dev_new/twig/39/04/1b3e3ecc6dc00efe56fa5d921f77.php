<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_39041b3e3ecc6dc00efe56fa5d921f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 81,  165 => 79,  153 => 73,  129 => 78,  124 => 73,  110 => 62,  102 => 60,  23 => 3,  90 => 31,  76 => 25,  63 => 21,  59 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 24,  38 => 6,  155 => 58,  135 => 47,  126 => 77,  114 => 42,  84 => 44,  70 => 20,  67 => 23,  61 => 30,  94 => 22,  89 => 20,  85 => 28,  75 => 23,  68 => 32,  56 => 9,  87 => 20,  21 => 2,  26 => 11,  93 => 28,  88 => 29,  78 => 36,  46 => 19,  27 => 4,  44 => 14,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 70,  158 => 67,  156 => 74,  151 => 63,  142 => 6,  138 => 57,  136 => 5,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 6,  25 => 3,  19 => 1,  79 => 18,  72 => 34,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 32,  157 => 56,  145 => 7,  139 => 50,  131 => 86,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 14,  66 => 31,  55 => 15,  52 => 21,  50 => 8,  43 => 8,  41 => 7,  35 => 10,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 84,  168 => 72,  164 => 59,  162 => 78,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 61,  103 => 37,  99 => 30,  95 => 29,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 18,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
