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
let setInterval_scroll,
    scroll_win = 0;
function contactme(){
    scroll_win = 0
    console.log('dfkdjfk')
    setInterval_scroll = setInterval(() => {
        scroll_window()
    }, 5);
    function scroll_window(){
        scroll_win+=5;
        window.scrollTo(pageYOffset, scroll_win)
        if(scroll_win == 2000){
            clearInterval(setInterval_scroll)
        }
    }
}