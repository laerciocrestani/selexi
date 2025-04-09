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
                    <h2>{{ __('concorso-cbt.title') }}</h2>
                    <span class="lead">{!! __('concorso-cbt.description') !!}</span>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="content background-green mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2 class="text-white">Come funziona</h2>
                </div>
            </div>
            <div class="col-lg-9">
                <p class="text-white">{!! __('concorso-cbt.come-funziona.p') !!}</p>
            </div>
        </div>
        <div class="row assessment mt-6">
            <div class="col-lg-4">
                <div class="text-center">
                    <h3>1</h3>
                    <h4>{{ __('concorso-cbt.come-funziona.a.title') }}</h4>
                    <p class="p-5">{{ __('concorso-cbt.come-funziona.a.description') }}</p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <h3>2</h3>
                    <h4>{{ __('concorso-cbt.come-funziona.b.title') }}</h4>
                    <p class="p-5">{{ __('concorso-cbt.come-funziona.b.description') }}</p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="text-center">
                    <h3>3</h3>
                    <h4>{{ __('concorso-cbt.come-funziona.c.title') }}</h4>
                    <p class="p-5">{{ __('concorso-cbt.come-funziona.c.description') }}</p>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="content background-blue mb-0 ">
    <div class="container">
        <div class="row concorso-more mt-6">
            <div class="col-lg-6">
                <div>
                    <h2>{!! __('concorso-cbt.more-a.title') !!}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <p>{!! __('concorso-cbt.more-a.description') !!}</p>
                </div>
            </div>

        </div>
        <div class="row concorso-more mt-6">
            <div class="col-lg-6">
                <div>
                    <h2>{!! __('concorso-cbt.more-b.title') !!}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <p>{!! __('concorso-cbt.more-b.description') !!}</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="a-chi-ci-rivolgiamo pt-0 pt-lg-6 pb-0">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-9">
                <div class="heading-text heading-section">
                    <h2 class="text-center mb-3">{!! __('concorso-cbt.scegliere-il-nostro-sistema.title') !!}</h2>
                    <div class="text-center lead">{!! __('concorso-cbt.scegliere-il-nostro-sistema.p') !!}</div>
                </div>
            </div>
        </div>
        <div class="row my-6">
            <div class="col-lg-6">
                <div class="icon-box small">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">{!! __('concorso-cbt.scegliere-il-nostro-sistema.item1.description') !!}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box small ">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">{!! __('concorso-cbt.scegliere-il-nostro-sistema.item2.description') !!}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box small ">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">{!! __('concorso-cbt.scegliere-il-nostro-sistema.item3.description') !!}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box small ">
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="text-bold">{!! __('concorso-cbt.scegliere-il-nostro-sistema.item4.description') !!}</p>
                </div>
            </div>
        </div>
    </div>

</section>

@include('partials.dicono')



@include('partials.last-news')

@endsection