// FAQ questions - dynamically generated Alpine Accordion
window.faq = [
{
    question: "When and Where are The Awards taking place?",
    answer: [
    "The 2020 Safety & Health Excellence Awards will be held on Wednesday 28th April and commences at 19:00. The bar will close at 12:00",
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

// Sponsor Carousel 
import Splide from '@splidejs/splide';
new Splide( '.splide', {
    type        : 'loop',
    speed       : '500',
    perPage     : 6,
    perMove     : 1,
    autoplay    : true,
    pauseOnHover: false,
    arrows      : false,
} ).mount();