<?php include_once('../include/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>≡ ЖК Ейнштейн 》 Вебкамера житлового комплексу EINSTEIN Concept House</title>
	<meta name="description" content="【ВЕБ КАМЕРА】EINSTEIN Concept House - розумний будинок з централізованим управлінн... ✅【EINSTEIN】 Дистанційний контроль за споживанням електроенергії, газу та води онлайн ... ✅【EINSTEIN】 Доступ до під'їзду по відбитку пальця, тротуар з підігрівом, відеоспостереж ... ✅【EINSTEIN】 - це технологічність в історичному центрі Києва!">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
	<link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<link rel="stylesheet" href="/css/main-style.min.css">
	<?php include('../include/gtm_h.php'); ?>


<div class="wrapper">
<?php include('../include/header.php'); ?>
	<main class="content">
		<div class="webcamera">
			<div class="webcamera__inner">
				<div class="webcamera__page-caption">
					<h1 class="webcamera__caption">ВЕБКАМЕРА</h1>
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

<?php include('../include/footer.php'); ?>
