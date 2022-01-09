  <!-- Podemos ver que el menu no esta, eso es por el layout de defoult, en el body pone $this->element('menu');
    Eso quiere decir que nos cargara ese menu, si por ejemplo creamos el index de iniciar sesión y queremos
    quitar el menu predetemrinado debemos poner en su controller: public function iniciarSesion(){
        $this-> viewBuilder()->setLayout('ajax');
    } -->

  <head>
      <title>Inicio</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
      <div class="col-12" style=" margin-top: 2%; margin-bottom: 3%;">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="    border-radius: 12px;
                width: 12px; height: 12px;">
                  </li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" style="    border-radius: 12px;
                width: 12px; height: 12px;"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" style="    border-radius: 12px;
                width: 12px; height: 12px;"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <a href="/libro/ver?id=<?php echo $recomendados_top[0]['idlibro'] ?>">
                          <img class="d-block w-100" style="z-index: 1; background-image: url(/webroot/img/menu/foto1.jpg);" src="/webroot/img/menu/foto1.jpg" alt="First slide">
                          <img class="d-block w-100 col-2" style="z-index: 2; position: absolute; top: 38%; left: 10%;" src="/webroot/img/<?php echo $recomendados_top[0]['portada'] ?>" alt="First slide">
                      </a>
                      <h1 class="col-7" style="z-index: 2; position: absolute; top: 45%; left: 30%;">"<?php echo $recomendados_top[0]['titulo_libro'] ?>"</h1>
                  </div>
                  <div class="carousel-item">
                      <a href="/libro/ver?id=<?php echo $recomendados_top[1]['idlibro'] ?>">
                          <img class="d-block w-100" style="z-index: 1; background-image: url(/webroot/img/menu/foto1.jpg);" src="/webroot/img/menu/foto1.jpg" alt="Second slide">
                          <img class="d-block w-100 col-2" style="z-index: 2; position: absolute; top: 38%; left: 10%;" src="/webroot/img/<?php echo $recomendados_top[1]['portada'] ?>" alt="Second slide">
                      </a>
                      <h1 class="col-7" style="z-index: 2; position: absolute; top: 45%; left: 30%; ">"<?php echo $recomendados_top[1]['titulo_libro'] ?>"</h1>
                  </div>
                  <div class="carousel-item">
                      <a href="/libro/ver?id=<?php echo $recomendados_top[2]['idlibro'] ?>">
                          <img class="d-block w-100" style="z-index: 1; background-image: url(/webroot/img/menu/foto1.jpg);" src="/webroot/img/menu/foto1.jpg" alt="Third slide">
                          <img class="d-block w-100 col-2" style="z-index: 2; position: absolute; top: 38%; left: 10%;" src="/webroot/img/<?php echo $recomendados_top[2]['portada'] ?>" alt="Third slide">
                      </a>
                      <h1 class="col-7" style="z-index: 2; position: absolute; top: 45%; left: 30%; ">"<?php echo $recomendados_top[2]['titulo_libro'] ?>"</h1>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>


      <div style=" position: relative; margin-left: auto; margin-right: auto; width: 55em">
          <h1 style="text-align: center;">Querido Lector</h1>
          </br>
          <h5 style="text-align: justify;">Estamos muy agradecidos con ustedes por dar una oportunidad a nuestra libreria Don Gato,
              nos complace anunciar que oficialmente tienen las puertas abiertas para adentrarse en el mundo más bonito de todos: la lectura en físico.
          </h5>
          </br>

          <h5 style="text-align: justify;">
              Librería Don Gato siempre ha estado a favor de apoyar a la literatura y a la vez lograr que el público sienta interés por la literatura.
              Por lo que nuestro objetivo es crear una página web
              original, que llame la atención y que cree oportunidades para que más gente desee leer.
          </h5>
          </br>
          <h5 style="text-align: justify; padding-bottom: 10px;">
              El objetivo principal es el comercio online de libros para poder ofrecer la mejor experiencia a los usuarios.
          </h5>

      </div>


      <div class="container">

          <div class="row p-3">

              <div class="col-xs-1 col-md-4 border-left border-right rounded-left" style="background-color: #FA9983;">

                  <div class="row pt-4 pb-4">
                      <div class="col-2"></div>
                      <img class="col-8" style="height: 300px;" src="/webroot/img/<?php echo $recomendados_bot[0]['portada'] ?>">
                      <div class="col-2"></div>
                  </div>
                  <div class="row pt-4 pb-4" style="background-color: #FC896F;">
                      <div class="col-2"></div>
                      <h5 class="col-2" style="color: #434140; padding-top: 6px;"> <?php echo number_format((float)$recomendados_bot[0]['precio'], 2) ?>€</h5>
                      <div class="col-2"></div>
                      <div class="col-4">
                          <a type="button" class="float-right btn btn-outline-dark" href="/libro/ver?id=<?php echo $recomendados_bot[0]['idlibro'] ?>">
                              <i class="fas fa-book"></i><span> Información</span></a>
                      </div>

                  </div>
              </div>

              <div class="col-xs-1 col-md-4 " style="background-color: #FA9983;">
                  <div class="row pt-4 pb-4">
                      <div class="col-2"></div>
                      <img class="col-8" style="height: 300px;" src="/webroot/img/<?php echo $recomendados_bot[1]['portada'] ?>">
                      <div class="col-2"></div>
                  </div>
                  <div class="row pt-4 pb-4" style="background-color: #FC896F;">
                      <div class="col-2"></div>
                      <h5 class="col-2" style="color: #434140; padding-top: 6px;"> <?php echo number_format((float)$recomendados_bot[1]['precio'], 2) ?>€</h5>
                      <div class="col-2"></div>
                      <div class="col-4">
                          <a type="button" class="float-right btn btn-outline-dark" href="/libro/ver?id=<?php echo $recomendados_bot[1]['idlibro'] ?>">
                              <i class="fas fa-book"></i><span> Información</span></a>
                      </div>

                  </div>
              </div>

              <div class="col-xs-1 col-md-4 border-left border-right rounded-right" style="background-color: #FA9983;">

                  <div class="row pt-4 pb-4">
                      <div class="col-2"></div>
                      <img class="col-8" style="height: 300px;" src="/webroot/img/<?php echo $recomendados_bot[2]['portada'] ?>">
                      <div class="col-2"></div>
                  </div>
                  <div class="row pt-4 pb-4" style="background-color: #FC896F;">
                      <div class="col-2"></div>
                      <h5 class="col-2" style="color: #434140; padding-top: 6px;"> <?php echo number_format((float)$recomendados_bot[2]['precio'], 2) ?>€</h5>
                      <div class="col-2"></div>
                      <div class="col-4">
                          <a type="button" class="float-right btn btn-outline-dark" href="/libro/ver?id=<?php echo $recomendados_bot[2]['idlibro'] ?>">
                              <i class="fas fa-book"></i><span> Información</span></a>
                      </div>

                  </div>

              </div>

          </div>


      </div>
      </div>

      <?= $this->element('footer'); ?>


  </body>

  </html>