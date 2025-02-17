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
        <header id="header" data-transparent="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="index.html"><span class="logo-default"><img src="/images/black.png" alt=""></span><span class="logo-dark"><img src="/images/white.png" alt=""></span></a> </div>
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
                                    <li><a href="{{ route('contatti') }}">{{ __('menu.contatti') }}</a></li>
                                    <li><a href="{{ route('test-center') }}">{{ __('menu.test-center') }}</a></li>
                                    <li><a href="{{ route('formazione') }}">{{ __('menu.formazione') }}</a></li>
                                    <li><a href="{{ route('blog') }}">{{ __('menu.blog') }}</a></li>
                                    <li><a href="{{ route('chi-siamo') }}">{{ __('menu.chi-siamo') }}</a></li>
                                    <li><a href="{{ route('credits') }}">{{ __('menu.credits') }}</a></li>
                                    <li><a href="{{ route('eventi') }}">{{ __('menu.eventi') }}</a></li>
                                    <li><a href="{{ route('contatti') }}">{{ __('menu.contatti') }}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- SECTION IMAGE FULLSCREEN -->
        <section class="halfscreen">
            <div class="container container-fullscreen text-light">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-middle">
                            <h1 class="text-medium">{!! __('home.banner.h1') !!}</h1>
                            <p class="lead">{{ __('home.banner.p') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="content background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2 class="text-center">I nostri concorsi</h2>
                </div>

                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image p-4">
                                <a href="#">
                                    <img alt="" class="rounded" src="images/325x350.png">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}} <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image p-4">
                                <a href="#">
                                    <img alt="" class="rounded" src="images/325x350.png">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}} <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image p-4">
                                <a href="#">
                                    <img alt="" class="rounded" src="images/325x350.png">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}} <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-success btn-rounded pull-right" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>

                </div>
            </div>
        </section>
        <!-- end: BLOG -->




        <!-- COMPANY -->
        <section class="content background-green pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="heading-text heading-section">
                            <h2 class="text-white">Servizi</h2>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <p class="text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
                <div class="row servizi mt-6">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="icon"><img src="/images/assessment.png" alt="" srcset=""></div>
                            <h4>Assessment</h4>
                            <p>Use this space to promote the business, its products or its services.</p>
                            <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="icon"><img src="/images/examonline.png" alt="" srcset=""></div>
                            <h4>Examonline</h4>
                            <p>Use this space to promote the business, its products or its services.</p>
                            <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="icon"><img src="/images/test-center.png" alt="" srcset=""></div>
                            <h4>Test Center</h4>
                            <p>Use this space to promote the business, its products or its services.</p>
                            <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="realta-virtuale">
            <div class="container container-fullscreen">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-middle">
                            <h1 class="text-uppercase text-medium">Realtà virtuale</h1>
                            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                Nemo sed quia consequuntur magni dolores eos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo sed quia consequuntur magni dolores eos .</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="a-chi-ci-rivolgiamo">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-lg-9">
                        <div class="heading-text heading-section">
                            <h2 class="text-center mb-3">A chi ci rivolgiamo</h2>
                            <span class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span>
                        </div>
                    </div>
                </div>
                <div class="row my-6">
                    <div class="col-lg-4" data-animate="flipInY" data-animate-delay="0">
                        <div class="icon-box effect small">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <p class="text-bold">Scoprire i tuoi punti di forza e diventare competitivo nel contesto globale.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="flipInY" data-animate-delay="200">
                        <div class="icon-box effect small ">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <p class="text-bold">Scoprire i tuoi punti di forza e diventare competitivo nel contesto globale.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="flipInY" data-animate-delay="400">
                        <div class="icon-box effect small ">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <p class="text-bold">Scoprire i tuoi punti di forza e diventare competitivo nel contesto globale.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="ratio ratio-16x9">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://player.vimeo.com/video/157573157?title=0&byline=0&portrait=0" width="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section">
                            <h4>I nostri professionisti</h4>
                            <span class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="content background-blue pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-text heading-section">
                            <h2>Perchè scegliere Selexi</h2>
                            <span class="lead text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </span>
                        </div>
                    </div>
                </div>
                <div class="row perche mt-6">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="icon"><img src="/images/assessment.png" alt="" srcset=""></div>
                            <h4>Assessment</h4>
                            <p>Use this space to promote the business, its products or its services.</p>
                            <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="icon"><img src="/images/examonline.png" alt="" srcset=""></div>
                            <h4>Examonline</h4>
                            <p>Use this space to promote the business, its products or its services.</p>
                            <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="icon"><img src="/images/test-center.png" alt="" srcset=""></div>
                            <h4>Test Center</h4>
                            <p>Use this space to promote the business, its products or its services.</p>
                            <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <section class="section-reviews" class="p-t-150 p-b-100">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-lg-9">
                        <div class="heading-text heading-section">
                            <h2 class="text-center">Cosa Dicono di noi</h2>
                            <span class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonials -->
                <div class="mt-5 carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="3" data-equalize-item=".testimonial-item">

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <p class="mt-0 stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <img src="images/avatar.png" alt="">
                        <div class="author">
                            <div class="mt-4 text-bold">Alan Monre</div>
                            <div>CEO, Square Software</div>
                        </div>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <p class="mt-0 stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <img src="images/avatar.png" alt="">
                        <div class="author">
                            <div class="mt-4 text-bold">Alan Monre</div>
                            <div>CEO, Square Software</div>
                        </div>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <p class="mt-0 stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <img src="images/avatar.png" alt="">
                        <div class="author">
                            <div class="mt-4 text-bold">Alan Monre</div>
                            <div>CEO, Square Software</div>
                        </div>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <p class="mt-0 stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <img src="images/avatar.png" alt="">
                        <div class="author">
                            <div class="mt-4 text-bold">Alan Monre</div>
                            <div>CEO, Square Software</div>
                        </div>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <p class="mt-0 stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <img src="images/avatar.png" alt="">
                        <div class="author">
                            <div class="mt-4 text-bold">Alan Monre</div>
                            <div>CEO, Square Software</div>
                        </div>
                    </div>
                    <!-- end: Testimonials item-->

                </div>
                <!-- end: Testimonials -->
            </div>
            <div class="triangle-divider-bottom"></div>
        </section>
        <section class="content background-grey m-0 p-0">
            <div class="container">
                <div class="seperator-blue"></i>
                </div>
            </div>
        </section>

        <section class="content background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2 class="text-center">Le ultime news</h2>
                </div>

                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image p-4">
                                <a href="#">
                                    <img alt="" class="rounded" src="images/325x350.png">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}} <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image p-4">
                                <a href="#">
                                    <img alt="" class="rounded" src="images/325x350.png">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}} <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image p-4">
                                <a href="#">
                                    <img alt="" class="rounded" src="images/325x350.png">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}} <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-success btn-rounded pull-right" class="item-link">{{ __('btn.guarda-tutti')}} <i class="fa fa-arrow-right"></i></a>

                </div>
            </div>
        </section>


        <section class="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="heading-text heading-section">
                            <h2 class="text-center">Richiedi informazioni</h2>
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

    </div>
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