<!DOCTYPE html">
<html  lang="es">
	<head>
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
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body">
<div id="wrapper">
	<div id="main">	

			<div class="">
			
			<aside id="sidebar" class="col-lg-3" style="width:25em;" >

				
					<div class="inner">
						<div id="logo"><h3><?php echo CHtml::encode(Yii::app()->name); ?></h3> <!--_____ traemos el nombre TIMIZA PARK-LOT desde el main de la carpeta config-->
				 		<img id="logs" style="width: 50px; margin-right: 100px;" src='<?php echo Yii::app()->request->baseUrl; ?>/imagenes/sion.png' align=left><!--_____ traemos la imagen desde    	
						la carpeta imagenes-->
						</div><!-- header -->
							<!--MENU SION NAV SUPERIOR-->
						<nav id="menu">
							<header class="major">
								<h2 style="color: black;">Menu</h2>
							</header>
							<div style="width: 100%;">
								<ul >
								<?php $this->widget('zii.widgets.CMenu',array(
									
								'items'=>array(
								array('label'=>'Inicio Sesion','url'=>array('site/login'), 'visible'=>Yii::app()->user
									->isGuest),
								array('label'=>'salir('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>Yii::app()->user
									->isGuest),
								array('label'=>'Eventos', 'url'=>array('site/eventos')),
								array('label'=>'Nuevo Evento', 'url'=>array('site/insertareventos')),
								array('label'=>'Gestión Usuarios', 'url'=>array('site/gestionusuarios')),
								array('label'=>'Reportes', 'url'=>array('site/informes')),
								array('label'=>'Contáctenos', 'url'=>array('site/contact')),
								array('label'=>'Acerca', 'url'=>array('site/page', 'view'=>'about')),
								),
								)); ?>
						

								</ul>
								<header class="major">
								<h2>Destacados</h2>
								</header>
								<div class="mini-posts">
									<article>
									<a href="#" class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/pic014.jpg" alt="" /></a>
									<p style="color: black;">Noticias Uno mes actual más Importantes del conjunto</p>
									</article>
									<article>
									<a href="#" class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/pic015.jpg" alt="" /></a>
									<p style="color: black;">Noticias Dos mes actual más Importantes del conjunto</p>
									</article>
									<article>
									<a href="#" class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/imagenes/pic016.jpg" alt="" /></a>
									<p style="color: black;">Noticias Dos mes actual más Importantes del conjunto</p>
									</article>
								</div>
								<div class=""> 
									<p>parrafos</p>
									<ul class="contact">
										<a href="https://login.live.com/" target="_black">administrador@sionwebsites.com</a>
										<li class="fa-phone">(+57) 317-264-6327</li>
										<li class="fa-home">Bogota, Colombia</li>
									</ul>
									<div id="footer" style="text-align: center;">
										Copyright &copy; <?php echo date('Y'); ?> SION - SYSTEM.<br/>
										Todos los derechos recervados.<br/>
										<?php echo Yii::powered(); ?>
									</div><!-- footer -->
								</div>
							</div>
						</nav><!-- mainmenu -->
					</div>
			</aside>

			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
			<?php echo $content; ?>
			</div>
	</div>	
</div> 
	</body>
</html>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js""></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>