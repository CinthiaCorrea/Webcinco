<?php  

    // PHP SEND MESSAGE 

    $FirstName = trim($_POST["FirstName"]);
    $LastName = trim($_POST["LastName"]);
    $Email = trim($_POST["Email "]);
    $Menssage1  = trim($_POST["Menssage1"]);



    // Datos para el correo
    $destinatario = "cinthiacorrea617@gmail.com";
    $asunto = "Message sent from the web";

    $carta = "From: $FirstName\n"; // la variable carta obentendra todos los valores asignados
    $carta .= "Email: $LastName\n"; //.= concatena los valores
    $carta .= "Email: $Email \n";
    $carta .= "Menssage: $Menssage1";

    // Send Message
    mail($destinatario, $asunto, $carta);
    header('Location: Menssage.php');
   

?>