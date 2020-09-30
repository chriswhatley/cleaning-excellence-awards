@extends('_layouts.master', 
	['page_title' => 'Celebrity Host', 
	'meta_title' => 'The 2020 Safety & Health Excellence Awards host - Alistair McGowan', 
	'meta_description' => 'We are delighted to announce that well-known comedian Alistair McGowan will host this year\'s Awards.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Awards Host', 'background_image' => 'header-c'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="w-2/3 mx-auto mt-6">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">We are delighted to announce that well-known comedian Alistair McGowan will host this year's Awards.</p>
				</div>
				<div class="xl:mt-6">
					<p class="mt-6 md:mt-6 md:pr-4">Alistair McGowan has been hailed by The Times as a ‘voice virtuoso.’ His repertoire includes a gallery of politicians, pop stars and sportsmen – like a romp through the news, gossip columns and back page headlines.</p>									
		
					<div class="w-full host-bio bg-top bg-cover rounded-md overflow-hidden h-64 md:h-72 lg:h-84 xl:h-96 mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8"></div>
			
					<p class="mt-6">After appearing at Edinburgh with his original comedy partner Harry Hill, Alistair cut his impressionist’s teeth on Spitting Image - bringing Tony Blair, Chris Eubank and Prince Charles to life. He also provided the voice of Gary Lineker in a West End play, before playing David Beckham to Ronnie Ancona’s Victoria. He’s since fronted his own BBC One show The Big Impression and has appeared on a vast array of programmes from The One Show to Live at the Apollo, Countdown to Have I Got News For You.</p>					
					<p class="mt-6">Alongside comedy Alistair has also amassed a string of dramatic acting credits. He played the lead in (and co-wrote episodes of) the detective drama Mayo, starred in the BBC adaptation of Bleak House and joined the cast of Skins. Onstage he’s appeared opposite Judi Dench in the RSC’s Merry Wives of Windsor, and with Connie Fisher in They’re Playing Our Song. He also took the role of ‘Emcee’ in the West End revival of Cabaret, toured as Henry Higgins in Pygmalion, and starred as the Mikado in the Gilbert and Sullivan operetta. Continuing to challenge himself he learned piano in order to star in and write a play about Erik Satie, and also presented a Radio 4 documentary on the composer.</p>
					<p class="mt-6">A sports-obsessive, he’s appeared on Question of Sport and been part of Radio 5Live’s Wimbledon commentary team. Away from the stage and studio Alistair, a committed environmentalist, has campaigned against the proposed new runway at Heathrow, and co-written a book with Ms Ancona: How to Wean A Man off Football. It’s part autobiography and part comedy self-help guide, recounting his struggle to overcome a disturbing soccer addiction.</p>					
				</div>

				<div class="w-full">
					<div x-data="{ open: false }" x-init="$watch('open', value => stopVideo())">
						@include('_components/modal', ['videoID' => 'fjQmsdsv0rM'])	

						{{-- Small screeen point user to YouTube directly --}}
			            <div class="w-full md:hidden mt-10 text-center">
			        		<a href="https://www.youtube.com/watch?v=fjQmsdsv0rM&feature=emb_title" target="_blank" rel="noopener" class="btn-primary w-4/5 max-w-xs">
			        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			        				<path d="M16 7l4-4v14l-4-4v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v3zm-8 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
			        			</svg>
			        			View Showreel
			        		</a>
			        	</div>

			        	{{-- Tablet or larger screen, embed YouTube vid in modal --}} 
			        	<div class="hidden md:block mt-12 text-center">
			        		<button @click="open = true" class="btn-primary w-4/5 max-w-xs">
			        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			        				<path d="M16 7l4-4v14l-4-4v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v3zm-8 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
			        			</svg>
			        			View Showreel
			        		</button>
			        	</div> 
					</div>
				</div>
			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection