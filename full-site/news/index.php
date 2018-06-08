<?php include_once('../include/utm.php'); 
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0');
session_start();
include("../admin/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
$selCuDB = $DB->query("SELECT COUNT(1) FROM `news`");
$curCountDb = mysqli_fetch_array($selCuDB);
$collN = floor($curCountDb[0]/4);
$zwqe = 2.7;
//echo intval($zwqe);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Останні новини від житлового комплексу EINSTEIN Concept House</title>
    <meta name="description"
          content="EINSTEIN Concept House - останні новини від житлового комплексу м. Київ, вул. Златоустівська, 24А">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <? if(intval($_GET['page'])!= $collN):?>
        <link rel="next" href="<?if(intval($_GET['page'])==""){echo "https://einstein.house/news/?page=2/";}
        else{if($collN>=1){echo "1";}else{echo "https://einstein.house/news/?page".intval($_GET['page']+1).'/';}}?>">
    <? endif; ?>

    <?if(intval($_GET['page'])>=2){?><link rel="prev" href="<?if(intval($_GET['page'])==2){echo "https://einstein.house/news/";}
    else{echo 'https://einstein.house/news/?page='.(intval($_GET['page'])-1).'/';}?>"><?}?>

    <link rel="stylesheet" href="/css/intlTelInput.css">
    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="alternate" hreflang="uk" href="https://einstein.house/news/"/>
    <link rel="alternate" hreflang="ru" href="https://einstein.house/ru/news/"/>
    <link rel="canonical" href="https://einstein.house/news/"/>
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

<div class="wrapper">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>

    <!--
        19/08/17 Alex-K, new style for header
            Completely new
    -->
    <?php include('../include/header.php'); ?>

    <main class="content">
        <div class="news-feed">
            <div class="news-feed__inner">
                <div class="news-feed__page-caption">
                    <h1 class="news-feed__caption">Новини</h1>
                </div>
                <ul class="news-feed__list">
                    <?php mb_internal_encoding("UTF-8"); ?>
                    <?
                    $q = intval($_GET['page']);
                    if($_GET['page'] =="") {
                        $lA=0;
                        $lB=$lA+4;
                    }
                    else{
                        $lA = $q;
                        $lB = $lA+4;
                    }
                    //echo $q.'-'.$lA.'-'.$lB;
                    $sel = $DB->query("SELECT * FROM `news`ORDER BY `date` DESC LIMIT $lA,$lB;");
                    while ($myrow = mysqli_fetch_array($sel))
                    {
                        ?>
                        <li class="news-feed__item">
                            <div class="news-feed__news-wrapper">
                                <div class="news-feed__top">
                                    <div class="news-feed__news-time">
                                        <img src="/img/news/clock.svg" alt="clock">
                                        <span><?=$myrow['time'];?></span>
                                    </div>
                                    <div class="news-feed__news-date">
                                        <img src="/img/news/calendar.svg" alt="calendar">
                                        <span><?=$myrow['date'];?></span>
                                    </div>
                                </div>
                                <!-- / end news-wapper-top -->
                                <div class="news__image_container" style="background-image: url(<?=$myrow['img_path'];?>/<?=$myrow['img_name'];?>)">
                                </div>
                                <div class="news-feed__blok-inner">
                                    <div class="news-feed__description"><?=$myrow['name_news_ua'];?></div>
                                    <p class="news-feed__text"><?=$myrow['min_text_ua'];?></p>
                                    <a class="news-feed__link" href="<?=$myrow['news_code'];?>/">Детальніше</a>
                                </div>
                                <!-- /end news-wrapper__inner -->
                            </div>
                            <!-- / end news-wrapper -->
                        </li>
                    <?}?>

                </ul>
                <div class="pagination">
                    <a <?if($_GET['page'] ==""){echo "class='active'";}?> href="/news/">1</a>
                    <a <?if($_GET['page'] == 2){echo "class='active'";}?> href="#" data-number="2" onClick="showUser(this.getAttribute('data-number')); return false;">2</a>
                </div> 

            <!-- / end news-feed__inner -->
        </div>
        <!-- /end news-feed -->
    </main>

    <!--
    New footer__inner add inside
    17/08/17 Alex-K
-->
<?php include('../include/footer.php'); ?>
</div>
<!-- /end wrapper -->

<!--
	Add jQuety.min.js, jquery.magnific-popup.min.js, common.js
	Commented scripts.min.js

	17/08/17 Alex-K
-->

<script src="/js/jquery.magnific-popup.min.js"></script>
<script>
    function showUser(str) {
        location.replace("/news/index.php?page="+str+"/");
    }
</script>
<!--<script src="/js/scripts.min.js"></script>-->

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCWCW9Z"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>

