/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 53);
/******/ })
/************************************************************************/
/******/ ({

/***/ 53:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(54);


/***/ }),

/***/ 54:
/***/ (function(module, exports) {

// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

window.onload = function (e) {

    //to load the progressebar only one time 
    var porgresseBarUsed = false;
    var scrollTimeout;

    /**
     * animate pourcentage a la bonne hauteur
     */
    /*  var readSpeed = window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        window.oRequestAnimationFrame;
    var $window = $(window);
    var lastScrollTop = $window.scrollTop();
    */

    if ($(window).width() <= 600) {

        /* creer les object de progressebar
         */
        var progressebar = progresseBarCercle(container, '#3ADF00');
        var progressebar2 = progresseBarCercle(container2, '#AEB404');
        var progressebar3 = progresseBarCercle(container3, '#B22222');

        var barArray = [progressebar, progressebar2, progressebar3];

        /**
         * set the text style
         */
        for (i = 0; i < barArray.length; i++) {
            barArray[i].text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
            barArray[i].text.style.fontSize = '2rem';
        }

        /**
         * pourcentage de progression
         */
        progressebar.animate(0.8);
        progressebar2.animate(0.7);
        progressebar3.animate(0.5);
    } else {
        $(window).scroll(function () {
            if (scrollTimeout) {
                // clear the timeout, if one is pending
                clearTimeout(scrollTimeout);
                scrollTimeout = null;
            }
            scrollTimeout = setTimeout(scrollHandler, 5);
        });
    }

    scrollHandler = function scrollHandler() {

        /**
         * change navbar color onscroll
         */
        changeNavBarColor();

        var hT = $('#resumer').offset().top,
            hH = $('#resumer').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();

        if (wS > 300 && porgresseBarUsed == false) {

            /**
             * creer les object de progressebar
             */
            var progressebar = progresseBarCercle(container, '#3ADF00');
            var progressebar2 = progresseBarCercle(container2, '#AEB404');
            var progressebar3 = progresseBarCercle(container3, '#B22222');

            var barArray = [progressebar, progressebar2, progressebar3];

            /**
             * set the text style
             */
            for (i = 0; i < barArray.length; i++) {
                barArray[i].text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                barArray[i].text.style.fontSize = '2rem';
            }

            /**
             * pourcentage de progression
             */
            progressebar.animate(0.8);
            progressebar2.animate(0.6);
            progressebar3.animate(0.2);

            porgresseBarUsed = true;
        }
    };
};

/**
 * [changeNavBarColor changer background de la bar de navigation]
 * @return {[type]} [no return]
 */
function changeNavBarColor() {

    var wn = $(window).scrollTop();
    if (wn > 120) {

        $(".hero .navbar").css("background", "rgb(0,0,0)");
    } else {
        $(".hero .navbar").css("background", "transparent");
    }
}

/**
 * [progresseBarCercle description]
 * @param  Html id containerBar   id Html tag
 * @param  Couleur color          la couleur pour une bar 
 * @return ProgressBar            ProgressBar object to be used
 */
function progresseBarCercle(containerBar, color) {

    return new ProgressBar.Circle(containerBar, {
        color: '#aaa',
        // This has to be the same size as the maximum width to
        // prevent clipping
        strokeWidth: 4,
        trailWidth: 1,
        easing: 'easeInOut',
        duration: 1400,
        text: {
            autoStyleContainer: false
        },
        from: {
            color: color,
            width: 1
        },
        to: {
            color: color,
            width: 4
        },
        // Set default step function for all animate calls
        step: function step(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('');
            } else {
                circle.setText(value + '%');
            }
        }
    });
}

/***/ })

/******/ });