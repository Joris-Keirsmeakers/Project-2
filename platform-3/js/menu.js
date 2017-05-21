$(document).ready(function() {
    $('.parent').on("click",function(){

        $(this).find(".sub-nav").toggle();
        $(this).siblings().find(".sub-nav").hide();

        if($(".sub-nav:visible").length === 0 ){
            $("#menu-overlay").hide();
        }else {
            $("#menu-overlay").show();
        }
    });

    $("#menu-overlay").on("click",function(){
        $(".sub-nav").hide();
        $(this).hide();
    });
});