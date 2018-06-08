<?php include_once('include/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Floor page</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/main.min.css">
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
</head>
<body>
	<div class="wrapper">
		
		<?php include('include/header_darken.php'); ?>

		<main class="content status-page">
			<div class="status-page__inner">

				<div class="status-page__descr-wrap">
					<div class="status-page__descr-inner">
						<h1 class="status-page__heading">Статус робіт</h1>
						<p class="status-page__description">Облаштування свайного поля завершено!</p>
					</div>
				</div>

				<div class="status-page__navIcon-wrap">
					<div class="status-page__navIcon-inner">
						<img src="img/status-page/navIcon.svg" alt="navigation icon">
					</div>
				</div>

				<div class="status-page__render-wrap">
					<div class="status-page__render-inner-wrap">
						<div class="status-page__render-inner">
							<img src="img/status-page/rend-bg.jpg" alt="render img bg">
						</div>
						<div class="status-page__status-rend-inner">
							<img src="img/status-page/stut-render.jpg" alt="status render img">
						</div>
					</div>
				</div>

				<div class="status-page__status-bar-wrap">
					<div class="status-page__status-bar-inner">
						<p class="status-page__status-bar-text">Ми регулярно повідомляємо про етапи виконання робіт, публікуючи фото-звіти.</p>
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
								<span class="point">1.8</span><sub>&#37;</sub>
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
								<span class="point">0</span><sub>&#37;</sub>
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
								<span class="point">0</span><sub>&#37;</sub>
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
								<span class="point">2.5</span><sub>&#37;</sub>
								<p>Мережі</p>
							</div>
							<!-- / end status-page__box-wrap -->

						</div>
					</div>
				</div>

				<div class="status-page__btn-bar-wrap">
					<div class="status-page__btn-bar-inner">
						<a class="status-page__btn status-page__btn_big" href="#">Дивитися хід будівнитва</a>
						<a class="status-page__btn status-page__btn_sm" href="/webcamera/">Веб-камера</a>
						<p class="status-page__btn-bar-text">Введення в експлуатацію: кінець 2018</p>
						<a class="status-page__btn status-page__btn_sm" href="#">Докладніше</a>
					</div>
				</div>

			</div>
			<!-- /end status-page__inner -->

		</main>

<?php include('include/footer.php'); ?>
