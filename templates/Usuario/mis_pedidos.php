<head>
    <title>Mis pedidos</title>
</head>

<body>
    <?php foreach ($pedidos as $pedido => $informacion) : ?>
        <div>
            <div style="background-color: #FA9983; border-top-left-radius: 15px; border-top-right-radius: 15px; width: 102.75%; margin-left: -15px;
    margin-top: 5%;">
                <div class="row" style="text-align: center; padding-top: 2%; padding-bottom: 0.5%;">
                    <h5 class="col-2">
                        Fecha compra:
                        </br>
                        <?php
                        echo date("j/m/Y", strtotime($informacion['fecha'])) ?>
                    </h5>
                    <h5 class="col-2"> Cantidad:
                        <?php echo $informacion['cantidad'] ?>
                    </h5>
                    <h5 class="col-2"> Precio Total:
                        <?php echo number_format((float)$informacion['precio']*$informacion['cantidad'], 2) ?>€
                    </h5>
                    <h5 class="col-4">
                        Dirección envio:
                        <?php echo $informacion['direccion_envio'] ?>
                    </h5>
                    <h5 class="col-2">
                        Pedido #<?php echo $informacion['idpedido'] ?>
                    </h5>
                </div>
            </div>

            <div class="row" style="padding-bottom: 1%; text-align: center; padding-top: 1%; background-color: #FC896F; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; ">

                <div class="col-sm-2 image-container">
                    <img src="/webroot/img/<?php echo $informacion['portada'] ?>" alt="Logo" class="col-xs-12 col-md-12">
                </div>

                <div class="col-sm-8">
                    <h3 style="padding-top: 2%; color:#434343; text-align: left;">
                        <?php echo $informacion['titulo_libro'] ?>
                    </h3>
                    <h4 style="padding-top: 1%; color:#434343; text-align: left;">

                        <?php echo $informacion['nombre'] ?>
                        <?php echo $informacion['apellidos'] ?>

                    </h4>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>