<?php include_once('../include/utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Планировка и технические характеристики квартиры <?=str_replace('/', '', $_GET['apart']) . '-' . $_SESSION['fl'] . ' ';?> - ЖК EINSTEIN Concept House</title>
	<meta name="description" content="ЖК EINSTEIN Concept House - план и характеристики квартиры <?=str_replace('/', '', $_GET['apart']) . '-' . $_SESSION['fl'] . ' ';?>. Выберите свою квартиру в центре Киева по ул. Златоустовская, 24А">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'] . '/floorpage/' ?>"/>
	<link rel="stylesheet" href="/css/main-style.min.css">
	<?php include('../../include/gtm_h.php'); ?>

</head>
<body>

	<div class="wrapper">
<?php include('../include/header_ru.php'); ?>
<?php include('../DB.php');
//



$bt_up = $_SESSION['fl']+1;
$bt_down = $_SESSION['fl']-1;
$_SESSION['z'] = $_SERVER['REQUEST_URI'];

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link;
$mApart = "https://einstein.smarto.com.ua/apartment.php";
$mApart2 = "https://einstein.smarto.com.ua/apartment.php?";
if($actual_link == $mApart || $actual_link == $mApart2 ){
	header("Location: https://einstein.smarto.com.ua/apartment.php?apart=2A");

}

$tips = str_replace('/', '', $_GET['apart']);

// $row = mysql_query("SELECT * FROM aparts where type='$tips'" ,$DB);
$check0 = $db->query("SELECT * FROM aparts where type='$tips'");



while ($currow = mysqli_fetch_array($check0))
{

echo "<pre>";
//print_r($currow);
echo "</pre>";
/*
peredpokiy kuhnia vitalnia vanna sanvuzol sanvuzol_2 lodzhia spalnia balkon kuhnia-vitalnia holl spalnia_1 spalnia_2  spalnia_3  terasa  garderob  zhitlova  zagalna
*/
if(empty($currow['peredpokiy'])){
	$hidd_peredpokiy = "style='display:none;'";
}
if(empty($currow['kuhnia'])){
	$hidd_kuhnia = "style='display:none;'";
}
if(empty($currow['vitalnia'])){
	$hidd_vitalnia = "style='display:none;'";
}
if(empty($currow['vanna'])){
	$hidd_vanna = "style='display:none;'";
}
if(empty($currow['sanvuzol'])){
	$hidd_sanvuzol = "style='display:none;'";
}
if(empty($currow['sanvuzol_2'])){
	$hidd_sanvuzol_2 = "style='display:none;'";
}
if(empty($currow['lodzhia'])){
	$hidd_lodzhia = "style='display:none;'";
}
if(empty($currow['spalnia'])){
	$hidd_spalnia = "style='display:none;'";
}
if(empty($currow['balkon'])){
	$hidd_balkon = "style='display:none;'";
}
if(empty($currow['kuhnia-citalnia'])){
	$hidd_kuhVit = "style='display:none;'";
}
if(empty($currow['holl'])){
	$hidd_holl = "style='display:none;'";
}
if(empty($currow['spalnia_1'])){
	$hidd_spalnia_1 = "style='display:none;'";
}
if(empty($currow['spalnia_2'])){
	$hidd_spalnia_2 = "style='display:none;'";
}
if(empty($currow['spalnia_3'])){
	$hidd_spalnia_3 = "style='display:none;'";
}
if(empty($currow['terasa'])){
	$hidd_terasa = "style='display:none;'";
}
if(empty($currow['garderob'])){
	$hidd_garderob = "style='display:none;'";
}

//В базе забиты названия типов на англ, 2V, 3G надо рус, на данный момент 11.09 делалось на тестовом, дабы не ломать прод, если еще стоит данная приблуда надо исправить -- Андрей
//Поменяй названия в базе и названия изображений, также заменить все $currow['type_text'] на $currow['type']; 2 шт.
switch ($currow['type']) {
	case '2V':
		$currow['type_text'] = '2В';
		break;
	case '2B':
		$currow['type_text'] = '2Б';
		break;
	case '1B':
		$currow['type_text'] = '1Б';
		break;
	case '3B':
		$currow['type_text'] = '3Б';
		break;
	case '3V':
		$currow['type_text'] = '3В';
		break;
	case '3G':
		$currow['type_text'] = '3Г';
		break;
	case '2G':
		$currow['type_text'] = '2Г';
		break;
	default:
		$currow['type_text'] = $currow['type'];
		break;
}
?>
		<main class="content blok-apartment">
			<div class="blok-apartment__inner">
				<div class="blok-apartment__caption-wrap">

					<div class="blok-apartment__change-wrap">

						<div class="blok-apartment__change-floor">
							<button class="blok-apartment__change-floor-next">
								<a  href="/ru/select-apartment-floor-<?if($bt_up <= 10){echo $bt_up;}else{$bt_up=2; echo $bt_up;}?>"  class="ar_btn">
									<img src="/img/apartment/arrow-up.svg" alt="arrow-up">
								</a>
							</button>
							<div class="blok-apartment__change-floor-inner">
								<span><?=$_SESSION['fl'];?></span>
								<p>этаж</p>
							</div>
							<button class="blok-apartment__change-floor-prev">
								<a href="/ru/select-apartment-floor-<?if($bt_down >= 2){echo $bt_down;}else{$bt_down=2; echo $bt_down;}?>" class="ar_btn">
									<img src="/img/apartment/arrow-down.svg" alt="arrow-down">
								</a>
							</button>
						</div>
						<!-- / end select-apartment__box -->
						<div class="blok-apartment__box">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="blok-apartment__link-wrap">
											<a class="blok-apartment__link-btn" style="text-align: center;" href="/ru/floorpage">Выбрать этаж</a>
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
											<a class="blok-apartment__link-btn" style="text-align: center;" href="/ru/select-apartment-floor-<?=$_SESSION['fl'];?>">К плану этажа</a>
										</div>
								</div>
						</div>
						<!-- / end select-apartment__box -->
						<div class="blok-apartment__box">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="blok-apartment__link-wrap">
											<a class="blok-apartment__link-btn" id="callback-btn3" style="text-align: center;" href="#">Узнать цену</a>
										</div>
								</div>
						</div>
						<!-- / end select-apartment__box -->
						<!-- / end select-apartment__change-floor -->
					</div>

					<div class="blok-apartment__description-wrap">
						<div class="blok-apartment__description">
							<h1 class="blok-apartment__caption">Квартира <?=$currow['type_text'];?></h1>
							<div class="blok-apartment__box">
								<div class="box-corner">
									<div class="box-corner__top box-corner__left"></div>
									<div class="box-corner__top box-corner__right"></div>
									<div class="box-corner__bottom box-corner__right"></div>
									<div class="box-corner__bottom box-corner__left"></div>
									<div class="blok-apartment__box-inner">
										<ul class="blok-apartment__list">
											<li class="blok-apartment__descr">Площадь<span>м<sup>2</sup></span></li>

											<li class="blok-apartment__item">Коридор<span><?=$currow['peredpokiy'];?></span></li>
											<li <?=$hidd_holl;?> class="blok-apartment__item">Холл<span><?=$currow['holl'];?></span></li>
											<li <?=$hidd_kuhVit;?> class="blok-apartment__item">Кухня-гостиная<span><?=$currowp['kuhnia-vitalnia'];?></span></li>
											<li <?=$hidd_kuhnia;?> class="blok-apartment__item">Кухня<span><?=$currow['kuhnia'];?></span></li>
											<li <?=$hidd_vitalnia;?> class="blok-apartment__item">Гостиная<span><?=$currow['vitalnia'];?></span></li>
											<li <?=$hidd_spalnia_1;?> class="blok-apartment__item">Спальня 1<span><?=$currow['spalnia_1'];?></span></li>
											<li <?=$hidd_spalnia_2;?> class="blok-apartment__item">Спальня 2<span><?=$currow['spalnia_2'];?></span></li>
											<li <?=$hidd_spalnia_3;?>class="blok-apartment__item">Спальня 3<span><?=$currow['spalnia_3'];?></span></li>
											<li <?=$hidd_spalnia;?> class="blok-apartment__item">Спальня<span><?=$currow['spalnia'];?></span></li>
											<li <?=$hidd_sanvuzol;?> class="blok-apartment__item">Санузел<span><?=$currow['sanvuzol'];?></span></li>
											<li <?=$hidd_sanvuzol_2;?> class="blok-apartment__item">Санузел 2<span><?=$currow['sanvuzol_2'];?></span></li>
											<li <?=$hidd_vanna;?> class="blok-apartment__item">Ванная<span><?=$currow['vanna'];?></span></li>
											<li <?=$hidd_garderob;?> class="blok-apartment__item">Гардероб<span><?=$currow['garderob'];?></span></li>
											<li <?=$hidd_balkon;?> class="blok-apartment__item">Балкон<span><?=$currow['balkon'];?></span></li>
											<li <?=$hidd_terasa;?> class="blok-apartment__item">Терраса<span><?=$currow['terasa'];?></span></li>


											<?/* <li class="blok-apartment__all">Жилая<span><?=$currow['zhitlova'];?></span></li> */?>
											<li class="blok-apartment__all">Общая<span><?=$currow['zagalna'];?></span></li>
										</ul>
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
												<a class="blok-apartment__link-btn" href="../img/plans/<?=$currow['type'];?>.png" target="_blank">Скачать план</a>
											</div>
									</div>
							</div>


						</div>
					</div>
				</div>
					<!-- /end select-apartment__description-wrap -->
					<div class="blok-apartment__apartments-wrap">
						<div class="blok-apartment__apartments-inner">
							<img src="/img/app/<?=$currow['type'];?>.png" alt="apartment plan">
						</div>
					</div>
					<!-- /end select-apartment__apartments -->


			</div>
			<!-- /end blok-apartment-inner-->

		</main>
<?
}
?>

<?php include('../include/footer_ru.php'); ?>
