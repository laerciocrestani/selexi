@extends('main')
@section('content')

<section class="content">
    <div class="container internal">
        <div class="heading-text heading-section">
            <h2>{{ __('partner.title') }}</h2>
        </div>
        <p>{!! __('partner.p1') !!}</p>
    </div>
</section>

<div class="container container-separator">
    <div class="separator-green"></div>
</div>
<section class="">
    <div class="container internal partner ">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="palco d-flex justify-content-center align-items-center">
                    <img alt="" class="rounded img-fluid" src="images/partner/examonline.png">
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0">
                <div class="heading-text mb-0 heading-section">
                    <h4 class="mt-4 mt-lg-0">{{ __('partner.examonline.title') }}</h4>
                    <div class="lead">{!! __('partner.examonline.p') !!}</div>
                    <div>
                        <a href="#" class="mt-4 btn btn-rounded btn-success-green pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-lg-4">
                <div class="palco d-flex justify-content-center align-items-center">

                    <img alt="" class="rounded img-fluid" src="images/partner/fluorish.png">
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0">
                <div class="heading-text mb-0 heading-section">
                    <h4 class="mt-4 mt-lg-0">{{ __('partner.fluorish.title') }}</h4>
                    <div class="lead">{!! __('partner.fluorish.p') !!}</div>
                    <div>
                        <a href="#" class="mt-4 btn btn-rounded btn-success-green pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-lg-4">
                <div class="palco d-flex justify-content-center align-items-center">

                    <img alt="" class="rounded img-fluid" src="images/partner/2hirintio.png">
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0">
                <div class="heading-text mb-0 heading-section">
                    <h4 class="mt-4 mt-lg-0">{{ __('partner.hirint-io.title') }}</h4>
                    <div class="lead">{!! __('partner.hirint-io.p') !!}</div>
                    <div>
                        <a href="#" class="mt-4 btn btn-rounded btn-success-green pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@include('partials.last-news')

@endsection