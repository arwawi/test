<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_1f0ab0948e00d9feb7668bb608f2cafd extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin")) {
            // line 13
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" >
            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        </span>

        <span id=\"field_actions_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 19
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                // line 20
                echo "                <a
                    href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-plus\"></i>
                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 30
            echo "        </span>

        <div style=\"display: none\" id=\"field_dialog_";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
        </div>
    </div>

    ";
            // line 36
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  48 => 21,  24 => 13,  22 => 12,  19 => 11,  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  756 => 174,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  683 => 146,  672 => 139,  670 => 138,  668 => 136,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  635 => 122,  631 => 121,  622 => 119,  616 => 117,  611 => 115,  608 => 114,  587 => 108,  571 => 104,  569 => 103,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  497 => 87,  488 => 82,  476 => 78,  474 => 77,  469 => 76,  466 => 75,  463 => 74,  448 => 71,  440 => 70,  438 => 69,  429 => 64,  412 => 60,  407 => 59,  387 => 50,  382 => 48,  369 => 43,  364 => 41,  350 => 35,  345 => 33,  334 => 27,  323 => 24,  314 => 21,  311 => 20,  290 => 14,  287 => 13,  278 => 8,  267 => 4,  260 => 330,  258 => 329,  246 => 323,  241 => 321,  231 => 306,  218 => 286,  215 => 285,  210 => 273,  195 => 252,  192 => 251,  187 => 241,  174 => 214,  159 => 193,  154 => 186,  141 => 172,  136 => 165,  131 => 157,  129 => 145,  126 => 144,  119 => 114,  116 => 113,  114 => 108,  111 => 107,  109 => 102,  94 => 57,  50 => 11,  28 => 3,  26 => 2,  20 => 1,  686 => 206,  680 => 145,  677 => 202,  675 => 201,  669 => 137,  659 => 197,  654 => 195,  642 => 193,  639 => 123,  636 => 191,  627 => 120,  624 => 184,  607 => 182,  590 => 109,  585 => 179,  581 => 178,  578 => 177,  562 => 169,  560 => 168,  538 => 165,  517 => 163,  509 => 161,  506 => 160,  503 => 159,  500 => 88,  498 => 157,  495 => 156,  486 => 151,  482 => 80,  480 => 148,  477 => 147,  475 => 146,  472 => 145,  468 => 125,  462 => 123,  450 => 72,  443 => 140,  437 => 138,  435 => 68,  432 => 136,  426 => 133,  423 => 132,  421 => 62,  416 => 61,  405 => 58,  402 => 57,  400 => 119,  391 => 118,  386 => 115,  380 => 112,  377 => 111,  371 => 109,  366 => 107,  359 => 106,  356 => 37,  353 => 36,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  324 => 92,  321 => 23,  318 => 90,  312 => 88,  310 => 87,  298 => 84,  286 => 80,  282 => 79,  277 => 78,  274 => 77,  272 => 6,  250 => 325,  243 => 65,  238 => 319,  236 => 313,  228 => 305,  223 => 297,  197 => 261,  178 => 45,  152 => 38,  149 => 179,  146 => 178,  139 => 166,  115 => 27,  107 => 24,  101 => 86,  95 => 20,  90 => 18,  87 => 17,  84 => 41,  81 => 40,  79 => 32,  57 => 24,  52 => 22,  44 => 74,  42 => 8,  34 => 53,  301 => 136,  295 => 16,  292 => 15,  281 => 128,  275 => 126,  269 => 5,  263 => 71,  257 => 120,  254 => 327,  249 => 117,  245 => 114,  233 => 312,  227 => 104,  221 => 101,  216 => 99,  213 => 274,  202 => 265,  196 => 90,  186 => 87,  181 => 85,  175 => 43,  169 => 207,  160 => 76,  150 => 72,  144 => 173,  132 => 59,  123 => 30,  120 => 56,  104 => 87,  98 => 21,  92 => 19,  78 => 40,  75 => 39,  70 => 33,  62 => 156,  59 => 155,  54 => 12,  51 => 24,  38 => 17,  613 => 116,  610 => 204,  605 => 199,  598 => 195,  592 => 110,  588 => 190,  586 => 189,  583 => 188,  577 => 186,  575 => 176,  572 => 175,  566 => 102,  564 => 181,  561 => 180,  555 => 167,  553 => 177,  550 => 176,  544 => 174,  542 => 173,  539 => 172,  536 => 171,  531 => 159,  527 => 128,  521 => 164,  512 => 162,  507 => 123,  502 => 89,  499 => 121,  494 => 120,  491 => 119,  485 => 81,  481 => 109,  478 => 108,  470 => 105,  464 => 104,  456 => 121,  453 => 120,  449 => 100,  444 => 98,  441 => 97,  436 => 96,  433 => 95,  430 => 94,  424 => 93,  417 => 87,  411 => 86,  406 => 85,  403 => 84,  397 => 48,  393 => 52,  389 => 46,  384 => 49,  379 => 47,  375 => 110,  370 => 40,  367 => 42,  361 => 36,  357 => 35,  351 => 32,  347 => 34,  342 => 32,  339 => 28,  336 => 27,  329 => 26,  327 => 204,  322 => 201,  320 => 171,  316 => 22,  313 => 169,  307 => 166,  304 => 165,  302 => 86,  296 => 160,  294 => 159,  289 => 81,  285 => 154,  279 => 152,  276 => 151,  273 => 150,  259 => 149,  253 => 147,  248 => 324,  242 => 142,  234 => 140,  229 => 138,  226 => 298,  203 => 56,  200 => 262,  198 => 132,  191 => 50,  184 => 239,  179 => 222,  176 => 220,  173 => 42,  171 => 213,  166 => 206,  164 => 200,  157 => 41,  155 => 74,  143 => 71,  137 => 66,  133 => 67,  130 => 66,  106 => 101,  103 => 60,  86 => 46,  80 => 36,  74 => 20,  61 => 2,  56 => 27,  47 => 75,  45 => 20,  41 => 17,  39 => 18,  33 => 15,  31 => 4,  264 => 3,  261 => 71,  256 => 328,  252 => 326,  247 => 66,  244 => 322,  237 => 109,  232 => 139,  230 => 62,  225 => 60,  220 => 295,  217 => 58,  211 => 97,  208 => 268,  205 => 267,  199 => 52,  193 => 129,  190 => 242,  188 => 48,  185 => 47,  182 => 223,  177 => 42,  172 => 16,  167 => 76,  163 => 74,  161 => 199,  156 => 192,  153 => 43,  151 => 185,  148 => 41,  140 => 67,  134 => 158,  128 => 58,  125 => 34,  121 => 128,  112 => 26,  110 => 25,  105 => 26,  89 => 47,  83 => 58,  76 => 31,  72 => 191,  67 => 175,  64 => 3,  58 => 38,  53 => 10,  40 => 7,  37 => 54,  35 => 5,  32 => 13,  29 => 14,  23 => 1,  127 => 65,  124 => 129,  118 => 28,  113 => 40,  108 => 38,  102 => 36,  99 => 68,  96 => 67,  91 => 56,  85 => 30,  82 => 29,  77 => 27,  71 => 19,  69 => 30,  66 => 12,  63 => 27,  55 => 11,  49 => 103,  46 => 21,  43 => 19,  12 => 45,);
    }
}
