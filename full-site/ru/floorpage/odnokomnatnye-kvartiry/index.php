<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Купить однокомнатную квартиру с удачным расположением по ул. Златоустовская в EINSTEIN Concept House</title>
	<meta name="description" content="EINSTEIN Concept House предлагает широкий выбор современных однокомнатных квартир, вы можете выбрать собственную планировку и этаж  г. Киев, ул. Златоустовская, 24А">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/main-style.min.css">
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

	$fl = $db->query("SELECT * FROM aparts WHERE rooms='1'");

	?>

	<div class="wrapper">
	<?php include('../../../include/header_ru.php'); ?>
	<main class="content news-page typeflats__page">
		<ul class="floor-link">
			<li class="floor_link_item floor_link_active">1 комнатные квартиры</li>
			<li><a class="floor-page__descr" href="/ru/floorpage/dvuhkomnatnye-kvartiry/">2 комнатные квартиры</a></li>
			<li><a class="floor-page__descr" href="/ru/floorpage/trehkomnatnye-kvartiry/">3 комнатные квартиры</a></li>
			<li><a class="floor-page__descr" href="/ru/floorpage/dvuhurovnevye-kvartiry/">Двухуровневые квартиры</a></li>
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
					<a class="location__link" href="/apartment.php?apart=<?=$app['type'];?>" title="Квартира <?=$app['type_user']?>">Смотреть квартиру</a>
				</li>
<?}?>
			</ul>

		</div>


		<div class="typeflats__descr">
				<h1 class="news-page__caption">Уютные однокомнатные квартиры в EINSTEIN Concept House</h1>

				<div class="news-page__content">
					<p class="news-page__text">
						Жилой комплекс EINSTEIN Concept House – это уникальная недвижимость в самом сердце столицы. Здесь 20 квартир, и к каждой
						из них подключена система "умный дом". Эта и ряд других инновационных технологий только осваиваются украинскими
						потребителями, но если вы достаточно прогрессивны, то квартира в новостройке с уже подключенной системой "умный дом"
						точно для вас.
					</p>
					<p class="news-page__text">Однокомнатные квартиры на улице Златоустовская – не только престижно, но и по-настоящему удобно:</p>
					<ul>
						<li>
							<p class="news-page__text">
								вы можете заселиться сюда в одиночку или семьей: для молодых людей квартира на Златоустовской означает экономию времени,
								ведь жилой комплекс расположен в непосредственной близости к деловому центру столицы, где находятся большинство офисов,
								учебных и развлекательных заведений
							</p>
						</li>
						<li>
							<p class="news-page__text">
								однокомнатная квартира в центре города с хорошим ремонтом и высокотехнологичными решениями будет комфортной для всех
								поколений, например, ваших родителей, ведь Златоустовская – это тихая улочка с уютными дворами и симпатичными домами
								прошлого века, здесь чувствуешь себя по-настоящему дома, а в пешей доступности есть скверы, продуктовые магазины,
								медицинские учреждения;
							</p>
						</li>
						<li>
							<p class="news-page__text">
								однокомнатную квартиру можно выгодно сдавать в аренду: добраться сюда от Центрального киевского вокзала вопрос семи минут,
								а в пешей доступности находится множество киевских достопримечательностей; хорошая транспортная развязка позволит
								гостям вашей квартиры легко посетить любую точку Киева.
							</p>
						</li>
					</ul>

					<h2 class="news-feed__description">Простота ремонта и обустройства</h2>
					<p class="news-page__text">
						В EINSTEIN Concept House можно купить однокомнатную квартиру без посредников и тут же приступить к ее благоустройству. Площадь
						однокомнатных квартир составляет 43.42 м<sup>2</sup>, в базовых планировках предусмотрены большая кухня с выходом на балкон,
						просторная комната, прихожая и раздельные ванная и туалет. Дом возведен с применением монолитно-каркасной технологии, что
						гарантирует покупателям опцию свободной планировки, то есть  владельцы смогут сами зонировать личное пространство с учетом
						всех пожеланий. В соответствии с представлениями о комфорте, уюте, предназначении купленной квартиры вы можете организовать
						здесь пространства для отдыха, работы, приема гостей. Не проблема превратить однокомнатную квартиру в EINSTEIN Concept House в
						квартиру-студию. Современные дизайнерские решения к вашим услугам.
					</p>
					<p class="news-page__text">
						Комфорт проживания в однокомнатной квартире в EINSTEIN Concept House обусловлен еще и тем, что любые функции квартиры управляются
						централизованно, по всему дому установлены современные охранные и противопожарные системы, реализованы инновационные
						энергоэффективные решения.
					</p>

					<h2 class="news-feed__description">Оптимальная стоимость</h2>
                    <p class="news-page__text">
						В EINSTEIN Concept House можно купить однокомнатную квартиру в Киеве от застройщика. Это означает отсутствие любых дополнительных
						комиссий и наибольшую выгоду рыночного предложения. Кроме того, вы приобретаете инновационное жилье с преимуществами,
						которые позволяют чувствовать себя дома комфортно и безопасно, а применение интеллектуального подхода к управлению
						энергоснабжением экономит до 40&#37; энергоресурсов.
					</p>
					<p class="news-page__text">
						Вывод прост: приобретение уютной небольшой квартиры в EINSTEIN Concept House – это выгодно и прогрессивно, это
						капиталовложение в собственный комфорт и безопасность.
					</p>

					<h2 class="news-feed__description">Удобство расположения</h2>
                    <p class="news-page__text">
						EINSTEIN Concept House располагается на улице Златоустовская, что в трех минутах от центральной столичной площади Победы и одноименного
						проспекта. Это исторический центр города, здесь масса архитектурных достопримечательностей и уютных скверов для прогулки, а
						также отличная транспортная развязка. В нескольких минутах езды от площади Победы расположены станции метро Университет и
						Вокзальная, по самой площади проходит разветвленная сеть наземного транспорта.
					</p>
					<p class="news-page__text">
						Проживание в этом районе украинской столицы – мечта многих горожан. Вы же можете ее осуществить. В новом доме EINSTEIN Concept House
						двадцать квартир, но среди них есть однокомнатные, двухкомнатные и трехкомнатные, а также двухуровневые апартаменты.
						С заботой о людях, заинтересованных в комфортабельном проживании в умной квартире на правом берегу, мы разработали
						несколько удачных планировок квартир различной площади.
					</p>

				</div>
				<!-- /end news-page__content -->
			<!-- / end news-page__page-description -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../../include/footer_main_ru.php'); ?>
