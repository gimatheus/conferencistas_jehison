<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class='infografia'>
		<div class="cerrar"></div>
	</div>

	<div id="wrapper" class="wrapper">
		<div id="slider" class="slider">
			<?php print render( $page['banner'] ); ?>
			<div id="header" class="header headerHome">
				<?php if ($logo): ?>
				<div id="logo" class="logo">
					<a href="index.php"><img src="<?php print $logo ?>" alt="<?php print $site_name ?>" title="<?php print $site_name ?>" /></a>
				</div>
				<?php endif; ?>
				<?php print render( $page['header'] ); ?>
				<div id="menu" class="menu">
					<ul class='menuUser'>
						<li id='login' class='login'>Login</li>
						<li id='register' class='register'>Register</li>
						<li id='listYourself' class='listYourself'>List yourself</li>
					</ul>
				</div>
			</div>
			<div class='buscador'>
				<div class="intBuscador">
					<input type="text" placeholder='Search for speakers by theme, area, name...' class='valorSearch'>
					<input type="text" placeholder='Date' class='valorDate'>
					<input type="button" class='btn-search'>
				</div>
			</div>
		</div>
		<div id="wrapper-main" class="wrapper-main">
			<div class="wrapper-content" id="wrapper-content">
				<div id="content" class="contentHome"><?php print render( $page['content'] ); ?></div>
				<p class='tituloHome'><span class='icono1'></span>IN THE SPOTLIGHT</p>
				<div id="spotlight" class="spotlight"><?php print render( $page['spotlight'] ); ?></div>
				<p class='tituloHome'><span class='icono2'></span>TALKING ABOUT US</p>
				<div id="testimonios" class="testimonios"><?php print render( $page['testimonios'] ); ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php require_once("footer.tpl.php"); ?>
	</div>

	<script src="sites/all/themes/theme_conference/js/jquery-1.11.3.min.js"></script>
	<script src="sites/all/themes/theme_conference/js/TweenMax.min.js"></script>
	<script src="sites/all/themes/theme_conference/js/funciones.js"></script>
	
</body>
</html>