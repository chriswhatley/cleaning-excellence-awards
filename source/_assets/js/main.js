// Config for the Sponsor logos carousel
window.sponsorSlideshow = function(slides) {
    return {
        title: 'SHE Awards Sponsors',
        state: {
            moving: false,
            currentSlide: 0,
            looping: false,
            order: [],
            nextSlideDirection: '',
            userInteracted: false,
            usedKeyboard: false,
        },
        autoplayTimer: null,
        attributes: {
            direction: 'right-left',
            duration: 1000,
            timer: 3000,
        },
        slides: [],
        setup() {
            this.slides = slides.map((slide, index) => { slide.id = index + Date.now(); return slide })
                
            // Cache the original order so that we can reorder on transition (to skip inbetween slides)
            this.state.order = this.slides.map(slide => slide.id)
            const newSlideOrder = this.slides.filter(slide => this.current.id != slide.id)
            newSlideOrder.unshift(this.current)
            this.slides = newSlideOrder
                
            // Start the autoslide
            this.attributes.timer && this.autoPlay()
        },
        get current() {
            return this.slides.find(slide => slide.id == this.state.order[this.state.currentSlide])
        },
        get previousSlide() {
            return (this.state.currentSlide - 1) > -1 ? this.state.currentSlide - 1 : this.state.currentSlide
        },
        get nextSlide() {
            return (this.state.currentSlide + 1) < this.slides.length ? this.state.currentSlide + 1 : this.state.currentSlide
        },
        updateCurrent(nextSlide) {
            if (nextSlide == this.state.currentSlide) return
            if (this.state.moving) return
            this.state.moving = true

            const next = this.slides.find(slide => slide.id == this.state.order[nextSlide])

            // Reorder the slides for a smoother transition
            const newSlideOrder = this.slides.filter(slide => {
                return ![this.current.id, this.state.order[nextSlide]].includes(slide.id)
            })

            const activeSlides = [this.current, next]
            this.state.nextSlideDirection = nextSlide > this.state.currentSlide ? 'right-to-left' : 'left-to-right'

            newSlideOrder.unshift(...(this.state.nextSlideDirection == 'right-to-left' ? activeSlides : activeSlides.reverse()))
            this.slides = newSlideOrder
            this.state.currentSlide = nextSlide
            setTimeout(() => {
                this.state.moving = false
                // TODO: possibly a better check to determine whether autoplay should resume
                this.attributes.timer && !this.autoplayTimer && this.autoPlay()
            }, this.attributes.duration)

        },
        transitions(state, $dispatch) {
            const rightToLeft = this.state.nextSlideDirection === 'right-to-left'
            switch (state) {
                case 'enter':
                    return `transition-all duration-${this.attributes.duration}`
                case 'enter-start':
                    return rightToLeft ? 'transform translate-x-full' : 'transform -translate-x-full'
                case 'enter-end':
                    return 'transform translate-x-0'
                case 'leave':
                    return `absolute top-0 transition-all duration-${this.attributes.duration}`
                case 'leave-start':
                    return 'transform translate-x-0'
                case 'leave-end':
                    return rightToLeft ? 'transform -translate-x-full' : 'transform translate-x-full'
            }
        },
        autoPlay() {
            this.loop = () => {
                const next = (this.state.currentSlide === (this.slides.length - 1)) ? 0 : this.state.currentSlide + 1
                this.updateCurrent(this.state.looping ? next : this.currentSlide)
                this.autoplayTimer = setTimeout(() => {
                    requestAnimationFrame(this.loop)
                }, this.attributes.timer + this.attributes.duration)
                
            }
            this.autoplayTimer = setTimeout(() => {
                this.state.looping = true
                requestAnimationFrame(this.loop)
            }, this.attributes.timer)
        },
        stopAutoplay() {
            clearTimeout(this.autoplayTimer)
            this.autoplayTimer = null
        }
    }
}

// sponsor slides for homepage carousel
window.slides = [                
    {
        content: `
                <ul class="flex flex-wrap items-center">
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/3m.svg" alt="3M" title="3M" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/alcumus.svg" alt="Alcumus" title="Alcumus" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/bsif.svg" alt="BSIF" title="BSIF" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/diadora.svg" alt="Diadora" title="Diadora" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/havi.svg" alt="Havi" title="Havi" class="w-48 h-auto mx-auto">
                    </li>
                </ul>
            `,        
    },
    {
         content: `
                <ul class="flex flex-wrap items-center">
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/lyreco.svg" alt="Lyreco" title="Lyreco" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/nebosh.svg" alt="Nebosh" title="Nebosh" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/nineteen.svg" alt="Nineteen" title="Nineteen" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/safety-knife.svg" alt="Safety Knife" title="Safety Knife" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/shawcity.svg" alt="Shawcity" title="Shawcity" class="w-48 h-auto mx-auto">
                    </li>
                </ul>
            `, 
    },
 
    {
         content: `
                <ul class="flex flex-wrap justify-center items-center">
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/southalls.svg" alt="Southalls" title="Southalls" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/toyota.svg" alt="Toyota" title="Toyota" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/turner-townsend.svg" alt="Turner Townsend" title="Turner Townsend" class="w-48 h-auto mx-auto">
                    </li>
                    <li class="w-1/5">
                        <img src="assets/images/sponsors/carousel/univet.svg" alt="Univet" title="Univet" class="w-48 h-auto mx-auto">
                    </li>
                </ul>
            `, 
    },
];

// FAQ questions - dynamically generated Alpine Accordion
window.faq = [
{
    question: "When and Where are The Awards taking place?",
    answer: [
    "The 2020 Safety & Health Excellence Awards will be held on Wednesday 28th April and commences at 19:00. The bar will cose at 12:00",
    "The Awards will be held at The Vox, Resorts World, Birmingham. For directions to The Vox, please use the Google Map on this page."
    ]
},
{
    question: "Where can I obtain tickets?",
    answer: [
    "Tickets are available via the \"Buy Tickets\" option in the main menu."
    ]
},
{
    question: "What does my ticket come with?",
    answer: [
    "Tickets include drinks reception on arrival, a sumptuous three course meal, 4 bottles of table wine per table, live entertainment, a comedy set from our host Alistair McGowan, live music and of course The Awards themselves."
    ]
},
{
    question: "Is there a dresscode?",
    answer: [
    "The dress code is black tie for men and dresses for ladies."
    ]
},
{
    question: "What\s on the menu?",
    answer: [
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorem animi necessitatibus quae saepe nam quidem, earum inventore blanditiis enim minus magni. Obcaecati voluptates nemo sit odit dignissimos, soluta alias.",
    ]
},
{
    question: "Notify the organisers of any dietary requirements?",
    answer: [
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorem animi necessitatibus quae saepe nam quidem, earum inventore blanditiis enim minus magni. Obcaecati voluptates nemo sit odit dignissimos, soluta alias.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit."
    ]
}
];
