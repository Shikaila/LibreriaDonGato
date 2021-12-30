<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mi primer Login</title>
</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div class="modal-content" style="background-color: #FA9983;">
                <div class="col-12 user-img">
                    <img src="/webroot/img/menu/gato_cesta.png" class="col-sm-12 col-md-12">
                    <h1>Bienvenido puto</h1>

                </div>
                <form class="col-12" method="post" action="/usuario/iniciarSesion">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Correo" name="correo" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" />
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
                </form>
                <div class="col-12 forgot" style="margin-bottom: 15px; margin-top: 15px;">
                    <a href="#" >Crea tu cuenta "Librería Don Gato"</a>
                    </br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>