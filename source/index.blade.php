@extends('_layouts.master', 
	['page_title' => 'Home', 
	'meta_title' => 'The Cleaning Excellence Awards 2021', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening celebrating innovation and achievements in the fire and security sectors'])

@section('content')

    {{-- Hero Image --}}
    <div class="z-20 block w-full h-screen md:h-96 lg:h-140 w-full bg-cover bg-top hero"></div>
    {{-- <div class="w-full h-2 divider"></div> --}}
    
    {{-- 'Hero' block content --}}
    <header class="absolute top-0 flex items-center text-center w-full h-screen lg:h-140 md:h-96 sm:items-center z-10">
        <div class="mx-auto pt-20 md:pt-36 leading-tight tracking-tight uppercase font-bold text-white">
            <div class="text-lg sm:text-md lg:text-2xl">Welcome To</div>
            <h1 class="mt-2 px-4 text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
                The Cleaning Excellence Awards
                <span class="block mx-auto mt-4 px-4 text-sm lg:text-xl tracking-wide">{{ $page->awardsDate }} <span class="hidden sm:inline"> - </span><br class="block sm:hidden" /> Online</span>
            </h1>    

        	<div class="pt-12 px-6">
        		<a href="{{ $page->registerURL }}" target="_blank" class="btn-primary md:w-2/5 max-w-xs text-xs md:text-base md:text-md lg:text-lg">
        			<div class="bg-white w-full rounded p-3">
	        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
	        				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
	        			</svg>
	        			Book Your Tickets
	        		</div>
        		</a>

        		<a href="/categories" class="btn-primary md:w-2/5 mt-4 max-w-xs md:mt-0 sm:ml-4 md:ml-6 text-xs md:text-base md:text-md lg:text-lg">
        			<div class="bg-white w-full rounded p-3">
	        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
	        				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
	        			</svg>
	        			Make A Nomination
	        		</div>
        		</a>
        	</div> 
        </div>
    </header>  

    {{-- Main Content --}}
    <main class="relative bg-white w-full z-10">
        
        <section class="container mx-auto py-10 px-6 lg:px-20">
            <div class="text-center">
                <h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">The CLeaning Excellence Awards</h2>
                <h3 class="text-base lg:text-xl mt-6 font-semibold">
                    The Cleaning Excellence Awards will be broadcast virtually alongside our new interactive Digital conference; Cleaning Matters  Live – 17th November 2021.
                </h3>
            </div>

            <div class="md:flex mt-6">
            	<div class="md:w-1/2 md:px-4">
            		The Cleaning Excellence Awards shine a spotlight on the most innovative products, services and individuals. From technological innovations and smart solutions, to sustainability and individual commitment, the awards celebrate standards of excellence throughout the professional cleaning and hygiene sector.
            	</div>
            	<div class="md:w-1/2 mt-6 md:mt-0 md:px-4">
            		Supported by key industry bodies; ISSA (International Sanitary Suppliers Association), BPCA (British Pest Control Assocation) and the NCCA (National Carpet Cleaning Association).
            	</div>
            </div>

            {{-- <div class="sm:flex justify-center mt-6 text-white">
            	
            	<div class="w-full px-6 justify-center sm:w-1/3 sm:px-1 md:px-4">
            		<a href="/nominate" class="btn-primary w-full text-md sm:text-sm lg:text-lg">
            			<div class="bg-white w-full rounded p-3 text-blue-900">
	            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline md:inline w-4 h-4 mr-2">
	            				<path d="M15 9a3 3 0 0 0 3-3h2a5 5 0 0 1-5.1 5 5 5 0 0 1-3.9 3.9V17l5 2v1H4v-1l5-2v-2.1A5 5 0 0 1 5.1 11H5a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3V4H2v2H0V2h5V0h10v2h5v4h-2V4h-3v5z"></path>
	            			</svg>
	            			<span class="hidden sm:inline md:hidden">Awards</span>
	            			<span class="inline sm:hidden md:inline">Award Categories</span>
	            		</div>
            		</a>
            	</div>

            	<div class="w-full px-6 justify-center sm:w-1/3 sm:px-1 md:px-4">
            		<a href="/nominate" class="btn-primary w-full mt-2 sm:mt-0 text-md sm:text-sm lg:text-lg">
            			<div class="bg-white w-full rounded p-3 text-blue-900">
	            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline md:inline w-4 h-4 mr-2">
	            				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
	            			</svg>
	            			<span class="hidden sm:inline md:hidden">Nominate</span>
	            			<span class="inline sm:hidden md:inline">Make A Nomination</span>
	            		</div>
            		</a>
            	</div>

            	<div class="w-full px-6 justify-center sm:w-1/3 sm:px-1 md:px-4">
            		<a href="/sponsorship" class="btn-primary w-full mt-2 sm:mt-0 text-md sm:text-sm lg:text-lg">
            			<div class="bg-white w-full rounded p-3 text-blue-900">
	            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline md:inline w-4 h-4 mr-2">
	            				<path d="M7.667 12H2v8H0V0h12l.333 2H20l-3 6 3 6H8l-.333-2z"></path>
	            			</svg>
	            			Sponsorship
	            		</div>
            		</a>
            	</div>

            </div> --}}
        </section>
           
        {{-- <section class="w-full stats striped-gradient">
        	<div class="container mx-auto grid grid-cols-2 sm:grid-cols-4 gap-6 pt-3 pb-5 bg-white text-usafa-blue-700 font-bold uppercase rounded-md">
        		
        		<div class="px-4 py-2 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">400</h3>
	        		<span class="block text-md md:text-xl">Guests</span>
	        	</div>

	        	<div class="px-4 py-2 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">14</h3>
	        		<span class="block text-md md:text-xl">Award<span class="md:hidden">s</span><br /><span class="hidden md:inline-block">Categories</span></span>
	        	</div>

	        	<div class="px-4 py-2 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">8</h3>
	        		<span class="block text-md md:text-xl">Sponsorship<br />Opportunities</span>
	        	</div>

	        	<div class="px-4 py-2 text-center">
	        		<h3 class="block text-4xl md:text-5xl lg:text-6xl">1</h3>
	        		<span class="block text-md md:text-xl">Celebrity <br />Host</span>
	        	</div>

			</div>        	
        </section> --}}

        
     	<section class="mx-auto">

			{{-- Small/medium screen host section --}}
			<div class="md:flex lg:hidden">
	        	<div class="h-48 sm:h-84 md:h-110 w-full md:w-1/2 pl-6 bg-cover bg-center host flex items-center text-white">
	        		<h3 class="font-bold leading-tight tracking-tight uppercase">Master Of Ceremonies<br />Alan Dedicote</h3>    		
	        	</div>
	        	
				<div class="w-full md:w-1/2 px-6 pt-6 pb-8 flex items-center">				
					<div>
						<div class="sm:px-6">
							<p class="font-semibold">We are delighted to announce The 'Voice of the Balls' and Radio 2's Chief Network Announcer Alan Dedicote as Master Of Ceremonies of this year's Awards.</p>
						</div>
						

		            	<div class="mt-6 text-center">
		            		<a href="/host" class="btn-primary w-4/5 max-w-xs">
		            			<div class="bg-white w-full rounded p-3 text-blue-900">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
			            				<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/>
			            			</svg>
			            			Find Out More
			            		</div>
		            		</a>
		            	</div>

					</div>
				</div>
			</div>
        				
			<div class="lg:flex">

				{{-- Large screen host section --}}
				<div class="hidden lg:flex lg:w-1/2 items-center bg-cover bg-center host text-white">			
	        		<div class="pt-12 pb-6 pl-10 w-4/5">        		
	        			<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase">Master Of Ceremonies<br />Alan Dedicote</h3>
		        		<div class="mt-6 pr-16">  		
		        			<p>We are delighted to announce The ‘Voice of the Balls’ and Radio 2’s Chief Network Announcer Alan Dedicote as Master Of Ceremonies of this year's Awards.</p>
						</div>
		        		<div class="mt-10">
		        			<a href="{{ $page->baseUrl }}/host" class="btn-primary w-4/5 max-w-xs">		            	
		        				<div class="bg-white w-full rounded p-3 text-blue-900">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
			            				<path d="M15.75 8l-3.74-3.75a3.99 3.99 0 0 1 6.82-3.08A4 4 0 0 1 15.75 8zM1.85 15.3l9.2-9.19 2.83 2.83-9.2 9.2-2.82-2.84zm-1.4 2.83l2.11-2.12 1.42 1.42-2.12 2.12-1.42-1.42zM10 15l2-2v7h-2v-5z"/>
			            			</svg>
			            			Find out more
			            		</div>
		            		</a>		           
		            	</div>
	        		</div>        	
	        	</div>  	        		 
			
				<div class="lg:flex lg:w-1/2">
					<div class="w-full bg-gray-800">
						<div class="px-6 py-16 ">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">The Cleaning Excellence Awards<br />Sponsorship Opportunities</h3>
			            	<div class="mt-6 text-center">
			            		<a href="/sponsorship" class="btn-primary w-4/5 max-w-xs">
			            			<div class="bg-white w-full rounded p-3 text-blue-900">
				            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
				            				<path d="M7.667 12H2v8H0V0h12l.333 2H20l-3 6 3 6H8l-.333-2z"></path>
				            			</svg>
				            			Find Out More
				            		</div>
			            		</a>
			            	</div>					
						</div>        		

		        		<div class="w-full flex h-56 lg:h-64">
		        			<div class="w-1/2 md:w-1/3 lg:w-1/2 xl:w-1/3 h-auto gallery-tile-b"></div>
		        			<div class="hidden md:block md:w-1/3 lg:hidden xl:block xl:w-1/3 h-auto gallery-tile-a"></div>
		        			<div class="w-1/2 md:w-1/3 lg:w-1/2 xl:w-1/3 h-auto gallery-tile-c"></div>
		        		</div>        		
		        	</div>
				</div>

			</div>


      				
			<div class="md:flex">
				<div class="w-full lg:flex md:w-1/2 px-4">

					<div class="w-full">
						
						<div class="px-6 py-16 bg-alto-300 rounded-lg my-6">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-usafa-blue-700 text-center">The Award Categories</h3>				    	   	
			            	<div class="mt-6 text-center">
			            		<a href="/categories" class="btn-primary w-4/5 max-w-xs">
			            			<div class="bg-white w-full rounded p-3 text-blue-900">
				            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
				            				<path d="M15 9a3 3 0 0 0 3-3h2a5 5 0 0 1-5.1 5 5 5 0 0 1-3.9 3.9V17l5 2v1H4v-1l5-2v-2.1A5 5 0 0 1 5.1 11H5a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3V4H2v2H0V2h5V0h10v2h5v4h-2V4h-3v5z"></path>
				            			</svg>
				            			Find Out More
				            		</div>
			            		</a>
			            	</div>				
						</div>        		
			
						
		        		<div class="px-6 py-16 bg-lochmara-700 rounded-lg my-6">									
							<h3 class="lg:text-2xl font-bold leading-tight tracking-tight uppercase text-white text-center">Be part of the Awards</h3>
			            	<div class="mt-6 text-center">
			            		<a href="/categories" class="btn-primary bg-gray-800 w-4/5 max-w-xs">
			            			<div class="bg-white w-full rounded p-3 text-blue-900">
				            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
				            				<path d="M10 12a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-3a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4 2.75V20l-4-4-4 4v-8.25a6.97 6.97 0 0 0 8 0z"/>
				            			</svg>
				            			<span class="hidden sm:inline-block">Make a </span> nomination
				            		</div>
			            		</a>
			            	</div>
						</div>      

		        	</div>
				</div>

			
				<div class="w-full md:w-1/2 items-center">			
	        		<div class="py-12 md:py-6 lg:pt-12 px-6 lg:px-12 w-full">        			        			
	        			
	        			<div class="xl:flex xl:items-center"> 
	        				<div class="xl:w-3/5 xl:pt-5">
	        					<h3 class="text-center sm:text-left lg:text-2xl font-bold leading-tight tracking-tight uppercase">Charity Partner</h3>
	        					<p class="mt-6 md:mt-4 lg:mt-6 sm:pr-4 md:pr-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim quam, veritatis, labore, modi reiciendis qui ex aspernatur tenetur sapiente assumenda officia tempora, perspiciatis? Similique ipsum assumenda quod hic quisquam excepturi.</p>	
	        				</div>	    
	        				
	        				<div class="w-3/5 sm:w-2/5 md:w-4/6 xl:w-2/5 mx-auto mt-2">
	        					<img class="mx-auto w-full h-auto" src="{{ $page->baseUrl }}/assets/images/layout/fire-fighters-charity.svg" alt="The Firefighters Charity">	
	        				</div>
	        				
	        			</div>
		        		<p class="mt-6 sm:mt-4 md:mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae accusamus sunt iure debitis dolor molestiae nam reprehenderit aliquid, ducimus molestias dolore voluptatum iste, eos, doloribus sapiente voluptates cumque eligendi laborum.</p>        		
		        		<div class="mt-10 sm:mt-6 lg:mt-8 text-center">
		            		<a href="{{ $page->baseUrl }}/charity" class="btn-primary w-4/5 max-w-xs">
		            			<div class="bg-white w-full rounded p-3 text-blue-900">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
			            				<path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"/>
			            			</svg>
			            			Find Out More
			            		</div>
		            		</a>
		            	</div>
	        		</div>        	
	        	</div>    	

			</div>          	  
       	</section>

       	{{-- Sponsors Carousel --}}
       	<div class="w-full h-2 divider-gradient"></div>
        <section class="w-full py-12 flex items-center justify-center bg-alto-200">
			@include('_partials/supporters-carousel')
        </section>

		{{-- Video --}}
		<section class="bg-cover bg-center overflow-hidden highlights">
	        
			<div class="container mx-auto px-6 py-32 text-white text-center max-w-screen-lg">
				<h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">
	                DON’T MISS OUT ON THE INDUSTRY’S MUST ATTEND EVENT OF THE YEAR
				</h2>
	            <p class="text-base lg:text-xl mt-6 font-semibold">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure debitis, numquam sed, tenetur eius repellendus? Magnam nulla minus voluptas, explicabo adipisci libero suscipit aspernatur iste harum voluptatum doloremque officia esse.
	            </p>
	           
	            <div class="mt-10 text-center">
	        		<a href="{{ $page->registerURL }}" class="btn-primary w-4/5 max-w-xs">
	        			<div class="bg-white w-full rounded p-3 text-blue-900">
		        			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
		        				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
		        			</svg>
		        			Book <span class="hidden sm:inline-block">your</span> place <span class="hidden sm:inline-block">now</span>
		        		</div>
	        		</a>
	        	</div>
			</div>
			<div class="w-full h-2 divider"></div>
		</section>             
     
    </main>

@endsection
