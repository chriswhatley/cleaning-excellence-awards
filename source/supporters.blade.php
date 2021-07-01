@extends('_layouts.master', 
	['page_title' => 'The Cleaning Excellence Awards Supporters', 
	'meta_title' => 'The Cleaning Excellence Awards Supporters', 
	'meta_description' => 'The Cleaning Excellence Awards celebrates innovation and achievements in the cleaning & hygiene sector.'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'Our Supporters', 'background_image' => 'hero'])

        <section class="container mx-auto py-12 px-6">
	    	<div class="flex flex-wrap">
				@foreach($supporters as $organisation)
					@include('_components.supporter-component')
				@endforeach
	    	</div>
		</section>

@endsection