<?php
$webAd = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<section class="contact post">
	<div class="contact__inner">
		<div class="contact__logo">
			<img src="/img/EINSTEIN-logo.png" alt="contact__logo">
		</div>
		<!-- / end contact__logo -->
		<div class="contact__wrap">
			<div class="contact__description">
				<h2 class="contact__caption">Контактная информация:</h2>
				<ul class="contact__list">
					<li class="contact__item">
						<span class="contact__link">
							<img src="/img/contact-icon/map-icon.png" alt="map-icon">г. Киев, ул. Златоустовская, 24А</span>
					</li>
					<li class="contact__item">
						<a class="contact__link" href="#">
							<img src="/img/contact-icon/phone-icon.svg" alt="phone-icon">+38 (044) 290 34 27</a></li>
					<li class="contact__item">
						<a class="contact__link" href="mailto:info@einstein.house">
							<img src="/img/contact-icon/mail-icon.svg" alt="mail-icon">info@einstein.house</a></li>
					<p class="contact__medium">Отдел маркетинга:</p>
					<li class="contact__item">
						<a class="contact__link" href="mailto:marketing@riverside.net.ua">
							<img src="/img/contact-icon/mail-icon.svg" alt="mail-icon">marketing@saga-development.com.ua </a>
					</li>
					<li class="working_hours">
						<p class="contact__medium">Часы работы отдела продаж:</p>
						<div class="contact__item">Пн-пт: 09.00 - 19.00</div>
						<div class="contact__item">Сб: 10.00 - 18.00</div>
						<div class="contact__item">Вск: 10.00 - 18.00</div>
					</li>
					<li class="working_hours">
						<p class="contact__medium">Адрес отдела продаж:</p>
						<div class="contact__link"><img src="/img/contact-icon/map-icon.png" alt="map-icon">г. Киев, ул. Антоновича 74</span></div>
					</li>
					<li class="working_hours">
						<p class="contact__medium">Отдел послепродажного обслуживания:</p>
					</li>
					<li class="contact__item">
						<a class="contact__link" href="#">
							<img src="/img/contact-icon/phone-icon.svg" alt="phone-icon">+38 (067) 230 42 65</a></li>
							<li class="contact__item">
								<a class="contact__link" href="#">
									<img src="/img/contact-icon/phone-icon.svg" alt="phone-icon">+38 (067) 616 75 38 </a></li>
									<li class="working_hours">
										<div class="contact__item">Пн-пт: 09.00 - 18.00</div>
										<div class="contact__item">Сб: 10.00 - 18.00</div>
										<div class="contact__item">Вс: выходной</div>
									</li>
				</ul>
			</div>
			<!-- / end contact__description -->
			<div class="contact__form" id="contact">
				<div class="contact-for-all">
					<div class="contact__caption">Свяжитесь с нами:</div>
					<form class="form" id="form">
						<input class="text-big text-big_form" type="text" placeholder="Ваше имя:" name="name_ru"  required="required">
						<input class="text-big text-big_form" type="tel" placeholder="Ваш телефон" name="tel"  required="required">
						<input class="text-big text-big_form" type="email" placeholder="Ваш e-mail:" name="email">
						<textarea onkeyup="javascript:countmeForm('form');"   class="text-big text-big_form" name="textarea" rows="1" placeholder="Ваше сообщение:"></textarea>
						<input name="webad" class="webad" type="hidden" value="<?= $webAd; ?>"/>
						<input name="metka" class="metka" type="hidden" value="Einstein callback"/>
						<input name="inn" class="userInn" type="hidden" value="Einstein callback"/>
						<button class="btn btn__form" type="submit">Отправить</button>
					</form>
				</div>

				<div class="contact-for-realtor" style="display: none;">
					<div class="contact__caption">Сотрудничество для риелторов:</div>
					<form class="form" id="form_rieltor">
						<input class="text-big text-big_form" type="text" placeholder="Название АН:" name="name_an" required="required">
						<input class="text-big text-big_form" type="text" placeholder="Ваше имя:" name="name"   required="required">
						<input class="text-big text-big_form" type="email" placeholder="Ваш e-mail:" name="email" >
						<input class="text-big text-big_form" type="tel" onkeyup="javascript:countmeForm('form_rieltor');"  placeholder="Ваш телефон"	name="tel"	required="required"	>
						<textarea   class="text-big text-big_form" name="textarea" rows="1" placeholder="Ваше сообщение:"></textarea>

						<input  name="typ" class="webad" type="hidden" value="8" >
						<input name="webad" class="webad" type="hidden" value="<?= $webAd; ?>"/>
						<input name="metka" class="metka" type="hidden" value="Сотрудничество для риелторов - Einstein"/>
						<input name="inn" class="userInn" type="hidden" value="Einstein"/>
						<button class="btn btn__form" type="submit">Отправить</button>
					</form>
				</div>

					<div class="btn btn__form" style="margin-top: 20px; text-align: center; line-height: 38px;">
						<a href="http://riverside.net.ua/" class="collaboration_btn" style="text-decoration: none; color: #fff; width: 100%; height: 100%; display: block;" target="_blank">Сотрудничество для риелторов</a>
					</div>
				</form>
			</div>
			<!-- /end contact__form -->
		</div>
		<!-- /end contact__wrap -->
	</div>
	<!-- / end contact__inner -->
</section>
<!-- /end contact -->
</main>

<!--
	New footer__inner add inside
	17/08/17 Alex-K
-->

<footer class="footer">
	<div class="footer__inner">
		<div class="footer__left">&copy; 2017 EINSTEIN Concept House все права защищены.
			<span class="facebook__link">
				<a href="https://www.facebook.com/EinsteinConceptHouse/" target="_blank">
					<img src="/img/Facebook-icon.png" alt="facebook_logo">
				</a>
			</span>
		</div>
		<div class="footer__right">
			<span>Разработка сайта</span>
			<a href="#"><img src="/img/smart-logo.png" alt="logo smartorange"></a>
		</div>
	</div>
	<!-- / end footer-inner -->
</footer>

<?php include('form_ru.php'); ?>

</div>
<!-- /end wrapper -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb1nF3LPA_ZOACIAdwgtrh0nrQd4NYybA&sensor=false"></script>
<!-- /end wrapper -->

<!--
	Add jQuety.min.js, jquery.magnific-popup.min.js, common.js
	Commented scripts.min.js

	17/08/17 Alex-K
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<script src="/js/intlTelInput.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/apart.js?v=1.0"></script>
<script src="/js/viewportchecker.js"></script>
<script src="/js/scripts.js"></script>

<script>
    jQuery('.post').addClass("hidden").viewportChecker({
        classToAdd: 'visible animate',
        offset: 200
    });

    $(".collaboration_btn").on("click", function(e) {
		e.preventDefault();
		$(".contact-for-all").toggle();
		$(".contact-for-realtor").fadeToggle();
	});
</script>

<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCWCW9Z"
			height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>
