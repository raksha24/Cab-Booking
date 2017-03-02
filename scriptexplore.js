var header = document.getElementById("header");
var navBar = document.getElementById("nav");
var bg = document.getElementById("bg");
var navbarHeight = navBar.offsetHeight;
var headerHeight = header.offsetHeight; 

header.style.height = screen.height-navbarHeight;

function initParallex(){
   /* if (window.pageYOffset > headerHeight){
        navBar.style.position = "fixed";
        navBar.style.top = "0";
    } else{
        navBar.style.position = "absolute";
        navBar.style.top = "0";
    } */
   bg.style.top = -(window.pageYOffset/10)+"px"; 
}

window.addEventListener("scroll", initParallex);