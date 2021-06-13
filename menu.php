<?php require "includes/cfg.php";
$rest_dishes = mysqli_query($connection, "SELECT * FROM dishes WHERE dish_type='rest'");
$common_dishes = mysqli_query($connection, "SELECT * FROM dishes WHERE dish_type='common'");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькуляция готовых блюд</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Sintony:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="menu">
    <header class="header">
        <div class="container">
            <div class="main_header">
                <div class="row">
                    <div class="col-lg-3">
                        Выполнил: студент группы ПО-41
                        <br />
                        Дмитрий Валиев

                    </div>
                    <div class="col-lg-9">
                        <nav>
                            <ul class="menu d-flex justify-content-center">
                                <li class="menu_item">
                                    <a href="./">Главная</a>
                                </li>
                                <li class="menu_item">
                                    <a href="./menu.php">Меню</a>
                                </li>
                                <li class="menu_item">
                                    <a href="./menu.php#rest">Ресторанные блюда</a>
                                </li>
                                <li class="menu_item">
                                    <a href="./menu.php#common">Блюда общепита</a>
                                </li>

                            </ul>

                        </nav>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <form name="search" method="post" action="./search.php">
                        <input class="form-control" type="search" name="query" placeholder="Поиск" style="display: inline;width: 200px;">
                        <button class="btn btn-primary" type="submit">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <h1 id="rest" style="font-family: Calibri; font-size: 40px; font-weight: 900; text-align: center;">Ресторанные блюда </h1>
            <div class="row">

                <?php while ($res = mysqli_fetch_assoc($rest_dishes)) { ?>
                    <?php $ingridients = json_decode($res['ingridients'], true) ?>
                    <div class="col-lg-4 my-5">
                        <div class="container bg-warning" style="color: blue;height: 260px !important; border-radius: 20px; padding-top: 15px; border: 4px solid orange; box-shadow: #333 10px 20px 0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="<?php echo $res['dish_img'] ?>" class="w-100" alt="">
                                </div>
                                <div class="col-lg-7" style="max-height: 100px;">
                                    <text style="font-size: 12px; max-height: 100px !important">
                                        <?php echo '<ul style="height: 100px; word-wrap:break-word">';
                                        foreach ($ingridients as $ingridient) {
                                            echo ('<li>' . $ingridient['name'] . ' - ' . $ingridient['weight'] . ' г ' . '</li>');
                                        }
                                        echo ('</ul>')
                                        ?>
                                    </text>
                                </div>
                            </div>
                            <div class="row my-2 d-flex flex-column">
                                <div class="col-lg-6" style="color: red">
                                    <!-- <?php echo $res['dish_price'] ?> -->
                                    <a class="btn btn-outline-success buy" href="./dish.php?id=<?php echo ($res['dish_id']) ?>">Перейти</a>
                                    <!-- <button class="btn btn-outline-success buy" data-name=" <?php echo $res['dish_name'] ?>" data-price="<?php echo $res['dish_price'] ?>" data-ingridients="<?php echo $res['dish_ingridients'] ?>">Заказать</button> -->
                                </div>
                                <div class="col-lg-6" style="color: indigo">
                                    <?php echo $res['dish_name'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="container">
            <h1 id="common" style="font-family: Calibri; font-size: 40px; font-weight: 900; text-align: center;">Блюда общепита </h1>
            <div class="row">

                <?php while ($res = mysqli_fetch_assoc($common_dishes)) { ?>
                    <?php $ingridients = json_decode($res['ingridients'], true) ?>
                    <div class="col-lg-4 my-5">
                        <div class="container bg-warning" style="color: blue;height: 260px !important; border-radius: 20px; padding-top: 15px; border: 4px solid orange; box-shadow: #333 10px 20px 0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="<?php echo $res['dish_img'] ?>" class="w-100" alt="">
                                </div>
                                <div class="col-lg-7" style="max-height: 100px;">
                                    <text style="font-size: 12px; max-height: 100px !important">
                                        <?php echo '<ul style="height: 100px; word-wrap:break-word">';
                                        foreach ($ingridients as $ingridient) {
                                            echo ('<li>' . $ingridient['name'] . ' - ' . $ingridient['weight'] . ' г ' . '</li>');
                                        }
                                        echo ('</ul>')
                                        ?>
                                    </text>
                                </div>
                            </div>
                            <div class="row my-2 d-flex flex-column">
                                <div class="col-lg-6" style="color: red">
                                    <!-- <?php echo $res['dish_price'] ?> -->
                                    <a class="btn btn-outline-success buy" href="./dish.php?id=<?php echo ($res['dish_id']) ?>">Перейти</a>
                                    <!-- <button class="btn btn-outline-success buy" data-name=" <?php echo $res['dish_name'] ?>" data-price="<?php echo $res['dish_price'] ?>" data-ingridients="<?php echo $res['dish_ingridients'] ?>">Заказать</button> -->
                                </div>
                                <div class="col-lg-6" style="color: indigo">
                                    <?php echo $res['dish_name'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </main>
    <script src="./js/main.js"></script>
</body>

</html>