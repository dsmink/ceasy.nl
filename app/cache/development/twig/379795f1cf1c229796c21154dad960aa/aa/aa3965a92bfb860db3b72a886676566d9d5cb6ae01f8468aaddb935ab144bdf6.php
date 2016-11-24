<?php

/* partials/_social.twig */
class __TwigTemplate_5f643ae43d19c377357de62f52b8c6306167da2f94f225c274ea83e481d93d34 extends Twig_Template
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
        $__internal_54e867b7a136e005ca3697e358ddcc95ea92443b6059c82a0cb4f58a18b5a826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e867b7a136e005ca3697e358ddcc95ea92443b6059c82a0cb4f58a18b5a826->enter($__internal_54e867b7a136e005ca3697e358ddcc95ea92443b6059c82a0cb4f58a18b5a826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_social.twig"));

        // line 1
        echo "<aside class=\"social\">
    <span class='st_facebook_hcount' displayText='Facebook'></span>
    <span class='st_twitter_hcount' displayText='Tweet'></span>
    <span class='st_googleplus_hcount' displayText='Google +'></span>
    <span class='st_email_hcount' displayText='Email'></span>
    <span class='st__hcount' displayText=''></span>
</aside>";
        
        $__internal_54e867b7a136e005ca3697e358ddcc95ea92443b6059c82a0cb4f58a18b5a826->leave($__internal_54e867b7a136e005ca3697e358ddcc95ea92443b6059c82a0cb4f58a18b5a826_prof);

    }

    public function getTemplateName()
    {
        return "partials/_social.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"social\">
    <span class='st_facebook_hcount' displayText='Facebook'></span>
    <span class='st_twitter_hcount' displayText='Tweet'></span>
    <span class='st_googleplus_hcount' displayText='Google +'></span>
    <span class='st_email_hcount' displayText='Email'></span>
    <span class='st__hcount' displayText=''></span>
</aside>", "partials/_social.twig", "theme://partials/_social.twig");
    }
}
