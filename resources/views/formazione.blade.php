@extends('main')
@section('content')

<section class="content">
    <div class="container internal">
        <div class="heading-text heading-section">
            <h2>{{ __('formazione.title') }}</h2>
        </div>
        <p>{!! __('formazione.p1') !!}</p>
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
            <div class="col-lg-6 offset-lg-1 mt-4 mt-lg-0">
                <div class="heading-text heading-section">
                    <h4>{{ __('formazione.servizi.title') }}</h4>
                    <span class="lead">{!! __('formazione.servizi.p') !!}</span>
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
            <div class="col-lg-5 offset-lg-1 offset-lg-1 order-lg-2">
                <div class="ratio ratio-16x9">
                    <div class="ratio ratio-16x9">
                    <img alt="" class="rounded" src="images/325x350.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mt-4 mt-lg-0">
                <div class="heading-text heading-section">
                    <h4>{{ __('formazione.scegliere.title') }}</h4>
                    <span class="lead">{!! __('formazione.scegliere.p') !!}</span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.last-news')  

@endsection