<div id="header" class="header">
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