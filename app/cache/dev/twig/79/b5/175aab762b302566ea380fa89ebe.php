<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_79b5175aab762b302566ea380fa89ebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  145 => 62,  139 => 61,  129 => 55,  121 => 52,  118 => 51,  115 => 50,  111 => 48,  100 => 45,  97 => 44,  93 => 43,  78 => 35,  70 => 32,  49 => 24,  36 => 16,  613 => 205,  610 => 204,  605 => 199,  598 => 195,  592 => 192,  588 => 190,  586 => 189,  583 => 188,  577 => 186,  575 => 185,  572 => 184,  566 => 182,  564 => 181,  561 => 180,  555 => 178,  553 => 177,  550 => 176,  544 => 174,  542 => 173,  539 => 172,  536 => 171,  531 => 159,  527 => 128,  521 => 127,  512 => 124,  507 => 123,  502 => 122,  499 => 121,  494 => 120,  491 => 119,  485 => 110,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  456 => 102,  453 => 101,  449 => 100,  444 => 98,  441 => 97,  436 => 96,  433 => 95,  430 => 94,  424 => 93,  417 => 87,  411 => 86,  406 => 85,  403 => 84,  397 => 48,  393 => 47,  389 => 46,  384 => 44,  379 => 42,  375 => 41,  370 => 40,  367 => 39,  361 => 36,  357 => 35,  351 => 32,  347 => 31,  342 => 29,  339 => 28,  336 => 27,  329 => 211,  327 => 204,  322 => 201,  320 => 171,  316 => 170,  313 => 169,  307 => 166,  304 => 165,  302 => 164,  296 => 160,  294 => 159,  289 => 156,  285 => 154,  279 => 152,  276 => 151,  273 => 150,  259 => 149,  253 => 147,  248 => 144,  242 => 142,  234 => 140,  232 => 139,  229 => 138,  226 => 137,  208 => 136,  205 => 135,  203 => 134,  200 => 133,  198 => 132,  193 => 129,  191 => 119,  184 => 114,  179 => 111,  176 => 110,  173 => 94,  171 => 93,  166 => 90,  164 => 84,  157 => 82,  155 => 81,  143 => 71,  137 => 69,  133 => 57,  130 => 66,  127 => 54,  110 => 63,  106 => 61,  103 => 60,  86 => 39,  83 => 58,  80 => 57,  74 => 55,  72 => 54,  67 => 31,  63 => 50,  61 => 39,  58 => 38,  56 => 26,  47 => 20,  45 => 19,  43 => 18,  41 => 19,  37 => 15,  35 => 14,  33 => 13,  31 => 15,  29 => 11,  88 => 40,  82 => 37,  76 => 34,  73 => 27,  69 => 26,  65 => 30,  59 => 27,  53 => 25,  50 => 20,  46 => 19,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
