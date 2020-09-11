<div class="w-full mb-6">
	<div class="text-center sm:flex sm:items-center sm:text-left">			
		<div class="flex justify-center">
			<img class="mr-4 h-6 w-6" src="{{ $page->baseUrl }}assets/images/icons/{{ $award->icon }}.svg " alt="Icon">	
		</div>
		<h3 class="mt-3 sm:mt-0 text-lg text-grey-800 font-semibold uppercase">{{ $award->title }}</h3>										
	</div>	
	
	<div class="flex flex-wrap mt-4 mb-6">
		@if(strlen($award->sponsor) > 0)
			<div class="w-full md:w-2/3">
		@endif
				{{ $award->description }}
				<div class="w-56 mt-6 mx-auto sm:mx-0">
					<a href="{{ $page->baseUrl }}assets/docs/{{ $award->criteria }}" class="flex justify-center items-center px-4 py-3 bg-yellow-500 text-white font-bold uppercase rounded-lg text-md" target="_blank">

						@php  
							echo file_get_contents($page->baseUrl.'assets/images/icons/'.$award->icon.'.svg');  
						@endphp
						<span class="ml-3">Award Criteria</span>
					</a>
				</div>
		@if(strlen($award->sponsor) > 0)
			</div>
		@endif
		
		@if(strlen($award->sponsor) > 0)	
			<div class="hidden md:flex md:w-1/3 md:flex-col md:justify-start md:items-center">
				<span class="block"> @php echo $award->organiser ? 'Organised by' : 'Sponsored by' @endphp </span>
				<img class="w-3/5 mt-5" src="{{ $page->baseUrl }}/assets/images/sponsors/awards/{{ $award->sponsor }}.svg" alt="{{ $award->sponsor }} Logo">	
			</div>
		@endif
	</div>
</div>