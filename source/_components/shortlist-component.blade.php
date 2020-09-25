<div class="w-full flex flex-col md:w-1/2">
	
	<div class="flex-1 bg-gray-200 m-4 p-6 rounded-md">

		<div class="text-center">			
			<div class="flex justify-center">
				<img class="mr-4 h-6 w-6" src="{{ $page->baseUrl }}/assets/images/icons/{{ $shortlist->icon }}.svg " alt="Icon">	
			</div>
			
			<h3 class="mt-2 text-xl text-grey-800 font-semibold uppercase">{{ $shortlist->title }}</h3>										
			
			@if($shortlist->sponsor)
				<div class="mt-1 text-md text-center">Sponsored by {{ $shortlist->sponsor }}</div>
			@endif
		</div>
		
		<ul class="mt-3 ml-4 sm:ml-6 md:ml-6 list-disc">
			@foreach($shortlist->nominees as $nominee)
				<li class="text-md">{{ $nominee }}</li>
			@endforeach
		</ul>
	</div>
</div>
		

		
