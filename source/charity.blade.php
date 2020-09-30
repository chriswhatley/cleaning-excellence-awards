@extends('_layouts.master', 
	['page_title' => 'Charity Partner', 
	'meta_title' => 'The SHE Awards 2020 Charity Partner : The Lighthouse Club', 
	'meta_description' => 'We are delighted to announce that the Lighthouse Construction Industry Charity this year\'s SHE Awards charity partner.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Charity Partner', 'background_image' => 'header-b'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="mt-8 w-full sm:w-2/3 md:w-3/4 mx-auto text-center">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">The Lighthouse Construction Industry Charity</p>
				</div>
				<div>
					<p class="mt-6 md:mt-6 md:pr-4">The Lighthouse Construction Industry Charity is the only charity that provides financial and emotional support to the construction community and their families who have suffered an injury, illness or just need some extra support.</p>									
		
					<div class="w-full flex justify-center mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8">
						<img src="{{ $page->baseUrl }}/assets/images/layout/charity-partner-lighthouse-club-logo.svg" alt="The Lighthouse Club" class="w-3/5 sm:w-1/2 md:w-2/3">
					</div>
			
					<p class="mt-6">The charity provides a 24 /7 Construction Industry Helpline which is the first point of contact to access a range of completely free and confidential support services including:</p>					
					<ul class="list-disc mt-6 ml-6">
						<li>Emergency Financial aid to construction families in crisis</li>
						<li>Advice on welfare and mental wellbeing</li>
						<li>Support on legal, tax and debt management matters</li>					
					</ul>
					<p class="mt-6">They have also launched a free Construction Industry Helpline app aimed at people who may not feel ready or comfortable talking about their situation and provides expert advice, self-help tools and easy to use coping strategies.
					<p class="mt-6">Last year the total spent on charitable services was £1.13M, which included £703,661 of charitable support to construction families in need, £411,962 on education and training and £21,247 on health and safety innovation.</p>
					<p class="mt-6">The Charity was also chosen to manage a two year, £1.1M CITB funded project to train 300 construction focussed mental health first aiders for the industry.</p>
					
					<div class="text-center">
						<a href="/tickets" class="btn-primary inline-flex items-center justify-center mt-6 text-md sm:text-sm md:text-md">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
								<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
							</svg>
							Buy Tickets
						</a>
					</div>
					
					
				</div>
				
			</div>
		</section>	

		@include('_partials.collage')
	</main>

	@endsection