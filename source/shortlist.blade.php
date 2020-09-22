@extends('_layouts.master', 
	['page_title' => 'Awards Shortlist', 
	'meta_title' => 'The Awards Shortlist for the 2020 Safety & Health Excellence Awards', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'The Shortlists', 'background_image' => 'header-a'])
       
        <section class="container mx-auto py-10 px-6 ">

        	<div class="w-full text-center">
	    		<p>More than 200 entries were received for the 2020 Awards across 10 Categories. The winners will be announced at a gala dinner hosted by comedian Alistair McGowan on {{ $page->awardsDate }} at the Vox, Resorts World Birmingham.</p>
				<p class="mt-4 font-semibold">Tickets to attend cost &pound;199+VAT or &pound;1800+VAT for a table of 10.</p>
				<a href="/tickets" class="btn-primary mt-4 text-md sm:text-sm md:text-md">
        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
        				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
        			</svg>
        			Buy Tickets Now
        		</a>
	    	</div>

	    	<div class="mt-6 flex flex-wrap">

				@foreach($shortlists as $shortlist)
					@include('_components.shortlist-component')
				@endforeach

	    	</div>

		</section>

@endsection