<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Купити однокімнатну квартиру з вдалим розташуванням у EINSTEIN Concept House : вибір однокімнатних плануваннь</title>
	<meta name="description" content="EINSTEIN Concept House пропонує широкий вибір найсучасніших однокімнатних квартир, ви можете обрати власне планування та будь-який поверх м. Київ, вул. Златоустівська, 24А">
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

$fl = $db->query("SELECT * FROM aparts WHERE rooms='1'");

?>

	<div class="wrapper">
	<?php include('../../include/header.php'); ?>
	<main class="content news-page typeflats__page">
			<ul class="floor-link">
				<li class="floor_link_item floor_link_active">1 кімнатні квартири</a></li>
				<li><a class="floor_link_item" href="/floorpage/dvuhkomnatnye-kvartiry/">2 кімнатні квартири</a></li>
				<li><a class="floor_link_item" href="/floorpage/trehkomnatnye-kvartiry/">3 кімнатні квартири</a></li>
				<li><a class="floor_link_item" href="/floorpage/dvuhurovnevye-kvartiry/">Дворівневі квартири</a></li>
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
				<h1 class="news-page__caption">Затишні однокімнатні квартири в EINSTEIN Concept House</h1>
			<div class="news-page__content">
					<p class="news-page__text">
						Житловий комплекс EINSTEIN Concept House – це унікальна нерухомість в самому серці столиці. Тут 20 квартир, і до кожної
						з них підключена система «розумний дім». Ця та ряд інших інноваційних технологій тільки освоюються українськими споживачами,
						але якщо ви досить прогресивні, то квартира в новобудові з уже налаштованою системою «розумний дім» точно для вас.
					</p>
					<p class="news-page__text">Однокімнатні квартири на вулиці Златоустівська – не тільки престижно, але і по-справжньому зручно:</p>
					<ul>
						<li>
							<p class="news-page__text">
								Ви можете заселитися сюди самі або родиною: для молодих людей квартира на Златоустівській означає економію часу, адже житловий
								комплекс розташований в безпосередній близькості до ділового центру столиці, де знаходиться більшість офісів, навчальних і розважальних закладів;
							</p>
						</li>
						<li>
							<p class="news-page__text">
								однокімнатна квартира в центрі міста з хорошим ремонтом і високотехнологічними рішеннями буде комфортною для всіх поколінь, наприклад, ваших батьків, адже
								Златоустівська – це тиха вуличка з затишними дворами і симпатичними будинками минулого століття, тут відчуваєш себе по-справжньому вдома,
								а в пішому доступі є сквери, продуктові магазини, медичні установи;
							</p>
						</li>
						<li>
							<p class="news-page__text">
								однокімнатну квартиру можна вигідно здавати в оренду: дістатися сюди від Центрального київського вокзалу питання семи хвилин, а в пішому доступі
								знаходиться безліч київських пам'яток; хороша транспортна розв'язка дозволить гостям вашої квартири легко відвідати будь-яку точку Києва.
							</p>
						</li>
					</ul>

					<h2 class="news-feed__description">Простота ремонту та обладнання</h2>
					<p class="news-page__text">
						У EINSTEIN Concept House можна купити однокімнатну квартиру без посередників і одразу ж перейти до її благоустрою. Площа однокімнатних
						квартир складає 43.42 м<sup>2</sup>, у базових плануваннях передбачені велика кухня з виходом на балкон, простора кімната, спальня та роздільні ванна й туалет.
					</p>
					<p class="news-page__text">
						Будинок зведенийі з застосуванням монолітно-каркасної технології, що гарантує покупцям опцію вільного планування, тобто власники зможуть самі
						зонувати особистий простір з урахуванням усіх побажань. Відповідно до уявлень про комфорт, затишок, призначення купленої квартири ви можете організувати тут простори для
						відпочинку, роботи, прийому гостей. Не проблема перетворити однокімнатну квартиру в EINSTEIN Concept House в квартиру-студію. Сучасні дизайнерські рішення до ваших послуг.
					</p>
					<p class="news-page__text">
						Комфорт проживання в однокімнатній квартирі в EINSTEIN Concept House обумовлений ще й тим, що будь-які функції квартири керуються централізовано, по всьому будинку встановлені
						сучасні охоронні та протипожежні системи, реалізовані інноваційні енергоефективні рішення.
					</p>

					<h2 class="news-feed__description">Оптимальна вартість</h2>
          <p class="news-page__text">
						У EINSTEIN Concept House можна купити однокімнатну квартиру в Києві від забудовника. Це означає відсутність будь-яких додаткових комісій і найбільшу вигоду ринкової пропозиції.
						Крім того, ви купуєте інноваційне житло з перевагами, які дозволяють відчувати себе вдома комфортно і безпечно, а застосування інтелектуального підходу до управління енергопостачанням
						економить до 40&#37; енергоресурсів.
					</p>
					<p class="news-page__text">
						Висновок простий: придбання затишної невеликої квартири в EINSTEIN Concept House – це вигідно і прогресивно, це капіталовкладення у власний комфорт і безпеку.
					</p>

					<h2 class="news-feed__description">Зручність розташування</h2>
                    <p class="news-page__text">
						EINSTEIN Concept House розташований на вулиці Златоустівська, що в трьох хвилинах від центральної столичної площі Перемоги й однойменного проспекту. Це історичний
						центр міста, тут безліч архітектурних пам'яток і затишних скверів для прогулянки, а також відмінна транспортна розв'язка.
					</p>
					<p class="news-page__text">
						За декілька хвилин їзди від площі Перемоги розташовані станції метро Університет і Вокзальна, по самій площі проходить розгалужена мережа наземного транспорту.
					</p>
					<p class="news-page__text">
						Проживання в цьому районі української столиці – мрія багатьох городян. І вам під силу її здійснити. У новому будинку EINSTEIN Concept House двадцять квартир, але
						серед них є однокімнатні, двокімнатні та трикімнатні, а також дворівневі апартаменти. З турботою про людей, зацікавлених у комфортабельному проживанні в розумній
						квартирі на правому березі, ми розробили кілька вдалих планувань квартир з різною площею.
					</p>

				</div>
				<!-- /end news-page__content -->
				<!-- / end news-page__page-description -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../include/footer_main.php'); ?>
