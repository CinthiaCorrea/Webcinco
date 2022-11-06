<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="Style.css?<?= date("is") ?>" rel="stylesheet">
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

    <div id="FormularContainer">
        <div class="Formulario1">
            <div class="MyLogo"><img src="Bild/MyLogo.png" style="width:80%;height:auto;margin-left:220px;margin-top:0px;" data-aos="flip-left"></div>
            <div class="Infos">
                <h5>Contact information <img src="Bild/Icon/Sent.png" style="width:50px;height:50px;"></h5><br><br> 
                <h4><img src="Bild/Icon/chat.png" style="width:25px;height:25px;">&nbsp;0660 9893661</h4><br><br> 
                <h4><img src="Bild/Icon/Adresse.png" style="width:25px;height:25px;">&nbsp;Peggau - Austria</h4><br>
            
            </div>
            
        </div>

        <div class="Formulario2">
            <p class="Font13">Write me a message</p><br>
            <h3>I am pleased if you contact me. All question are of course free!</h3> 
            <form method="POST" action="Sent.php"  class="formulario" id="formulario">
                <div class="formulario__grupo" id="grupo__FirstName">
    
                    <div class="formulario__grupo-input">
                        
                        <input type="text" class="formulario__input" name="FirstName" id="FirstName" placeholder="Enter your Full Name" required >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        
                    </div>
                    <p class="formulario__input-error">Error enter your name</p>
                </div> <br>

                <div class="formulario__grupo" id="grupo__Email">
                    <div class="formulario__grupo-input">
                        
                        <input type="text" class="formulario__input" name="Email" id="Email" placeholder="Enter your Email" required >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        
                    </div>
                    <p class="formulario__input-error">Error enter your valid email</p>
                </div> 

                <div class="formulario__grupo" id="grupo__Menssage1">
                 
                    <div class="formulario__grupo-input">
                        
                        <textarea id="Menssage1" name="Menssage1"  placeholder="Enter your Menssage"required></textarea>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        
                    </div>
                   
                </div> 
                
                <div class="formulario__grupo formulario__grupo-btn-enviar">
				    <button type="submit" class="formulario__btn" value="SENT!" >Send!</button>
				    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			    </div>
             
            </form>
        </div>
    </div>

    <script src="Scripts/Formular.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    
    <?php
    
        require_once "Include/Footer.php";
           
    ?>

    <script src="Scripts/Scrollup.js"></script>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({   //a duration object is added to move the Div more slowly
            duration:1000
        });
    </script>
</body>

</body>
</html>