 <?php include_once('include/utm.php');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
if($pieces[3] == 'ru'):
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Спасибо | EINSTEIN Concept House</title>
	<meta name="description" content='К сожалению, запрашиваемая вами страница не найдена. Попробуйте перейти на главную или воспользоваться меню навигации'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/main.min.css">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<style>
	@media (max-width: 750px) {
	 .default .phoneRingo {
			color: #002442 !important;
		}
	
	}
		.phoneRingo1,
		.phoneRingo {
			color: #002442;
			text-decoration: none;
		}
		.phoneRingo1::before,
		.phoneRingo::before {
			content: '044 ';
		}
		.top-callback__link_other:hover .phoneRingo{
			color: #fff;
		}
		.phoneRingo:hover {
			color: #fff;
			text-decoration: none;
		}
		.phoneRingo:visited {
			color: #fff !important;
			text-decoration: none !important;
		}
		.default .phoneRingo1,
		.default .phoneRingo {
			color: #fff;
		}
	</style>
</head>
<body>
	
	<div class="wrapper">
	<?php include('include/header_ru.php'); ?>

    <main class="content not_found_page">
        <div class="not_found_page__container">
            <h1 class="not_found_page__main-heading">Спасибо!</h1>
			<p class="not_found_page__main-message">В ближайшее время мы Вам передзвоним</p>
			<a class="not_found_page__main-link navigation__link-b" href="https://einstein.house/ru/">На главную</a>
        </div>
    </main>

    <?php include('include/footer_ru.php'); ?>

	<? else: ?>

<?php include_once('include/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Дякуємо | EINSTEIN Concept House</title>
	<meta name="description" content='Нажаль, сторінка, яку ви шукали, не знайдена. Спробуйте будь-ласка перейти на головну або скористатися меню навігації'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/css/main.min.css">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<style>
	@media (max-width: 750px) {
	 .default .phoneRingo {
			color: #002442 !important;
		}
	
	}
		.phoneRingo1,
		.phoneRingo {
			color: #002442;
			text-decoration: none;
		}
		.phoneRingo1::before,
		.phoneRingo::before {
			content: '044 ';
		}
		.top-callback__link_other:hover .phoneRingo{
			color: #fff;
		}
		.phoneRingo:hover {
			color: #fff;
			text-decoration: none;
		}
		.phoneRingo:visited {
			color: #fff !important;
			text-decoration: none !important;
		}
		.default .phoneRingo1,
		.default .phoneRingo {
			color: #fff;
		}
	</style>
</head>
<body>
	
	<div class="wrapper">
	<?php include('include/header.php'); ?>

    <main class="content not_found_page">
        <div class="not_found_page__container">
            <h1 class="not_found_page__main-heading">Дякуємо!</h1>
            <p class="not_found_page__main-message">Найближчого часу ми Вам зателефонуємо</p>
            <a class="not_found_page__main-link navigation__link-b" href="https://einstein.house">На головну</a>
        </div>
    </main>

	<?php include('include/footer.php'); ?>
	
	<? endif; ?>