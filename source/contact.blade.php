@extends('_layouts.master', 
	['page_title' => 'Contact Us', 
	'meta_title' => 'Get in touch with The Safety & Health Excellence Awards Team', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Get in touch', 'background_image' => 'highlights'])

		<section class="container mx-auto mt-6 flex flex-wrap">

			<div class="w-full flex flex-col p-4 w-full lg:w-1/3">
				<div class="contact-c h-48 bg-cover bg-center overflow-hidden border-b-4 border-lochmara-500 rounded-t-md"></div>
				<div class="flex flex-col px-4 md:px-10 py-6 bg-gray-800 text-white rounded-b-md">
					<div class="flex-1 text-center">
						<h2 class="text-lg font-bold leading-snug uppercase">General Event Enquiries</h2>
						<div class="mt-4 text-md">
							<div class="font-semibold">Mark Sennett</div>
							<div>Event Director</div>

							<div class="inline-flex items-center mt-2">
		                        <svg class="mr-3 w-4 h-4 text-lochmara-500" fill="currentColor" viewBox="0 0 20 20">                               
		                            <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/>
		                        </svg>                        
		                        <a class="footer-link" href="tel:+441342333722">01342 333 722</a> <span class="mx-2 font-bold">|</span> <a class="footer-link" href="tel:+447751678621">07751 678 621</a>
		                    </div>                 

		                    <div>
		                        <div class="inline-flex items-center">
		                            <svg class="mr-3 w-4 h-4 text-lochmara-500" fill="currentColor" viewBox="0 0 20 20">                               
		                                <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
		                            </svg>                        
		                            <a href="mailto:msennett@westernbusiness.media" class="footer-link">msennett@westernbusiness.media</a>
		                        </div> 
		                    </div>
						</div>
					</div>
				</div>
			</div>	

			<div class="w-full flex flex-col p-4 w-full lg:w-1/3">
				<div class="contact-d h-48 bg-cover overflow-hidden border-b-4 border-lochmara-500 rounded-t-md"></div>
				<div class="flex flex-col px-4 md:px-10 py-6 bg-gray-300 rounded-b-md">
					<div class="flex-1 text-center">
						<h2 class="text-lg font-bold leading-snug uppercase">Sponsorship Opportunities</h2>
						<div class="mt-4 text-md">
							<div class="font-semibold">Peter Calligeris</div>
							<div>Sales Manager</div>
							<div class="inline-flex items-center mt-2">
		                        <svg class="mr-3 w-4 h-4 text-lochmara-500" fill="currentColor" viewBox="0 0 20 20">                               
		                            <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/>
		                        </svg>                        
		                         <a class="footer-link" href="tel:+441342333737">01342 333 737</a>
		                    </div>                 

		                    <div>
		                        <div class="inline-flex items-center">
		                            <svg class="mr-3 w-4 h-4 text-lochmara-500" fill="currentColor" viewBox="0 0 20 20">                               
		                                <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
		                            </svg>                        
		                            <a href="mailto:pcalligeris@westernbusiness.media" class="footer-link">pcalligeris@westernbusiness.media</a>
		                        </div> 
		                    </div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full flex flex-col p-4 w-full lg:w-1/3">
				<div class="contact-a h-48 bg-cover overflow-hidden border-b-4 border-lochmara-500 rounded-t-md"></div>
				<div class="flex flex-col px-4 md:px-10 py-6 bg-gray-800 text-white rounded-b-md">
					<div class="flex-1 text-center">
						<h2 class="text-lg font-bold leading-snug uppercase">Awards Entry Enquiries</h2>
						<div class="mt-4 text-md">
							<div class="font-semibold">Chris Shaw</div>
							<div>Cleaning Matters Editor</div>
							<div class="inline-flex items-center mt-2">
		                        <svg class="mr-3 w-4 h-4 text-lochmara-500" fill="currentColor" viewBox="0 0 20 20">                               
		                            <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/>
		                        </svg>                        
		                         <a class="footer-link" href="tel:+441342333732">01342 333 732</a>
		                    </div>                 

		                    <div>
		                        <div class="inline-flex items-center">
		                            <svg class="mr-3 w-4 h-4 text-lochmara-500" fill="currentColor" viewBox="0 0 20 20">                               
		                                <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
		                            </svg>                        
		                            <a href="mailto:cshaw@westernbusiness.media" class="footer-link">cshaw@westernbusiness.media</a>
		                        </div> 
		                    </div>
						</div>
					</div>
				</div>
			</div>
			
		</section>

		<section class="container mx-auto md:flex mt-3 mb-6">
			<div class="w-full flex flex-col p-4 md:w-1/2">
				<div class="flex flex-col flex-1">
					<div class="contact-e w-full h-96 bg-cover bg-top rounded-md overflow-hidden"></div>
				</div>
			</div>

			<div class="w-full flex flex-col py-4 px-4 md:w-1/2">
				<div class="flex flex-col flex-1 px-4 py-4 bg-white rounded-md bg-gray-300">
					<div class="md:mt-6 text-center font-bold text-lg tracking-tight font-semibold uppercase xl:mt-8 xl:text-xl">
						The Cleaning Excellence Awards are organised by
					</div>
					<div class="mx-auto w-full sm:w-3/5 md:w-4/5">
						
						<div class="mx-auto w-full mt-6">
							<div class="flex justify-center">
								<img src="/assets/images/layout/contact-wbm-logo.svg" class="h-16">	
							</div>		
							<div class="mt-8">
								<div class="flex">
				                    <div class="inline-block w-4 h-4 mr-3 pt-1">                       
				                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-lochmara-500"><path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/></svg>
				                    </div>
				                    <div class="w-full tracking-tight">
				                        Dorset House, 64 High Street,
				                        East Grinstead, West Sussex, RH19 3DE
				                    </div>
				                </div>                              

				                <div class="inline-flex items-center mt-2">
				                    <svg class="mr-3 w-4 h-4 text-red-pigment-500" fill="currentColor" viewBox="0 0 20 20">                               
				                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-lochmara-500"><path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/></svg>
				                    </svg>                        
				                    <a class="footer-link" href="tel:+441342314300">01342 314 300</a>
				                </div> 

				                <div class="mt-2">
				                    <div class="inline-flex items-center">
				                        <svg class="mr-3 w-4 h-4 text-lochmara-500" fill="currentColor" viewBox="0 0 20 20">                               
				                            <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
				                        </svg>                        
				                        <a href="mailto:admin@westernbusiness.media" class="footer-link">admin@westernbusiness.media</a>                    
				                    </div> 
				                </div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</section>

	</main>

	@endsection