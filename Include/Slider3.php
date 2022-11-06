<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel 3 -Index</title>
	<link href="Style.css?<?= date("is") ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	
</head>
<body>

	<div class="ContainerSlider3">

  		<div class="containercarousel3">
    
			<div class="carousel__contenedor">
			
				<div class="carousel__lista">
				
					<div class="carousel__elemento">
						
					    <img src="Bild/Sprichwort/1.jpg" style="width:500px;height:350px;cursor:pointer;"> 
					</div>

				

          			<div class="carousel__elemento">

						<img src="Bild/Sprichwort/2.jpg" style="width:500px;height:350px;cursor:pointer;">
						
					</div>

					<div class="carousel__elemento">
						
            			<img src="Bild/Sprichwort/3.jpg" style="width:500px;height:350px;cursor:pointer;">
						
					</div>

          			<div class="carousel__elemento">

						<img src="Bild/Sprichwort/4.jpg" style="width:500px;height:350px;cursor:pointer;">

					</div>
                   
					<div class="carousel__elemento">
						
            			<img src="Bild/Sprichwort/5.jpg" style="width:500px;height:350px;cursor:pointer;"></a>
						
					</div>
					
    				<div class="carousel__elemento">
						
            			<img src="Bild/Sprichwort/6.jpg" style="width:500px;height:350px;cursor:pointer;">
						
					</div>

				</div>

			</div>
		
		</div>

		<div role="tablist" class="carousel__indicadores"></div>
			
			<div id="botones">

				<button aria-label="Anterior" class="carousel__anterior">
					<i class="fas fa-chevron-left"></i>
				</button>

				<button  aria-label="Siguiente" class="carousel__siguiente">
					<i class="fas fa-chevron-right"></i>
				</button>

			</div>
		
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="Scripts/Slider.js"></script>


</body>
</html>