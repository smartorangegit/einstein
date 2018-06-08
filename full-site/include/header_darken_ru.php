<?php //Переключатель языков 06_09_2017
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
if($pieces[3] == "ru" || $pieces[3] == "en"){
$urllang = str_replace('/ru', "",$actual_link);
$urllang_n = str_replace('/ru', "/en",$actual_link);

$url_r = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$url_a = $urllang;
$url_n = $urllang_n;
}
else{
$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$uRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
$uRn = "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";
}
//echo $uRa ;
?>
<!--<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit"></script>-->
<!--<script>-->
<!--    var reCaptcha1;-->
<!--    var reCaptcha2;-->
<!--    var myCallBack = function () {-->
<!--        reCaptcha1 = grecaptcha.render('reCaptcha1', {-->
<!--            'sitekey': '6Le_Zh4UAAAAAAQRz_elE3ba_GBVzqxK3LX5Tit4', //Replace this with your Site key-->
<!--            'theme': 'light'-->
<!--        });-->
<!--        var element = document.getElementById('reCaptcha2');-->
<!--        if (!element) {-->
<!--        } else {-->
<!--            reCaptcha2 = grecaptcha.render('reCaptcha2', {-->
<!--                'sitekey': '6Le_Zh4UAAAAAAQRz_elE3ba_GBVzqxK3LX5Tit4', //Replace this with your Site key-->
<!--                'theme': 'light'-->
<!--            });-->
<!--        }-->
<!--    };-->
<!--</script>-->
<? include('form_ru.php'); ?>
<? include('preloader.php')?>

<!--
	19/08/17 Alex-K, new style for header
		Completely new
-->
<header class="top-header">
	<div class="top-header__inner">
		<div class="top-header__left-d">
			<a class="top-header__logo" href="/ru/">
				<img src="/img/EINSTEIN-logo-blue.svg" alt="einstein-logo">
			</a>
		</div>
		<!-- /end top-header__left -->
		<div class="top-header__right" id="menu">

			<nav class="navigation">
				<div class="navigation__mnu-logo">
					<a href="/">
						<img src="/img/EINSTEIN-logo-blue.svg" alt="einstein-logo">
					</a>
				</div>
				<ul class="navigation__menu">
					<li class="navigation__item">
						<a class="navigation__link-b" href="/ru/news/">Новости</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link-b" href="/ru/location/">Расположение</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link-b" href="/ru/architecture/">Архитектура</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link-b" href="/ru/floorpage/">Квартиры</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link-b" href="/ru/#perevagi">Преимущества</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link-b" href="/ru/construction/">Строительство</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link-b" href="/ru/#contact">Контакты</a>
					</li>
					<li class="lang_item">
						<ul class="language-select">
							<li class="active" data-lang="ru">
								<a href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">рус</a>
							</li>
							<li data-lang="ua">
								<a href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">укр</a>
							</li>
							<?/*
							<li data-lang="en">
								<a href="<?if(!empty($url_n)){ echo $url_n;}else{ echo $uRn;}?>">eng</a>
							</li>
							*/?>
						</ul>
					</li>
				</ul>
				<button id="navigation__close-mnu" class="navigation__close-mnu"></button>
			</nav>
			<!-- / end nav -->
			<div class="top-callback">
				<div class="top-callback__inner">

					<a class="top-callback__webcam" href="/ru/webcamera/">
						<svg viewBox="0 0 370 370" width="35" height="35">
							<g>
								<path
										d="M274.221,284.781c40.578-28.245,67.146-75.225,67.146-128.415C341.367,70.008,271.358,0,185,0   C98.643,0,28.633,70.008,28.633,156.365c0,53.19,26.568,100.17,67.146,128.415l-37.202,38.376   c-2.58,3.626-3.972,7.965-3.972,12.416v13.031c0,11.817,9.58,21.396,21.396,21.396h217.998c11.815,0,21.395-9.579,21.395-21.396   v-13.031c0-4.451-1.392-8.79-3.972-12.416L274.221,284.781z M185,83.383c40.309,0,72.983,32.676,72.983,72.982   c0,40.307-32.674,72.983-72.983,72.983s-72.982-32.676-72.982-72.983C112.018,116.059,144.691,83.383,185,83.383z M101.952,332.416   l28.549-29.454c16.969,6.314,35.328,9.769,54.499,9.769s37.53-3.455,54.499-9.769l28.549,29.454H101.952z"
										fill="#002442"
										class="web-icon"/>
								<path
										d="M185,201.689c25.033,0,45.322-20.291,45.322-45.324c0-16.152-8.456-30.32-21.177-38.349   c-0.274,7.068-10.968,12.752-24.145,12.752c-13.176,0-23.871-5.684-24.145-12.752c-12.721,8.028-21.177,22.197-21.177,38.349   C139.678,181.398,159.967,201.689,185,201.689z"
										fill="#002442"
										class="web-icon"/>
							</g>
						</svg>
					</a>

					<div class="top-callback__link-wrap">
						<a class="ringo-phone phoneRingo-d" href="tel:0443533143">353-31-43</a>
					</div>

					<button class="top-callback__btn-d_ru" id="callback-btn">Заказать звонок</button>

				</div>
			</div>
			<!-- /end top-callback -->
		</div>
		<!-- /end top-header__right -->
		<div class="top-header__btn-wrap">
			<div class="top-header__btn-inner">

				<div class="top-header__tel">
					<a class="ringo-phone top-header__tel-link" href="tel:0443533143">353-31-43</a>
				</div>

				<a class="top-header__callback-btn" id="mobile_callback_btn">Заказать звонок</a>

				<button class="top-header__btn" id="navigation_btn">

					<svg id="svg10" width="20" height="12">
						<metadata id="metadata16"></metadata>
						<defs id="defs14"/>
						<image width="20" height="12" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAMCAYAAABiDJ37AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
					bWFnZVJlYWR5ccllPAAAA4RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
					bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
					eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1
					Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
					dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
					dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
					MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
					b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
					Ok9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiMzRiZmZkZC01ODA2LTgyNDItOTJhMi1hM2Uz
					ZDgyNDkyNzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDNCNkQ2NjYzNjE1MTFFN0JGQzc5
					Mzg3NzhGQkZGQ0UiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDNCNkQ2NjUzNjE1MTFFN0JG
					Qzc5Mzg3NzhGQkZGQ0UiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUg
					KFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6
					N2IwNWFiNzctZTgyNS02ODRkLTk5ZWQtNDhlMTJmZmYxMDU4IiBzdFJlZjpkb2N1bWVudElEPSJh
					ZG9iZTpkb2NpZDpwaG90b3Nob3A6MDNmY2FlZjItYTc1MS0xMWU2LTk0ZTAtZjM4YmI1NGRkNTNj
					Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQg
					ZW5kPSJyIj8+BwabiwAAACVJREFUeNpi/A8EDFQETAxUBixAzDioXUgTL49GymikkAgAAgwAK1oG
					HMZlyDAAAAAASUVORK5CYII=" id="image18"/>
					</svg>

					<span>Меню</span>

				</button>

			</div>
		</div>

	</div>
	<!-- / end top-header__inner -->

	<!--
		/END 19/08/17 Alex-K, new style for header
			Completely new
	-->
</header>
