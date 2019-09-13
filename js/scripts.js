if(pagina == 'inicio'){
    
    $(window).resize(function(){ location.reload(); });
    var randomSlide = Math.floor(Math.random() * 2);
    var alto_imagen = $('.carousel-imagen-slide-0').height() - 70;

    $('.carousel-inner').height(alto_imagen);
    
    jQuery(document).ready(function($) {
        $('#slide_inicio').carousel(randomSlide);
        $('#slide_inicio').carousel('next');
    })
    
    $('#slide_inicio').carousel({
        interval: 15000
      })

    $('#owl_aliados').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: false,
            }
        }
    })
    // owl segun cantidad de inmuebles 
    if(cantidad_inmuebles == 1){
        $('#owl-propiedades').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    }else if(cantidad_inmuebles == 2){
        $('#owl-propiedades').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
        })
    }else{
        $('#owl-propiedades').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    }    
}