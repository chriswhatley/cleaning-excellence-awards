<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
	// 'baseUrl' => 'http://192.168.0.65:3000',
    'siteTitle' => 'FSM Awards',
    'awardsDate' => 'March 2022',
    'openingDate' => '1st May 2021',
    'collections' => [  'awards',
    					'shortlists' => ['sort' => 'sort-order',],
    					'sponsors' => ['sort' => 'sort-order'] 
    				],
];
