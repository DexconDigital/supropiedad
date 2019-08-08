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
                    <a href="">
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
                        <span>Área</span>'.$api['AreaConstruida'].' m<sup>2<sup/>
                    </li>
                    <li>
                        <span>Alcobas</span> '.$api['Alcobas'].'
                    </li>
                    <li>
                        <span>Baños</span> '.$api['banios'].'
                    </li>
                    <li>
                        <span>Garaje</span> '.$api['garaje'].'
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
                    <a href="">
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
                        <span>Área</span>'.$api['AreaConstruida'].' m<sup>2<sup/>
                    </li>
                    <li>
                        <span>Alcobas</span> '.$api['Alcobas'].'
                    </li>
                    <li>
                        <span>Baños</span> '.$api['banios'].'
                    </li>
                    <li>
                        <span>Garaje</span> '.$api['garaje'].'
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
    
    function modelo_inmueble_similares($r, $cantidad_inmuebles){

      for ($i = 0; $i < $cantidad_inmuebles; $i++) {
          $imagen = existeImagen(($r[$i]['foto1']));
          $codigo = str_ireplace("60-", "", $r[$i]['Codigo_Inmueble']);
          $api = $r[$i];

          echo'
          <div class="col-10">
          <div class="card" style="">
            <div class="property">
              <a href="">
                <div class="property-image">
                  <img alt="" src="'.$imagen.'"></div>
                <div class="precio">';
                  if($api['Gestion'] == 'Arriendo/venta'){
                      echo '$'.$api['Canon'].' <br>$'.$api['Venta'];
                  }else if($api['Gestion']== 'Arriendo'){
                      echo '$'.$api['Canon'];
                  }else{
                      echo '$'.$api['Venta'];
                  }
              echo '
                </div>
                <div class="overlay">
                  <ul class="additional-info">
                    <li>
                      <header>Área:</header>
                      <figure>'.$api['AreaConstruida'].'<sup>2</sup></figure>
                    </li>
                    <li>
                      <header>Alcobas:</header>
                      <figure> '.$api['Alcobas'].'</figure>
                    </li>
                    <li>
                      <header>Baños:</header>
                      <figure>'.$api['banios'].'</figure>
                    </li>
                    <li>
                      <header>Código:</header>
                      <figure>'.$codigo.'</figure>
                    </li>
                  </ul>
                </div>
              </a>
            </div>
            <div class=" row col-12">
              <div class="col-12">
                <p class="mb-1">Ubicación: '.$api['Barrio'].', '.$api['Ciudad'].'</p>
              </div>
              <div class="col-12">
                <p class="mb-1"> <small>
                    Tipo de gestión: '.$api['Gestion'].'
                  </small>
                </p>
              </div>
              <div class="col-12">
                <p class="mb-1"> <small>
                    Tipo de Inmueble: '.$api['Tipo_Inmueble'].'
                  </small>
                </p>
              </div>
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
