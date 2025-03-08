<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Selexi - Test your future</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Body Inner -->
    <div class="body-inner">


        <!-- Header -->
        <header id="header" data-transparent="true" class="{{ request()->is('/') ? 'dark' : '' }} submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="/"><span class="logo-default"><img src="/images/black.png" alt=""></span><span class="logo-dark"><img src="/images/white.png" alt=""></span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    @foreach(__('menu') as $key => $m)
                                        <li><a href="{{ route($key) }}">{{ $m }}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>

        @yield('content')

        <section class="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="heading-text heading-section">
                            <h2 class="text-center mb-3">Richiedi informazioni</h2>
                            <p class="text-center text-white">Per maggiori dettagli sui nostri servizi e soluzioni, compila il modulo e sarai ricontattato al più presto.</p>
                        </div>
                        <div class="m-t-30">
                            <form class="widget-contact-form" data-success-message-delay="40000" novalidate action="include/contact-form.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Dichiaro di aver letto e compreso l'informativa Privacy e Cookie Policy<br>

                                        Il trattamento dei miei dati personali finalizzato all’invio di newsletter, comunicazioni promozionali e altre attività di marketing diretto, come indicato al paragrafo 3.b dell’Informativa Privacy. *

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Autorizzo
                                    </label>
                                </div>
                                <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                                </div>

                                <button class="btn btn-white btn-rounded mt-3 pull-right" type="submit" id="form-submit">Invia richiesta</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if(request()->is('/'))
        <!-- CLIENTS -->
        <section class="content background-grey certificazioni">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>Certificazioni</h2>
                </div>

                <ul class="grid grid-5-columns">
                    <li>
                        <img src="images/cert01.png" alt="">
                    </li>
                    <li>
                        <img src="images/cert02.png" alt="">
                    </li>
                    <li>
                        <img src="images/cert03.png" alt="">
                    </li>
                    <li>
                        <img src="images/cert04.png" alt="">
                    </li>
                    <li>
                        <img src="images/cert05.png" alt="">
                    </li>
                </ul>

            </div>
        </section>
        @endif
    </div>
    <!-- Footer -->
    <footer id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="widget">
                            <div class="widget-title"><img src="/images/black.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-title">Sede legale e operativa</div>
                            <ul class="list">
                                <li>Via Gerolamo Vida, 11 - 20127 Milano<br>P.IVA 12852900153<br>Tel. 02 58 32 23 02<br>Fax 02 58 43 48 33</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-title">Sede di Roma</div>
                            <ul class="list">
                                <li>Via Scipio Sighele  - 00177 Roma </li>
                            </ul>
                            <div class="widget-title">Selexi Test Center</div>
                            <ul class="list">
                                <li>Via Gerolamo Vida, 11 - 20127 Milano</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-title">Social</div>
                            <div class="social-icons social-icons-light social-icons-colored-hover">
                                <ul>
                                    <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="images/energy.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->

    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>

</body>

</html>