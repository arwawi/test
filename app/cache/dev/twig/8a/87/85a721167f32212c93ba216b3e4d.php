<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_8a8785a721167f32212c93ba216b3e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  28 => 3,  26 => 2,  20 => 1,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  560 => 168,  538 => 165,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 147,  475 => 146,  472 => 145,  468 => 125,  462 => 123,  450 => 119,  443 => 140,  437 => 138,  435 => 137,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 119,  391 => 118,  386 => 115,  380 => 112,  377 => 111,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  324 => 92,  321 => 91,  318 => 90,  312 => 88,  310 => 87,  298 => 84,  286 => 80,  282 => 79,  277 => 78,  274 => 77,  272 => 76,  250 => 67,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  197 => 54,  178 => 45,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  115 => 27,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  57 => 145,  52 => 104,  44 => 74,  42 => 8,  34 => 53,  301 => 136,  295 => 134,  292 => 133,  281 => 128,  275 => 126,  269 => 75,  263 => 71,  257 => 120,  254 => 68,  249 => 117,  245 => 114,  233 => 62,  227 => 104,  221 => 101,  216 => 99,  213 => 98,  202 => 93,  196 => 90,  186 => 87,  181 => 85,  175 => 43,  169 => 79,  160 => 76,  150 => 72,  144 => 33,  132 => 59,  123 => 30,  120 => 56,  104 => 23,  98 => 21,  92 => 19,  78 => 40,  75 => 39,  70 => 33,  62 => 156,  59 => 155,  54 => 12,  51 => 24,  38 => 17,  613 => 205,  610 => 204,  605 => 199,  598 => 195,  592 => 192,  588 => 190,  586 => 189,  583 => 188,  577 => 186,  575 => 176,  572 => 175,  566 => 171,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 176,  544 => 174,  542 => 173,  539 => 172,  536 => 171,  531 => 159,  527 => 128,  521 => 164,  512 => 162,  507 => 123,  502 => 122,  499 => 121,  494 => 120,  491 => 119,  485 => 110,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  456 => 121,  453 => 120,  449 => 100,  444 => 98,  441 => 97,  436 => 96,  433 => 95,  430 => 94,  424 => 93,  417 => 87,  411 => 86,  406 => 85,  403 => 84,  397 => 48,  393 => 47,  389 => 46,  384 => 44,  379 => 42,  375 => 110,  370 => 40,  367 => 39,  361 => 36,  357 => 35,  351 => 32,  347 => 31,  342 => 29,  339 => 28,  336 => 27,  329 => 93,  327 => 204,  322 => 201,  320 => 171,  316 => 170,  313 => 169,  307 => 166,  304 => 165,  302 => 86,  296 => 160,  294 => 159,  289 => 81,  285 => 154,  279 => 152,  276 => 151,  273 => 150,  259 => 149,  253 => 147,  248 => 144,  242 => 142,  234 => 140,  229 => 138,  226 => 137,  203 => 56,  200 => 55,  198 => 132,  191 => 50,  184 => 47,  179 => 111,  176 => 110,  173 => 42,  171 => 93,  166 => 90,  164 => 77,  157 => 41,  155 => 74,  143 => 71,  137 => 66,  133 => 67,  130 => 66,  106 => 61,  103 => 60,  86 => 43,  80 => 41,  74 => 55,  61 => 39,  56 => 27,  47 => 75,  45 => 9,  41 => 17,  39 => 61,  33 => 13,  31 => 4,  264 => 72,  261 => 71,  256 => 69,  252 => 118,  247 => 66,  244 => 66,  237 => 109,  232 => 139,  230 => 62,  225 => 60,  220 => 59,  217 => 58,  211 => 97,  208 => 57,  205 => 135,  199 => 52,  193 => 129,  190 => 49,  188 => 48,  185 => 47,  182 => 46,  177 => 42,  172 => 16,  167 => 76,  163 => 74,  161 => 46,  156 => 44,  153 => 43,  151 => 42,  148 => 41,  140 => 67,  134 => 60,  128 => 58,  125 => 34,  121 => 29,  112 => 26,  110 => 25,  105 => 26,  89 => 21,  83 => 58,  76 => 13,  72 => 191,  67 => 175,  64 => 174,  58 => 38,  53 => 10,  40 => 7,  37 => 54,  35 => 5,  32 => 13,  29 => 11,  23 => 1,  127 => 65,  124 => 47,  118 => 28,  113 => 40,  108 => 38,  102 => 36,  99 => 24,  96 => 34,  91 => 22,  85 => 30,  82 => 29,  77 => 27,  71 => 25,  69 => 190,  66 => 23,  63 => 14,  55 => 11,  49 => 103,  46 => 21,  43 => 20,  12 => 45,);
    }
}
