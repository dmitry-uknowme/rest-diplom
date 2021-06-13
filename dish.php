<?php require "includes/cfg.php";
$dish_id = $_GET['id'];
$dish_query = mysqli_query($connection, "SELECT * FROM `dishes` WHERE dish_id ='" . $dish_id . "';");
$res = mysqli_fetch_assoc($dish_query);
$prices = json_decode($res['dish_price']);
$max_dishes = 6
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo ($res['dish_name']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="dish" style="background: url(<?php echo ($res['dish_img']) ?>); background-size: cover;
    backdrop-filter: blur(3px);
    backdrop-filter: brightness(69%);">
    <?php $ingridients = json_decode($res['ingridients'], true) ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-2" style="display: flex; justify-content: center; align-items: center; margin-top: -200px;">
                <?php if ($dish_id > 1) { ?>
                    <a class="btn btn-primary" href="./dish.php?id=<?php echo ($dish_id - 1) ?>">Предыдущее блюдо</a>
                <?php } ?>
            </div>
            <div class="col-lg-8 my-5">
                <div class="container bg-warning" style="color: blue;height: auto; border-radius: 20px; padding-top: 15px; border: 4px solid orange; box-shadow: #333 10px 20px 0">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="<?php echo $res['dish_img'] ?>" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <text style="font-size: 15px;">
                                <?php echo '<ul class="ingridient-list" style="height: 100px; word-wrap:break-word">';
                                foreach ($ingridients as $ingridient) { ?>
                                    <li class="ingridient-item" data-name="<?php echo ($ingridient['name']) ?>" data-weight="<?php echo ($ingridient['weight']) ?>" data-price="<?php echo ($ingridient['price']) ?>">
                                        <?php echo ($ingridient['name'] . ' - ' . '<span>' . $ingridient['weight'] . '</span' . ' г ') ?>
                                    </li>
                                <?php }
                                echo ('</ul>')
                                ?>
                            </text>



                        </div>
                        <div class="col-lg-3">

                            <?php foreach ($ingridients as $ingridient) { ?>
                                <div class="col-lg-12 ingridient-price" data-price="<?php echo $ingridient['price'] ?>">
                                    <span class="ingridient-count-p" data-price="<?php echo $ingridient['price'] ?>"><?php echo $ingridient['price'] * 1000 ?>р / 1000 г</span>
                                </div>
                            <?php } ?>
                            <div class="col-lg-12 ingridient-price-total">
                                Всего:
                            </div>
                        </div>
                    </div>
                    <div class=" row my-2 d-flex flex-column">
                        <div class="col-lg-6" style="color: indigo">
                            <?php echo $res['dish_name'] ?>
                        </div>


                    </div>
                </div>
                <div class="count">
                    <h2 style="margin-top:100px">Количество порций: <span class="count__number"></span>
                    </h2>

                    <!-- <input type="number" class="count__input" style="width: 100%;"> -->
                    <input type="range" min="1" value="1" step="1" max="200" class="count__input" style="width: 100%;">
                </div>
                <a href="./" class="my-5 d-block">
                    <h2 class="text-center">На главную</h2>
                </a>
            </div>
            <div class="col-lg-3" style="display: flex;
    justify-content: center;
    align-items: center;
   ">
                <?php if ($dish_id < $max_dishes) { ?>
                    <a class="btn btn-primary" href="./dish.php?id=<?php echo ($dish_id + 1) ?>">Следующее блюдо</a>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="./js/main.js"></script>
</body>