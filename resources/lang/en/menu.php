
<?php
return [

    'items' => [
        [
            'label' => 'Services',
            'url' => 'servizi',
            'children' => [
                [
                    'label' => 'Competitions', 
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
                    'label' => 'Assessment', 
                    'url' => 'assessment',
                ],
            ]
        ],
        ['label' => 'Test Center', 'url' => '#'],
        ['label' => 'Training', 'url' => 'formazione'],
        ['label' => 'Blog', 'url' => 'news'],
        ['label' => 'About Us', 'url' => 'chi-siamo'],
        ['label' => 'Sustainability', 'url' => '#'],
        ['label' => 'Partner', 'url' => 'partner'],
        ['label' => 'Selexi Worldwide', 'url' => 'selexi-nel-mondo'],
        ['label' => 'Contacts', 'url' => 'contatti'],
    ]
];
