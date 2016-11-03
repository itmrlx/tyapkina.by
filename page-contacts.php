<?php /*
template name: Контакты
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
					<div class="col-xs-6 contacts-page-left">
						<?php the_content(); ?>
					</div>
					<div class="col-xs-6 contacts-page-right">
						<div class="feedback-contacts">
							<form id="fformid">
								<h3 class="centered title">Форма обратной связи</h3>
								<div class="form-group">
									<label>Ваше имя:</label>
									<input class="form-control" name="name" type="text" required />
								</div>
								<div class="form-group">
									<label>Телефон:</label>
									<input class="form-control" name="tel" type="tel" required />
								</div>
								<div class="form-group">
									<label>Email:</label>
									<input class="form-control" name="mail" type="email" />
								</div>
								<div class="form-group">
									<label>Сообщение:</label>
									<textarea class="form-control" rows="3" name="dopinfo"></textarea>
								</div>
								<div class="form-group" style="display:none;">
									<label>for robots:</label>
									<input class="form-control" type="text" name="email" />
									<input id="form-modal-title" class="form-control" type="text" name="title" value="" />
								</div>
								<div class="centered">
									<button type="submit" class="btn btn-primary">Отправить</button>
								</div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>

	<!-- footer -->
<?php get_footer(); ?>
