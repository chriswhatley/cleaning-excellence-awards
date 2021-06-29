@extends('_layouts.master', 
	['page_title' => 'Celebrity Host', 
	'meta_title' => 'The 2021 Cleaning Excellence Awards Master Of Ceremonieses - Alan Dedicote', 
	'meta_description' => 'We are delighted to announce that Alan Dedicote will be this year\'s Awards\' Master Of Ceremonies.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Master Of Ceremonies', 'background_image' => 'header-c'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="w-full lg:w-4/5 mx-auto mt-6">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">We are delighted to announce The ‘Voice of the Balls’ and Radio 2’s Chief Network Announcer Alan Dedicote as Master Of Ceremonies of this year's Awards.</p>
				</div>
				<div class="">
		
					<div class="float-left w-full h-72 md:w-1/3 md:h-56 lg:w-2/5 lg:h-104 mr-8 my-4 host-bio bg-top bg-cover rounded-md overflow-hidden"></div>

					<p class="mt-4 md:mt-6 md:pr-4 font-semibold">He has been a well known voice across BBC output for over 30 years, and was a regular sidekick to the late Sir Terry Wogan on Radio 2's "Wake Up to Wogan" breakfast programme where he was most commonly known as "Deadly".</p>	
			
					<p class="mt-6">
						He was educated at King Edward VI School for Boys in Birmingham, and the University of Birmingham.
					</p>
					<p class="mt-6">
						His radio career took off at BBC Pebble Mill where he worked as a station assistant for BBC Radio Birmingham, and then he spent four more years in Plymouth and Exeter as a producer/presenter for BBC Radio Devon.
					</p>
					<p class="mt-6">
						In 1987 Alan joined the Presentation Department of Radio 2 at Broadcasting House in London, voicing trails and promotions. Since 1995 he has been providing live commentary for the National Lottery draws, while in the US he is the voice-over announcer for ABC's Dancing with the Stars (the US version of Strictly Come Dancing), which he has done since 2005.
					</p>

					<div class="mt-6 text-center">
						<a href="/categories" class="btn-primary w-4/5 max-w-xs">		            	
	        				<div class="bg-white w-full rounded p-3 text-blue-900">
		            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-lochmara-700 inline w-4 h-4 mr-2">
			        				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
			        			</svg>
		            			Make a nomination
		            		</div>
	            		</a>

	            		<a href="{{ $page->awardsURL }}" class="btn-primary w-4/5 max-w-xs mt-6 md:mt-0 md:ml-6">		            	
	        				<div class="bg-white w-full rounded p-3 text-blue-900">
		            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-lochmara-700 inline w-4 h-4 mr-2">
			        				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
			        			</svg>
		            			Register To Attend
		            		</div>
	            		</a>
	            	</div>
										
				</div>				
			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection
