

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="es" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- blueprint CSS framework -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>assets/fonts/fontawesome-webfont.ttf" media="print" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />

<div id="wrapper">
	<div id="main">
		<div class="inner">
		<section>
			<header class="main">
				<?php
$this->pageTitle=Yii::app()->name . ' - Eventos';
$this->breadcrumbs=array(
	'Enventos',
);
?>
			<h1>Eventos destacados</h1>
			</header>
			<div class="col-lg-12">
				<div class="row">
						<?php
						foreach($consultaeventos as $key=>$value) { 
						$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
						$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
						$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
						$submensaje=$value["submensaje"]; // se asigna la variable que se 
						$imagenes=$value["imagenes"]; // se asigna la variable que se 
						?>	
					<div class="col-lg-12">
						<!-- titulos y subtitulos -->
						<div class="col-lg-12">
							<h2 id="content"><?php echo  $titulo; ?></h2>
							<p><?php echo  $mensaje; ?>	</p>
						</div>
						<div class="col-lg-6">
							<h2 id="content"><?php echo $subtitulo; ?></h2>
							<p><?php echo  $submensaje; ?><p>
						</div>
						<div class="col-lg-6" style="width: 200px; height: 200px;">
							<p>
							<img src='<?php echo Yii::app()->request->baseUrl;?>/<?php echo $imagenes?>' style="width: 250px; height: 200px;">
							</p>
						</div>
					</div>
					<?php }?>
				</div>
					<hr class="major" />
					<!-- Elements -->
					<h2 id="elements">Historial Eventos</h2>
				<div class="col-lg-12">
					<?php
					foreach($consultaeventosDos as $key=>$value) { 
					$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
					$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
					$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
					$submensaje=$value["submensaje"]; // se asigna la variable que se 
					?>	
					<!-- Text stuff -->
					<div class="col-lg-6" style="float: left; padding: 1%;">
					<h3><?php echo $titulo;?></h3>
					<p><?php echo $mensaje;?></p>
					<h3><?php echo $subtitulo;?></h3>
					<p><?php echo $submensaje;?></p>
					<hr />
					</div>
					<?php }?>
					<div class="col-lg-12">
						<h3>Informacion General</h3>
						<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac aipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.</p>
					</div>			
				</div>
				<!-- Blockquote -->
				<br>
				<div class="col-lg-12">
					<h3>Informacion General</h3>
					<p>
					<blockquote>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis olutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.</blockquote>
					</p>
				</div>
				<div class="col-lg-12">
						<h3>Listado de Eventos</h3>
						<h4>Listado Eventos Realizados Durante el Año</h4>
					<div class="table-wrapper">
						<div class="table-responsive" style="height: 300px; overflow: scroll;">
							<table class="table table-small-font table-bordered table-striped table-responsive" >
								<thead>
								<tr>
								<th class=columna>titulo</th>
								<th class=columna>mensaje</th>
								<th class=columna>subtitulo</th>
								<th class=columna>submensaje</th>
								</tr>
								</thead>
								<tbody>
									<?php
									foreach($consultaeventosDos as $key=>$value) { // se manda a llamar la variable que toma la informacion en este caso informa y hace un recorrido de la informacion en forma de array de lo que esta en el value mostrando datos la inforacion es extraida de la variable informa que esta en el controlador con una query.
									$titulo=$value["titulo"]; // se asigna la variable que se quiere mostrar
									$mensaje=$value["mensaje"]; // se asigna la variable que se quiere mostrar
									$subtitulo=$value["subtitulo"]; // se asigna la variable que se quiere mostrar
									$submensaje=$value["submensaje"]; // se asigna la variable que se quiere mostrar
									?>
									<tr>
									<td class=columna style='font-weight:normal;'><?php echo $titulo; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $mensaje; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $subtitulo; ?></td>
									<td class=columna style='font-weight:normal;'><?php echo $submensaje; ?></td>
									</tr>
									<?php
									 }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
	</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js""></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>