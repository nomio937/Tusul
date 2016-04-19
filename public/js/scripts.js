$(document).ready(function(){
    $('.bxslider').bxSlider({
        mode: 'fade',
        pager: false,
        captions: true,
        auto: true
    });
    $('.bxPartners').bxSlider({
        mode: 'fade',
        pager: false,
        auto: true
    });
});
$(document).ready(function() {
    $('#myCarousel').carousel({
    interval: 2000  
    })
    
    $('#myCarousel').on('slid.bs.carousel', function() {
        //alert("slid");
    });
    
    
});

