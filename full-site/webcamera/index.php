<?php include_once('../include/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>Вебкамера на будівництві EINSTEIN Concept House, слідкуйте за ходом робіт онлайн</title>
	<meta name="description" content="EINSTEIN Concept House - вебкамера на будівництві, слідкуйте за ходом робіт онлайн м. Київ, вул. Златоустівська, 24А">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="alternate" hreflang="uk" href="https://einstein.house<?php echo $_SERVER['REQUEST_URI'];?>" />
	<link rel="alternate" hreflang="ru" href="https://einstein.house<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']; ?>"/>
	<link rel="stylesheet" href="/css/intlTelInput.css">
	<link rel="stylesheet" href="/css/main.min.css">
	<style>
	@media (max-width: 750px) {
	 .default .phoneRingo {
			color: #002442 !important;
		}
	/* .default .navigation {
    float: right;
    width: 100%;
    background: rebeccapurple;
} */
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
			color: #fff;
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
<?php include('../include/header.php'); ?>
	<main class="content">
		<div class="webcamera">
			<div class="webcamera__inner">
				<div class="webcamera__page-caption">
					<h1 class="webcamera__caption">ВЕБКАМЕРА</h1>
					<p class="webcamera__top-text">Завершення будівництва – II квартал 2018 року</p>
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
