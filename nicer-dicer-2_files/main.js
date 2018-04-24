//Скролл по якорям
$(document).ready(function(){
    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    })
});   
//Slick gallery
$(document).ready(function(){
$('.twist').slick({
  dots: false,
  infinite: true,
  speed: 0,
  fade: true,
  cssEase: 'linear'
});
    
$('.photo').slick({
    dots: false,
  infinite: true,
  speed: 200,
  fade: true,
  cssEase: 'linear'
}); 
    
});

