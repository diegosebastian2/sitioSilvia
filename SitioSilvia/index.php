<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <div class="container-fluid content" id="content">
        <!-- HEADER -->
        <header class="header">
            <div class="container-fluid logocont">
                <div class="logodiv">
                  <div class="logo">
                      <a href="#content">
                          <p class="amaflex">Amaflex</p>
                      </a>
                  </div>
                </div>

                <div class="trayectoria">
                  <p>Con más de 20 años en el mercado ofrecemos soluciones para todas sus inquietudes. Contamos con un abanico amplio de productos, realizados con materiales de primer nivel.</p>
                </div>
                <div class="contacto">
                    <a href="#contacto">
                        <p>Contacto</p>
                    </a>
                </div>
            </div>



        </header><!-- cierra Header -->

        <!--<div class="container-fluid separador"></div>-->
        <div class="container-fluid slider px-0">
          <div class="navcont nav">
            <nav class="navnav">
              <ul class="nav"><!--justify-content-between-->
                <li ><a class="page-link border-0" href="detalle.php?id=mone">Monedas y Billetes</a></li>
                <li ><a class="page-link border-0" href="detalle.php?id=carp">Carpetas</a></li>
                <li ><a class="page-link border-0" href="detalle.php?id=port">Portadocumentos</a></li>
                <li ><a class="page-link border-0" href="detalle.php?id=enva">Envases</a></li>
                <li ><a class="page-link border-0" href="detalle.php?id=prom">Promocionales</a></li>
                <!--<li ><a class="page-link border-0" href="#">Trabajos a Medida</a></li>-->
              </ul>
            </nav>
          </div>
            <div class="callbacks_container">
              <ul class="rslides" id="slider">
                <li>
                  <img src="img/homepromo3.jpg" alt="">
                  <p class="caption">Materiales para publicidad y propaganda</p>
                </li>
                <li>
                  <img src="img/homepromo5.jpg" alt="">
                  <p class="caption">Carpetas, Portadocumentos y más</p>
                </li>
              </ul>
            </div>
        </div>

        <footer class="">
          <div class="container-fluid footer">
            <div class="contacto" id="contacto">
                <h2 class="">Contactanos</h2>
                <p><span class="lnr lnr-map-marker"></span> Maestra Muñoz 1745, Ituzaingó, Buenos Aires</p>
                <p><span class="lnr lnr-envelope"></span> amaflexpvc@hotmail.com</p>
                <p><span class="lnr lnr-smartphone"></span> (011) 11 6177-2759</p>
                <form action="mail.php" method="POST" id="form1">
                  <ul class="form-style-1">
                      <li>
                          <div id="nombre-group" class="form-group">
                            <label>Nombre <span class="required">*</span></label>
                            <input type="text" name="nombre" class="field-long form-control" />
                              <!-- errors will go here -->
                          </div>
                      </li>
                      <li>
                        <div id="nombre-mail" class="form-group">
                          <label>Email <span class="required">*</span></label>
                          <input type="email" name="mail" class="field-long form-control" />
                            <!-- errors will go here -->
                        </div>
                      </li>
                      <li>
                        <div id="telefono-group" class="form-group">
                          <label>Telefono </label>
                          <input type="text" name="telefono" class="field-long form-control" />
                            <!-- errors will go here -->
                        </div>
                      </li>
                      <li>
                          <label>Tu Consulta</label>
                          <textarea name="consulta" id="consulta" class="field-long field-textarea"></textarea>
                      </li>
                      <li>
                          <button type="submit" class="btn btn-light">Enviar <span class="fa fa-arrow-right"></span></button>
                      </li>
                  </ul>
                </form>

            </div>
            <div class="maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.8978313136417!2d-58.708710684224066!3d-34.63202208045223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbfb31ed209db%3A0x98cac265f4c8fe0d!2sMaestra+Mu%C3%B1oz+1745%2C+B1714AGE+Ituzaing%C3%B3%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1530203296732" width=100% height=100% frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

          </div>
          <div class="mark">
            <span>&copy; Amaflex - <time>2018</time></span>
          </div>
        </footer><!-- cierra Header -->

      </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/responsiveslides.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script>
          $(document).ready(function(){

                $("#slider").responsiveSlides({
                  auto: true,
                  pager: false,
                  nav: true,
                  speed: 500,
                  namespace: "callbacks"
                });
                // process the form
                $('#form1').submit(function(event) {

                    $('.form-group').removeClass('has-error'); // remove the error class
                    $('.help-block').remove(); // remove the error text
                    // get the form data
                    // there are many ways to get this data using jQuery (you can use the class or id also)
                    var formData = {
                        'nombre'      : $('input[name=nombre]').val(),
                        'mail'        : $('input[name=mail]').val(),
                        'telefono'    : $('input[name=telefono]').val(),
                        'consulta'    : $('textarea[name=consulta]').val()
                    };

                    // process the form
                    $.ajax({
                        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        url         : 'mail.php', // the url where we want to POST
                        data        : formData, // our data object
                        dataType    : 'json', // what type of data do we expect back from the server
                        encode      : true
                    })
                        // using the done promise callback
                        .done(function(data) {

                            // log data to the console so we can see
                            console.log(data);



                            // here we will handle errors and validation messages
                            if ( ! data.success) {

                                // handle errors for name ---------------
                                if (data.errors.nombre) {
                                    $('#nombre-group').addClass('has-error'); // add the error class to show red input
                                    $('#nombre-group').append('<div class="help-block">' + data.errors.nombre + '</div>'); // add the actual error message under our input
                                }
                                // handle errors for email ---------------
                                if (data.errors.mail) {
                                    $('#mail-group').addClass('has-error'); // add the error class to show red input
                                    $('#mail-group').append('<div class="help-block">' + data.errors.mail + '</div>'); // add the actual error message under our input
                                }
                                // handle errors for email ---------------
                                if (data.errors.telefono) {
                                    $('#telefono-group').addClass('has-error'); // add the error class to show red input
                                    $('#telefono-group').append('<div class="help-block">' + data.errors.telefono + '</div>'); // add the actual error message under our input
                                }                                // handle errors for superhero alias ---------------


                            } else {

                                // ALL GOOD! just show the success message!
                                $('form').append('<div class="alert alert-success response">' + data.message + '</div>');


                            }

                        })
                        .fail(function(data) {
                          // show any errors
                          // best to remove for production
                          console.log(data);
                  });
                    $("#form1")[0].reset();
                    // stop the form from submitting the normal way and refreshing the page
                    event.preventDefault();
                });

            });
            var scroll = new SmoothScroll("a[href*='#']",{

            });
        </script>

    </body>
</html>
