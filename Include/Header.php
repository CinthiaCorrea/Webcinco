
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximo-scale=1.0, minimu-scale=1.0">
    <title>MyWebsite</title>
	<link href="Style.css?<?= date("is") ?>" rel="stylesheet">  
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
	
</head>
<body>

<header>
    <nav id="Menu">
        <nav class="MenuBarLogo" data-aos="fade-down-left" data-aos-offset="400" data-aos-easing="ease-in-out">
            <a href="MyWebsite.php"><img src="Bild/Icon/Logo.png" style="width:120%;height:auto;margin-top:-20px;"></a>
        </nav>

        <ul class="oe_menu">
           
            <nav class="MenuBar" data-aos="fade-down-left" data-aos-offset="400" data-aos-easing="ease-in-out"><li><a href="MyWebsite.php"><img src="Bild/Icon/Home.png" style="width:15%;height:auto;margin-top:-5px;margin-left:0px;">HOME</a></li></nav>
            <nav class="MenuBar" data-aos="fade-down-left" data-aos-offset="300"data-aos-easing="ease-in-sine"><li><a href="Galerie.php"><img src="Bild/Icon/Gallery.png" style="width:15%;height:auto;margin-top:-5px;margin-left:0px;">GALLERY</a></li></nav>
            <nav class="MenuBar" data-aos="fade-down-left" data-aos-offset="300"data-aos-easing="ease-in-sine"><li><a href="Contact.php"><img src="Bild/Icon/Email.png" style="width:15%;height:auto;margin-top:-5px;margin-left:0px;">CONTACT</a></li></nav>
            <nav class="MenuBar" data-aos="fade-down-left" data-aos-offset="300"data-aos-easing="ease-in-sine"><li><a href="PDF/Resume.pdf"><img src="Bild/Icon/Resume.png" style="width:15%;height:auto;margin-top:-5px;margin-left:0px;">RESUME</a></li></nav>

        </ul>	
        
    </nav>
       

</header>



		