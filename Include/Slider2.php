<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="style.css?<?= date("is")?>">
	<link rel="icon" href="Bild/Icon/MyLogo.ico" type="image/x-icon"> 
    <title>WEBCINCO.COM</title>
</head>
<body>

<div id="Programmingstools">
	<p class="Font11" data-aos="fade-right"data-aos-offset="200"data-aos-easing="ease-in-sine">Programming tools</p>
    <h3 data-aos="fade-right"data-aos-offset="100"data-aos-easing="ease-in-sine">These are some tools, programming languages and databases that I use to build my website.</h3>
	<div class="Box">
		<div class="SliderManual">
			<div class="carousel__container">
				<button aria-label="Anterior" class="carousel__previous">
				<img src="Bild/Icon/Left.png" style="width:40px;height:auto;">
				</button>

				<div class="carousel__list">
					<div class="carousel__element">
						<img src="Bild/Carousel/1.png" style="width:50%;height:auto;">
						<p>HMTL5</p>
					</div>
					<div class="carousel__element">
						<img src="Bild/Carousel/2.png" style="width:50%;height:auto;">
						<p>CSS3</p>
					</div>
					<div class="carousel__element">
						<img src="Bild/Carousel/3.png" style="width:50%;height:auto;">
						<p>JAVASCRIPT</p>
					</div>
					
					<div class="carousel__element">
						<img src="Bild/Carousel/4.png" style="width:50%;height:auto;">
						<p>PHP</p>
					</div>

					<div class="carousel__element">
						<img src="Bild/Carousel/5.png" style="width:50%;height:auto;">
						<p>SQL</p>
					</div>

					<div class="carousel__element">
						<img src="Bild/Carousel/6.png" style="width:50%;height:auto;">
						<p>GIT</p>
					</div>
					<div class="carousel__element">
						<img src="Bild/Carousel/7.png" style="width:50%;height:auto;">
						<p>JAVA</p>
					</div>
				   
				</div>

				<button aria-label="Siguiente" class="carousel__next">
					<img src="Bild/Icon/Right.png" style="width:40px;height:auto;">
				</button>
			</div>

			<div role="tablist" class="carousel__indicadores"></div>
		</div>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="Scripts/Carousel.js"></script>
</body>
</html>