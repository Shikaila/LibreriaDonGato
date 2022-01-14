<div class="col-xs-12 col-sm-9" style="background-color: #FC896F; border-radius: 15px; margin-top: 10%;">

    <h1 style="padding-top: 2%; padding-left: 2%;"><i class="fas fa-truck"></i> Confirmación del pedido</h1>
    <h3 style="padding-top: 1%; padding-left: 2%;">Total a pagar:
        <?php echo number_format((float)$this->request->getSession()->read("carrito")['total'], 2) ?> €
        <h6 style=" padding-left: 3%;">Imp. incluidos</h6>
    </h3>

    <form class="col-12" method="post" action="/usuario/confirmadoPedido">
        <h3 style="padding-top: 1%; ">¿Donde quieres recibirlo? </h3>
        <div class="form-group col-12" id="user-group">
            <?php if ($usuario[0]['direccion'] == null) : ?>
                <p>Dirección de envio: </p>
                <input style="height: 50px" class="form-control" placeholder="Dirección de Envio" name="direccion"></input>
            <?php else : ?>
                <p>Dirección de envio: </p>
                <input type="text" name="direccion" value="<?php echo $usuario[0]['direccion'] ?>"></input>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-outline-dark" style="margin-bottom: 3%; margin-left: 2%; margin-top: 2%; margin-left: 75%;">
            <i class="fas fa-shopping-bag"></i> Confirmar compra</button>
    </form>
</div>