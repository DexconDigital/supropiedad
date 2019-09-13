if(pagina == 'inicio'){
    direccion = URLDOMAIN +'images/logoB.png';
    $("#imagen_menu").attr("src", direccion);
    var altura = 100;
    $(window).scroll(function() {
        if ($(this).scrollTop() > altura) {
            direccion = URLDOMAIN +'images/logo_trazo.png';
            $("#imagen_menu").attr("src",direccion);
            $('#menu').removeClass('transparent');
            $('#menu').addClass('fixed-top');
            $('#menu').addClass('bg-light');
            $('#menu').addClass('borde-menu');
        } else {
            direccion = URLDOMAIN +'images/logoB.png';
            $("#imagen_menu").attr("src",direccion);
            $('#menu').removeClass('bg-light');
            $('#menu').removeClass('borde-menu');
            $('#menu').addClass('transparent');
            
        }
    });
}else{
    direccion = URLDOMAIN +'images/logo_trazo.png';
    $("#imagen_menu").attr("src",direccion);
    var altura = $('#menu').height();
    $(window).scroll(function() {
        if ($(this).scrollTop() > altura) {
            $('#menu').addClass('fixed-top');
        } else {
            $('#menu').removeClass('fixed-top');
        }
    });
}
