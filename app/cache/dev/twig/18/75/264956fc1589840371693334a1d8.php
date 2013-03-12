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
        if ($this->getContext($context, "error")) {
            // line 5
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
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
        return array (  69 => 54,  60 => 20,  48 => 11,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
