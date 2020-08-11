@extends('_layouts.master')

@section('content')

    {{-- Video Background Colour Overlay --}}
    <div class="fixed top-0 left-0 md:h-96 lg:h-130 w-full z-10" style="background-color:rgba(21,45,59,0.66);"></div>
    
    {{-- Video Background --}}
    <div class="hidden md:block md:h-96 lg:h-130 overflow-hidden">
        <video playsinline autoplay muted loop poster="assets/video/she-awards-background-poster-compressed.jpg" class="w-full object-cover">
            <source src="assets/video/she-awards-background-compressed.webm" type="video/webm">
            <source src="assets/video/she-awards-background-compressed.mp4" type="video/mp4">
        </video>
    </div>

    {{-- Hero Image --}}
    <div class="z-20 block w-full h-screen bg-cover bg-top hero md:hidden"></div>
    
    {{-- 'Hero' block content --}}
    <header class="absolute top-0 flex items-center text-center w-full h-full lg:h-130 pt-8 md:pt-10 lg:pt-32 md:h-96 md:items-center z-30">
        <div class="mx-auto leading-tight tracking-tight uppercase font-bold text-white">
            <div class="text-lg sm:text-md lg:text-2xl">Welcome To</div>
            <h1 class="mt-2 px-2 text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
                The Safety &amp; Health Excellence Awards
                <span class="block mx-auto mt-2 lg:mt-0 px-4 text-sm lg:text-xl tracking-wide">25<sup class="lg:text-xs">th</sup> November 2020 <span class="hidden sm:inline"> - </span><br class="block sm:hidden" /> Vox, Resorts World, Birmingham</span>
            </h1>           
            <div class="mt-10 lg:mt-12 text-center">
                <a href="#" class="px-4 py-3 md:px-4 md:py-3 bg-yellow-500 rounded-lg text-md sm:text-sm md:text-md lg:text-lg font-bold uppercase tracking-tighter">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2 transform rotate-90">
                        <path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg>
                    Buy Tickets Now
                </a>
            </div>  
        </div>
    </header>  

    {{-- Main Content --}}
    <main class="relative bg-white w-full z-20">
        
        <section class="container mx-auto py-10 px-6 lg:px-20">
            <div class="text-center font-bold">
                <h2 class="text-2xl lg:text-4xl leading-tight tracking-tight uppercase">THE SAFETY & HEALTH EXCELLENCE AWARDS</h2>
                <h4 class="text-base lg:text-xl mt-6">
                    Be part of the the Safety & Health Excellence Awards, in conjunction with the BSIF, which will be held at the magnificent VOX event centre at Resorts World next to the NEC.
                </h4>
            </div>

            <div class="md:flex mt-6">
            	<div class="md:w-1/2 md:px-4">
            		The night attracts more than 550 guests from the safety, health, fire and security sectors and includes a sumptuous three course meal, table wine, drinks reception, live music and live entertainment.
            	</div>
            	<div class="md:w-1/2 mt-6 md:mt-0 md:px-4">
            		This unmissable networking event, brought to you by the publishers of Health & Safety Matters and Fire Safety Matters journals.
            	</div>
            </div>

            <div class="sm:flex justify-center mt-6 text-white">
            	<div class="sm:flex sm:w-1/2 px-6 justify-center">
            		<a href="" class="inline-block w-full md:w-2/3 text-center bg-yellow-500 px-4 py-3 rounded-lg text-md uppercase font-bold tracking-tighter">
            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
            				<path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
            			</svg>
            			Award Categories
            		</a>
            	</div>

            	<div class="sm:flex sm:w-1/2 px-6 pt-6 sm:pt-0 justify-center">
            		<a href="" class="inline-block w-full md:w-2/3 text-center bg-yellow-500 px-4 py-3 rounded-lg text-md uppercase font-bold tracking-tighter">
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

            

      
            
       


    
        <div class="p-6 flex items-center justify-center bg-gray-300">

            <section
                :aria-labelledby="title.toLowerCase().replace(' ', '-')"
                class="flex flex-col items-center justify-center w-full"
                @keydown.arrow-right="state.usedKeyboard = true;updateCurrent(nextSlide)"
                @keydown.arrow-left="state.usedKeyboard = true;updateCurrent(previousSlide)"
                @keydown.window.tab="state.usedKeyboard = true"
                x-data="sponsorSlideshow(slides)"
                x-title="SHE Awards Sponsors"
                x-init="setup()">

                <div :id="title.toLowerCase().replace(' ', '-')" class="sr-only" x-text="title"></div>
                 
                <div
                    tabindex="1"
                    class="relative w-full overflow-hidden mb-6"
                    :class="{'focus:outline-none' : !state.usedKeyboard}">

                    <template x-for="(slide, index) in slides" :key="slide.id">
                        <div :aria-hidden="(state.order[state.currentSlide] != slide.id).toString()">
                            <div
                                x-show="state.order[state.currentSlide] == slide.id"
                                class="w-full text-center p-16"
                                :x-ref="slide.id"
                                :x-transition:enter="transitions('enter')"
                                :x-transition:enter-start="transitions('enter-start')"
                                :x-transition:enter-end="transitions('enter-end')"
                                :x-transition:leave="transitions('leave')"
                                :x-transition:leave-start="transitions('leave-start')"
                                :x-transition:leave-end="transitions('leave-end')"
                                >                 

                                <div>
                                    <p
                                        class="text-2xl font-extrabold italic mb-4 text-gray-800 leading-tight"
                                        x-html="slide.content">
                                    </p>
                                    <!-- <footer>—<cite x-html="slide.author"></cite></footer> -->
                                </div>
                            </div>
                        </div>
                    </template>       
                </div>
               
                <div aria-live="polite" aria-atomic="true" class="sr-only" x-text="'Slide ' + (state.currentSlide + 1) + ' of ' + slides.length"></div>
               
                <div>
                    <template x-for="(slide, index) in Array.from({ length: slides.length })" :key="index">
                        <button
                            class=" text-white inline-flex items-center justify-center bg-gray-600 hover:bg-yellow-500 w-4 h-4 p-0 mb-2 rounded-full"
                            style="text-indent:-9999px"
                            :class="{
                                'bg-yellow-500' : state.currentSlide == index,
                                'focus:outline-none' : !state.usedKeyboard,
                            }"
                            @click="stopAutoplay();updateCurrent(index)"
                            x-text="index + 1">
                        </button>
                    </template>
                </div>
            </section>
        
        </div>
     
    </main>

@endsection
