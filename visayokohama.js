
function scroll_event(){
    //どれだけスクロールしたか
    const scrollValue = window.pageYOffset;
    if(scrollValue > 150){
        document.getElementById("header").classList.add("small");
    }else{
        document.getElementById("header").classList.remove("small");
    }
    
}
window.addEventListener("scroll",scroll_event);

document.addEventListener("DOMContentLoaded", function(){
    function toggle(){
        document.getElementById("nav_phone").classList.toggle("open");
    }
    function close(){
        document.getElementById("overlay").classList.remove("open"); 
    }
    document.getElementById("nav_phone").addEventListener('click', toggle);
    document.getElementById("nav_phone").addEventListener('click', close);
});



