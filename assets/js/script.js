'use strict';



/**
 * add event listener on multiple elements
 */

/**
 * Adds an event listener of a specified type to multiple elements.
 *
 * @param {NodeList|Array} elements - The elements to which the event listeners will be added.
 * @param {string} eventType - The type of the event to listen for (e.g., 'click', 'mouseover').
 * @param {Function} callback - The function to be called when the event is triggered.
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  } 
}



/**
 * NAVBAR TOGGLE FOR MOBILE
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

/*************  ✨ Codeium Command ⭐  *************/
/**
 * Toggle the navbar and overlay.
 *
 * Adds or removes the "active" class on navbar, overlay, and body when the
 * nav toggler is clicked.
 */
/******  ec4ac148-edc7-4302-a8ba-c61663590501  *******/
const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);



/**
 * HEADER
 * active header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});



/**
 * SLIDER
 */

const sliders = document.querySelectorAll("[data-slider]");

/**
 * Initializes a slider.
 *
 * @param {HTMLElement} currentSlider - The slider element to be initialized.
 *
 * @description
 * This function initializes a slider by adding event listeners to the previous
 * and next buttons. It also moves the slider items to their correct initial
 * positions.
 */
const initSlider = function(currentSlider) {

  const sldierContainer = currentSlider.querySelector("[data-slider-container]");
  const sliderPrevBtn = currentSlider.querySelector("[data-slider-prev]");
  const sliderNextBtn = currentSlider.querySelector("[data-slider-next]");

  let currentSlidePos = 0;


  const moveSliderItem = function () {
    sldierContainer.style.transform = `translateX(-${sldierContainer.children[currentSlidePos].offsetLeft}px)`;
  }

  /**
   * NEXT SLIDE
   */

  /**
   * Move to the next slide.
   *
   * @description
   * Move the slider to the next slide. If the slider is at the end, move it to
   * the first slide.
   */
  const slideNext = function () {
    const slideEnd = currentSlidePos >= sldierContainer.childElementCount - 1;

    if (slideEnd) {
      currentSlidePos = 0;
    } else {
      currentSlidePos++;
    }

    moveSliderItem();
  }

  sliderNextBtn.addEventListener("click", slideNext);

  /**
   * PREVIOUS SLIDE
   */


   const slidePrev = function () {

    if (currentSlidePos <= 0) {
      currentSlidePos = sldierContainer.childElementCount - 1;
    } else {
      currentSlidePos--;
    }

    moveSliderItem();
  }

  sliderPrevBtn.addEventListener("click", slidePrev);

  const dontHaveExtraItem = sldierContainer.childElementCount <= 1;
  if (dontHaveExtraItem) {
    sliderNextBtn.style.display = "none";
    sliderPrevBtn.style.display = "none";
  }

}

for (let i = 0, len = sliders.length; i < len; i++) { initSlider(sliders[i]); }



/**
 * ACCORDION
 */

const accordions = document.querySelectorAll("[data-accordion]");

let lastActiveAccordion = accordions[0];

  /**
   * Initializes an accordion.
   *
   * @description
   * Finds the button element to expand/collapse the accordion and adds an event
   * listener to it. When the button is clicked, it toggles the "expanded" class
   * on the accordion and tracks the last active accordion.
   *
   * @param {Element} currentAccordion - The accordion element to initialize.
   */
const initAccordion = function (currentAccordion) {

  const accordionBtn = currentAccordion.querySelector("[data-accordion-btn]");


  const expandAccordion = function () {
    if (lastActiveAccordion && lastActiveAccordion !== currentAccordion) {
      lastActiveAccordion.classList.remove("expanded");
    }

    currentAccordion.classList.toggle("expanded");

    lastActiveAccordion = currentAccordion;
  }

  accordionBtn.addEventListener("click", expandAccordion);

}

for (let i = 0, len = accordions.length; i < len; i++) { initAccordion(accordions[i]); }