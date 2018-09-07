<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Купить трехкомнатную квартиру с удачным расположением по ул. Златоустовская в EINSTEIN Concept House</title>
	<meta name="description" content="EINSTEIN Concept House предлагает большой выбор трехкомнатных квартир, вы можете сами создать планировку под свои нужды г. Киев, ул. Златоустовская, 24А">
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

	$fl = $db->query("SELECT * FROM aparts WHERE rooms='3'");

	?>

	<div class="wrapper">
	<?php include('../../../include/header_ru.php'); ?>
	<main class="content news-page typeflats__page">
	<? //Правки от 08.09.17 Андрей ?>
	<ul class="floor-link">
			<li><a class="floor_link_item" href="/ru/floorpage/odnokomnatnye-kvartiry/">1 комнатные квартиры</a></li>
			<li><a class="floor_link_item" href="/ru/floorpage/dvuhkomnatnye-kvartiry/">2 комнатные квартиры</a></li>
			<li class="floor_link_item floor_link_active">3 комнатные квартири</li>
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
							<tr><td>Общая площадь </td><td><?=$app['zagalna']?></td></tr>
						</table>
					</div>
					<a class="location__link" href="/apartment.php?apart=<?=$app['type'];?>" title="Квартира <?=$app['type_user']?>">Дивитися квартиру</a>
				</li>
<?}?>
			</ul>

		</div>

		<div class="typeflats__descr">
				<h1 class="news-page__caption">Трехкомнатные квартиры в EINSTEIN Concept House для большой семьи</h1>
					<div class="news-page__content">
					<p class="news-page__text">
						Жилой комплекс EINSTEIN Concept House – это новый дом в центре Киева, аналогов которому нет. На идею его создания нас
						вдохновило высказывание А.Эйнштейна о том, что забота о людях тесно связана с прогрессом и инновационными технологиями.
						По сути, любой технологический скачок должен выполняться во благо человека.
					</p>
					<p class="news-page__text">
						Трехкомнатные квартиры в EINSTEIN Concept House – это, несомненно, пространство и уют для каждого члена большой семьи.
						О таких приобретениях задумываются семьи с несколькими детьми или перспективой их рождения. Сюда же можно заехать с
						пожилыми родителями. В трехкомнатной квартире в центре Киева достаточно пространства для комфортного отдыха и взрослых,
						и совсем юных жителей.
					</p>
					<p class="news-page__text">
						Места предостаточно! Площадь трехкомнатных квартир в EINSTEIN Concept House большая в сравнении с предложениями
						других застройщиков, - чуть более 121 м<sup>2</sup>.
					</p>
					<p class="news-page__text">
						Это не просто жилая площадь, это оборудованные по последнему слову техники квартиры. Централизованное управление всеми
						функциями вашей квартиры, экономичная система использования энергоресурсов, инновационные системы безопасности – все это
						жильцы дома получают в свое использование сразу по факту сдачи дома в эксплуатацию.
					</p>

					<h2 class="news-feed__description">Удобство расположения</h2>
					<p class="news-page__text">
						Мы строим EINSTEIN Concept House на улице Златоустовская. Это тихая уютная улица в трех минутах от Киевского цирка, площади
						Победы, ТРЦ «Украина». К центральной киевской площади Победы выходят несколько таких улиц: Златоустовская, Дмитриевская,
						Бульварно-Кудрявская, Гончара. Все они передают чарующий дух старого Киева, а на площади Победы с разветвляющимися от нее
						проспектом Победы и бульваром Шевченка ощущается живость и стремительность Киева современного. Проживание в этом районе
						позволит насладиться и тем, и другим.
					</p>
                    <p class="news-page__text">
						Безусловное преимущество трехкомнатной квартиры в центре Киева еще и в быстрой доступности транспортной инфраструктуры, пространств
						для отдыха и прогулок, медицинских, торговых, образовательных заведений. В нескольких минутах езды от площади Победы
						располагаются метро Университет и Вокзальная.
					</p>

					<h2 class="news-feed__description">Простота ремонта и обустройства</h2>
					<p class="news-page__text">
						Базовые планировки трехкомнатных квартир предполагают три просторные спальни в одном крыле квартиры, кухню-гостиную с балконом в другом
						крыле. В квартирах также имеется гардеробная и два санузла. EINSTEIN Concept House строится с применением монолитно-каркасной технологии,
						а значит, допускается свободная, то есть авторская, планировка владельца учитывающая все его потребности. Реализуйте свои представления о комфорте,
						удобстве, предназначении трехкомнатной квартиры – здесь предостаточно места для детских и игровых зон, для отдыха, работы и приема гостей.
					</p>
					<p class="news-page__text">
						Каждый член большой семьи, въехавшей в трехкомнатную квартиру в EINSTEIN Concept House, будет чувствовать себя здесь комфортно и безопасно.
						А все благодаря системе «умный дом», инновационным охранным и противопожарным системам. EINSTEIN Concept House – это энергоэффективный и
						высокотехнологичный дом. Приобретение квартиры в нём означает экономию на коммунальных услугах и беспрецедентное удобство их использования.
					</p>

					<h2 class="news-feed__description">Оптимальная стоимость</h2>
					<p class="news-page__text">
						Если вы хотите выгодно купить трехкомнатную квартиру в Киеве, обратите внимание на EINSTEIN Concept House. Только здесь вы приобретаете
						не просто квадратные метры для комфортного проживания в центре столицы, но и ряд высокотехнологичных решений, которые обретут массовую популярность
						в скором будущем. Сегодня же мы предлагаем вам быть новаторами и с максимальной выгодой использовать преимущества завтрашнего дня. Интеллектуальный
						подход к управлению энергоснабжением экономит до 40&#37; энергоресурсов, система "умный дом" предлагает вам несколько экономичных сценариев
						потребления энергии. Инновационные системы безопасности, включая замок со сканером отпечатков пальцев в подъезде и видеодомофон в каждой квартире,
						системы антизатопления и обесточивания квартиры в случае аварии – вот, что защищает по-настоящему.
					</p>
					<p class="news-page__text">
					Все преимущества умного дома в центре Киева сегодня доступны по оптимальной стоимости, а потому наступило время для выгодного капиталовложения.
					</p>
				</div>
				<!-- /end news-page__content -->
			<!-- / end news-page__page-description -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../../include/footer_main_ru.php'); ?>
