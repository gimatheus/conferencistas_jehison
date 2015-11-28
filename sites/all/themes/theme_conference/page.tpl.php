<?php  if ($is_front) {  include('front_page.tpl.php');  return;}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

	<div id="wrapper" class="wrapper">
		<?php require_once("header.tpl.php"); ?>
		<div id="slider" class="slider">
			<?php print render( $page['banner'] ); ?>
		</div>
		<div id="wrapper-main" class="wrapper-main">
			<div class="wrapper-content" id="wrapper-content">
				<div id="content"><?php print render( $page['content'] ); ?></div>
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