@extends('main')
@section('content')
<!-- SECTION IMAGE FULLSCREEN -->
<section class="halfscreen-contatti">
    <div class="container container-fullscreen text-light">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-middle">
                    <h1 class="text-medium">{!! __('blog.title') !!}</h1>
                    <p class="lead">{{ __('blog.p') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2 class="text-center">I nostri articoli</h2>
        </div>

        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @for($i = 0; $i < 12; $i++)
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
        @endfor
    </div>
    <div class="text-center">
        <a href="#" class="btn btn-success-green btn-rounded" class="item-link">{{ __('btn.guarda-tutti')}}</a>

    </div>
    </div>
</section>
<!-- end: BLOG -->

@include('partials.last-news')

@endsection