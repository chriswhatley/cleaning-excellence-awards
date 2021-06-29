<!-- Grid column -->
<div class="w-full flex flex-col p-2">

	<!-- Column contents -->
	<div class="sponsor flex flex-col flex-1 px-8 py-8 bg-gray-200 rounded-lg">
		<div class="flex-1">
			<h2 class="w-full text-center md:text-left mt-2 text-3xl text-grey-800 font-semibold uppercase">{{ $organisation->name }}</h2>									
			<div class="w-full my-6 text-md">
				
				<div class="hidden md:block float-right ml-6 mb-3">
					<a href="{{ $organisation->website }}" target="_blank" rel="noopener">
						<img class="md:w-72 lg:w-84" src="{{ $page->baseUrl }}/assets/images/supporters/{{ $organisation->logo }}.svg" alt="Logo : {{ $organisation->name }} ">
					</a>		
				</div>

				{!! $organisation->getContent() !!}			

				<div class="md:hidden">
					<a href="{{ $organisation->website }}" target="_blank" rel="noopener">
						<img class="w-64 mx-auto" src="{{ $page->baseUrl }}/assets/images/supporters/{{ $organisation->logo }}.svg" alt="Logo : {{ $organisation->name }} ">
					</a>		
				</div>
				
			</div>

			<div class="text-center md:text-left md:mt-4">
				<a href="{{ $organisation->website }}" class="btn-primary text-md sm:text-sm md:text-md" target="_blank" rel="noopener">
					<div class="bg-white w-full rounded p-3 text-downriver-500">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
							<path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm2-2.25a8 8 0 0 0 4-2.46V9a2 2 0 0 1-2-2V3.07a7.95 7.95 0 0 0-3-1V3a2 2 0 0 1-2 2v1a2 2 0 0 1-2 2v2h3a2 2 0 0 1 2 2v5.75zm-4 0V15a2 2 0 0 1-2-2v-1h-.5A1.5 1.5 0 0 1 4 10.5V8H2.25A8.01 8.01 0 0 0 8 17.75z"/>
						</svg>
						Visit website
					</div>
				</a>
			</div>	
		</div>
	</div>

</div>
