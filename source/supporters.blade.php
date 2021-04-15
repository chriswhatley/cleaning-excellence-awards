@extends('_layouts.master', 
	['page_title' => 'THE FSM Awards 2022 Supporters ', 
	'meta_title' => 'The FSM Awards 2022 Supporters', 
	'meta_description' => 'The Fire & Security Matters Awards celebrate innovation and achievements in the Fire and security sectors.'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'Our Supporters', 'background_image' => 'header-b'])
       
        <section class="container mx-auto py-10 px-6 ">

	    	<div class="flex flex-wrap">

				@foreach($supporters as $supporter)
					@include('_components.supporter-component')
				@endforeach

	    	</div>

		</section>

@endsection