<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/octo/templates/page--front.html.twig */
class __TwigTemplate_c57a2687409842e9bf41e106c2c99a272589ac72e0dc1760a687fa5531d2171e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 48
        echo "<header class=\"header\" role=\"banner\">
\t<div class=\"header-top\">
\t\t<div class=\"container\">
\t\t\t";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top", [])), "html", null, true);
        echo "
\t\t</div>
\t</div>
\t<div class=\"header-nav container\">
\t\t";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
\t\t<!--<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</button>

\t\t\t<h1 class=\"logo\">
\t\t\t\t<a href=\"index.html\" title=\"Home\" rel=\"home\" id=\"logo\">
\t\t\t\t\t<img src=\"img/logo.png\" alt=\"Home\">
\t\t\t\t</a>
\t\t\t</h1>
\t\t</div>
\t\t<div class=\"navbar-search\">
\t\t\t<div class=\"search-icons\">
\t\t\t\t<a class=\"open-form\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t<a class=\"close-form\"><i class=\"fa fa-times\"></i></a>
\t\t\t</div>

\t\t\t<div class=\"region region-header-search\">
\t\t\t\t<div class=\"search-block-form block\" id=\"block-octo-search\" role=\"search\">

\t\t\t\t\t<form action=\"/search/node\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\">
\t\t\t\t\t\t<div class=\"form-item form-type-search form-item-keys form-no-label\">
\t\t\t\t\t\t\t<input title=\"Enter the terms you wish to search for.\" class=\"search form-search form-control\" placeholder=\"Search\" type=\"search\" id=\"edit-keys\" name=\"keys\" value=\"\" size=\"15\" maxlength=\"128\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-actions form-wrapper\" id=\"edit-actions\">
\t\t\t\t\t\t\t<input type=\"submit\" id=\"edit-submit\" name=\"\" value=\"Search\" class=\"button form-submit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>-->
\t\t<div class=\"navbar-main navbar-collapse collapse\">
\t\t\t<ul class=\"nav nav-pills nav-main\">
\t\t\t\t<li><a href=\"index.html\" class=\"is-active\">Home</a></li>
\t\t\t\t<li><a href=\"about-us.html\">About Us</a></li>
\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</header>
<section class=\"intro\" id=\"section1\" data-speed=\"5\" data-type=\"background\" style=\"background-position: 50% 0px;\">
\t<div class=\"overlay\">
    <div class=\"headline\">
      <div class=\"region region-headline\">
        <div class=\"flexslider\">
\t        <ul class=\"slides\">
            <li class=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">
              <h2>Creative control</h2>
              <p>Digital agencies have more flexibility in design.</p>
            </li>
            <li class=\"flex-active-slide\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;\">
              <h2>Custom Block Layouts</h2>
              <p>Endless possibilities to re-use blocks.</p>
            </li>
            <li class=\"\" style=\"width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;\">
              <h2>Twig Templates</h2>
              <p>Bringing designers and developers closer together</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
\t<a href=\"#\" id=\"goto-section2\" class=\"arrow-down\">Get started</a>
</section>
<main role=\"main\" class=\"main\">
        <div class=\"layout-content\">

            <section id=\"section2\" class=\"section\">
                <div class=\"container\">

                    <div class=\"region region-before-content\">

                        <div id=\"block-ourservices\" class=\"block\">
                            <h2 class=\"block-title\">Drupal 8</h2>
                            <hr>
                            <p class=\"block-subtitle\">We bring you an awesomeness of design, creative skills, thoughts, and ideas.</p>
                        </div>

                        <div id=\"block-ourfeatures\" class=\"block\">

                            <div class=\"row\">

                                <div class=\"col-sm-4\">
                                    <div class=\"service\">
                                        <div class=\"service-icon\"><i class=\"fa fa-file-code-o\"></i></div>
                                        <h4>Twig Templates</h4>
                                        <p>Donec consectetur metus eget felis commodo, ut iaculis mi dignissim. Maecenas in suscipit libero, in dictum metus</p>
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                                    <div class=\"service\">
                                        <div class=\"service-icon\"><i class=\"fa fa-server\"></i></div>
                                        <h4>Custom Block Layouts</h4>
                                        <p>Donec consectetur metus eget felis commodo, ut iaculis mi dignissim. Maecenas in suscipit libero, in dictum metus</p>
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                                    <div class=\"service\">
                                        <div class=\"service-icon\"><i class=\"fa fa-mobile\"></i></div>
                                        <h4>Fully responsive</h4>
                                        <p>Donec consectetur metus eget felis commodo, ut iaculis mi dignissim. Maecenas in suscipit libero, in dictum metus</p>
                                    </div>
                                </div>

                            </div>

                            <div class=\"row\">

                                <div class=\"col-sm-4\">
                                    <div class=\"service\">
                                        <div class=\"service-icon\"><i class=\"fa fa-html5\"></i></div>
                                        <h4>Clean modern design</h4>
                                        <p>Donec consectetur metus eget felis commodo, ut iaculis mi dignissim. Maecenas in suscipit libero, in dictum metus</p>
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                                    <div class=\"service\">
                                        <div class=\"service-icon\"><i class=\"fa fa-drupal\"></i></div>
                                        <h4>Views in Core</h4>
                                        <p>Donec consectetur metus eget felis commodo, ut iaculis mi dignissim. Maecenas in suscipit libero, in dictum metus</p>
                                    </div>
                                </div>

                                <div class=\"col-sm-4\">
                                    <div class=\"service\">
                                        <div class=\"service-icon\"><i class=\"fa fa-cogs\"></i></div>
                                        <h4>Wysiwyg options</h4>
                                        <p>Donec consectetur metus eget felis commodo, ut iaculis mi dignissim. Maecenas in suscipit libero, in dictum metus</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>
    </main>
<footer id=\"footer\" role=\"contentinfo\">
\t<div class=\"container main-footer\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h2>Newsletter</h2>
\t\t\t\t<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
\t\t\t\t<form id=\"newsletterForm\" action=\"\" method=\"POST\" novalidate=\"novalidate\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Email Address\" name=\"newsletterEmail\" id=\"newsletterEmail\" type=\"text\">
\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"submit\">Go!</button></span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h2>About Us</h2>
\t\t\t\t<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h2>Contact Us</h2>
\t\t\t\t<ul class=\"contact\">
\t\t\t\t\t<li><i class=\"fa fa-map-marker\"></i><strong>Address:</strong> 1234 Street Name, City Name, United States</li>
\t\t\t\t\t<li><i class=\"fa fa-phone\"></i> <strong>Phone:</strong> (123) 456-7890</li>
\t\t\t\t\t<li><i class=\"fa fa-envelope\"></i> <strong>Email:</strong><a href=\"mailto:mail@example.com\">mail@example.com</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<p>All Rights Reserved © Octo | Designed &amp; Developed By Chaz Chumley</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t\t<li><a class=\"button--icon\" target=\"_blank\" href=\"https://www.facebook.com/PacktPub\" title=\"\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a class=\"button--icon\" target=\"_blank\" href=\"https://www.linkedin.com/company/packt-publishing\" title=\"\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t<li><a class=\"button--icon\" target=\"_blank\" href=\"https://twitter.com/packtpub\" title=\"\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a class=\"button--icon\" target=\"_blank\" href=\"https://plus.google.com/+packtpublishing/posts\" title=\"\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/octo/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 55,  60 => 51,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/octo/templates/page--front.html.twig", "/Users/manuel/Sites/devdesktop/drupalpod2-clone/themes/octo/templates/page--front.html.twig");
    }
}
