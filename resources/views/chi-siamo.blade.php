@extends('main')
@section('content')

<section class="content">
    <div class="container internal">
        <div class="heading-text heading-section">
            <h2>{{ __('chi-siamo.title') }}</h2>
        </div>
        <p>{!! __('chi-siamo.p1') !!}</p>
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
                    <h4>{{ __('chi-siamo.competenze.title') }}</h4>
                    <span class="lead">{!! __('chi-siamo.competenze.p') !!}</span>
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
            
            <div class="col-lg-5 offset-lg-1 order-lg-2">
                <div class="ratio ratio-16x9">
                    <div class="ratio ratio-16x9">
                    <img alt="" class="rounded" src="images/325x350.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mt-4 mt-lg-0">
                <div class="heading-text heading-section">
                    <h4>{{ __('chi-siamo.team.title') }}</h4>
                    <span class="lead">{!! __('chi-siamo.team.p') !!}</span>
                </div>
            </div>
        </div>
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
                    <h4>{{ __('chi-siamo.tecnologiche.title') }}</h4>
                    <span class="lead">{!! __('chi-siamo.tecnologiche.p') !!}</span>
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
            <div class="col-lg-5 offset-lg-1 order-lg-2">
                <div class="ratio ratio-16x9">
                    <div class="ratio ratio-16x9">
                    <img alt="" class="rounded" src="images/325x350.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="heading-text heading-section mt-4 mt-lg-0">
                    <h4>{{ __('chi-siamo.impegno.title') }}</h4>
                    <span class="lead">{!! __('chi-siamo.impegno.p') !!}</span>
                </div>
            </div>
            
        </div>
    </div>
</section>


@include('partials.last-news')  

@endsection