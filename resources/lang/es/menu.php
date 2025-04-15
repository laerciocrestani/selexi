
<?php
return [

    'items' => [
        [
            'label' => 'Servicios',
            'url' => 'servizi',
            'children' => [
                [
                    'label' => 'Concursos', 
                    'url' => 'concorso', 
                    'children' => [
                        [
                            'label' => 'Computer Based Test (CBT)', 
                            'url' => 'concorso-cbt'
                        ],
                        [
                            'label' => 'Paper Based Test (PBT)', 
                            'url' => 'concorso-pbt'
                        ],
                        [
                            'label' => 'Tablet Based Test (TBT)', 
                            'url' => 'concorso-tbt'
                        ],
                    ]
                ],
                [
                    'label' => 'Evaluación', 
                    'url' => 'assessment',
                ],
            ]
        ],
        ['label' => 'Centro de Examen', 'url' => '#'],
        ['label' => 'Formación', 'url' => 'formazione'],
        ['label' => 'Blog', 'url' => 'news'],
        ['label' => 'Quienes somos', 'url' => 'chi-siamo'],
        ['label' => 'Sostenibilidad', 'url' => '#'],
        ['label' => 'Socios', 'url' => 'partner'],
        ['label' => 'Selexi en el Mundo', 'url' => 'selexi-nel-mondo'],
        ['label' => 'Contactos', 'url' => 'contatti'],
    ]
];
