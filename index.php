<?php require "includes/cfg.php";
$dishes = mysqli_query($connection, 'SELECT * FROM dishes ORDER BY dish_id LIMIT 2');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Калькуляция готовых блюд</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Sintony:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="main_header">
				<div class="row">
					<div class="col-lg-3">
						Выполнил: студент группы ПО-41
						<br/>
						Дмитрий Валиев
					</div>
					<div class="col-lg-8">
						 <nav>
                            <ul class="menu d-flex justify-content-center">
                                <li class="menu_item">
                                    <a href="./">Главная</a>
                                </li>
                                <li class="menu_item">
                                    <a href="./menu.php">Меню</a>
                                </li> <li class="menu_item">
                                    <a href="./menu.php#rest">Ресторанные блюда</a>
                                </li> <li class="menu_item">
                                    <a href="./menu.php#common">Блюда общепита</a>
                                </li>
                            </ul>
                        </nav>
					</div>
				</div>
			</div>
	</header>

	<section class="offer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title">
						<h1 class="title_heading">Калькуляция себестоимости готовых блюд </h1>
						<p class="title_intro"><span>ресторанов и предприятий общепита</span></p>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="history">
						<h2 class="history_title">О нашем сайте</h2>
						<p class="history_text">Наш сайт создан специально для различных заведений, ресторанов для помощи в калькуляции различных блюд, холодных и горячих.

							Наш сайт так же сделан и для домашних кухонь, что бы не напрягаться с калькуляции вручную.

							На нашем сайте очень удобная и простая калькуляция различных блюд, даже ребенок сможет узнать сколько грамм того или иного ингридиента ему понадобится для того что бы он смог приготовить какое то блюдо на несколько персон.
							</p>
						<a href="./menu.php" class="cta history_button">
							Посмотреть блюда
						</a>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="food-images food-images-down">
						<img src="img/food1.jpg" alt="" class="food-images_item">
						<img src="img/food2.jpg" alt="" class="food-images_item">
					</div>
				</div>
				<div class="col-lg-3">
					<div class="food-images">
						<img src="img/food3.jpg" alt="" class="food-images_item">
						<img src="img/food4.jpg" alt="" class="food-images_item">
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section class="special">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="special_title">
						Специальное преложение
					</h2>
				</div>
			</div>
			<div class="row">
				<?php while ($res = mysqli_fetch_assoc($dishes)) { ?>
					<div class="col-lg-6">
						<div class="food">
							<img src="<?php echo $res['dish_img'] ?>" class="food_img w-100">
							<h3 class="food_title">
								<?php echo $res['dish_name'] ?>
							</h3>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<footer>

	</footer>
</body>

</html>