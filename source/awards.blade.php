---
pagination:
    collection: awards
    perPage: 15
---

@extends('_layouts.master', 
	['page_title' => 'Awards Categories', 
	'meta_title' => 'The Awards Categories for the 2020 Safety & Health Excellence Awards', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	<div class="w-full h-96 object-cover header"></div>
        

        <section class="container mx-auto py-10 px-6 lg:px-20">

		 	@foreach ($pagination->items as $award)

				@include('_components.award-synopsis')

				@if ($award != $pagination->items->last())
		            <hr class="border-b my-10">
		        @endif

			@endforeach

		</section>

@endsection