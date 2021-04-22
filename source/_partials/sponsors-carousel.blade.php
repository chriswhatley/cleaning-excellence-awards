<div class="container mx-auto py-4">
	<div class="text-center">
		<h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">Sponsored by</h2>
		<a class="inline-block mt-1 mb-2 font-semibold text-red-pigment-600 border-b-2 border-white hover:border-red-pigment-600 transition-all duration-500" href="/supporters">Find out more about our sponsors</a>	
	</div>	
	<div class="flex justify-center">
		@foreach($sponsors as $sponsor)
			<div class="px-3 w-1/4 flex justify-center">
				<img src="{{ $page->baseUrl }}/assets/images/sponsors/carousel/{{ $sponsor->logo }}.svg" alt="{{ $sponsor->name }}">
			</div>
		@endforeach
	</div>
</div>			
