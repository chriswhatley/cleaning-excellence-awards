@extends('_layouts.master', 
    [
        'page_title' => "$page->name",
        'nav_selector' => 'visit',
        'meta_title' => "Award Criteria : $page->name",
        'meta_description' => ""
    ]
)

@section('content')
    
    <main class="relative bg-white w-full z-10">

         @include('_components.title-component', ['title' => 'Award Criteria', 'background_image' => 'highlights'])

         <section class="container mx-auto max-w-5xl px-6">     
            
            <div class="flex justify-center mt-6">
               <img class="mr-4 h-6 w-6" src="{{ $page->baseUrl }}/assets/images/icons/{{ $page->icon }}.svg" alt="Icon">  
            </div>

            <div class="mt-2 mx-auto">
                <p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">{{ $page->title }}</p>
                <p class="mt-6 text-center font-semibold text-lg">DEADLINE FOR ENTRIES: {{ $page->awardsDeadline }}</p>
            </div>
        </section>  

        <section class="container mx-auto px-6 py-6 md:py-10 smallprint">  
            {!! $page->getContent() !!}   

            <div class="mt-10 text-center">
                <a href="/nominate" class="btn-primary">
                    <div class="bg-white w-full rounded p-3 text-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-lochmara-500 inline w-5 h-5 mr-2">
                            <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
                        </svg>
                        Make a Nomination
                    </div>
                </a>
            </div>

        </section>
    
@endsection