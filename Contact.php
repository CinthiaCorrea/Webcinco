<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div id="FormularContainer">

        <div class="Formulario1">
            <div class="MyLogo"><img src="Bild/MyLogo.png" style="width:200px;height:200px;margin-left:220px;margin-top:5px;" data-aos="flip-left"></div>
            <div class="Infos">
                <h4>Contact information <img src="Bild/Icon/Sent.png" style="width:50px;height:50px;"></h4><br><br> 
                <h3><img src="Bild/Icon/chat.png" style="width:25px;height:25px;">&nbsp;0660 9893661</h3><br><br> 
                <h3><img src="Bild/Icon/Adresse.png" style="width:25px;height:25px;">&nbsp;Peggau - Austria</h3><br>
            
            </div>
            
        </div>
       
        <div class="Formulario2"> <br> 
        <h4>Write me a message</h4><br>
        <h3>I am pleased if you contact me. All question are of course free!</h3>
            <form method="POST" action="Sent.php"  class="formulario" id="formulario">

                <div class="formulario__grupo" id="grupo__FirstName">
                    <label for="FirstName" class="formulario__label">* Full Name</label>
                    <div class="formulario__grupo-input">
                        
                        <input type="text" class="formulario__input" name="FirstName" id="FirstName" placeholder="Full Name" required >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        
                    </div>
                    <p class="formulario__input-error">Error invalid digit enter your name</p>
                </div> <br>

                <div class="formulario__grupo" id="grupo__Email">
                    <label for="Email" class="formulario__label">*Email</label>
                    <div class="formulario__grupo-input">
                        
                        <input type="text" class="formulario__input" name="Email" id="Email" placeholder="Email" required >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        
                    </div>
                    <p class="formulario__input-error">Error invalid digit enter your email</p>
                </div> 
                <br><br>
                <div class="formulario__grupo" id="grupo__Menssage1">
                    <label for="Menssage1" class="formulario__label">*Message</label> 

                    <div class="formulario__grupo-input">
                        
                        <textarea id="Menssage1" name="Menssage1" required></textarea>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        
                    </div>
                    <p class="formulario__input-error">Error</p>
                </div> 

                <div class="formulario__grupo formulario__grupo-btn-enviar">
				    <button type="submit" class="formulario__btn" value="SENT!" >Send!<img src="Bild/Icon/Letter2.png" style="width:40px;height:30px;margin-top:-5px"></button>
				    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			    </div>
             
            </form>
        </div>

      
    </div>

    <br> <br> <br> <br>

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