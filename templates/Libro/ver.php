<head>
    <link rel="stylesheet" href="/webroot/css/ver.css">
</head>

<body>

    <div class="row" style="text-align: center; padding-top: 5%;">

        <div class=" col-xs-12 col-sm-3 image-container" style="margin-left: -7%;">
            <img src="/webroot/img/<?php echo $libro['portada'] ?>" alt="Logo" class="col-xs-12 col-md-12">
        </div>
        <div class="col-xs-12 col-sm-9" style="background-color: #FC896F; border-radius: 15px;">
            <div class="row">
                <div class="col-xs-12 col-sm-6 border-right border-dark" style="margin-top: 2%; margin-bottom: 2%;">
                    <h3 style="padding-top: 2%; color:#434343; text-align: left;">
                        "<?php echo $libro['titulo_libro'] ?>"
                    </h3>
                    <h4 style="padding-top: 1%; color:#434343; text-align: left;">
                        Autor:
                        <?php echo $libro['nombre'] ?>
                        <?php echo $libro['apellidos'] ?>
                    </h4>
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="container">
                            <?php foreach ($categoria as $numero => $categoria_inf) : ?>
                                <a style="margin-right: 4%; margin-top: 2%;" type="button" class="btn btn-outline-dark float-left" href="/libro/busquedaCategoria?categoria=<?php echo $categoria_inf['idcategoria'] ?>">
                                    <span><?php echo $categoria_inf['nombre'] ?></span></a>

                            <?php endforeach; ?>
                        </div>
                    </div>
                    <p style="margin-top: 1%; padding-right:2%; text-align: left;">
                        <?php echo $libro['resumen'] ?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6" style="margin-top: 2%;">

                    <div class="row" style="padding-top: 10%; padding-left: 3%;">
                        <div class="container">
                            <div class="row">
                                <h3 class="col-5" style="text-align: left;"><?php echo number_format((float)$libro['precio'], 2) ?>€</h3>

                                <h3 class="col-7"> Envío Gratuito</h3>
                            </div>
                        </div>
                    </div>

                    <?php if ($this->request->getSession()->read("idusuario") === "") : ?>

                        <div class="col-12" style="padding-top: 7%;">
                            <a type="button" class="btn btn-outline-dark col-12" href="/usuario/iniciarSesion">
                                <span> Inicie sesión para poder añadir al Carrito</span></a>
                        </div>

                    <?php else : ?>

                        <div class="col-12" style="padding-top: 7%;">
                            <a type="button" class="btn btn-outline-dark col-12" href="/usuario/anhadirCarro?id=<?php echo $libro['idlibro'] ?>">
                                <i class="fas fa-shopping-basket"></i><span> Añadir al Carrito</span></a>
                        </div>


                    <?php endif; ?>

                </div>
            </div>



        </div>
    </div>

    <div class="row" style="text-align: center; margin-top: 2%;">

        <div class="container">

            <?php if ($this->request->getSession()->read("idusuario") !== "") : ?>

                <form class="col-12" method="post" action="/libro/subirComentario?idlibro=<?php echo $libro['idlibro']; ?>&idusuario=<?php echo $this->request->getSession()->read("idusuario"); ?>">
                    <div class="rating col-3"> <input type="radio" name="valoracion" value="5" id="5">
                        <label for="5">☆</label>
                        <input type="radio" name="valoracion" value="4" id="4">
                        <label for="4">☆</label>
                        <input type="radio" name="valoracion" value="3" id="3">
                        <label for="3">☆</label>
                        <input type="radio" name="valoracion" value="2" id="2">
                        <label for="2">☆</label> <input type="radio" name="valoracion" value="1" id="1">
                        <label for="1">☆</label>
                    </div>

                    <div class="form-group col-12" id="user-group">
                        <textarea style="height: 100px" class="form-control" placeholder="Comentario" name="comentario"></textarea>
                    </div>

                    <div class="buttons col-1"> <button type="submit" class="btn btn-outline-dark">Subir Comentario</button> </div>

                </form>

            <?php else : ?>

                <div class="buttons"> <a href="/usuario/iniciarSesion"><button class="btn btn-outline-dark">Inicie sesión para comentar</button></a> </div>

            <?php endif; ?>

        </div>



    </div>

    <div class="row" style="text-align: center; margin-top: 100px;">

        <div class="container" style="background-color: #FC896F; min-height: 200px; border-radius: 15px; margin-bottom: 70px;">

            <?php if (count($comentarios) !== 0) : ?>
                <h1 style="padding-top: 2%;">Reseñas</h1>
                <?php foreach ($comentarios as $numero => $comentario) : ?>

                    <div class="row" style="padding-top: 25px;">

                        <div class="container">

                            <div class="row" style="padding-left: 25px; margin: 25px; background-color: #FA9983; border-radius: 15px;">
                                <div class="col-3">
                                    <div class="row">
                                        <?php for ($i = 0; $i < $comentario['valoracion']; $i++) : ?>

                                            <p style="font-size: 50px; margin-left: 10px;"> ☆ </p>

                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <h2 style="text-align: left; padding-left: 5%; width: 150%; padding-top: 15px;"> <?php echo $comentario['nombre']; ?> ha comentado: </h2>
                                    </div>
                                </div>
                                <div class="col-12" style="overflow: auto;">
                                    <div class="row" style="padding-bottom: 1%;">
                                        <h>
                                            <p> <?php echo $comentario['texto_comentario']; ?> </p>
                                        </h>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                <?php endforeach; ?>

            <?php else : ?>

                <h2 style="text-align: center; padding-top: 100px;"> No hay aún comentarios para este libro. Sé el primero.</h2>

            <?php endif; ?>

        </div>
    </div>

</body>