<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Купити двокімнатну квартиру з вдалим розташуванням у EINSTEIN Concept House: вибір двокімнатніх плануваннь</title>
	<meta name="description" content="EINSTEIN Concept House пропонує великий вибір двокімнатніх квартир, ви можете самі створити планування під свої потреби. Переглянути квартиру можна в м. Київ, вул. Златоустівська, 24А">
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

	$fl = $db->query("SELECT * FROM aparts WHERE rooms='2'");

	?>

	<div class="wrapper">
	<?php include('../../include/header.php'); ?>
	<main class="content news-page typeflats__page">
		<? //Правки от 08.09.17 Андрей ?>
		<ul class="floor-link">
			<li><a class="floor_link_item" href="/floorpage/odnokomnatnye-kvartiry/">1 кімнатні квартири</a></li>
			<li class="floor_link_item floor_link_active">2 кімнатні квартири</li>
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
		<? //Правки от 08.09.17 Андрей ?>
		<div class="typeflats__descr">
				<h1 class="news-page__caption">Просторі двокімнатні квартири в EINSTEIN Concept House</h1>
				<div class="news-page__content">
					<p class="news-page__text">
						Житловий комплекс EINSTEIN Concept House – це особливий будинок для людей, які вже сьогодні хочуть відчути переваги технологій
						завтрашнього дня. Це не просто будинок в самому серці Києва. Це розумний будинок у центрі столиці! На десяти його поверхах
						розташовано 20 квартир, і в кожній з них передбачений найвищий ступінь технологічності й безпеки.
					</p>
					<p class="news-page__text">
						Централізоване управління всіма функціями будинку, економічні сценарії використання енергоресурсів, інноваційні системи безпеки,
						які захищають мешканців від проникнення сторонніх осіб і виникнення аварійних ситуацій в будинку. Це і багато іншого ви купуєте
						разом з квадратними метрами, а, значить, інвестуєте не просто в житло, але і в комфорт, безпеку, енергоефективність.
					</p>

					<h2 class="news-feed__description">Зручність розташування</h2>
					<p class="news-page__text">
						EINSTEIN Concept House розташований на Златоустівській – тихій вуличці, що знаходиться в трьох хвилинах від площі Перемоги й однойменного
						проспекту в центрі столиці. Це історичний центр міста, проживання в якому означає зручну транспортну розв'язку, легку доступність
						розважальних, освітніх, медичних установ, модних бутиків і продуктових магазинів.
					</p>
					<p class="news-page__text">
						У новому будинку EINSTEIN Concept House можна купити однокімнатну, двокімнатну і трикімнатну квартиру. Найоптимальнішим і універсальним
						варіантом можна назвати саме двокімнатні, адже вони – золота середина, що поєднує простір і доступну вартість.
					</p>
					<p class="news-page__text">
						Двокімнатні квартири на вулиці Златоустівська зручні для проживання молодої сім'ї, з дітьми або без. Вони також будуть чудовим рішенням
						і для проживання однієї людини. Вартість квадратного метра не відрізняється від ціни однокімнатних квартир, зате тут значно більше місця,
						яке можна облаштувати на власний смак, у тому числі і з перспективою поповнення сім'ї.
					</p>

					<h2 class="news-feed__description">Простота ремонту та обладнання</h2>
                    <p class="news-page__text">
						В EINSTEIN Concept House вам вдасться купити двокімнатну квартиру без посередників, за найвигіднішими умовами.
					</p>
					<p class="news-page__text">
						Який би ремонт ви не затіяли, турбуватися про енергоефективність та безпеку квартири вам не доведеться. Ми все зробили за
						вас! У всіх двокімнатних квартирах в EINSTEIN Concept House передбачено централізоване управління електроенергією – контролюйте
						роботу електроприладів, радіаторів, клімат контролю як з будь-якої точки квартири за допомогою пульта, так і зі свого смартфона,
						будучи далеко від будинку. У квартирі також встановлені інноваційні системи запобігання зламів, пожеж, затоплень, інших аварійних ситуацій.
					</p>
					<p class="news-page__text">
						Площа двокімнатних квартир в EINSTEIN Concept House становить трохи більше ніж 70 м<sup>2</sup>, у базових плануваннях передбачені велика кухня
						з виходом на балкон, дві просторі кімнати, компактний передпокій і роздільні ванна та туалет. Будинок зведений із застосуванням монолітно-каркасної
						технології, що дозволяє легко і безпечно видозмінити квартиру відповідно до власного смаку і уявлень про функціональність житлової площі
						завдяки вільному плануванню.
					</p>

					<h2 class="news-feed__description">Оптимальна вартість</h2>
					<p class="news-page__text">
						В EINSTEIN Concept House можна купити двокімнатну квартиру від забудовника. Це чудова можливість уникнути додаткових комісій і скористатися
						найбільш вигідною ринковою пропозицією. У Києві складно знайти будинок такого класу, у якому на етапі введення в експлуатацію будуть реалізовані
						настільки високотехнологічні рішення, як «розумний будинок» і система «Електронний ЖЕК», що дозволяє в онлайн-режимі контролювати споживання
						електроенергії, газу та води, а також інноваційні охоронні і протипожежні системи, підігрів тротуару і станції підзарядки електромобілів у будинку.
					</p>
					<p class="news-page__text">
						Максимально можливий комплекс інновацій разом з житловою нерухомістю в центрі столиці ми пропонуємо за найбільш оптимальною вартістю.
					</p>
					<p class="news-page__text">
						Висновок очевидний: придбання просторої двокімнатної квартири в EINSTEIN Concept House є вигідним капіталовкладенням, воно відображає прогресивне мислення,
						комфорт і безпеку проживання.
					</p>
				</div>
				<!-- /end news-page__content -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../include/footer_main.php'); ?>
