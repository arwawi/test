<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_a20d53d146e6f93c2b72c3f4b46ec9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  ESPRIT - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        // line 8
        echo "  <ul class=\"thumbnails\">
      <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>
       <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>
       <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>
       <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>
       <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>
       <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>
       <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>
       <li class=\"span4\">
          <div class=\"thumbnail\">

              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.

                  <button class=\"btn btn-small btn-primary\" type=\"button\">Lire</button>
                  <button class=\"btn btn-small\" type=\"button\">Action</button>
              </p>
          </div>
      </li>

  </ul>
 
  <hr>
  ";
        // line 103
        echo "  ";
        $this->displayBlock('sdzblog_body', $context, $blocks);
    }

    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 104
        echo "  ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 104,  140 => 103,  43 => 6,  40 => 5,  33 => 3,  158 => 79,  139 => 63,  135 => 62,  131 => 61,  127 => 60,  123 => 59,  106 => 45,  101 => 43,  97 => 41,  85 => 32,  80 => 30,  76 => 28,  74 => 27,  63 => 19,  58 => 17,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 2,);
    }
}
