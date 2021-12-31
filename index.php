<?php
    require_once("config/main_config.php");
    require_once("app/models/Header.php");

    $header = new Header();
    $header->append_data(array(
        'bootstrap' => true,
        'ajax_jquery' => true,
        'alertify' => true,
        'css_file' => 'index.css',
    ));
    $header->print();
?>

<body>

<div id="portada">  <!-- imagen principal -->  </div>

<!-- primer mensaje -->
<div class="mensaje">
    <h1>Bienvenido a <?php echo PROJECT_NAME; ?></h1>
</div>

<!-- video de youtube  -->
<iframe width="420" height="315" id= "video"
    src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>

<!-- segundo mensaje -->
<div class="mensaje">
    <h1>¿Qué es <?php echo PROJECT_NAME; ?>?</h1>
    <p>
        <?php echo PROJECT_NAME; ?> es una aplicación web que permite a los usuarios
        acceder a una serie de productos y servicios que se ofrecen en una
        tienda online.
    </p>
</div>

<!-- inscripcion/ pago -->
<div id="inscripcion">
    <h1>Inscripción</h1>
    <p>
        Para poder acceder a nuestros servicios, deberás registrarte en nuestra
        página web.
    </p>
    <a href="#">    <!-- enlace de pay.hotmart -->
        <button class="btn btn-warning">Inscribirse</button>
    </a>
</div>

 <!-- mas datos de la pagina -->

 <!-- disponible -->
 <div id="disponible">
    <h1 class="display-1">Disponible hasta hoy</h1>
    <p> Aprovecha el 50% de descuento por las próximas horas </p>
 </div>


<!-- comentarios -->
<div class="row" id="comentarios">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Comentario #1</h5>
        <p class="card-text">text text text text text text text text text text text text.</p>
        <div class="alert alert-primary"> : ) </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Comentario #2</h5>
        <p class="card-text">text text text text text text text text text text text text.</p>
        <div class="alert alert-primary">: )</div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Comentario #3</h5>
        <p class="card-text">text text text text text text text text text text text text.</p>
        <div class="alert alert-primary">: )</div>
      </div>
    </div>
  </div>
  
</div>

<!-- preguntas frecuentes -->
<div id="preguntas_frecuentes" class="jumbotron">
    <h1>Preguntas frecuentes</h1>
    <p>
        <b>¿Qué es <?php echo PROJECT_NAME; ?>?</b>
        <br>
        <?php echo PROJECT_NAME; ?> es una aplicación web que permite a los usuarios
        acceder a una serie de productos y servicios que se ofrecen en una
        tienda online.
    </p>
    <p>
        <b>¿Cómo funciona <?php echo PROJECT_NAME; ?>?</b>
        <br>
        <?php echo PROJECT_NAME; ?> es una aplicación web que permite a los usuarios
        acceder a una serie de productos y servicios que se ofrecen en una
        tienda online.
    </p>
    <p>
        <b>¿Cómo puedo comprar en <?php echo PROJECT_NAME; ?>?</b>
        <br>
        <?php echo PROJECT_NAME; ?> es una aplicación web que permite a los usuarios
        acceder a una serie de productos y servicios que se ofrecen en una
        tienda online.
    </p>
    <p>
        <b>¿Cómo puedo vender en <?php echo PROJECT_NAME; ?>?</b>
        <br>
        <?php echo PROJECT_NAME; ?> es una aplicación web que permite a los usuarios
        acceder a una serie de productos y servicios que se ofrecen en una
        tienda online.
    </p>
    <p>
        <b>¿Cómo puedo hacer una donación en <?php echo PROJECT_NAME; ?>?</b>
        <br>
        <?php echo PROJECT_NAME; ?> es una aplicación web que permite a los usuarios
        acceder a una serie de productos y servicios que se ofrecen en una
        tienda online.
    </p>
</div>

</body>
</html>
