@extends('main')
@section('content')

<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Leaflet MarkerCluster -->
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css" />
<script src="https://unpkg.com/leaflet.markercluster/dist/leaflet.markercluster.js"></script>

<style>
    #map {
        height: 500px;
        width: 100%;
    }
</style>

<section class="content mb-0 pb-0">
    <div class="container internal">
        <div class="heading-text heading-section">
            <h2>{{ __('selexi-nel-mondo.title') }}</h2>
        </div>
        <!-- <p>{!! __('selexi-nel-mondo.p1') !!}</p> -->
    </div>
</section>


        <div id="map"></div>

        <script>
        // Inicializa o mapa centrado na Europa
        var map = L.map('map').setView([20, 0], 2);

        // Mapa Clean (Carto Light)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; OpenStreetMap &copy; CARTO',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        // Criar um grupo de clusters
        var markers = L.markerClusterGroup();

        // Lista de pontos [latitude, longitude, título, descrição]

        

        var pontos = [
            // África (7)
            [-1.286389, 36.817223, "Nairobi, Quênia", "Capital do Quênia", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [-26.204103, 28.047305, "Joanesburgo, África do Sul", "Cidade mais rica da África", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [9.05785, 7.49508, "Abuja, Nigéria", "Capital da Nigéria", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [-33.92487, 18.42406, "Cidade do Cabo, África do Sul", "Famosa pela Table Mountain", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [30.04442, 31.23571, "Cairo, Egito", "Maior cidade do mundo árabe", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [-34.6037, 19.2069, "Hermanus, África do Sul", "Melhor lugar para observar baleias", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [6.5244, 3.3792, "Lagos, Nigéria", "Maior cidade da África", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],

            // América (7)
            [40.7128, -74.0060, "Nova York, EUA", "A cidade que nunca dorme", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [-23.55052, -46.633308, "São Paulo, Brasil", "Maior cidade da América do Sul", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [-34.6037, -58.3816, "Buenos Aires, Argentina", "Cidade do tango", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [-22.9068, -43.1729, "Rio de Janeiro, Brasil", "Cidade Maravilhosa", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [19.4326, -99.1332, "Cidade do México, México", "Maior cidade da América do Norte", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [45.4215, -75.6993, "Ottawa, Canadá", "Capital do Canadá", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [-33.4489, -70.6693, "Santiago, Chile", "Capital do Chile", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],

            // Ásia (12)
            [35.6895, 139.6917, "Tóquio, Japão", "Maior metrópole do mundo", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [1.3521, 103.8198, "Singapura", "País cidade-estado futurista", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [31.2304, 121.4737, "Xangai, China", "Maior cidade da China", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [39.9042, 116.4074, "Pequim, China", "Capital da China", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [13.7563, 100.5018, "Bangkok, Tailândia", "Cidade dos templos", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [28.7041, 77.1025, "Nova Déli, Índia", "Capital da Índia", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [25.276987, 55.296249, "Dubai, Emirados Árabes", "Cidade do luxo", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [37.5665, 126.978, "Seul, Coreia do Sul", "Capital da Coreia do Sul", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [41.0082, 28.9784, "Istambul, Turquia", "Ponte entre Europa e Ásia", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [23.1291, 113.2644, "Cantão, China", "Centro econômico do sul da China", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [14.5995, 120.9842, "Manila, Filipinas", "Capital das Filipinas", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [55.7558, 37.6173, "Moscou, Rússia", "Capital da Rússia", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],

            // Oceania (1)
            [-33.8688, 151.2093, "Sydney, Austrália", "Famosa pela Ópera de Sydney", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],

            // Europa (20)
            [48.8566, 2.3522, "Paris, França", "Cidade Luz", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [51.5074, -0.1278, "Londres, Reino Unido", "Capital do Reino Unido", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [40.4168, -3.7038, "Madri, Espanha", "Capital da Espanha", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [41.9028, 12.4964, "Roma, Itália", "Cidade Eterna", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [52.5200, 13.4050, "Berlim, Alemanha", "Capital da Alemanha", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [37.9838, 23.7275, "Atenas, Grécia", "Berço da civilização ocidental", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [59.3293, 18.0686, "Estocolmo, Suécia", "Veneza do Norte", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [48.2082, 16.3738, "Viena, Áustria", "Cidade da música clássica", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [50.0755, 14.4378, "Praga, República Tcheca", "Cidade das cem torres", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [60.1695, 24.9354, "Helsinque, Finlândia", "Capital da Finlândia", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [55.6761, 12.5683, "Copenhague, Dinamarca", "Terra da Pequena Sereia", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [45.4642, 9.1900, "Milão, Itália", "Capital da moda", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [47.4979, 19.0402, "Budapeste, Hungria", "Pérola do Danúbio", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [50.8503, 4.3517, "Bruxelas, Bélgica", "Sede da União Europeia", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [53.3498, -6.2603, "Dublin, Irlanda", "Cidade dos pubs", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [54.6872, 25.2797, "Vilnius, Lituânia", "Centro histórico medieval", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [47.1625, 19.5033, "Hungria", "Coração da Europa", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [42.6975, 23.3242, "Sofia, Bulgária", "Capital da Bulgária", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [52.2298, 21.0122, "Varsóvia, Polônia", "Renascida das cinzas", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara'],
            [46.2044, 6.1432, "Genebra, Suíça", "Sede da ONU na Europa", 'Copenhagen', 'EDU - Copenaghen (Exam Services)', 'Store Kirkestræde 1', '2nd floor, 1073 Copenhagen C.', 'exams@edu-danmark.dk', 'Sara']
        ];

        // Adicionar os pontos ao cluster
        pontos.forEach(ponto => {
            var marker = L.marker([ponto[0], ponto[1]])
                .bindPopup(`<b>${ponto[2]}</b><br>Città: ${ponto[3]} <br> Test Center: ${ponto[4]} <br> Indirizzo: ${ponto[5]}<br>Email: ${ponto[6]}<br>Contatto: ${ponto[7]}`);
            // Adiciona o marcador ao grupo de clusters
            markers.addLayer(marker);
        });

        // Adiciona os clusters ao mapa
        map.addLayer(markers);

    </script>







@endsection