<?php
header('Content-type: application/json');

if($_POST)
{
    $to_email       = "marisa@sostenmutuo.com.ar";//Recipient email, Replace with own email here
   
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
       
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }

    //Sanitize input data using PHP filter_var().
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone_number   = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $message        = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

    //additional php validation
    if(strlen($user_name)<2){ // If length is less than 4 it will output JSON error.
        $output = json_encode(array('type'=>'error', 'text' => 'El nombre es muy corto o quedo el espacio vacio'));
        die($output);
    }

    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
        $output = json_encode(array('type'=>'error', 'text' => 'Por favor escribir un email valido'));
        die($output);
    }


    if(!filter_var($phone_number, FILTER_SANITIZE_NUMBER_FLOAT)){ //check for valid numbers in phone number field
        $output = json_encode(array('type'=>'error', 'text' => 'Por favor escribir solo numeros sin guiones ni espacios'));
        die($output);
    }

    if(strlen($message)<3){ //check emtpy message
        $output = json_encode(array('type'=>'error', 'text' => 'Por favor escribinos tu consulta'));
        die($output);
    }

    //email subject
    $subject ='Consulta por Puertas';

    //email body
    $message_body = $message."\r\n\r\n-".$user_name."\r\n\r\nEmail : ".$user_email."\r\nPhone Number : ". $phone_number ;
   
    //proceed with PHP email.
    $headers = 'From: '.$user_name.'<'.$user_email.'>'."\r\n" .
    'Reply-To: '.$user_name.'<'.$user_email.'>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
   
    $send_mail = mail($to_email, $subject, $message_body, $headers);
   
    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'success', 'text' => 'Hola '.$user_name .', gracias por tu consulta, nos comunicaremos a la brevedad.'));
        die($output);
    }
}


?>
