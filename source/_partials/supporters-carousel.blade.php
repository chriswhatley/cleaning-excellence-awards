<div class="container mx-auto">

	<div class="text-center">
		<h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">Our Supporters</h2>
        <a class="inline-block mt-1 mb-2 font-semibold text-lochmara-500 border-b-2 border-alto-200 hover:border-lochmara-500 transition-all duration-500" href="/supporters">Find out more about our supporters</a>
	</div>	
	
   <!-- Slider main container -->
    <div class="swiper-container h-48 mt-10">
        
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            
            <!-- Slides -->
            @foreach($supporters as $supporter)
                <div class="swiper-slide">

                    <div class="">
						<img src="{{ $page->baseUrl }}/assets/images/supporters/{{ $supporter->logo }}.svg" alt="{{ $supporter->name }}">
					</div>

                </div>
            @endforeach
           
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>    

</div>
		
