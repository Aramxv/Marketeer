// JavaScript Document
// JQuery Script

$(document).ready(function(){

    // banner owl carousel 
    $("#banner-area .owl-carousel").owlCarousel({
        loop:true,
        dots:true,
        items:1
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            // if the window width is 0 
            0:{
                items:1 // show 1 item
            },
            // if the window width is 600
            600:{
                items:3 // show 3 items
            },
            // if the window width is 1000
            1000:{
                items:5 // show 5 items
            }
        }
    });

    // Isotope Filter
    var $grid=$(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    // Filter items on button Click
    $(".button-group").on("click","button",function(){
        var filterValue=$(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    });

    // Newly Stocked Owl Carousel
    $("#newly-stocked .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            // if the window width is 0 
            0:{
                items:1 // show 1 item
            },
            // if the window width is 600
            600:{
                items:3 // show 3 items
            },
            // if the window width is 1000
            1000:{
                items:5 // show 5 items
            }
        }
    });

    // Latest Fur Blogs Owl Carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            // if the window width is 0 
            0:{
                items:1 // show 1 item
            },
            // if the window width is 600
            600:{
                items:3 // show 3 items
            }
        }
    });


    
});