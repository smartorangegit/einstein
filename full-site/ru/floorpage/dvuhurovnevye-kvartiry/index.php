<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Купить двохуровневую квартиру с удачным расположением по ул. Златоустовская в EINSTEIN Concept House</title>
	<meta name="description" content="EINSTEIN Concept House предлагает большой выбор двухуровневых квартир на последних этажах жилого комплекса г. Киев, ул. Златоустовская, 24А">
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

	$fl = $db->query("SELECT * FROM aparts  ");

	?>


	<div class="wrapper">
	<?php include('../../../include/header_ru.php'); ?>
	<main class="content news-page  typeflats__page">
		<ul class="floor-link">
			<li><a class="floor_link_item" href="/ru/floorpage/odnokomnatnye-kvartiry/">1 комнатные квартиры</a></li>
			<li><a class="floor_link_item" href="/ru/floorpage/dvuhkomnatnye-kvartiry/">2 комнатные квартиры</a></li>
			<li><a class="floor_link_item" href="/ru/floorpage/trehkomnatnye-kvartiry/">3 комнатные квартиры</a></li>
			<li class="floor_link_item floor_link_active">Двухуровневые квартиры</li>
		</ul>

		<div class="number_floor__box">
			<ul class="result__list with-empty-cells">
				<!-- ОДНА ИЗ КВАРТИР -->
				<?while ($app = mysqli_fetch_array($fl)) {
						//print_r($app);
				if(!empty($app['terasa'])){?>
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
<?}}?>
			</ul>

		</div>


		<div class="typeflats__descr">
				<h1 class="news-page__caption">Двухуровневая квартира в Киеве – элитное жилье в сердце столицы</h1>

				<!-- / end news-page__gallery -->
				<div class="news-page__content">
					<p class="news-page__text">
						Жилой комплекс EINSTEIN Concept House – это новый дом в центре Киева, в котором реализованы самые передовые и инновационные
						технологии. Это системы "умный дом" и "Электронный ЖЭК" для оптимизации энергозатрат и для удобства управления всеми
						функциями своей квартиры с любой точки дома или вдали от него. Это инновационные системы безопасности, позволяющие жильцам
						не тревожиться о рисках пожаров, затоплений или несанкционированного проникновения в дом и квартиру тем более.
					</p>
					<p class="news-page__text">
						EINSTEIN Concept House предлагает квартиры для счастливчиков, которые будут использовать все преимущества технологий завтрашнего
						дня и при этом жить в самом центре украинской столицы. Чтобы удовлетворить различные потребности, мы спроектировали
						однокомнатные, двухкомнатные и трехкомнатные квартиры. Однако предложение не было бы исчерпывающим без возможности
						приобрести здесь двухуровневые апартаменты с выходом на собственную террасу.
					</p>

					<h2 class="news-feed__description">Двухуровневая квартира-студия в центре Киева – мечта или реальность?</h2>
					<p class="news-page__text">
						Если вы выберете проживание в EINSTEIN Concept House, вашей реальностью может стать не только двухуровневая квартира-студия, но и
						ряд передовых технологий, которыми мы оснастим ее ко времени сдачи дома в эксплуатацию.
					</p>
					<p class="news-page__text">
						На сегодняшний день двухуровневая квартира – это предложение бизнес-класса. Это не только просторное жилье на верхних этажах нового дома.
						Например, двухуровневая квартира в EINSTEIN Concept House имеет такой план, в соответствии с которым предусмотрена кухня-гостиная на
						первом уровне и две спальни на втором уровне. На каждом уровне есть по санузлу, а с верхнего этажа имеется выход на террасу.
					</p>
					<p class="news-page__text">
						Двухуровневая квартира, в которой реализован авторский дизайн, сегодня признак престижа. Тем более ,если дом располагается в историческом
						центре Киева. А EINSTEIN Concept House как раз такой – тихая уютная улица Златоустовская, три минуты пешим ходом до площади
						Победы, 7 минут езды до метро Университет и Вокзальная.
					</p>
                    <p class="news-page__text">
						Если вы до сих пор сомневаетесь, нужна ли вам двухуровневая квартира, посмотрите фото Киева, которые сделаны с похожих террас.
						Нельзя отказываться от созерцания такой красоты.
					</p>

					<h2 class="news-feed__description">Чем двухуровневые квартиры особенные?</h2>
					<p class="news-page__text">
						В EINSTEIN Concept House уникальны все квартиры уже только потому, что в них реализованы передовые технологии завтрашнего дня.
						Жить в EINSTEIN Concept House – это комфорт, удобство и максимальная защищенность как от несанкционированного проникновения в
						дом, так и от аварийных ситуаций. Как раз в этой террасе и заключается вся сказочность! Улица Златоустовская, на которой
						строится дом, находится в живописном историческом районе Киева. Это тихая улочка с уютными дворами. С террас
						двухуровневых квартир в EINSTEIN Concept House открывается вид на три стороны из четырех возможных.
						Каким видом наслаждаться ежедневно, выбирать вам. Здесь можно оснастить отличную зону отдыха и релаксации,
						не ограничивайте свою фантазию! И не забывайте, что управление функциями квартиры, в том числе террасы, возможно с
						любой точки –  преимущество системы "умный дом".
					</p>
					<p class="news-page__text">
						Советуем не медлить и купить двухуровневую квартиру в городе Киев уже сейчас. Хотя бы потому, что в EINSTEIN Concept House
						20 квартир, и только две из них двухуровневые.
					</p>

					<h2 class="news-feed__description"> Сейчас лучшее время для капиталовложения</h2>
					<p class="news-page__text">
						Пусть двухуровневая квартира в Киеве перестанет быть мечтой, купить ее можно уже сейчас! Выбирайте предложения от застройщика,
						без посредников и воспользуйтесь самыми выгодными рыночными условиями. Хорошенько подумайте: двухуровневая квартира,
						исторический Киев, завтраки и ужины на собственной террасе, энергоэффективность, абсолютная защищенность и удобство
						управления всеми функциями квартиры как следствие реализации инноваций завтрашнего дня – разве не это предел мечтаний?
						Это вполне реализуемая цель. Обратитесь к менеджерам EINSTEIN Concept House и они помогут вам просто и выгодно купить
						двухуровневую квартиру в Киеве, наш новострой ждет вас!
					</p>
				</div>
				<!-- /end news-page__content -->
			<!-- / end news-page__page-description -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../../include/footer_main_ru.php'); ?>
