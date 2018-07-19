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
	<meta name="description" content='Благодарим за обращение!'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<style>
	@media (max-width: 750px) {
	 .default .phoneRingo {	color: #002442 !important;}
	}
  .content.not_found_page{    width: 100%; max-width: 800px; margin: 0 auto;}
		.phoneRingo1,	.phoneRingo {color: #002442;	text-decoration: none;}
		.phoneRingo1::before, .phoneRingo::before {content: '044 ';}
		.top-callback__link_other:hover .phoneRingo{color: #fff;}
		.phoneRingo:hover {color: #fff;	text-decoration: none;}
		.phoneRingo:visited {color: #fff !important; 	text-decoration: none !important;}
		.default .phoneRingo1,
		.default .phoneRingo {color: #fff;}
    .slick-slide{padding: 20px; box-sizing: border-box;}
    .slick-track{display: flex; display: -webkit-flex; align-items: center; -webkit-align-items: center;}
    .blok-other-projects__logo__rybalsky.slick-slide  img{ width: 70%; display: block; margin: 0 auto;}

	</style>
</head>
<body>

	<div class="wrapper">
	<?php include('../../include/header_ru.php'); ?>

    <main class="content not_found_page">
      <div class="not_found_page__container">
        <h1 class="not_found_page__main-heading" style="font-size: 46px;">Благодарим вас за обращение!</h1>
  			<p class="not_found_page__main-message">Менеджер EINSTEIN Concept House обязательно свяжется с вами в ближайшее время.</p>
        <p class="not_found_page__main-message">Предлагаем просмотреть другие проекты SAGA Development</p>
        <div class="blok-other-projects__logos">
          <div class="other-projects__slick-carousel">
            <div class="blok-other-projects__logo blok-other-projects__logo__bristol">
              <a href="https://bristol.house/" target="_blank"><img src="/img/icons/bristol_logo.svg" alt="Bristol Comfort House" title="Bristol Comfort House"></a>
            </div>
            <div class="blok-other-projects__logo blok-other-projects__logo__chicago">
              <a href="https://chicago.kiev.ua/" target="_blank"><img src="/img/icons/chicago_logo.svg" alt="Chicago Central House" title="Chicago Central House"></a>
            </div>
            <div class="blok-other-projects__logo blok-other-projects__new-york">
              <a href="http://new-york.com.ua/" target="_blank"><img src="/img/icons/new_york_logo.svg" alt="New York Concept House" title="New York Concept House"></a>
            </div>
            <div class="blok-other-projects__logo blok-other-projects__logo__sanfrancisco">
              <a href="http://sanfrancisco.com.ua" target="_blank"><img src="/img/icons/san_francisco_color.svg" alt="San Francisco Creative House" title="San Francisco Creative House"></a>
            </div>
            <div class="blok-other-projects__logo blok-other-projects__logo__rybalsky">
              <a href="https://rybalsky.com.ua/" target="_blank"><img src="/img/icons/rybalsky-logo-ua1.svg" alt="Rybalsky Простір для життя" title="Rybalsky Простір для життя"></a>
            </div>
            <div class="blok-other-projects__logo blok-other-projects__logo__kandinskiy">
              <a href="http://kandinsky-residence.com.ua/" target="_blank"><img src="/img/icons/kandinsky_logo.svg" alt="KANDINSKY Odessa Residence" title="KANDINSKY Odessa Residence"></a>
            </div>
            <div class="blok-other-projects__logo blok-other-projects__logo__resident">
              <a href="http://resident.house/" target="_blank"><img src="/img/icons/resident_logo_color.svg" alt="RESIDENT Concept House" title="RESIDENT Concept House"></a>
            </div>
          </div>
          <div class="slick-carousel__custom-nav__container">
            <span class="slick-carousel__custom-nav slick-carousel__custom-nav__prev-slide"></span>
            <span class="slick-carousel__custom-nav slick-carousel__custom-nav__next-slide"></span>
          </div>
        </div>
  			<!-- <a class="not_found_page__main-link navigation__link-b" href="https://einstein.house/ru/">На главную</a> -->
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">

    if($('.other-projects__slick-carousel').length) {
        $('.other-projects__slick-carousel').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow: $('.slick-carousel__custom-nav__prev-slide'),
            nextArrow: $('.slick-carousel__custom-nav__next-slide'),
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    }
    </script>



	<? else: ?>

<?php include_once('../include/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Дякуємо | EINSTEIN Concept House</title>
	<meta name="description" content='Дякуємо за зверення!'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<style>
	@media (max-width: 750px) {
	 .default .phoneRingo {	color: #002442 !important;}
	}
    .content.not_found_page{    width: 100%; max-width: 800px; margin: 0 auto; }
		.phoneRingo1,.phoneRingo {color: #002442;	text-decoration: none;		}
		.phoneRingo1::before,
		.phoneRingo::before {	content: '044 ';}
		.top-callback__link_other:hover .phoneRingo{	color: #fff;}
		.phoneRingo:hover {	color: #fff;	text-decoration: none;}
		.phoneRingo:visited {	color: #fff !important;	text-decoration: none !important;}
		.default .phoneRingo1, .default .phoneRingo {	color: #fff;}
    .slick-slide{padding: 20px; box-sizing: border-box;}
    .slick-track{display: flex; display: -webkit-flex; align-items: center; -webkit-align-items: center;}
    .blok-other-projects__logo__rybalsky.slick-slide  img{ width: 70%; display: block; margin: 0 auto;}
	</style>
</head>
<body>

	<div class="wrapper">
	<?php include('../include/header.php'); ?>

    <main class="content not_found_page">
      <div class="not_found_page__container">
          <h1 class="not_found_page__main-heading" style="font-size: 46px;">Дякуємо вам за звернення!</h1>
          <p class="not_found_page__main-message">Менеджер EINSTEIN Concept House обов′язково зв′яжеться з вами найближчим часом.</p>
          <p class="not_found_page__main-message">Пропонуємо переглянути інші проекти компанії SAGA Development</p>
          <div class="blok-other-projects__logos">
            <div class="other-projects__slick-carousel">
              <div class="blok-other-projects__logo blok-other-projects__logo__bristol">
                <a href="https://bristol.house/" target="_blank"><img src="/img/icons/bristol_logo.svg" alt="Bristol Comfort House" title="Bristol Comfort House"></a>
              </div>
              <div class="blok-other-projects__logo blok-other-projects__logo__chicago">
                <a href="https://chicago.kiev.ua/" target="_blank"><img src="/img/icons/chicago_logo.svg" alt="Chicago Central House" title="Chicago Central House"></a>
              </div>
              <div class="blok-other-projects__logo blok-other-projects__new-york">
                <a href="http://new-york.com.ua/" target="_blank"><img src="/img/icons/new_york_logo.svg" alt="New York Concept House" title="New York Concept House"></a>
              </div>
              <div class="blok-other-projects__logo blok-other-projects__logo__sanfrancisco">
                <a href="http://sanfrancisco.com.ua" target="_blank"><img src="/img/icons/san_francisco_color.svg" alt="San Francisco Creative House" title="San Francisco Creative House"></a>
              </div>
              <div class="blok-other-projects__logo blok-other-projects__logo__rybalsky">
                <a href="https://rybalsky.com.ua/" target="_blank"><img src="/img/icons/rybalsky-logo-ua1.svg" alt="Rybalsky Простір для життя" title="Rybalsky Простір для життя"></a>
              </div>
              <div class="blok-other-projects__logo blok-other-projects__logo__kandinskiy">
                <a href="http://kandinsky-residence.com.ua/" target="_blank"><img src="/img/icons/kandinsky_logo.svg" alt="KANDINSKY Odessa Residence" title="KANDINSKY Odessa Residence"></a>
              </div>
              <div class="blok-other-projects__logo blok-other-projects__logo__resident">
                <a href="http://resident.house/" target="_blank"><img src="/img/icons/resident_logo_color.svg" alt="RESIDENT Concept House" title="RESIDENT Concept House"></a>
              </div>
            </div>
            <div class="slick-carousel__custom-nav__container">
              <span class="slick-carousel__custom-nav slick-carousel__custom-nav__prev-slide"></span>
              <span class="slick-carousel__custom-nav slick-carousel__custom-nav__next-slide"></span>
            </div>
          </div>
            <!-- <a class="not_found_page__main-link navigation__link-b" href="https://einstein.house">На головну</a> -->
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">

    if($('.other-projects__slick-carousel').length) {
        $('.other-projects__slick-carousel').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow: $('.slick-carousel__custom-nav__prev-slide'),
            nextArrow: $('.slick-carousel__custom-nav__next-slide'),
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    }
    </script>


	<? endif; ?>
