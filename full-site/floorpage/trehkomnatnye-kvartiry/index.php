<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Купити трикімнатну квартиру з вдалим розташуванням у EINSTEIN Concept House: вибір трикімнатних плануваннь</title>
	<meta name="description" content="EINSTEIN Concept House пропонує великий вибір трикімнатних квартир, ви можете самі створити планування під свої потреби. Переглянути квартиру можна в м. Київ, вул. Златоустівська, 24А">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/main.min.css">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
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
	<?php include('../../DB.php');

	$fl = $db->query("SELECT * FROM aparts WHERE rooms='3'");

	?>

	<div class="wrapper">
	<?php include('../../include/header.php'); ?>
	<main class="content news-page  typeflats__page">
	<ul class="floor-link">
		<li><a class="floor_link_item" href="/floorpage/odnokomnatnye-kvartiry/">1 кімнатні квартири</a></li>
		<li><a class="floor_link_item" href="/floorpage/dvuhkomnatnye-kvartiry/">2 кімнатні квартири</a></li>
		<li class="floor_link_item floor_link_active">3 кімнатні квартири</li>
		<li><a class="floor_link_item" href="/ru/floorpage/dvuhurovnevye-kvartiry/">Дворівневі квартири</a></li>
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
							<tr><td>Поверх </td><td><?=$app['poverx']?></td></tr>
							<tr><td>Кількість кімнат </td><td><?=$app['rooms']?></td></tr>
							<tr><td>Загальна площа   </td><td><?=$app['zagalna']?></td></tr>
						</table>
					</div>
					<a class="location__link" href="/apartment.php?apart=<?=$app['type'];?>" title="Квартира <?=$app['type_user']?>">Дивитися квартиру</a>
				</li>
<?}?>
			</ul>

		</div>

		<div class="typeflats__descr">
				<h1 class="news-page__caption">Трикімнатні квартири в EINSTEIN Concept House для великої родини</h1>
				<div class="news-page__content">
					<p class="news-page__text">
						Житловий комплекс EINSTEIN Concept House –  це новий будинок в центрі Києва, аналогів якому немає. На ідею його створення нас
						надихнуло висловлювання А. Ейнштейна про те, що турбота про людей тісно пов'язана з прогресом та інноваційними технологіями.
						По суті, будь-який технологічний стрибок повинен здійснюватися на благо людини.
					</p>
					<p class="news-page__text">
						Трикімнатні квартири в EINSTEIN Concept House – це, безсумнівно, простір і затишок для кожного члена великої родини. Про
						таке придбання замислюються сім'ї з кількома дітьми або перспективою їх народження. Сюди ж можна заїхати з літніми батьками. У
						трикімнатній квартирі в центрі Києва достатньо простору для комфортного відпочинку і дорослих, і зовсім юних жителів.
					</p>
					<p class="news-page__text">
						Місця вдосталь! Площа трикімнатних квартир в EINSTEIN Concept House велика порівняно з пропозиціями інших
						забудовників – трохи більше ніж 121 м<sup>2</sup>.
					</p>
					<p class="news-page__text">
						Це не просто житлова площа, це обладнані за останнім словом техніки квартири. Централізоване управління всіма
						функціями вашої квартири, економічна система використання енергоресурсів, інноваційні системи безпеки – все це мешканці
						будинку отримують у своє користування відразу по факту введення будинку в експлуатацію.
					</p>

					<h2 class="news-feed__description">Зручність розташування</h2>
					<p class="news-page__text">
						Ми будуємо EINSTEIN Concept House на вулиці Златоустівська. Це тиха затишна вулиця в трьох хвилинах від Київського цирку, площі
						Перемоги, ТРЦ «Україна». До центральної київської площі Перемоги виходить кілька таких вулиць: Златоустівська, Дмитрівська, Бульварно-Кудрявська,
						Гончара. Усі вони передають чарівний дух старого Києва, а на площі Перемоги з розгалуженими від неї проспектом Перемоги та
						бульваром Шевченка відчувається жвавість і стрімкість Києва сучасного. Проживання в цьому районі дозволить насолодитися і тим, і іншим.
					</p>
                    <p class="news-page__text">
						Безумовна перевага трикімнатної квартири в центрі Києва ще й у швидкій доступності транспортної інфраструктури, просторів для
						відпочинку і прогулянок, медичних, торговельних, освітніх закладів. За декілька хвилин їзди від площі Перемоги розташовані метро Університет і Вокзальна.
					</p>

					<h2 class="news-feed__description">Простота ремонту та обладнання</h2>
					<p class="news-page__text">
						Базові планування трикімнатних квартир включають три просторі спальні в одному крилі квартири, кухню-вітальню з балконом в іншому крилі.
						У квартирах також є гардеробна і два санвузли. EINSTEIN Concept House будується із застосуванням монолітно-каркасної технології, а значить,
						допускається вільне, тобто авторське, планування власника, що  враховує всі його потреби. Реалізуйте свої уявлення про комфорт, зручність,
						призначення трикімнатної квартири – тут більш ніж достатньо місця для дитячих та ігрових зон, для відпочинку, роботи і прийому гостей.
					</p>
					<p class="news-page__text">
						Кожен член великої родини, що в'їхала в трикімнатну квартиру в EINSTEIN Concept House, буде відчувати себе тут комфортно і безпечно. А все
						завдяки системі «розумний будинок», інноваційним охоронним і протипожежним системам. EINSTEIN Concept House – це енергоефективний і високотехнологічний
						будинок. Придбання квартири в ньому означає економію на комунальні послуги і безпрецедентну зручність їхнього використання.
					</p>

					<h2 class="news-feed__description">Оптимальна вартість</h2>
					<p class="news-page__text">
						Якщо ви хочете вигідно купити трикімнатну квартиру в Києві, зверніть увагу на EINSTEIN Concept House. Тільки тут ви придбаєте не просто квадратні метри для
						комфортного проживання в центрі столиці, а й ряд високотехнологічних рішень, які знайдуть масову популярність в недалекому майбутньому. Сьогодні ж ми пропонуємо
						вам бути новаторами і з максимальною вигодою використовувати переваги завтрашнього дня. Інтелектуальний підхід до управління енергопостачанням економить до 40&#37; енергоресурсів,
						система «розумний будинок» пропонує вам кілька економічних сценаріїв споживання енергії. Інноваційні системи безпеки, враховуючи замок зі сканером відбитків пальців в
						під'їзді і відеодомофон в кожній квартирі, системи антизатоплення і знеструмлення квартири в разі аварії - ось що по-справжньому  захищає.
					</p>
					<p class="news-page__text">
						Усі переваги розумного будинку в центрі Києва сьогодні доступні за оптимальною вартістю, а тому настав час для вигідного капіталовкладення.
					</p>
				</div>
				<!-- /end news-page__content -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../include/footer_main.php'); ?>
