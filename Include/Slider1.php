<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="Style.css?<?= date("is") ?>" rel="stylesheet">
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
          
            <p class="Font9" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">Hi! I Cinthia Correa</p>
            <h1 data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">Web Developer<div class="WomanIcon" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine"><img src="Bild/Icon/woman.jpg" style="width:100%;height:auto;"></div><div class="circle"><img src="Bild/Icon/idea.png" style="width:100%;height:auto;"></div></h1>
            <p class="Font4" data-aos="fade-right">I like to create content for the Web Frontend/Backend.</p>
            <p class="Font4" data-aos="fade-right">With my web design you transport your products and services to your clients</p>
            <p class="Font4" data-aos="fade-right">with the highest aesthetics precision according to a fusion of colors and magic</p>
            <p class="Font4" data-aos="fade-right">are essential when it comes to impressing!</p>
            <p class="Font4" data-aos="fade-right">More about me Check in my profile!</p>

          </div>
        </div> 

        <div class="carousel-caption"></div>

      </div>

      <div class="item">
        <div class="intro1">

          <div class="Biography1">

            <p class="Font8" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">I build </p>
            <h1 data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">Responsive Desing </h1><br>
            <p class="Font4" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">"Responsive" web design is a set of techniques that allow a certain HTML to adapt automatically and flexibly to the screen size of a PC, or to your mobile device.</p>
            <p class="Font4" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">The aspect ratio and resolution of the device screen with the that is being displayed.</p>
       
          </div>
        </div>

        <div class="carousel-caption"></div>

      </div>

      <div class="item">

        <div class="intro1">
       
          <div class="Biography1">
            <p class="Font8" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">You can also..</p>
            <h1 data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">Visit my photo gallerie!</h1>
            <p class="Font4" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">In my photo gallery you can see my personal photos that have</p>  
            <p class="Font4"data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine"> a fascinating animation that I have built with pure javascriot code.</p>
            <button id="Click" onclick="window.location.href='Galerie.php'">Click me!<img src="Bild/Icon/Click.png" style="width:30%;height:auto;"></button>
              
          </div>
             
        </div>
       
        <div class="carousel-caption"></div>

      </div>
      <div class="item">
        <div class="intro1">

          <div class="Biography1">

            <p class="Font8" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">More Info!</p>
            <h1 data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">write to me a Email..</h1>
            <p class="Font4" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">If you need more information you can write me a message and I will gladly answer all your questions. Consultations are totally free.</p>
            <button id="Click" onclick="window.location.href='Contact.php'">Click me!<img src="Bild/Icon/Click.png" style="width:30%;height:auto;"></button>

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
