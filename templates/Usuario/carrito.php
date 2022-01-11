<form class="col-12" method="post" action="/usuario/comprar">

    <?php foreach ($this->request->getSession()->read("carrito") as $numero => $informacion) : ?>
        <?php if ($numero != 'total') : ?>
            <div class="row" style="text-align: center; padding-top: 2%;">

                <div class="col-sm-3 image-container">
                    <img src="/webroot/img/<?php echo $informacion['libro']['portada'] ?>" alt="Logo" class="col-xs-12 col-md-12">
                </div>

                <div class="col-sm-8" style="background-color: #FC896F; border-radius: 15px;">
                    <h2 style="padding-top: 2%; color:#434343; text-align: left; padding-left: 3%;">
                        "<?php echo $informacion['libro']['titulo_libro'] ?>"
                    </h2>
                    <h4 style="padding-top: 1%; color:#434343; text-align: left; padding-left: 3%; margin-top: 2%;">
                        Precio:
                        <?php echo number_format((float)$informacion['libro']['precio'], 2) . '€' ?>

                    </h4>
                    <div class="row" style="margin-top: 3%;">
                        <h4 style="margin-left: 5%; ">Cantidad:</h4>

                        <input type="number" style="margin-left: 2%; width: 100px;" name="<?php echo $informacion['libro']['idlibro'] ?>" value=<?php echo $informacion['cantidad'] ?> min="0">

                    </div>

                    <div>
                        <a style="width: 180px; height: 40px; margin-top: 10%;" type="button" class="btn btn-outline-dark" href="/usuario/eliminarCarrito?id=<?php echo $informacion['libro']['idlibro'] ?>">
                            </i><span> <i class="fas fa-trash-alt"></i> Eliminar Artículo</span></a>
                    </div>
                    </p>
                </div>
            </div>
        <?php endif ?>
    <?php endforeach; ?>

    <?php if (count($this->request->getSession()->read("carrito"))>=2
     ) : ?>
        <button style="width: 180px; height: 40px; margin-left: 75%; margin-top: 4%; margin-bottom: 3%;" type="submit" class="btn btn-outline-dark">
            <i class="fas fa-shopping-bag"></i> Comprar</button>
    <?php else : ?>
        <div class="modal-dialog text-center" style="padding-top: 5%;">
            <img src="/webroot/img/menu/cesta_vacia.png" class="col-sm-12 col-md-12">
            <h1 style="padding-top: 5%;">Su cesta esta vacía</h1>
        </div>
    <?php endif ?>

</form>