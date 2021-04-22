window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 190);
});

$(document).ready(function(){
    url = window.location.pathname;
    $('.menu').removeClass('nav_on');
    if(url==='/Portfolio'||url==="/application-mobile-party"||url==="/site-portfolio-bryan-delaitre"){
        $('#nav_portfolio').addClass('nav_on');
    }
});

