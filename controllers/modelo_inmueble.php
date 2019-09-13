<?php 
// modelo inmueble propiedades destacadas
    function modelo_inmueble($r, $cantidad_inmuebles, $url){
        for ($i = 0; $i < $cantidad_inmuebles; $i++) {
            $imagen = existeImagen(($r[$i]['foto1']), $url);
            $codigo = str_ireplace("813-", "", $r[$i]['Codigo_Inmueble']);
            $api = $r[$i];

            echo '
            <div class="item">
            <div class="card" style="">
                <div class="container-img">
                <a href="'.$url.'detalleInmueble/codigo/'.$codigo.'">
                        <div class="gestion">
                            <span>'.$api['Gestion'].'</span>
                        </div>
                        <div class="precio">';
                        if($api['Gestion'] == 'Arriendo/venta'){
                            echo '$'.$api['Canon'].' <br>$'.$api['Venta'];
                        }else if($api['Gestion']== 'Arriendo'){
                            echo '$'.$api['Canon'];
                        }else{
                            echo '$'.$api['Venta'];
                        }
            echo'
                        </div>
                        <img src="'.$imagen.'" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body pb-2">
                    <h5 class="card-title mb-1">'.$api['Tipo_Inmueble'].'</h5>
                    <span class="ubicacion mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        '.$api['Barrio'].', '.$api['Ciudad'].'
                    </span>
                </div>
                <ul class="detalles">
                    <li>
                        <i class="fas fa-ruler-combined mr-2"></i>'.$api['AreaConstruida'].'m<sup>2<sup/>
                    </li>
                    <li>
                        <i class="fas fa-bed mr-2"></i> '.$api['Alcobas'].'
                    </li>
                    <li>
                        <i class="fas fa-bath mr-2"></i>'.$api['banios'].'
                    </li>
                    <li>
                        <i class="fas fa-car mr-2"></i>'.$api['garaje'].'
                    </li>
                </ul>
                <div class="footer">
                    <a href="#">
                        Código: '.$codigo.'
                    </a>
                </div>
            </div>
        </div> 
            ';

        }
    }
    //modelo inmueble de la pagina de inmuebles.php
    function modelo_inmueble2($r, $url){
        for ($i = 0; $i < count($r); $i++) {
            $imagen = existeImagen(($r[$i]['foto1']), $url);
            $codigo = str_ireplace("813-", "", $r[$i]['Codigo_Inmueble']);
            $api = $r[$i];
            echo '
            <div class="col-11 col-md-6 col-lg-4">
            <div class="card" style="">
                <div class="container-img">
                <a href="'.$url.'detalleInmueble/codigo/'.$codigo.'">
                        <div class="gestion">
                            <span>'.$api['Gestion'].'</span>
                        </div>
                        <div class="precio">';
                        if($api['Gestion'] == 'Arriendo/venta'){
                            echo '$'.$api['Canon'].' <br>$'.$api['Venta'];
                        }else if($api['Gestion']== 'Arriendo'){
                            echo '$'.$api['Canon'];
                        }else{
                            echo '$'.$api['Venta'];
                        }
            echo'
                        </div>
                        <img src="'.$imagen.'" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body pb-2">
                    <h5 class="card-title mb-1">'.$api['Tipo_Inmueble'].'</h5>
                    <span class="ubicacion mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        '.$api['Barrio'].', '.$api['Ciudad'].'
                    </span>
                </div>
                <ul class="detalles">
                <li>
                    <i class="fas fa-ruler-combined mr-2"></i>'.$api['AreaConstruida'].'m<sup>2<sup/>
                </li>
                <li>
                    <i class="fas fa-bed mr-2"></i> '.$api['Alcobas'].'
                </li>
                <li>
                    <i class="fas fa-bath mr-2"></i>'.$api['banios'].'
                </li>
                <li>
                    <i class="fas fa-car mr-2"></i>'.$api['garaje'].'
                </li>
            </ul>
                <div class="footer">
                    <a href="#">
                        Código: '.$codigo.'
                    </a>
                </div>
            </div>
        </div> 
            ';

        }
    }
    
    function modelo_inmueble_similares($r, $url){
        for ($i = 0; $i < count($r); $i++) {
            $imagen = existeImagen(($r[$i]['foto1']), $url);
            $codigo = str_ireplace("813-", "", $r[$i]['Codigo_Inmueble']);
            $api = $r[$i];
            echo '
            <div class="col-12">
            <div class="card" style="">
                <div class="container-img">
                    <a href="'.$url.'detalleInmueble/codigo/'.$codigo.'">
                        <div class="gestion">
                            <span>'.$api['Gestion'].'</span>
                        </div>
                        <div class="precio">';
                        if($api['Gestion'] == 'Arriendo/venta'){
                            echo '$'.$api['Canon'].' <br>$'.$api['Venta'];
                        }else if($api['Gestion']== 'Arriendo'){
                            echo '$'.$api['Canon'];
                        }else{
                            echo '$'.$api['Venta'];
                        }
            echo'
                        </div>
                        <img src="'.$imagen.'" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body pb-2">
                    <h5 class="card-title mb-1">'.$api['Tipo_Inmueble'].'</h5>
                    <span class="ubicacion mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        '.$api['Barrio'].', '.$api['Ciudad'].'
                    </span>
                </div>
                <ul class="detalles">
                    <li>
                        <i class="fas fa-ruler-combined mr-2"></i>'.$api['AreaConstruida'].'m<sup>2<sup/>
                    </li>
                    <li>
                        <i class="fas fa-bed mr-2"></i> '.$api['Alcobas'].'
                    </li>
                    <li>
                        <i class="fas fa-bath mr-2"></i>'.$api['banios'].'
                    </li>
                    <li>
                        <i class="fas fa-car mr-2"></i>'.$api['garaje'].'
                    </li>
                </ul>
                <div class="footer">
                    <a href="#">
                        Código: '.$codigo.'
                    </a>
                </div>
            </div>
        </div> 
            ';
        }
    }

    function existeImagen($r, $url) {
            if ($r == "") {
                $r = $url."images/no_image.png";
            }
            return $r;
    }
