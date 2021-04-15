<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ isSet($page_title) ?  $page_title . ' | ' : '' }}{{ $page->siteTitle }}</title>
<meta name="description" content="{{ $meta_description }}">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;900&display=swap" rel="stylesheet" rel="preload">
<link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('/css/main.css') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ $page->baseUrl }}/assets/images/meta/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ $page->baseUrl }}/assets/images/meta/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ $page->baseUrl }}/assets/images/meta/favicon-16x16.png">
<link rel="mask-icon" href="{{ $page->baseUrl }}/assets/images/meta/safari-pinned-tab.svg" color="#d2232a">
<link rel="manifest" href="{{ $page->baseUrl }}/manifest.json">
<meta name="theme-color" content="#ffffff">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@FSMatters_Mag">
<meta name="twitter:title" content="{{ $meta_title }}">
<meta name="twitter:description" content="{{ $meta_description }}">
<meta name="twitter:image" content="{{ $page->baseUrl }}/assets/images/meta/twitter-card-large.png">
<meta name="twitter:creator" content="@HSMmagazine">
<meta property="og:url" content="{{ trim($page->baseUrl, '/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $meta_title }}" />
<meta property="og:description" content="{{ $meta_description }}" />
<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/meta/twitter-card-large.png" />