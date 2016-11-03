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
					<div class="col-xs-12">
						<?php the_content(); ?>
					</div>
				</div>
				<?php $gal_imgs = get_field('gallery_item'); if( $gal_imgs ): ?>
					<div class="row gallery images">
						<?php foreach( $gal_imgs as $image ): ?>
							<div class="col-xs-3">
								<a href="<?php echo $image['sizes']['large']; ?>" class="item">
									<div class="img-container">
										<img src="<?php echo $image['sizes']['min']; ?>" alt="<?php echo $image['alt']; ?>" />
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>

	<!-- footer -->
<?php get_footer(); ?>
