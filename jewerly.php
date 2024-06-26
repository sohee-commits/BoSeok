<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>
			Ювелирные изделия | BOSEOK - Серьги, Кольца и другие Ювелирные изделия
		</title>
		<link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
		<!-- css -->
		<link rel="stylesheet" href="./css/main.css" />
		<link rel="stylesheet" href="./css/catalog.css" />
		<!-- js -->

		<script src="./js/renderJewerly.js" defer></script>
		<script src="./js/jewerly.js" defer></script>
	</head>

	<body>
		<section class="ad">
			<p class="small bold">
				СКОРО ЗАКОНЧИТСЯ! Бриллиантовые гвоздики при покупке на сумму более 10
				000 РУБ. >
			</p>
		</section>

		<?php require_once ('./header.php'); ?>

		<main>
			<section class="catalog">
				<p class="h2 bold">Ювелирные изделия</p>
				<!-- cards -->
				<section class="cards">
					<!-- reactive -->
				</section>
			</section>

			<section class="where">
				<div class="image">
					<img src="./assets/index/where/2.png" alt="preview" />
				</div>
				<p class="h2 bold">Мы здесь для вас</p>
				<p>
					Сделайте свой наряд более индивидуальным, чем когда-либо. Идеальный
					подарок себе или близкому человеку.
				</p>
				<a href="https://yandex.ru/maps/-/CDFvFIkT" target="_blank" class="btn-secondary">Посмотреть на карте</a>
			</section>
		</main>
		<?php require_once ('./footer.php'); ?>

		<section class="cr">
			<p class="small">&copy; BOSEOK, 2024</p>
			<a href="https://icons8.com" class="small">icons by icons8</a>
			<a href="https://github.com/sohee-commits" class="small">
				developer: sohee-commits
			</a>
		</section>
	</body>

</html>