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

                        <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>

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

                        <a href="#" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>

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
                    <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/examonline.png" alt="" srcset=""></div>
                    <h4>Examonline</h4>
                    <p>Use this space to promote the business, its products or its services.</p>
                    <a href="#" class="btn btn-success btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/test-center.png" alt="" srcset=""></div>
                    <h4>Test Center</h4>
                    <p>Use this space to promote the business, its products or its services.</p>
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
                    <h2 class="font-blue">Realtà virtuale</h2>
                    <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        Nemo sed quia consequuntur magni dolores eos. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo sed quia consequuntur magni dolores eos .</p>
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
                    <h2 class="text-lg-center mb-3">A chi ci rivolgiamo</h2>
                    <span class="text-center lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</span>
                </div>
            </div>
        </div>
        <div class="row my-6">
            <div class="col-lg-4" >
                <div class="icon-box small">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">Scoprire i tuoi punti di forza e diventare competitivo nel contesto globale.</p>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="icon-box small ">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">Scoprire i tuoi punti di forza e diventare competitivo nel contesto globale.</p>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="icon-box small ">
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
                    <h4 class="mt-4 mt-lg-0">I nostri professionisti</h4>
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
                    <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/examonline.png" alt="" srcset=""></div>
                    <h4>Examonline</h4>
                    <p>Use this space to promote the business, its products or its services.</p>
                    <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/test-center.png" alt="" srcset=""></div>
                    <h4>Test Center</h4>
                    <p>Use this space to promote the business, its products or its services.</p>
                    <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a>
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
                    <h2 class="text-center">{{ __('home.dicono.title')}}</h2>
                    <div class="lead text-center">{{ __('home.dicono.p')}}</div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="mt-5 carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="3" data-equalize-item=".testimonial-item">
            @foreach(__('home.dicono.clients') as $client)
            <div class="testimonial-item">
                <p class="mt-0 stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p>{{$client['text']}}</p>
                <img src="images/avatar.png" alt="">
                <div class="author">
                    <!-- <div class="mt-4 text-bold">Alan Monre</div> -->
                    <div>{{$client['name']}}</div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end: Testimonials -->
    </div>
    <div class="triangle-divider-bottom"></div>
</section>

@include('partials.last-news')


@endsection