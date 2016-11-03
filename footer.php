<div class="wrapper footer-wr">
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<div class="phones"><?php the_field('f_phones','option'); ?></div>
			</div>
			<div class="col-xs-4">
				<p class="webber centered">&copy; <?php the_field('f_unp','option'); ?><br>Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
			</div>
			<div class="col-xs-4 social-container">
				<a href="https://www.facebook.com/tanya.tyapkina" class="fb"></a>
				<a href="https://new.vk.com/landscape_club_tyapkina" class="vk"></a>
			</div>
		</div>
	</div>
</div>

<!-- modal form -->
<div id="fform" style="display: none;">
	<div class="fform-modal">
		<form id="fformid">
			<h3 class="centered title">Заказать звонок</h3>
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
		</form>
	</div>
</div>

<!-- scripts -->
<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-3.0.0-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter40645170 = new Ya.Metrika({ id:40645170, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40645170" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>
