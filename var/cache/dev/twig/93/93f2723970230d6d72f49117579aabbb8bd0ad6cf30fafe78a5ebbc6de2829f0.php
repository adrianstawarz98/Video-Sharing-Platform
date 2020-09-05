<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front/video_details.html.twig */
class __TwigTemplate_212414f43ccec40a4c5028e385f835af7aae53429d5eabec0eea2c72f9f2b3e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/video_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<br>
<h1>Video title</h1>
<div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
    <iframe class=\"\" src=\"https://player.vimeo.com/video/289729765\" frameborder=\"0\" allowfullscreen></iframe>
</div>

<hr>

<div class=\"row m-2\">
    <a id=\"video_comments\"></a>

   ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "
    <ul class=\"list-unstyled text-left\">
        <li class=\"media\">
            <img class=\"mr-3\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.jpg"), "html", null, true);
            echo "\" alt=\"Generic placeholder image\">
            <div class=\"media-body\">
                <h5 class=\"mt-0 mb-1\"><b>John Doe</b> <small class=\"text-muted\">added a comment <small><b>3 days ago</b></small></small></h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </li>
    </ul>
    <hr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <form method=\"POST\" action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details");
        echo "#video_comments\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\">Add a comment</label>
                <textarea required class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add</button>

        </form>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/video_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  109 => 32,  91 => 20,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}

<br>
<h1>Video title</h1>
<div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
    <iframe class=\"\" src=\"https://player.vimeo.com/video/289729765\" frameborder=\"0\" allowfullscreen></iframe>
</div>

<hr>

<div class=\"row m-2\">
    <a id=\"video_comments\"></a>

   {% for i in 1..6 %}

    <ul class=\"list-unstyled text-left\">
        <li class=\"media\">
            <img class=\"mr-3\" src=\"{{asset('assets/img/user.jpg')}}\" alt=\"Generic placeholder image\">
            <div class=\"media-body\">
                <h5 class=\"mt-0 mb-1\"><b>John Doe</b> <small class=\"text-muted\">added a comment <small><b>3 days ago</b></small></small></h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </li>
    </ul>
    <hr>

    {% endfor %}

</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <form method=\"POST\" action=\"{{path('video_details')}}#video_comments\">
            <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\">Add a comment</label>
                <textarea required class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add</button>

        </form>
    </div>
</div>
{% endblock %}
", "front/video_details.html.twig", "E:\\Video-Sharing-Platform\\templates\\front\\video_details.html.twig");
    }
}
