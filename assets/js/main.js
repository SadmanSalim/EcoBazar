$(".mobSearch").click(function(){
    $(".searchBoxMobile input").addClass('active');
    $(".searchBoxMobile button").addClass('active');
    $(".background").addClass('active');
});
$(".background").click(function(){
    $(".searchBoxMobile input").removeClass('active');
    $(".searchBoxMobile button").removeClass('active');
    $(".background").removeClass('active');
})