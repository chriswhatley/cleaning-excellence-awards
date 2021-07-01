@extends('_layouts.master', 
	['page_title' => 'Sponsorship', 
	'meta_title' => 'The Awards Shortlist for the 2020 Safety & Health Excellence Awards', 
	'meta_description' => 'Join more than 550 of your peers for a not to be missed evening that celebrates excellence in health and safety!'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Sponsorship Opportunities', 'background_image' => 'hero'])

		<section class="container mx-auto md:py-10 px-5 md:px-6">  

			<div class="hidden md:block md:w-full md:mb-4">
				<p class="uppercase leading-tight text-xl font-semibold">Launched by Cleaning Matters magazine, The Cleaning Excellence Awards will be broadcast virtually as part of Cleaning Matters Live – 17th November 2021.</p>		
			</div>

			<div class="md:flex md:mt-6">
				<div class="md:w-1/2 xl:mt-6">
					<p class="mt-6 md:mt-0">
						The Cleaning Excellence Awards shine a spotlight on the most innovative products, services and individuals. From technological innovations and smart solutions, to sustainability and individual commitment, the awards celebrate standards of excellence throughout the professional cleaning and hygiene sector.
					</p>
					<p class="mt-6 md:mt-0">
						Supported by key industry bodies; ISSA (International Sanitary Suppliers Association), BPCA (British Pest Control Assocation) and NCCA (National Carpet Cleaning Association.
					</p>
					<div class="mt-4 text-center md:text-left">
						<a href="/assets/docs/cleaning-matters-digital-conference-brochure.pdf" target="_blank" class="btn-primary mt-4 text-md sm:text-sm md:text-md">
							<div class="bg-white w-full rounded p-3 text-blue-900">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
									<path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
								</svg>
								Download Brochure
							</div>
						</a>
					</div>	
				</div>
				<div class="hidden md:block md:w-1/2 md:pl-8">
					<div class="sponsorship-intro w-full h-96 bg-cover bg-top rounded-lg overflow-hidden"></div>
				</div>
			</div>
		</section>

		<section class="mt-6 md:mt-0">
			<div class="w-full mx-auto p-5 md:py-10 text-center bg-lochmara-500">
				<div class="container mx-auto">
					<h3 class="lg:mx-24 text-xl md:text-2xl lg:text-3xl text-white font-bold uppercase tracking-tight leading-tight">Join more than 400 of your peers for a not to be missed evening that celebrates cleaning & hygiene excellence!</h3>
				</div>
			</div>
		</section>

		<section class="container mx-auto md:flex mt-3 md:mt-6">
			<div class="w-full flex flex-col p-4 md:w-1/2">
				<div class="flex flex-col flex-1">
					<div class="hero w-full h-96 bg-cover bg-top rounded-md overflow-hidden"></div>
				</div>
			</div>

			<div class="w-full flex flex-col py-4 px-4 md:w-1/2">
				<div class="flex flex-col flex-1 px-6 md:px-4 bg-white rounded-md bg-gray-300">
					<p class="mt-4 text-center font-bold text-lg tracking-tight font-semibold uppercase xl:mt-8 xl:text-2xl">The Cleaning Excellence Awards offers:</p>
					<ul class="list-disc mt-4 mb-4 mx-6 leading-snug xl:mt-3 xl:mx-10 xl:text-lg">
						<li>The opportunity to associate your brand with excellence.</li>
						<li class="mt-2">Reaching thousands of industry professionals before, during and after the event.</li>
						<li class="mt-2">Networking with the industry’s most influential people.</li>
						<li class="mt-2">Multiple sponsorship package options available.</li>
						<li class="mt-2">Take this unique opportunity to position your organisation as an industry leader!</li>
					</ul>
					<p class="hidden xl:block mt-4 mb-3 text-center font-semibold">Don't miss out on the industry's must-attend event of the year!</p>
				</div>
			</div>
		</section>
		
		@include('_partials.cards')	

		@include('_partials.collage')
	</main>

@endsection