@extends('_layouts.master', 
	['page_title' => 'Charity Partner', 
	'meta_title' => 'The CLeaning Excellence Awards Charity Partner : The Fire Fighter Charity', 
	'meta_description' => 'We are delighted to announce that the Lighthouse Construction Industry Charity this year\'s Awards charity partner.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Charity Partner', 'background_image' => 'highlights'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="mt-8 w-full sm:w-2/3 md:w-3/4 mx-auto text-center">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">The Fire Fighters Charity</p>
				</div>
				<div>
					<p class="mt-6 md:mt-6 md:pr-4">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusamus eveniet repudiandae, porro hic, ipsa! Autem repellendus qui dicta culpa, officiis odio aliquid ipsum, dolore saepe nihil iusto molestias dolorem.
					</p>									
		
					<div class="w-full flex justify-center mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8">
						<img src="{{ $page->baseUrl }}/assets/images/layout/fire-fighters-charity.svg" alt="The Fire Fighters Charity" class="w-3/5 sm:w-1/2 md:w-2/3">
					</div>
			
					<p class="mt-6">
						Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Obcaecati ratione repellat, nihil sint eaque, repudiandae velit tempore ducimus officia, laudantium sunt facilis. Et fugit nam a nobis vel doloremque harum?
					</p>					
					<p class="mt-6">Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Ipsa pariatur porro expedita, dicta illum, quos. Mollitia quasi, quia perspiciatis soluta, earum blanditiis consequatur corrupti non alias, porro quisquam, rem deleniti!</p>

					<p class="mt-6">
					Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consectetur blanditiis hic ut tenetur inventore officia reiciendis excepturi aperiam delectus enim nostrum ex quidem fugiat labore molestias consequatur ipsum necessitatibus, fuga!</p>
					
					<div class="sm:flex sm:justify-center mt-12">
						<div class="text-center">
							<a href="{{ $page->registerURL }}" class="btn-primary">
		            			<div class="bg-white w-full rounded p-3 text-blue-900">
			            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
										<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
									</svg>
			            			Book your tickets now
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