<?php /*
template name: Партнеры
*/ ?>

<?php get_header(); ?>

	<!-- contacts -->
	<?php include 'head-contacts.php'; ?>

	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="wrapper last-news-wr">
			<div class="container last-news-container images">
				<div class="clearfix"></div>
				<h1 class="title-line"><?php the_title(); ?></h1>
				<div class="row">
					<div class="col-xs-6 partners_left">
						<?php the_field('partners_left'); ?>
					</div>
					<div class="col-xs-6 partners-right">
						<?php the_field('partners_right'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>

	<!-- footer -->
<?php get_footer(); ?>
