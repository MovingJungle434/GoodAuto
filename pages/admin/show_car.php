<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/scss.css">
</head>

<body>
    <section class="show_car">
        <div class="container">
            <div class="show_car_a">
                <a href="choose.php">Back</a>
            </div>
            <?php
            require_once("../../include/db.php");
            session_start();
            if (!isset($_SESSION['admin'])) {
                header('Location: /');
            }
            $cars = mysqli_query($esql, "SELECT * FROM `cars`");
            foreach ($cars as $car) {
                ?>
                <div>
                    <?php if (!$car['name']) {
                        ?>
                        <p>New Car</p>
                    <?php } else { ?>
                        <p> <?php echo $car['name'] ?></p>
                    <?php } ?>
                    <a href="add.php?id=<?php echo $car['id'] ?>">Edit</a>
                </div>
                <hr>
                <?php
            } ?>
        </div>
    </section>
</body>

</html>