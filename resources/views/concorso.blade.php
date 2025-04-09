@extends('main')
@section('content')

<section class="content">
    <div class="container internal">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="ratio ratio-16x9">
                    <div class="ratio ratio-16x9">
                        <img alt="" class="rounded" src="images/assessment-interno.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 mt-4 mt-lg-0">
                <div class="heading-text heading-section">
                    <h2>{{ __('concorso.title') }}</h2>
                    <span class="lead">{!! __('concorso.p') !!}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content background-green mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading-text heading-section">
                    <h2 class="text-white">{!! __('concorso.come-funziona.title') !!}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="text-white">{!! __('concorso.come-funziona.p') !!}</p>
            </div>
        </div>
        <div class="row assessment mt-6">
            <div class="col-lg-4">
                <div class="text-center">
                    <h3>1</h3>
                    <h4>{!! __('concorso.come-funziona.steps.0.title') !!}</h4>
                    <p class="p-5">{!! __('concorso.come-funziona.steps.0.p') !!}</p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <h3>2</h3>
                    <h4>{!! __('concorso.come-funziona.steps.1.title') !!}</h4>
                    <p class="p-5">{!! __('concorso.come-funziona.steps.1.p') !!}</p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <h3>3</h3>
                    <h4>{!! __('concorso.come-funziona.steps.2.title') !!}</h4>
                    <p class="p-5">{!! __('concorso.come-funziona.steps.2.p') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content background-blue mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-text heading-section">
                    <h2>{!! __('concorso.perche-scegliere.title') !!}</h2>
                </div>
            </div>
        </div>
        <div class="row perche-scegliere mt-6">
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/1.png" alt="" srcset=""></div>
                    <h4>{!! __('concorso.perche-scegliere.points.0.title') !!}</h4>
                    <p>{!! __('concorso.perche-scegliere.points.0.p') !!}</p>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/2.png" alt="" srcset=""></div>
                    <h4>{!! __('concorso.perche-scegliere.points.1.title') !!}</h4>
                    <p>{!! __('concorso.perche-scegliere.points.1.p') !!}</p>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/2.png" alt="" srcset=""></div>
                    <h4>{!! __('concorso.perche-scegliere.points.2.title') !!}</h4>
                    <p>{!! __('concorso.perche-scegliere.points.2.p') !!}</p>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/3.png" alt="" srcset=""></div>
                    <h4>{!! __('concorso.perche-scegliere.points.3.title') !!}</h4>
                    <p>{!! __('concorso.perche-scegliere.points.3.p') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.dicono')
@include('partials.last-news')

@endsection