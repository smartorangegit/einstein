<?php include_once('../../include/utm.php');
$fl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$fl = explode("-", $fl);
/*print_r ($fl);*/
$fl = $fl[3];
$fl = preg_replace('/[^0-9]/', '', $fl);
/*echo $fl;*/
$_SESSION['fl'] = $fl;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Планировки квартир на 2 этаже - ЖК EINSTEIN Concept House</title>
	<meta name="description" content="ЖК EINSTEIN Concept House - план 2 этажа. Выберите свою квартиру в центре Киева по ул. Златоустовская, 24А">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo str_replace('ru/', '', $_SERVER['REQUEST_URI'])?>" />
	<link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
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
<body class="body_flatplan">

	<div class="wrapper">
<?php include('../../include/header_darken_ru.php'); ?>
		<main class="content select-apartment">
			<div class="select-apartment__inner">
				<div class="select-apartment__caption-wrap">
					<h1 class="select-apartment__caption">Выберите квартиру на схеме</h1>
				</div>
				<!-- /end select-apartment__caption-wrap -->

				<div class="select-apartment__change-wrap">
					<div class="select-apartment__img-wrap">
						<div class="select-apartment__img-inner">
							<img src="/img/apartment/nav.png" alt="icon navigation">
						</div>
					</div>
					<div class="select-apartment__change-floor">
						<a href="/ru/select-apartment-floor-<?php if($fl>=10){echo 10;}else{echo $fl+1;}?>/"  class="select-apartment__change-floor-next">
							<img src="/img/apartment/arrow-up.svg" alt="arrow-up">
						</a>
						<div class="select-apartment__change-floor-inner">
							<span><?php if(empty($fl) || $fl == 0 || $fl == 1){echo 2;}else{  echo $fl; }?></span>
							<p>этаж</p>
						</div>
						<a href="/ru/select-apartment-floor-<?php if($fl<=2){echo 2;}else{echo $fl-1;}?>/" class="select-apartment__change-floor-prev">
							<img src="/img/apartment/arrow-down.svg" alt="arrow-down">
						</a>
					</div>
					<!-- / end select-apartment__change-floor -->
				</div>
				<!-- /end select-apartment-wrap-->

				<div class="select-apartment__apartments-wrap">
					<div class="select-apartment__apartments-inner">
						<svg height="525" viewBox="0 0 750 525" width="750" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						  <image height="525.22266" preserveAspectRatio="none" width="750" xlink:href="/img/select-apartment/selectapartment-2.png" y="0"/><g fill="none">
								<a class="svg_links 2A" xlink:href="/apartment.php?apart=2A_1_1_1" data-number="2A" data-square="77.1" data-flats="2">
									<path class="level-area" d="m 149.90665,271.60699 v 249.8444 H 18.856176 v -56.5685 H 7.5424664 v -82.0244 H 18.856176 V 164.12675 H 4.7140464 V 107.55821 H 20.741796 V 4.7920146 H 286.61397 V 271.60699 Z"/>
								</a>
								<a class="svg_links 2B" xlink:href="/apartment.php?apart=2B_1_1_4" data-number="2Б" data-square="76.11" data-flats="2">
									<path class="level-area" d="M 472.34736,0.07797463 H 740.10515 V 391.34379 h 5.65685 v 73.5391 h -6.59966 v 56.5685 H 609.05468 v -0.9428 0 -250.7872 H 481.77545 V 207.49597 H 476.1186 V 0.07797463 Z"/>
								</a>
								<a class="svg_links 1A" xlink:href="/apartment.php?apart=1C1_1_1_2" data-number="1A" data-square="46.32" data-flats="1">
									<path class="level-area" d="m 380.89488,269.72139 h 228.1598 v 248.9016 H 378.06645 v -248.9016 z"/>
								</a>
								<a class="svg_links 2B" xlink:href="/apartment.php?apart=1C2_1_1_3" data-number="1Б" data-square="46.32" data-flats="1">
									<path class="level-area" d="m 149.90665,271.60699 h 228.1598 v 247.016 H 145.1926 v -247.016 z"/>
								</a>
						</g>
					</svg>
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
											<span id="level">2</span>
											<p>количество комнат</p>
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
											<span id="level_1">2A</span>
											<p>код планировки</p>
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
											<span id="level_2">37.46</span>
											<p>жилая площадь м2</p>
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
											<span id="level_3">77.1</span>
											<p>общая площадь м2</p>
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
<?php include('../../include/footer_ru.php'); ?>
