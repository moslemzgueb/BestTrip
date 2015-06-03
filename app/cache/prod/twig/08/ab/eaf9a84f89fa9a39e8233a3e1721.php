<?php

/* BestTripAdminBundle::layout.html.twig */
class __TwigTemplate_08abeaf9a84f89fa9a39e8233a3e1721 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE HTML>
<html>

<head>
    <title>Best Trip</title>


    <meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
    <meta name=\"author\" content=\"Zoubair Hfaidh, Moslem Zueb\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/css/bootstrap.css"), "html", null, true);
        echo "\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/css/mystyles.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/modernizr.js"), "html", null, true);
        echo "\"></script>

 
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id=\"fb-root\"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class=\"global-wrap\">
        <header id=\"main-header\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <a class=\"logo\" href=\"index.html\">
                                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </a>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"top-user-area clearfix\">
                                <ul class=\"top-user-area-list list list-horizontal list-border\">
                                    <li class=\"top-user-area-avatar\">
                                        <a href=\"user-profile.html\">
                                            <img class=\"origin round\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/40x40.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"AMaze\" />Hi, Zoubair</a>
                                    </li>
                                    <li><a href=\"#\">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"nav\">
                    <ul class=\"slimmenu\" id=\"slimmenu\">
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"success-payment.html\">Countries</a></li>
                        <li><a href=\"feature-typography.html\">Places</a></li>
                        <li><a href=\"feature-typography.html\">Flights</a></li>
                        <li><a href=\"feature-typography.html\">Travel guide</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- TOP AREA -->
        <div class=\"top-area show-onload\">
            <div class=\"bg-holder full\">
                <div class=\"bg-front full-height bg-front-mob-rel\">
                    <div class=\"container full-height\">
                        <div class=\"rel full-height\">
                            <div class=\"tagline visible-lg\" id=\"tagline\"><span>It's time to</span>
                                <ul>
                                    <li>live</li>
                                    <li>have fun</li>
                                    <li>relax</li>
                                    <li>meet</li>
                                    <li>being lost</li>
                                    <li>run away</li>
                                    <li>go</li>
                                    <li>explore</li>
                                    <li>find new friends</li>
                                    <li class=\"active\">discover</li>
                                    <li>play</li>
                                </ul>
                            </div>
                            <div class=\"search-tabs search-tabs-bg search-tabs-bottom mb50\">
                                <div class=\"tabbable\">
                                    <ul class=\"nav nav-tabs\" id=\"myTab\">
                                        <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Best trip finder</span></a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                            <h2>Search a country, a city, a restaurant, a flgiht, a place ...</h2>
                                            <form>
                                                <div class=\"row\">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                            <label>What are you looking for?</label>
                                                            <input class=\"typeahead form-control\" placeholder=\"Country, City, Restaurant, Flight...\" type=\"text\" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search</button>
                                            </form>
                                        </div>
                                     </div>
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"owl-carousel owl-slider owl-carousel-area visible-lg\" id=\"owl-carousel-slider\" data-nav=\"false\">
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                        
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/2048x2048.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                    <div class=\"bg-holder full\">
                        <div class=\"bg-mask\"></div>
                        <div class=\"bg-img\" style=\"background-image:url(";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                    </div>
                </div>
                <div class=\"bg-img hidden-lg\" style=\"background-image:url(";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/2048x1365.png"), "html", null, true);
        echo ");\"></div>
                <div class=\"bg-mask hidden-lg\"></div>
            </div>
        </div>
        <!-- END TOP AREA  -->

        <div class=\"container\">
            <div class=\"gap\"></div>
            <h2 class=\"text-center\">Top Experiences</h2>
            <div class=\"gap\">
                <div class=\"row row-wrap\">
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/flags/32/fr.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Paris</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Nullam potenti ac sagittis iaculis justo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"El inevitable paso del tiempo\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/flags/32/hu.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Budapest</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Sociis interdum sed a senectus porta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Upper Lake in New York Central Park\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/flags/32/us.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">New York</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Erat ultricies auctor tellus natoque cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"196_365\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/flags/32/fr.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Paris</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Nullam potenti ac sagittis iaculis justo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"El inevitable paso del tiempo\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/flags/32/hu.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Budapest</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Sociis interdum sed a senectus porta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Upper Lake in New York Central Park\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/flags/32/us.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">New York</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Erat ultricies auctor tellus natoque cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/800x600.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"people on the beach\" />
                                </a>
                            </header>
                            <div class=\"img-left\">
                                <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/flags/32/gr.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </div>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Crete</a></h4>
                                <div class=\"thumb-caption\">
                                    <p class=\"thumb-desc\">Cursus parturient commodo diam donec est</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <footer id=\"main-footer\">
            <div class=\"container\">
                <div class=\"row row-wrap\">
                    <div class=\"col-md-3\">
                        <h4>Team</h4>
                        <h4 class=\"text-color\">Zoubair Hfaidh<br>Moslem Zgueb<br>Chafik Bari<br>Abdelslam Manai<br>Aymen Zitoun</h4>
                        <p>3Cinfo3, ESPRIT</p>
                    </div>
                    <div class=\"col-md-4\">
                        <a class=\"logo\" href=\"index.html\">
                            <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/img/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                        </a>
                        <p class=\"mb20\">Reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class=\"list list-horizontal list-space\">
                            <li>
                                <a class=\"fa fa-facebook box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-twitter box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-md-3\">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type=\"text\" class=\"form-control\">
                            <p class=\"mt5\"><small>*We Never Send Spam</small>
                            </p>
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Subscribe\">
                        </form>
                    </div>
                    <div class=\"col-md-2\">
                        <ul class=\"list list-footer\">
                            <li><a href=\"#\">Experience</a>
                            </li>
                            <li><a href=\"#\">Places</a>
                            </li>
                            <li><a href=\"#\">Flight</a>
                            </li>
                            <li><a href=\"#\">Travel guide</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

       <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/dropit.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/ionrangeslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/icheck.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/fotorama.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
        <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/typeahead.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/card-payment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/magnific.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/countdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/gridrotator.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/besttripadmin/js/custom.js"), "html", null, true);
        echo "\"></script>
    </div>
</body>

</html>


";
    }

    public function getTemplateName()
    {
        return "BestTripAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 365,  509 => 364,  505 => 363,  501 => 362,  497 => 361,  493 => 360,  489 => 359,  485 => 358,  481 => 357,  476 => 355,  472 => 354,  468 => 353,  464 => 352,  460 => 351,  456 => 350,  452 => 349,  448 => 348,  396 => 299,  365 => 271,  358 => 267,  341 => 253,  334 => 249,  317 => 235,  310 => 231,  293 => 217,  286 => 213,  269 => 199,  262 => 195,  245 => 181,  238 => 177,  221 => 163,  214 => 159,  196 => 144,  190 => 141,  183 => 137,  175 => 132,  98 => 58,  87 => 50,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  41 => 19,  36 => 17,  19 => 2,);
    }
}
