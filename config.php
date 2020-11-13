<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
	// 'baseUrl' => 'http://192.168.0.65:3000',
    'siteTitle' => 'SHE Awards 2020',
    'awardsDate' => '28th April 2021',
    'collections' => [  'awards',
    					'shortlists' => ['sort' => 'sort-order',],
    					'sponsors' => ['sort' => 'sort-order'] 
    				],
];
