/* MENUBAR JAVASCRIPT */
$("nav .menu-bars").on({
    click : () => {
        $(".sidebar").css({
            right : '0'
        });
    }
});
$(".sidebar ul li span.sidebar-close").on({
    click : function(){
        $(".sidebar").css({
            right : "-400px"
        })
    }
});

/* SIDEBAR JAVASCRIPT */
$(document).ready(function(){
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
        }
        else{
            $("nav").css({
                background : "transparent",
                "border-bottom" : "none",
                "border-image":"none",
                transition:'0.5s'
            });
            $("nav .logo a").css("color","white");
            $("nav .menu-bars i").css("color","white");
        }
        if($(window).scrollTop() > 620){
            $(".up-navigator-button").css({visibility:"visible"})
        }
        else{
            $(".up-navigator-button").css({visibility:"hidden"})
        }
    })
})