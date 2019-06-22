
$(document).ready(function(){
    $("nav").css({"background":"linear-gradient(#00cec9,#7ed6df)"});
    $("nav .logo a").css("color","black");
    $("nav .menu-bars i").css("color","black");
    $("nav .navbar-navul li a").css("color","black");
    $("nav .navbar-navul ul li a").css("color","black");
    $(window).scroll(() => {
        if($(window).scrollTop() > 20){
            $("nav").css({
                background : "white",
                "border-bottom" : "5px solid",
                "border-image":"linear-gradient(to right, #55E6C1 25%, yellow 25%, yellow 50%,red 50%, red 75%, teal 75%) 5",
                transition:'0.5s'
            });
            $("nav .logo a").css("color","black");
            $("nav .menu-bars i").css("color","black");
            $("nav .navbar-navul li a").css("color","black");   
        }
        else{
            $("nav").css({
                background : "#7ed6df",
                "border-bottom" : "none",
                "border-image":"none",
                transition:'0.5s'
            });
            $("nav .logo a").css("color","black");
            $("nav .menu-bars i").css("color","black");
            $("nav .navbar-navul li a").css("color","black");
            $("nav .navbar-navul ul li a").css("color","black");
        }
        
    })
})