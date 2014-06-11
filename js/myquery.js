
$( document ).ready(function() {
   $(document).on("scroll",function(){
        if($(document).scrollTop()>100){
            $(".header, .container_header").removeClass("large").addClass("small");
        } else{
            $(".header, .container_header").removeClass("small").addClass("large");
        }
    });
   //active status
    $(function(){
        $('.nav_a').click(function () {
            $('.nav_a').removeClass('active');
            $(this).addClass('active');
         });
    });

    //menu show hide
    $('.menu').click(function() {
        $('.nav').slideToggle("slow");
    });

     //menu show hide
    $('.menu').click(function() {
        $('.menu').toggleClass("jeden dwa");
    });

});
