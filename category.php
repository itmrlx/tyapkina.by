<?php get_header(); ?>

	<!-- contacts -->
	<?php include 'head-contacts.php'; ?>

	<!-- last news -->
	<div class="wrapper last-news-wr">
		<div class="container last-news-container">
			<div class="clearfix"></div>
			<h2 class="title-line"><?php single_cat_title(); ?></h2>
				<?php if(is_category('gallery') || is_category('projects')): // Галерея, Проекты ?>
					<div class="row gallery">
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div class="col-xs-3">
								<a href="<?php the_permalink(); ?>" class="item">
									<?php $gal_img = get_field('img'); ?>
									<span class="img-container"><img src="<?php echo $gal_img['sizes']['min']; ?>" alt="<?php echo $gal_img['alt']; ?>" /></span>
									<h2 class="title-item">
										<?php echo wp_trim_words(get_the_title(),7,'...'); ?>
									</h2>
									<?php if(is_category('projects')): ?>
									<div class="desc"><?php echo wp_trim_words(get_the_content(),10,'...'); ?></div>
									<?php endif; ?>
								</a>
							</div>
						<?php endwhile; ?>
						<div class="clearfix"></div>
						<nav class="centered">
							<?php if(function_exists('proPagination')) { proPagination(); } ?>
						</nav>
						<?php endif; ?>
					</div>
				<?php else: // Новости, Статьи, Услуки и т.д. ?>
					<div class="row">
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div class="col-xs-6 news">
								<div class="item">
									<?php $news_img = get_field('img'); ?>
									<a class="image" href="<?php the_permalink(); ?>"><img src="<?php echo $news_img['sizes']['min']; ?>" alt="<?php echo $news_img['alt']; ?>"></a>
									<h3 class="title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),7,'...'); ?></a></h3>
									<?php if(is_category('services')): ?>
										<div class="desc"><?php echo wp_trim_words(get_the_content(),20,'...'); ?></div>
									<?php else: ?>
										<div class="desc"><?php echo wp_trim_words(get_the_content(),10,'...'); ?></div>
										<div class="date">20 Май 2016</div>
									<?php endif; ?>
									<div class="clearfix"></div>
								</div>
							</div>
						<?php endwhile; ?>
						<div class="clearfix"></div>
						<nav class="centered">
							<?php if(function_exists('proPagination')) { proPagination(); } ?>
						</nav>
						<?php endif; ?>
					</div>
				<?php endif; // шаблоны ?>
		</div>
	</div>

	<!-- footer -->
<?php get_footer(); ?>
