@extends('main')
@section('content')

<section class="content">
    <div class="container internal">
        <div class="heading-text heading-section">
            <h2>{{ __('servizi.title') }}</h2>
        </div>
        <p>{!! __('servizi.p1') !!}</p>
    </div>
</section>

<div class="container container-separator">
    <div class="separator-green"></div>
</div>
<section class="background-light-blue">
    <div class="container internal">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="ratio ratio-16x9">
                    <div class="ratio ratio-16x9">
                        <img alt="" class="rounded" src="images/325x350.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 mt-4  mt-lg-0">
                <div class="heading-text heading-section">
                    <h4>{{ __('servizi.concorso.title') }}</h4>
                    <span class="lead">{!! __('servizi.concorso.p') !!}</span>
                    <div class="mt-4">
                        <a href="#" class="btn btn-success-green btn-rounded pull-right" class="item-link">{{ __('btn.scopri-di-piu')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container container-separator">
    <div class="separator-green"></div>
</div>
<section class="background-light-gray">
    <div class="container internal">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-1 order-1 order-lg-2">
                <div class="ratio ratio-16x9">
                    <img alt="" class="rounded" src="images/325x350.png">
                </div>
            </div>
            <!-- Text column second on mobile, first on larger screens -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="heading-text heading-section">
                    <h4 class="mt-4 mt-lg-0">{{ __('servizi.assessment.title') }}</h4>
                    <span class="lead">{!! __('servizi.assessment.p') !!}</span>
                    <div class="mt-4">
                        <a href="#" class="btn btn-success-green btn-rounded pull-right" class="item-link">
                            {{ __('btn.scopri-di-piu')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container container-separator">
    <div class="separator-green"></div>
</div>
<section class="content">
    <div class="container internal">
        <p>{{ __('servizi.p2') }}</p>
    </div>
</section>

@include('partials.last-news')

@endsection