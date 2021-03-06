<?php include_once('../include/utm.php');
include("../admin/bd.php");
?>

<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>≡ ЖК Ейнштейн 》 Хід будівництва житлового комплексу EINSTEIN Concept House</title>
	<meta name="description" content="【Хід будівництва】EINSTEIN Concept House - розумний будинок з централізованим управлі ... ✅【EINSTEIN】 Дистанційний контроль за споживанням електроенергії, газу та води онлайн ... ✅【EINSTEIN】 Доступ до під'їзду по відбитку пальця, тротуар з підігрівом, відеоспостереж ... ✅【EINSTEIN】 - це технологічність в історичному центрі Києва!">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI']; ?>"/>
	<link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru' . $_SERVER['REQUEST_URI']; ?>"/>
	<link rel="canonical" href="<?php echo 'https://' . $_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI']; ?>"/>
	<link rel="stylesheet" href="/css/main-style.min.css">
	<?php include('../include/gtm_h.php'); ?>
	<style>	a.img_link {	width: 100%;	height: auto;	display: block;	margin: auto;	padding: auto;}.construction__link {	text-decoration: none;	cursor: pointer;}	</style>
</head>
<body>

<div class="wrapper">
	<?php include('../include/header.php'); ?>
	<main class="content">

		<section class="status-page">
			<div class="status-page__inner">

				<div class="status-page__descr-wrap">
					<div class="status-page__descr-inner">
						<h1 class="status-page__heading">Хід будівництва</h1>
						<p class="status-page__description" style="font-size: 0.875em;">
Монтаж вікон на 9-му поверсі. Триває утеплення фасаду. Проводяться роботи з улаштування цегляних внутрішніх перегородок цокольних і мансардних поверхів. 
Триває прокладання внутрішніх електромереж та монтаж сантехнічного обладнання на 9 поверсі. На 1 поверсі виконані роботи з гідроізоляції. Розпочато заливку стяжок на 7 поверсі.

						</p>
					</div>
				</div>
<style>
 .status-page__heading {margin-top: -30px;}
.status-page__descr-inner {margin: 8px 0 0 auto;}
</style>
				<div class="status-page__navIcon-wrap">
					<div class="status-page__navIcon-inner">
						<img src="/img/status-page/navIcon.svg" alt="navigation icon">
					</div>
				</div>

				<div class="status-page__render-wrap">
					<div class="status-page__render-inner-wrap">
						<div class="status-page__render-inner">
							<img src="/img/status-page/rend-bg.jpg" alt="render img bg">
						</div>
						<div class="status-page__status-rend-inner">
							<img src="/img/status-page/stut-render.jpg" alt="status render img">
						</div>
					</div>
				</div>

				<!--
					New component 4x "status-page__stat" in status-page__box-wrap
					Alex-K 17/08/17
				-->
                <?$perstSelect = $DB->query("SELECT * FROM `pers`");
                while ($rowPers= mysqli_fetch_array($perstSelect)) {
//print_r($rowPers['perOpis_1']);
                    $op1Dump = explode("/",$rowPers['perOpis_1']);
                    $op2Dump = explode("/",$rowPers['perOpis_2']);
                    $op3Dump = explode("/",$rowPers['perOpis_3']);
                    $op4Dump = explode("/",$rowPers['perOpis_4']);
                    ?>
				<div class="status-page__status-bar-wrap">
					<div class="status-page__status-bar-inner">
						<p class="status-page__status-bar-text">Ми регулярно повідомляємо про етапи виконання робіт,
							публікуючи фото-звіти.</p>
						<div class="status-page__status-bar">

							<div class="status-page__box-wrap">
								<div class="status-page__box">
									<div class="box-corner">
										<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="status-page__box-inner statBar"></div>
									</div>
								</div>

								<div class="status-page__stat">
									<div class="box-corner">
										<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
									</div>
									<ul class="status-page__stat-list">
										<li class="status-page__stat-item">
											<p class="status-page__stat-text">Роботи до відм. 0,000 - <span><?=$op1Dump[0];?>%</span></p>
										</li>
										<li class="status-page__stat-item">
											<p class="status-page__stat-text">каркас - <span><?=$op1Dump[1];?>%</span></p>
										</li>
										<li class="status-page__stat-item">
											<p class="status-page__stat-text">цегляна кладка - <span><?=$op1Dump[2];?>%</span></p>
										</li>
										<!-- <li class="status-page__stat-item">
											<p class="status-page__stat-text">внутрішнє опорядження - <span><?=$op1Dump[3];?>%</span>
											</p>
										</li> -->
									</ul>
								</div>
								<!--/ END status-page__stat-->

								<span class="point"><?=$rowPers['persent_1'];?></span><sub>&#37;</sub>
								<p>Загально будівельні роботи:</p>
							</div>
							<!-- / end status-page__box-wrap -->

							<div class="status-page__box-wrap">
								<div class="status-page__box">
									<div class="box-corner">
										<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="status-page__box-inner statBar"></div>
									</div>
								</div>
								<span class="point"><?=$rowPers['persent_2'];?></span><sub>&#37;</sub>
								<p>Благоустрій</p>
							</div>
							<!-- / end status-page__box-wrap -->

							<div class="status-page__box-wrap">
								<div class="status-page__box">
									<div class="box-corner">
										<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="status-page__box-inner statBar"></div>
									</div>
								</div>
								<div class="status-page__stat status-page__facade">
									<div class="box-corner">
										<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
									</div>
									<ul class="status-page__stat-list">
										<li class="status-page__stat-item">
											<p class="status-page__stat-text">вікна -<span><?=$op3Dump[0];?>%</span></p>
										</li>
										<li class="status-page__stat-item">
											<p class="status-page__stat-text">фасад - <span><?=$op3Dump[1];?>%</span></p>
										</li>
									</ul>
								</div>
								<!--/ END status-page__stat-->
								<span class="point"><?=$rowPers['persent_3'];?></span><sub>&#37;</sub>
								<p>Фасад</p>
							</div>
							<!-- / end status-page__box-wrap -->

							<div class="status-page__box-wrap">
								<div class="status-page__box">
									<div class="box-corner">
										<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
										<div class="status-page__box-inner statBar"></div>
									</div>
								</div>
								<div class="status-page__stat status-page__networks">
									<div class="box-corner">
										<div class="box-corner__top box-corner__left"></div>
										<div class="box-corner__top box-corner__right"></div>
										<div class="box-corner__bottom box-corner__right"></div>
										<div class="box-corner__bottom box-corner__left"></div>
									</div>
									<ul class="status-page__stat-list">
										<li class="status-page__stat-item">
											<p class="status-page__stat-text">зовнішні -<span><?=$op4Dump[0];?>%</span></p>
										</li>
										<li class="status-page__stat-item">
											<p class="status-page__stat-text">внутрішні - <span><?=$op4Dump[1];?>%</span></p>
										</li>
									</ul>
								</div>
								<!--/ END status-page__stat-->
								<span class="point"><?=$rowPers['persent_4'];?></span><sub>&#37;</sub>
								<p>Мережі</p>
							</div>
							<!-- / end status-page__box-wrap -->

						</div>
					</div>
				</div>
                <?}?>
<!---->
				<div class="status-page__btn-bar-wrap">
					<div class="status-page__btn-bar-inner">
					<a class="status-page__btn status-page__btn_big constBtn" href="/documentation/">Документація</a>
						<a class="status-page__btn status-page__btn_big constBtn" href="#construction">Дивитися хід
						будівництва</a>
						<a class="status-page__btn status-page__btn_sm" href="/webcamera/">Веб-камера</a>
						<!--<p class="status-page__btn-bar-text">Введення в експлуатацію: ΙV квартал 2018 року</p>-->
						<a class="status-page__btn status-page__btn_sm constBtn" href="#construction">Докладніше</a>
					</div>
				</div>

			</div>
			<!-- /end status-page__inner -->

		</section>


		<div class="construction" id="construction">
			<div class="construction__inner">
				<div class="construction__page-caption">
					<h2 class="construction__caption">Будівництво</h2>
					<!--<p class="construction__top-text">Завершення будівництва – II квартал 2018 року</p>-->
				</div>
			<?php/*	<ul class="construction__stutas">
					<li class="construction__stutas-descr">
						<div class="construction__stutas-inner">
							<p class="construction__description">Будівельні роботи</p>
							<p class="construction__text">Роботи по облаштуванню фундаменту</p>
						</div>
					</li>
					<li class="construction__stutas-descr">
						<div class="construction__stutas-inner">
							<h3 class="construction__description">Запланований термін завершення будівництва</h3>
							<p class="construction__text">I квартал 2018 року</p>
						</div>
					</li>
				</ul> */?>
				<ul class="construction__list">
					<!-- начало блока с фото -->
					<?
					$sel = $DB->query("SELECT * FROM `hod_stroy` WHERE `isActive`=0 ORDER BY `date` DESC");
					while ($myrow = mysqli_fetch_array($sel)) {
						$pieces = explode("*/*", $myrow['ar_imgs']);
						?>
						<li class="construction__item">
							<div class="construction__link">
								<div class="construction__date-time">
									<div class="construction__const-time">
										<img src="/img/construction/clock.svg" alt="clock">
										<span><?= $myrow['time']; ?></span>
									</div>
									<div class="construction__date">
										<img src="/img/construction/calendar.svg" alt="calendar">
										<span><?= $myrow['date']; ?></span>
									</div>
								</div>
								<!-- /end const__date-time -->
								<div class="construction__img_container">
									<a class="img_link" href="<?= $myrow['path'] . '/' . $pieces[0]; ?>"
									data-fancybox="<?= $myrow['sumb_cod']; ?>"
									data-caption="<?= $myrow['hod_full_ua']; ?>">
										<img class="construction__pic" src="<?= $myrow['path'] . '/' . $pieces[0]; ?>"
											alt="<?= $pieces[0]; ?>">
									</a>
								</div>
								<? $cc = count($pieces);
								//echo $cc;
								for ($n = 1; $n < $cc; $n++) {

										?><a data-fancybox="<?= $myrow['sumb_cod']; ?>"
											 href="<?= $myrow['path'] . '/' . $pieces[$n]; ?>"
											 data-caption="<?= $myrow['hod_full_ua']; ?>"></a><?

								}

								?>
								<!-- <img class="construction__pic" src="/img/construction/gal-1906/ex2.jpg" alt="img"> -->
								<div class="construction__blok-inner">
									<div class="construction__description"><?= $myrow['hod_name_ua']; ?></div>
									<p class="construction__text"><?= $myrow['hod_full_ua']; ?></p>
								</div>


							</div>

							<!-- / end const -->
						</li>
					<?	} ?>
					<!-- /end construction__item -->
					<? /*
					<li class="construction__item">
						<div class="construction__link" id="btnClick090617">
							<div class="construction__date-time">
								<div class="construction__const-time">
									<img src="/img/construction/clock.svg" alt="clock">
									<span>11:55</span>
								</div>
								<div class="construction__date">
									<img src="/img/construction/calendar.svg" alt="calendar">
									<span>09.06.17</span>
								</div>
							</div>
							<!-- /end const__date-time -->
							<img class="construction__pic" src="/img/construction/gal-0906/ex1.jpg" alt="img">
							<div class="construction__blok-inner">
								<p class="construction__description">Будівельні роботи</p>
								<p class="construction__text">Облаштування опалубки ліфтової та сходової шахти.</p>
							</div>
						</div>
						<!-- / end const -->
					</li>
					<!-- /end construction__item -->

					<li class="construction__item">
						<div class="construction__link" id="btnClick020617">
							<div class="construction__date-time">
								<div class="construction__const-time">
									<img src="/img/construction/clock.svg" alt="clock">
									<span>13:42</span>
								</div>
								<div class="construction__date">
									<img src="/img/construction/calendar.svg" alt="calendar">
									<span>02.06.17</span>
								</div>
							</div>
							<!-- /end const__date-time -->
							<img class="construction__pic" src="/img/construction/gal-0206/ex3.jpg" alt="img">
							<div class="construction__blok-inner">
								<p class="construction__description">Будівельні роботи</p>
								<p class="construction__text">Облаштування вертикальних елементів 1-го поверху</p>
							</div>
						</div>
						<!-- / end const -->
					</li>
                    */ ?>
					<!-- /end construction__item -->


				</ul>
				<!-- / end construction__list -->
				<!-- <div class="pagination">
					<a class="active" href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div> -->
			</div>
			<!-- /end construction__inner -->
		</div>
		<!-- /end construction -->
	</main>
	<link rel="stylesheet" href="/css/jquery.fancybox.css">
	<?php include('../include/footer.php'); ?>
	<script src="/js/jquery.fancybox.js"></script>
