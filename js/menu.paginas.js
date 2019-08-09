if(pagina == 'inicio'){
    $("#imagen_menu").attr("src","images/logoB.png");
    var altura = $('#carousel').height() - $('#menu').height();
    $(window).scroll(function() {
        if ($(this).scrollTop() > altura) {
            $("#imagen_menu").attr("src","images/logo_trazo.png");
            $('#menu').removeClass('transparent');
            $('#menu').addClass('fixed-top');
            $('#menu').addClass('bg-light');
            $('#menu').addClass('borde-menu');
        } else {
            $("#imagen_menu").attr("src","images/logoB.png");
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
