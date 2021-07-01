@extends('_layouts.master', 
	['page_title' => 'Charity Partner', 
	'meta_title' => 'The Cleaning Excellence Awards Charity Partner : The Hygiene Bank', 
	'meta_description' => 'We are delighted to announce that The Hygiene Bank Charity this year\'s Awards charity partner.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Charity Partner', 'background_image' => 'highlights'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="mt-8 w-full sm:w-2/3 md:w-3/4 mx-auto text-center">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">The Hygiene Bank</p>
				</div>
				<div>
					<p class="mt-6 md:mt-6 md:pr-4 text-xl">
						The Hygiene Bank brings communities, businesses and thought leaders together to tackle hygiene poverty by giving access to products and being a voice for change. You can donate to this fantastic charity at <a href="https://thehygienebank.com/donate/" target="_blank" rel="noopener" class="text-lochmara-500 font-semibold">thehygienebank.com/donate</a>.
					</p>									
		
					<div class="w-full flex justify-center mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8">
						<img src="{{ $page->baseUrl }}/assets/images/layout/the-hygiene-bank-logo.svg" alt="The Hygiene Bank" class="w-/5 sm:w-1/2 md:w-3/5">
					</div>
			
					<p class="mt-6">
						At The Hygiene Bank, we believe it is not right that feeling clean should be a luxury or a privilege for anyone in our society, yet many are living in poverty and cannot afford to stay clean. That is why our network of projects exists – to give people access to the basics they need.
					</p>
					<p class="mt-6">
						We are a grassroots, people-powered charity and social movement, grounded in community. Our passion stems from the injustice that people may be unable to fully participate in society due to hygiene poverty. This is why we work to inspire social change.
					</p>	

					<h4 class="mt-6 font-semibold uppercase">What is Hygiene Poverty?</h4>
					<p class="mt-6">
						Many people locked in poverty or those who find themselves in times of crisis often experience restricted options. This leaves them caught between being able to heat their home, pay their rent, buy food or keep clean. Hygiene poverty can be shaming, humiliating and excluding and can result in social isolation.
					</p>
					<p class="mt-6">
						It can lead to a lack of confidence and can negatively affect good health and mental well-being which can impact early childhood development, learning, employability and social interaction.				
					</p>
					
					<div class="sm:flex sm:justify-center mt-12">
						<div class="text-center">
							<a href="{{ $page->registerURL }}" class="btn-primary" target="_blank">
		            			<div class="bg-white w-full rounded p-3 text-blue-900">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
										<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
									</svg>
			            			Register To Attend
			            		</div>
		            		</a>
						</div>

						<div class="text-center sm:ml-4">
							<a href="/nominate" class="btn-primary">
		            			<div class="bg-white w-full rounded p-3 text-blue-900">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
										<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
									</svg>
									Make a Nomination
			            		</div>
		            		</a>
						</div>						
					</div>
				</div>
				
			</div>
		</section>	

		@include('_partials.collage')
	</main>

	@endsection