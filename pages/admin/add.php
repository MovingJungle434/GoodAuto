<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/scss.css">
</head>

<body>
    <?php require_once ("../../include/db.php");
    $id = $_REQUEST['id'];
    $car = mysqli_query($esql, "SELECT * FROM `cars` WHERE `id` = '$id'");
    $resalt = mysqli_fetch_array($car)
        ?>
    <section class="add">
        <div class="container">
            <div class="next_layer hide">
                <div class="np_menu">
                    <h1>Are you sure?</h1>
                    <div>
                        <a href="#" id="cancel">BACK</a>
                        <a href="handl/download_delete.php?id=<?php echo $resalt['id'] ?>">DELETE</a>
                    </div>
                </div>
            </div>
            <nav>
                <a href="/pages/admin/show_car.php">Back</a>
                <a href="#" id="delete">Delete</a>
            </nav>
            <div class="botton_form">
                <h1>
                    Add Car
                </h1>
                <form action="handl/download.php?id=<?php echo $resalt['id'] ?>" method="post"
                    enctype="multipart/form-data">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo $resalt['name'] ?>">
                    </div>
                    <div>
                        <label for="origin">Origin</label>
                        <input type="text" name="origin" value="<?php echo $resalt['origin'] ?>">
                    </div>
                    <div>
                        <label for="mileage">Mileage</label>
                        <input type="text" name="mileage" value="<?php echo $resalt['mileage'] ?>">
                    </div>
                    <div>
                        <label for="cubic_capacity">Cubic Capacity</label>
                        <input type="text" name="cubic_capacity" value="<?php echo $resalt['cubic_capacity'] ?>">
                    </div>
                    <div>
                        <label for="power">Power</label>
                        <input type="text" name="power" value="<?php echo $resalt['power'] ?>">
                    </div>
                    <div>
                        <label for="fuel">Fuel</label>
                        <input type="text" name="fuel" value="<?php echo $resalt['fuel'] ?>">
                    </div>
                    <div>
                        <label for="availability">Availability</label>
                        <input type="text" name="availability" value="<?php echo $resalt['availability'] ?>">
                    </div>
                    <div>
                        <label for="vehicle_condition">Vehicle Condition</label>
                        <input type="text" name="vehicle_condition" value="<?php echo $resalt['vehicle_condition'] ?>">
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="text" name="price" value="<?php echo $resalt['price'] ?>">
                    </div>
                    <div>
                        <label for="main_image">Main Image</label>
                        <input type="file" name="main_image">
                    </div>
                    <button>Submit</button>
                </form>
                <form action="handl/download_car_image.php" method="post" enctype="multipart/form-data" id="extra_image">
                    <div>
                        <label for="file">Extra Image</label>
                        <input type="file" name="file">
                        <input type="hidden" value="<?php echo $resalt['id'] ?>" name="car_id">
                    </div>
                    <button>Submit</button>
                </form>
                <?php $images = mysqli_query($esql, "SELECT * FROM `photos` WHERE `car_id` = '$id'");
                foreach ($images as $image) { ?>
                    <div class="show_image">
                        <img src="<?php echo $image['image'] ?>" alt="error">
                        <div>
                            <h1>Delete Image</h1>
                            <form action="handl/download_show_image_delete.php?id=<?php echo $image['id'] ?>"
                                enctype="multipart/form-data">
                                <button>DELETE</button>
                                <input type="hidden" value="<?php echo $image['id'] ?>" name="id">
                                <input type="hidden" value="<?php echo $resalt['id'] ?>" name="car_id">
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="/js/add.js"></script>
</body>

</html>