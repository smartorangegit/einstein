<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0');
session_start();
include ("../../admin/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
$check = $DB->query("SELECT * FROM `users`");
while ($myrow = mysqli_fetch_array($check)) {

    $sec_k = $myrow['sec_code'];
}
//echo '<pre>'; print_r($_SERVER); echo '</pre>';
$uri = explode("/",$_SERVER['PHP_SELF']);
//print_r($uri);
$kod = $uri[2];

$sel = $DB->query("SELECT * FROM `news` WHERE `news_code`='$kod'");
while ($myrow = mysqli_fetch_array($sel))
{
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <?php mb_internal_encoding("UTF-8"); ?>

    <title><?=$myrow['title_ua'];?></title>
    <meta name="description"
          content="<?=$myrow['description_ua'];?>">
    <meta property="og:title" content="<?=$myrow['title_ua'];?>"/>
    <meta property="og:description"
          content="<?=$myrow['description_ua'];?>"/>
    <meta property="og:image" content="<?=$_SERVER['HTTP_HOST'].$myrow['img_path'].'/'.$myrow['img_name'];?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI']; ?>"/>
    <link rel="stylesheet" href="/css/intlTelInput.css">
    <link rel="stylesheet" href="/css/main.min.css">
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

        .top-callback__link_other:hover .phoneRingo {
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
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCWCW9Z"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper">
    <?php include('../../include/header.php'); ?>
    <main class="content news-page">
        <div class="news-page__inner">
            <div class="news-page__page-caption">
                <div class="news-page__caption">Новини</div>
            </div>
            <div class="news-page__page-description">
                <div class="news-page__date-time-wrap">
                    <div class="news-page__date-time-inner">
                        <div class="news-page__time">
                            <img class="news-wrapper__icon" src="/img/news-page/icon-clock.svg" alt="clock">
                            <span><?=$myrow['time'];?></span>
                        </div>
                        <div class="news-page__date">
                            <img src="/img/news-page/icon-calendar.svg" alt="calendar">
                            <span><?=$myrow['date'];?></span>
                        </div>
                    </div>
                    <!-- / end news-page__date-time-wrap -->
                    <h1 class="news-page__content-description"><?=$myrow['name_news_ua'];?></h1>
                </div>
                <!-- <h3 class="news-page__content-description">Будівельні роботи</h3> -->
                <div class="news-page__gallery">
                    <div class="news-page__gallery-main-img">
                        <img src="<?=$myrow['img_path'].'/'.$myrow['img_name'];?>" alt="img">
                    </div>
                    <!-- <ul class="news-page__list">
                        <li class="news-page__item">
                                <img src="img/news-page/ex2.jpg" alt="/">
                        </li>
                        <li class="news-page__item">
                            <img src="img/news-page/ex2.jpg" alt="/">
                        </li>
                        <li class="news-page__item">
                            <img src="img/news-page/ex2.jpg" alt="/">
                        </li>
                        <li class="news-page__item">
                            <img src="img/news-page/ex2.jpg" alt="/">
                        </li>
                    </ul> -->
                </div>
                <!-- / end news-page__gallery -->
                <div class="news-page__content">
                    <?=$myrow['full_text_ua'];?>

                </div>
                <!-- /end news-page__content -->
            </div>
            <!-- / end news-page__page-description -->
        </div>
        <!-- / end news-page__inner -->
    </main>
    <?php include('../../include/footer_main.php');
    }?>
