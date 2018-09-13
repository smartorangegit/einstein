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
	<title>Планування квартир на 9 поверсі - ЖК EINSTEIN Concept House</title>
	<meta name="description" content="ЖК EINSTEIN Concept House - план 9 поверху. Оберіть свою квартиру в центрі Києва по вул. Златоустівська, 24А">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
	<link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<link rel="stylesheet" href="/css/main-style.min.css">
	<?php include('../include/gtm_h.php'); ?>

</head>
<body class="body_flatplan">

	<div class="wrapper">
<?php include('../include/header.php'); ?>
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
						<a href="/select-apartment-floor-<?php if($fl<=2){echo 2;}else{echo $fl-1;}?>/" class="select-apartment__change-floor-prev">
							<img src="/img/apartment/arrow-down.svg" alt="arrow-down">
						</a>
					</div>
					<!-- / end select-apartment__change-floor -->
				</div>
				<!-- /end select-apartment-wrap-->

				<div class="select-apartment__apartments-wrap">
					<div class="select-apartment__apartments-inner">
						<svg height="545.66034" viewBox="0 0 749.99997 545.66036" width="750" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						  <image height="545.66034" preserveAspectRatio="none" width="750" xlink:href="/img/select-apartment/selectapartment-9.png"/><g fill="none">
								<a class="svg_links" xlink:href="/apartment.php?apart=2P1_1_1_1" data-number="2B" data-square="72.83" data-flats="2">
									<path class="level-area" d="m-.00000191-.00000006h277.28172191v212.53716006h-67.39486v65.4693h-69.32043v258.98883h-134.7897319v-536.99529006z"/>
								</a>
								<a class="svg_links" xlink:href="/apartment.php?apart=3R2_1_1_3" data-number="3Г" data-square="117.81" data-flats="3">
									<path class="level-area" d="m374.52288 278.00646v258.98883h236.8448v-261.87718h-236.8448z"/>
								</a>
								<a class="svg_links" xlink:href="/apartment.php?apart=3R1_1_1_1" data-number="3В" data-square="117.83" data-flats="3">
									<path class="level-area" d="m140.56643 536.99529h233.95645v-261.87718h-233.95645z"/>
								</a>
								<a class="svg_links" xlink:href="/apartment.php?apart=2P2_1_1_4" data-number="2Г" data-square="72.85" data-flats="2">
									<path class="level-area" d="m471.76404 1.6875207h274.39337v533.3821993h-134.78973v-260.9144h-74.13435v-60.65537h-65.46929v-206.9985106z"/>
								</a>
						</g></svg>


					<style media="screen">

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
											<span id="level_1">2В</span>
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
											<span id="level_3">73.77</span>
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
											<span id="level_3">72.83</span>
											<p>загальна площа м2</p>
										</div>
								</div>
							</div>
							<!-- / end select-apartment__box -->
							<div class="blok-apartment__box box-left">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="blok-apartment__link-wrap">
											<a class="blok-apartment__link-btn" href="/floorpage">Повернутися до вибору поверху</a>
										</div>
								</div>
						</div>
					</div>
				</div>
				<!-- /end select-apartment__description -->
			</div>
			<!-- /end select-apartment__inner -->
		</main>
<?php include('../include/footer.php'); ?>
