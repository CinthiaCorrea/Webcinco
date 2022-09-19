<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css?<?= date("is")?>">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><!--Library Glider.JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--Library Glider.JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <!--Library Glider.JS -->
  <script src='http://code.jquery.com/jquery-1.10.2.min.js' type='text/javascript'></script><!--Library Jquery -->
  <title>Carousel 1 -Index</title>
</head>
<body>

<div class="containercarousel1">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--Das Attribut [data-ride="carousel"] weist Bootstrap an, sofort beim Laden der Seite mit der Animation des Karussells zu beginnen//El atributo [data-ride = "carousel"]-->
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="intro1">
          <div class="Biography1">

            <p class="Font9">Cinthia Correa</p>
            <p class="Font9">Web Developer</p><br>
            <p>I like to create content for the Web Frontend/Backend.</p>
            <p>With my web design you transport your products and services to your clients</p>
            <p>with the highest aesthetics precision according to a fusion of colors and magic</p>
            <p>are essential when it comes to impressing!</p>
            <p>More about me Check in my profile!<img src="Bild/Icon/Arrow.png" style="width:30px;height:30px;margin-left:10px"> 

          </div>
          <div class="Image">
         
            <img src="Bild/Icon/Woman.jpg" style="width:80%;height:auto;margin-top:-50px;margin-left:20px"></a>
      
          </div>

        </div> 

        <div class="carousel-caption"></div>

      </div>

      <div class="item">
        <div class="intro1">

          <div class="Biography1">

            <p class="Font8">I build </p>
            <p class="Font8">Responsive Desing </p>
            <p class="Font8">for your mobile device</p>
            
          </div>

          <div class="Image">
         
            <img src="Bild/Icon/Laptop.png" style="width:100%;height:auto;margin-top:20px;margin-left:-100px"></a>
            <img src="Bild/Icon/Tablet.png" style="width:40%;height:40%;margin-top:-40px;margin-left:-40px;"></a>
            <img src="Bild/Icon/Computer.png" style="width:100%;height:auto;margin-left:-120px;margin-top:20px"></a>
            
          </div>
         
        </div>
        <div class="carousel-caption"></div>
      </div>

      <div class="item">

        <div class="intro1">
       
          <div class="Biography1">
            <p class="Font9">You can also visit</p>
            <p class="Font9">my photo gallerie!</p>
            <button id="Click" onclick="window.location.href='Galerie.php'">Click me!<img src="Bild/Icon/Click.png" style="width:30px;height:30px;"></button>
              
          </div>
          <div class="Image">
            
            <img src="Bild/Icon/suitcase.png" style="width:70%;height:auto;margin-top:-20px;margin-left:-10px"></a>
            <img src="Bild/Icon/Camara.png" style="width:20%;height:20%;margin-top:200px;margin-left:-170px;"></a>

          </div>
                  
        </div>
       
        <div class="carousel-caption"></div>

      </div>
      <div class="item">
        <div class="intro1">

          <div class="Biography1">

            <p class="Font9">More Info!</p>
            <p class="Font9">write to me a Email..</p>
            <button id="Click" onclick="window.location.href='Contact.php'">Click me!<img src="Bild/Icon/Click.png" style="width:30px;height:30px;"></button>

          </div>

          <div class="Image">
            <img src="Bild/Icon/Contact.png" style="width:80%;height:auto;margin-top:-80px;margin-left:-10px"></a>
          </div>
          
        </div>
        <div class="carousel-caption"></div>
      </div>
      
    </div>
    
  </div>

</div>

  <script src="Scripts/Scrolldown.js"></script>  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({   //a duration object is added to move the Div more slowly
      duration:1000
    });
  </script>

</body>
</html>
