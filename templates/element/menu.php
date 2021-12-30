<link href="/webroot/css/menu.css" rel="stylesheet" type="text/css">

<div class="container-fluid" style=" background-color: #FA9983;">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script language="JavaScript" type="text/javascript" src="/webroot/js/Iniciar/funciones.js"></script>
    <div class="row">
        <div class="col-md-1 col-sm-0">

        </div>
        <div class="col-xl-3 col-lg-5 col-md-6 col-sm-8">
            <a href="/"><img src="/webroot/img/menu/LogoNombre3.png" alt="Logo" class="col-sm-12 col-md-12"></a>
        </div>
        <div class="col-md-4 col-sm-4" style="padding-top: 2.2%;">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Buscar" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>


        <?php if ($this->request->getSession()->read("idusuario") === "") : ?>
            <div class="col-md-1 col-s-12">
                <a style="margin-top: 30%; margin-left:20%" type="button" class="btn btn-outline-dark" href="/usuario/iniciarSesion">
                    <i class="fas fa-user"></i> <span>Iniciar Sesion</span></a>
            </div>
        <?php else : ?>
            <div class="col-md-1 col-s-12">
            <a style="margin-top: 30%; margin-left:15%; padding:10px 20px;" type="button" class="btn btn-outline-dark" href="#">
            <i class="fas fa-shopping-cart" style="padding-right: 5px;"></i><span> Carrito</span></a>
            </div>
            <div class="col-md-1 col-s-12" style="margin-left: 5px;">
                <ul style="margin-top:30%;" class="nav">
                    <li><a style="border-radius: 5px; text-align: center; width: 140px;"><i class="fas fa-cat" style="padding-right: 5px;"></i>
                    <?php echo $this->request->getSession()->read("nombre"); ?></a>
                        <ul>
                            <li><a href="#"> <i class="fas fa-paw"></i> Perfil</a></li>
                            <li><a href="#"> <i class="fas fa-box-open"></i> Mis pedidos</a></li>
                            <li><a href="/usuario/cerrarSesion"> <i class="fas fa-door-open"></i> Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php endif; ?>


        <!-- Force next columns to break to new line at md breakpoint and up -->
        <div class="w-100 d-none d-md-block"></div>

        <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
        <div class="col-6 col-sm-4">aaaaaaaaaaaaaaaaaa</div>
    </div>
</div>