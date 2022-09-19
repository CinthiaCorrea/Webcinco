<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css?<?= date("is")?>">
    <link rel="icon" href="Bild/Icon/MyLogo.ico" type="image/x-icon"> 
    <title>Gallerie</title>
</head>
<body>

    <?php
            
        require_once "Include/Header.php";
                    
    ?>

    <div class="ful-img" id="fulImgBox">
        <img src="Bild/MeinFotos/1.jpg" id="fulimg">
        <span onclick="closeImg()">x</span>
    </div>
    <br>
    <div class="Back"><a href="MyWebsite.php"><p>&#128072;Go back</p></a></div>
    <p class="Font3"  data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">My gallery</p> <br>
    <hr class="line2"></hr>

    <div class="img-gallery">
        <img src="Bild/MyPhotos/1.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/2.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/3.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/4.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/5.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/6.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/7.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/8.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
        <img src="Bild/MyPhotos/9.jpg" onclick="openFulImg(this.src)" style="width:400px;height:350px;margin-right:50px;margin-top: 50px;">
    </div>
    
    <script src="Scripts/Gallerie.js"></script>

    <div class="Phrase">
        <p class="Font5">"LOOK DEEP INTO NATURE AND YOU'LL UNDERSTAND EVERYTHING BETTER." </p>
        <p class="Font5">-ALBERT EINSTEIN</p>
    </div>

    <div id="Button-up">
        <i class="fa-solid fa-circle-up"></i>
    </div>
    <script src="Scripts/Scrollup.js"></script>  

    <?php
    
        require_once "Include/Footer.php";
           
    ?>

</body>
</html>