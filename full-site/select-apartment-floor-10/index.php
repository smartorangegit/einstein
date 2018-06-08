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
	@media (max-width: 750px) {
	 .default .phoneRingo {
			color: #002442 !important;
		}
	
	}
		.phoneRingo1,
		.phoneRingo {
			color: #002442;
			text-decoration: none;
		}
		.phoneRingo1::before,
		.phoneRingo::before {
			content: '044 ';
		}
		.top-callback__link_other:hover .phoneRingo{
			color: #fff;
		}
		.phoneRingo:hover {
			color: #fff;
			text-decoration: none;
		}
		.phoneRingo:visited {
			color: #fff !important;
			text-decoration: none !important;
		}
		.phoneRingo1:hover {
			color: #002442;
			text-decoration: none;
		}
		.phoneRingo1:visited {
			color: #002442 !important;
			text-decoration: none !important;
		}
		.default .phoneRingo1,
		.default .phoneRingo {
			color: #fff;
			text-decoration: none;
		}
		.default.phoneRingo1:hover {
			color: #002442;
			text-decoration: none;
		}


		.default.phoneRingo1 {
			color: #002442;
		}
		.phoneRingo:visited {
			color: #002442 !important;
			text-decoration: none !important;
		}
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
<?if($fl >= 2 && $fl <=6 ){?>
<div class="select-apartment__apartments-inner">
						<img src="/img/select-apartment/selectapartment.png" alt="apartment plan" usemap="#Map" id="img_1">
</div>
<map name="Map" id="Map" >
    <area class="2a" alt="2a" title="" href="../apartment.php?apart=2A/" shape="poly" coords="90,174,90,325,5,325,4,36,90,35,90,9,172,9,172,172" />
    <area class="1a" alt="1a" title="" href="../apartment.php?apart=1A/" shape="poly" coords="90,172,232,172,230,325,90,327" />
    <area class="1b" alt="1b" title="" href="../apartment.php?apart=1B/" shape="poly" coords="375,172,232,172,230,325,375,325" />
    <area class="2b" alt="2b" title="" href="../apartment.php?apart=2B/" shape="poly" coords="374,325,450,325,450,36,370,36,370,9,290,9,290,172,374,172" />
    
</map>
<?}
elseif($fl >= 7 && $fl <=8 ){?>
<div class="select-apartment__apartments-inner">
					<img src="/img/select-apartment/selectapartment7-8.jpg" alt="apartment plan" usemap="#Map_2" id="img_2" />
</div>
<map name="Map_2" id="Map_2">
    <area class="3a" alt="3a" title="" href="../apartment.php?apart=3A/" shape="poly" coords="167,5,90,5,90,32,3,32,6,324,233,324,232,166,171,168" />
    <area class="3b" alt="3b" title="" href="../apartment.php?apart=3B/" shape="poly" coords="290,5,373,5,373,30,460,36,460,320,232,322,232,168,293,168" />
   
</map>
<?}
elseif($fl == 9){
?>
<div class="select-apartment__apartments-inner">
					<img src="/img/select-apartment/selectapartment9.jpg" alt="apartment plan" usemap="#Map_3" id="img_3" />
</div>

<map name="Map_3" id="Map_3">
    <area class="2v" alt="2v" title="" href="../apartment.php?apart=2V/" shape="poly" coords="146,170,147,129,172,130,171,5,89,6,89,36,6,34,6,323,89,323,90,173" />
    <area class="3v_1" alt="3v_1" title="" href="../apartment.php?apart=3V/" shape="poly" coords="232,323,89,323,89,171,232,171" />
    <area class="3g_1" alt="3g_1" title="" href="../apartment.php?apart=3G/" shape="poly" coords="232,323,232,171,376,171,376,323" />
    <area class="2g" alt="2g" title="" href="../apartment.php?apart=2G/" shape="poly" coords="320,171,320,130,291,133,291,5,377,5,379,37,459,37,462,324,376,324,376,165" />
</map>
<?}
elseif($fl == 10){?>
<div class="select-apartment__apartments-inner">
					<img src="/img/select-apartment/selectapartment10.jpg" alt="apartment plan" usemap="#Map_4" id="img_4" />
</div>

<map name="Map_4" id="Map_4">
    <area class="3v_2" alt="3v" title="" href="../apartment.php?apart=3V/" shape="poly" coords="232,317,88,318,87,95,166,95,169,164,232,161" />
    <area class="3g_2" alt="3g" title="" href="../apartment.php?apart=3G/" shape="poly" coords="238,316,236,163,299,163,300,95,377,97,379,319" />
    
</map>
<?}?>	
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
											<span id="level_1">2a</span>
											<p>код планування</p>
										</div>
								</div>
							</div>
							<!-- / end select-apartment__box -->
							<div class="select-apartment__box box-left">
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
							</div>
							<!-- / end select-apartment__box -->
							<div class="select-apartment__box box-right">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="select-apartment__box-inner">
											<span id="level_2">37.46</span>
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

