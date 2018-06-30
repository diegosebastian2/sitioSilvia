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
        $to = "amaflexpvc@hotmail.com";
        $subject = 'Nombre: '.$_POST['nombre'];
        $msj = $_POST['consulta'];

        $msj .= "\r\n"."Telefono = ".$_POST['telefono'];
        $msj .= "\r\n"."Email = ".$_POST['mail'];

        //send email
        mail($to, $subject, $msj);
        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Gracias por consultarnos. En breve nos pondremos en contacto con ud.';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
