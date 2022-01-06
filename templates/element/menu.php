<link href="/webroot/css/menu.css" rel="stylesheet" type="text/css">

<div class="container-fluid">
    <div class="row " style=" background-color: #FA9983;">
        <div class="col-md-2 col-sm-0 d-flex">
        </div>
        <div class="col-xl-3 col-lg-4 col-md-12 col-xs-12">
            <a href="/"><img src="/webroot/img/menu/logonombre.png" alt="Logo" class="col-xs-12 col-md-12"></a>
        </div>
        <div class=" col-lg-3 col-md-12 col-sm-12 d-flex justify-content-center align-items-center" >

            <form class="col-12" method="get" action="/libro/busqueda">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Buscar Título | Autor" name="busqueda" />
                    <button type="submit" class="btn  input-group-text border-0"><i class="fas fa-search"> </i> </button>
                </div>
            </form>



        </div>


        <?php if ($this->request->getSession()->read("idusuario") === "") : ?>
            <div class="col-lg-1 col-md-12 col-xs-12 d-flex justify-content-center align-items-center">
                <a style="width: 180px; height: 40px;" type="button" class="btn btn-outline-dark" href="/usuario/iniciarSesion">
                    <i class="fas fa-user"></i> <span>Iniciar Sesion</span></a>
            </div>
        <?php else : ?>

            <div class="col-lg-2 col-md-12 col-xs-12 d-flex justify-content-left align-items-center" style=" z-index:2">
                <ul class="nav">
                    <li><a style="border-radius: 5px; text-align: center; width: 160px;"><i class="fas fa-cat" style="padding-right: 5px;"></i>Hola,
                            <?php echo $this->request->getSession()->read("nombre"); ?></a>
                        <ul>
                            <li><a href="#"> <i class="fas fa-paw"></i> Perfil</a></li>
                            <?php if ($this->request->getSession()->read("roles") === 1) : ?>
                                <li><a href="/usuario/add"><i class="fas fa-user-cog"></i> Agregar usuario</a></li>
                                <li><a href="/usuario/index"> <i class="fas fa-users-cog"></i> Usuarios</a></li>
                            <?php else : ?>
                                <li><a href="#"> <i class="fas fa-box-open"></i> Mis pedidos</a></li>
                            <?php endif; ?>

                            <li><a href="/usuario/cerrarSesion"> <i class="fas fa-door-open"></i> Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <div class="row" style=" background-color: #FC896F;">
        <!-- Parte de abajo menu libros, espacio para que se centre -->
        <div class="col-md-3 col-xs-0 d-flex ">
        </div>
        <div class="col-md-1 col-xs-12 d-flex ">
        </div>
        <!-- centrado -->
        <div class="col-xs-12 col-md-4 ">
            <ul style="margin-top:1%; margin-bottom: 1%;" class="navbot d-flex justify-content-center justify-content-around">
                <li><a  href="#"><i class="fas fa-hat-wizard"></i> Fantasía</a></li>
                <li><a  href="#"><i class="fas fa-child"></i> Juveniles</a></li>
                <li><a  href="#"><i class="far fa-kiss-wink-heart"></i> Romance</a></li>
            </ul>
        </div>
        <div class="col-md-1 col-s-12 d-flex justify-content-center align-items-center">
            <a style="margin-top: 5%; margin-bottom: 5%; margin-left:25%; padding:10px 20px;" type="button" class="btn btn-outline-dark" href="#">
                <i class="fas fa-shopping-cart" style="padding-right: 5px;"></i><span> Carrito</span></a>
        </div>
    </div>
</div>