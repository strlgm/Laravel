<!DOCTYPE HTML>
<html lang="es-ES">
	<head>
		<meta charset="UTF-8">
		<!--nuestro título podrá ser modificado-->
		<title><?php echo $__env->yieldContent('titulo'); ?></title>
	</head>
	<body>

		<div class="wrapper" style="width: 900px; margin: 0 auto">

			<!--nuestra navegación-->
			<div class="header">
				<ul>
					<!--creamos una sección que por defecto ya contendrá
					dos elementos, como veremos podemos o no utilizar los
					elementos, si queremos simplemente deberemos hacer uso
					de ##parent-placeholder-da39a3ee5e6b4b0d3255bfef95601890afd80709##-->
					<?php $__env->startSection('navegacion'); ?>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Blog</a></li>
					@yield_section
				</ul>
			</div>

			<!--nuestro sidebar irá vacío por defecto, si queremos podemos hacer
			como con nuestro menú y luego utilizarlos con ##parent-placeholder-f02636101bb42ddf793058c5d6550f22f949e353##-->
			<div class="sidebar" style="width: 200px; float: left">
				<?php echo $__env->yieldContent('sidebar'); ?>
			</div>
			<!--fin de nuestro sidebar-->

			<!--nuestro contenido es igual que el sidebar, no tiene ningún contenido 
			por defecto, pero se lo podemos añadir y llamarlo con ##parent-placeholder-f02636101bb42ddf793058c5d6550f22f949e353##-->
			<div class="content" style="width: 700px; float: right">
				<?php echo $__env->yieldContent('contenido'); ?>
			</div>
			<!--fin de nuestro sidebar-->

		</div>
	</body>
</html>

