<!DOCTYPE html>
<html class="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cierto Global</title>
    <meta name="description" content="Cierto Global Org">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" href="styles/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  </head>
  <body>
    <div class="page">
      <div class="barra">
        <div class="container-fluid">
          <div class="row">
            <div class="columna col-sm-1 col-xs-3">
              <div class="menu" id="nav-icon0" onclick="openNav()">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-sm-11 col-xs-9">
              <div class="logo">
                <a href="index2.php"><img class="img-responsive" src="img/logo.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="menu">
        <div id="myNav" class="overlay">
          <!-- Button to close the overlay navigation -->
          <div class="container-fluid">
            <div class="row">
              <div class="columna col-sm-1 col-xs-3">
                <div class="menu" style="background: transparent;">
                  <i class="fa fa-times fa-3x pull-left" onclick="closeNav()" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Overlay content -->
          <div class="overlay-content container-fluid">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <a href="index2.php">Home</a>
          	    <a href="about.php">About</a>
                <a href="services.php">Services</a>
                <a href="team.php">Team</a>
                <a href="contact.php">Contact</a>
                <a href="admin">Access</a>
          			<a href="#">Languages</a>

              </div>
            </div>

          </div>

        </div>
      </div>










      <section class="seccion contacto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 fondo">
              <div class="row" style="position: absolute; bottom: 50vh; width: 100%;">
                <div class="col-sm-4 col-sm-offset-4 col-xs-6 colxs-offset-3">
                  <img src="images/ciertocontacto.png" class="img-responsive" alt="" style="width: 100%">
                </div>
              </div>
              <div class="row">

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="sep-bottom-2x contactform" style="background: #f5f5f5;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 sep-top-2x">
              <div >
                <h3 class=" wow bounceInLeft">CONTACT</h3>
                <p>&nbsp;</p><p>&nbsp;</p>
                <h4 class=" wow bounceInLeft">CIERTO GLOBAL</h4>
                <p class="sep-top-xs wow bounceInLeft">
                  For questions, please send us a message and we will get back to you promptly.
                </p>

              </div>
            </div>
            <div class="col-md-offset-1 col-md-8 sep-top-2x wow bounceInRight">

              <div class="contact-form">
                <div id="successMessage" style="display:none" class="alert alert-success text-center">
                  <p><i class="fa fa-check-circle fa-2x"></i></p>
                  <p>Gracias por enviar tu mensaje, en breve nos pondremos en contacto.</p>
                </div>
                <div id="failureMessage" style="display:none" class="alert alert-danger text-center">
                  <p><i class="fa fa-times-circle fa-2x"></i></p>
                  <p>Hubo un problema enviando tu mensaje. Por favor, prueba de nuevo.</p>
                </div>
                <div id="incompleteMessage" style="display:none" class="alert alert-warning text-center">
                  <p><i class="fa fa-exclamation-triangle fa-2x"></i></p>
                  <p>Porfavor llena los campos antes de enviar.</p>
                </div>
                <form id="contactForm" action="php/contact.php" method="post" class="form-gray-fields validate">
                  <div class="row">
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="name" class="upper">Name (s)</label>
                        <input id="name" type="text" name="senderName" class="form-control input-lg required">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="phone" class="upper">Last name (s)</label>
                        <input id="company" type="text" name="senderLastName" class="form-control input-lg required">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="email" class="upper">E-mail</label>
                        <input id="email" type="email" placeholder="yourmail@example.com" name="senderEmail" class="form-control input-lg required email">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="phone" class="upper">Telephone</label>
                        <input id="phone" type="text" name="phone" class="form-control input-lg required">
                      </div>
                    </div>
                  </div>
                  <div class="row">


                  </div>
                  <div class="row">
                    <div class="col-md-12 sep-top-xs">
                      <div class="form-group">
                        <label for="comment" class="upper">Message</label>
                        <textarea id="comment" placeholder="Write here" rows="9" name="comment" class="form-control input-lg required"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 sep-top-xs">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>&nbsp;Send</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7378916.876547211!2d-103.23506159373775!3d25.438706305299323!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1504099626544" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>


      <section class="seccion footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Menu</h3>
              <br>
              <p>
                <a href="index2.php">CIERTO</a><br>
                <a href="about.php">About</a><br>
                <a href="services.php">Service</a><br>
                <a href="team.php">Team</a><br>
                <a href="contact.php">Contact us</a><br>
                <a href="admin">Access</a><br>
                <a href="#">Lenguages</a>
              </p>
            </div>
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Sections</h3>
              <br>
              <p>
                <a href="#">What makes us different</a><br>
                <a href="#">Your partners in successfully recruiting a quality workforce</a><br>
                <a href="#">What search CIERTO?</a><br>
                <a href="#">Know the program H2A</a><br>
                <a href="#">Our Training</a><br>
              </p>
            </div>
            <div class="col-sm-offset-6 col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Data</h3>
              <br>
              <p>
                <a href="#">info@ciertoglobal.org</a><br>
                <a href="#">P.O. Box 8337.  </a><br>
                <a href="#">Tacoma, WA 98419</a><br>
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a><br>
              </p>
            </div>
          </div>
        </div>
      </section>


    </div>









    <script src="scripts/vendor/wow.min.js"></script>
    <script src="scripts/vendor/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
