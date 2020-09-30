@extends('_layouts.master', 
	['page_title' => 'Buy Tickets', 
	'meta_title' => 'Don’t miss out on this great night of entertainment and networking as we toast the best in the health, safety and fire safety sectors.', 
	'meta_description' => 'Join more than 550 of your peers by celebrating excellence at the industry’s biggest networking evening of the year.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Buy Tickets', 'background_image' => 'header-d'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="mt-6 mx-auto">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">Get your tickets to The Safety &amp; Health Excellence Awards.</p>
				</div>
				<div class="xl:mt-3">
					<p class="mt-6 md:mt-6 md:pr-4">The Safety & Health Excellence Awards will take place on 28th April 2021 and will once again be held at the Vox, Resorts World at NEC Birmingham.</p>									
		
					<div class="w-full attendee-tickets bg-top bg-cover rounded-md overflow-hidden h-64 md:h-72 lg:h-84 xl:h-96 mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8"></div>
			
					<p class="mt-6">Don’t miss out on this great night of entertainment and networking as we toast the best in the health, safety and fire safety sectors. Tickets include drinks reception on arrival, a sumptuous three course meal, 4 bottles of table wine per table, live entertainment, a comedy set from our host Alistair McGowan, live music and of course the Awards themselves.</p>					
					<p class="mt-6">The event starts at 7pm and dress code is black tie for men and dresses for ladies. The bar closes at midnight.</p>
					<p class="mt-6 font-bold">Tickets costs £199+VAT or £1,800+VAT for a table of ten.</p>
					<p class="mt-6 font-bold">You can purchase your tickets now by downloading the booking form and returning it to us so we can invoice you or you can also call us to pay via card on 01342 314300.</p>
					<div class="text-center">
						<a href="/assets/docs/she-awards-2020-booking-form.pdf" target="_blank" class="btn-primary inline-flex items-center justify-center mt-6 text-md sm:text-sm md:text-md">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-white inline w-4 h-4 mr-2">
								<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
							</svg>
							Download booking form
						</a>
					</div>

						
				</div>

			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection