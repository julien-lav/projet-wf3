<?php

/* header.html.twig */
class __TwigTemplate_0579b55c46fad38c04ddd2a7af3174227d28dfad294894365580f64e844d4fdc extends Twig_Template
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
        $__internal_c6d6dc4a282f558695dc298e15b98e22f058ef95e60472c18716a2753d00a4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d6dc4a282f558695dc298e15b98e22f058ef95e60472c18716a2753d00a4d1->enter($__internal_c6d6dc4a282f558695dc298e15b98e22f058ef95e60472c18716a2753d00a4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_265595cb59b87f8fac81124fa4d55d8899a9e4ee66fe0db8c874442854c19361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265595cb59b87f8fac81124fa4d55d8899a9e4ee66fe0db8c874442854c19361->enter($__internal_265595cb59b87f8fac81124fa4d55d8899a9e4ee66fe0db8c874442854c19361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>

<!-- Preloader
    <div id=\"preloader\">
        <div id=\"status\">
            <div class='spinner-wrap'>
                <div class='leftside'></div>
                <div class='rightside'></div>
            <div class='spinner'>
                <div class='bounce1'></div>
                <div class='bounce2'></div>
                <div class='bounce3'></div>
            </div>
            </div>
        </div>
    </div> 
     -->
<!-- Fixed navbar -->

<nav class=\"navbar main-menu navbar-default navbar-fixed-top\" role=\"navigation\">

  <div class=\"container\"> 

    <div class=\"navbar-header\">

      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">

              <span class=\"sr-only\">Toggle navigation</span>

              <span class=\"icon-bar\"></span>

              <span class=\"icon-bar\"></span>

              <span class=\"icon-bar\"></span>

            </button>

      <a class=\"navbar-brand\" href=\"index.html\" title=\"logo\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" /></a> </div>

    <div class=\"navbar-collapse collapse pull-left\">

      <ul class=\"nav navbar-nav menu\" id=\"menu\">

        <!-- <li class=\"dropdown\">  class=\"dropdown-toggle\"--><li><a href=\"#\" role=\"button\" aria-expanded=\"false\">Accueil</a></li>

            <!-- TO DELETE -->
            <!-- <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"index.html\">Home 1</a></li>
                <li><a href=\"index-2.html\">Home 2</a></li>
            </ul> 
        </li> -->

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">News <span class=\"caret\"></span></a>

            <div class=\"dropdown-menu\">

                <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"tabbable tabs-left\">

                            <ul class=\"nav nav-tabs\">

                              <li class=\"active\"><a href=\"#Travel\" data-toggle=\"tab\">Travel <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Sport\" data-toggle=\"tab\">Sport <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Apps\" data-toggle=\"tab\">Apps <i class=\"arrow_carrot-right\"></i></a></li>
                              
                              <li><a href=\"#Photography\" data-toggle=\"tab\">Photography <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Music\" data-toggle=\"tab\">Music <i class=\"arrow_carrot-right\"></i></a></li>

                            </ul>

                            <div class=\"tab-content\">

                                <div class=\"tab-pane active\" id=\"Photography\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post1.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Travel The World</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post6.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Google Play Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post4.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Business Plan</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post8.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Best Mobile Apps</h3>

                                                </div>

                                            </div>

                                    </div>       

                                </div>

                                <div class=\"tab-pane\" id=\"Travel\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post5.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>LifeStyle</h3>

                                                </div>

                                            </div>

                                    </div>

                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post2.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Mobile reviews</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post7.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Apple Probook</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post4.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Business Call</h3>

                                                </div>

                                            </div>

                                    </div>

                                </div>  

                                <div class=\"tab-pane\" id=\"Music\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post6.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Android Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post1.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Canan Digital Cam</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post3.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Classical Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post8.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>IPhone Tunes</h3>

                                                </div>

                                            </div>

                                    </div>

                                </div>

                                <div class=\"tab-pane\" id=\"Apps\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post1.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Android Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post6.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Canan Digital Cam</h3>

                                                </div>

                                            </div>

                                    </div>

                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post8.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Classical Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post3.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>IPhone Tunes</h3>

                                                </div>

                                            </div>

                                    </div>

                                </div>

                            </div>

                        </div>   

                    </div>

                </div>

            </div>              

        </li>

        <li class=\"dropdown mega-dropdown\">

                <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

                            <h3>Recent Post Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Size  </a></li>

                                <li><a href=\"single.html\">The Heading Text Size</a></li>

                                <li><a href=\"single.html\">Lorem ipsum dolor sit </a></li>

                                <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Image  </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

                            </ul>

                        </div>

                    </div>

                    </div>   

                </div>              

            </li>

         <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Chroniques<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

                            <h3>Recent Post Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Size  </a></li>

                                <li><a href=\"single.html\">The Heading Text Size</a></li>

                                <li><a href=\"single.html\">Lorem ipsum dolor sit </a></li>

                                <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Image  </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

                            </ul>

                        </div>

                    </div>

                    </div>   

                </div>              

            </li>

          <li class=\"dropdown\">

        

        <li><a href=\"contact.html\">Contact</a></li>

        <li><a href=\"";
        // line 575
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
        echo "\" class=\"connexion\">Connexion</a></li>


       <li><a href=\"";
        // line 578
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\" class=\"inscription\">Inscription</a></li>

        
        
        
      </ul>

    </div>

    <ul class=\"nav navbar-nav navbar-right menu social-icons\">

        <li class=\"dropdown mega-dropdown search\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-search\"></i></a>
          <div class=\"dropdown-menu\">
                    <div class=\"container\">
                        <div class=\"row\">
                        <div class=\"col-md-6 pull-right\">
                    <div class=\"mega-dropdown-menu\">
                        <form class=\"search-form\" action=\"search.html\">
                            <div class=\"form-group\">
                        <div class=\"col-lg-12\">
                            <div class=\"input-group\">
                              <input type=\"text\" class=\"form-control\" placeholder=\"Recherche...\">
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                              </span>
                            </div><!-- /input-group -->

                          </div>

                          </div>

                      </form>

                    </div>

                    </div>

                    </div>



                    </div>   

                </div>

        </li>
        
        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
        <li><a href=\"signout.html\"><i class=\"fa fa-times\"></i></a></li>
        <li><a href=\"signin.html\"><i class=\"fa fa-user\"></i></a></li>
      </ul>

    <!--/.nav-collapse --> 

 ";
        // line 635
        echo "
</nav>

</header>
 
";
        // line 655
        echo "  ";
        
        $__internal_c6d6dc4a282f558695dc298e15b98e22f058ef95e60472c18716a2753d00a4d1->leave($__internal_c6d6dc4a282f558695dc298e15b98e22f058ef95e60472c18716a2753d00a4d1_prof);

        
        $__internal_265595cb59b87f8fac81124fa4d55d8899a9e4ee66fe0db8c874442854c19361->leave($__internal_265595cb59b87f8fac81124fa4d55d8899a9e4ee66fe0db8c874442854c19361_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 655,  669 => 635,  610 => 578,  604 => 575,  64 => 38,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>

<!-- Preloader
    <div id=\"preloader\">
        <div id=\"status\">
            <div class='spinner-wrap'>
                <div class='leftside'></div>
                <div class='rightside'></div>
            <div class='spinner'>
                <div class='bounce1'></div>
                <div class='bounce2'></div>
                <div class='bounce3'></div>
            </div>
            </div>
        </div>
    </div> 
     -->
<!-- Fixed navbar -->

<nav class=\"navbar main-menu navbar-default navbar-fixed-top\" role=\"navigation\">

  <div class=\"container\"> 

    <div class=\"navbar-header\">

      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">

              <span class=\"sr-only\">Toggle navigation</span>

              <span class=\"icon-bar\"></span>

              <span class=\"icon-bar\"></span>

              <span class=\"icon-bar\"></span>

            </button>

      <a class=\"navbar-brand\" href=\"index.html\" title=\"logo\"><img src=\"{{ asset ('assets/images/logo.png') }}\" alt=\"logo\" /></a> </div>

    <div class=\"navbar-collapse collapse pull-left\">

      <ul class=\"nav navbar-nav menu\" id=\"menu\">

        <!-- <li class=\"dropdown\">  class=\"dropdown-toggle\"--><li><a href=\"#\" role=\"button\" aria-expanded=\"false\">Accueil</a></li>

            <!-- TO DELETE -->
            <!-- <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"index.html\">Home 1</a></li>
                <li><a href=\"index-2.html\">Home 2</a></li>
            </ul> 
        </li> -->

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">News <span class=\"caret\"></span></a>

            <div class=\"dropdown-menu\">

                <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"tabbable tabs-left\">

                            <ul class=\"nav nav-tabs\">

                              <li class=\"active\"><a href=\"#Travel\" data-toggle=\"tab\">Travel <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Sport\" data-toggle=\"tab\">Sport <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Apps\" data-toggle=\"tab\">Apps <i class=\"arrow_carrot-right\"></i></a></li>
                              
                              <li><a href=\"#Photography\" data-toggle=\"tab\">Photography <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Music\" data-toggle=\"tab\">Music <i class=\"arrow_carrot-right\"></i></a></li>

                            </ul>

                            <div class=\"tab-content\">

                                <div class=\"tab-pane active\" id=\"Photography\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post1.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Travel The World</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post6.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Google Play Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post4.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Business Plan</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post8.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Best Mobile Apps</h3>

                                                </div>

                                            </div>

                                    </div>       

                                </div>

                                <div class=\"tab-pane\" id=\"Travel\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post5.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>LifeStyle</h3>

                                                </div>

                                            </div>

                                    </div>

                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post2.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Mobile reviews</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post7.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Apple Probook</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post4.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Business Call</h3>

                                                </div>

                                            </div>

                                    </div>

                                </div>  

                                <div class=\"tab-pane\" id=\"Music\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post6.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Android Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post1.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Canan Digital Cam</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post3.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Classical Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post8.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>IPhone Tunes</h3>

                                                </div>

                                            </div>

                                    </div>

                                </div>

                                <div class=\"tab-pane\" id=\"Apps\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post1.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Android Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post6.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Canan Digital Cam</h3>

                                                </div>

                                            </div>

                                    </div>

                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post8.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>Classical Music</h3>

                                                </div>

                                            </div>

                                    </div>

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"assets/images/feature-posts/feature-post3.png\" alt=\"Generic placeholder thumbnail\"></a>

                                                <div class=\"caption\">

                                                    <h3>IPhone Tunes</h3>

                                                </div>

                                            </div>

                                    </div>

                                </div>

                            </div>

                        </div>   

                    </div>

                </div>

            </div>              

        </li>

        <li class=\"dropdown mega-dropdown\">

                <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

                            <h3>Recent Post Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Size  </a></li>

                                <li><a href=\"single.html\">The Heading Text Size</a></li>

                                <li><a href=\"single.html\">Lorem ipsum dolor sit </a></li>

                                <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Image  </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

                            </ul>

                        </div>

                    </div>

                    </div>   

                </div>              

            </li>

         <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Chroniques<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

                            <h3>Recent Post Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Size  </a></li>

                                <li><a href=\"single.html\">The Heading Text Size</a></li>

                                <li><a href=\"single.html\">Lorem ipsum dolor sit </a></li>

                                <li><a href=\"single.html\">Should Be A Large Heading </a></li>

                                <li><a href=\"single.html\">Match With the Image  </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

                            </ul>

                        </div>

                    </div>

                    </div>   

                </div>              

            </li>

          <li class=\"dropdown\">

        

        <li><a href=\"contact.html\">Contact</a></li>

        <li><a href=\"{{ path('connexion') }}\" class=\"connexion\">Connexion</a></li>


       <li><a href=\"{{ path('inscription') }}\" class=\"inscription\">Inscription</a></li>

        
        
        
      </ul>

    </div>

    <ul class=\"nav navbar-nav navbar-right menu social-icons\">

        <li class=\"dropdown mega-dropdown search\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-search\"></i></a>
          <div class=\"dropdown-menu\">
                    <div class=\"container\">
                        <div class=\"row\">
                        <div class=\"col-md-6 pull-right\">
                    <div class=\"mega-dropdown-menu\">
                        <form class=\"search-form\" action=\"search.html\">
                            <div class=\"form-group\">
                        <div class=\"col-lg-12\">
                            <div class=\"input-group\">
                              <input type=\"text\" class=\"form-control\" placeholder=\"Recherche...\">
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                              </span>
                            </div><!-- /input-group -->

                          </div>

                          </div>

                      </form>

                    </div>

                    </div>

                    </div>



                    </div>   

                </div>

        </li>
        
        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
        <li><a href=\"signout.html\"><i class=\"fa fa-times\"></i></a></li>
        <li><a href=\"signin.html\"><i class=\"fa fa-user\"></i></a></li>
      </ul>

    <!--/.nav-collapse --> 

 {# </div>#}

</nav>

</header>
 
{#  <!-- Preloader -->
  
  <div id=\"preloader\">
    <div id=\"status\">
      <div class='spinner-wrap'>
        <div class='leftside'></div>
        <div class='rightside'></div>
        <div class='spinner'>
          <div class='bounce1'></div>
          <div class='bounce2'></div>
          <div class='bounce3'></div>
        </div>
      </div>
    </div>
  </div>#}
  ", "header.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\header.html.twig");
    }
}
