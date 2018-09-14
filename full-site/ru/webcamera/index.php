<?php include_once('../../include/utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вебкамера на стоительстве EINSTEIN Concept House, следите за ходом работ онлайн</title>
	<meta name="description" content="EINSTEIN Concept House - вебкамера на стоительстве, следите за ходом работ онлайн г. Киев, ул. Златоустовская, 24А">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo str_replace('ru/', '', $_SERVER['REQUEST_URI'])?>" />
	<link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<link rel="stylesheet" href="/css/main-style.min.css">
	<?php include('../../include/gtm_h.php'); ?>

</head>
<body>

<div class="wrapper">
<?php include('../../include/header_ru.php'); ?>
	<main class="content">
		<div class="webcamera">
			<div class="webcamera__inner">
				<div class="webcamera__page-caption">
					<h1 class="webcamera__caption">ВЕБКАМЕРА</h1>
					<p class="webcamera__top-text">Завершение строительства - ΙV квартал 2018</p>
				</div>
				<div class="webcamera__stutas">
					<iframe width="100%" height="auto" src="https://macparts.kiev.ua:8413/player.html" frameborder="0" allowfullscreen></iframe>
				</div>
				<!-- /end webcamera__stutas -->
			</div>
			<!-- /end construction__inner -->
		</div>
		<!-- /end construction -->
	</main>

<?php include('../../include/footer_ru.php'); ?>
