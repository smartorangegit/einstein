<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Купить двухкомнатную квартиру с удачным расположением по ул. Златоустовская в EINSTEIN Concept House</title>
	<meta name="description" content="EINSTEIN Concept House предлагает большой выбор двухкомнатных квартир, вы можете сами создать планировку под свои нужды г. Киев, ул. Златоустовская, 24А">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/main.min.css">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo str_replace('ru/', '', $_SERVER['REQUEST_URI'])?>" />
    <link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<style>
	@media (max-width: 750px) {
	 .default .phoneRingo {	color: #002442 !important;}	}
		.phoneRingo1,	.phoneRingo {	color: #002442;	text-decoration: none;}
		.phoneRingo1::before,.phoneRingo::before {	content: '044 ';}
		.top-callback__link_other:hover .phoneRingo{	color: #fff;}
		.phoneRingo:hover {	color: #fff;	text-decoration: none;}
		.phoneRingo:visited {	color: #fff !important;	text-decoration: none !important;}
		.default .phoneRingo1,.default .phoneRingo {	color: #fff;}
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
	<?php include('../../../DB.php');

	$fl = $db->query("SELECT * FROM aparts WHERE rooms='2'");

	?>


	<div class="wrapper">
	<?php include('../../../include/header_ru.php'); ?>
	<main class="content news-page typeflats__page">
		<ul class="floor-link">
			<li><a class="floor_link_item" href="/ru/floorpage/odnokomnatnye-kvartiry/">1 комнатные квартиры</a></li>
			<li class="floor_link_item floor_link_active">2 комнатные квартиры</li>
			<li><a class="floor_link_item" href="/ru/floorpage/trehkomnatnye-kvartiry/">3 комнатные квартиры</a></li>
			<li><a class="floor_link_item" href="/ru/floorpage/dvuhurovnevye-kvartiry/">Двухуровневые квартиры</a></li>
		</ul>

		<div class="number_floor__box">
			<ul class="result__list with-empty-cells">
				<!-- ОДНА ИЗ КВАРТИР -->
								<?while ($app = mysqli_fetch_array($fl)) {
										//print_r($app);
								?>
				<li class="sort result__item cell">
					<div class="result__item__inner">
						<div class="result__img">
							<img src="/img/app/<?=$app['type'];?>.png" alt="">
						</div>
						<table class="table_results">
							<tr><td>Тип </td>     <td><?=$app['type_user']?></td></tr>
							<tr><td>Этаж </td><td><?=$app['poverx']?></td></tr>
							<tr><td>Количество комнат </td><td><?=$app['rooms']?></td></tr>
							<tr><td>Общая площадь   </td><td><?=$app['zagalna']?></td></tr>
						</table>
					</div>
					<a class="location__link" href="/apartment.php?apart=<?=$app['type'];?>" title="Квартира <?=$app['type_user']?>">Дивитися квартиру</a>
				</li>
<?}?>
			</ul>

		</div>

		<div class="typeflats__descr">
				<h1 class="news-page__caption">Просторные двухкомнатные квартиры в EINSTEIN Concept House</h1>
				<div class="news-page__content">
					<p class="news-page__text">
						Жилой комплекс EINSTEIN Concept House – это особый дом для людей, которые уже сегодня хотят ощутить преимущества технологий
						завтрашнего дня. Это не просто дом в самом сердце Киева. Это умный дом в центре столицы! На десяти его этажах располагается
						20 квартир, и в каждой из них предусмотрена наивысшая степень технологичности и безопасности.
					</p>
					<p class="news-page__text">
						Централизованное управление всеми функциями дома, экономичные сценарии использования энергоресурсов, инновационные системы
						безопасности, которые защищают жильцов от проникновения сторонних лиц и возникновения аварийных ситуаций в доме. Это и многое
						другое вы приобретаете вместе с квадратными метрами, а, значит, инвестируете не просто в жилье, но и в комфорт, безопасность,
						энергоэффективность.
					</p>

					<h2 class="news-feed__description">Удобство расположения</h2>
					<p class="news-page__text">
						EINSTEIN Concept House располагается на Златоустовской, тихой улочке в трех минутах от площади Победы и одноименного проспекта
						в центре столицы. Это исторический центр города, проживание в котором означает удобную транспортную развязку, легкую доступность
						развлекательных, образовательных, медицинских учреждений, модных бутиков и продуктовых магазинов.
					</p>
					<p class="news-page__text">
						В новом доме EINSTEIN Concept House можно купить однокомнатную, двухкомнатную и трехкомнатную квартиру. Самым оптимальным
						и универсальным вариантом можно назвать «двушки», ведь они –  золотая середина, сочетающая пространство и доступную стоимость.
						Двухкомнатные квартиры на улице Златоустовская удобны для проживания молодой семьи, с детьми или без. Они же будут
						замечательным решением и для проживания одного человека. Стоимость квадратного метра не отличается от цены однокомнатных
						квартир, зато здесь на порядок больше места, которое можно обустроить по собственному вкусу, в том числе и с перспективой
						пополнения семьи.
					</p>

					<h2 class="news-feed__description">Простота ремонта и обустройства</h2>
                    <p class="news-page__text">
						В EINSTEIN Concept House вам удастся купить двухкомнатную квартиру без посредников, по самым выгодным условиям.
					</p>
					<p class="news-page__text">
						Какой бы ремонт вы не затеяли, беспокоиться об энергоэффективности и безопасности квартиры вам не придется. Мы все сделали за вас!
						Во всех двухкомнатных квартирах в EINSTEIN Concept House предусмотрено централизованное управление электроэнергией – контролируйте
						работу электроприборов, радиаторов, климат контроля как с любой точки квартиры, так и со своего смартфона, будучи
						далеко от дома. В квартире также установлены инновационные системы предотвращения взломов, пожаров, затоплений,
						прочих аварийных ситуаций.
					</p>
					<p class="news-page__text">
						Площадь двухкомнатных квартир в EINSTEIN Concept House составляет чуть более 70 м<sup>2</sup>, в базовых
						планировках предусмотрены большая кухня с выходом на балкон, две просторные комнаты, компактная прихожая и
						раздельные ванная и туалет. Дом возведен с применением монолитно-каркасной технологии, что позволяет легко и
						безопасно видоизменить квартиру в соответствии с собственным вкусом и представлениями о функциональности жилой площади
						благодаря свободной планировке.
					</p>

					<h2 class="news-feed__description">Оптимальная стоимость</h2>
					<p class="news-page__text">
						В EINSTEIN Concept House можно купить двухкомнатную квартиру от застройщика. Это замечательная возможность избежать дополнительных
						комиссий и воспользоваться наиболее выгодным рыночным предложением. В Киеве сложно найти дом такого класса, в котором на этапе сдачи
						в эксплуатацию будут реализованы столь высокотехнологичные решения как "умный дом" и система "Электронный ЖЭК", позволяющая в
						онлайн-режиме контролировать потребление электроэнергии, газа и воды, а также инновационные охранные и противопожарные системы,
						подогрев тротуара и станции подзарядки электромобилей у дома. Максимально возможный комплекс инноваций вместе с жилой недвижимостью в
						центре столицы мы предлагаем по наиболее оптимальной стоимости.
					</p>
					<p class="news-page__text">
						Напрашивается очевидный вывод: приобрести просторную двухкомнатную квартиру в EINSTEIN Concept House означает выгодное капиталовложение,
						прогрессивное мышление, комфорт и безопасность проживания.
					</p>
				</div>
				<!-- /end news-page__content -->
			<!-- / end news-page__page-description -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../../include/footer_main_ru.php'); ?>
