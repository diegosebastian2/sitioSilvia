<?php


$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['nombre']))
        $errors['nombre'] = 'Nombre es requerido.';

    if (empty($_POST['mail']))
        $errors['mail'] = 'Email es requerido.';

    if (empty($_POST['consulta']))
            $errors['consulta'] = 'Ingresar una consulta.';


// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {

        // if there are no errors process our form, then return a message
        //Email information

        $req_email = strip_tags($_POST['mail']);
        $nombre = strip_tags($_POST['nombre']);
        $consulta = strip_tags($_POST['consulta']);
        $telefono = is_null($_POST['telefono']) ? 'Sin telefono': strip_tags($_POST['telefono']);


        $to = "amaflexpvc@hotmail.com";
  //      $to = "diegosebastian2@gmail.com";
        $subject = 'Consulta pagina amaflex de: '. $nombre;
        $msj = "<p>".$consulta."</p>"."\r\n";
        $msj .= "<table>";
        $msj .= "<tr><td>Telefono</td><td>".$telefono."</td></tr>";
        $msj .= "<tr><td>Email</td><td>".$req_email."</td></tr>";
        $msj .= "<tr><td>Nombre</td><td>".$nombre."</td></tr>";
        $msj .= "</table>";

        $headers = "From: " . $req_email . "\r\n";
        $headers .= "Reply-To: ". $req_email . "\r\n";
        //$headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";




        //send email
        mail($to, $subject, $msj, $headers);
        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Gracias por consultarnos. En breve nos pondremos en contacto con ud.';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
