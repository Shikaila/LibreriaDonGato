<?php foreach ($this->request->getSession()->read('busqueda') as $numero => $informacion) : ?>
    <div class="row" style="text-align: center; padding-top: 2%;">

        <div class="col-sm-3 image-container">
            <a href="#"><img src="/webroot/img/<?php echo $informacion['portada'] ?>" alt="Logo" class="col-xs-12 col-md-12"></a>
        </div>

        <div class="col-sm-8" style="background-color: #FC896F; border-radius: 15px;">
            <h2 style="padding-top: 2%; color:#434343">
                "<?php echo $informacion['titulo_libro'] ?>"
            </h2>
            <h4 style="padding-top: 1%; color:#434343">
                Autor:
                <?php echo $informacion['nombre'] ?>
                <?php echo $informacion['apellidos'] ?>

            </h4>
            <!-- -webkit-line-clamp es para eliminar parte del texto
            -webkit-box-orient al igual que eso indica en que direccion debe hacerse -->
            <p style=" display: -webkit-box;
                -webkit-line-clamp: 3; 
                -webkit-box-orient: vertical; 
                overflow: hidden;
                text-overflow: ellipsis;
                padding-left:2%;
                padding-top: 2%;
                padding-right:2%;">
                <?php echo $informacion['resumen'] ?>

            <div style="padding-left: 55%; padding-top: 2%;">
                <a style="width: 180px; height: 40px;" type="button" class="btn btn-outline-dark" href="/libro/ver?id=<?php echo $informacion['idlibro'] ?>">
                <i class="fas fa-book"></i><span> Mas información</span></a>
            </div>
            </p>
        </div>
    </div>
<?php endforeach; ?>