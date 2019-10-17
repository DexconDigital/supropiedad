<nav class="navbar navbar-expand-lg navbar-light
    <?php if($page != 'inicio'){echo 'bg-light borde-menu';}else{echo'transparent fixed-top';}?>" id="menu">
        <a class="navbar-brand" href="<?php echo $url_host ?>">
            <img id="imagen_menu" src="images/logo_trazo.png" alt="" width="200px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto d-flex  align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_host?>inicio">INICIO</a>
                </li>
                <li class="nav-item <?php if($page == 'quienesSomos'){echo'active';}?>">
                    <a class="nav-link" href="<?php echo $url_host?>quienesSomos">QUIÉNES SOMOS</a>
                </li>
                <li class="nav-item <?php if($page == 'servicios'){echo'active';}?>">
                    <a class="nav-link" href="<?php echo $url_host?>servicios">SERVICIOS</a>
                </li>
                <li class="nav-item <?php if($page == 'inmuebles'){echo'active';}?>">
                    <a class="nav-link" href="<?php echo $url_host?>inmuebles">INMUEBLES</a>
                </li>
                <li class="nav-item <?php if($page == 'clientes'){echo'active';}?>">
                    <a class="nav-link" href="<?php echo $url_host?>clientes">CLIENTES</a>
                </li>
                <li class="nav-item <?php if($page == 'consigna'){echo'active';}?>">
                    <a class="nav-link" href="<?php echo $url_host?>publicaTuInmueble">PUBLICA TU INMUEBLE</a>
                </li>
                <li class="nav-item <?php if($page == 'trabaja'){echo'active';}?>">
                    <a class="nav-link" href="<?php echo $url_host?>trabajaConNosotros">TRABAJA CON NOSOTROS</a>
                </li>
                <li class="nav-item <?php if($page == 'contacto'){echo'active';}?>">
                    <a class="nav-link" href="<?php echo $url_host?>contactenos">CONTÁCTANOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link_pse?>" target="_blank">
                        <img src="<?php echo $url_host.$logo_pse;?>" alt="Logo Pse" width="50px">
                    </a>
                </li>
            </ul>
        </div>
</nav>