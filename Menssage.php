<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css?<?= date("is")?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <link rel="icon" href="Bild/Icon/MyLogo.ico" type="image/x-icon"> 
    <script src="Scripts/jquery-3.2.1.js"></script>
    <script src="Scripts/script.js"></script>
    <title>Contact</title>
</head>
<body>
    <?php
            
        require_once "Include/Header.php";
                        
    ?>

    <div class="Back"><a href="MyWebsite.php"><p>&#128072;Go back</p></a></div>
    <section class="form_wrap">
        
        <section class="menssage-successfully">
            <h1>YOUR MESSAGE WAS SENT SUCCESSFULLY</h1>
            <button id="Click" onclick="window.location.href='Contact.php'">Send new message</a>
        </section>

    </section>

</body>
</html>