<?php

header('Access-Control-Allow-Headers: x-requested-with');
header('Access-Control-Allow-Origin: *');

// Define some constants
define( "RECIPIENT_NAME", "Cierto Global" );
define( "RECIPIENT_EMAIL", "info@ciertoglobal.org" );
define( "EMAIL_SUBJECT", "Gracias por contactarnos" );

// Read the form values
$success      = false;
//$xhr          = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
$xhr          = isset( $_POST['ajax'] )
              ? true
              : false;
$senderName   = isset( $_POST['senderName'] )
              ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", '', $_POST['senderName'] )
              : '';
$senderLastName   = isset( $_POST['senderLastName'] )
              ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", '', $_POST['senderLastName'] )
              : '';
$senderEmail  = isset( $_POST['senderEmail'] )
              ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", '', $_POST['senderEmail'] )
              : '';
$phone      = isset( $_POST['phone'] )
              ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", '', $_POST['phone'] )
              : '';
$comment      = isset( $_POST['comment'] )
              ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", '', $_POST['comment'] )
              : '';

// If all values exist, send the email
if ( $senderName && $senderEmail && $comment ) :
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName ." ".$senderLastName. " <" . $senderEmail . ">";
  try {
    mail( $recipient, "Contacto Cierto Global", "Telefono: ".$phone."\nMensaje:".$comment, $headers );
    $success = 'success';
  } catch (Exception $e) {
    $success = $e->getMessage();
  }
else:
  $success = 'error: incomplete data';
endif;

// Return an appropriate response to the browser
if ( $xhr ) : // AJAX Request
  echo $success;

else : // HTTP Request ?>
<!doctype html>
<html>
  <head>
    <title>Gracias!</title>
  </head>
  <body>
    <p>
    <?php
      if ( $success == 'success') :
        echo "<p>Gracias por contactarnos! En breve nos pondremos en contacto contigo.</p>";
      else :
        echo "<p>Hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente.</p>";
      endif;
    ?>
    </p>
    <p>Vuelve para regresar a la página de inicio.</p>
  </body>
</html>
<?php endif; ?>
