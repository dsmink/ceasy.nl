<?php

/* @bolt/editcontent/data/_uploads.twig */
class __TwigTemplate_8b5792a03bb47052073948202aab8d9dc3b6e982fe8567f81aad3c53b49ade26 extends Twig_Template
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
        $__internal_1bcfb561e23c018b3bb312d98396365e5884b38bd65924df7d9265baabd698f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcfb561e23c018b3bb312d98396365e5884b38bd65924df7d9265baabd698f0->enter($__internal_1bcfb561e23c018b3bb312d98396365e5884b38bd65924df7d9265baabd698f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/data/_uploads.twig"));

        // line 2
        echo "
";
        // line 3
        $context["template_upload_error"] = ('' === $tmp = "    <p>There was an error uploading the file. Make sure the file is not corrupt,
    and that the upload-folder is writable.</p>
    <p>Error message:<br><i>%ERROR%<i></p>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.uploads.template.error", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["template_upload_error"]) ? $context["template_upload_error"] : $this->getContext($context, "template_upload_error"))), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 12
        echo "
";
        // line 13
        $context["template_upload_too_large"] = ('' === $tmp = "    <p>File is too large:</p>
    <table>
        <tr><th>Name: </th><td>%FILENAME%</td></tr>
        <tr><th>Size: </th><td>%FILESIZE%</td></tr>
        <tr><th>Maximum size: </th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.uploads.template.large-file", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["template_upload_too_large"]) ? $context["template_upload_too_large"] : $this->getContext($context, "template_upload_too_large"))), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 25
        echo "
";
        // line 26
        $context["template_upload_wrong_type"] = ('' === $tmp = "    <p>File type not allowed:</p>
    <table>
        <tr><th>Name:</th><td>%FILENAME%</td></tr>
        <tr><th>Type:</th><td>%FILETYPE%</td></tr>
        <tr><th>Allowed types:</th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.uploads.template.wrong-type", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(trim((isset($context["template_upload_wrong_type"]) ? $context["template_upload_wrong_type"] : $this->getContext($context, "template_upload_wrong_type"))), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        
        $__internal_1bcfb561e23c018b3bb312d98396365e5884b38bd65924df7d9265baabd698f0->leave($__internal_1bcfb561e23c018b3bb312d98396365e5884b38bd65924df7d9265baabd698f0_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/data/_uploads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 35,  68 => 34,  60 => 26,  57 => 25,  52 => 22,  49 => 21,  41 => 13,  38 => 12,  33 => 9,  30 => 8,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{### Template: Upload errror ###}

{% set template_upload_error %}
    <p>There was an error uploading the file. Make sure the file is not corrupt,
    and that the upload-folder is writable.</p>
    <p>Error message:<br><i>%ERROR%<i></p>
{% endset %}

{{ data('field.uploads.template.error', template_upload_error|trim|preg_replace('/>\\\\s+</', '><')) }}

{### Template: Filesize too large ###}

{% set template_upload_too_large %}
    <p>File is too large:</p>
    <table>
        <tr><th>Name: </th><td>%FILENAME%</td></tr>
        <tr><th>Size: </th><td>%FILESIZE%</td></tr>
        <tr><th>Maximum size: </th><td>%ALLOWED%</td></tr>
    </table>
{% endset %}

{{ data('field.uploads.template.large-file', template_upload_too_large|trim|preg_replace('/>\\\\s+</', '><')) }}

{### Template: File has wrong type ###}

{% set template_upload_wrong_type %}
    <p>File type not allowed:</p>
    <table>
        <tr><th>Name:</th><td>%FILENAME%</td></tr>
        <tr><th>Type:</th><td>%FILETYPE%</td></tr>
        <tr><th>Allowed types:</th><td>%ALLOWED%</td></tr>
    </table>
{% endset %}

{{ data('field.uploads.template.wrong-type', template_upload_wrong_type|trim|preg_replace('/>\\\\s+</', '><')) }}
", "@bolt/editcontent/data/_uploads.twig", "app://view/twig/editcontent/data/_uploads.twig");
    }
}
