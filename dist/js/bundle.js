/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/global.js":
/*!**************************!*\
  !*** ./src/js/global.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _logic_mobileMenu_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./logic/mobileMenu.js */ \"./src/js/logic/mobileMenu.js\");\n/* harmony import */ var _logic_dropdownMenu_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./logic/dropdownMenu.js */ \"./src/js/logic/dropdownMenu.js\");\n/* harmony import */ var _logic_stickyHeader_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./logic/stickyHeader.js */ \"./src/js/logic/stickyHeader.js\");\n/* harmony import */ var _logic_backToTop_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./logic/backToTop.js */ \"./src/js/logic/backToTop.js\");\n\r\n\r\n\r\n\r\n\r\nconst global = () => {\r\n  console.log(\"Hello from JS\");\r\n  const header = document.querySelector(\"[sticky-header]\");\r\n  const toggle = document.querySelector(\".hamburger\");\r\n  const backToTopButton = document.querySelector(\"[back-to-top]\");\r\n\r\n  (0,_logic_mobileMenu_js__WEBPACK_IMPORTED_MODULE_0__.changeToggleShape)(toggle, \".main-menu\");\r\n  (0,_logic_dropdownMenu_js__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n  (0,_logic_stickyHeader_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(header, \"header--sticky\", 50);\r\n  (0,_logic_backToTop_js__WEBPACK_IMPORTED_MODULE_3__[\"default\"])(backToTopButton, \"back-to-top--visible\");\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (global);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/global.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _router_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./router.js */ \"./src/js/router.js\");\n\r\n\r\n(0,_router_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/index.js?");

/***/ }),

/***/ "./src/js/logic/accordion.js":
/*!***********************************!*\
  !*** ./src/js/logic/accordion.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   accordion: () => (/* binding */ accordion)\n/* harmony export */ });\nconst accordion = (\r\n  buttonsSection,\r\n  buttonsContainerSelector,\r\n  buttonSelector,\r\n  contentSelector,\r\n  activeClass,\r\n  activeText,\r\n  hiddenClass,\r\n  hiddenText\r\n) => {\r\n  console.log(\"Hello from Accordion\");\r\n\r\n  buttonsSection.addEventListener(\"click\", (e) => {\r\n    let clickedButton = e.target.closest(buttonSelector);\r\n\r\n    if (clickedButton) {\r\n      let clickedContent = clickedButton\r\n        .closest(buttonsContainerSelector)\r\n        .querySelector(contentSelector);\r\n\r\n      if (clickedButton.classList.contains(activeClass)) {\r\n        // Remove Active Class and Change Text\r\n        clickedButton.classList.remove(activeClass);\r\n        clickedButton.innerText = activeText;\r\n\r\n        // Hide Content\r\n        if (clickedContent) clickedContent.classList.add(hiddenClass);\r\n      } else {\r\n        // Add Active Class\r\n        clickedButton.classList.add(activeClass);\r\n        clickedButton.innerText = hiddenText;\r\n\r\n        // Show Content\r\n        if (clickedContent) clickedContent.classList.remove(hiddenClass);\r\n      }\r\n    }\r\n  });\r\n};\r\n\r\n\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/logic/accordion.js?");

/***/ }),

/***/ "./src/js/logic/backToTop.js":
/*!***********************************!*\
  !*** ./src/js/logic/backToTop.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst backToTop = function (button, className) {\r\n  // Back to Top\r\n\r\n  window.addEventListener(\"scroll\", function () {\r\n    if (window.pageYOffset > 100) {\r\n      button.classList.add(`${className}`);\r\n    } else {\r\n      button.classList.remove(`${className}`);\r\n    }\r\n  });\r\n\r\n  button.addEventListener(\"click\", function (e) {\r\n    e.preventDefault();\r\n    window.scrollTo({\r\n      top: 0,\r\n      behavior: \"smooth\",\r\n    });\r\n  });\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (backToTop);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/logic/backToTop.js?");

/***/ }),

/***/ "./src/js/logic/carouselMask.js":
/*!**************************************!*\
  !*** ./src/js/logic/carouselMask.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   carouselMask: () => (/* binding */ carouselMask)\n/* harmony export */ });\nconst carouselMask = (section) => {\r\n  // Initialize Styles for Navigation Array\r\n  const setActiveCarouselNav = function (\r\n    array,\r\n    index,\r\n    className,\r\n    attributeName\r\n  ) {\r\n    array.forEach((element) => {\r\n      if (className) {\r\n        element.classList.remove(className);\r\n        array[index].classList.add(className);\r\n      }\r\n      if (attributeName) {\r\n        element.removeAttribute(attributeName);\r\n        array[index].setAttribute(attributeName, \"\");\r\n      }\r\n    });\r\n  };\r\n\r\n  // Carousel\r\n\r\n  const carouselContainer = section.querySelector(\".carousel__container\");\r\n  const carouselNavigation = section.querySelector(\".carousel__navigation\");\r\n\r\n  // Collect Slides and Images\r\n  // const slides = gsap.utils.toArray(\".carousel__slide\");\r\n  // const slidesImage = gsap.utils.toArray(\".carousel__image\");\r\n\r\n  const slides = Array.from(section.querySelectorAll(\".carousel__slide\"));\r\n  const slidesImage = Array.from(section.querySelectorAll(\".carousel__image\"));\r\n\r\n  // Disable Carousel if there is only one slide\r\n  if (slides.length === 1) {\r\n    carouselNavigation.classList.add(\"carousel__navigation--hidden\");\r\n    return;\r\n  }\r\n\r\n  // Select Buttons\r\n  const buttonPrev = section.querySelector(\".carousel__button--previous\");\r\n  const buttonNext = section.querySelector(\".carousel__button--next\");\r\n\r\n  // Create Navigation Dots for each slide\r\n  const dots = section.querySelector(\".carousel__dots\");\r\n  const dotsArray = [];\r\n\r\n  slides.forEach((slide, i) => {\r\n    let dot = document.createElement(\"div\");\r\n    dot.classList.add(\"carousel__dot\");\r\n    dotsArray.unshift(dot);\r\n  });\r\n\r\n  // Add Navigation Dots to the DOM\r\n  dotsArray.forEach((dot) => {\r\n    dots.insertAdjacentElement(\"beforeend\", dot);\r\n  });\r\n\r\n  // Get total number of slides\r\n  let totalSlides = slides.length;\r\n\r\n  // Set currentSlide\r\n  let currentSlide = 0;\r\n\r\n  // Init dots style\r\n  setActiveCarouselNav(\r\n    dotsArray,\r\n    currentSlide,\r\n    \"carousel__dot--active\",\r\n    \"data-active\"\r\n  );\r\n\r\n  // Increment and cycle throught the values\r\n  const slidesWrap = gsap.utils.wrap(0, totalSlides);\r\n\r\n  // Show slide\r\n  const showSlide = function ({ slide, direction = 1, duration = 0.4 }) {\r\n    // fromTo lets you define BOTH the starting and ending values for an animation\r\n    gsap.fromTo(\r\n      // slides is an array and slide is the index, which will be the currentSlide\r\n      slides[slide],\r\n      {\r\n        xPercent: direction > 0 ? 100 : -100,\r\n      },\r\n      {\r\n        xPercent: 0,\r\n        duration,\r\n      }\r\n    );\r\n\r\n    gsap.fromTo(\r\n      slidesImage[slide],\r\n      {\r\n        xPercent: direction > 0 ? -100 : 100,\r\n      },\r\n      {\r\n        xPercent: 0,\r\n\r\n        duration,\r\n      }\r\n    );\r\n  };\r\n\r\n  // Hide slide\r\n  const hideSlide = function ({ slide, direction = 1, duration = 0.4 }) {\r\n    gsap.to(slides[slide], {\r\n      xPercent: direction > 0 ? -100 : 100,\r\n      duration,\r\n    });\r\n    gsap.to(slidesImage[slide], {\r\n      xPercent: direction > 0 ? 100 : -100,\r\n      duration,\r\n    });\r\n  };\r\n\r\n  // Show previous slide\r\n  const previousSlide = function () {\r\n    const oldSlide = currentSlide;\r\n    currentSlide = slidesWrap(currentSlide - 1);\r\n\r\n    showSlide({ slide: currentSlide, direction: -1 });\r\n    hideSlide({ slide: oldSlide, direction: -1 });\r\n\r\n    setActiveCarouselNav(\r\n      dotsArray,\r\n      currentSlide,\r\n      \"carousel__dot--active\",\r\n      \"data-active\"\r\n    );\r\n  };\r\n\r\n  // Show next slide\r\n  const nextSlide = function () {\r\n    const oldSlide = currentSlide;\r\n    currentSlide = slidesWrap(currentSlide + 1);\r\n    showSlide({ slide: currentSlide });\r\n    hideSlide({ slide: oldSlide });\r\n\r\n    setActiveCarouselNav(\r\n      dotsArray,\r\n      currentSlide,\r\n      \"carousel__dot--active\",\r\n      \"data-active\"\r\n    );\r\n  };\r\n\r\n  // Show any slide\r\n  const anySlide = function (navIndex) {\r\n    const oldSlide = currentSlide;\r\n    currentSlide = navIndex;\r\n\r\n    // If Dot to the right\r\n    if (currentSlide > oldSlide) {\r\n      showSlide({ slide: currentSlide });\r\n      hideSlide({ slide: oldSlide });\r\n    }\r\n    if (currentSlide < oldSlide) {\r\n      // If Dot to the left\r\n      showSlide({ slide: currentSlide, direction: -1 });\r\n      hideSlide({ slide: oldSlide, direction: -1 });\r\n    }\r\n\r\n    // If current Dot\r\n    else return;\r\n  };\r\n\r\n  // ???\r\n  slides.forEach((slide, index) => {\r\n    if (index === currentSlide) {\r\n      showSlide({ slide: index, duration: 0 });\r\n      return;\r\n    }\r\n\r\n    hideSlide({ slide: index, duration: 0 });\r\n  });\r\n\r\n  // Event Listeners\r\n  buttonPrev.addEventListener(\"click\", previousSlide);\r\n  buttonNext.addEventListener(\"click\", nextSlide);\r\n\r\n  dots.addEventListener(\"click\", function (e) {\r\n    let clickedDot = e.target.closest(\".carousel__dot\");\r\n    let clickedDotIndex = dotsArray.indexOf(clickedDot);\r\n\r\n    setActiveCarouselNav(\r\n      dotsArray,\r\n      clickedDotIndex,\r\n      \"carousel__dot--active\",\r\n      \"data-active\"\r\n    );\r\n\r\n    anySlide(clickedDotIndex);\r\n  });\r\n\r\n  // Automatically change slides\r\n  // let slideInterval;\r\n  // const SLIDE_INTERVAL_TIME = 5000; // 5 seconds\r\n\r\n  // const startSlideInterval = function () {\r\n  //   slideInterval = setInterval(function () {\r\n  //     nextSlide();\r\n  //   }, SLIDE_INTERVAL_TIME);\r\n  // };\r\n\r\n  // startSlideInterval();\r\n\r\n  // const stopSlideInterval = function () {\r\n  //   clearInterval(slideInterval);\r\n  // };\r\n\r\n  // Draggable (Mobile Swipe)\r\n  const draggable = new Draggable(document.createElement(\"div\"), {\r\n    // use a proxy element\r\n    trigger: carouselContainer,\r\n\r\n    onDragStart() {\r\n      if (this.getDirection() === \"left\") {\r\n        nextSlide();\r\n      }\r\n      if (this.getDirection() === \"right\") {\r\n        previousSlide();\r\n      }\r\n    },\r\n\r\n    // Lightbox\r\n    // onClick(e) {\r\n\r\n    //   // stopSlideInterval();\r\n    //   // showLightBox();\r\n    // },\r\n  });\r\n};\r\n\r\n\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/logic/carouselMask.js?");

/***/ }),

/***/ "./src/js/logic/dropdownMenu.js":
/*!**************************************!*\
  !*** ./src/js/logic/dropdownMenu.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n// Dropdown\r\nconst dropdownMenu = () => {\r\n  const header = document.querySelector(\".header\");\r\n\r\n  header.addEventListener(\"mouseover\", (e) => {\r\n    let dropdownItem = e.target.closest(\".menu-item-has-children\");\r\n    if (dropdownItem) {\r\n      header.classList.add(\"header--menu-open\");\r\n      header.classList.remove(\"header--menu-closed\");\r\n    }\r\n  });\r\n\r\n  header.addEventListener(\"mouseout\", (e) => {\r\n    let dropdownItem = e.target.closest(\".menu-item-has-children\");\r\n    if (dropdownItem) {\r\n      header.classList.remove(\"header--menu-open\");\r\n      header.classList.add(\"header--menu-closed\");\r\n    }\r\n  });\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (dropdownMenu);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/logic/dropdownMenu.js?");

/***/ }),

/***/ "./src/js/logic/mobileMenu.js":
/*!************************************!*\
  !*** ./src/js/logic/mobileMenu.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   changeToggleShape: () => (/* binding */ changeToggleShape),\n/* harmony export */   responsiveMainMenu: () => (/* binding */ responsiveMainMenu)\n/* harmony export */ });\n// Show/ Hide Mobile Menu\r\nconst showHideMobileMenu = (menuClass, isPressed) => {\r\n  // Select all menus\r\n  const menus = document.querySelectorAll(menuClass);\r\n  menus.forEach((menu) => {\r\n    // Toggle the necessary animation classes\r\n    menu.classList.toggle(\"main-menu--closed\", isPressed);\r\n    menu.classList.toggle(\"main-menu--open\", !isPressed);\r\n  });\r\n\r\n  const body = document.querySelector(\"body\");\r\n  body.style.overflowY = isPressed ? \"visible\" : \"hidden\";\r\n};\r\n\r\n// Change Toggle Shape (from Hamburger to X)\r\nconst changeToggleShape = (toggle, menuClass) => {\r\n  toggle.addEventListener(\"click\", () => {\r\n    // Set condition for pressed Toggle Button\r\n    const isPressed = toggle.getAttribute(\"pressed\") === \"true\";\r\n\r\n    // Add \"pressed\" class and attribute\r\n    toggle.classList.toggle(\"hamburger--pressed\", !isPressed);\r\n    toggle.setAttribute(\"pressed\", isPressed ? \"false\" : \"true\");\r\n\r\n    // Update rest of UI\r\n    showHideMobileMenu(menuClass, isPressed);\r\n  });\r\n};\r\n\r\n// Rearrange elements on Mobile and Hide Toggle button (Hamburger) on Desktop\r\nconst responsiveMainMenu = function (\r\n  mediaQuery,\r\n  toggle,\r\n  menu,\r\n  searchForm,\r\n  languageSwitcher\r\n) {\r\n  const searchAndLanguage = document.createElement(\"div\");\r\n  searchAndLanguage.classList.add(\"search-and-language\");\r\n\r\n  if (mediaQuery.matches) {\r\n    menu.classList.remove(\"main-menu__list--open\");\r\n    menu.classList.add(\"main-menu__list--closed\");\r\n    toggle.style.display = \"flex\";\r\n    toggle.classList.remove(\"hamburger--pressed\");\r\n\r\n    searchAndLanguage.appendChild(searchForm);\r\n    searchAndLanguage.appendChild(languageSwitcher);\r\n    menu.appendChild(searchAndLanguage);\r\n  } else {\r\n    toggle.style.display = \"none\";\r\n    menu.classList.remove(\"main-menu__list--closed\");\r\n    menu.classList.add(\"main-menu__list--open\");\r\n    document.querySelector(\"main\").classList.remove(\"main--menu-open\");\r\n\r\n    if (document.querySelector(\".search-and-language\")) {\r\n      document.querySelector(\".header__container\").appendChild(searchForm);\r\n      document\r\n        .querySelector(\".header__container\")\r\n        .appendChild(languageSwitcher);\r\n      document.querySelector(\".search-and-language\").remove();\r\n    }\r\n  }\r\n};\r\n\r\n\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/logic/mobileMenu.js?");

/***/ }),

/***/ "./src/js/logic/stickyHeader.js":
/*!**************************************!*\
  !*** ./src/js/logic/stickyHeader.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst stickyHeader = (header, className, offset) => {\r\n  let lastScrollPosition = 0;\r\n\r\n  const hideHeader = (header, offset) => {\r\n    // console.log(header.getBoundingClientRect());\r\n    const distanceFromTop =\r\n      window.scrollY || document.documentElement.scrollTop;\r\n\r\n    const headerHeight = header.getBoundingClientRect().height;\r\n\r\n    // Scrolling down\r\n    if (distanceFromTop > lastScrollPosition) {\r\n      header.style.transform = `translateY(-${headerHeight + offset}px)`;\r\n    }\r\n\r\n    // Scrolling Up\r\n    else {\r\n      header.style.transform = `translateY(0)`;\r\n      header.classList.add(`${className}`);\r\n    }\r\n\r\n    // Reset\r\n    lastScrollPosition = distanceFromTop <= 0 ? 0 : distanceFromTop;\r\n\r\n    // We are at the Top\r\n    if (distanceFromTop == 0) {\r\n      header.classList.remove(`${className}`);\r\n    }\r\n  };\r\n\r\n  // Event Listener on Scroll\r\n  window.addEventListener(\r\n    \"scroll\",\r\n    function () {\r\n      hideHeader(header, offset);\r\n    },\r\n    false\r\n  );\r\n\r\n  // We are at the Top\r\n\r\n  if (window.scrollY == 0 || document.documentElement.scrollTop == 0) {\r\n    header.classList.remove(`${className}`);\r\n    console.log(\"top\");\r\n  }\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (stickyHeader);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/logic/stickyHeader.js?");

/***/ }),

/***/ "./src/js/logic/tabs.js":
/*!******************************!*\
  !*** ./src/js/logic/tabs.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   tabs: () => (/* binding */ tabs)\n/* harmony export */ });\nconst tabs = (\r\n  buttonsContainer,\r\n  buttonsNodeList,\r\n  contentNodeList,\r\n  dataAttribute = \"tab\",\r\n  closestSelector,\r\n  activeClass,\r\n  hiddenClass = \"hidden\"\r\n) => {\r\n  console.log(\"Hello from Tabs\");\r\n\r\n  // Remove Tab without Content\r\n  contentNodeList.forEach((content) => {\r\n    if (content.textContent === \"\") {\r\n      buttonsNodeList[content.dataset[dataAttribute] - 1].remove();\r\n    }\r\n  });\r\n\r\n  // Tab Functionality\r\n  buttonsContainer.addEventListener(\"click\", function (e) {\r\n    let clickedTab = e.target.closest(closestSelector);\r\n    if (clickedTab) {\r\n      //Loop for Tabs\r\n      buttonsNodeList.forEach((tab) => {\r\n        tab.classList.remove(activeClass);\r\n      });\r\n    }\r\n\r\n    //Loop for Contents\r\n    contentNodeList.forEach((content) => {\r\n      // Match tab with content\r\n      if (clickedTab) {\r\n        // Hide all content before activating the next tab\r\n        content.classList.add(hiddenClass);\r\n\r\n        if (\r\n          clickedTab.dataset[dataAttribute] === content.dataset[dataAttribute]\r\n        ) {\r\n          content.classList.toggle(hiddenClass);\r\n\r\n          // Responsive Climb up the DOM\r\n          const smallScreen = window.matchMedia(\"(max-width: 991px)\");\r\n\r\n          if (smallScreen.matches) {\r\n            clickedTab.parentNode.insertBefore(content, clickedTab.nextSibling);\r\n          }\r\n        }\r\n      }\r\n    });\r\n\r\n    // Add active tab class\r\n    if (clickedTab) {\r\n      clickedTab.classList.add(activeClass);\r\n    }\r\n  });\r\n};\r\n\r\n\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/logic/tabs.js?");

/***/ }),

/***/ "./src/js/pages/about.js":
/*!*******************************!*\
  !*** ./src/js/pages/about.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _logic_tabs_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../logic/tabs.js */ \"./src/js/logic/tabs.js\");\n/* harmony import */ var _logic_accordion_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../logic/accordion.js */ \"./src/js/logic/accordion.js\");\n\r\n\r\n\r\nconst about = () => {\r\n  console.log(\"Hello from About\");\r\n\r\n  const buttonsSection = document.querySelector(\".about\");\r\n  const buttonsContainerSelector = \".card-text__text-container\";\r\n  const buttonSelector = \".about__button span\"; // Because the innerText changes the HTML nesting\r\n  const contentSelector = \".about__content\";\r\n  const activeClass = \"about__button--active\";\r\n  const hiddenClass = \"hidden\";\r\n  const activeText = \"Δείτε περρισσότερα\";\r\n  const hiddenText = \"Δείτε λιγότερα\";\r\n\r\n  (0,_logic_accordion_js__WEBPACK_IMPORTED_MODULE_1__.accordion)(\r\n    buttonsSection,\r\n    buttonsContainerSelector,\r\n    buttonSelector,\r\n    contentSelector,\r\n    activeClass,\r\n    activeText,\r\n    hiddenClass,\r\n    hiddenText\r\n  );\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (about);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/pages/about.js?");

/***/ }),

/***/ "./src/js/pages/home.js":
/*!******************************!*\
  !*** ./src/js/pages/home.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _logic_carouselMask_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../logic/carouselMask.js */ \"./src/js/logic/carouselMask.js\");\n\r\n\r\nconst home = () => {\r\n  console.log(\"Hello from Home\");\r\n  const heroHome = document.querySelector(\".hero-home\");\r\n  const milestones = document.querySelector(\".milestones\");\r\n\r\n  const milestonesSlidesContainer =\r\n    milestones.querySelector(\".carousel__slides\");\r\n  const milestonesMobileJunk = milestones.querySelectorAll(\r\n    \".milestones__milestones\"\r\n  );\r\n  const milestonesMobileSlides = milestones.querySelectorAll(\".card-milestone\");\r\n\r\n  // Get all images\r\n  const body = document.querySelector(\".body\");\r\n  const loader = document.querySelector(\".loader\");\r\n  const spinner = document.querySelector(\".loader__spinner\");\r\n  const imgLoad = imagesLoaded(body);\r\n\r\n  imgLoad.on(\"progress\", () => {\r\n    console.log(\"Loading...\");\r\n  });\r\n\r\n  // Images Loaded\r\n  imgLoad.on(\"done\", () => {\r\n    const tl = gsap.timeline();\r\n\r\n    // Make sure the user can't scroll during the loader\r\n    tl.to(spinner, { opacity: 0 })\r\n      .to(loader, { opacity: 0 })\r\n      .to(loader, { display: \"none\" })\r\n      .to(\r\n        body,\r\n        {\r\n          overflowY: \"visible\",\r\n        },\r\n        \"<\"\r\n      );\r\n\r\n    // Milestones Carousel\r\n    if (window.matchMedia(\"(max-width: 991px)\").matches) {\r\n      // Reverse the array\r\n      const milestonesMobileSlidesArray = Array.from(\r\n        milestonesMobileSlides\r\n      ).reverse();\r\n      milestonesMobileSlidesArray.forEach((slide) => {\r\n        slide.classList.add(\"carousel__slide\");\r\n        milestonesSlidesContainer.insertAdjacentElement(\"afterbegin\", slide);\r\n      });\r\n\r\n      milestonesMobileJunk.forEach((item) => item.remove());\r\n    }\r\n\r\n    (0,_logic_carouselMask_js__WEBPACK_IMPORTED_MODULE_0__.carouselMask)(heroHome);\r\n    (0,_logic_carouselMask_js__WEBPACK_IMPORTED_MODULE_0__.carouselMask)(milestones);\r\n\r\n    // Router\r\n    //  router();\r\n  });\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (home);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/pages/home.js?");

/***/ }),

/***/ "./src/js/pages/singleProduct.js":
/*!***************************************!*\
  !*** ./src/js/pages/singleProduct.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _logic_tabs_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../logic/tabs.js */ \"./src/js/logic/tabs.js\");\n\r\n\r\nconst singleProduct = () => {\r\n  console.log(\"Hello from Single Product\");\r\n\r\n  const tabButtonsContainer = document.querySelector(\"[tabs-buttons]\");\r\n  const tabButtons = document.querySelectorAll(\".single-product__tab\");\r\n  const tabContents = document.querySelectorAll(\".tabs__content\");\r\n  (0,_logic_tabs_js__WEBPACK_IMPORTED_MODULE_0__.tabs)(\r\n    tabButtonsContainer,\r\n    tabButtons,\r\n    tabContents,\r\n    \"tab\",\r\n    \".single-product__tab\",\r\n    \"single-product__tab--active\",\r\n    \"hidden\"\r\n  );\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (singleProduct);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/pages/singleProduct.js?");

/***/ }),

/***/ "./src/js/router.js":
/*!**************************!*\
  !*** ./src/js/router.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _global_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./global.js */ \"./src/js/global.js\");\n/* harmony import */ var _pages_home_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pages/home.js */ \"./src/js/pages/home.js\");\n/* harmony import */ var _pages_about_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./pages/about.js */ \"./src/js/pages/about.js\");\n/* harmony import */ var _pages_singleProduct_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./pages/singleProduct.js */ \"./src/js/pages/singleProduct.js\");\n\r\n\r\n\r\n\r\n\r\nconst router = () => {\r\n  // Router\r\n  window.addEventListener(\"load\", function () {\r\n    let url = window.location.pathname;\r\n    let words = url.split(\"/\");\r\n    let pageSlug = words[words.length - 2];\r\n    let customPostSlug = words[words.length - 3];\r\n\r\n    // Global\r\n    (0,_global_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n\r\n    // Home\r\n    if (url === \"/\" || url === \"/index.html\" || url === \"/realgreekdairies/\")\r\n      (0,_pages_home_js__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n\r\n    // About\r\n    if (\r\n      url === \"/about.html\" ||\r\n      url === \"/about\" ||\r\n      url === \"/realgreekdairies/about/\"\r\n    )\r\n      (0,_pages_about_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\r\n\r\n    // Single Product\r\n    if (\r\n      url === \"/single-product.html\" ||\r\n      url === \"/single-product\" ||\r\n      customPostSlug === \"product\"\r\n    )\r\n      (0,_pages_singleProduct_js__WEBPACK_IMPORTED_MODULE_3__[\"default\"])();\r\n  });\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (router);\r\n\n\n//# sourceURL=webpack://realgreekdairies/./src/js/router.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/index.js");
/******/ 	
/******/ })()
;