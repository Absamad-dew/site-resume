let scrollY,
    animation_left = document.querySelector('.animation_left'),
    animation_right = document.querySelector('.animation_right');
let interval_animate = setInterval(() => {
     animation_Y()
}, 50);
function animation_Y(scrollY){
    scrollY = window.pageYOffset;
    console.log(scrollY)
    if(scrollY >= 750){
        console.log(scrollY);
        animation_left.style = "animation:left 2s; visibility:visible";
        animation_right.style = "animation:right 2s; visibility: visible";
        clearInterval(interval_animate);
    }

}