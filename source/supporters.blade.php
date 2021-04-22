@extends('_layouts.master', 
	['page_title' => 'THE FSM Awards 2022 Supporters ', 
	'meta_title' => 'The FSM Awards 2022 Supporters', 
	'meta_description' => 'The Fire & Security Matters Awards celebrate innovation and achievements in the Fire and security sectors.'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'Our Sponsors & Supporters', 'background_image' => 'hero'])

    	<section class="container mx-auto py-10 px-6" id="sponsors">

    		<h3 class="my-3 ml-3 text-3xl uppercase font-bold tracking-tighter leading-tight">Our Sponsors</h3>

	    	<div class="flex flex-wrap">

				@foreach($sponsors as $organisation)
					@include('_components.supporter-component', ['status' => 'sponsors'])
				@endforeach

	    	</div>

		</section>
       
        <section class="container mx-auto pb-10 px-6">
        	<div id="supporters" class="h-44"></div>
        	<h3 class="ml-3 text-3xl uppercase font-bold tracking-tighter leading-tight">Our Supporters</h3>	
	    	<div class="flex flex-wrap">

				@foreach($supporters as $organisation)
					@include('_components.supporter-component', ['status' => 'supporters'])
				@endforeach

	    	</div>

		</section>

@endsection