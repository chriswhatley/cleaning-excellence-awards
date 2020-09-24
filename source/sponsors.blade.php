@extends('_layouts.master', 
	['page_title' => 'Sponsors', 
	'meta_title' => 'The SHE Awards 2020 Sponsors', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'The Sponsors', 'background_image' => 'header-b'])
       
        <section class="container mx-auto py-10 px-6 ">

	    	<div class="flex flex-wrap">

				@foreach($sponsors as $sponsor)
					@include('_components.sponsor-component')
				@endforeach

	    	</div>

		</section>

@endsection