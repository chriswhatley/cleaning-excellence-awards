@extends('_layouts.master', 
	['page_title' => 'Awards Categories', 
	'meta_title' => 'The Cleaning Excellence Awards will be broadcast virtually alongside our new interactive Digital conference; Cleaning Matters Live', 
	'meta_description' => 'The Cleaning Excellence Awards shine a spotlight on the most innovative products, services and individuals. From technological innovations and smart solutions, to sustainability and individual commitment, the awards celebrate standards of excellence throughout the professional cleaning and hygiene sector.'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'The Awards', 'background_image' => 'highlights'])
       
        <section class="container mx-auto py-10 px-6">

        	<div class="w-full text-center">
	    		<p>Please make sure you have properly read the categories and criteria before entering. The criteria is different for each category and you are able to enter multiple categories. You can also enter more than one nomintion in each category provided they are different products, services or nominees.</p>
				<p class="mt-4 text-center font-semibold">DEADLINE FOR ENTRIES: {{ $page->awardsDeadline }}.</p>
	    	</div>

			<div class="mt-12 flex flex-wrap">
				@foreach ($awards as $award)
					@include('_components.award-component')	
				@endforeach
			</div>
		 	

		</section>

@endsection