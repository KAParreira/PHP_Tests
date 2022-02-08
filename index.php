 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
 	<meta charset="utf-8">
 	<title> Test </title>
 	<link rel="stylesheet" href="css/style.css">
 </head>

 <body>
 	<div class="row">
 		<div class="container">
 			<div class="col">


 				<nav>
 					<ul class="menu">
 						<h1> 4s4ki </h1>
 						<li><a href="#">
 								Home
 							</a></li>
 						<li><a href="#">
 								Galeria
 							</a></li>
 				</nav>
 				<section>

 					<iframe src="https://www.youtube.com/embed/HL3GP20lAAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 				</section>

 			</div>
 		</div>
 		<div class="col">
 			<img src="IMG/red.png">
 			<div class="box1">
 				<?php

					$valor1 = 10;
					$valor2 = 5;
					$result = $valor1 + $valor2;

					echo " $result";

					$result2 = $result + $valor2;

					print " - $result2";

					?>
 			</div>
 		</div>
 	</div>

 </body>

 </html>