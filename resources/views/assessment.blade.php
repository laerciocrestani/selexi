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
                    <h2>{{ __('assessment.title') }}</h2>
                    <span class="lead">{!! __('assessment.p') !!}</span>
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
                <p class="text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
            </div>
        </div>
        <div class="row assessment mt-6">
            <div class="col-lg-3">
                <div class="text-center">
                    <h3>1</h3>
                    <h4>Definizione delle<br> competenze</h4>
                    <p class="p-5">collaboriamo con i nostri clienti per <strong>definire le competenze </strong>chiave richieste e <strong>sviluppare criteri di valutazione </strong>specifici per ogni posizione o concorso.</p>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                <h3>2</h3>
                    <h4>Personalizzazione <br>del test</h4>
                    <p class="p-5"> li in base alle esigenze specifiche di enti pubblici e aziende.</p>
               </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                <h3>3</h3>
                    <h4>Valutazione <br>digitale</h4>
                    <p class="p-5">utilizziamo una <strong>piattaforma per la gestione dei concorsi pubblici e privati</strong> che permette di somministrare prove in modalità digitale, migliorando la precisione e riducendo i tempi di valutazione.</p>
                 </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                <h3>4</h3>
                    <h4>Report <br>dettagliati</h4>
                    <p class="p-5">forniamo report <strong>completi e dettagliati</strong> che evidenziano i punti di forza e le aree di miglioramento di ogni candidato, facilitando decisioni di selezione informate e basate su dati oggettivi.</p>
                 </div>
            </div>

        </div>

    </div>
</section>


<section class="content background-blue mb-0 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-text heading-section">
                    <h2>Perché scegliere il servizio<br> assessment di Selexi?</h2>
                </div>
            </div>
        </div>
        <div class="row perche-scegliere mt-6">
            <div class="col-lg-3">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/1.png" alt="" srcset=""></div>
                    <h4>Metodologie <br>innovative</h4>
                    <p>utilizziamo tecniche di valutazione avanzate e strumenti digitali per garantire la massima precisione e oggettività.</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/2.png" alt="" srcset=""></div>
                    <h4>Esperienza <br>certificata</h4>
                    <p>con oltre 20 anni di esperienza nella gestione dei concorsi pubblici e privati, siamo leader nel settore degli assessment.</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/2.png" alt="" srcset=""></div>
                    <h4>Personalizzazione <br>completa</h4>
                    <p>offriamo soluzioni su misura per ogni tipo di concorso, dalla selezione test per enti pubblici alla valutazione test per aziende.</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="text-center">
                    <div class="icon"><img src="/images/perche-scegliere/1.png" alt="" srcset=""></div>
                    <h4>Supporto <br>dedicato</h4>
                    <p>forniamo assistenza continua in ogni fase del processo, garantendo che tutte le procedure siano conformi alle normative vigenti e che i risultati siano consegnati in modo rapido e accurato.</p>
                    <!-- <a href="#" class="btn btn-white btn-rounded mt-3" class="item-link">{{ __('btn.guarda-tutti')}}</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.dicono')



@include('partials.last-news')

@endsection