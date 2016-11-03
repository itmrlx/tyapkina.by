<?php get_header(); ?>

	<!-- slider -->
	<div class="wrapper slider-wr">
		<div class="container">
			<div class="slider-main">
				<?php $main_services = new WP_Query('category_name=services&showposts=50'); ?>
				<?php if($main_services->have_posts()) : ?>
				<?php while($main_services->have_posts()) : $main_services->the_post(); ?>
					<div class="slide-container">
						<a href="<?php the_permalink(); ?>" class="slide">
							<?php $main_service_img = get_field('img'); ?>
							<img src="<?php echo $main_service_img['sizes']['min']; ?>" alt="<?php echo $main_service_img['alt']; ?>">
							<h2 class="title"><?php the_title(); ?></h2>
						</a>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- contacts -->
	<?php include 'head-contacts.php'; ?>

	<!-- last news -->
	<div class="wrapper last-news-wr">
		<div class="container last-news-container">
			<div class="clearfix"></div>
			<h2 class="title-line">Наши проекты</h2>
			<div class="row gallery">
				<?php $main_news = new WP_Query('category_name=projects&showposts=8'); ?>
				<?php if($main_news->have_posts()) : ?>
				<?php while($main_news->have_posts()) : $main_news->the_post(); ?>
					<div class="col-xs-3">
						<a href="<?php the_permalink(); ?>" class="item">
							<?php $gal_img = get_field('img'); ?>
							<span class="img-container"><img src="<?php echo $gal_img['sizes']['min']; ?>" alt="<?php echo $gal_img['alt']; ?>" /></span>
							<h2 class="title-item">
								<?php echo wp_trim_words(get_the_title(),7,'...'); ?>
							</h2>
							<div class="desc"><?php echo wp_trim_words(get_the_content(),10,'...'); ?></div>
						</a>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<div class="clearfix"></div>
				<div class="centered">
					<a href="/category/projects/" class="btn btn-primary big">Смотреть еще</a>
				</div>
			</div>
		</div>
	</div>

	<!-- about -->
	<div class="wrapper about-wr">
		<div class="container">
			<h2 class="title">Обо мне</h2>
			<?php the_field('m_about','option'); ?>
			<a href="/about" class="more">Читать подробнее...</a>
		</div>
	</div>

	<!-- footer -->
<?php get_footer(); ?>
