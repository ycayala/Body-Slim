<!DOCTYPE html>
<html lang="es">
<head>
	<!--Barra de navegacion-->
	<?php include('head.php');?>
	<style type="text/css">
		.well{
			background-color: rgba(0,0,0,.9);
			border-color: transparent;
			color: #FFFFFF;
			text-align: justify;
			font-size: 14px;
		}
	</style>
	<!--Fin-->
</head>
<body>
	<!--Barra de navegacion-->
	<?php include('nav.php');?>
 <header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="category-filter hidden-xs hidden-sm">
						
						<div class="list-group">
							<a href="#" class="list-group-item active">Spa de uñas</a>
							<div class="thumbnail">
								<img src="img/unas/una-index.jpg"></div>
							<a href="#" class="list-group-item active">Estética</a>
							<div class="thumbnail">
								<img src="img/estetica/estetica-index.jpg"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
							<li data-target="#myCarousel" data-slide-to="6"></li>
							<li data-target="#myCarousel" data-slide-to="7"></li>
							<li data-target="#myCarousel" data-slide-to="8"></li>
							<li data-target="#myCarousel" data-slide-to="9"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox" >
							<div class="item active">
								<img src="img/1.jpg" alt="Flower" width="100%" height="600px" >
							</div>

							<div class="item">
								<img src="img/2.jpg" alt="Flower" width="100%" height="600px">
							</div>

							<div class="item">
								<img src="img/3.jpg" alt="Flower" width="100%" height="600px">
							</div>
							<div class="item">
								<img src="img/4.jpg" alt="Flower" width="100%" height="600px">
							</div>
							<div class="item">
								<img src="img/5.jpg" alt="Flower" width="100%" height="600px">
							</div>
							<div class="item">
								<img src="img/6.jpg" alt="Flower" width="100%" height="600px">
							</div>
							<div class="item">
								<img src="img/7.jpg" alt="Flower" width="100%" height="600px">
							</div>
							<div class="item">
								<img src="img/8.jpg" alt="Flower" width="100%" height="600px">
							</div>
							<div class="item">
								<img src="img/9.jpg" alt="Flower" width="100%" height="600px">
							</div>
							<div class="item">
								<img src="img/10.jpg" alt="Flower" width="100%" height="600px">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				
			</div>
		</div>
	</header>
	<!--Fin-->

	<?php include('script.php');?>
</body>
</html>
