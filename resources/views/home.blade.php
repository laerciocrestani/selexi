@extends('main')
@section('content')
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
            <h2 class="text-center">{{ __('home.concorsi.title') }}</h2>
        </div>

        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

            <div class="post-item">
                <div class="post-item-wrap">
                    <div class="post-image p-4">
                        <a href="#">
                            <img alt="" class="rounded" src="images/concorsi/1.png">
                        </a>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <h2><a href="#">Computer Based Test (CBT)</a></h2>
                        <p>Scoprite come il servizio Computer Based Test Home può trasformare il tuo processo di selezione.</p>

                        <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>

                    </div>
                </div>
            </div>
            <div class="post-item">
                <div class="post-item-wrap">
                    <div class="post-image p-4">
                        <a href="#">
                            <img alt="" class="rounded" src="images/concorsi/2.png">
                        </a>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <h2><a href="#">Paper Based Test (PBT)</a></h2>
                        <p>Scoprite come il servizio Paper Based Test Home di Selexi può trasformare il tuo processo di selezione.</p>

                        <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>

                    </div>
                </div>
            </div>
            <div class="post-item">
                <div class="post-item-wrap">
                    <div class="post-image p-4">
                        <a href="#">
                            <img alt="" class="rounded" src="images/concorsi/3.png">
                        </a>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                        <h2><a href="#">Tablet Based Test (TBT)</a></h2>
                        <p>Scopri come il servizio Tablet Based Test di Selexi può migliorare l’efficienza e la sicurezza delle tue selezioni.</p>

                        <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>

                    </div>
                </div>
            </div>

        </div>
        <div class="text-center">
            <a href="#" class="btn btn-success-green btn-rounded" class="item-link">{{ __('btn.guarda-tutti')}}</a>

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
                    <h2 class="text-white">{{ __('home.servizi.title') }}</h2>
                </div>
            </div>
            <div class="col-lg-9">
                <p class="text-white">{{ __('home.servizi.p') }}</p>
            </div>
        </div>
        <div class="row servizi mt-6">
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="icon"><img src="/images/assessment.png" alt="" srcset=""></div>
                    <h4>{!! __('home.servizi.title_a') !!}</h4>
                    <p class="p-5">{!! __('home.servizi.p_a') !!}</p>
                    <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/examonline.png" alt="" srcset=""></div>
                    <h4>{!! __('home.servizi.title_b') !!}</h4>
                    <p class="p-5">{!! __('home.servizi.p_b') !!}</p>
                    <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/test-center.png" alt="" srcset=""></div>
                    <h4>{!! __('home.servizi.title_c') !!}</h4>
                    <p class="p-5">{!! __('home.servizi.p_c') !!}</p>
                    <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="realta-virtuale ">
    <div class="container container-fullscreen">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-middle">
                    <h2 class="font-blue">{!! __('home.virtuale.title') !!}</h2>
                    <p class="lead text-black">{!! __('home.virtuale.p') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="a-chi-ci-rivolgiamo pt-0 pt-lg-6">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-9">
                <div class="heading-text heading-section">
                    <h2 class="text-lg-center mb-3">{!! __('home.rivolgiamo.title') !!}</h2>
                    <div class="text-center lead">{!! __('home.rivolgiamo.p') !!}</div>
                </div>
            </div>
        </div>
        <div class="row my-6">
            <div class="col-lg-4">
                <div class="icon-box small">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">{!! __('home.rivolgiamo.check_a') !!}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box small ">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">{!! __('home.rivolgiamo.check_b') !!}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box small ">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">{!! __('home.rivolgiamo.check_c') !!}</p>
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
                    <h4 class="mt-4 mt-lg-0">{!! __('home.professionisti.title') !!}</h4>
                    <span class="lead">{!! __('home.professionisti.p') !!}</span>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="content background-blue pb-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-text heading-section">
                    <h2>{!! __('home.scegliere.title') !!}</h2>
                    <span class="lead text-white">{!! __('home.scegliere.p') !!}</span>
                </div>
            </div>
        </div>
        <div class="row perche mt-6">
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="icon"><img src="/images/generic-Icon.png" alt="" srcset=""></div>
                    <h4>{!! __('home.scegliere.title_a') !!}</h4>
                    <p>{!! __('home.scegliere.info_a') !!}</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/generic-Icon.png" alt="" srcset=""></div>
                    <h4>{!! __('home.scegliere.title_b') !!}</h4>
                    <p>{!! __('home.scegliere.info_b') !!}</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/generic-Icon.png" alt="" srcset=""></div>
                    <h4>{!! __('home.scegliere.title_c') !!}</h4>
                    <p>{!! __('home.scegliere.info_c') !!}</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/generic-Icon.png" alt="" srcset=""></div>
                    <h4>{!! __('home.scegliere.title_d') !!}</h4>
                    <p>{!! __('home.scegliere.info_d') !!}</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
            </div>

        </div>


    </div>
</section>


@include('partials.dicono')

@include('partials.last-news')


@endsection