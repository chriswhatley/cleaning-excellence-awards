// FAQ questions - dynamically generated Alpine Accordion
window.faq = [
{
    question: "How much does it cost to enter?",
    answer: [
    "It’s free to enter"
    ]
},
{
    question: "Can I enter two different people or two different products or campaigns to the same category?",
    answer: [
    "Yes. You can enter each category as many times as you like."  
    ]
},
{
    question: "Can I enter the same entry into multiple categories?",
    answer: [
    "Yes, you can provided it meets the specific criteria of each category."
    ]
},
{
    question: "Can sponsors enter?",
    answer: [
    "Sponsors can enter but they can’t enter a category they are sponsoring."
    ]
},
{
    question: "When do entries open for the Cleaning Excellence Awards 2022?",
    answer: [
    "1st July 2021 is the opening date for entries."
    ]
},
{
    question: "When do entries close?",
    answer: [
    "Entries will close on 30th August 2021 at 11:59pm."
    ]
},
{
    question: "How do I enter the Awards?",
    answer: [
    "You enter online via our entries page and select the category you wish to enter. Please make sure you fill in all the entry fields and provide accurate contact information. When entries open on 1 July 2021 you can <a href=\"/nominate\" class=\"text-lochmara-500 font-semibold\">enter nominations here</a>."
    ]
},
{
    question: "When will the shortlist be revealed?",
    answer: [
    "We will announce the shortlist in October 2021."
    ]
},
{
    question: "When will the winners be revealed?",
    answer: [
    "Winners will be announced at The Cleaning Excellence Awards, taking place on 17th November 2021."
    ]
},
// {
//     question: "How can I attend the awards ceremony?",
//     answer: [
//     "It’s free to attend and registration will open on 1 July 2021. You will be able to register to attend at <a href="#" target=\"_blank\" class=\"text-yellow-500 font-semibold\">#########</a>"
//     ]
// },
{
    question: "What should I do if I've got further questions or am unsure if my entry is eligible?",
    answer: [
    "If you have any further questions then please contact us by <a href=\"/contact\" class=\"text-lochmara-500 font-semibold\">clicking HERE</a>."
    ]
}
];

import Swiper from 'swiper/bundle';

const swiper = new Swiper('.swiper-container', {
  slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },   
    grabCursor: true, 
    breakpoints: {
      // when window width is >= 0px
      0: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 4,
        spaceBetween: 40
      },
      // when window width is >= 1280px
      1280: {
        slidesPerView: 5,
        spaceBetween: 50
      }
    }
});