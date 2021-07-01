<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'siteTitle' => 'Cleaning Excellence Awards',
    'awardsDate' => '17th November 2021',
    'awardsDeadline' => '31st August 2021',
    'registerURL' => 'https://www.cleaningmatterslive.co.uk/',
    'nominationURL' => '/nominate',
    'openingDate' => '1st July 2021',
    'collections' => [  
                        'awards' => [
                            'sort' => 'title',
                            'criteria_path' => 'criteria/{path}'
                        ],
                        'criteria' => [
                            'criterion' => 'Award Name', // Default award name, if not provided in award criteria markdown
                            'sort' => 'title',
                            'path' => '{collection}/{filename}',
                        ],
    					'supporters' => ['sort' => 'sort_order'] 
    				],
];
