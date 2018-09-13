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
<? include('form.php'); ?>
<? include('preloader.php')?>
<!--
	19/08/17 Alex-K, new style for header
		Completely new
-->
<header class="top-header top-header__darken">
	<div class="top-header__inner">
		<div class="top-header__left">
			<a class="top-header__logo" href="/">
				<img src="/img/EINSTEIN-logo-blue.svg" alt="einstein-logo" style="max-width: 195px;">
			</a>
		</div>
		<!-- /end top-header__left -->
		<div class="top-header__right-def" id="menu">

			<nav class="navigation">
				<div class="navigation__mnu-logo">
					<a href="/">
						<img src="/img/EINSTEIN-logo-blue.svg" alt="einstein-logo" style="max-width: 195px;">
					</a>
				</div>
				<ul class="navigation__menu">
					<li class="navigation__item">
						<a class="navigation__link" href="/news/">Новини</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="/location/">Розташування</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="/architecture/">Архітектура</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="/floorpage/">Квартири</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="/#perevagi">Переваги</a>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" id="ctc_open" href="/construction/">Будівництво</a>
						<ul id="ctc_active">
							<li><a href="/ctc" class="navigation__link">Client TechControl</a></li>
						</ul>
					</li>
					<li class="navigation__item">
						<a class="navigation__link" href="/#contact">Контакти</a>
					</li>
					<li class="navigation__item" style="display:  flex; align-items:  center;">
						<svg height="13.820739" width="6" xmlns="http://www.w3.org/2000/svg" fill="#002442"><path d="m5.9331145 12.650191c-.1420656.15464-.284196.30089-.4345576.45134-.351081.27999-.7606216.50148-1.1910636.63936-.6351475.12955-1.2954741.10032-1.9265061-.0794-.4011799-.1212-.7312947-.39282-.9193438-.76056-1.93904702-3.7192803-1.94740764-8.1447903-.033443-11.8766103.2214916-.42214003.6100981-.74390003 1.0698024-.86510003.3426556-.0877.685376-.15043 1.023819-.15876.7940316-.0125 1.5546207.22983 2.1981937.67281.079393.0502.1295246.15043.1295246.25073 0 .0502-.020869.10860003-.050099.15045003l-1.6047196 2.6787c-.079393.13789-.2591142.18802-.4011799.1086l-.8609161-.47221c-.050131-.0293-.1002948-.0376-.1504264-.0376-.1713602 0-.3008849.13788-.3008849.30921v6.4230903c0 .17133.1295571.30925.3009173.30925.058492 0 .1169844-.0209.1671475-.0502l.4847537-.33012c.1295248-.0794.2883117-.0586.3886066.0418l2.0978664 2.18556c.050131.0586.079394.12955.079394.20895 0 .071-.029262.1421-.066886.20058z" stroke-width=".032405"/></svg>
						<a class="ringo-phone phoneRingo" href="tel:0443533143" style="margin-left:12px;">  353-31-43</a>
					</li>
				</ul>
					<svg id="navigation__close-mnu" class="navigation__close-mnu" enable-background="new 0 0 50 50" viewBox="0 0 50 50" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m37.304 11.282 1.414 1.414-26.022 26.02-1.414-1.413z" fill="#002442"></path><path d="m12.696 11.282 26.022 26.02-1.414 1.415-26.022-26.02z" fill="#002442"></path></svg>
				</nav>

			<div class="top-callback">
				<div class="top-callback__inner">
					<ul class="language-select" style="color:#ffffff;">
						<li  data-lang="ua">
							<a href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">укр</a>
						</li>
						<li>|</li>
						<li data-lang="ru">
							<a href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">рус</a>
						</li>
								<?/*
								<li data-lang="en">
								<a href="<?if(!empty($url_n)){ echo $url_n;}else{ echo $uRn;}?>">eng</a>
								</li>
								*/?>
					</ul>

					<a class="top-callback__web-cam" href="/webcamera/">
						<svg viewBox="0 0 370 370" width="24" height="24"><g><path class="top-callback__web-cam-icon" d="M274.221,284.781c40.578-28.245,67.146-75.225,67.146-128.415C341.367,70.008,271.358,0,185,0   C98.643,0,28.633,70.008,28.633,156.365c0,53.19,26.568,100.17,67.146,128.415l-37.202,38.376   c-2.58,3.626-3.972,7.965-3.972,12.416v13.031c0,11.817,9.58,21.396,21.396,21.396h217.998c11.815,0,21.395-9.579,21.395-21.396   v-13.031c0-4.451-1.392-8.79-3.972-12.416L274.221,284.781z M185,83.383c40.309,0,72.983,32.676,72.983,72.982   c0,40.307-32.674,72.983-72.983,72.983s-72.982-32.676-72.982-72.983C112.018,116.059,144.691,83.383,185,83.383z M101.952,332.416   l28.549-29.454c16.969,6.314,35.328,9.769,54.499,9.769s37.53-3.455,54.499-9.769l28.549,29.454H101.952z" fill="#002442"/>	<path class="top-callback__web-cam-icon" d="M185,201.689c25.033,0,45.322-20.291,45.322-45.324c0-16.152-8.456-30.32-21.177-38.349   c-0.274,7.068-10.968,12.752-24.145,12.752c-13.176,0-23.871-5.684-24.145-12.752c-12.721,8.028-21.177,22.197-21.177,38.349   C139.678,181.398,159.967,201.689,185,201.689z"
					 fill="#002442"/></g></svg>
					</a>

					<button class="top-callback__btn" id="callback-btn">Замовити дзвінок</button>
					<a href="http://saga-development.com.ua/" class="saga-logo" target="_blank">
					<img src="/img/Saga_white.svg">
					</a>

				</div>
			</div>
		</div>
		<!-- /end top-header__right -->
		<div class="top-header__btn-wrap">
			<a class="top-header__logo_1" href="/" style="margin: 10px 10px 0; display: block;">
				<img class="logo-white" src="/img/EINSTEIN-logo.svg" alt="einstein-logo" style="max-width: 70px;">
			</a>
			<div class="top-header__btn-inner">

				<div class="top-header__tel">
						<svg height="13.820739" width="6" xmlns="http://www.w3.org/2000/svg" fill="#002442" style="margin-right:10px;"><path d="m5.9331145 12.650191c-.1420656.15464-.284196.30089-.4345576.45134-.351081.27999-.7606216.50148-1.1910636.63936-.6351475.12955-1.2954741.10032-1.9265061-.0794-.4011799-.1212-.7312947-.39282-.9193438-.76056-1.93904702-3.7192803-1.94740764-8.1447903-.033443-11.8766103.2214916-.42214003.6100981-.74390003 1.0698024-.86510003.3426556-.0877.685376-.15043 1.023819-.15876.7940316-.0125 1.5546207.22983 2.1981937.67281.079393.0502.1295246.15043.1295246.25073 0 .0502-.020869.10860003-.050099.15045003l-1.6047196 2.6787c-.079393.13789-.2591142.18802-.4011799.1086l-.8609161-.47221c-.050131-.0293-.1002948-.0376-.1504264-.0376-.1713602 0-.3008849.13788-.3008849.30921v6.4230903c0 .17133.1295571.30925.3009173.30925.058492 0 .1169844-.0209.1671475-.0502l.4847537-.33012c.1295248-.0794.2883117-.0586.3886066.0418l2.0978664 2.18556c.050131.0586.079394.12955.079394.20895 0 .071-.029262.1421-.066886.20058z" stroke-width=".032405"/></svg>
					<a class="ringo-phone top-header__tel-link" href="tel:0443533143">  044 353-31-43</a>
				</div>

				<a class="top-header__callback-btn" id="mobile_callback_btn">Замовити дзвінок</a>


								<button class="top-header__btn" id="navigation_btn">
									<svg height="16" viewBox="0 0 68.151191 50.236034" width="24" xmlns="http://www.w3.org/2000/svg"><g fill="#ffffff" fill-opacity=".972549" stroke-width=".267416"><path d="m.267269 4.267269h68v8.404494h-68z"/><path d="m.116078 21.276194h68v8.404494h-68z"/><path d="m.151189 37.831539h68v8.404494h-68z"/></g></svg>
									<span>Меню</span>
								</button>

			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- / end top-header__inner -->
</header>
