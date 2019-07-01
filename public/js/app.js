/* SIDEBAR JAVASCRIPT */
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
            right : "-700px"
        })
    }
});

/* UP NAVIGATOR JAVASCRIPT */
$(document).ready(function(){
    $(window).scroll(() => {
        if($(window).scrollTop() > 620 && $(window).scrollTop() < 2500){
            $(".up-navigator-button").css({visibility:"visible"})
        }
        else{
            $(".up-navigator-button").css({visibility:"hidden"})
        }
    })
})

/* LOAD JAVASCRIPT */

$(document).ready(() => {
    $("#navigate_to_loans").click(()=>{
        window.location.href="index.php#section-products";
    });
    $("#navigate_to_loans").trigger("click");
})