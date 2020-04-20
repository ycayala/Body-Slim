<!DOCTYPE html>
<html lang="es">
<head>
	<!--Barra de navegacion-->
	<?php include('head.php');?>
	<style type="text/css">
		.well{
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
				<div class="col-sm-6 col-md-6">
					<div class="list-group">
							<a href="#" class="list-group-item"><strong>Estética</strong></a>
							<div class="thumbnail">
							<img src="img/estetica/estetica-index.jpg">
							<div class="caption">
								<h3>Portafolio de Servicios</h3>

								<a href="#" class="list-group-item" data-toggle="modal" data-target="#modalFacial">Tratamientos Faciales</a>
								<a href="#" class="list-group-item" data-toggle="modal" data-target="#modalCorporales">Tratamientos Corporales</a>
								<a href="#" class="list-group-item" data-toggle="modal" data-target="#modalDepilacion">Depilación</a>

								<!--Modals Estética-->
								<div class="modal fade" id="modalFacial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<img src="img/estetica/facial.png">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Limpieza Facial</h4>
														<div class="well">Busca recuperar los niveles de colágeno y elastina de la piel, hacer una remoción de células muertas para que la piel se limpie y el poro quede despejado, recuperar su elasticidad y firmeza.</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Nutrición Facial</h4>
														<div class="well">Aporta hidratación en la capa epidérmica y dérmica, activa el fibroblasto para que produzca más colágeno y elastina, este se traduce en más volumen de los tejidos y más firmeza, la sequedad se detiene y las líneas de expresión se minimizan.</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Rejuvenecimiento Facial</h4>
														<div class="well">Este protocolo combina la técnica peeling ultrasónico y radiofrecuencia  para solucionar los estados de flaccidez en la piel de personas entre los 30 y 45 años de edad. Sus principios activos tonificadores e hidratantes, contribuyen a una buena reparación de los tejidos, viéndose un aspecto más juvenil.</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Tratamiento Anti Manchas</h4>
														<div class="well">Indicado en aquellas personas que sufren de melasmas en su piel, es importante que la piel no presente ningún tipo de brote ya que está totalmente contra indicado. La sinergia entre AHAS y Despigmentadores, garantizaran un aclaramiento progresivo de las manchas.</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Tratamiento Anti Acné</h4>
														<div class="well">Está indicado para acné comedónico, pustulosos, papuloso en primer grado, acné juvenil o vulgar... estos tipos de acné solo afectan la epidermis teniendo tratamiento cosmetologico y cosmiatrico. </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalCorporales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<img src="img/estetica/corporal.png">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Reafirmante</h4>
														<div class="well">El objetivo principal del tratamiento reafirmante y tonificante es recuperar la elasticidad y tonicidad de los tejidos tratados del cuerpo en general o de zonas concretas como los glúteos, el abdomen, brazos.</div>
													</div>
												</div>
											</div>
										<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Post - Parto</h4>
														<div class="well">El tratamiento post-parto combina tanto la aparatología como la estética necesaria para eliminar la grasa acumulada durante el embarazo y reducir la flacidez que se produce después del parto. Se realizará una combinación de los distintos tratamientos de forma personalizada para cada mujer y además son compatibles con la lactancia materna.</div>
													</div>
												</div>
											</div>
										<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Anti-Celulitico</h4>
														<div class="well">El objetivo de este tratamiento es actuar sobre las zonas en las que se acumulan adiposidades (ya sea abdomen, glúteos, muslos, brazos.) mediante unas maniobras específicas que favorecerán el retorno venoso, actuando sobre la circulación, activándola y mejorando el metabolismo de la zona.</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<div class="caption">
														<h4>Drenaje Linfatico Corporal</h4>
														<div class="well">Tratamiento destinado a mejorar las funciones del sistema circulatorio por medio de movimientos suaves, precisos y rítmicos. Se caracteriza por un trabajo intensivo realizado en la zona de los ganglios linfáticos. Estas maniobras activan y mejoran la circulación linfática por sus trayectos naturales, favoreciendo la eliminación de la linfa y los líquidos intercelulares. Estimula las defensas y aumenta la resistencia del organismo frente a las enfermedades. Tiene capacidad de desintoxicación y depuración del organismo. Reducción del volumen corporal, celulitis, disminución de edemas del embarazo. Provoca un estado de calma y relajación.</div>
													</div>
												</div>
											</div>
										
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalDepilacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<img src="img/estetica/depilacion.png">
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="caption">
														<h4>Depilación con bandas</h4>
													</div>
												</div>
											</div>	
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="caption">
														<h4>Depilación extra film</h4>
													</div>
												</div>
											</div>	
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="caption">
														<h4>Depilación con caucho</h4>
													</div>
												</div>
											</div>											
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
					
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="list-group">
						<a href="#" class="list-group-item"><strong>Spa de Uñas</strong></a>
						<div class="thumbnail">
							<img src="img/unas/una-index.jpg">
							<div class="caption">								
								<h3>Portafolio de Servicios</h3>
								<a href="#" class="list-group-item" data-toggle="modal" data-target="#modalPrincesas">Princesas</a>
								<a href="#" class="list-group-item" data-toggle="modal" data-target="#modalDamas">Damas</a>
								<a href="#" class="list-group-item" data-toggle="modal" data-target="#modalCaballeros">Caballeros</a>
								<a href="#" class="list-group-item" data-toggle="modal" data-target="#modalSpa">Spa</a>	


								<!--Modals Spa de uñas-->
								<div class="modal fade" id="modalPrincesas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">

												<div class="col-xs-12 col-sm-12">
													<div class="thumbnail">
														<img src="img/princesas/princesas.png">
													</div>
												</div>

												<div class="col-xs-4 col-sm-4">
													<div class="thumbnail">
														<div class="well">
															<h4>Manicure Slim Girls</h4>
															<li>Retirar el esmalte</li>
															<li>Limar</li>
															<li>Puesta de esmalte con francés</li>
															<li>Decoración de una uña</li>
														</div>
													</div>
												</div>
												<div class="col-xs-4 col-sm-4">
													<div class="thumbnail">
														<div class="well">
															<h4>Manicure Girls</h4>
															<li>Retirar el esmalte</li>
															<li>Limar</li>
															<li>Exfoliación</li>
															<li>Hidratacion con crema</li>
															<li>Puesta de esmalte con francés</li>
															<li>Decoración de una uña</li>
														</div>
													</div>
												</div>
												<div class="col-xs-4 col-sm-4">
													<div class="thumbnail">
														<div class="well">
															<h4>Manicure Full Girls</h4>
															<li>Retirar el esmalte</li>
															<li>Limar</li>
															<li>Exfoliación</li>
															<li>Hidratacion con crema</li>
															<li>Puesta de esmalte con decoración en todas las uñas</li>
														</div>
													</div>
												</div>
											
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalDamas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">

											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<img src="img/mujeres/mujeres.png">
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Manicure Común</h4>
														<li>Retirar esmalte</li>
														<li>Limar</li>
														<li>Exfoliación</li>
														<li>Hidratación con crema</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración en una uña</li>														
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Manicure Hidratante</h4>
														<li>Retirar esmalte</li>
														<li>Limar</li>
														<li>Exfoliación</li>
														<li>Hidratación con parafina</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración en una uña</li>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Manicure Full Color</h4>
														<li>Retirar esmalte</li>
														<li>Limar</li>
														<li>Hidratar cuticulas</li>
														<li>Exfoliación</li>
														<li>Hidratación con crema</li>														
														<li>Puesta de esmalte con decoracion en todas las uñas</li>
													</div>
												</div>
											</div>											
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Manicure Slim</h4>
														<li>Retirar el esmalte</li>
														<li>Limar</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración de una uña</li>														
													</div>
												</div>
											</div>											
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Cambio Full Color</h4>
														<li>Retirar esmalte</li>
														<li>Limar</li>
														<li>Puesta de esmalte con decoracion en todas las uñas</li>
														
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Pedicure Slim</h4>
														<li>Retirar esmalte</li>
														<li>Limar</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración en una uña</li>														
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Pedicure Común</h4>
														<li>Retirar esmalte</li>
														<li>Limar</li>
														<li>Exfoliación</li>
														<li>Hidratación con crema</li>														
														<li>Puesta de esmalte con decoracion en todas las uñas</li>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Pedicure Hidratante</h4>
														<li>Retirar esmalte</li>
														<li>Limar</li>
														<li>Exfoliación</li>
														<li>Hidratación con parafina</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración en una uña</li>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="modal fade" id="modalCaballeros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<img src="img/caballeros/caballero.png">
												</div>
											</div>
											<div class="col-xs-3 col-sm-3"></div>
											<div class="col-xs-6 col-sm-6">
												<div class="thumbnail">
													<div class="well">
														<h4>Manicure</h4>
														<li>Retirar el esmalte</li>
														<li>Limar</li>
														<li>Exfoliación</li>
														<li>Hidratacion con crema</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración de una uña</li>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalSpa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="col-xs-12 col-sm-12">
												<div class="thumbnail">
													<img src="img/caballeros/caballero.png">
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Manos</h4>
														<li>Retirar el esmalte</li>
														<li>Limar</li>
														<li>Hidratar cuticulas</li>
														<li>Exfoliación</li>
														<li>Hidratación con parafina</li>
														<li>Masaje hasta el codo</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración de una uña</li>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Pies</h4>
														<li>Retirar el esmalte</li>
														<li>Limar</li>
														<li>Hidratar cuticulas</li>
														<li>Exfoliación</li>
														<li>Hidratación con parafina</li>
														<li>Masaje hasta la rodilla</li>
														<li>Puesta de esmalte con francés</li>
														<li>Decoración de una uña</li>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4">
												<div class="thumbnail">
													<div class="well">
														<h4>Manos y pies</h4>
														<li>Retirar el esmalte</li>
														<li>Limar</li>
														<li>Exfoliación</li>
														<li>Hidratacion con crema</li>
														<li>Masaje hasta el codo y hasta la rodilla</li>
														<li>Puesta de esmalte con decoración</li>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								


						</div>
					</div>
					
				</div>
			</div>
		</div>
			
	</header>

	<!--Fin-->

	<?php include('script.php');?>
</body>
</html>
