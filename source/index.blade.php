@extends('_layouts.master', 
	['page_title' => 'Home', 
	'meta_title' => 'The Safety & Health Excellence Awards 2020', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])


@section('content')

    {{-- Video Background Colour Overlay --}}
    <div class="absolute top-0 left-0 md:h-96 lg:h-130 w-full z-10" style="background-color:rgba(21,45,59,0.66);"></div>
    
    {{-- Video Background --}}
    <div class="hidden md:block md:h-96 lg:h-130 overflow-hidden z-0">
        <video playsinline autoplay muted loop poster="assets/video/she-awards-background-poster-compressed.jpg" class="w-full object-cover">
            <source src="assets/video/she-awards-background-compressed.webm" type="video/webm">
            <source src="assets/video/she-awards-background-compressed.mp4" type="video/mp4">
        </video>
    </div>

    {{-- Hero Image --}}
    <div class="z-20 block w-full h-screen bg-cover bg-top hero md:hidden"></div>
    
    {{-- 'Hero' block content --}}
    <header class="absolute top-0 flex items-center text-center w-full h-full lg:h-130 pt-8 md:pt-10 lg:pt-32 md:h-96 md:items-center z-10">
        <div class="mx-auto leading-tight tracking-tight uppercase font-bold text-white">
            <div class="text-lg sm:text-md lg:text-2xl">Welcome To</div>
            <h1 class="mt-2 px-2 text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
                The Safety &amp; Health Excellence Awards
                <span class="block mx-auto mt-2 lg:mt-0 px-4 text-sm lg:text-xl tracking-wide">28<sup class="lg:text-xs">th</sup> April 2021 <span class="hidden sm:inline"> - </span><br class="block sm:hidden" /> Vox, Resorts World, Birmingham</span>
            </h1>           
            <div class="mt-6 sm:mt-8 text-center">
        		<a href="{{ $page->baseUrl }}/tickets" class="btn-primary w-3/4 max-w-xs text-md sm:text-sm md:text-md lg:text-lg">
        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
        				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
        			</svg>
        			Buy Tickets Now
        		</a>
        	</div>  
        </div>
    </header>  

    {{-- Main Content --}}
    <main class="relative bg-white w-full z-10">
        
        <section class="container mx-auto py-10 px-6 lg:px-20">
            <div class="text-center">
                <h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">THE SAFETY & HEALTH EXCELLENCE AWARDS</h2>
                <h3 class="text-base lg:text-xl mt-6 font-semibold">
                    Be part of the the Safety & Health Excellence Awards, in conjunction with the BSIF, which will be held at the magnificent VOX event centre at Resorts World next to the NEC.
                </h3>
            </div>

            <div class="md:flex mt-6">
            	<div class="md:w-1/2 md:px-4">
            		The Safety & Health Excellence Awards return for the third year running after successfully attracting more than 200 entries and 525 guests in 2019. The Awards celebrate innovation and achievements in the health, safety and fire sectors.
            	</div>
            	<div class="md:w-1/2 mt-6 md:mt-0 md:px-4">
            		The ceremony will encompass the long-established British Safety Industry Federation (BSIF) Awards that promote the importance of innovation and underline the highest standards of excellence within occupational safety and health.
            	</div>
            </div>

            <div class="sm:flex justify-center mt-6 text-white">
            	<div class="sm:flex sm:w-1/2 px-6 justify-center">
            		<a href="{{ $page->baseUrl }}/awards" class="btn-primary w-full md:w-2/3 text-md">
            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
            				<path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
            			</svg>
            			Award Categories
            		</a>
            	</div>

            	<div class="sm:flex sm:w-1/2 px-6 pt-6 sm:pt-0 justify-center">
            		<a href="{{ $page->baseUrl }}/shortlist" class="btn-primary w-full md:w-2/3 text-md">
            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
            				<path d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"/>
            			</svg>
            			2020 Shortlist
            		</a>
            	</div>

            </div>
        </section>
           
        <section class="w-full bg-yellow-500 text-white stats">
        	<div class="container mx-auto grid grid-cols-2 sm:grid-cols-4 gap-6 py-8 font-bold uppercase">
        		
        		<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">550</h3>
	        		<span class="block text-md md:text-xl">Guests</span>
	        	</div>

	        	<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">14</h3>
	        		<span class="block text-md md:text-xl">Award<br />Categories</span>
	        	</div>

	        	<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">8</h3>
	        		<span class="block text-md md:text-xl">Sponsorship<br />Opportunities</span>
	        	</div>

	        	<div class="p-4 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">1</h3>
	        		<span class="block text-md md:text-xl">Celebrity <br />Host</span>
	        	</div>

			</div>        	
        </section>

        
     	<section class="w-full">

			{{-- Small/medium screen host section --}}
			<div class="md:flex lg:hidden">
	        	<div class="h-48 sm:h-84 md:h-96 w-full md:w-1/2 bg-cover bg-center host flex items-center text-white">
	        		<h3 class="pl-6 text-md sm:text-2xl font-bold leading-relaxed tracking-tight uppercase">Awards Host<br /> Alistair McGowan</h3>    		
	        	</div>

				<div class="w-full md:w-1/2 px-6 pt-6 pb-8 flex items-center">				
					<div>
						<p class="sm:px-6">Alistair McGowan has been hailed by  The Times as a ‘voice virtuoso.’ His  repertoire includes a gallery of  politicians, pop stars and sportsmen –like a romp through the news,  gossip columns and back  page headlines.</p>        											    		            	

		            	<div class="mt-6 text-center">
		            		<a href="{{ $page->baseUrl }}/host" class="btn-primary w-4/5 max-w-xs">
		            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
		            				<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/>
		            			</svg>
		            			Find Out More
		            		</a>
		            	</div>


					</div>
				</div>
			</div>
        				
			<div class="lg:flex">

				{{-- Large screen host section --}}
				<div class="hidden lg:flex lg:w-1/2 items-center bg-cover bg-center host text-white">			
	        		<div class="py-12 pl-10 w-2/3">        		
	        			<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase">Awards Host<br /> Alistair McGowan</h3>
		        		<p class="mt-6 pr-16">Alistair McGowan has been hailed by  The Times as a ‘voice virtuoso.’ His  repertoire includes a gallery of  politicians, pop stars and sportsmen –like a romp through the news,  gossip columns and back  page headlines.</p>        		
		        		<div class="mt-10">
		        			<a href="{{ $page->baseUrl }}/host" class="btn-primary w-4/5 max-w-xs">		            	
		            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
		            				<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/>
		            			</svg>
		            			Find out more
		            		</a>		           
		            	</div>
	        		</div>        	
	        	</div>  	        		 
			
				<div class="lg:flex lg:w-1/2">
					<div class="w-full bg-gray-800">
						{{-- Gallery --}}
						<div class="px-6 py-16 ">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">SHE Awards Gallery</h3>
			            	<div class="mt-6 text-center">
			            		<a href="{{ $page->baseUrl }}/gallery" class="btn-primary w-4/5 max-w-xs">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			            				<path d="M0 6c0-1.1.9-2 2-2h3l2-2h6l2 2h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm10 10a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
			            			</svg>
			            			View Gallery
			            		</a>
			            	</div>					
						</div>        		

		        		<div class="w-full flex h-56 lg:h-64">
		        			<div class="w-1/2 sm:w-1/3 h-auto gallery-tile-a"></div>
		        			<div class="hidden sm:block sm:w-1/3 h-auto gallery-tile-b"></div>
		        			<div class="w-1/2 sm:w-1/3 h-auto gallery-tile-c"></div>
		        		</div>        		
		        	</div>
				</div>

			</div>
      				
			<div class="md:flex">
				<div class="md:flex md:w-1/2">
					<div class="w-full">
						{{-- Awards Categories --}}
						<div class="px-6 py-16 bg-gray-800">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">SHE Awards Categories</h3>				    	   	
			            	<div class="mt-6 text-center">
			            		<a href="{{ $page->baseUrl }}/awards" class="btn-primary w-4/5 max-w-xs">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			            				<path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
			            			</svg>
			            			Find Out More
			            		</a>
			            	</div>				
						</div>        		
			
						{{-- Shortlist --}}
		        		<div class="px-6 py-16 bg-yellow-500">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">SHE Awards Shortlist</h3>
			            	<div class="mt-6 text-center">
			            		<a href="{{ $page->baseUrl }}/shortlist" class="btn-primary bg-gray-800 w-4/5 max-w-xs">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
			            				<path d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"/>
			            			</svg>
			            			<span class="hidden sm:inline-block">View</span> Shortlist
			            		</a>
			            	</div>
						</div>          		
		        	</div>
				</div>

				{{-- Charity Partner --}}
				<div class="w-full md:w-1/2 items-center">			
	        		<div class="py-12 md:py-6 lg:pt-12 px-6 lg:px-12 w-full">        			        			
	        			<div class="sm:flex"> 
	        				<div class="sm:w-2/3 xl:pt-5">
	        					<h3 class="text-center sm:text-left lg:text-2xl font-bold leading-tight tracking-tight uppercase">Charity Partner</h3>
	        					<p class="mt-6 md:mt-4 lg:mt-6 sm:pr-4 md:pr-6">We are delighted to announce that  the Lighthouse Construction  Industry Charity this year's SHE  Awards charity partner.</p>	
	        				</div>	    
	        				<img src="{{ $page->baseUrl }}/assets/images/layout/lighthouse-charity.svg" alt="The Lighthouse Club" class="my-6 sm:my-0 mx-auto w-40 md:w-32 xl:w-48 h-auto">
	        			</div>
		        		<p class="mt-6 sm:mt-4 lg:mt-6">The Lighthouse Club is the only charity that provides financial and emotional support to the construction community and their families who have suffered an injury, illness or just need some extra support.  </p>        		
		        		<div class="mt-10 sm:mt-6 lg:mt-10 text-center">
		            		<a href="{{ $page->baseUrl }}/charity" class="btn-primary w-4/5 max-w-xs">
		            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
		            				<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/>
		            			</svg>
		            			Find Out More
		            		</a>
		            	</div>
	        		</div>        	
	        	</div>    	

			</div>          	  
       	</section>

		{{-- Video --}}
		<section x-data="{ open: false }" x-init="$watch('open', value => stopVideo())" class="bg-cover bg-top overflow-hidden highlights-video">

			@include('_components/modal', ['videoID' => 'PR_OnZIh1MY'])		
	        
			<div class="container mx-auto px-6 py-24 text-white text-center max-w-screen-lg">
				<h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">
	                DON’T MISS OUT ON THE INDUSTRY’S MUST ATTEND EVENT OF THE YEAR
				</h2>
	            <p class="text-base lg:text-xl mt-6 font-semibold">
					The Safety & Health Excellence Awards evening will attract more than 550 guests from the health, safety and fire sectors. You will be treated to a VIP reception, sumptuous three course meal and table wine, live magic acts, entertainment, comedy set from Alistair McGowan, live music and dancefloor.
	            </p>

	            {{-- Small screeen point user to YouTube directly --}}
	            <div class="md:hidden mt-10 text-center">
	        		<a href="https://www.youtube.com/watch?v=PR_OnZIh1MY&feature=emb_title" target="_blank" rel="noopener" class="btn-primary w-4/5 max-w-xs">
	        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
	        				<path d="M16 7l4-4v14l-4-4v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v3zm-8 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
	        			</svg>
	        			2019 Highlights
	        		</a>
	        	</div>

	        	{{-- Tablet or larger screen, embed YouTube vid in modal --}} 
	        	<div class="hidden md:block mt-12 text-center">
	        		<button @click="open = true" class="btn-primary w-4/5 max-w-xs">
	        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
	        				<path d="M16 7l4-4v14l-4-4v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v3zm-8 7a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
	        			</svg>
	        			2019 Highlights
	        		</button>
	        	</div>      			
			</div>
		</section>        
      
  		{{-- Sponsors Carousel --}}
        <div class="hidden md:flex items-center justify-center bg-white">

			@include('_partials/sponsor-carousel')

        </div>

		{{-- Map --}}
        <section>
        	@include('_partials/map')
        </section>

        
        {{-- Organiser By --}}
        <section class="container mx-auto pt-8 px-6 lg:px-20">
            <div class="text-center">
                <h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">Organised By</h2>                
                <div class="py-6 flex">
                	<div class="w-1/3 flex justify-center">
                		<img class="w-20 sm:w-40 md:w-48 lg:w-56 h-auto" src="assets/images/organisers/western-business-media.svg" alt="Western Business Media">
                	</div>
                	<div class="w-1/3 flex justify-center">
                		<img class="w-20 sm:w-40 md:w-48 lg:w-56 h-auto" src="assets/images/organisers/hsm.svg" alt="Health & Safety Matters">
                	</div>
                	<div class="w-1/3 flex justify-center">
                		<img class="w-20 sm:w-40 md:w-48 lg:w-56 h-auto" src="assets/images/organisers/fsm.svg" alt="Fire Safety Matters">
                	</div>
                </div>
            </div>
        </section>
     
    </main>

@endsection
