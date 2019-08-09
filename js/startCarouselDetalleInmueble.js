$('#slide-detalle').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '#miniaturas'
});
$('#miniaturas').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '#slide-detalle',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    variableWidth: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }
    ]
});