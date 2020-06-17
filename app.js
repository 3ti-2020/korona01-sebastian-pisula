function smoothScrool(target,duration){ 
    var target = document.querySelector(target);
    var targetPosition = target.getBoundingClientRect().top;
    var startPosition = window.pageYOffset;
    var distance = targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime){
        if(startTime === null ) startTime = currentTime;
        var timeElapsed = currentTime - startTime;
        var run = ease(timeElapsed,startPosition,distance,duration);
        window.scrollTo(0,run);
        if(timeElapsed < duration) requestAnimationFrame(animation);
    }

    function ease (t, b, c, d) {
        t /= d/2;
        if (t < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
        t -= 2;
        return c/2 * (Math.sqrt(1 - t*t) + 1) + b;
    };

    requestAnimationFrame(animation);  
}



var section1 = document.querySelector('.section1');
var section2 = document.querySelector('.section2');


section1.addEventListener('click',function(){
    smoothScrool('.section2', 1000);
});

section2.addEventListener('click',function(){
    smoothScrool('.section1', 1000);
});






