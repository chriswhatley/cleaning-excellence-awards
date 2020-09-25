  <section
    :aria-label="title.toLowerCase().replace(' ', '-')"
    class="container mx-auto flex flex-col items-center justify-center w-full"
    @keydown.arrow-right="state.usedKeyboard = true;updateCurrent(nextSlide)"
    @keydown.arrow-left="state.usedKeyboard = true;updateCurrent(previousSlide)"
    @keydown.window.tab="state.usedKeyboard = true"
    x-data="sponsorSlideshow(slides)"
    x-title="SHE Awards Sponsors"
    x-init="setup()">

    <div :id="title.toLowerCase().replace(' ', '-')" class="sr-only" x-text="title"></div>
    
	<h2 class="pt-10 text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">Sponsors</h2>
	<a class="inline-block mt-1 mb-2 font-semibold text-yellow-500 border-b-2 border-white hover:border-yellow-500 transition-all duration-300" href="{{ $page->baseUrl }}/sponsors">Find our more abour our sponsors</a>
     
    <div
        class="relative w-full overflow-hidden"
        :class="{'focus:outline-none' : !state.usedKeyboard}">

        <template x-for="(slide, index) in slides" :key="slide.id">
            <div :aria-hidden="(state.order[state.currentSlide] != slide.id).toString()">
                <div
                    x-show="state.order[state.currentSlide] == slide.id"
                    class="w-full text-center py-3"
                    :x-ref="slide.id"
                    :x-transition:enter="transitions('enter')"
                    :x-transition:enter-start="transitions('enter-start')"
                    :x-transition:enter-end="transitions('enter-end')"
                    :x-transition:leave="transitions('leave')"
                    :x-transition:leave-start="transitions('leave-start')"
                    :x-transition:leave-end="transitions('leave-end')"
                    >                 

                    <div
                        class="text-2xl font-extrabold italic mb-4 text-gray-800 leading-tight"
                        x-html="slide.content">
                    </div>
                </div>
            </div>
        </template>       
    </div>
   
    <div aria-live="polite" aria-atomic="true" class="sr-only" x-text="'Slide ' + (state.currentSlide + 1) + ' of ' + slides.length"></div>
   
    <div>
        <template x-for="(slide, index) in Array.from({ length: slides.length })" :key="index">
            <button
                class="text-white inline-flex items-center justify-center bg-gray-600 hover:bg-yellow-500 w-4 h-4 p-0 mb-10 rounded-full"
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