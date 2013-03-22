<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_682e3fce30ba0db8cca8a0278b9e0dd9 extends Twig_Template
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
        return array (  50 => 11,  45 => 9,  31 => 4,  28 => 3,  26 => 2,  20 => 1,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  560 => 168,  555 => 167,  538 => 165,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 147,  475 => 146,  472 => 145,  468 => 125,  462 => 123,  456 => 121,  453 => 120,  450 => 119,  443 => 140,  437 => 138,  435 => 137,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 119,  391 => 118,  386 => 115,  380 => 112,  377 => 111,  375 => 110,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  329 => 93,  324 => 92,  321 => 91,  318 => 90,  312 => 88,  310 => 87,  302 => 86,  298 => 84,  286 => 80,  282 => 79,  277 => 78,  274 => 77,  272 => 76,  250 => 67,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  203 => 56,  200 => 55,  197 => 54,  178 => 45,  173 => 42,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  115 => 27,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  57 => 145,  52 => 104,  47 => 75,  44 => 74,  42 => 8,  39 => 61,  34 => 53,  301 => 136,  295 => 134,  292 => 133,  289 => 81,  281 => 128,  275 => 126,  269 => 75,  263 => 71,  257 => 120,  254 => 68,  249 => 117,  245 => 114,  233 => 62,  227 => 104,  221 => 101,  216 => 99,  213 => 98,  202 => 93,  196 => 90,  191 => 50,  186 => 87,  184 => 47,  181 => 85,  175 => 43,  169 => 79,  164 => 77,  160 => 76,  157 => 41,  155 => 74,  150 => 72,  144 => 33,  137 => 66,  132 => 59,  123 => 30,  120 => 56,  104 => 23,  98 => 21,  92 => 19,  86 => 43,  80 => 41,  78 => 40,  75 => 39,  70 => 33,  62 => 156,  59 => 155,  54 => 12,  51 => 24,  38 => 17,  264 => 72,  261 => 71,  256 => 69,  252 => 118,  247 => 66,  244 => 66,  237 => 109,  232 => 63,  230 => 62,  225 => 60,  220 => 59,  217 => 58,  211 => 97,  208 => 57,  205 => 54,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  185 => 47,  182 => 46,  177 => 42,  172 => 16,  167 => 76,  163 => 74,  161 => 46,  156 => 44,  153 => 43,  151 => 42,  148 => 41,  140 => 67,  134 => 60,  128 => 58,  125 => 34,  121 => 29,  112 => 26,  110 => 25,  105 => 26,  89 => 21,  83 => 20,  76 => 13,  72 => 191,  67 => 175,  64 => 174,  58 => 12,  53 => 10,  40 => 7,  37 => 54,  35 => 5,  32 => 13,  29 => 11,  23 => 1,  127 => 48,  124 => 47,  118 => 28,  113 => 40,  108 => 38,  102 => 36,  99 => 24,  96 => 34,  91 => 22,  85 => 30,  82 => 29,  77 => 27,  71 => 25,  69 => 190,  66 => 23,  63 => 14,  55 => 11,  49 => 103,  46 => 21,  43 => 20,  12 => 45,);
    }
}
