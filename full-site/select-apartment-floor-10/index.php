<?php include_once('../include/utm.php');
$fl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$fl = explode("-", $fl);
/*print_r ($fl);*/
$fl = $fl[3];
$fl = preg_replace('/[^0-9]/', '', $fl);
/*echo $fl;*/
$_SESSION['fl'] = $fl;
?>
<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<title>Планування квартир на 10 поверсі - ЖК EINSTEIN Concept House</title>
	<meta name="description" content="ЖК EINSTEIN Concept House - план 10 поверху. Оберіть свою квартиру в центрі Києва по вул. Златоустівська, 24А">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
	<link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/main.min.css">
	<link rel="stylesheet" href="/css/apart.css">
	<style>
	@media (max-width: 750px) {.default .phoneRingo {color: #002442 !important;}}
		.phoneRingo1,	.phoneRingo {	color: #002442;	text-decoration: none;}
		.phoneRingo1::before,.phoneRingo::before {content: '044 ';}
		.top-callback__link_other:hover .phoneRingo{color: #fff;}
		.phoneRingo:hover {color:#fff;	text-decoration: none;}
		.phoneRingo:visited {color: #fff !important;	text-decoration: none !important;}
		.phoneRingo1:hover {color: #002442;	text-decoration: none;}
		.phoneRingo1:visited {color: #002442 !important;	text-decoration: none !important;}
		.default .phoneRingo1,.default .phoneRingo {	color: #fff;	text-decoration: none;}
		.default.phoneRingo1:hover {color: #002442;	text-decoration: none;}
		.default.phoneRingo1 {color: #002442;}
		.phoneRingo:visited {color: #002442 !important;text-decoration: none !important;}
	</style>
		<!-- Start Google Tag Manager -->
		<script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TCWCW9Z');</script>
	<!-- End Google Tag Manager -->
</head>
<body>

	<div class="wrapper">
<?php include('../include/header_darken.php'); ?>
		<main class="content select-apartment">
			<div class="select-apartment__inner">
				<div class="select-apartment__caption-wrap">
					<h1 class="select-apartment__caption">Оберіть квартиру на схемі</h1>
				</div>
				<!-- /end select-apartment__caption-wrap -->

				<div class="select-apartment__change-wrap">
					<div class="select-apartment__img-wrap">
						<div class="select-apartment__img-inner">
							<img src="/img/apartment/nav.png" alt="icon navigation">
						</div>
					</div>
					<div class="select-apartment__change-floor">
						<a href="/select-apartment-floor-<?php if($fl>=10){echo 10;}else{echo $fl+1;}?>/"  class="select-apartment__change-floor-next">
							<img src="/img/apartment/arrow-up.svg" alt="arrow-up">
						</a>
						<div class="select-apartment__change-floor-inner">
							<span><?php if(empty($fl) || $fl == 0 || $fl == 1){echo 2;}else{  echo $fl; }?></span>
							<p>поверх</p>
						</div>
						<a href="/select-apartment-floor-<?php if($fl<=2){echo 2;}else{echo $fl-1;}?>" class="select-apartment__change-floor-prev/">
							<img src="/img/apartment/arrow-down.svg" alt="arrow-down">
						</a>
					</div>
					<!-- / end select-apartment__change-floor -->
				</div>
				<!-- /end select-apartment-wrap-->

				<div class="select-apartment__apartments-wrap">
					<div class="select-apartment__apartments-inner">

						<svg height="490.36865" viewBox="0 0 700 490.36867" width="700" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						  <image height="490.36865" preserveAspectRatio="none" width="700" xlink:href="/img/select-apartment/selectapartment-10.png"/><g fill="none">
								<a class="svg_links" xlink:href="/apartment.php?apart=3R1_1_1_1" data-number="3В" data-square="117.83" data-flats="3">
									<path class="level-area" d="m122.29237 93.904695h135.44208v101.910305h-7.23235v51.28389h99.28036v233.40747h-218.28529v-3.94491h-11.83475v-383.971727h2.62995z"/>
								</a>
								<a class="svg_links" xlink:href="/apartment.php?apart=3R2_1_1_3" data-number="3Г" data-square="117.81" data-flats="3">
									<path class="level-area" d="m445.7754 92.589723h133.46962v383.971727h-14.46469v5.25989h-213.68289v-234.72245h95.33544v-51.28389h-7.23234v-97.307905h7.23234v-3.287429h-.65748z"/>
								</a>
						</g></svg>

					<style media="screen">
					.select-apartment__apartments-inner{background: #002442;border: 8px solid #002442;}	.select-apartment__apartments-inner svg{width: 100%; height: auto; pointer-events: none;}.level-area{transition: 0.4s; opacity: 0; fill: #ffffff;}	.svg_links{pointer-events: all;}.svg_links:hover .level-area{opacity: .5;}
					</style>

					</div>


				</div>
				<!-- /end select-apartment__apartments -->

				<div class="select-apartment__description-wrap">
					<div class="select-apartment__description">
						<div class="select-apartment__box box-left">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="select-apartment__box-inner">
											<span id="level">3</span>
											<p>кількість кімнат</p>
										</div>
								</div>
							</div>
							<!-- / end select-apartment__box -->
							<div class="select-apartment__box box-right">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="select-apartment__box-inner">
											<span id="level_1">3B</span>
											<p>код планування</p>
										</div>
								</div>
							</div>
							<!-- / end select-apartment__box -->
							<!--<div class="select-apartment__box box-left">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="select-apartment__box-inner">
											<span id="level_3">117,83</span>
											<p>житлова площа м2</p>
										</div>
								</div>
							</div>-->
							<!-- / end select-apartment__box -->
							<div class="select-apartment__box box-right">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="select-apartment__box-inner">
											<span id="level_3">117.83</span>
											<p>загальна площа м2</p>
										</div>
								</div>
							</div>
							<!-- / end select-apartment__box -->
					</div>
				</div>
				<!-- /end select-apartment__description -->
			</div>
			<!-- /end select-apartment__inner -->
		</main>
<?php include('../include/footer.php'); ?>
