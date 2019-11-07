<?php

$nombre_inmobiliaria = "Su Propiedad Inmobiliaria";
$logo = "images/Logo_trazo.png";
$logo_blanco = "images/logoB.png";
$logo_vertical = "Logo2.jpg";
$link_facebook = "https://www.facebook.com/Su-Propiedad-Inmobiliaria-261000654021571/";
$link_instagram = "https://www.instagram.com/supropiedadinmobiliaria/";
$link_youtube ="https://www.youtube.com/channel/UCcnQAfZgx5f7B5A1v6IcAYA";
$link_pse = "https://www.pagosvirtualesavvillas.com.co/personal/pagos/9255";
$logo_pse = "images/logopse.png";
$link_whatsapp = "https://api.whatsapp.com/send?phone=573156733000&text=&source=&data=";
$telefono_fijo = "PBX +57(4) 444 0591";


$iconos_contacto = array(
	"telefono_fijo" => "fas fa-phone-alt",
	"celular" => "fas fa-mobile-alt",
	"direccion" => "fas fa-map-marker-alt",
	"correo" => "far fa-envelope",
	"horario" => "fas fa-calendar-alt",
);

$datos_contacto_sedes = array(
	"medellin_poblado" => array(
		"nombre_sede" => "Sede Medellín Poblado",
		"direccion" => "Carrera 37 #8ª-46 oficina 201 Ed Primavera.",
		"celular" => array(
				'link' => '+573156733000',
				'imprimir' => '315 673 30 00'
		),
		"fijo" => array(
			'link' => '+0344440591',
			'imprimir' => 'PBX +57(4) 444 0591',
		),
		"correo" => "servicioalcliente@supropiedadinmobiliaria.com",
		"horario" => "L-V 8:00 a.m. - 12:30 p.m. y 2:00 p.m. - 5:30 p.m. <br> S 9:00 a.m. - 12:00 m."
	),
	"medellin_centro" => array(
		"nombre_sede" => "Sede Medellín Centro",
		"direccion" => "Calle 52 #49-28 Piso 13 Ed Lonja de Propiedad Raíz",
		"celular" => array(
			'link' => '+573166161076',
			"imprimir" => '316 616 10 76',
		),
		"fijo" => array(
			'link' => '+0344440591',
			'imprimir' => 'PBX +57(4) 444 0591',
		),
		"correo" => "info@supropiedadinmobiliaria.com",
		"horario" => "L-V 8:00 a.m. - 12:00 m. y 2:00 p.m. - 6:00 p.m. <br> S 9:00 a.m - 12:00 m."
	),
	"bogota_chico" => array(
		"nombre_sede" => "Sede Bogotá Chicó",
		"direccion" => "CARRERA 17 #88-23 EDIFICIO CEZANNE, OFICINA 102, BOGOTÁ D.C.",
		"celular" => array(
			'link' => '+0573043297400',
			"imprimir" => '304 329 7400',
		),
		"fijo" => array(
			'link' => '+0313106106',
			'imprimir' => 'PBX +57(1) 3 106 106'
		),
		"correo" => "servicioalclienteb@supropiedadinmobiliaria.com",
		"horario" => " L-V 8:00 a.m. - 12:30 p.m. y 2:00 p.m. - 5:30 p.m. <br> S 9:00 a.m. - 12:00 m.",
	)
);

$aliados = array(
	1 => "images/fgi.png",
	2 => "images/Logo_Lonja.png",
	3 => "images/unifianza.png",
	4 => "images/ciencuadras.png",
	5 => "images/libertador.png",
	6 => "images/Fenalco.png",
	7 => "images/fenalco-atlantico-procredito.jpg",
	8 => "images/Properati.png",
	9 => "images/",
	

);


$iconos_servicios = array(
	"arriendos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"avaluos" => "fas fa-balance-scale",
);


$iconos_clientes = array(
	"arredatarios" => "fas fa-key",
	"propietarios" => "fas fa-home",
	"pse" => "fas fa-money-check-alt",
	"consignar_inmueble" => "fas fa-file-alt",
	"formularios_aseguradoras" => "fas fa-file-pdf",
);


$formularios_aseguradoras = [
	0 => [
		'nombre' => 'Libertador Persona Jurídica',
		'ruta' => '/Formulario+Persona+Juridica.pdf'
	],
	1 => [
		'nombre' => 'Libertador Persona Natural',
		'ruta' => '/Formulario+Persona+Juridica.pdf'
	],
	2 => [
		'nombre' => 'Libertador Persona Jurídica Bogotá',
		'ruta' => '/Formulario+Persona+Juridica+Bogota.pdf'
	],
	3 =>[
		'nombre' => 'Libertador Persona Natural Bogotá',
		'ruta' => '/Formulario+Persona+Natural+Bogota.pdf'
	],
	4 => [
		'nombre' => 'Libertador Estudio Seguro',
		'ruta' => '/Precio de estudio Aseguradora.pdf'
	],
	5=>[
		'nombre' => 'Libertador Instructivo Persona Natural',
		'ruta' => '/Instrucciones P Natural.pdf'
	],
	6=>[
		'nombre' => 'Libertador Instructivo Persona Jurídica',
		'ruta' => '/Instruccion P Juridica.pdf'
	],
	7=>[
		'nombre' => 'Unifianza Persona Jurídica',
		'ruta' => '/formulario-personas-juridicas Unifianza.pdf'
	],
	8=>[
		'nombre' => 'Unifianza Persona Natural',
		'ruta' => '/formulario-personas-naturales Unifianza.pdf'
	],
	9=>[
		'nombre' => 'FGI Persona Natural',
		'ruta' => '/SOLICITUD-DE-ARRENDAMIENTO-PERSONA-NATURAL.pdf'
	],
	10 =>[
		'nombre' => 'FGI Persona Jurídica',
		'ruta' => '/SOLICITUD-DE-ARRENDAMIENTO-PERSONA-JURÍDICA.pdf'
	]
];


$imagenes_slide_principal = array(
	0 => [
		'imagen' => 'images/imagenslide.png',
		'alt' =>''
	]
);


$texto_quienes_somos = array(
	"parrafos" => array(
		0 => "Empresa del sector inmobiliario, con una experiencia de más de 18 años en el mercado, lo cual nos permite diferenciarnos en el sector, y  generar una experiencia superior a nuestros clientes.",
	),
	"mision" => array(
		0 => "Brindar a nuestros Clientes soluciones efectivas dentro del sector, esto de la mano de una asesoría no solo profesional si no humana.",
	),
	"valores" => array(
		0 => "<b>Honestidad:</b> Obligación de realizar todos los procesos de una manera transparente y clara para toda la comunidad.",
		1 => "<b>Calidez:</b> Compromiso de brindar experiencias positivas a todas las personas.",
		2 => "<b>Respeto:</b> Capacidad para situarse en el lugar del otro.",
		3 => "<b>Armonía:</b> Crear un ambiente laboral ideal donde todos (clientes y empleados) se sientan a gusto.",
	)
);


$imagenes_slide_quienes_somos = array(
	0 => array(
		'imagen' => 'images/',
		'alt' => 'Imagenes del carousel quienes somos'
	),
	1 => array(
		'imagen' => 'images/',
		'alt' => 'Imagenes del carousel quienes somos'
	),
	2 => array(
		'imagen' => 'images/',
		'alt' => 'Imagenes del carousel quienes somos'
	)
);



$texto_servicios = array(
	"parrafos" => array(
		0 => " ¡En Su Propiedad Inmobiliaria estamos felices de saber que has decidido poner en nuestras manos la administración de sus bienes inmuebles! Sabemos lo importante que es para nuestros clientes darnos la confianza de manejar el capital que han construido con mucho esfuerzo por años."
	),
	"lista" => array(
		0 => "¿QUÉ TE OFRECEMOS?",
		1 => "Asesoría en la búsqueda de la propiedad de acuerdo tus necesidades",
		2 => "Aprobación de estudio de arrendamiento en menos de 8 horas* (Aplica términos y condiciones)",
		3 => "Proceso de arrendamiento fácil, rápido y seguro.",
		4 => "Garantía durante todo el contrato de arrendamiento o proceso de venta"
	),
	'iconos' =>[
		1 => "far fa-handshake",
		2 => "fas fa-file-signature",
		3 => "fas fa-project-diagram",
		4 => "fas fa-certificate" 
	],
	'animacion' => [
		1 => 'slideInLeft',
		2 => 'slideInDown',
		3 => 'slideInUp',
		4 => 'slideInRight'
	]
);

$consignar_inmueble = array(
	"parrafos" => array(
		0 => "¡En Su Propiedad Inmobiliaria estamos felices de saber que has decidido poner en nuestras manos la administración de sus bienes inmuebles! Sabemos lo importante que es para nuestros clientes darnos la confianza de manejar el capital que han construido con mucho esfuerzo por años; y tener la certeza del manejo y la rentabilidad en el futuro será cumplida según nuestros valores y servicios ofrecidos.",
		1 => "Su Propiedad Inmobiliaria tiene experiencia en el mercado inmobiliaria por más de 18 años, lo cual nos permite brindar siempre el mejor servicio en nuestras diferentes sedes ubicadas en las ciudades Medellín y Bogotá D.C.  En nuestras sucursales contamos con nuestros mejores aliados para realizar un estudio ágil y confiable para poderles brindar siempre el mejor respaldo y garantías.",
	),
	"oferta" => array(
		0  => "¿QUÉ TE OFRECEMOS?",
		"pagos" => array(
			0 => "PAGOS",
			1 => "Garantizamos el pago ANTICIPADO (5 primeros días hábiles de cada mes) de tu canon de arrendamiento por medio de transferencia electrónica, esté o no en mora el arrendatario.",
			2 => "Tenemos la opción de ADELANTAR los primeros 3 meses de arriendo. *Aplica términos y condiciones.",
			3 => "Contamos con el respaldo de empresas ASEGURADORAS/AFIANZADORAS durante toda la vigencia del contrato.",
			4 => "Ofrecemos el servicio de pago de la administración de la copropiedad de tu inmueble (Si aplica).",
		),
		"seguridad_respaldo" => array(
			0 => "SEGURIDAD Y RESPALDO",
			1 => "Realizamos un inventario INICIAL y FINAL del estado del inmueble.",
			2 => "Respondemos por los servicios públicos domiciliarios y daños que NO sean por el deterioro normal del inmueble mientras está ocupado.",
			3 => "Asumimos honorarios de abogados encargados de llevar cualquier proceso de restitución del inmueble en caso de mora.",
			4 => "Revisamos que los arrendatarios que vayan a ocupar el inmueble NO tengan antecedentes legales de ninguna índole.",
		),
		"asesoria_seguimiento" => array(
			0 => "ASESORÍA Y SEGUIMIENTO",
			1 => "Asesoría en el precio correcto del inmueble y comparativos.",
			2 => "Planes de marketing y estrategias para ocupar tu inmueble rápidamente.",
			3 => "Asesoría jurídica y comercial durante la administración de tu inmueble.",
			4 => "Contamos con el mejor servicio de reparaciones locativas para tu inmueble si este lo requiere.",
		),
		"servicio_digital" => array(
			0 => "SERVICIO PERSONALIZADO Y DIGITAL",
			1 => "Acceso a tus facturas y estados de cuenta por medio de nuestra página web www.supropiedadinmobiliaria.com",
			2 => "Valoramos tu TIEMPO, nos desplazamos por ti y hacemos todos los tramites.",
			3 => "Comunicación rápida y fluida ante cualquier requerimiento por WhatsApp, Correo electrónico o telefónicamente. Respondemos sus solicitudes en un promedio de 1 ó 2 días hábiles.",
		),
		"visibilidad_efectividad" => array(
			0 => "VISIBILIDAD Y EFECTIVIDAD",
			1 => "Publicación y promoción de tu inmueble en diferentes medios propios y externos tales como portales periódicos, revistas especializadas, avisos, entre otros.",
			2 => "Realizamos estudios de crédito al arrendatario con respuesta en menos de 4-8 horas en promedio.",
		),
		"parrafo_2" => array(
			0 => "Todo nuestro esfuerzo para que tu inmueble sea rentado lo más pronto posible, sabemos que cada día desocupado son pérdidas para nuestro cliente.",
			"otros_servicios" => array(
				0 => "OTROS SERVICIOS",
				1 => "VENTA de inmuebles nuevos y usados.",
				2 => "Ofrecemos el servicio de CORRETAJE o COLOCACIÓN para los inmuebles en arriendo.  Desde un canon de arrendamiento.",
			),
		),
		"titulo_formulario" => array(
			0 => "Es completamente GRATIS",
		),
		"mensaje_confirmatorio_envio_consignar_inmueble" => array(
			0 => "¡Hola! ¡En Su Propiedad Inmobiliaria estamos felices de saber que has decidido poner en nuestras manos la administración de sus bienes inmuebles! Sabemos lo importante que es para nuestros clientes darnos la confianza de manejar el capital que han construido con mucho esfuerzo por años; y tener la certeza del manejo y la rentabilidad en el futuro será cumplida según nuestros valores y servicios ofrecidos.",
			1 => "Para finalizar el proceso de consignar tu inmueble, Un asesor se pondrá en contacto contigo durante las próximas horas para brindarte más información.",
			2 => "Feliz día",
			3 => "Su Propiedad inmobiliaria",
		),
		"mensaje_confirmatorio_envio_formulario_contacto" => array(
			0 => "¡Hola! Gracias por ponerte en contacto con nosotros, en las próximas horas un asesor de nuestra empresa se comunicara contigo, para brindarte más información.",
			1 => "Feliz día",
			2 => "Su Propiedad inmobiliaria",
		),
	)
);
?>