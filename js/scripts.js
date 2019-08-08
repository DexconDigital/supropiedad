if(pagina == 'inicio'){

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
}