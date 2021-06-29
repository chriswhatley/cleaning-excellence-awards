<!-- Grid column -->
<div class="w-full flex flex-col p-4 md:w-1/2">

	<!-- Column contents -->
	<div class="flex flex-col flex-1 px-8 py-8 bg-gray-200 rounded-lg">
		<div class="flex-1">
			<div class="text-center">			
				<div class="flex justify-center">
					<img class="mr-4 h-6 w-6" src="{{ $page->baseUrl }}/assets/images/icons/{{ $award->icon }}.svg" alt="Icon">	
				</div>
				<h3 class="mt-2 text-xl text-grey-800 font-semibold uppercase">{{ $award->title }}</h3>										
			</div>	
			<p class="mt-6 text-md">
				{!! $award->getContent() !!}	
			</p>
		</div>

		@if(strlen($award->sponsor) > 0)	
			<div class="w-full mt-3 sm:max-w-xs mx-auto lg:w-3/5 xl:px-8 text-center">
				<span class="block"> @php echo $award->organiser ? 'Organised by' : 'Sponsored by' @endphp </span>
				<img class="mt-4" src="{{ $page->baseUrl }}/assets/images/sponsors/awards/{{ $award->sponsor }}.svg" alt="{{ $award->sponsor }} Logo">	
			</div>
		@endif

		<div class="mt-10 xl:flex xl:justify-between xl:items-center">

			{{-- Criteria --}}
			@if( $award->criteria )
				<div class="w-full sm:w-2/3 md:w-full lg:w-1/2 lg:px-2 mx-auto">
					<a href="/criteria/{{ $award->getFilename() }}" class="btn-primary">
	                    <div class="flex justify-center bg-white w-full rounded p-3 text-lochmara-500">
	                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-lochmara-500 inline w-5 h-5 mr-2">
	                        	<path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
	                        </svg>
	                        Award Criteria
	                    </div>
	                </a>
				</div>
			@endif

			{{-- Nominate --}}
			@if($award->supressNominationLink == FALSE)	
				<div class="w-full sm:w-2/3 md:w-full lg:w-1/2 lg:px-2 mx-auto">
					<a href="{{ $page->nominationURL }}" class="btn-primary">
	                    <div class="flex justify-center bg-white w-full rounded p-3 text-lochmara-500">
	                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-lochmara-500 inline w-5 h-5 mr-2">
								<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
							</svg>
							Make A Nomination
	                    </div>
	                </a>
				</div>
			@endif
				
		</div>
	</div>

</div>