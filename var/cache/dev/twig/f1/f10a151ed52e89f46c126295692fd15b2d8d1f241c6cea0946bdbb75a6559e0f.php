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

/* front/register.html.twig */
class __TwigTemplate_a0a730034f5b340b970f61fae6abf96ddce7e962fb84af3e425392b598ab181b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'customjavascripts' => [$this, 'block_customjavascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/register.html.twig", 1);
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
        echo "<div class=\"row mt-5\">
    <div class=\"col-md-4 order-md-2 mb-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">1</span>
        </h4>
        <ul class=\"list-group mb-3\">
            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">Pro plan</h6>
                </div>
                <span class=\"text-muted\">\$15</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between bg-light\">
                <div class=\"text-success\">
                    <h6 class=\"my-0\">Promo code</h6>
                    <small>EXAMPLECODE</small>
                </div>
                <span class=\"text-success\">-\$0</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between\">
                <span>Total (USD)</span>
                <strong>\$15</strong>
            </li>
        </ul>
    </div>

    <div class=\"col-md-8 order-md-1\">
        <h4 class=\"mb-3\">Register first (free)</h4>
        <form method=\"POST\" action=\"#\" class=\"needs-validation\" novalidate>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"firstName\">First name</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"\" value=\"\" required>
                    <div class=\"invalid-feedback\">
                        Valid first name is required.
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"lastName\">Last name</label>
                    <input type=\"text\" class=\"form-control\" id=\"lastName\" placeholder=\"\" value=\"\" required>
                    <div class=\"invalid-feedback\">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"email\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"you@example.com\" required>
                <div class=\"invalid-feedback\">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"password\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" required>
                <div class=\"invalid-feedback\">
                    Please enter a valid password (min 6 characters).
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"confirm_password\">Confirm Password</label>
                <input type=\"password\" class=\"form-control\" id=\"confirm_password\" required>
                <div class=\"invalid-feedback\">
                    Please enter a valid password confirmation (min 6 characters).
                </div>
            </div>

            <hr class=\"mb-4\">
            <a href=\"admin/index.php\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Register</a>
        </form>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_customjavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        // line 82
        echo "<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('click', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


    var password = document.getElementById(\"password\"), confirm_password = document.getElementById(\"confirm_password\");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity(\"Passwords Don't Match\");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 82,  156 => 81,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
<div class=\"row mt-5\">
    <div class=\"col-md-4 order-md-2 mb-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">1</span>
        </h4>
        <ul class=\"list-group mb-3\">
            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">Pro plan</h6>
                </div>
                <span class=\"text-muted\">\$15</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between bg-light\">
                <div class=\"text-success\">
                    <h6 class=\"my-0\">Promo code</h6>
                    <small>EXAMPLECODE</small>
                </div>
                <span class=\"text-success\">-\$0</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between\">
                <span>Total (USD)</span>
                <strong>\$15</strong>
            </li>
        </ul>
    </div>

    <div class=\"col-md-8 order-md-1\">
        <h4 class=\"mb-3\">Register first (free)</h4>
        <form method=\"POST\" action=\"#\" class=\"needs-validation\" novalidate>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label for=\"firstName\">First name</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"\" value=\"\" required>
                    <div class=\"invalid-feedback\">
                        Valid first name is required.
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label for=\"lastName\">Last name</label>
                    <input type=\"text\" class=\"form-control\" id=\"lastName\" placeholder=\"\" value=\"\" required>
                    <div class=\"invalid-feedback\">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"email\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"you@example.com\" required>
                <div class=\"invalid-feedback\">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"password\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" required>
                <div class=\"invalid-feedback\">
                    Please enter a valid password (min 6 characters).
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"confirm_password\">Confirm Password</label>
                <input type=\"password\" class=\"form-control\" id=\"confirm_password\" required>
                <div class=\"invalid-feedback\">
                    Please enter a valid password confirmation (min 6 characters).
                </div>
            </div>

            <hr class=\"mb-4\">
            <a href=\"admin/index.php\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Register</a>
        </form>

    </div>
</div>
{% endblock %}
{% block customjavascripts %}
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('click', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


    var password = document.getElementById(\"password\"), confirm_password = document.getElementById(\"confirm_password\");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity(\"Passwords Don't Match\");
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
{% endblock %}


", "front/register.html.twig", "E:\\Video-Sharing-Platform\\templates\\front\\register.html.twig");
    }
}
