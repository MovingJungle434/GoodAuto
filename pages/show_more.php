<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodAuto</title>
    <link rel="shortcut icon" href="/image/Rater_Group_Logo_2.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/scss.css">
</head>

<body>
    <?php require_once ("../include/db.php");
    $id = $_REQUEST['id']; ?>
    <section class="show_more">
        <div class="show_more_close">
            <a href="/#roll" class="more_product"><i class="fa-solid fa-arrow-left"></i>
                <p>More products</p>
            </a>
            <a href="/#roll" class="icon_xmar"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="container">
            <div class="show_more_left">
                <div class="slider">
                    <?php
                    $images = mysqli_query($esql, "SELECT * FROM `photos` WHERE `car_id` = '$id'");
                    foreach ($images as $image) { ?>
                        <div class="item">
                            <img src="<?php echo $image['image'] ?>">
                        </div>
                    <?php } ?>
                    <a class="previous" onclick="previousSlide()">&#10094;</a>
                    <a class="next" onclick="nextSlide()">&#10095;</a>
                    <div class="images_more_div">
                        <?php foreach ($images as $image) { ?>
                            <div class="image_more">
                                <img src="<?php echo $image['image'] ?>" alt="">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="show_more_right">
                <div class="relative">
                    <?php
                    $resalt = mysqli_query($esql, "SELECT * FROM `cars` WHERE `id` = '$id'");
                    $car = mysqli_fetch_array($resalt) ?>
                    <div class="child">
                        <div>
                            <?php if (!empty($car['name'])) { ?>
                                <h1>
                                    <?php echo $car['name'] ?>
                                </h1>
                            <?php }
                            if (!empty($car['origin'])) { ?>
                                <div>
                                    <h2>Origin</h2>
                                    <p><?php echo $car['origin'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['mileage'])) { ?>
                                <div>
                                    <h2>Mileage</h2>
                                    <p><?php echo $car['mileage'] ?> km</p>
                                </div>
                            <?php }
                            if (!empty($car['cubic_capacity'])) { ?>
                                <div>
                                    <h2>Cubic Capacity</h2>
                                    <p><?php echo $car['cubic_capacity'] ?> ccm</p>
                                </div>
                            <?php }
                            if (!empty($car['power'])) { ?>
                                <div>
                                    <h2>Power</h2>
                                    <p><?php echo $car['power'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['fuel'])) { ?>
                                <div>
                                    <h2>Fuel</h2>
                                    <p><?php echo $car['fuel'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['availability'])) { ?>
                                <div>
                                    <h2>Availability</h2>
                                    <p><?php echo $car['availability'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['vehicle_condition'])) { ?>
                                <div>
                                    <h2>Vehicle Condition</h2>
                                    <p><?php echo $car['vehicle_condition'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['price'])) { ?>
                                <div class="price">
                                    <h2>$<?php echo $car['price'] ?></h2>
                                </div>
                            <?php } ?>
                            <a href="order_menu.php?id=<?php echo $car['id'] ?>">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/3e6f2e281b.js" crossorigin="anonymous"></script>
    <script src="/js/slider.js"></script>
</body>

</html>