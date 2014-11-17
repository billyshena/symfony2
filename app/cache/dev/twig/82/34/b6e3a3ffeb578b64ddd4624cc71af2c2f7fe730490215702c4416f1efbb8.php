<?php

/* AcmeLoginBundle:Default:login.html.twig */
class __TwigTemplate_8234b6e3a3ffeb578b64ddd4624cc71af2c2f7fe730490215702c4416f1efbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>

    <!--------------------
    LOGIN FORM
    by: Amit Jakhu
    www.amitjakhu.com
    --------------------->

    <!--META-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Login Form</title>

    <!--STYLESHEETS-->
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    <!--SCRIPTS-->
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js\"></script>
    <!--Slider-in icons-->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".username\").focus(function() {
                \$(\".user-icon\").css(\"left\",\"-48px\");
            });
            \$(\".username\").blur(function() {
                \$(\".user-icon\").css(\"left\",\"0px\");
            });

            \$(\".password\").focus(function() {
                \$(\".pass-icon\").css(\"left\",\"-48px\");
            });
            \$(\".password\").blur(function() {
                \$(\".pass-icon\").css(\"left\",\"0px\");
            });
        });
    </script>

</head>
<body>

<!--WRAPPER-->
<div id=\"wrapper\">

    <!--SLIDE-IN ICONS-->
    <div class=\"user-icon\"></div>
    <div class=\"pass-icon\"></div>
    <!--END SLIDE-IN ICONS-->

    <!--LOGIN FORM-->
    <form name=\"login-form\" class=\"login-form\" action=\"\" method=\"post\">

        <!--HEADER-->
        <div class=\"header\">
            <!--TITLE--><h1>Login</h1><!--END TITLE-->
            <!--DESCRIPTION--><span>Fill out the form below to login to my super awesome imaginary control panel.</span><!--END DESCRIPTION-->
        </div>
        <!--END HEADER-->

        <!--CONTENT-->
        <div class=\"content\">
            <!--USERNAME--><input name=\"username\" type=\"text\" class=\"input username\" value=\"Username\" onfocus=\"this.value=''\" /><!--END USERNAME-->
            <!--PASSWORD--><input name=\"password\" type=\"password\" class=\"input password\" value=\"Password\" onfocus=\"this.value=''\" /><!--END PASSWORD-->
        </div>
        <!--END CONTENT-->

        <!--FOOTER-->
        <div class=\"footer\">
            <!--LOGIN BUTTON--><input type=\"submit\" name=\"submit\" value=\"Login\" class=\"button\" /><!--END LOGIN BUTTON-->
            <!--REGISTER BUTTON--><input type=\"submit\" name=\"submit\" value=\"Register\" class=\"register\" /><!--END REGISTER BUTTON-->
        </div>
        <!--END FOOTER-->

    </form>
    <!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class=\"gradient\"></div><!--END GRADIENT-->

</body>
</html>";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmelogin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
    }

    public function getTemplateName()
    {
        return "AcmeLoginBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 17,  109 => 16,  39 => 19,  37 => 16,  20 => 1,);
    }
}
