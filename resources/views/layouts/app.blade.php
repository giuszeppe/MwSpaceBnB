<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>BootStrap HTML5 CSS3 Theme</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/normalize.css" />
        <link rel="stylesheet" href="/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/icomoon.css" />
        <link rel="stylesheet" href="/css/owl.carousel.css" />
        <link rel="stylesheet" href="/css/bootstrap-select.css" />
        <link rel="stylesheet" href="/css/scrollbar.css" />
        <link rel="stylesheet" href="/css/jquery.mmenu.all.css" />
        <link rel="stylesheet" href="/css/prettyPhoto.css" />
        <link rel="stylesheet" href="/css/transitions.css" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/color.css" />
        <link rel="stylesheet" href="/css/responsive.css" />
        <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body class="tg-home tg-homevone">
        <!--[if lt IE 8]>
            <p class="browserupgrade">
                You are using an <strong>outdated</strong> browser. Please
                <a href="http://browsehappy.com/">upgrade your browser</a> to
                improve your experience.
            </p>
        <![endif]-->
<!--************************************
    Loader Start
*************************************-->


        <div class="loader">
            <div class="span">
                <div class="location_indicator"></div>
            </div>
        </div>


<!--************************************
    Loader End
*************************************-->
<!--************************************
    Loader Start
*************************************-->


        <div class="loader">
            <div class="span">
                <div class="location_indicator"></div>
            </div>
        </div>


<!--************************************
    Loader End
*************************************-->

<!--************************************
    Mobile Menu Start
*************************************-->


        <nav id="menu">
            <ul>
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                @auth
                    <li>
                        <a href="#"
                           onclick="document.getElementById('logout-form').submit();">
                           Logout
                        </a>
                    </li> 
                    <li><a href="{{route('stats')}}">I tuoi appartamenti</a></li>
                    <li><a href="{{route('search')}}">Cerca</a></li>
                @endauth
                @guest
                    <li><a href="{{route('register')}}">Registrati</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                @endguest
            </ul>
        </nav>


<!--************************************
    Mobile Menu End
*************************************-->

<!--************************************
    Wrapper Start
*************************************-->


    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">


<!--************************************
    Header Start
*************************************-->


    <header id="tg-header" class="tg-header tg-haslayout">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="tg-topbar">
                                <nav class="tg-infonav">
                                    <ul>
                                        <li>
                                            <i
                                                ><img
                                                    src="/images/icons/icon-01.png"
                                                    alt="image destinations"
                                            /></i>
                                            <span>1-800-321-6543</span>
                                        </li>
                                        <li>
                                            <i
                                                ><img
                                                    src="/images/icons/icon-02.png"
                                                    alt="image destinations"
                                            /></i>
                                            <span
                                                >CHOOSE YOUR EXPERIENCE
                                                <a href="javascript:void(0);"
                                                    >Discover more</a
                                                ></span
                                            >
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tg-navigationarea tg-headerfixed border border-dark">
                                <strong class="tg-logo"
                                    ><a href="{{ route('home') }}"
                                        ><img
                                            src="/images/logo.png"
                                            alt="company logo here" /></a
                                ></strong>
                                @guest
                                    <div class="tg-socialsignin">
                                        <div class="tg-userbox">
                                            <a
                                                id="tg-btnsignin"
                                                class="tg-btn"
                                                href="{{route('register')}}"
                                                ><span>Register</span>
                                            </a>
                                        </div>

                                        <div class="tg-userbox">
                                            <a
                                                id="tg-btnsignin"
                                                class="tg-btn"
                                                href="{{route('login')}}"
                                                ><span>Login</span>
                                            </a>
                                        </div>
                                    </div>
                                @endguest
                                @auth
                                    <div class="tg-socialsignin">
                                        <div class="tg-userbox">
                                            <a
                                                id="tg-btnsignin"
                                                class="tg-btn"
                                                href="#"
                                                onclick="document.getElementById('logout-form').submit();"
                                            >
                                                <span>
                                                   Logout 
                                                </span>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('POST')
                                                </form>
                                            </a>
                                        </div>
                                    </div>
                                @endauth
                                <nav id="tg-nav" class="tg-nav">
                                    <div class="navbar-header">
                                        <a
                                            href="#menu"
                                            class="navbar-toggle collapsed"
                                        >
                                            <span class="sr-only"
                                                >Toggle navigation</span
                                            >
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </a>
                                    </div>
                                    <div
                                        id="tg-navigation"
                                        class="
                                            collapse
                                            navbar-collapse
                                            tg-navigation
                                        "
                                    >
                                        <ul>
                                            <li class="menu-item-has-children current-menu-item">
                                                <a href="{{route('home')}}">
                                                    Home
                                                </a>

                                            </li>
                                            @auth
                                                <li class="menu-item-has-childer current-menu-item">
                                                    <a href="{{route('stats')}}">
                                                        I tuoi appartamenti
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-childer current-menu-item">
                                                    <a href="{{route('search')}}">
                                                        Cerca
                                                    </a>
                                                </li>

                                            @endauth

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
    </header>


<!--************************************
    Header End
*************************************-->
         
<!--************************************
    Main Content Start
*************************************-->


<main id="tg-main" class="tg-main tg-haslayout">
            @yield('content')
</main>


<!--************************************
    Main Content End
*************************************-->

<!--************************************
  Footer Start
*************************************-->


        <footer id="tg-footer" class="tg-footer tg-haslayout">
            <div class="tg-fourcolumns">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div
                                class="tg-footercolumn tg-widget tg-widgettext"
                            >
                                <div class="tg-widgettitle">
                                    <h3>About Travlu</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <div class="tg-description">
                                        <p>
                                            Nunc cursus liero purs ac cogue arcu
                                            cursus ut sed vitae pulvinar
                                            massaidp nequetiam lore elerisque
                                        </p>
                                    </div>
                                    <span>1-800-321-6543</span>
                                    <a href="mailto:info@travlu.com"
                                        >info@travlu.com</a
                                    >
                                    <ul
                                        class="
                                            tg-socialicons tg-socialiconsvtwo
                                        "
                                    >
                                        <li>
                                            <a href="javascript:void(0);"
                                                ><i
                                                    class="
                                                        icon-facebook-logo-outline
                                                    "
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                ><i
                                                    class="
                                                        icon-instagram-social-outlined-logo
                                                    "
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                ><i
                                                    class="
                                                        icon-twitter-social-outlined-logo
                                                    "
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div
                                class="
                                    tg-footercolumn
                                    tg-widget
                                    tg-widgettravelunews
                                "
                            >
                                <div class="tg-widgettitle">
                                    <h3>Travelu News</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li>
                                            <figure>
                                                <a href="javascript:void(0);"
                                                    ><img
                                                        src="/images/thumbnail/img-01.jpg"
                                                        alt="image destinations"
                                                /></a>
                                            </figure>
                                            <div class="tg-newcontent">
                                                <h4>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Bungee Jumping Trip</a
                                                    >
                                                </h4>
                                                <div class="tg-description">
                                                    <p>
                                                        Nunc cursus libero purus
                                                        congue arcu vitae
                                                        pulvinar
                                                    </p>
                                                </div>
                                                <time datetime="2017-06-06"
                                                    >Feb 22, 2017</time
                                                >
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="javascript:void(0);"
                                                    ><img
                                                        src="/images/thumbnail/img-02.jpg"
                                                        alt="image destinations"
                                                /></a>
                                            </figure>
                                            <div class="tg-newcontent">
                                                <h4>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Trip to White Castle</a
                                                    >
                                                </h4>
                                                <div class="tg-description">
                                                    <p>
                                                        Nunc cursus libero purus
                                                        congue arcu vitae
                                                        pulvinar
                                                    </p>
                                                </div>
                                                <time datetime="2017-06-06"
                                                    >Feb 22, 2017</time
                                                >
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div
                                class="
                                    tg-footercolumn
                                    tg-widget
                                    tg-widgetdestinations
                                "
                            >
                                <div class="tg-widgettitle">
                                    <h3>Top Destinations</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Bayonne, Melbourne</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Greenville, New Jersey</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >The Heights, London</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >West Side, New York</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Upper East Side, New York</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div
                                class="
                                    tg-footercolumn
                                    tg-widget
                                    tg-widgetnewsletter
                                "
                            >
                                <div class="tg-widgettitle">
                                    <h3>Newsletter</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <div class="tg-description">
                                        <p>
                                            Sign up for our mailing list to get
                                            latest updates and offers
                                        </p>
                                    </div>
                                    <form
                                        class="tg-formtheme tg-formnewsletter"
                                    >
                                        <fieldset>
                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Your Email"
                                            />
                                            <button type="submit">
                                                <img
                                                    src="/images/icons/icon-08.png"
                                                    alt="image destinations"
                                                />
                                            </button>
                                        </fieldset>
                                    </form>
                                    <span>We respect your privacy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-footerbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p>
                                Copyright &copy; 2017 Travlu. All rights
                                reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


<!--************************************
    Footer End
*************************************-->


    </div>


<!--************************************
    Wrapper End
*************************************-->


<!--************************************
    Script Start
*************************************-->

        <script src="/js/vendor/jquery-library.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
        <script src="/js/bootstrap-select.min.js"></script>
        <script src="/js/jquery-scrolltofixed.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/jquery.mmenu.all.js"></script>
        <script src="/js/packery.pkgd.min.js"></script>
        <script src="/js/jquery.vide.min.js"></script>
        <script src="/js/scrollbar.min.js"></script>
        <script src="/js/prettyPhoto.js"></script>
        <script src="/js/countdown.js"></script>
        <script src="/js/parallax.js"></script>
        <script src="/js/gmap3.js"></script>
        <script src="/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    </body>


<!--************************************
    Script End
*************************************-->
</html>