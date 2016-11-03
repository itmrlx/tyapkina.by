<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83335200-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

	<!-- header -->
	<header class="container header-wr">
		<div class="row">
			<div class="col-xs-3 logo-container">
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Ландшафтный дизайнер Татьяна Тяпкина"></a>
				<div class="burger-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="col-xs-9 menu-container">
				<?php
					$args = array(
					  'theme_location'  => 'main-menu',
					  'container'       => '',
					  'menu_class'      => '',
					);
					wp_nav_menu( $args );
				?>
			</div>
		</div>
	</header>
