<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Чернобыльский Спецкомбинат</title>
	<link href="<?php echo get_template_directory_uri() ?>/img/favicon.ico" rel="icon">
	<?php wp_head(); ?>
</head>
<body>

<header data-type="background" data-speed="5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_big.svg" alt="logo">
			</div><!-- col -->
			<div class="col-sm-6">
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</header>

<section id="about">
	<div class="container">
		<h2>Про підприємство</h2>
		<div class="row">
			<div class="col-sm-6">
				<p>Державне спеціалізоване підприємство «Чорнобильський спецкомбінат» було засновано наказом міністерства надзвичайних ситуацій № 1086 від 09.12.2010 р. з метою підвищення ефективності управління державним майном та оптимізації суб’єктів господарювання, які належать до сфери управління МНС та підпорядковані державному департаменту – Адміністрації зони відчуження та зони безумовного (обов’язкового) відселення.</p>
			</div><!-- col -->
			<div class="col-sm-6">
				<p>ДСП «Чорнобильський спецкомбінат» є правонаступником функцій, майнових прав і обов’язків ДСП «РУЗОД», ДП «Чорнобильсервіс», ДП «СБК», ДСНВП «Екоцентр», ДСКП «Чорнобильська Пуща», ДСВКВП «ЧВЕ», а також ДСП «Комплекс» у частині отриманих прав і обов’язків останнього щодо виконання функцій з дезактивації радіаційно забруднених матеріалів.</p>
			</div><!-- col -->
		</div><!-- row -->
	</div><!--container -->
</section><!-- about -->

<section id="services">
	<div class="container">
		<h2>Послуги</h2>
		<div class="row">
			<div class="col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_delivery.svg" alt="icon delivery">
				<ul>
					<li>перевезення радіоактивних відходів</li>
					<li>надання транспортних послуг</li>
					<li>забезпечення паливно-мастильними матеріалами</li>
				</ul>
			</div><!-- col -->
			<div class="col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_hotel.svg" alt="icon hotel">
				<ul>
					<li>надання житлово-комунальних послуг</li>
					<li>забезпечення тепло-, водо-, електропостачанням</li>
				</ul>
			</div><!-- col -->
			<div class="col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_cutlery.svg" alt="icon cutlery">
				<ul>
					<li>надання трьохразового лікувально-профілактичного харчування</li>
					<li>забеспечення в послугах зв’язку та інтернету</li>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- services -->

<section id="contact">
	<div class="container">
		<h2>Контакти</h2>
		<div class="row">
			<div class="col-sm-6">
				<ul>
					<li>Державне спеціалізоване підприємство «Чорнобильський спецкомбінат»</li>
					<li>State specialized enterprise «Chornobyl spetskombinat»</li>
				</ul>
			</div><!-- col -->
			<div class="col-sm-6">
				<ul>
					<li><span class="glyphicon glyphicon-map-marker"></span>Київській обл., м. Чорнобиль, вул.Радянська, 70</li>
					<li><span class="glyphicon glyphicon-phone-alt"></span>+380459351632</li>
					<li><span class="glyphicon glyphicon-envelope"></span>office@speckombinat.org.ua</li>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
		<div class="row">
			<div class="col-sm-12">
				<div id="map" style="width: 100%; height: 500px"></div>
			</div>
		</div>
	</div><!-- container -->
</section><!-- contact -->

<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="row">
					<div class="col-sm-6 my-nav">
						<ul>
							<li><a href="#">оголошення</a></li>
							<li><a href="#">вакансії</a></li>
							<li><a href="#">план закупівель</a></li>
						</ul>
					</div><!-- col -->
					<div class="col-sm-6 my-nav">
						<ul>
							<li><a href="#">телефони</a></li>
							<li><a href="#">перепустка</a></li>
							<li><a href="#">архіви</a></li>
						</ul>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- col -->
			<div class="col-xsq-6 my-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_small.svg" width="80px">
				<p>2016 &copy; Спецкомбинат</p>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</footer>

<?php wp_footer(); ?>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
	ymaps.ready(init);

	function init(){
		myMap = new ymaps.Map("map", {
			center: [51.27138754, 30.22168257], // Чернобыль
			zoom: 17,
		});

		myPlacemark = new ymaps.Placemark([51.27138754, 30.22168257], {
			hintContent: 'Чорнобильський спецкомбінат',
			balloonContent: 'Чорнобильський спецкомбінат'
		});

		myMap.geoObjects.add(myPlacemark);
	}
</script>

</body>
</html>