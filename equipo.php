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
            <div class="columna col-sm-1 col-md-1 col-xs-3 visible-xs visible-sm">
              <div class="menu" id="nav-icon0" onclick="openNav()">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-sm-2 col-xs-9 col-md-2">
              <div class="cuadrito pull-left hidden-xs hidden-sm">
                &nbsp;
              </div>
              <div class="logo">
                <a href="cierto.php"><img class="img-responsive" src="img/logo.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-10">
                <nav class="circle hidden-sm hidden-xs text-right">
                  <ul>
                    <li><a href="cierto.php">Inicio</a></li>
                    <li><a href="acercade.php">Nosotros</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="entrenamiento.php">Entrenamiento</a></li>
                    <li><a href="equipo.php">Equipo</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="admin">Accesso</a></li>
                    <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Idiomas <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="equipo.php">Español</a></li>
                        <li><a href="team.php">Inglés</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
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
                <a href="cierto.php">Inicio</a>
          	    <a href="acercade.php">Nosotros</a>
                <a href="servicios.php">Servicios</a>
                <a href="entrenamiento.php">Entrenamiento</a>
                <a href="equipo.php">Equipo</a>
                <a href="contacto.php">Contacto</a>
                <a href="admin">Accesso</a>
                <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Idiomas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="equipo.php">Español</a></li>
                    <li><a href="team.php">Inglés</a></li>
                  </ul>
                </li>

              </div>
            </div>

          </div>

        </div>
      </div>










      <section class="seccion team">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 fondo">
              <div class="row" style="position: absolute; bottom: 50vh; width: 100%;">

              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="sep-bottom-2x ourteam" style="background: #f5f5f5;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-7 sep-top-2x">
              <div >
                <h3 class=" wow bounceInLeft">NUESTRO EQUIPO DE TRABAJO</h3>
                <p>&nbsp;</p><p>&nbsp;</p>

                <p class="sep-top-xs wow bounceInLeft">
                  Establecemos un contacto profesional y respetuoso con todas las personas con las que trabajamos. Realizamos nuestra labor de forma ética, buscamos obtener resultados positivos en cada actividad, priorizamos el profesionalismo y establecemos alianzas a través de la confianza con el resultado de los servicios que brindamos.
                </p>
                <p>&nbsp;</p><p>&nbsp;</p>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-6 wow bounceInRight" data-toggle="modal" data-target="#modalteam1">
              <h4 id="team1">Equipo CIERTO</h4>
              <img src="images/A02_B01_JOE.jpg" class="img-responsive" alt="" style="width:100%;" onmouseover="this.src='images/A02_B02_JOE.jpg'; team1.style.display='none'" onmouseout="this.src='images/A02_B01_JOE.jpg'; team1.style.display='block'">
            </div>
<p class="visible-xs">&nbsp;</p>
<div class="col-sm-6 wow bounceInLeft" data-toggle="modal" data-target="#modalteam4">
              <h4 id="team4">Equipo CIERTO</h4>
              <img src="images/D02_B01_NORMA.jpg" class="img-responsive" alt="" style="width:100%;" onmouseover="this.src='images/D02_B02_NORMA.jpg'; team4.style.display='none'" onmouseout="this.src='images/D02_B01_NORMA.jpg'; team4.style.display='block'">
            </div>

          </div>
          <p>&nbsp;</p>
          <div class="row">
            <div class="col-sm-6 wow bounceInRight" data-toggle="modal" data-target="#modalteam3">
              <h4 id="team3">Equipo CIERTO</h4>
              <img src="images/C02_B01_AXEL.jpg" class="img-responsive" alt="" style="width:100%;" onmouseover="this.src='images/C02_B02_AXEL.jpg'; team3.style.display='none'" onmouseout="this.src='images/C02_B01_AXEL.jpg'; team3.style.display='block'">
            </div>
<p class="visible-xs">&nbsp;</p>
            <div class="col-sm-6 wow bounceInLeft" data-toggle="modal" data-target="#modalteam2">
              <h4 id="team2">Equipo CIERTO</h4>
              <img src="images/B02_B01_CESAR.jpg" class="img-responsive" alt="" style="width:100%;" onmouseover="this.src='images/B02_B02_CESAR.jpg'; team2.style.display='none'" onmouseout="this.src='images/B02_B01_CESAR.jpg'; team2.style.display='block'">
            </div>


          </div>
        </div>
      </section>

      <section class="seccion contacto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 fondo">
              <div class="row imgcierto">
                <div class="col-sm-4 col-sm-offset-4 col-xs-12 ">
                  <img src="images/ciertocontacto.png" class="img-responsive" alt="" style="width: 100%">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 cuadroblanco col-md-offset-6 wow bounceInRight">
                  <span class="linea"></span>
                  <h3>CONTÁCTANOS</h3>
                  <p>&nbsp;</p>
                  <p>Si tienes alguna pregunta envíanos un mensaje y nosotros nos pondremos en contacto contigo.</p>
                  <p>&nbsp;</p>
                  <a href="contacto.php" class="btn btn-primary btn-lg pull-right">Saber más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="seccion footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Menú</h3>
              <br>
              <p>
                <a href="cierto.php">CIERTO</a><br>
                <a href="acercade.php">Nosotros</a><br>
                <a href="servicios.php">Servicios</a><br>
                <a href="entrenamiento.php">Entrenamiento</a><br>
                <a href="equipo.php">Equipo</a><br>
                <a href="contacto.php">Contacto</a><br>
                <a href="admin">Acceso</a><br>
                <a href="privacidad.php">Aviso de privacidad</a>
              </p>
            </div>
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Secciones</h3>
              <br>
              <p>
                <a href="acercade.php#wmud">¿Qué nos hace diferentes?</a><br>
                <a href="acercade.php#yp">CIERTO es tu socio y tu mejor aliado</a><br>
                <a href="acercade.php#wsc">¿Qué busca CIERTO?</a><br>
                <a href="servicios.php#ktph2a">Conoce el programa H2A</a><br>
                <a href="entrenamiento.php">Programa de entrenamiento</a><br>
              </p>
            </div>
            <div class="col-sm-offset-4 col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Datos</h3>
              <br>
              <p>
                <a href="#"> Av. Coyoacán 1622. Edificio 4. Piso 2. Interior A. Colonia del Valle. Delegación Benito Juárez. CDMX, México. C.P. 03100.</a><br>
                <a href="#">Tel: (55) 47744880.</a><br>
              </p>
            </div>
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>&nbsp;</h3>
              <br>
              <p>

                <a href="#">P.O. Box 8157  </a><br>
                <a href="#">Tacoma, WA 98419</a><br>
                <a href="mailto:info@ciertoglobal.org">info@ciertoglobal.org</a><br>
                <a href="https://www.facebook.com/ciertoglobal/" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="mailto:info@ciertoglobal.org" target="_blank"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a><br>
              </p>
            </div>
          </div>
        </div>
      </section>


    </div>



    <div class="modal fade modalteams" id="modalteam1" tabindex="-1" role="dialog" aria-labelledby="team1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <i class="fa fa-times fa-3x pull-right" data-dismiss="modal" aria-hidden="true"></i>
            <section class="team1">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 fondo">
                    <div class="row">
                      <img src="images/04_MODULO_JOE.jpg" class="img-responsive visible-xs">
                      <div class="col-md-6 cuadroblanco col-md-offset-6">
                        <span class="linea"></span>
                        <h3>JOE MARTÍNEZ</h3>
                        <h4>Director Ejecutivo</h4>
                        <p>&nbsp;</p>
                        <p>Joe is a national and international expert on agricultural labor recruitment and compliance with H-2A federal standards. As executive director, his role is to establish and oversee transparent labor recruitment processes in Mexico to staff farms across the United States. A major aspect of Joe’s work is to establish a relationship with every grower that CIERTO does business with to ensure a thorough understanding of their labor supply needs, and to troubleshoot any issues that may arise.  His goal is to ensure that they have a quality, year-round workforce.</p>
                        <p>&nbsp;</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade " id="modalteam11" tabindex="-1" role="dialog" aria-labelledby="team1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <i class="fa fa-times fa-3x pull-right" data-dismiss="modal" aria-hidden="true"></i>

                      <img src="images/04_MODULO_JOE.jpg" class="img-responsive visible-xs">
                      <div >
                        <span class="linea"></span>
                        <h3>JOE MARTINEZ</h3>
                        <h4>Executive Director</h4>
                        <p>&nbsp;</p>
                        <p>Joe is a national and international expert on agricultural labor recruitment and compliance with H-2A federal standards. As executive director, his role is to establish and oversee transparent labor recruitment processes in Mexico to staff farms across the United States. A major aspect of Joe’s work is to establish a relationship with every grower that CIERTO does business with to ensure a thorough understanding of their labor supply needs, and to troubleshoot any issues that may arise.  His goal is to ensure that they have a quality, year-round workforce.</p>
                        <p>&nbsp;</p>

                      </div>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade modalteams" id="modalteam2" tabindex="-1" role="dialog" aria-labelledby="team2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <i class="fa fa-times fa-3x pull-right" data-dismiss="modal" aria-hidden="true"></i>
            <section class="team2">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 fondo">
                    <div class="row">
                      <img src="images/04_MODULO_CESAR.jpg" class="img-responsive visible-xs">
                      <div class="col-md-6 cuadroblanco">
                        <span class="linea"></span>
                        <h3>CÉSAR ÁLVAREZ</h3>
                        <h4>Director de Reclutamiento y Entrenamiento</h4>
                        <p>&nbsp;</p>
                        <p>Cesar Alvarez has worked for over 20 years in rural communities with immigrant agricultural workers within Mexico, as well as with workers immigrating to the USA and Canada. One of his job responsibilities is to prevent fraud US work visas process for temporary workers in agriculture, or H2A.</p>
                        <p>With CIERTO Cesar oversees our recruitment from communities of origin in Mexico. Cesar forms working groups among the agricultural workers who then go to the US using the H2A visa. Additionally Cesar provides training in as well as in personal growth to the agricultural workers to help them develop the necessary skills and abilities that allow for a positive work experience.</p>
                        <p>Cesar Alvarez was born in San Luis Potosi, Mexico where he currently resides with his family. He has a Bachelor’s degree in Economics from the Universidad Autonoma de San Luis.</p>
                        <p>&nbsp;</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade modalteams" id="modalteam3" tabindex="-1" role="dialog" aria-labelledby="team3">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <i class="fa fa-times fa-3x pull-right" data-dismiss="modal" aria-hidden="true"></i>
            <section class="team3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 fondo">
                    <div class="row">
<img src="images/04_MODULO_AXEL.jpg" class="img-responsive visible-xs">
                      <div class="col-md-6 cuadroblanco col-md-offset-6">

                        <span class="linea"></span>
                        <h3>AXEL GARCÍA</h3>
                        <h4>Director Ejecutivo en México</h4>
                        <p>&nbsp;</p>
                        <p>Axel García has over twenty years’ experience working with migrants, refugees and human rights. He has worked for the Ministry of Interior, civil society and the Mexican Catholic Bishops; held an internship with the United Nation High Commissioner for Refugee´s Office for Mexico, Central America and Cuba, and has with the European Union and other international agencies directing social and human rights programs. Axel brings an enormous network of both national and international organizations throughout Mexico and Latin America as well as the US and Europe who help CIERTO connect with our recruitment verification partners.</p>
                        <p>Axel holds a law degree from the Universidad Marista and studied different courses of human rights, migration and governance. He has written many texts on migration and human rights and has taught dozens of courses on migration, human rights and protection of human rights defenders in Mexico, Central America and Europe.</p>
                        <p>&nbsp;</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade modalteams" id="modalteam4" tabindex="-1" role="dialog" aria-labelledby="team4">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <i class="fa fa-times fa-3x pull-right" data-dismiss="modal" aria-hidden="true"></i>
            <section class="team4">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 fondo">
                    <div class="row">
                      <img src="images/04_MODULO_NORMA.jpg" class="img-responsive visible-xs">
                      <div class="col-md-6 cuadroblanco">
                        <span class="linea"></span>
                        <h3>NORMA ENCINAS</h3>
                        <h4>Directora del Programa H2A</h4>
                        <p>&nbsp;</p>
                        <p>Norma Encinas has been working progressively in the H2A program for over 9 years, successfully processing and delivering more than 8,000 H2A workers to Arizona and California. Norma’s original contact with the program was while working in the state of Arizona as a Migrant Seasonal outreach worker, where she provided services to the agricultural community. She then relocated and began working as an H2A visa consultant with various growers as well as farm labor contractors.</p>
                        <p>&nbsp;</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
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
