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

/* front/pricing.html.twig */
class __TwigTemplate_bb343d5f1a468825ab44d80ada14946b0f455f612016bb2b9d15e2853fac0925 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pricing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/pricing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "<div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4\">Pricing</h1>
    <p class=\"lead\">Watch the best videos on the planet. Choose a plan that is right for you. Downgrade or upgrade at
        any time.
    </p>
</div>

<div class=\"container\">
    <div class=\"card-deck mb-3 text-center\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">Free</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$0 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Access for one month</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">Pro</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$15 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"btn btn-lg btn-block btn-primary\">Get started</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">Enterprise</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$29 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>Ultra HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                    <li>Unlimited live events</li>
                </ul>
                <a role=\"button\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"btn btn-lg btn-block btn-primary\">Contact us</a>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  107 => 37,  89 => 22,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
<div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4\">Pricing</h1>
    <p class=\"lead\">Watch the best videos on the planet. Choose a plan that is right for you. Downgrade or upgrade at
        any time.
    </p>
</div>

<div class=\"container\">
    <div class=\"card-deck mb-3 text-center\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">Free</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$0 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Access for one month</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"{{path('register')}}\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">Pro</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$15 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"{{path('register')}}\" class=\"btn btn-lg btn-block btn-primary\">Get started</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">Enterprise</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$29 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>Ultra HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                    <li>Unlimited live events</li>
                </ul>
                <a role=\"button\" href=\"{{path('register')}}\" class=\"btn btn-lg btn-block btn-primary\">Contact us</a>
            </div>
        </div>
    </div>

</div>
{% endblock %}

", "front/pricing.html.twig", "E:\\Video-Sharing-Platform\\templates\\front\\pricing.html.twig");
    }
}
