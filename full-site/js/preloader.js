var sagapreloaderAnimation = (function() {

    var preloaderContainer = document.querySelector('.preloader-container');
    var circle = document.querySelector('.svg-circle');
    var loadingCircleText = document.querySelector('.svg-loading-circle__text');
    var loadingCircleContainer = document.querySelector('.svg-loading-circle-container');
    var currentPercent = 0;

    function init() {

        preloaderContainer.style.display = 'block';

        circle.addEventListener('animationstart', function() {
            var showPercent = window.setInterval(function() {
                if (currentPercent < 100) {
                  currentPercent += 1;
                } else {
                  currentPercent = 100;
                  clearInterval(showPercent);
                  preloaderContainer.classList.add('remove-svg');
                }
                // Updates a div that displays the current percent
                loadingCircleText.innerHTML = currentPercent + '%';
            }, 70);
        });
    
        loadingCircleContainer.addEventListener('animationend', function(e) {
            if(e.target.classList.contains('svg-loading-circle-container')) {
                sessionStorage.setItem('preloaderRan', true);
            }
        });
    }

    return {
        init: init
    };

})();

if(!sessionStorage.getItem('preloaderRan')) {
    sagapreloaderAnimation.init();
}
//preloaderAnimation.init();

// preloaderAnimation