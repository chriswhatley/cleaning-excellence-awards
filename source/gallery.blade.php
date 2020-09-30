@extends('_layouts.master', 
	['page_title' => 'SHE Awards Gallery', 
	'meta_title' => 'SHE Awards Gallery', 
	'meta_description' => 'Highlights from the 2019 Safety & Health Excellence Awards, held at the Vox, Resorts World, Birmingham'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Gallery', 'background_image' => 'header-d'])

		<section class="container mx-auto px-6">  
			<div class="w-full mt-6 md:flex">

				<div class="w-full md:w-1/2">
					<a data-flickr-embed="true"  href="https://www.flickr.com/photos/152884180@N03/albums/72157707922437455" title="Safety &amp; Health Excellence Awards 2019">
						<img class="w-full" src="https://live.staticflickr.com/65535/40654286463_0fabe2be35_z.jpg" alt="Safety &amp; Health Excellence Awards 2019">
					</a>
					<script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
				</div>	

				<div class="w-full md:w-1/2 md:pl-6">
					<p class="w-full mt-6 md:mt-3 font-semibold text-lg leading-snug">Highlights from the 2019 Safety &amp; Health Excellence Awards, held at the Vox, Resorts World, Birmingham.</p>
					<p class="w-full mt-6">Use the arrows to scroll through the album or check out pictures of our guests in fancy dress in our photobooth.</p>
					<div class="mt-6 w-4/5 md:w-3/5 mx-auto flex flex-wrap justify-center">
						<span class="w-full text-center">Sponsored by</span>
						<img src="{{ $page->baseUrl }}/assets/images/sponsors/carousel/havi.svg" alt="Havi" class="w-full sm:w-96 h-auto">
					</div>
				</div>

			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection