// Requiere que el archivo "conexion_api/token_api.js" se llame primero
// Requiere jquery

setTimeout(() => {
   // ************************Años de experiencia***************************
   var experence = () =>{
      var fecha = new Date();
      var ano = fecha.getFullYear();
      //  Colocar el año de creacion de la empresa
      const CREATECOMPANY = 2009;
      var total = ano - CREATECOMPANY;
      
      let contador = new CountUp("counter-experence",0,total,0,5);
      //  Hacer efecto segun la posicion del scroll
       $(window).scroll(function (event) {
         var ubicacion = $("#contador").offset().top;
           var scroll = $(window).scrollTop();
             if(scroll > ubicacion-700){
                  contador.start();
               }  
       });
   }
   experence();


   // ******************************* Total de inmuebles disponibles **************
   // $.ajax({
   //    url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
   //    type: 'GET',
   //    beforeSend: function (xhr) {
   //       xhr.setRequestHeader(
   //          'Authorization',
   //          'Basic ' + btoa('Authorization:' + TOKEN));
   //    },
   //    'dataType': "json",
   //    success: function (response) {
   //       //  Se busca la clase counter-propertys para colocarel valor de los inmuebles totales
   //       let contador1 = new CountUp("counter-propertys",0,response.datosGrales.totalInmuebles,0,5);

   //       $(window).scroll(function (event) {
   //          var ubicacion = $("#contador").offset().top;
   //            var scroll = $(window).scrollTop();
   //              if(scroll > ubicacion-700){
   //                   contador1.start();
   //                }  
   //        });
   //    }
   // });

   //    ****************************************** Inmeubles en arriendo ***************************
   $.ajax({
      url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/1/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
      type: 'GET',
      beforeSend: function (xhr) {
         xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:' + TOKEN));
      },
      'dataType': "json",
      success: function (response) {
         
         let contador2= new CountUp("counter-rent",0,response.datosGrales.totalInmuebles,0,5);

         $(window).scroll(function (event) {
            var ubicacion = $("#contador").offset().top;
              var scroll = $(window).scrollTop();
                if(scroll > ubicacion-700){
                     contador2.start();
                  }  
          });
      }

   });

   //  **********************************   Inmuebles en venta ***************************
   $.ajax({
      url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/5/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
      type: 'GET',
      beforeSend: function (xhr) {
         xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:' + TOKEN));
      },
      'dataType': "json",
      success: function (response) {

         let contador3 = new CountUp("counter-sale",0,response.datosGrales.totalInmuebles,0,5);

         $(window).scroll(function (event) {
            var ubicacion = $("#contador").offset().top;
              var scroll = $(window).scrollTop();
                if(scroll > ubicacion-700){
                     contador3.start();
                  }  
          });
      }
   });


   //    ****************************************inmuebles en arriendo venta *************************
   // $.ajax({
   //    url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/2/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
   //    type: 'GET',
   //    beforeSend: function (xhr) {
   //       xhr.setRequestHeader(
   //          'Authorization',
   //          'Basic ' + btoa('Authorization:' + TOKEN));
   //    },
   //    'dataType': "json",
   //    success: function (response) {

   //       //  Se busca la clase counter-sale-rent para colocarel valor de los inmuebles en venta
   //       let contador4 = new CountUp("counter-sale-rent",0,response.datosGrales.totalInmuebles,0,5);

   //       $(window).scroll(function (event) {
   //          var ubicacion = $("#contador").offset().top;
   //            var scroll = $(window).scrollTop();
   //              if(scroll > ubicacion-700){
   //                   contador4.start();
   //                }  
   //        });
   //    }

   // });
}, 500);



 