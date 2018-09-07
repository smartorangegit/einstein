<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Купити дворівневу квартиру з вдалим розташуванням у EINSTEIN Concept House по вул. Златоустівська: вибір дворівневих плануваннь</title>
	<meta name="description" content="EINSTEIN Concept House пропонує великий вибір дворівневих квартир на останніх поверхах ЖК м. Київ, вул. Златоустівська, 24А">
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

	$fl = $db->query("SELECT * FROM aparts  ");

	?>

	<div class="wrapper">
	<?php include('../../include/header.php'); ?>
	<main class="content news-page typeflats__page ">
		<? //Правки от 08.09.17 Андрей ?>
		<ul class="floor-link">
			<li><a class="floor_link_item" href="/floorpage/odnokomnatnye-kvartiry/">1 кімнатні квартири</a></li>
			<li><a class="floor_link_item" href="/floorpage/dvuhkomnatnye-kvartiry/">2 кімнатні квартири</a></li>
			<li><a class="floor_link_item" href="/floorpage/trehkomnatnye-kvartiry/">3 кімнатні квартири</a></li>
			<li class="floor_link_item floor_link_active">Дворівневі квартири</li>
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
							<tr><td>Поверх </td><td><?=$app['poverx']?></td></tr>
							<tr><td>Кількість кімнат </td><td><?=$app['rooms']?></td></tr>
							<tr><td>Загальна площа   </td><td><?=$app['zagalna']?></td></tr>
						</table>
					</div>
					<a class="location__link" href="/apartment.php?apart=<?=$app['type'];?>" title="Квартира <?=$app['type_user']?>">Дивитися квартиру</a>
				</li>
<?}}?>
			</ul>

		</div>


	<div class="typeflats__descr">
		<h1 class="news-page__caption">Дворівнева квартира в Києві – елітне житло в серці столиці</h1>
				<div class="news-page__content">
					<p class="news-page__text">
						Житловий комплекс EINSTEIN Concept House – це новий будинок у центрі Києва, у якому реалізовані передові та інноваційні
						технології. Це системи «розумний дім» і «Електронний ЖЕК» для оптимізації енерговитрат і для зручності управління всіма
						функціями своєї квартири з будь-якої точки будинку або на відстані. Це інноваційні системи безпеки, що дозволяють мешканцям
						не хвилюватися про ризики пожеж, затоплень або несанкціонованого проникнення в будинок і квартиру тим більше.
					</p>
					<p class="news-page__text">
						EINSTEIN Concept House пропонує квартири для щасливців, які будуть використовувати всі переваги технологій завтрашнього
						дня і при цьому жити в самому центрі української столиці. Щоб задовольнити різні потреби, ми спроектували однокімнатні,
						двокімнатні та трикімнатні квартири. Однак пропозиція не була б вичерпною без можливості придбати тут дворівневі апартаменти
						з виходом на власну терасу.
					</p>

					<h2 class="news-feed__description">Дворівнева квартира-студія в центрі Києва - мрія чи реальність?</h2>
					<p class="news-page__text">
						Якщо ви оберете проживання в EINSTEIN Concept House, вашою реальністю може стати не тільки дворівнева квартира-студія,
						але і ряд передових технологій, якими ми обладнаємо її до часу введення будинку в експлуатацію.
					</p>
					<p class="news-page__text">
						На сьогоднішній день дворівнева квартира – це пропозиція бізнес-класу. Це не тільки просторе житло на верхніх поверхах нового
						будинку. Наприклад, дворівнева квартира в EINSTEIN Concept House має такий план, відповідно до якого передбачена кухня-вітальня
						на першому рівні і дві спальні на другому рівні. На кожному рівні є санвузол, а з верхнього поверху є вихід на терасу.
					</p>
					<p class="news-page__text">
						Дворівнева квартира, у якій реалізований авторський дизайн, сьогодні ознака престижу. Тим більше, якщо будинок знаходиться
						в історичному центрі Києва. А EINSTEIN Concept House якраз такий – тиха затишна вулиця Златоустівська, три хвилини пішим ходом
						до площі Перемоги, 7 хвилин їзди до метро Університет і Вокзальна.
					</p>
                    <p class="news-page__text">
						Якщо ви досі сумніваєтеся, чи потрібна вам дворівнева квартира, подивіться фото Києва, які зроблені зі схожих терас. Не
						можна відмовлятися від споглядання такої краси.
					</p>

					<h2 class="news-feed__description">Чим дворівневі квартири особливі?</h2>
					<p class="news-page__text">
						В EINSTEIN Concept House унікальні всі квартири вже тільки тому, що в них реалізовані передові технології завтрашнього дня.
						Життя в EINSTEIN Concept House – це комфорт, зручність і максимальна захищеність як від несанкціонованого проникнення в будинок,
						так і від аварійних ситуацій.
					</p>
					<p class="news-page__text">
						Однак дворівнева квартира - це все перераховане і трохи більше. Дворівнева квартира, судячи з відгуків, це, безсумнівно, те «гніздечко»,
						де хочеться проводити весь вільний час, куди хочеться запрошувати друзів і насолоджуватися заходами і світанками з власної тераси на десятому поверсі.
						Якраз в цій терасі і полягає вся казковість! Вулиця Златоустівська, на якій відбувається будівництво, знаходиться в мальовничому історичному районі Києва.
						Це тиха вуличка з затишними дворами. З терас дворівневих квартир в EINSTEIN Concept House відкривається вид на три сторони з чотирьох можливих. Яким видом
						насолоджуватися щодня, вибирати вам. Тут можна облаштувати чудову зону відпочинку й релаксації, не обмежуйте свою фантазію! І не забувайте, що керування
						функціями квартири, у тому числі тераси, можливо з будь-якої точки, що є перевагою системи «розумний дім». Радимо не зволікати і купити дворівневу квартиру
						в місті Київ вже зараз. Хоча б тому, що в EINSTEIN Concept House 20 квартир, і тільки дві з них дворівневі.
					</p>

					<h2 class="news-feed__description">Зараз найкращий час для капіталовкладення</h2>
					<p class="news-page__text">
						Нехай дворівнева квартира в Києві перестане бути мрією, адже купити її можна вже зараз!
						Вибирайте пропозиції від забудовника без посередників і скористайтеся найвигіднішими ринковими умовами. Гарненько подумайте: дворівнева квартира,
						історичний Київ, сніданки й вечері на власній терасі, енергоефективність, абсолютна захищеність і зручність керування всіма функціями квартири як наслідок
						реалізації інновацій завтрашнього дня - хіба не це межа мрій? Це цілком реалізована мета. Зверніться до менеджерів EINSTEIN Concept House і
						вони допоможуть вам просто і вигідно купити дворівневу квартиру в Києві, наша новобудова чекає на вас!
					</p>
				</div>
				<!-- /end news-page__content -->
			<!-- / end news-page__page-description -->
		</div>
		<!-- / end news-page__inner -->
	</main>
<?php include('../../include/footer_main.php'); ?>
