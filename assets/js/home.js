$(document).ready(function(){
    $('.category').niceSelect();
    
    $(".banner-slider").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 5,
        responsive:{
            0:{
                items: 1,
                nav: false   
            },
            768:{
                items: 2   
            },
            992:{
                items: 3,
                loop: false
            }
        }
    });
    $(".category-slider").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText:[
            '<i class="ion ion-ios-arrow-back"></i>',
            '<i class="ion ion-ios-arrow-forward"></i>'
        ],
        margin: 5,
        responsive:{
            0:{
                items: 2,
                nav: false   
            },
            768:{
                items: 2   
            },
            992:{
                items: 6,
                loop: false
            }
        }
    });
    $(".flashsale-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: true,
        dots: false,
        navText:[
            '<i class="ion ion-ios-arrow-back"></i>',
            '<i class="ion ion-ios-arrow-forward"></i>'
        ],
        margin: 10,
        responsive:{
            0:{
                items: 2,
                margin: 5,
                nav:false,
                stagePadding: 10  
            },
            768:{
                items: 3   
            },
            992:{
                items: 5   
            }
        }
    });
    $(".new-arrival-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        dots: false,
        navText:[
            '<i class="ion ion-ios-arrow-back"></i>',
            '<i class="ion ion-ios-arrow-forward"></i>'
        ],
        margin: 10,
        responsive:{
            0:{
                items: 2,   
                margin: 5,
                stagePadding: 10
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".brand-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: true,
        dots:false,
        margin: 10,
        navText:[
            '<i class="ion ion-ios-arrow-back"></i>',
            '<i class="ion ion-ios-arrow-forward"></i>'
        ],
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                nav: false,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".camera-video-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        margin: 10,
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".computer-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        margin: 10,
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".gadget-accessories-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        margin: 10,
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".handphone-gadget-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        margin: 10,
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".brand-product-slider").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        margin: 10,
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".best-product").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        margin: 10,
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });
    $(".new-product").owlCarousel({
        items: 6,
        loop: false,
        nav: false,
        margin: 10,
        responsive:{
            0:{
                items: 2,
                dots: false,
                margin: 5,
                stagePadding: 10   
            },
            768:{
                items: 3   
            },
            992:{
                items: 6   
            }
        }
    });

    

});


$('.btn-add').click(function(e){
    e.preventDefault();
    var add_value = $(this).parents('.product-qty').find('.qty-input').val();
    var value = parseInt(add_value,10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
        $(this).parents('.product-qty').find('.qty-input').val(value);
    }
});

$('.btn-remove').click(function(e){
    e.preventDefault();
    var remove_value = $(this).parents('.product-qty').find('.qty-input').val();
    var value = parseInt(remove_value,10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
        $(this).parents('.product-qty').find('.qty-input').val(value);
    }
});

$(window).scroll(function(){
    var scrolling = $(window).scrollTop();
    if(scrolling >50){
        // $('.top-nav').addClass('fixed-top');
    }
    else{
        // $('.top-nav').removeClass('fixed-top');

    }
});