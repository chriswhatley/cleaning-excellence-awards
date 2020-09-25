<!-- Grid column -->
<div class="w-full flex flex-col p-4 md:w-1/2">

	<!-- Column contents -->
	<div class="flex flex-col flex-1 px-8 py-8 bg-gray-200 rounded-lg">
		<div class="flex-1">
			<div class="text-center">			
				<div class="flex justify-center">
					<img class="mr-4 h-6 w-6" src="{{ $page->baseUrl }}/assets/images/icons/{{ $award->icon }}.svg " alt="Icon">	
				</div>
				<h3 class="mt-2 text-xl text-grey-800 font-semibold uppercase">{{ $award->title }}</h3>										
			</div>	
			<p class="mt-6 text-md">
				{{ $award->description }}
			</p>
		</div>

		<div class="mt-6 xl:flex xl:justify-between xl:items-center">
			<div class="w-full sm:w-2/3 md:w-4/5 lg:w-3/5 mx-auto xl:mt-16">
				<a href="{{ $page->baseUrl }}/assets/docs/{{ $award->criteria }}" class="flex justify-center items-center px-4 py-3 bg-yellow-500 text-white font-bold uppercase rounded-lg text-md" target="_blank">
					<img src="{{ $page->baseUrl }}/assets/images/icons/{{ $award->icon }}.svg" alt="Icon" class="w-5 h-5">
					<span class="ml-3">Award Criteria</span>
				</a>
			</div>

			@if(strlen($award->sponsor) > 0)	
				<div class="w-full mt-6 sm:max-w-xs mx-auto lg:w-3/5 xl:ml-12 text-center">
					<span class="block"> @php echo $award->organiser ? 'Organised by' : 'Sponsored by' @endphp </span>
					<img class="mt-4" src="{{ $page->baseUrl }}/assets/images/sponsors/awards/{{ $award->sponsor }}.svg" alt="{{ $award->sponsor }} Logo">	
				</div>
			@endif
		</div>
	</div>

</div>
