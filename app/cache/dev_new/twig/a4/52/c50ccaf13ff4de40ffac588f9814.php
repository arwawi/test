<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_a452c50ccaf13ff4de40ffac588f9814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  167 => 91,  161 => 87,  152 => 82,  127 => 94,  102 => 69,  23 => 3,  65 => 21,  58 => 17,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 92,  143 => 56,  140 => 103,  132 => 5,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 18,  61 => 13,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  87 => 20,  21 => 2,  26 => 9,  93 => 27,  88 => 29,  78 => 21,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 89,  158 => 86,  156 => 66,  151 => 63,  142 => 59,  138 => 6,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 20,  49 => 13,  24 => 6,  25 => 35,  19 => 1,  79 => 18,  72 => 20,  69 => 22,  47 => 14,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 81,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 68,  96 => 28,  83 => 26,  74 => 23,  66 => 15,  55 => 12,  52 => 14,  50 => 8,  43 => 11,  41 => 10,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 72,  164 => 59,  162 => 57,  154 => 54,  149 => 81,  147 => 104,  144 => 53,  141 => 7,  133 => 55,  130 => 41,  125 => 86,  122 => 85,  116 => 36,  112 => 42,  109 => 41,  106 => 70,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 27,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 14,  57 => 12,  54 => 10,  51 => 11,  48 => 9,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
