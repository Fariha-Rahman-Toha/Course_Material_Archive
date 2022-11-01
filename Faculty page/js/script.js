$(".banner-slider").slick({
    arrows: false,
    dots : true,
    
})

$(".img-slider").slick({
    arrows: false,
    dots : true,
    slidesToShow: 5,
})

$(".text-slider").slick({
    arrows: false,
    dots : false,
    slidesToShow: 1,
    asNavFor:".feedback-img-slider",
})

// $(".feedback-slider").slick({
//     arrows: false,
//     dots : true,

// })


$(".feedback-img-slider").slick({
    arrows: false,
    dots : false,
    slidesToShow: 3,
    centerMode: true,
    centerPadding:"0",
    asNavFor:".text-slider",
})





$('.venobox').venobox();






