// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/




//to load the progressebar only one time 

window.onload = function(e) {

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
     * pourcentage de progression et interval de lancement 
     */

    setInterval(function() { progressebar.animate(0.8); }, 2500);
    setInterval(function() { progressebar2.animate(0.6); }, 3000);
    setInterval(function() { progressebar3.animate(0.2); }, 3500);

}

/**
 * get the scroll position
 */
window.onscroll = function(e) {

    changeNavBarColor();

}



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
            duration: 1600,
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
        step: function(state, circle) {
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