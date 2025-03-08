@extends('main')
@section('content')

<section class="content">
    <div class="container internal">
        <div class="heading-text heading-section">
            <h2>{{ __('contatti.title') }}</h2>
        </div>
        <p>{!! __('contatti.p1') !!}</p>
    </div>
</section>

<div class="container container-separator">
    <div class="separator-green"></div>
</div>
<section class="mt-5">
    <div class="container internal contatti">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <div class="widget-title">Sede legale e operativa</div>
                    <ul class="list">
                        <li>Via Gerolamo Vida, 11 - 20127 Milano<br>P.IVA 12852900153<br>Tel. 02 58 32 23 02<br>Fax 02 58 43 48 33</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <div class="widget-title">Sede di Roma</div>
                    <ul class="list">
                        <li>Via Scipio Sighele  - 00177 Roma </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
            <div class="widget">
                    <div class="widget-title">Selexi Test Center</div>
                    <ul class="list">
                        <li>Via Gerolamo Vida, 11 - 20127 Milano</li>
                    </ul>
                </div>
            </div>
           
        </div>
    </div>
</section>



@endsection