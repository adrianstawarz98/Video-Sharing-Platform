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

/* admin/my_profile.html.twig */
class __TwigTemplate_01b2ffe8f47b40c5cf286b4745b972c1d725c9021ba135a5d6544e9918fbce8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/my_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/my_profile.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/my_profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_mainadmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        // line 3
        echo "<h2>My profile <small><a onclick=\"return confirm('Are you sure?');\" href=\"#\">delete account</a></small></h2>
<p class=\"text-left\">My plan - Pro. <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\"
        href=\"#\">cancel plan</a></p>
<p class=\"text-left\">My plan - Free. <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
        echo "\">get paid plan</a></p>

<form class=\"mt-5\" method=\"POST\" action=\"#\">
    <div class=\"form-group\">
        <label for=\"vimeoapikey\">Vimeo API key</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"vimeoapikey\" placeholder=\"Enter api key\">
        <div class=\"invalid-feedback\">
            Please provide api key
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"name\" placeholder=\"Your name\">
        <div class=\"invalid-feedback\">
            Please provide your name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"lastname\">Last name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"lastname\" placeholder=\"Your last name\">
        <div class=\"invalid-feedback\">
            Please provide your last name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email address</label>
        <input required type=\"email\" class=\"form-control is-invalid\" id=\"email\" placeholder=\"Enter email\">
        <div class=\"invalid-feedback\">
            Please provide valid email address
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password\">Password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password\" placeholder=\"Password\">
        <div class=\"invalid-feedback\">
            Please provide password (min. 6 characters)
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password_confirmation\">Confirm password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password_confirmation\" placeholder=\"Confirm password\">
        <div class=\"invalid-feedback\">
            Please provide valid password confirmation
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/my_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block mainadmin %}
<h2>My profile <small><a onclick=\"return confirm('Are you sure?');\" href=\"#\">delete account</a></small></h2>
<p class=\"text-left\">My plan - Pro. <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\"
        href=\"#\">cancel plan</a></p>
<p class=\"text-left\">My plan - Free. <a href=\"{{path('payment')}}\">get paid plan</a></p>

<form class=\"mt-5\" method=\"POST\" action=\"#\">
    <div class=\"form-group\">
        <label for=\"vimeoapikey\">Vimeo API key</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"vimeoapikey\" placeholder=\"Enter api key\">
        <div class=\"invalid-feedback\">
            Please provide api key
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"name\" placeholder=\"Your name\">
        <div class=\"invalid-feedback\">
            Please provide your name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"lastname\">Last name</label>
        <input required type=\"text\" class=\"form-control is-invalid\" id=\"lastname\" placeholder=\"Your last name\">
        <div class=\"invalid-feedback\">
            Please provide your last name
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email address</label>
        <input required type=\"email\" class=\"form-control is-invalid\" id=\"email\" placeholder=\"Enter email\">
        <div class=\"invalid-feedback\">
            Please provide valid email address
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password\">Password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password\" placeholder=\"Password\">
        <div class=\"invalid-feedback\">
            Please provide password (min. 6 characters)
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"password_confirmation\">Confirm password</label>
        <input required type=\"password\" class=\"form-control is-invalid\" id=\"password_confirmation\" placeholder=\"Confirm password\">
        <div class=\"invalid-feedback\">
            Please provide valid password confirmation
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
</form>
{% endblock %}
", "admin/my_profile.html.twig", "E:\\Video-Sharing-Platform\\templates\\admin\\my_profile.html.twig");
    }
}
